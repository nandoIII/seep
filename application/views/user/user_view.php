<div class="container-fluid">
    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="#">Usuarios</a>
        </li>
        <li class="breadcrumb-item active">Listado</li>
    </ol>

    <div class="card-body">
        <div class="card-header">
            <i class="fas fa-table"></i>
            Usuarios
        </div>

            <?php
            if (in_array("user/add", $roles)) {
                ?>
                <div id="category-button"><a style="outline: medium none;" hidefocus="true" href="<?php echo site_url('user/add'); ?>">Add</a></div>
            <?php } ?>                 



        <div class="table-responsive">
            <table id="list_user" class="table table-hover table-bordered table-striped">
                <thead>
                    <tr>
                    <tr style="background-color: #EBEBEB">
                        <th>#</th>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Login</th>
                        <?php echo in_array('user/edit', $roles) || in_array('user/trash', $roles) ? '<th>Actions</th>' : ''; ?>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $i = 1;
                    foreach ($users as $user => $row) {
                        if ($sesion['login'] != 'admin' && $row['login'] == 'admin')
                            continue;
                        echo '<tr id="user_' . $row['iduser'] . '">';
                        echo '<td>' . $i++ . '</td>';
                        echo '<td>' . $row['name'] . '</td>';
                        echo '<td>' . $row['phone'] . '</td>';
                        echo '<td>' . $row['email'] . '</td>';
                        echo '<td>' . $row['login'] . '</td>';
                        echo in_array('user/edit', $roles) || in_array('user/trash', $roles) ? '<td>' : '';
                        echo in_array('user/edit', $roles) ? '<a href="user/edit/' . $row['iduser'] . '">Edit</a>' : '';
                        echo in_array('user/trash', $roles) ? '&nbsp; <a id="' . $row['iduser'] . '" class="trash">Trash</a>' : '';
                        echo in_array('user/edit', $roles) || in_array('user/trash', $roles) ? '</td>' : '';
                        echo '</tr>';
                    }
                    ?>
                </tbody>

            </table>
        </div>
    </div>
</div>

<script>
    $(function () {
        $('#list_user tbody tr').on('click', function (event) {
            $(this).addClass('highlight').siblings().removeClass('highlight');
        });

        //Set drop model vars
        $('body').on('click', '.trash', function (evt) {
            evt.preventDefault();
            var user = $(this);
            var id = user.attr('id');
            var r = confirm("Confirm trashing user?");

            if (r == true) {
                $.ajax({
                    type: "POST",
                    url: 'user/change_status/' + id + '/' + 0,
                    async: true,
                    dataType: "json",
                    beforeSend: function () {
                        $('#result_destination').html('Loading...');
                        $('#result_destination').show();
                    },
                    success: function (data) {
                        if (data.status == 1) {
                            $('#user_' + id).remove();
                            console.log('user deleted');
                        } else {
                            alert('User could not be trashed. Please contact administrator.');
                        }
                    }
                });
            }

        });

        /*     $('body').on('click', '.po', function (evt) {
         evt.preventDefault();
         //            $('#abc').append(editHtml);
         var id_carrier = $(this).attr('id');
         $('#popover_content ul li a.viewDriversLink').attr('href', 'driver/carrier_drivers/' + id_carrier);
         
         $(this).popover({
         "trigger": "manual",
         "html": "true",
         "title": 'Carrier Options: ' + $(this).html() + '<span style="margin-left:15px;" class="pull-right"><a href="#" onclick="$(&quot;#' + id_carrier + '&quot;).popover(&quot;toggle&quot;);" class="text-danger popover-close" data-bypass="true" title="Close"><i class="fa fa-close"></i>X</a></span>',
         "content": $('#popover_content').html()
         //                "content":'<ul><li><a data-id="4" title="Edit this Load" href="load/update/'+popover+'"><i class="icon-pencil"></i> Edit</a> </li></ul>'
         });
         $(this).popover('toggle');
         
         });*/

    });

</script>