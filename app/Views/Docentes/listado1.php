<div class="container">
<div class="text-right">
    <br>
        <a href="<?php echo base_url(); ?>/index.php/Docente/insertar" class='btn btn-dark'>Docente  <i class="fas fa-user-plus"></i></a>
</div>
<h2>Docentes</h2>
<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">ID <i class="fas fa-id-card-alt"></i></th>
      <th scope="col">Nombre <i class="fas fa-signature"></i></th>
      <th scope="col">Apellidos <i class="fas fa-signature"></i></th>
      <th scope="col">Curso <i class="fas fa-book"></i></th>
      <th scope="col">Opciones  <i class="fas fa-user-times"></i>  <i class="fas fa-user-edit"></i></th>
    </tr>
  </thead>
  <tbody>
  <?php
  foreach($rows as $row):

  
   ?>

    <tr>
      <th scope="row"><?php echo $row['id']; ?></th>
      <td><?php echo $row['nombres']; ?></td>
      <td><?php echo $row['apellidos']; ?></td>
      <td><?php echo $row['curso']; ?></td>
      <td>
      <a href="<?php echo base_url(); ?>index.php/Docente/borrar/<?php echo $row['id']?>" class='btn btn-warning'>Eliminar <i class="fas fa-user-times"></i></a>
      <a href="<?php echo base_url(); ?>index.php/Docente/editar_ajax/<?php echo $row['id']?>" class='btn btn-danger editar1' data-toggle="modal" data-target="#exampleModal">Editar <i class="fas fa-user-edit"></i></a>
      </td>
    </tr>
    <?php
      endforeach;
    ?>

  </tbody>
</table>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog " role="document">
    <div class="modal-content">
      <div class="modal-header btn-primary">
        <h5 class="modal-title" id="exampleModalLabel" >Editar Docente <i class="fas fa-chalkboard-teacher"></i></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar <i class="far fa-window-close"></i></button>
        <button type="button" class="btn btn-primary save1">Guardar <i class="fas fa-save"></i></button>
      </div>
    </div>
  </div>
</div>
</div>
