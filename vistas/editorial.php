<div id="editorial">
    <header>
        <h1>Editoriales</h1>
    </header>
    <h3>Registrar nueva editorial</h3>
    <form action="">
        <label for="id">id</label>
        <input type="number" name="id" placeholder="0-1-2-3">
        <label for="nombre">Nombre de la editorial</label>
        <input type="text" placeholder="Ingresa el nombre aqui">
        <input type="submit" value="Guardar">
    </form>
    <hr>
    <table id="tbl-editorial">
        <thead>
            <tr>
                <td>id</td>
                <td>Nombre Editorial</td>
                <td>Opciones</td>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach ($editoriales as $key => $value) :
                    echo "<tr>";
                    echo    "<td>".$value['id']."</td>";
                    echo    "<td>".$value['nombre']."</td>";
                    echo    "<td>BORRAR/EDITAR</td>";
                    echo "</tr>";
                endforeach;
            ?>
        </tbody>
    </table>
</div>