<?php
require_once('conection.php');

class Consultas
{
    private $pdo;

    public function __construct()
    {   
        
        $db = new DB();
        $this->pdo = $db->connect();
    }

    public function __destruct()
    {
        // close the database connection
        $this->pdo = null;
    }

    public function GetAreas()
    {
        $TABLE = 'area';
        $sql = "SELECT * FROM $TABLE INNER JOIN imagen WHERE imgar = idimg";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll();
    }

    public function DatosUsuario($idUser)
    {
        // datos del usuario
        $VIEW = 'view_profile_privado';
        $query = "SELECT * FROM $VIEW WHERE usid = ?";
        $stmt = $this->pdo->prepare($query);
        $stmt->execute([$idUser]);
        return $stmt->fetch();
    }

    public function ComentariosUsuario($idUser)
    {
        $query = "SELECT comentario, calif, apodo, uscoment.created_at AS fecha
            FROM uscoment
            JOIN usuario ON usiddo = usuario.id
            WHERE usiddir = ?";
        $stmt = $this->pdo->prepare($query);
        $stmt->execute([$idUser]);
        return $stmt->fetchAll();
    }

    public function GetSexos()
    {
        $sql = "SHOW COLUMNS FROM usuario LIKE 'sexo'";
        $result = $this->pdo->prepare($sql);
        $result->execute();
        $row = $result->fetch();
        $type = $row['Type'];
        preg_match('/enum\((.*)\)$/', $type, $matches);
        $vals = explode(',', $matches[1]);
        $trimmedvals = array();
        foreach ($vals as $key => $value) {
            $value = trim($value, "'");
            $trimmedvals[] = $value;
        }
        return $trimmedvals;
    }

    public function GetForaneasUsuario($idUser)
    {
        $sql = "SELECT arid, dirid, foto as imgid  FROM usuario WHERE id = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$idUser]);
        return $stmt->fetch();
    }

    public function GetForaneasTrabajo($idTrabajo)
    {
        $sql = "SELECT arid, usid, foto  FROM trabajos WHERE idetrab = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$idTrabajo]);
        return $stmt->fetch();
    }

