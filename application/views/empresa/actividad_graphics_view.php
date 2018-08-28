<div class="container-fluid">
    <canvas id="canvas" height="400" width="400"></canvas>
    <div class="control-group">
        <div class="controls">
<!--            <button onclick="location.href = '<?php echo site_url('/empresa/edit/' . $idempresa . '/') ?>';" style="border-radius: 16%; height: 25px;">Editar</button>                    
            <button onclick="location.href = '<?php echo site_url('/empresa') ?>';" style="border-radius: 16%; height: 25px;">Ir a empresas</button>-->
        </div>
    </div>     
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>

<script>
    $(function () {
        $.ajax({
            type: "POST",
            url: "<?php echo site_url('empresa/get_actividades_test/' . $idempresa . '/') ?>",
            async: true,
            dataType: "json",
            beforeSend: function () {
                $('#result_destination').html('Loading...');
                $('#result_destination').show();
            },
            success: function (data) {
                if (data) {
                    //$('#driver_' + id).remove();
                    var datasets = crearDatasets(data);
                    drawGraphic(datasets);
                } else {
                    alert('Driver could not be trashed. Please contact administrator.');
                }
            }
        });
    });

    function drawGraphic(datasets) {
        var options = {
            title: {
                display: true,
                text: 'Resultado de la Evaluacion',
                fontSize: 25
            },
            responsive: false,
            maintainAspectRatio: true,
            scale: {
                ticks: {
                    beginAtZero: true,
                    max: 7
                }
            }
        };

        var dataLiteracy = {
            labels: [
                "Estrategia", "Proceso", "Organizacion", "Articulacion", "Aprendizaje"
            ],
            datasets: datasets
        };

        var ctx = document.getElementById("canvas");
        var myRadarChart = new Chart(ctx, {
            type: 'radar',
            data: dataLiteracy,
            options: options
        });

        //console.log(myRadarChart);    
    }

    function crearDatasets(data) {
        var colores = ['rgba(00,255,00,0.1)', 'rgba(0,255,255,0.1)', '#01DF01', '#FF8000', '#8A0808'];
        var borderColor = ['#00FF00','#00FFFF']
        var datasets = [];
        var label_name = '';
        for (var i = 0; i < data.length; i++) {
            if (i == 0) {
                label_name = 'Diagnostico';
            } else {
                label_name = 'Actividad ' + i;
            }

            var valor = {
                label: label_name,
                backgroundColor: colores[i],
                borderColor: borderColor[i],
                borderWidth: 2,
                data: data[i]
            };
            datasets[i] = valor;
        }
        return datasets;
    }
</script>
<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

