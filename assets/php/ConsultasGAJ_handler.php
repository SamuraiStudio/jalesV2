<?php
require_once('Consultas.php');
{   
    $trabajos = new Consultas();
    $bus = '';
    $cat_filtros = '';
    $page_post = '';
    $from = '';
    $usuario = '';
        //Usuario
        if(isset($_POST['userid'])){
            $usuario = $_POST['userid'];
        }
        //From what file the ajax call comes from
        if(isset($_POST['from'])){
            $from = $_POST['from'];
        }
        //From which page number the ajax call comes from
        if(isset($_POST['page'])){
            $page_post = $_POST['page'];
        }
        //Si contiene algun filtro lo guarda
        if(isset($_POST["categorias"])){
            $cat_filtros = implode("','", $_POST["categorias"]);
        }
        //Si contiene alguna busqueda lo guarda y envia
        if(isset($_POST['search'])){
            $bus = $_POST['search'];
            $datos = $trabajos->getAllJobs($bus,$cat_filtros,$page_post,$from,$usuario);
            echo $datos;

        }
       else{
            //Si no, envia valores por defecto
            $datos = $trabajos->getAllJobs($bus,$cat_filtros,$page_post,$from,$usuario);
            echo $datos;
        }
} ?>
