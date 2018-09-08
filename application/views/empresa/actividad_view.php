<div class="container-fluid">

    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="#">Actividades</a>
        </li>
        <li class="breadcrumb-item active">Listado</li>
    </ol>

    <div class="card mb-3">
        <div class="card-header">
            <i class="fas fa-table"></i>
            Actividades</div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Fecha para Test</th>
                            <th>Estrategia</th>
                            <th>Proceso</th>
                            <th>Organizacion</th>
                            <th>Articulacion</th>
                            <th>Accion</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Fecha para Test</th>
                            <th>Estrategia</th>
                            <th>Proceso</th>
                            <th>Organizacion</th>
                            <th>Articulacion</th>                            
                            <th>Accion</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php
                        $i = 1;
                        foreach ($actividades as $actividad => $row) {
                            echo '<tr>';
                            // echo '<td>' . $i++ . '</td>';
                            echo '<td>' . $row['fecha'] . '</td>';
                            echo '<td>' . $row['estrategia'] . '</td>';
                            echo '<td>' . $row['proceso'] . '</td>';
                            echo '<td>' . $row['organizacion'] . '</td>';
                            echo '<td>' . $row['articulacion'] . '</td>';
                            echo '<td><a href="' . site_url('empresa/editar_test_actividad') . '/' . $idempresa . '/' . $row['empresa_test_idempresa_test'] . '">Ver Test</a></td>';
                            echo '</tr>';
                        }
                        ?>                        
                    </tbody>
                </table>
            </div>
        </div>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
    </div>
    <div>
        <ul>
            <li><a href="<?php echo site_url('empresa/add_actividad/' . $idempresa) ?>">Nueva Actividad</a></li>
            <li><a href="<?php echo site_url('empresa/get_radar_actividades/' . $idempresa) ?>">Ver Seguimiento</a></li>
        </ul>
    </div>



</div>
