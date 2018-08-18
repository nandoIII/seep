<div id="category-actions">
    <div id="category-button"><a style="outline: medium none;" hidefocus="true" href="<?php echo site_url('empresa/'); ?>"><img src="<?php echo base_url() ?>/public/img/images/drivers-bt-w.png" style=" width:40px; height:40px; margin-top:10px" alt="View All Drivers"></a></div>
    <div class="loads-title" id="category-title" style="height: 32px;padding-top: 15px;"><h2 style="font-weight: 600;letter-spacing: 1px;padding-right: 5px;">Empresas</h2></div>
    <div id="category-button"><a style="outline: medium none;" hidefocus="true" href="<?php echo site_url('empresa/'); ?>"><img src="<?php echo base_url() ?>/public/img/images/loads-list-bt-45w.png" width="45" height="70" alt="View All Drivers"></a></div>
    <div id="category-button"><a style="outline: medium none;" hidefocus="true" href="<?php echo site_url('empresa/add'); ?>"><img src="<?php echo base_url() ?>/public/img/images/loads-add-bt-45w.png" width="45" height="70" alt="Add a Driver"></a></div>
    <div id="category-button"></div>
    <div id="category-search" class="search-customer"></div>
    <div id="category-search" class="search-carrier"></div>
    <div id="category-search" class="search-loads"></div>
</div>
<div class="row">
    <div class="span6 offset2">
        <div id="register_form_error"></div>
        <form id="register_form" class="form-horizontal" method="POST" action="<?php echo site_url('empresa/register') ?>">

            <div class="text-right"><h3>Registrar Empresa</h3></div>

            <div class="control-group">
                <label class="control-label">Nombre</label>
                <div class="controls">
                    <input type="text" name="nombre" class="input-xlarge"/>
                </div>
            </div>              

            <div class="control-group">
                <label class="control-label">NIT</label>
                <div class="controls">
                    <input type="text" name="nit" class="input-xlarge"/>
                </div>
            </div>

            <div class="control-group">
                <label class="control-label">Direccion</label>
                <div class="controls">
                    <input type="text" name="direccion" class="input-xlarge"/>
                </div>
            </div>

            <div class="control-group">
                <label class="control-label">Telefono</label>
                <div class="controls">
                    <input type="text" name="telefono" class="input-xlarge"/>
                </div>
            </div>

            <div class="control-group">
                <div class="controls">
                    <button type="submit" class="btn btn-red btn-small" hidefocus="true" style="outline: medium none;"><span class="gradient">Guardar</span></button>                    
                    <button onclick="location.href = '<?php echo site_url('/empresa') ?>';" style="border-radius: 16%; height: 25px;">Cancelar</button>
                </div>
            </div>      
        </form>        
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