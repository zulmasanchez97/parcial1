<div class="p-5 bg-white shadow rounded">
<h4>Nuevo Cliente</h3>
<hr>
<form id="formularioCliente" method="POST">
<div class="form-group mt-4">
    <label for="codigo">Código:</label>
    <input type="text" id="codigo" name="codigo" class="form-control" required>
</div>
<div class="form-group">
    <label for="nombres">Nombres:</label>
    <input type="text" id="nombres" name="nombres" class="form-control" required>
</div>
<div class="form-group">
    <label for="apellidos">Apellidos:</label>
    <input type="text" id="apellidos" name="apellidos" class="form-control" required>
</div>
<div class="form-group">
    <label for="dui">DUI:</label>
    <input type="text" id="dui" name="dui" class="form-control" required>
</div>
<div class="form-group">
    <label for="direccion">Dirección:</label>
    <textarea id="direccion" name="direccion" class="form-control" required></textarea>
</div>
<div class="form-group">
    <label for="telefono">Teléfono:</label>
    <input type="tel" id="telefono" name="telefono" class="form-control" required>
</div>
<div class="form-group">
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" class="form-control" required>
</div>
<div class="mt-3">
    <button type="button" id="enviarFormulario" class="btn btn-primary">
        Enviar
    </button>
</div>
</form>

</div>