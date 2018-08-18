<div id="category-actions">
    <div id="category-button"><a style="outline: medium none;" hidefocus="true" href="<?php echo site_url('Empresa/'); ?>"><img src="<?php echo base_url() ?>/public/img/images/drivers-bt-w.png" style=" width:40px; height:40px; margin-top:10px" alt="View All Drivers"></a></div>
    <div class="loads-title" id="category-title" style="height: 32px;padding-top: 15px;"><h2 style="font-weight: 600;letter-spacing: 1px;padding-right: 5px;">Actualizar Test</h2></div>
    <div id="category-button"></div>
    <div id="category-search" class="search-customer"></div>
    <div id="category-search" class="search-carrier"></div>
    <div id="category-search" class="search-loads"></div>
</div>
<div class="row">
    <div class="span6 offset2">
        <form id="register_form" class="form-horizontal" method="POST" action="<?php echo site_url('empresa/actualizar_test') ?>">
            <input type="hidden" name="id" class="input-xlarge" value="<?php echo $empresa_test['idempresa_test'] ?>"/>
            <input type="hidden" name="idempresa" class="input-xlarge" value="<?php echo $empresa_test['empresa_idempresa'] ?>"/>
            <div class="text-right"><h3>Actualizar test</h3></div>

            <div class="control-group">
                <label class="control-label">Cuentan con personal capacitado en innovac&iacute;on</label>
                <div class="controls">
                    <select class="form-control" id="sel1" name="criterio1">
                          <option value="1" <?php $sel=''; $empresa_test['criterio1'] == 1 ? $sel='selected="selected"':$sel=''; echo $sel; ?>>Si</option>
                          <option value="0" <?php $sel=''; $empresa_test['criterio1'] == 0 ? $sel='selected="selected"':$sel=''; echo $sel; ?>>No</option>
                    </select>                    
                </div>
            </div>              

            <div class="control-group">
                <label class="control-label">Cuentan con espacios para generar ideas</label>
                <div class="controls">
                    <select class="form-control" id="sel1" name="criterio2">
                          <option value="1" <?php $sel=''; $empresa_test['criterio2'] == 1 ? $sel='selected="selected"':$sel=''; echo $sel; ?>>Si</option>
                          <option value="0" <?php $sel=''; $empresa_test['criterio2'] == 0 ? $sel='selected="selected"':$sel=''; echo $sel; ?>>No</option>
                    </select>  
                </div>
            </div>

            <div class="control-group">
                <label class="control-label">Cuentan con equipos muntidisciplinarios</label>
                <div class="controls">
                    <select class="form-control" id="sel1" name="criterio3">
                          <option value="1" <?php $sel=''; $empresa_test['criterio3'] == 1 ? $sel='selected="selected"':$sel=''; echo $sel; ?>>Si</option>
                          <option value="0" <?php $sel=''; $empresa_test['criterio3'] == 0 ? $sel='selected="selected"':$sel=''; echo $sel; ?>>No</option>
                    </select>  
                </div>
            </div>

            <div class="control-group">
                <label class="control-label">Cuentan con horarios flexibles</label>
                <div class="controls">
                    <select class="form-control" id="sel1" name="criterio4">
                          <option value="1" <?php $sel=''; $empresa_test['criterio4'] == 1 ? $sel='selected="selected"':$sel=''; echo $sel; ?>>Si</option>
                          <option value="0" <?php $sel=''; $empresa_test['criterio4'] == 0 ? $sel='selected="selected"':$sel=''; echo $sel; ?>>No</option>
                    </select>  
                </div>
            </div>

            <div class="control-group">
                <label class="control-label">Cuentan con cultura de innovac&iacute;on</label>
                <div class="controls">
                    <select class="form-control" id="sel1" name="criterio5">
                          <option value="1" <?php $sel=''; $empresa_test['criterio5'] == 1 ? $sel='selected="selected"':$sel=''; echo $sel; ?>>Si</option>
                          <option value="0" <?php $sel=''; $empresa_test['criterio5'] == 0 ? $sel='selected="selected"':$sel=''; echo $sel; ?>>No</option>
                    </select>  
                </div>
            </div>

            <div class="control-group">
                <div class="controls">
                    <button type="submit" class="btn btn-red btn-small" hidefocus="true" style="outline: medium none;"><span class="gradient">Save</span></button>                    
                    <button onclick="location.href = '<?php echo site_url('/empresa') ?>';" style="border-radius: 16%; height: 25px;">Cancel</button>
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