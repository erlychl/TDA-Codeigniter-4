<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h3 class="mt-4"><?php echo $titulo; ?></h3>

            <div>
                <p>
                    <a herf="<?php echo base_url(); ?>/Docente/nuevo/" class="btn btn-info">Agregar</a>
                    <a herf="<?php echo base_url(); ?>/Docente/eliminados/" class="btn btn-warning">Eliminados</a>
                </p>
            </div>

            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Apellidos</th>
                            <th>Nombres</th>
                            <th>Curso</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    
                    <tbody>
                        <?php foreach($datos as $dato) { ?>
                            <tr>
                                <td><?php echo $dato['id']; ?></td>
                                <td><?php echo $dato['apellidos']; ?></td>
                                <td><?php echo $dato['nombres']; ?></td>
                                <td><?php echo $dato['curso']; ?></td>

                                <td><a herf="<?php echo base_url(); ?>/Docente/editar/"<?php echo $dato['id']; ?> class="btn btn-warning"><i class="fas fa-pencil-alt"></i></a></td>
                                
                                <td><a herf="<?php echo base_url(); ?>/Docente/eliminar/"<?php echo $dato['id']; ?> class="btn btn-danger"><i class="fas fa-trash-alt"></i></a></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </main>