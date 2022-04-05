<div id="frases">
<header>
        <h1>Frases</h1>
    </header>
    <h3>Nueva frase</h3>
    <form action="">
        <label for="id">id</label>
        <input type="number" name="id" placeholder="0-1-2-3">
        <label for="frase">Frase</label>
        <input type="text" placeholder="No es necesario usar comillas"><br>
        <label for="nombre">Autor</label>
        <input type="text" placeholder="Autor"><br>
        <label for="nombre">Libro</label>
        <input type="text" placeholder="Libro"><br>
        <input type="submit" value="Guardar">
    </form>
    <hr>
    <table id="tbl-editorial">
        <thead>
            <tr>
                <td>id</td>
                <td>Frase</td>
                <td>Autor</td>
                <td>Opciones</td>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach ($frases as $key => $value) :
                    echo "<tr>";
                    echo    "<td>".$value['id']."</td>";
                    echo    "<td>".$value['frase']."</td>";
                    echo    "<td>".$value['id_autor']."</td>";
                    echo    "<td>BORRAR/EDITAR</td>";
                    echo "</tr>";
                endforeach;
            ?>
        </tbody>
    </table>
</div>