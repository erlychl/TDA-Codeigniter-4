<div class="container">
<br>
<div class="text-center">
  <a href="#" class="list-group-item list-group-item-action list-group-item-dark">Docente</a>
</div>
<br>
<div class="card">
  <div class="card-body">
  <form action="<?php echo base_url() ?>/index.php/Docente/guardar" method="post">
  <div class="form-group">
    <label for="nombre">Nombre <i class="fas fa-signature"></i></label>
    <input type="text" class="form-control" id="nombre" name="nombre">
  </div>
  <div class="form-group">
    <label for="apellidos">Apellidos <i class="fas fa-signature"></i></label>
    <input type="text" class="form-control" id="apellidos" name="apellidos">
  </div>
  <div class="form-group">
    <label for="login">Login <i class="fas fa-sign-in-alt"></i></label>
    <input type="text" class="form-control" id="login" name ="login">
  </div>
  <button type="submit" class="btn btn-primary">Registrar <i class="fas fa-save"></i></button>
</form>
  </div>
</div>
</div>