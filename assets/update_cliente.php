<?php
include("conexion.php");
$id_cliente=$_GET['id'];
$solicitud="SELECT * FROM clientes WHERE id_cliente=$id_cliente";
$resultado=mysqli_query($conexion,$solicitud);

 // header("location:../catcliente.php");

 ?>

 <!DOCTYPE html>
 <html>
 <head>
     <title>Actualizar Cliente</title>
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="shortcut icon" href="../img/logoico.ico">
   <link rel="stylesheet" type="text/css" href="../librerias/bootstrap/css/css/fontawesome.min.css">
     <link rel="stylesheet" type="text/css" href="../librerias/bootstrap/css/bootstrap.css">
     <script src="../librerias/jquery-3.4.1.min.js"></script>
     <script src="../librerias/bootstrap/js/bootstrap.js"></script>
     <script type="../text/javascript">
     $("document").ready(function(){
     $( "#id_tpago" ).load("gettpago.php" );
     $("#id_user").load("getuser.php");
   })
 </script>
 </head>

 <body>

 <?php require 'menubr.php' ?>

 <div class="container">
     <div class="row justify-content-center">
         <div class="col-md-9">
             <h2 class="display-7"> Acualizar Cliente</h2>
             <hr class="bg-info">
             <p class="pb-0 mb-0">Favor de llenar los siguientes campos. </p>
             <p class="text text-danger small pt-0 mt-0">Actualizacion de Cliente </p>

             <form action="updateclisql.php" method="POST"/>
             <?php

             while ($fila = mysqli_fetch_array($resultado)) {
               echo"
               <div class='row form-group'>
                  <label for='nombre' class='col-form-label col-md-4'>Nombre: </label>
                    <div class='col-lg-8'>
                      <input type='text' name='nombre' value=' ".$fila['nombre']."' id='nombre' class='form-control'>
                    </div>
               </div>

               <div class='row form-group'>
                <label for='apellido' class='col-form-label col-md-4'>Apellido Paterno: </label>
                <div class='col-lg-8'>
                  <input type='text' name=apellido' value=' ".$fila['apellido']."' id='apellido' class='form-control'>
                </div>
              </div>

              <div class='row form-group'>
                <label for='apellido' class='col-form-label col-md-4'>Apellido Materno: </label>
                <div class='col-lg-8'>
                  <input type='text' name='apellidom' value=' ".$fila['apellidom']."' id='apellidom' class='form-control'>
                </div>
              </div>

              <div class='row form-group'>
                <label for='calle' class='col-form-label col-md-4'>Calle y Numero: </label>
                <div class='col-lg-8'>
                  <input type='text' name='calle' value='".$fila['calle']."' id='calle' class='form-control'>
                </div>
              </div>

              <div class='row form-group'>
                <label for='colonia' class='col-form-label col-md-4'>Colonia: </label>
                <div class='col-lg-8'>
                  <input type='text' name='colonia' value=' ".$fila['colonia']."' id='colonia' class='form-control'>
                </div>
              </div>

              <div class='row form-group'>
                <label for='colonia' class='col-form-label col-md-4'>Municipio: </label>
                <div class='col-lg-8'>
                  <input type='text' name='municipio' value=' ".$fila['municipio']."' id='municipio' class='form-control'>
                </div>
              </div>
              <div class='row form-group'>
                <label for='colonia' class='col-form-label col-md-4'>Estado: </label>
                <div class='col-lg-8'>
                  <input type='text' name='estado' value=' ".$fila['estado']."' id='estado' class='form-control'>
                </div>
              </div>

              <div class='row form-group'>
                <label for='colonia' class='col-form-label col-md-4'>Pais: </label>
                <div class='col-lg-8'>
                  <input type='text' name='pais' value=' ".$fila['pais']."' id='pais' class='form-control'>
                </div>
              </div>

              <div class='row form-group'>
                <label for='nombre' class='col-form-lablel col-md-4'>Entre calles: </label>
                <div class='col-lg-8'>
                  <textarea rows='2' class='form-control' value=' ".$fila['entrecalle']."' id='entrecalle' name='entrecalle'></textarea>
                </div>
              </div>
              <div class='row form-group'>
                <label for='nombre' class='col-form-label col-md-4'>Referencia: </label>
                <div class='col-lg-8'>
                  <textarea rows='2' class='form-control' value=' ".$fila['calle']."' id='referencia' name='referencia'></textarea>
                </div>
              </div>

         <div class='form-row'>
        <div class='form-group col-md-6'>
          <label for='inputCity'>Correo Electronico:</label>
            <input type='text' value=' ".$fila['email']."' name='email' class='form-control' id='email'>
        </div>
        <div class='form-group col-md-3'>
          <label for='inputState'>Telefono:</label>
           <input type='text' value=' ".$fila['telefono']."'  class='form-control' id='telefono' name='telefono'>
        </div>

        <div class='form-group col-md-3'>
          <label for='inputState'>RFC:</label>
           <input type='text' value=' ".$fila['rfc']."' class='form-control' name='rfc' id='rfc'>
        </div>
        </div>

        <div class='form-row'>
        <div class='form-group col-md-3'>
          <label for='inputCity'>Codigo Postal:</label>
            <input type='text' class='form-control' value=' ".$fila['codigo_postal']."' id='codigo_postal' name='codigo_postal'>
        </div>
        <div class='form-group col-md-3'>
          <label for='inputState'>Tipo de Pago:</label>
           <select id='id_tpago' class='form-control' name='id_tpago'>
           <option value='1'>Efectivo </option>
           <option value='2'>Deposito Bancario </option>
           <option value='3'>Transferencia </option>
           </select>
        </div>
        <div class='form-group col-md-8'>
        </div>
        </div>

               ";}
               ?>
              <button type="submit" class="btn btn-info" style="margin:21px">Actualizar</button>
             </form>
 </body>
 </html>
