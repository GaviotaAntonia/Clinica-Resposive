
<?php include 'conexion.php';?>
<form method="post" action="enviar.php">
    <div>
        <strong>Campo de texto</strong>
        <input type="text" name="campoTexto">
    </div>
    <div>
        <strong>Campo contraseña</strong>
        <input type="password" name="campoPassword">
    </div>
    <div>
        <strong>Campo checkbox</strong>
        <input type="checkbox" name="campoCheckbox" value="un_valor">
    </div>
    <div>
        <strong>Campo con varios checkbox</strong>
        Opción 1<input type="checkbox" name="camposCheckbox[]" value="1" checked>
        Opción 2<input type="checkbox" name="camposCheckbox[]" value="2">
        Opción 3<input type="checkbox" name="camposCheckbox[]" value="3">
    </div>
    <div>
        <strong>Campo oculto</strong>
        <input type="hidden" name="campoOculto" value="valor_oculto">
    </div>
    <div>
        <strong>Campo SELECT</strong>
        <select name="campoSelect">
            <option value="1">Opción 1</option>
            <option value="2">Opción 2</option>
            <option value="3" selected>Opción 3</option>
        </select>
    </div>
    <div>
        <strong>Campo SELECT Multiple</strong><br/>
        <select name="campoSelectMultiple[]" multiple>
            <option value="1" selected>Opción 1</option>
            <option value="2">Opción 2</option>
            <option value="3" selected>Opción 3</option>
        </select>
    </div>
    <div>
        <strong>Campo TEXTAREA</strong><br/>
        <textarea name="campoTextarea"></textarea>
    </div>
    <div>
        <input type="submit" value="Enviar">
    </div>
 <select class="form-control" name="estado" onchange="submit()">
                    <?php 
                    $sql="SELECT * from estado";
                    $rec=mysqli_query($conexion,$sql);
                    while ($row=mysqli_fetch_array($rec)) {
                      echo "<option value='".$row['id_estado']."' ";
                      if ($_POST['estado']==$row['id_estado'])
                        echo " SELECTED";
                      echo ">";
                      echo $row['estado'];
                    }
                     ?>
                  </select>

</form>