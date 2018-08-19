<div>
    <div>
        <h2 style="font-weight: 600;letter-spacing: 1px;padding-right: 5px;">EMPRESAS</h2>
    </div>
    <div class="table-responsive">
        <table id="list_load" class="table table-hover table-bordered "> <!-- table-striped -->
            <thead>
                <tr style="background-color: #EBEBEB">
                    <th>#</th>
                    <th>Nombre</th>
                    <th>Nit</th>
                    <th>Direccion</th>
                    <th>Telefono</th>
                    <th>Puntaje</th>
                    <?php echo in_array('empresa/edit', $roles) || in_array('empresa/trash', $roles) ? '<th>Actions</th>' : ''; ?>
                </tr>
            </thead>
            <tbody>
                <?php
                $i = 1;
                foreach ($empresas as $empresas => $row) {
                    echo '<tr id="empresa_' . $row['idempresa'] . '">';
                    echo '<td>' . $i++ . '</td>';
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
                            $bgcolor = '#F7FE2E';
                        } else {
                            $bgcolor = '#2EFE2E';
                        }

                        if (in_array("empresa/evaluar", $roles)) {
                            echo '<td bgcolor="' . $bgcolor . '"><a href="' . site_url('empresa/graphics/' . $row['idempresa']) . '">' . $row['puntaje'] . '%</a></td>';
                        } else {
                            echo '<td bgcolor="' . $bgcolor . '">' . $row['puntaje'] . '</td>';
                        }
                    }

                    echo in_array('empresa/edit', $roles) || in_array('empresa/trash', $roles) ? '<td>' : '';
                    echo in_array('empresa/edit', $roles) ? '<a href="' . site_url('empresa/edit') . '/' . $row['idempresa'] . '">Editar</a>' : '';
                    echo in_array('empresa/trash', $roles) ? '&nbsp; <a id="' . $row['idempresa'] . '" class="trash">Trash</a>' : '';
                    echo in_array('empresa/edit', $roles) || in_array('empresa/trash', $roles) ? '</td>' : '';
                    echo '</tr>';
                }
                ?>
            </tbody>

        </table>
    </div>


    <div class="row">
        <div class="col-md-12 text-center">
            <?php echo $this->pagination->create_links() ?>
        </div>
    </div> 
</div>

<script>
    $(function () {
        $('#list_load tbody tr').on('click', function (event) {
            $(this).addClass('highlight').siblings().removeClass('highlight');
        });

        $('body').on('click', '.po', function (evt) {
            evt.preventDefault();
            var load_id = $(this).data('load_id');
            var editHtml = '<ul><li data-load_edit="' + load_id + '">Edit</li></ul>';
//            $('#abc').append(editHtml);
            var popover = $(this).attr('id');
            $('#popover_content ul li a.editLink').attr('href', 'load/update/' + popover)

            $(this).popover({
                "trigger": "manual",
                "html": "true",
                "title": 'Load Options # ' + $(this).html() + '<span style="margin-left:15px;" class="pull-right"><a href="#" onclick="$(&quot;#' + popover + '&quot;).popover(&quot;toggle&quot;);" class="text-danger popover-close" data-bypass="true" title="Close"><i class="fa fa-close"></i>X</a></span>',
                "content": $('#popover_content').html()
//                "content":'<ul><li><a data-id="4" title="Edit this Load" href="load/update/'+popover+'"><i class="icon-pencil"></i> Edit</a> </li></ul>'
            });
            $(this).popover('toggle');

        });

        $('body').on('click', '.trash', function (evt) {
            evt.preventDefault();
            var empresa = $(this);
            var id = empresa.attr('id');
            var r = confirm("Confirm trashing empresa?");

            if (r == true) {
                $.ajax({
                    type: "POST",
                    url: 'empresa/change_status/' + id + '/' + 0,
                    async: true,
                    dataType: "json",
                    beforeSend: function () {
                        $('#result_destination').html('Loading...');
                        $('#result_destination').show();
                    },
                    success: function (data) {
                        if (data.status == 1) {
                            $('#empresa_' + id).remove();
                            console.log('empresa deleted');
                        } else {
                            alert('User could not be trashed. Please contact administrator.');
                        }
                    }
                });
            }

        });

        // Get loads filtered
        $('body').on('click', '#load_search', function (evt) {
            evt.preventDefault();
            searchEmpresa();
        });

    });

    function searchEmpresa() {
        window.location.replace("http://stackoverflow.com");
    }

</script>