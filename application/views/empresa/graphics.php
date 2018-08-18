<div>
    <canvas id="canvas" height="400" width="400"></canvas>
            <div class="control-group">
                <div class="controls">
                    <button onclick="location.href = '<?php echo site_url('/empresa/edit/'.$idempresa.'/') ?>';" style="border-radius: 16%; height: 25px;">Editar</button>                    
                    <button onclick="location.href = '<?php echo site_url('/empresa') ?>';" style="border-radius: 16%; height: 25px;">Ir a empresas</button>
                </div>
            </div>     
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>

<script>
    $(function () {
        $.ajax({
            type: "POST",
            url: "<?php echo site_url('empresa/get_prom_eval/'.$idempresa.'/') ?>",
            async: true,
            dataType: "json",
            beforeSend: function () {
                $('#result_destination').html('Loading...');
                $('#result_destination').show();
            },
            success: function (data) {
                if (data) {
                    //$('#driver_' + id).remove();
                    drawGraphic(data);
                } else {
                    alert('Driver could not be trashed. Please contact administrator.');
                }
            }
        });
    });

    function drawGraphic(data) {
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
            datasets: [{
                    label: "Areas de Innovacion",
                    backgroundColor: "rgba(179,181,198,0.2)",
                    borderColor: "rgba(179,181,198,1)",
                    pointBackgroundColor: "rgba(179,181,198,1)",
                    pointBorderColor: "#fff",
                    pointHoverBackgroundColor: "#fff",
                    pointHoverBorderColor: "rgba(179,181,198,1)",
                    data: data
                }]
        };

        var ctx = document.getElementById("canvas");
        var myRadarChart = new Chart(ctx, {
            type: 'radar',
            data: dataLiteracy,
            options: options
        });

        //console.log(myRadarChart);    
    }
</script>
<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

