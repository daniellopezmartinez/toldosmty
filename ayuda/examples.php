dentro de body y nav

separador en un meno raya // 


 <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Link</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Soporte<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="mailto:ramyromtz@gmail.com">Ayuda</a></li>
             <li role="separator" class="divider"></li>
            <li><a href="log">Separated link</a></li>
          </ul>
        </li>
      </ul>


Agregar Dato FK a TAbla
ALTER TABLE "nombredetabla" ADD nombredecolumna VARCHAR(50) NOT NULL;
ALTER TABLE "nombredetabla" ADD CONSTRAINT fk_nombredecolumna FOREIGN KEY (nombredecolumna) REFERENCES tablaexterna(nombredecampotablaexterna);


Conexion.php Original
<?php
  $usuario = "root";
  $contrasena = "";
  $servidor = "localhost";
  $basededatos = "toldosmty";
  //Crear una conexion con el servidor de base da datos con mysqli_connect()
  $conexion = mysqli_connect( $servidor,$usuario,$contrasena,$basededatos) or die ("No se ha podido conectar al servidor de la base de datos");

  if($conexion){
  echo"ok";
}
else{
  echo"conexion no exitosa";
}
?>


Quite esto de rEGPROD despues de body
<div class="container">
    <div class="row">
        <div class="col-sm-3">
          <label>Nombre Producto:</label>
          <input type="Nombre de Producto" name="">
        </div>
        <div class="col-xs-3">
           <label>Categoria</label>
            <select name="id_categoria" required>
            <option value="">Elige una categoria</option>
        </div>

        <div class="col-xs-3">
           <label>Medida</label>
            <select name="id_medida" required>
            <option value="">Elige una medida</option>
        </div> 
    </div>
</div>
 

 Funcionando PRodutos 
                  <label for=inputCat>Categoria: <label>
                  <select id="cbx_cat" name="cbx_cat" class="form-control">
                    <option value="0">Categoria.</option>
                    <?php WHILE($row=$resultado->fetch_assoc()) { ?>
                    <option value="<?php echo $row['id_categoria']; ?>"><?php echo$row['nombrecategoria']; ?></option>
                    <?php }?>
                  </select>
                </div>




<?php
  $idcategoria= $_GET['param_id'];
  $usuario = "root";
  $contrasena = "";
  $servidor = "localhost";
  $basededatos = "toldosmty";
  
  $conexion = mysqli_connect( $servidor,$usuario,$contrasena,$basededatos) or die ("No se ha podido conectar al servidor de la base de datos");
  
  $result=mysqli_query($conexion,"SELECT * FROM medida WHERE id_categoria = $idcategoria ");


  while($row = mysqli_fetch_array ($result))
      echo '<option value="'.$row['id_medida'].'">'.$row['medida'].'</option>';


  ?>

 FUNCIONANDO OK OK OK OK ver productos lista dependiente