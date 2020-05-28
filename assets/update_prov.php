<?php
include("conexion.php");
$id_proveedor=$_GET['id'];
$solicitud="SELECT * FROM proveedor WHERE id_proveedor=$id_proveedor";
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
             <h2 class="display-7"> Acualizar Proveedor</h2>
             <hr class="bg-info">
             <p class="pb-0 mb-0">Favor de llenar los siguientes campos. </p>
             <p class="text text-danger small pt-0 mt-0">Actualizacion de Proveedor</p>

             <form action="updateprosql.php" method="POST"/>
             <?php

             while ($fila = mysqli_fetch_array($resultado)) {
               echo"
               <div class='row form-group'>
                <label for='nombre' class='col-form-label col-md-4'>Nombre: </label>
                  <div class='col-lg-8'>
                    <input type='text' name='nombre' value='".$fila['nombre']."' id='nombre' class='form-control'>
                  </div>
              </div>
              <div class='row form-group'>
                  <label for='nombre' class='col-form-label col-md-4'>Apellido Paterno: </label>
                    <div class='col-lg-8'>
                      <input type='text' value='".$fila['apellido']."' name='apellido' id='apellido' class='form-control'>
                    </div>
              </div>
              <div class='row form-group'>
                  <label for='nombre' class='col-form-label col-md-4'>Apellido Materno: </label>
                    <div class='col-lg-8'>
                      <input type='text' value='".$fila['apellidom']."' name='apellido' id='apellido' class='form-control'>
                    </div>
              </div>
              <div class='row form-group'>
                  <label for='nombre' class='col-form-label col-md-4'>Cargo: </label>
                    <div class='col-lg-8'>
                      <input type='text' name='cargo' value='".$fila['cargo']."' id='cargo' class='form-control'>
                    </div>
              </div>

               <div class='row form-group'>
                <label for='nombre' class='col-form-label col-md-4'>Calle: </label>
                <div class='col-lg-8'>
                  <input type='text' name='calle' value='".$fila['calle']."' id='calle' class='form-control'>
                </div>
              </div>


                <div class='row form-group'>
                <label for='nombre' class='col-form-label col-md-4'>Colonia: </label>
                <div class='col-lg-8'>
                  <input type='text' name='colonia' value='".$fila['colonia']."' id='colonia' class='form-control'>
                </div>
              </div>

              <div class='row form-group'>
                            <label for='municipio' class='col-form-label col-md-4'>Municipio: </label>
                            <div class='col-lg-8'>
                              <input type='text' name='municipio' value='".$fila['municipio']."' id='municipio' class='form-control'>
                            </div>
                          </div>

                          <div class='row form-group'>
                          <label for='nombre' class='col-form-label col-md-4'>Estado: </label>
                          <div class='col-lg-8'>
                            <input type='text' name='estado' value='".$fila['estado']."' id='estado' class='form-control'>
                          </div>
                        </div>

                        <div class='row form-group'>
                        <label for='nombre' class='col-form-label col-md-4'>Pais</label>
                        <div class='col-lg-8'>
                          <input type='text' name='pais' value='".$fila['pais']."' id='pais' class='form-control'>
                        </div>
                      </div>



              <div class='row form-group'>
                <label for='nombre' class='col-form-label col-md-4'>Entre calle: </label>
                <div class='col-lg-8'>
                  <input type='text' class='form-control' value='".$fila['entrecalle']."' id='entrecalle' name='entrecalle'></textarea>
                </div>
              </div>

              <div class='row form-group'>
                <label for='nombre' class='col-form-label col-md-4'>Referencia: </label>
                <div class='col-lg-8'>
                  <input type='text' class='form-control' id='referencia' value='".$fila['referencia']."' name='referencia'></textarea>
                </div>
              </div>


              <div class='form-row'>
                <div class='form-group col-md-4'>
                  <label for='inputCity'>Contacto:</label>
                  <input type='text' class='form-control' value='".$fila['contacto']."' id='contacto' name='contacto' >
                </div>
                <div class='form-group col-md-3'>
                  <label for='inputState'>Telefono:</label>
                    <input type='text' class='form-control' value='".$fila['telefono']."' name='telefono' id='telefono'>
                </div>
                <div class='form-group col-md-3'>
                  <label for='inputState'>Tipo de Pago:</label>
                  <select id='id_tpago' name='id_tpago' class='form-control'>
                  <option value='1'>Efectivo</option>
                  <option value='2'>Deposito Bancario</option>
                  <option value='3'>Transferencia</option>
                  </select>
                </div>
              </div>

                <div class='form-row'>
                <div class='form-group col-md-5'>
                  <label for='inputCity'>Email:</label>
                  <input type='text' value='".$fila['email']."' class='form-control' name='email' id='email'>
                </div>
                <div class='form-group col-md-3'>
                  <label for='inputState'>RFC:</label>
                    <input type='text' value='".$fila['rfc']."' class='form-control' name='erfc' id='erfc'>
                </div>
                <div class='form-group col-md-4'>
                  <label for='inputState'>Codigo Postal:</label>
                  <input type='text'value='".$fila['codigo_postal']."' class='form-control' id='codigo_postal' name='codigo_postal'>
                </div>
              </div>
                <div class='row form-group'>
                <label for='nombre' class='col-form-label col-md-6'>Notas: </label>
                <div class='col-lg-8'>
                  <input type='text' class='form-control' value='".$fila['notas']."' id='notas' name='notas'></textarea>
                </div>
              </div>

               ";}
               ?>
              <button type="submit" class="btn btn-info" style="margin:21px">Actualizar</button>
             </form>
 </body>
 </html>
