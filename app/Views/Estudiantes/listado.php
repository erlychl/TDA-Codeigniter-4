<div class="container">
<div class="text-right">
    <br>
        <a href="<?php echo base_url(); ?>/index.php/Estudiante/insertar" class='btn btn-dark'>Estudiante  <i class="fas fa-user-plus"></i></a>
</div>
<h2>Estudiantes</h2>
<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">ID <i class="fas fa-id-card-alt"></i></th>
      <th scope="col">Grado <i class="fas fa-layer-group"></i></th>
      <th scope="col">Seccion <i class="fas fa-puzzle-piece"></i></th>
      <th scope="col">Nombre <i class="fas fa-signature"></i></th>
      <th scope="col">Apellidos <i class="fas fa-signature"></i></th>
      <th scope="col">Direccion <i class="fas fa-map-marked-alt"></i></th>
      <th scope="col">Opciones  <i class="fas fa-user-times"></i>  <i class="fas fa-user-edit"></i></th>
    </tr>
  </thead>
  <tbody>
  <?php
  foreach($rows as $row):

  
   ?>

    <tr>
      <th scope="row"><?php echo $row['id']; ?></th>
      <td><?php echo $row['grado']; ?></td>
      <td><?php echo $row['seccion']; ?></td>
      <td><?php echo $row['nombres']; ?></td>
      <td><?php echo $row['apellidos']; ?></td>
      <td><?php echo $row['direccion']; ?></td>
      <td>
      <a href="<?php echo base_url(); ?>index.php/Estudiante/borrar/<?php echo $row['id']?>" class='btn btn-warning'>Eliminar <i class="fas fa-user-times"></i></a>
      <a href="<?php echo base_url(); ?>index.php/Estudiante/editar_ajax/<?php echo $row['id']?>" class='btn btn-danger editar' data-toggle="modal" data-target="#exampleModal">Editar <i class="fas fa-user-edit"></i></a>
	  </td>
    </tr>
    <?php
      endforeach;
    ?>

  </tbody>
</table>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header btn-primary">
        <h5 class="modal-title" id="exampleModalLabel">Editar Estudiante <i class="fas fa-user-graduate"></i></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar <i class="far fa-window-close"></i></button>
        <button type="button" class="btn btn-primary save">Guardar <i class="fas fa-save"></i></button>
      </div>
    </div>
  </div>
</div>
</div>
