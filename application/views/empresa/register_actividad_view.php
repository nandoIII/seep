<div class="container-fluid">
    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="#">Ingresar Actividad</a>
        </li>
        <li class="breadcrumb-item active"></li>
    </ol>

    <div class="card card-register mx-auto mt-5">
        <div class="card-header">Registrar Actividad</div>
        <div class="card-body">
            <form id="register_form" class="form-horizontal" method="POST" action="<?php echo site_url('empresa/insert_actividad/' . $idempresa) ?>">
                <div class="form-group">
                    <div class="form-label-group">
                        <input type="text" id="inputFecha" class="form-control" name="fecha" placeholder="Email address" required="required">
                        <label for="inputFecha">Fecha</label>
                    </div>
                </div>               
                <div class="form-group">
                    <div class="form-label-group">
                        <input type="text" id="inputCaracterizacion" class="form-control" name="caracterizacion" placeholder="Email address" required="required">
                        <label for="inputCaracterizacion">Caracterizacion</label>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-label-group">
                        <input type="text" id="inputEstrategia" class="form-control" name="estrategia" placeholder="Email address" required="required">
                        <label for="inputEstrategia">Estrategia</label>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-label-group">
                        <input type="text" id="inputProceso" class="form-control" name="proceso" placeholder="Email address" required="required">
                        <label for="inputProceso">Proceso</label>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-label-group">
                        <input type="text" id="inputOrganizacion" class="form-control" name="organizacion" placeholder="Email address" required="required">
                        <label for="inputOrganizacion">Organizacion</label>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-label-group">
                        <input type="text" id="inputArticulacion" class="form-control" name="articulacion" placeholder="Email address" required="required">
                        <label for="inputArticulacion">Articulacion</label>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-label-group">
                        <input type="text" id="inputAprendizaje" class="form-control" name="aprendizaje" placeholder="Email address" required="required">
                        <label for="inputAprendizaje">Aprendizaje</label>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-label-group">
                        <input type="text" id="inputConocimiento" class="form-control" name="conocimiento" placeholder="Email address" required="required">
                        <label for="inputConocimiento">Conocimiento</label>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-label-group">
                        <input type="text" id="inputFinal" class="form-control" name="final" placeholder="Email address" required="required">
                        <label for="inputFinal">Final</label>
                    </div>
                </div>                 
                <button type="submit" class="btn btn-primary" hidefocus="true" style="outline: medium none;"><span class="gradient">Guardar</span></button>
            </form>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
<style>
    input[type="text"]{
        background-color: #fff;
    }
</style>
<script>
    $(function () {
        $("#register_form_error").hide();
        $('#register_form').submit(function (evt) {
            evt.preventDefault();
            var url = $(this).attr('action');
            var postData = $(this).serialize();
            $.post(url, postData, function (o) {
                if (o.result == 1) {
                    window.location.href = '<?php echo site_url('empresa/get_actividades/'.$idempresa) ?>';
                } else {
                    window.location.href = '<?php echo site_url('empresa') ?>';
                    $("#register_form_error").show();
                    var output = '<ul>';
                    for (var key in o.error) {
                        var value = o.error[key];
                        output += '<li>' + value + '</li>';
                    }
                    output += '</ul>';
                    $("#register_form_error").html(output);
                }
            }, 'json');
        });
    });
</script>