    ////BUSQUEDA DE EMPLEO
    public function getAllJobs($word,$filtros,$pagepost,$from,$currentUser){

        $output='';
        $sql = "SELECT * FROM trabajos INNER JOIN imagen, area WHERE foto = idimg AND arid = area.id";
        
        if($word !=''){
            $sql .= " AND trabajos.nomta LIKE '%".$word."%'";
        }
        if($filtros != ''){
            $sql .= " AND area.nombre IN('".$filtros."')";
        }
            //variables de paginacion
            $limit = 10; //numero de cards que se veran
            $page = 1;  //numero de pagina por defecto
            if($pagepost > 1){
                $start = (($pagepost - 1)*$limit);
                $page = $pagepost;
            }else{
                $start = 0;
            }

            $filter_sql = $sql." LIMIT ".$start.", ".$limit." "; 
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute();
            
            $total_data = $stmt->rowCount();
            $total_pages = ceil($total_data/$limit);

            $stmt = $this->pdo->prepare($filter_sql);
            $stmt->execute();
            $resultado = $stmt->fetchAll();
            
            $contenido = ''; //contenido de cada card
            $nomta = '';
            $texto_boton = ''; //texto cuando este en interesados
            $color_boton = ''; //color cuando este en interesados


            if(!empty($resultado)){
                
                    foreach ($resultado as $job) {
                        //Revisamos en que trabajos ya se intereso el usuario
                        if($currentUser != ''){
                            if($this->CheckInteresados($job['idetrab'],$currentUser)===true){
                                $texto_boton = "Interesado";
                                $color_boton = "#1597bb";
                            }else{
                                $texto_boton = "Me interesa";
                                $color_boton = "#23B439";
                            }
                        }else{
                            $texto_boton = "Me interesa";
                            $color_boton = "#23B439";
                        }
                        
                        //Si es publico o usuarios, aqui vemos que poner o no
                        if($from==1){
                            $nomta = $job['nomta'];
                            $contenido = "
                            <!--Columna lado derecho-->
                            <div class='col-md-8 col-lg-8 pr-5 pt-3 item align-self-center'>

                                <!--Fila del empleador-->
                                <div class='row'>
                                    <div class='col'>
                                    <label  class='texto' for=''><strong>Usuario o empresa</strong></label>
                                    <label class='form-control-plaintext subtitulo' type='text' value='' readonly style='border-bottom-color:#ada2a2; text-align: justify;'>".$job['empleador']."</label>
                                    </div>
                                </div>
                                <br>

                                <!--Fila de área y especialidad-->
                                <div class='row'>
                                    <div class='col pb-2'>
                                    <label class='texto'for=''><strong>Área</strong></label>
                                    <label class='form-control-plaintext subtitulo' type='text' value='' readonly style='border-bottom-color:#ada2a2; text-align: justify;'>".$job['nombre']."</label>
                                    </div>
                                    <div class='col pb-2'>
                                    <label class='texto'for=''><strong>Especialidad</strong></label>
                                    <label class='form-control-plaintext subtitulo' type='text' value='' readonly style='border-bottom-color:#ada2a2; text-align: justify;'>".$job['espec']."</label>
                                    </div>
                                </div><br>

                                <!--Jornada y sueldo-->
                                <div class='row'>
                                    <div class='col'>
                                    <label class='texto' for=''><strong>Jornada</strong></label>
                                    <label class='form-control-plaintext subtitulo' type='text' value='' readonly style='border-bottom-color:#ada2a2; text-align: justify;'>".$job['tipojor']."</label>
                                    </div>
                                    <div class='col'>
                                    <label class='texto' for=''><strong>Salario</strong></label>
                                    <label class='form-control-plaintext subtitulo' type='text' value='' readonly style='border-bottom-color:#ada2a2; text-align: justify;'>".$job['sal']."</label>
                                    </div>
                                </div><br>

                                <!--Fila de Ubicación-->
                                <div class='row pb-3'>
                                    <div class='col'>
                                    <label class='texto' for=''><strong>Ubicación</strong></label>
                                    <textarea class='form-control-plaintext subtitulo' type='text' value='' readonly style='text-align: justify; height:100px;'>".$job['ubi']."</textarea>
                                    </div>
                                </div>

                                <!--Fila de descripcion-->
                                <div class='row'>
                                    <div class='col'>
                                    <label class='texto' for=''><strong>Descripción del empleo</strong></label>
                                    <textarea class='form-control-plaintext subtitulo' type='text' value='' readonly style='text-align: justify; height:100px;'>".$job['descripcion']."</textarea>
                                    </div>
                                </div><br>

                                <!--Fila de Requisitos-->
                                <div class='row'>
                                    <div class='col'>
                                    <label class='texto' for=''><strong>Requisitos del personal</strong></label>
                                    <textarea class='form-control-plaintext subtitulo' type='text' value='' style='text-align: justify; height:100px;' readonly>".$job['requisitos']."
                                    </textarea>
                                    </div>
                                </div>
                                </div>
                            ";
                        }else{
                            $contenido = "
                            <!--Modal-->
                            <div id='myModal2' class='modal fade' role='dialog'>
    
                                <!--3. Permite ver el contenido del modal -->
                                <div class='modal-dialog' style='height:450px;'>
    
                                    <!--4. Aquí se coloca en condenido del modal-->
                                    <div class='modal-content'>
    
                                    <!--5. Cabecera del modal-->
                                    <div class='modal-header texto'>
                                        <h5 class='modal-title'><strong>Recuerda</strong></h5>
                                        <button type='button' class='close' data-dismiss='modal'>&times;</button>
                                    </div>
    
                                    <!--6. Cuerpo del modal-->
                                    <div class='modal-body'>
    
                                        <!--Contenedor de la sección-->
                                        <!--div class='card-body'-->
                                        <div class='container'>
    
                                            <!--Comentario 1-->
                                            <div class='row bg-light'>
                                            <!--Nombre de quién realiza el comentario-->
                                                <div class=' texto' style='text-align: justify;'>
                                                <p class='pchiquito p-3' style='text-align: justify;'>Para poder acceder a más información es necesario <strong>Iniciar sesión</strong> o <strong>Registrarse</strong> en caso de no pertenecer a 'El jale'</p>
                                                <br>
                                                </div>
    
                                                <!--Botón para iniciar sesión-->
                                                <div class='col-sm-6'>
                                                    <button href='login.php' class='btn btn-block texto text-white' role='button' id='inicia' style='background: #23B4A0; border-radius: 50px;text-align: center; height: 45px;'>Iniciar Sesión</button>
    
                                                    <hr>
                                                </div>
                                                <!--Botón para registrarse-->
                                                <div class='col-sm-6'>
                                                    <button href='register_user.php' class='btn btn-block text-white texto' role='button' id='registra' style='background: #EF5A10;border-radius: 50px; text-align: center; height: 45px;'>Registrarse</button>
                                                    <hr>
                                                </div>
    
                                            </div>
                                        </div>
                                        <!--/div-->
                                    </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Columna lado derecho -->
                            <div class='col-md-8 col-lg-8 pr-5 pt-3 item align-self-center'>

                                <!-- Fila - Nombre del usuario o empresa -->
                                <div class='row'>
                                    <div class='col'>
                                    <label  class='texto' for=''><strong>Empresa</strong></label>
                                    <label class='form-control-plaintext subtitulo' type='text' value='' readonly style='text-align: justify;'> ".$job['empleador']."</label>
                                    </div>
                                </div>
                                <br>

                                <!-- Fila - Descripcion del empleo -->
                                <div class='row'>
                                    <div class='col'>
                                    <label class='texto' for=''><strong>Descripción del empleo</strong></label>
                                    <textarea class='form-control-plaintext subtitulo' type='text' value='' readonly style='text-align: justify; height:100px;'>".$job['descripcion']."</textarea>
                                    </div>
                                </div>
                                <br>

                                <!-- Fila - Ubicación -->
                                <div class='row'>
                                    <div class='col'>
                                    <label class='texto' for=''><strong>Ubicación</strong></label>
                                    <textarea class='form-control-plaintext subtitulo' type='text' value='' readonly style='text-align: justify; height:100px;'>".$job['ubi']."</textarea>
                                    </div>
                                </div>
                            </div>
                            ";
                        }

                        
                        //Cada CARD de Html /impreso cada resultado
                        $output = "
                        <div class='card shadow container bg-light p-4' >
                        <br>
                        <div class='row'>
                        <!-- Columna lado izquierdo (Foto + botón) -->
                        <div class='col-md-4 col-lg-4 item align-self-center texto' id='foto'>
                            <!-- Foto del empleo -->
                            <img class='card shadow img-thumbnail mx-auto d-block' style='height: 190px; width: 290px;' src='data:image/jpg;charset=utf8;base64,".base64_encode($job['data'])."'>
                            <!-- Nombre del empleo -->
                            <label class='form-control-plaintext texto pt-3' type='text' value='' readonly style='text-align: center;'><strong>".$nomta."</strong></label>
                            <!-- Botón Me interesa -->
                            <div class='row py-3'>
                            <div class='col align-self-center section1 text-center'>
                                <button class='btn text-white' id='".$job['idetrab']."' onClick='Interesado_click(this.id)' style='background: ".$color_boton."; border-radius: 50px; width: 160px; height: 45px;' data-toggle='modal' data-target='#myModal2'>".$texto_boton."</button>
                            </div>
                            </div>
                        </div>
                        ".$contenido."
                        </div>
                    <br>
                    </div>
                    ";
                    echo $output;
                    }
                    
            }else{
                echo "<h5> No se encontraron resultados </h5>";
            }

            //echo "<h5> Paginacion ".$total_pages."</h5>";
            //Paginacion
            if(!empty($resultado)){
            $paginacion = "
                <nav class='float-right' aria-label='Page navigation example'>
                    <ul class='pagination'>
                ";
            $previous_page = "";
            $next_page = "";
            $current_page = "";

            if($total_pages > 4 )
            {
                if($page < 5){
                    for($count = 1; $count <= 5; $count++){
                        $page_array[] = $count;
                    }
                    $page_array[] = "...";
                    $page_array[] = $total_pages;
                }else{
                    $end_limit = $total_pages - 5;

                    if($page > $end_limit){
                        $page_array[] = 1;
                        $page_array[] = "...";

                        for($count = $end_limit; $count <= $total_pages; $count++){
                            $page_array[] = $count;
                        }
                    }else{
                        $page_array[] = 1;
                        $page_array[] = "...";
                        for($count = $page - 1; $count <= $page + 1; $count++){
                            $page_array[] = $count;
                        }
                        $page_array[] = "...";
                        $page_array[] = $total_pages;
                    }
                }

            } else{
                for($count = 1; $count <= $total_pages; $count++){
                    $page_array[] = $count;
                }
            }

            for($count = 0; $count < count($page_array); $count++){
                if($page == $page_array[$count]){
                    $current_page .= "
                    <li class='page-item active'>
                        <a class='page-link'
                        href='#'>".$page_array[$count]."
                        <span class='sr-only'>(current)</span>
                        </a></li>
                    ";

                    $previous_id = $page_array[$count] - 1;
                    if($previous_id > 0){
                        $previous_page = "
                        <li class='page-item'>
                        <a class='page-link'
                        href='javascript:void(0)' data-page_number='".$previous_id."'>
                        Anterior
                        </a></li>
                        ";
                    }else{

                        $previous_page = "
                        <li class='page-item disabled'>
                        <a class='page-link'
                        href='#'>Anterior
                        </a></li>
                        ";

                    }

                    $next_id = $page_array[$count] + 1;

                    if($next_id > $total_pages){
                        $next_page = "
                        <li class='page-item disabled'>
                        <a class='page-link'
                        href='#'>Siguiente
                        </a></li>
                        ";
                    }else{
                        $next_page = "
                        <li class='page-item'>
                        <a class='page-link'
                        href='javascript:void(0)' data-page_number='".$next_id."'>Siguiente
                        </a></li>
                        ";
                    }

                }else{
                    if($page_array[$count] == "..."){
                        $current_page .= "
                        <li class='page-item disabled'>
                        <a class='page-link'
                        href='#'>...
                        </a></li>
                        ";
                    }else{
                        $current_page .= "
                        <li class='page-item'>
                        <a class='page-link'
                        href='javascript:void(0)' data-page_number='".$page_array[$count]."'>".$page_array[$count]."
                        </a></li>
                        ";
                    }
                }
            }

            $paginacion .= $previous_page . $current_page . $next_page;
            $paginacion .= " </ul></nav>";
            echo $paginacion;
        }
    }
    //Revisamos los trabajos en los que se ha interesado el usuario
    public function CheckInteresados($idjob,$usuario){
        $sql_btn = "SELECT idint FROM interesado WHERE trabid = $idjob AND userid = $usuario";
        $stmt = $this->pdo->prepare($sql_btn);
        $stmt->execute();
        $datos_btn = $stmt->fetchAll();
        if(empty($datos_btn)){
            return false;
        }else{
            return true;
        }
    }

    public function ComentariosVista($Userdir)
    {
        $query = "SELECT comentario, calif, apodo, uscoment.created_at AS fecha
            FROM uscoment
            JOIN usuario ON usiddo = usuario.id
            WHERE usiddir = ?";
        $stmt = $this->pdo->prepare($query);
        $stmt->execute([$Userdir]);
        return $stmt->fetchAll();
    }

    public function UsuarioVista($Uservista)
    {
        // datos del usuario
        $VIEW = 'view_profile_privado';
        $query = "SELECT * FROM $VIEW WHERE usid = ?";
        $stmt = $this->pdo->prepare($query);
        $stmt->execute([$Uservista]);
        return $stmt->fetch();
    }

    public function VerInteresados($idTrabajo)
    {
      $query = "SELECT apodo, arnom, esp, telefono, foto, interesado.userid
                FROM view_profile_privado
                JOIN interesado ON usid = interesado.userid
                WHERE interesado.trabid = ?";
      $stmt = $this->pdo -> prepare($query);
      $stmt -> execute([$idTrabajo]);
      return $stmt->fetchAll();
    }
} ?>
