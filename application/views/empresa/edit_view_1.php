<div class="container-fluid">
    <h2>Actualizar Empresa</h2>
    <div class="row">
        <div class="span12">
            <form id="register_form" class="form-horizontal" method="POST" action="<?php echo site_url('empresa/update') ?>">
                
                <input type="hidden" name="id" class="input-xlarge" value="<?php echo $empresa['idempresa'] ?>"/>

                <div class="control-group">
                    <label class="control-label">Nombre</label>
                    <div class="controls">
                        <input type="text" name="nombre" class="input-xlarge" value="<?php echo $empresa['nombre'] ?>"/>
                    </div>
                </div>

                <div class="control-group">
                    <label class="control-label">Nit</label>
                    <div class="controls">
                        <input type="text" name="nit" class="input-xlarge" value="<?php echo $empresa['nit'] ?>"/>
                    </div>
                </div>

                <div class="control-group">
                    <label class="control-label">Direccion</label>
                    <div class="controls">
                        <input type="text" name="direccion" class="input-xlarge" value="<?php echo $empresa['direccion'] ?>"/>
                    </div>
                </div>

                <div class="control-group">
                    <label class="control-label">Telefono</label>
                    <div class="controls">
                        <input type="text" name="telefono" class="input-xlarge" value="<?php echo $empresa['telefono'] ?>"/>
                    </div>
                </div>

                <div class="control-group">
                    <a href="<?php echo site_url('/empresa/editar_test/') . '/' . $empresa['idempresa'] ?>">Actualizar test</a>
                </div>

                <div class="control-group">
                    <a href="<?php echo site_url('/empresa/graphics/') . '/' . $empresa['idempresa'] ?>">Graficos</a>
                </div>            

                <div class="control-group">
                    <div class="controls">
                        <button type="submit" class="btn btn-primary" hidefocus="true" style="outline: medium none;"><span class="gradient">Guardar</span></button>                    
                        <button onclick="location.href = '<?php echo site_url('/empresa') ?>';" style="border-radius: 16%; height: 25px;">Cancelar</button>
                    </div>
                </div>      
            </form>
                        
        </div>
    </div>
</div>
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
                    window.location.href = '<?php echo site_url('empresa') ?>';
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