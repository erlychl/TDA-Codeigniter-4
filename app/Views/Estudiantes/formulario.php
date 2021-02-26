<div class="container">
<br>
<div class="text-center">
  <a href="#" class="list-group-item list-group-item-action list-group-item-dark">Estudiante</a>
</div>
<br>
<div class="card">
  <div class="card-body">
 <form action="<?php echo base_url() ?>/index.php/Estudiante/guardar" method="post">
  <div class="form-group">
    <label for="grado">Grado <i class="fas fa-layer-group"></i></label>
    <input type="num" class="form-control" id="grado" name="grado">
  </div>
  <div class="form-group">
    <label for="seccion">Seccion <i class="fas fa-puzzle-piece"></i></label>
    <input type="text" class="form-control" id="seccion" name="seccion">
  </div>
  <div class="form-group">
    <label for="nombre">Nombre <i class="fas fa-signature"></i></label>
    <input type="text" class="form-control" id="nombre" name ="nombre">
  </div>
  <div class="form-group">
    <label for="apellidos">Apellidos <i class="fas fa-signature"></i></label>
    <input type="text" class="form-control" id="apellidos" name="apellidos">
  </div>
  <div class="form-group">
    <label for="direccion">Direccion <i class="fas fa-map-marked-alt"></i></label>
    <input type="text" class="form-control" id="direccion" name="direccion">
  </div>
  <button type="submit" class="btn btn-primary">Registrar <i class="fas fa-save"></i></button>
</form>
  </div>
</div>
</div>