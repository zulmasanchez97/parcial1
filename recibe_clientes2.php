<div class="bg-white shadow-sm p-4 rounded">

    <h4>Listado de Clientes</h4>

    <table class="table table-bordered table-striped mt-4">
        <thead>
            <tr>
                <th>CODIGO</th>
                <th>NOMBRES</th>
                <th>APELLIDOS</th>
                <th>DUI</th>
                <th>DIRECCION</th>
                <th>TELEFONO</th>
                <th>EMAIL</th>
            </tr>
        </thead>
        <tbody>
            <?php if (isset($_POST["codigo"])): ?>
            <tr>
                <td><?php echo $_POST["codigo"]; ?></td>
                <td><?php echo $_POST["nombres"]; ?></td>
                <td><?php echo $_POST["apellidos"]; ?></td>
                <td><?php echo $_POST["dui"]; ?></td>
                <td><?php echo $_POST["direccion"]; ?></td>
                <td><?php echo $_POST["telefono"]; ?></td>
                <td><?php echo $_POST["email"]; ?></td>
            </tr>
            <?php endif?>
        </tbody>
    </table>
</div>