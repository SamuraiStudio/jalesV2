<?php
include 'conection.php';
require('ImageHandler.php');

$usid = $_SESSION['usuario']['id'];


$db = new DB();
$pdo = $db->connect();

$sql1 = "SELECT * FROM trabajos WHERE usid = $usid";
$stmt1 = $pdo->prepare($sql1);
$stmt1->execute();
$arr1 = $stmt1->fetchAll(PDO::FETCH_ASSOC);

// echo "<pre>";
// print_r($arr2);
// echo "</pre>";


foreach($arr1 as $row){

  $idArea = $row['arid'];
  $sql2 = "SELECT nombre FROM area WHERE id = $idArea LIMIT 1";
  $stmt2 = $pdo->prepare($sql2);
  $stmt2->execute();
  $arr2 = $stmt2->fetch();

  $idImage = $row['foto'];
  $sqlImagen = "SELECT * FROM imagen WHERE idimg = $idImage LIMIT 1";
  $stmt3 = $pdo->prepare($sqlImagen);
  $stmt3->execute();
  $arr3 = $stmt3->fetch();

  ?>
  <div class="card shadow container bg-light p-4">
              <br>
              <div class="row">

                <!--Columna lado izquierdo-->
                <div class="col-md-4 col-lg-4 item align-self-center texto">
                  <img class="card shadow img-thumbnail mx-auto d-block" style="height: 190px; width: 290px;" src="data:<?php echo $arr3['type']; ?>;base64,<?php echo  base64_encode($arr3['data']); ?>">
                  <label class="form-control-plaintext texto pt-3" type="text" value="" readonly style="text-align: center;"><strong><?php echo $row['nombre']?></strong></label>

                  <!--Botones-->

                  <div class="row pt-5">
                    <!--Editar-->
                    <div class="col align-self-center section1 text-center">
                      <a href="edit_empleo.php?id=<?php echo (int)$row['idetrab'];?>" target="blank">
                          <input type="button" class="btn text-white" id="editarP" value="Editar" style="background: #EF5A10; border-radius: 50px; width: 120px; height: 45px; text-align:center;">
                      </a>
                    </div>

                    <!--Interesados-->
                    <div class="col align-self-center section1 text-center">
                      <a href="interesados.php?trabajo=<?php echo (int)$row['idetrab'];?>" target="blank">
                          <input type="button" class="btn text-white" id="interesados" value="Interesados" style="background: #23B439;  border-radius: 50px; width: 120px; height: 45px; text-align:center;">
                      </a>
                    </div>
                  </div>
                </div>

                <!--Columna lado derecho-->
                <div class="col-md-8 col-lg-8 pr-5 pt-3 item align-self-center">

                    <!--Fila del empleador-->
                    <div class="row">
                      <div class="col">
                        <label  class="texto" for=""><strong>Usuario o empresa</strong></label>
                        <label class="form-control-plaintext subtitulo" type="text" value="" readonly style="border-bottom-color:#ada2a2; text-align: justify;"><?php echo $row['empleador'] ?></label>
                      </div>
                    </div>
                    <br>

                    <!--Fila de área y especialidad-->
                    <div class="row">
                      <div class="col pb-2">
                        <label class="texto"for=""><strong>Área</strong></label>
                        <label class="form-control-plaintext subtitulo" type="text" value="" readonly style="border-bottom-color:#ada2a2; text-align: justify;"><?php echo $arr2['nombre'] ?></label>
                      </div>
                      <div class="col pb-2">
                        <label class="texto"for=""><strong>Especialidad</strong></label>
                        <label class="form-control-plaintext subtitulo" type="text" value="" readonly style="border-bottom-color:#ada2a2; text-align: justify;"><?php echo $row['espec'] ?></label>
                      </div>
                    </div>
                    <br>

                    <!--Jornada y sueldo-->
                    <div class="row">
                      <div class="col">
                        <label class="texto" for=""><strong>Jornada</strong></label>
                        <label class="form-control-plaintext subtitulo" type="text" value="" readonly style="border-bottom-color:#ada2a2; text-align: justify;"><?php echo $row['tipojor'] ?></label>
                      </div>
                      <div class="col">
                        <label class="texto" for=""><strong>Salario</strong></label>
                        <label class="form-control-plaintext subtitulo" type="text" value="" readonly style="border-bottom-color:#ada2a2; text-align: justify;">$<?php echo $row['sal'] ?> al mes</label>
                      </div>
                    </div>
                    <br>

                    <!--Fila de Ubicación-->
                    <div class="row pb-3">
                      <div class="col">
                        <label class="texto" for=""><strong>Ubicación</strong></label>
                        <textarea readonly class="form-control-plaintext subtitulo" type="text" value="" style="height: 100px; text-align: justify;"><?php echo $row['ubi'] ?></textarea>
                      </div>
                    </div>

                    <!--Fila de descripcion-->
                    <div class="row">
                      <div class="col">
                        <label class="texto" for=""><strong>Descripción del empleo</strong></label>
                        <textarea readonly class="form-control-plaintext subtitulo" type="text" value="" style="height: 100px; text-align: justify;"><?php echo $row['descripcion'] ?></textarea>
                      </div>
                    </div>
                    <br>

                    <!--Fila de Requisitos-->
                    <div class="row">
                      <div class="col">
                        <label class="texto" for=""><strong>Requisitos del personal</strong></label>
                        <textarea readonly class="form-control-plaintext subtitulo" type="text" value="" style="height: 100px; text-align: justify;"><?php echo $row['requisitos'] ?></textarea>
                      </div>
                    </div>
                </div>
              </div>
            <br>
          </div><!--Fila 1 - Fin. Publicación 1-->
          <div class="py-2"></div>
    <?php
}

?>

<!--Fila 1 - Inicio. Publicación 1-->
