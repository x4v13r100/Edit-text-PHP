<?php
// Variable
$archivo = $_GET['archivo'];
//--------Guardar el archivo txt
if ($_GET['accion'] == 'Guardar') {
  file_put_contents($archivo, $_GET['texto']);
}

// --------Leer archivo externo txt
$texto = file_get_contents($archivo);
?>

<h1> Editar el Archivo de texto </h1>
  <!-- Formulario   -->
 <form>
    <label> Nombre del Archivo: </label>
    <input type="text" name="archivo" value="<?=$archivo?>"/><br>
    <textarea name="texto"><?=$texto?></textarea>
    <br>
    <input type="submit" value="Guardar" name="accion" />
    <input type="submit" value="Cargar" name="accion" />

 </form>


<style>
textarea {
    width: 305px; height: 251px;
}

</style>
