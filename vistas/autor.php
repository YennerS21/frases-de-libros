<div id="autor">
    <header>
        <h1>Autores</h1>
    </header>
    <h3>Registrar nuevo autor</h3>
    <form action="">
        <label for="id">id</label>
        <input type="number" name="id" placeholder="0-1-2-3">
        <label for="nombre">Nombre</label>
        <input type="text" placeholder="Nombre">
        <input type="submit" value="Guardar">
    </form>
    <hr>
    <table id="tbl-editorial">
        <thead>
            <tr>
                <td>id</td>
                <td>Nombre</td>
                <td>Opciones</td>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach ($autores as $key => $value) :
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