<div class="container-fluid">

    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="#">Empresas</a>
        </li>
        <li class="breadcrumb-item active">Listado</li>
    </ol>

    <!-- Icon Cards-->
    <div class="row">
        <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-primary o-hidden h-100">
                <div class="card-body">
                    <div class="card-body-icon">
                        <i class="fas fa-fw fa-comments"></i>
                    </div>
                    <div class="mr-5">26 Por Evaluar!</div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="#">
                    <span class="float-left">View Details</span>
                    <span class="float-right">
                        <i class="fas fa-angle-right"></i>
                    </span>
                </a>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-warning o-hidden h-100">
                <div class="card-body">
                    <div class="card-body-icon">
                        <i class="fas fa-fw fa-list"></i>
                    </div>
                    <div class="mr-5">11 En busca de Innovación!</div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="#">
                    <span class="float-left">View Details</span>
                    <span class="float-right">
                        <i class="fas fa-angle-right"></i>
                    </span>
                </a>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-success o-hidden h-100">
                <div class="card-body">
                    <div class="card-body-icon">
                        <i class="fas fa-fw fa-shopping-cart"></i>
                    </div>
                    <div class="mr-5">123 Innovadoras!</div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="#">
                    <span class="float-left">View Details</span>
                    <span class="float-right">
                        <i class="fas fa-angle-right"></i>
                    </span>
                </a>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-danger o-hidden h-100">
                <div class="card-body">
                    <div class="card-body-icon">
                        <i class="fas fa-fw fa-life-ring"></i>
                    </div>
                    <div class="mr-5">13 Sin Innovación!</div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="#">
                    <span class="float-left">View Details</span>
                    <span class="float-right">
                        <i class="fas fa-angle-right"></i>
                    </span>
                </a>
            </div>
        </div>
    </div>

    <!-- Area Chart Example-->
    <!--
    <div class="card mb-3">
        <div class="card-header">
            <i class="fas fa-chart-area"></i>
            Area Chart Example</div>
        <div class="card-body">
            <canvas id="myAreaChart" width="100%" height="30"></canvas>
        </div>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
    </div>

    -->
    
    <!-- DataTables Example -->
    <div class="card mb-3">
        <div class="card-header">
            <i class="fas fa-table"></i>
            Empresas</div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Nit</th>
                            <th>Direccion</th>
                            <th>Telefono</th>
                            <th>Puntaje</th>
                            <th>Accion</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Nombre</th>
                            <th>Nit</th>
                            <th>Direccion</th>
                            <th>Telefono</th>
                            <th>Puntaje</th>
                            <th>Accion</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php
                        $i = 1;
                        foreach ($empresas as $empresas => $row) {
                            echo '<tr id="empresa_' . $row['idempresa'] . '">';
                            // echo '<td>' . $i++ . '</td>';
                            echo '<td>' . $row['nombre'] . '</td>';
                            echo '<td>' . $row['nit'] . '</td>';
                            echo '<td>' . $row['direccion'] . '</td>';
                            echo '<td>' . $row['telefono'] . '</td>';

                            if ($row['puntaje'] == '') {
                                echo '<td><a href="' . site_url('empresa/evaluar/' . $row['idempresa']) . '">Evaluar</a>' . '</td>';
                            } else {
                                $bgcolor = '';
                                if ($row['puntaje'] <= 39) {
                                    $bgcolor = '#DF0101';
                                } elseif ($row['puntaje'] >= 40 && $row['puntaje'] <= 59) {
                                    $bgcolor = '#FACC2E';
                                } else {
                                    $bgcolor = '#04B404';
                                }

                                if (in_array("empresa/evaluar", $roles)) {
                                    echo '<td bgcolor="' . $bgcolor . '"><a href="' . site_url('empresa/graphics/' . $row['idempresa']) . '">' . $row['puntaje'] . '%</a></td>';
                                } else {
                                    echo '<td bgcolor="' . $bgcolor . '">' . $row['puntaje'] . '%</td>';
                                }
                            }

                            echo in_array('empresa/editar', $roles) || in_array('empresa/trash', $roles) ? '<td>' : '';
                            echo in_array('empresa/editar', $roles) ? '<a href="' . site_url('empresa/editar') . '/' . $row['idempresa'] . '">Editar</a>' : '';
                            echo in_array('empresa/editar', $roles) ? '<a href="' . site_url('empresa/editar_test') . '/' . $row['idempresa'] . '"> Test </a>' : '';
                            echo in_array('empresa/editar', $roles) ? '<a href="' . site_url('empresa/getRadarDiagnostico') . '/' . $row['idempresa'] . '"> Radar </a>' : '';
                            echo in_array('empresa/editar', $roles) ? '<a href="' . site_url('empresa/get_actividades') . '/' . $row['idempresa'] . '"> Monitoreo </a>' : '';
                            echo in_array('empresa/trash', $roles) ? '&nbsp; <a id="' . $row['idempresa'] . '" class="trash">Trash</a>' : '';
                            echo in_array('empresa/editar', $roles) || in_array('empresa/trash', $roles) ? '</td>' : '';
                            echo '</tr>';
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
    </div>

</div>
<!-- /.container-fluid -->
