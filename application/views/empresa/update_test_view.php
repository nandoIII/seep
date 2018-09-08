<div class="container-fluid">
    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="#">Empresas</a>
        </li>
        <li class="breadcrumb-item active">Editar Evaluacion de Emrpresa <?php echo $empresa['nombre'] ?></li>
    </ol>    

    <form id="register_form" class="form-horizontal" method="POST" action="<?php echo site_url('empresa/actualizar_test/' . $empresa_test['idempresa_test']) ?>">
        <input type="hidden" name="idempresa_test" value="<?php echo $empresa_test['idempresa_test'] ?>">	    

        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#caracterizacion" role="tab" aria-controls="home" aria-selected="true">Caracterizacion</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#estrategia" role="tab" aria-controls="profile" aria-selected="false">Estrategia</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="contact-tab" data-toggle="tab" href="#procesos" role="tab" aria-controls="procesos" aria-selected="false">Procesos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="contact-tab" data-toggle="tab" href="#organizacion" role="tab" aria-controls="organizacion" aria-selected="false">Organizacion</a>
            </li> 
            <li class="nav-item">
                <a class="nav-link" id="contact-tab" data-toggle="tab" href="#articulacion" role="tab" aria-controls="articulacion" aria-selected="false">Articulacion</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="contact-tab" data-toggle="tab" href="#aprendizaje" role="tab" aria-controls="aprendizaje" aria-selected="false">Aprendizaje</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="contact-tab" data-toggle="tab" href="#conocimiento" role="tab" aria-controls="conocimiento" aria-selected="false">Conocimiento</a>
            </li>             
        </ul>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="caracterizacion" role="tabpanel" aria-labelledby="home-tab">
                <div class="control-group">
                    <label>Defina el tamaño de su organización por número de empleados a partir de los siguientes rangos</label>
                    <div>
                        <div class="radio">
                            <label><input type="radio" <?php echo $empresa_test['caract_1'] == 1 ? 'checked="checked"' : '' ?> name="caract_1" value="1"> No superior a diez (10) trabajadores</label>
                        </div>
                        <div class="radio">
                            <label><input type="radio" <?php echo $empresa_test['caract_1'] == 2 ? 'checked="checked"' : '' ?> name="caract_1" value="2">Entre once (11) y cincuenta (50) trabajadores</label>
                        </div>
                        <div class="radio">
                            <label><input type="radio" <?php echo $empresa_test['caract_1'] == 3 ? 'checked="checked"' : '' ?> name="caract_1" value="3">Entre cincuenta y uno (51) y doscientos (200) trabajadores</label>
                        </div>
                        <div class="radio">
                            <label><input type="radio" <?php echo $empresa_test['caract_1'] == 4 ? 'checked="checked"' : '' ?> name="caract_1" value="4">Mayor a doscientos (200) trabajadores</label>
                        </div>                                 
                    </div>
                </div>

                <div class="control-group">
                    <label>Defina el tamaño de su organización por el valor de los activos a partir de los siguientes rangos</label>
                    <div>
                        <div class="radio">
                            <label><input type="radio" <?php echo $empresa_test['caract_2'] == 1 ? 'checked="checked"' : '' ?> name="caract_2" value="1"> Hasta quinientos (500) salarios mínimos mensuales legales vigentes</label>
                        </div>
                        <div class="radio">
                            <label><input type="radio" <?php echo $empresa_test['caract_2'] == 2 ? 'checked="checked"' : '' ?> name="caract_2" value="2">Entre quinientos uno (501) y cinco mil (5.000) salarios mínimos mensuales legales vigentes</label>
                        </div>
                        <div class="radio">
                            <label><input type="radio" <?php echo $empresa_test['caract_2'] == 3 ? 'checked="checked"' : '' ?> name="caract_2" value="3">Entre cinco mil uno (5.001) y veinte mil (20.000) salarios mínimos mensuales legales vigentes</label>
                        </div>
                        <div class="radio">
                            <label><input type="radio" <?php echo $empresa_test['caract_2'] == 4 ? 'checked="checked"' : '' ?> name="caract_2" value="4">Mayores a veinte mil (20.000) salarios mínimos mensuales legales vigentes</label>
                        </div>                                 
                    </div>
                </div> 

                <div class="control-group">
                    <label class="control-label">Escriba en el cuadro correspondiente el monto de las ventas de su organización en el último año</label>
                    <div class="controls">
                        <input type="text" name="caract_3" value="<?php echo $empresa_test['caract_3'] ?>" class="input-xlarge"/>
                    </div>
                </div> 

                <div class="control-group">
                    <label class="control-label">Escriba en el cuadro correspondiente qué porcentaje de las ventas anuales de su organización fue destinado a Investigación, Desarrollo tecnológico o Innovación (I+D+i) en el último año.</label>
                    <div class="controls">
                        <input type="text" name="caract_4" value="<?php echo $empresa_test['caract_4'] ?>" class="input-xlarge"/>
                    </div>
                </div>

                <div class="control-group">
                    <label>Defina la participación del mercado de su organización a partir de los siguientes rangos</label>
                    <div>
                        <div class="radio">
                            <label><input type="radio" <?php echo $empresa_test['caract_5'] == 1 ? 'checked="checked"' : '' ?>  name="caract_5" value="1">Menor al 4%</label>
                        </div>
                        <div class="radio">
                            <label><input type="radio" <?php echo $empresa_test['caract_5'] == 2 ? 'checked="checked"' : '' ?> name="caract_5" value="2">Entre el 5% y el 21%</label>
                        </div>
                        <div class="radio">
                            <label><input type="radio" <?php echo $empresa_test['caract_5'] == 3 ? 'checked="checked"' : '' ?> name="caract_5" value="3">Entre el 22% y el 45%</label>
                        </div>
                        <div class="radio">
                            <label><input type="radio" <?php echo $empresa_test['caract_5'] == 4 ? 'checked="checked"' : '' ?> name="caract_5" value="4">Mayor al 46%</label>
                        </div>                                 
                    </div>
                </div> 
                <div class="control-group">
                    <label class="control-label">Código CIIU</label>
                    <div class="controls">
                        <input type="text" value="<?php echo $empresa_test['codigo_ciiu'] ?>" name="codigo_ciiu" class="input-xlarge"/>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label">Sitio Web</label>
                    <div class="controls">
                        <input type="text" value="<?php echo $empresa_test['sitio_web'] ?>" name="sitio_web" class="input-xlarge"/>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label">Direccion</label>
                    <div class="controls">
                        <input type="text" value="<?php echo $empresa_test['direccion'] ?>" name="direccion" class="input-xlarge"/>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label">Sector</label>
                    <div class="controls">
                        <select name="sector" class="form-control" id="sel1">
                            <option value="A" <?php echo $empresa_test['sector'] == "A" ? 'selected' : '' ?>>A - Agricultura, ganaderia, caza, silvicultura y pesca</option>
                            <option value="B" <?php echo $empresa_test['sector'] == "B" ? 'selected' : '' ?>>B - Explotacion de minas y canteras</option>
                            <option value="C" <?php echo $empresa_test['sector'] == "C" ? 'selected' : '' ?>>C - Industrias manufactureras</option>
                            <option value="D" <?php echo $empresa_test['sector'] == "D" ? 'selected' : '' ?>>D – Suministro de electricidad, gas, vapor y aire acondicionado</option>
                            <option value="E" <?php echo $empresa_test['sector'] == "E" ? 'selected' : '' ?>>E – Distribución de agua; evacuación y tratamiento de aguas residuales, gestión de desechos y actividades de saneamiento ambiental</option>
                            <option value="F" <?php echo $empresa_test['sector'] == "F" ? 'selected' : '' ?>>F – Construcción</option>
                            <option value="G" <?php echo $empresa_test['sector'] == "G" ? 'selected' : '' ?>>G – Comercio al por mayor y al por menor; reparación de vehículos automotores y motocicletas</option>
                            <option value="H" <?php echo $empresa_test['sector'] == "H" ? 'selected' : '' ?>>H – Transporte y almacenamiento</option>
                            <option value="I" <?php echo $empresa_test['sector'] == "I" ? 'selected' : '' ?>>I – Alojamiento y servicios de comida</option>
                            <option value="J" <?php echo $empresa_test['sector'] == "J" ? 'selected' : '' ?>>J – Información y comunicaciones</option>
                            <option value="K" <?php echo $empresa_test['sector'] == "K" ? 'selected' : '' ?>>K – Actividades financieras y de seguros</option>
                            <option value="L" <?php echo $empresa_test['sector'] == "L" ? 'selected' : '' ?>>L – Actividades inmobiliarias</option>
                            <option value="M" <?php echo $empresa_test['sector'] == "M" ? 'selected' : '' ?>>M – Actividades profesionales, científicas y técnicas</option>
                            <option value="N" <?php echo $empresa_test['sector'] == "N" ? 'selected' : '' ?>>N – Actividades de servicios administrativos y de apoyo</option>
                            <option value="O" <?php echo $empresa_test['sector'] == "O" ? 'selected' : '' ?>>O – Administración pública y defensa; planes de seguridad social de afiliación obligatoria</option>
                            <option value="P" <?php echo $empresa_test['sector'] == "P" ? 'selected' : '' ?>>P – Educación</option>
                            <option value="Q" <?php echo $empresa_test['sector'] == "Q" ? 'selected' : '' ?>>Q – Actividades de atención de la salud humana y de asistencia social</option>
                            <option value="R" <?php echo $empresa_test['sector'] == "R" ? 'selected' : '' ?>>R – Actividades artísticas, de entretenimiento y recreación</option>
                            <option value="S" <?php echo $empresa_test['sector'] == "S" ? 'selected' : '' ?>>S – Otras actividades de servicios</option>
                            <option value="T" <?php echo $empresa_test['sector'] == "T" ? 'selected' : '' ?>>T – Actividades de los hogares en calidad de empleadores; actividades no diferenciadas de los hogares individuales como productores de bienes y servicios para uso propio</option>
                            <option value="U" <?php echo $empresa_test['sector'] == "U" ? 'selected' : '' ?>>U – Actividades de organizaciones y entidades extraterritoriales</option>
                            <option value="V" <?php echo $empresa_test['sector'] == "V" ? 'selected' : '' ?>>V – Turismo</option>
                        </select>
                    </div>
                </div> 

                <div class="control-group">
                    <label class="control-label">Usted está diligenciando este autodiagnóstico porque está aplicando a una convocatoria o programa de: (*)</label>
                    <div class="controls">
                        <select name="programa" class="form-control" id="sel1">
                            <option <?php echo $empresa_test['programa'] == "Colciencias" ? 'selected' : '' ?>>Colciencias</option>
                            <option <?php echo $empresa_test['programa'] == "iNNpulsa" ? 'selected' : '' ?>>iNNpulsa</option>
                            <option <?php echo $empresa_test['programa'] == "Otra" ? 'selected' : '' ?>>Otra</option>
                            <option <?php echo $empresa_test['programa'] == "Ninguna" ? 'selected' : '' ?>>Ninguna</option>
                        </select>
                    </div>
                </div>                  
            </div>
            <div class="tab-pane fade" id="estrategia" role="tabpanel" aria-labelledby="profile-tab">
                <div class="control-group">
                    <div class="span8">En la organización se realizan ejercicios periódicos de planeación de la innovación, que incluye planes de acción, objetivos, indicadores, responsables, presupuestos y mecanismos de control escritos.</div>
                    <div class="span4">
                        <label class="radio-inline">
                            <input type="radio" <?php echo $empresa_test['estrat_1'] == 1 ? 'checked="checked"' : '' ?> name="estrat_1" value="1">1
                        </label>
                        <label class="radio-inline">
                            <input type="radio" <?php echo $empresa_test['estrat_1'] == 2 ? 'checked="checked"' : '' ?> name="estrat_1" value="2">2
                        </label>
                        <label class="radio-inline">
                            <input type="radio" <?php echo $empresa_test['estrat_1'] == 3 ? 'checked="checked"' : '' ?> name="estrat_1" value="3">3
                        </label>
                        <label class="radio-inline">
                            <input type="radio" <?php echo $empresa_test['estrat_1'] == 4 ? 'checked="checked"' : '' ?> name="estrat_1" value="4">4
                        </label>
                        <label class="radio-inline">
                            <input type="radio" <?php echo $empresa_test['estrat_1'] == 5 ? 'checked="checked"' : '' ?> name="estrat_1" value="5">5
                        </label>
                        <label class="radio-inline">
                            <input type="radio" <?php echo $empresa_test['estrat_1'] == 6 ? 'checked="checked"' : '' ?> name="estrat_1" value="6">6
                        </label>
                        <label class="radio-inline">
                            <input type="radio" <?php echo $empresa_test['estrat_1'] == 7 ? 'checked="checked"' : '' ?> name="estrat_1" value="7">7
                        </label>                                
                    </div>
                </div>

                <div class="control-group">
                    <div class="span8">Los proyectos de investigación, desarrollo e innovación de la empresa están alineados con la estrategia de innovación.</div>
                    <div class="span4">
                        <label class="radio-inline">
                            <input type="radio" <?php echo $empresa_test['estrat_2'] == 1 ? 'checked="checked"' : '' ?> name="estrat_2" value="1">1
                        </label>
                        <label class="radio-inline">
                            <input type="radio" <?php echo $empresa_test['estrat_2'] == 2 ? 'checked="checked"' : '' ?> name="estrat_2" value="2">2
                        </label>
                        <label class="radio-inline">
                            <input type="radio" <?php echo $empresa_test['estrat_2'] == 3 ? 'checked="checked"' : '' ?> name="estrat_2" value="3">3
                        </label>
                        <label class="radio-inline">
                            <input type="radio" <?php echo $empresa_test['estrat_2'] == 4 ? 'checked="checked"' : '' ?> name="estrat_2" value="4">4
                        </label>
                        <label class="radio-inline">
                            <input type="radio" <?php echo $empresa_test['estrat_2'] == 5 ? 'checked="checked"' : '' ?> name="estrat_2" value="5">5
                        </label>
                        <label class="radio-inline">
                            <input type="radio" <?php echo $empresa_test['estrat_2'] == 6 ? 'checked="checked"' : '' ?> name="estrat_2" value="6">6
                        </label>
                        <label class="radio-inline">
                            <input type="radio" <?php echo $empresa_test['estrat_2'] == 7 ? 'checked="checked"' : '' ?> name="estrat_2" value="7">7
                        </label>                                
                    </div>
                </div>

                <div class="control-group">
                    <div class="span8">En la organización se tienen definidos los temas en los cuales se va a llevar a cabo investigación en el corto, mediano y largo plazo.</div>
                    <div class="span4">
                        <label class="radio-inline">
                            <input type="radio" <?php echo $empresa_test['estrat_3'] == 1 ? 'checked="checked"' : '' ?> name="estrat_3" value="1">1
                        </label>
                        <label class="radio-inline">
                            <input type="radio" <?php echo $empresa_test['estrat_3'] == 2 ? 'checked="checked"' : '' ?> name="estrat_3" value="2">2
                        </label>
                        <label class="radio-inline">
                            <input type="radio" <?php echo $empresa_test['estrat_3'] == 3 ? 'checked="checked"' : '' ?> name="estrat_3" value="3">3
                        </label>
                        <label class="radio-inline">
                            <input type="radio" <?php echo $empresa_test['estrat_3'] == 4 ? 'checked="checked"' : '' ?> name="estrat_3" value="4">4
                        </label>
                        <label class="radio-inline">
                            <input type="radio" <?php echo $empresa_test['estrat_3'] == 5 ? 'checked="checked"' : '' ?> name="estrat_3" value="5">5
                        </label>
                        <label class="radio-inline">
                            <input type="radio" <?php echo $empresa_test['estrat_3'] == 6 ? 'checked="checked"' : '' ?> name="estrat_3" value="6">6
                        </label>
                        <label class="radio-inline">
                            <input type="radio" <?php echo $empresa_test['estrat_3'] == 7 ? 'checked="checked"' : '' ?> name="estrat_3" value="7">7
                        </label>                                
                    </div>
                </div> 

                <div class="control-group">
                    <div class="span8">En la organización se tiene definida una estructura interna para llevar a cabo las actividades de investigación, desarrollo e innovación (I+D+i).</div>
                    <div class="span4">
                        <label class="radio-inline">
                            <input type="radio" <?php echo $empresa_test['estrat_4'] == 1 ? 'checked="checked"' : '' ?> name="estrat_4" value="1">1
                        </label>
                        <label class="radio-inline">
                            <input type="radio" <?php echo $empresa_test['estrat_4'] == 2 ? 'checked="checked"' : '' ?> name="estrat_4" value="2">2
                        </label>
                        <label class="radio-inline">
                            <input type="radio" <?php echo $empresa_test['estrat_4'] == 3 ? 'checked="checked"' : '' ?> name="estrat_4" value="3">3
                        </label>
                        <label class="radio-inline">
                            <input type="radio" <?php echo $empresa_test['estrat_4'] == 4 ? 'checked="checked"' : '' ?> name="estrat_4" value="4">4
                        </label>
                        <label class="radio-inline">
                            <input type="radio" <?php echo $empresa_test['estrat_4'] == 5 ? 'checked="checked"' : '' ?> name="estrat_4" value="5">5
                        </label>
                        <label class="radio-inline">
                            <input type="radio" <?php echo $empresa_test['estrat_4'] == 6 ? 'checked="checked"' : '' ?> name="estrat_4" value="6">6
                        </label>
                        <label class="radio-inline">
                            <input type="radio" <?php echo $empresa_test['estrat_4'] == 7 ? 'checked="checked"' : '' ?> name="estrat_4" value="7">7
                        </label>                                
                    </div>
                </div>

                <div class="control-group">
                    <div class="span8">La organización usa regularmente metodologías o herramientas que permitan tomar decisiones estratégicas de mediano y largo plazo.</div>
                    <div class="span4">
                        <label class="radio-inline">
                            <input type="radio" <?php echo $empresa_test['estrat_5'] == 1 ? 'checked="checked"' : '' ?> name="estrat_5" value="1">1
                        </label>
                        <label class="radio-inline">
                            <input type="radio" <?php echo $empresa_test['estrat_5'] == 2 ? 'checked="checked"' : '' ?> name="estrat_5" value="2">2
                        </label>
                        <label class="radio-inline">
                            <input type="radio" <?php echo $empresa_test['estrat_5'] == 3 ? 'checked="checked"' : '' ?> name="estrat_5" value="3">3
                        </label>
                        <label class="radio-inline">
                            <input type="radio" <?php echo $empresa_test['estrat_5'] == 4 ? 'checked="checked"' : '' ?> name="estrat_5" value="4">4
                        </label>
                        <label class="radio-inline">
                            <input type="radio" <?php echo $empresa_test['estrat_5'] == 5 ? 'checked="checked"' : '' ?> name="estrat_5" value="5">5
                        </label>
                        <label class="radio-inline">
                            <input type="radio" <?php echo $empresa_test['estrat_5'] == 6 ? 'checked="checked"' : '' ?> name="estrat_5" value="6">6
                        </label>
                        <label class="radio-inline">
                            <input type="radio" <?php echo $empresa_test['estrat_5'] == 7 ? 'checked="checked"' : '' ?> name="estrat_5" value="7">7
                        </label>                                
                    </div>
                </div>

                <div class="control-group">
                    <div class="span8">La organización cuenta con personal para monitorear constantemente las áreas del conocimiento importantes para su desarrollo.</div>
                    <div class="span4">
                        <label class="radio-inline">
                            <input type="radio" <?php echo $empresa_test['estrat_6'] == 1 ? 'checked="checked"' : '' ?> name="estrat_6" value="1">1
                        </label>
                        <label class="radio-inline">
                            <input type="radio" <?php echo $empresa_test['estrat_6'] == 2 ? 'checked="checked"' : '' ?> name="estrat_6" value="2">2
                        </label>
                        <label class="radio-inline">
                            <input type="radio" <?php echo $empresa_test['estrat_6'] == 3 ? 'checked="checked"' : '' ?> name="estrat_6" value="3">3
                        </label>
                        <label class="radio-inline">
                            <input type="radio" <?php echo $empresa_test['estrat_6'] == 4 ? 'checked="checked"' : '' ?> name="estrat_6" value="4">4
                        </label>
                        <label class="radio-inline">
                            <input type="radio" <?php echo $empresa_test['estrat_6'] == 5 ? 'checked="checked"' : '' ?> name="estrat_6" value="5">5
                        </label>
                        <label class="radio-inline">
                            <input type="radio" <?php echo $empresa_test['estrat_6'] == 6 ? 'checked="checked"' : '' ?> name="estrat_6" value="6">6
                        </label>
                        <label class="radio-inline">
                            <input type="radio" <?php echo $empresa_test['estrat_6'] == 7 ? 'checked="checked"' : '' ?> name="estrat_6" value="7">7
                        </label>                                
                    </div>
                </div>

                <div class="control-group">
                    <div class="span8">En sus procesos de planeación estratégica y de toma de decisiones, la organización incluye información del entorno.</div>
                    <div class="span4">
                        <label class="radio-inline">
                            <input type="radio" <?php echo $empresa_test['estrat_7'] == 1 ? 'checked="checked"' : '' ?> name="estrat_7" value="1">1
                        </label>
                        <label class="radio-inline">
                            <input type="radio" <?php echo $empresa_test['estrat_7'] == 2 ? 'checked="checked"' : '' ?> name="estrat_7" value="2">2
                        </label>
                        <label class="radio-inline">
                            <input type="radio" <?php echo $empresa_test['estrat_7'] == 3 ? 'checked="checked"' : '' ?> name="estrat_7" value="3">3
                        </label>
                        <label class="radio-inline">
                            <input type="radio" <?php echo $empresa_test['estrat_7'] == 4 ? 'checked="checked"' : '' ?> name="estrat_7" value="4">4
                        </label>
                        <label class="radio-inline">
                            <input type="radio" <?php echo $empresa_test['estrat_7'] == 5 ? 'checked="checked"' : '' ?> name="estrat_7" value="5">5
                        </label>
                        <label class="radio-inline">
                            <input type="radio" <?php echo $empresa_test['estrat_7'] == 6 ? 'checked="checked"' : '' ?> name="estrat_7" value="6">6
                        </label>
                        <label class="radio-inline">
                            <input type="radio" <?php echo $empresa_test['estrat_7'] == 7 ? 'checked="checked"' : '' ?> name="estrat_7" value="7">7
                        </label>                                
                    </div>
                </div>

                <div class="control-group">
                    <div class="span8">En la organización se tiene claridad de cuáles son los proyectos de innovación que se deben realizar para asegurar la sostenibilidad actual y el futuro de la compañía.</div>
                    <div class="span4">
                        <label class="radio-inline">
                            <input type="radio" <?php echo $empresa_test['estrat_8'] == 1 ? 'checked="checked"' : '' ?> name="estrat_8" value="1">1
                        </label>
                        <label class="radio-inline">
                            <input type="radio" <?php echo $empresa_test['estrat_8'] == 2 ? 'checked="checked"' : '' ?> name="estrat_8" value="2">2
                        </label>
                        <label class="radio-inline">
                            <input type="radio" <?php echo $empresa_test['estrat_8'] == 3 ? 'checked="checked"' : '' ?> name="estrat_8" value="3">3
                        </label>
                        <label class="radio-inline">
                            <input type="radio" <?php echo $empresa_test['estrat_8'] == 4 ? 'checked="checked"' : '' ?> name="estrat_8" value="4">4
                        </label>
                        <label class="radio-inline">
                            <input type="radio" <?php echo $empresa_test['estrat_8'] == 5 ? 'checked="checked"' : '' ?> name="estrat_8" value="5">5
                        </label>
                        <label class="radio-inline">
                            <input type="radio" <?php echo $empresa_test['estrat_8'] == 6 ? 'checked="checked"' : '' ?> name="estrat_8" value="6">6
                        </label>
                        <label class="radio-inline">
                            <input type="radio" <?php echo $empresa_test['estrat_8'] == 7 ? 'checked="checked"' : '' ?> name="estrat_8" value="7">7
                        </label>                                
                    </div>
                </div>                 
            </div>
            <div class="tab-pane fade" id="procesos" role="tabpanel" aria-labelledby="contact-tab">
                <div class="control-group">
                    <div class="span8">La organización tiene establecidos procesos, mecanismos o herramientas que le permite recoger y evaluar las ideas (innovadoras) de sus empleados. (para el mejoramiento o creación de nuevas estrategias, productos, procesos o servicios)</div>
                    <div class="span4">
                        <label class="radio-inline">
                            <input type="radio" <?php echo $empresa_test['proceso_1'] == 1 ? 'checked="checked"' : '' ?> name="proceso_1" value="1">1
                        </label>
                        <label class="radio-inline">
                            <input type="radio" <?php echo $empresa_test['proceso_1'] == 2 ? 'checked="checked"' : '' ?> name="proceso_1" value="2">2
                        </label>
                        <label class="radio-inline">
                            <input type="radio" <?php echo $empresa_test['proceso_1'] == 3 ? 'checked="checked"' : '' ?> name="proceso_1" value="3">3
                        </label>
                        <label class="radio-inline">
                            <input type="radio" <?php echo $empresa_test['proceso_1'] == 4 ? 'checked="checked"' : '' ?> name="proceso_1" value="4">4
                        </label>
                        <label class="radio-inline">
                            <input type="radio" <?php echo $empresa_test['proceso_1'] == 5 ? 'checked="checked"' : '' ?> name="proceso_1" value="5">5
                        </label>
                        <label class="radio-inline">
                            <input type="radio" <?php echo $empresa_test['proceso_1'] == 6 ? 'checked="checked"' : '' ?> name="proceso_1" value="6">6
                        </label>
                        <label class="radio-inline">
                            <input type="radio" <?php echo $empresa_test['proceso_1'] == 7 ? 'checked="checked"' : '' ?> name="proceso_1" value="7">7
                        </label>                                
                    </div>
                </div>

                <div class="control-group">
                    <div class="span8">La evaluación de las ideas se realiza teniendo en cuenta criterios previamente establecidos, que son conocidos por toda la organización.</div>
                    <div class="span4">
                        <label class="radio-inline">
                            <input type="radio" <?php echo $empresa_test['proceso_2'] == 1 ? 'checked="checked"' : '' ?> name="proceso_2" value="1">1
                        </label>
                        <label class="radio-inline">
                            <input type="radio" <?php echo $empresa_test['proceso_2'] == 2 ? 'checked="checked"' : '' ?> name="proceso_2" value="2">2
                        </label>
                        <label class="radio-inline">
                            <input type="radio" <?php echo $empresa_test['proceso_2'] == 3 ? 'checked="checked"' : '' ?> name="proceso_2" value="3">3
                        </label>
                        <label class="radio-inline">
                            <input type="radio" <?php echo $empresa_test['proceso_2'] == 4 ? 'checked="checked"' : '' ?> name="proceso_2" value="4">4
                        </label>
                        <label class="radio-inline">
                            <input type="radio" <?php echo $empresa_test['proceso_2'] == 5 ? 'checked="checked"' : '' ?> name="proceso_2" value="5">5
                        </label>
                        <label class="radio-inline">
                            <input type="radio" <?php echo $empresa_test['proceso_2'] == 6 ? 'checked="checked"' : '' ?> name="proceso_2" value="6">6
                        </label>
                        <label class="radio-inline">
                            <input type="radio" <?php echo $empresa_test['proceso_2'] == 7 ? 'checked="checked"' : '' ?> name="proceso_2" value="7">7
                        </label>                                
                    </div>
                </div>

                <div class="control-group">
                    <div class="span8">La organización tiene establecidos procesos, mecanismos o herramientas que le permite recoger y evaluar las ideas (innovadoras) provenientes de sus grupos de interés (Clientes, proveedores, investigadores, inversionistas, accionistas, entre otros externos).</div>
                    <div class="span4">
                        <label class="radio-inline">
                            <input type="radio" <?php echo $empresa_test['proceso_3'] == 1 ? 'checked="checked"' : '' ?> name="proceso_3" value="1">1
                        </label>
                        <label class="radio-inline">
                            <input type="radio" <?php echo $empresa_test['proceso_3'] == 2 ? 'checked="checked"' : '' ?> name="proceso_3" value="2">2
                        </label>
                        <label class="radio-inline">
                            <input type="radio" <?php echo $empresa_test['proceso_3'] == 3 ? 'checked="checked"' : '' ?> name="proceso_3" value="3">3
                        </label>
                        <label class="radio-inline">
                            <input type="radio" <?php echo $empresa_test['proceso_3'] == 4 ? 'checked="checked"' : '' ?> name="proceso_3" value="4">4
                        </label>
                        <label class="radio-inline">
                            <input type="radio" <?php echo $empresa_test['proceso_3'] == 5 ? 'checked="checked"' : '' ?> name="proceso_3" value="5">5
                        </label>
                        <label class="radio-inline">
                            <input type="radio" <?php echo $empresa_test['proceso_3'] == 6 ? 'checked="checked"' : '' ?> name="proceso_3" value="6">6
                        </label>
                        <label class="radio-inline">
                            <input type="radio" <?php echo $empresa_test['proceso_3'] == 7 ? 'checked="checked"' : '' ?> name="proceso_3" value="7">7
                        </label>                                
                    </div>
                </div> 

                <div class="control-group">
                    <div class="span8">La organización cuenta con procesos establecidos para el desarrollo de nuevos productos o servicios..
                        <div class="span4">
                            <label class="radio-inline">
                                <input type="radio" <?php echo $empresa_test['proceso_4'] == 1 ? 'checked="checked"' : '' ?> name="proceso_4" value="1">1
                            </label>
                            <label class="radio-inline">
                                <input type="radio" <?php echo $empresa_test['proceso_4'] == 2 ? 'checked="checked"' : '' ?> name="proceso_4" value="2">2
                            </label>
                            <label class="radio-inline">
                                <input type="radio" <?php echo $empresa_test['proceso_4'] == 3 ? 'checked="checked"' : '' ?> name="proceso_4" value="3">3
                            </label>
                            <label class="radio-inline">
                                <input type="radio" <?php echo $empresa_test['proceso_4'] == 4 ? 'checked="checked"' : '' ?> name="proceso_4" value="4">4
                            </label>
                            <label class="radio-inline">
                                <input type="radio" <?php echo $empresa_test['proceso_4'] == 5 ? 'checked="checked"' : '' ?> name="proceso_4" value="5">5
                            </label>
                            <label class="radio-inline">
                                <input type="radio" <?php echo $empresa_test['proceso_4'] == 6 ? 'checked="checked"' : '' ?> name="proceso_4" value="6">6
                            </label>
                            <label class="radio-inline">
                                <input type="radio" <?php echo $empresa_test['proceso_4'] == 7 ? 'checked="checked"' : '' ?> name="proceso_4" value="7">7
                            </label>                                
                        </div>
                    </div>

                    <div class="control-group">
                        <div class="span8">La organización tiene establecidas metas de Innovación, provenientes de ventas por nuevos productos, ahorros por implementación de nuevos procesos o insumos, acceso a nuevos mercados.</div>
                        <div class="span4">
                            <label class="radio-inline">
                                <input type="radio" <?php echo $empresa_test['proceso_5'] == 1 ? 'checked="checked"' : '' ?> name="proceso_5" value="1">1
                            </label>
                            <label class="radio-inline">
                                <input type="radio" <?php echo $empresa_test['proceso_5'] == 2 ? 'checked="checked"' : '' ?> name="proceso_5" value="2">2
                            </label>
                            <label class="radio-inline">
                                <input type="radio" <?php echo $empresa_test['proceso_5'] == 3 ? 'checked="checked"' : '' ?> name="proceso_5" value="3">3
                            </label>
                            <label class="radio-inline">
                                <input type="radio" <?php echo $empresa_test['proceso_5'] == 4 ? 'checked="checked"' : '' ?> name="proceso_5" value="4">4
                            </label>
                            <label class="radio-inline">
                                <input type="radio" <?php echo $empresa_test['proceso_5'] == 5 ? 'checked="checked"' : '' ?> name="proceso_5" value="5">5
                            </label>
                            <label class="radio-inline">
                                <input type="radio" <?php echo $empresa_test['proceso_5'] == 6 ? 'checked="checked"' : '' ?> name="proceso_5" value="6">6
                            </label>
                            <label class="radio-inline">
                                <input type="radio" <?php echo $empresa_test['proceso_5'] == 7 ? 'checked="checked"' : '' ?> name="proceso_5" value="7">7
                            </label>                                
                        </div>
                    </div>

                    <div class="control-group">
                        <div class="span8">La organización hace seguimiento de los procesos de innovación en cada una de sus etapas.</div>
                        <div class="span4">
                            <label class="radio-inline">
                                <input type="radio" <?php echo $empresa_test['proceso_6'] == 1 ? 'checked="checked"' : '' ?> name="proceso_6" value="1">1
                            </label>
                            <label class="radio-inline">
                                <input type="radio" <?php echo $empresa_test['proceso_6'] == 2 ? 'checked="checked"' : '' ?> name="proceso_6" value="2">2
                            </label>
                            <label class="radio-inline">
                                <input type="radio" <?php echo $empresa_test['proceso_6'] == 3 ? 'checked="checked"' : '' ?> name="proceso_6" value="3">3
                            </label>
                            <label class="radio-inline">
                                <input type="radio" <?php echo $empresa_test['proceso_6'] == 4 ? 'checked="checked"' : '' ?> name="proceso_6" value="4">4
                            </label>
                            <label class="radio-inline">
                                <input type="radio" <?php echo $empresa_test['proceso_6'] == 5 ? 'checked="checked"' : '' ?> name="proceso_6" value="5">5
                            </label>
                            <label class="radio-inline">
                                <input type="radio" <?php echo $empresa_test['proceso_6'] == 6 ? 'checked="checked"' : '' ?> name="proceso_6" value="6">6
                            </label>
                            <label class="radio-inline">
                                <input type="radio" <?php echo $empresa_test['proceso_6'] == 7 ? 'checked="checked"' : '' ?> name="proceso_6" value="7">7
                            </label>                                
                        </div>
                    </div>

                    <div class="control-group">
                        <div class="span8">En la organización se realizan estudios permanentes de referenciación competitiva, en los cuales se comparan los productos, servicios y procesos propios con empresas líderes a nivel mundial.</div>
                        <div class="span4">
                            <label class="radio-inline">
                                <input type="radio" <?php echo $empresa_test['proceso_7'] == 1 ? 'checked="checked"' : '' ?> name="proceso_7" value="1">1
                            </label>
                            <label class="radio-inline">
                                <input type="radio" <?php echo $empresa_test['proceso_7'] == 2 ? 'checked="checked"' : '' ?> name="proceso_7" value="2">2
                            </label>
                            <label class="radio-inline">
                                <input type="radio" <?php echo $empresa_test['proceso_7'] == 3 ? 'checked="checked"' : '' ?> name="proceso_7" value="3">3
                            </label>
                            <label class="radio-inline">
                                <input type="radio" <?php echo $empresa_test['proceso_7'] == 4 ? 'checked="checked"' : '' ?> name="proceso_7" value="4">4
                            </label>
                            <label class="radio-inline">
                                <input type="radio" <?php echo $empresa_test['proceso_7'] == 5 ? 'checked="checked"' : '' ?> name="proceso_7" value="5">5
                            </label>
                            <label class="radio-inline">
                                <input type="radio" <?php echo $empresa_test['proceso_7'] == 6 ? 'checked="checked"' : '' ?> name="proceso_7" value="6">6
                            </label>
                            <label class="radio-inline">
                                <input type="radio" <?php echo $empresa_test['proceso_7'] == 7 ? 'checked="checked"' : '' ?> name="proceso_7" value="7">7
                            </label>                                
                        </div>
                    </div>                        

                    <div class="control-group">
                        <div class="span8">Para el desarrollo y/o mejoramiento de nuevos procesos, productos y servicios se tiene en cuenta la revisión de información externa.</div>
                        <div class="span4">
                            <label class="radio-inline">
                                <input type="radio" <?php echo $empresa_test['proceso_8'] == 1 ? 'checked="checked"' : '' ?> name="proceso_8" value="1">1
                            </label>
                            <label class="radio-inline">
                                <input type="radio" <?php echo $empresa_test['proceso_8'] == 2 ? 'checked="checked"' : '' ?> name="proceso_8" value="2">2
                            </label>
                            <label class="radio-inline">
                                <input type="radio" <?php echo $empresa_test['proceso_8'] == 3 ? 'checked="checked"' : '' ?> name="proceso_8" value="3">3
                            </label>
                            <label class="radio-inline">
                                <input type="radio" <?php echo $empresa_test['proceso_8'] == 4 ? 'checked="checked"' : '' ?> name="proceso_8" value="4">4
                            </label>
                            <label class="radio-inline">
                                <input type="radio" <?php echo $empresa_test['proceso_8'] == 5 ? 'checked="checked"' : '' ?> name="proceso_8" value="5">5
                            </label>
                            <label class="radio-inline">
                                <input type="radio" <?php echo $empresa_test['proceso_8'] == 6 ? 'checked="checked"' : '' ?> name="proceso_8" value="6">6
                            </label>
                            <label class="radio-inline">
                                <input type="radio" <?php echo $empresa_test['proceso_8'] == 7 ? 'checked="checked"' : '' ?> name="proceso_8" value="7">7
                            </label>                                
                        </div>
                    </div>

                    <div class="control-group">
                        <div class="span8">La organización tiene un sistema claro para la elección y priorización de los proyectos de innovación.</div>
                        <div class="span4">
                            <label class="radio-inline">
                                <input type="radio" <?php echo $empresa_test['proceso_9'] == 1 ? 'checked="checked"' : '' ?> name="proceso_9" value="1">1
                            </label>
                            <label class="radio-inline">
                                <input type="radio" <?php echo $empresa_test['proceso_9'] == 2 ? 'checked="checked"' : '' ?> name="proceso_9" value="2">2
                            </label>
                            <label class="radio-inline">
                                <input type="radio" <?php echo $empresa_test['proceso_9'] == 3 ? 'checked="checked"' : '' ?> name="proceso_9" value="3">3
                            </label>
                            <label class="radio-inline">
                                <input type="radio" <?php echo $empresa_test['proceso_9'] == 4 ? 'checked="checked"' : '' ?> name="proceso_9" value="4">4
                            </label>
                            <label class="radio-inline">
                                <input type="radio" <?php echo $empresa_test['proceso_9'] == 5 ? 'checked="checked"' : '' ?> name="proceso_9" value="5">5
                            </label>
                            <label class="radio-inline">
                                <input type="radio" <?php echo $empresa_test['proceso_9'] == 6 ? 'checked="checked"' : '' ?> name="proceso_9" value="6">6
                            </label>
                            <label class="radio-inline">
                                <input type="radio" <?php echo $empresa_test['proceso_9'] == 7 ? 'checked="checked"' : '' ?> name="proceso_9" value="7">7
                            </label>                                
                        </div>
                    </div>                         

                </div>                
            </div>
            <div class="tab-pane fade" id="organizacion" role="tabpanel" aria-labelledby="contact-tab">                
                <div class="control-group">
                    <div class="span8">En la organización todas las personas proponen activamente ideas que aportan al mejoramiento de productos, servicios y/o procesos.</div>
                    <div class="span4">
                        <label class="radio-inline">
                            <input type="radio" <?php echo $empresa_test['organi_1'] == 1 ? 'checked="checked"' : '' ?> name="organi_1" value="1">1
                        </label>
                        <label class="radio-inline">
                            <input type="radio" <?php echo $empresa_test['organi_1'] == 2 ? 'checked="checked"' : '' ?> name="organi_1" value="2">2
                        </label>
                        <label class="radio-inline">
                            <input type="radio" <?php echo $empresa_test['organi_1'] == 3 ? 'checked="checked"' : '' ?> name="organi_1" value="3">3
                        </label>
                        <label class="radio-inline">
                            <input type="radio" <?php echo $empresa_test['organi_1'] == 4 ? 'checked="checked"' : '' ?> name="organi_1" value="4">4
                        </label>
                        <label class="radio-inline">
                            <input type="radio" <?php echo $empresa_test['organi_1'] == 5 ? 'checked="checked"' : '' ?> name="organi_1" value="5">5
                        </label>
                        <label class="radio-inline">
                            <input type="radio" <?php echo $empresa_test['organi_1'] == 6 ? 'checked="checked"' : '' ?> name="organi_1" value="6">6
                        </label>
                        <label class="radio-inline">
                            <input type="radio" <?php echo $empresa_test['organi_1'] == 7 ? 'checked="checked"' : '' ?> name="organi_1" value="7">7
                        </label>                                
                    </div>
                </div>

                <div class="control-group">
                    <div class="span8">La organización tiene definido un plan de incentivos para los empleados con el fin de promover la innovación.</div>
                    <div class="span4">
                        <label class="radio-inline">
                            <input type="radio" <?php echo $empresa_test['organi_2'] == 1 ? 'checked="checked"' : '' ?> name="organi_2" value="1">1
                        </label>
                        <label class="radio-inline">
                            <input type="radio" <?php echo $empresa_test['organi_2'] == 2 ? 'checked="checked"' : '' ?> name="organi_2" value="2">2
                        </label>
                        <label class="radio-inline">
                            <input type="radio" <?php echo $empresa_test['organi_2'] == 3 ? 'checked="checked"' : '' ?> name="organi_2" value="3">3
                        </label>
                        <label class="radio-inline">
                            <input type="radio" <?php echo $empresa_test['organi_2'] == 4 ? 'checked="checked"' : '' ?> name="organi_2" value="4">4
                        </label>
                        <label class="radio-inline">
                            <input type="radio" <?php echo $empresa_test['organi_2'] == 5 ? 'checked="checked"' : '' ?> name="organi_2" value="5">5
                        </label>
                        <label class="radio-inline">
                            <input type="radio" <?php echo $empresa_test['organi_2'] == 6 ? 'checked="checked"' : '' ?> name="organi_2" value="6">6
                        </label>
                        <label class="radio-inline">
                            <input type="radio" <?php echo $empresa_test['organi_2'] == 7 ? 'checked="checked"' : '' ?> name="organi_2" value="7">7
                        </label>                                
                    </div>
                </div>

                <div class="control-group">
                    <div class="span8">La organización propicia espacios para que las personas, en tiempo laboral, dediquen parte de su tiempo a la generación de nuevas ideas y desarrollo de proyectos de innovación.</div>
                    <div class="span4">
                        <label class="radio-inline">
                            <input type="radio" <?php echo $empresa_test['organi_3'] == 1 ? 'checked="checked"' : '' ?> name="organi_3" value="1">1
                        </label>
                        <label class="radio-inline">
                            <input type="radio" <?php echo $empresa_test['organi_3'] == 2 ? 'checked="checked"' : '' ?> name="organi_3" value="2">2
                        </label>
                        <label class="radio-inline">
                            <input type="radio" <?php echo $empresa_test['organi_3'] == 3 ? 'checked="checked"' : '' ?> name="organi_3" value="3">3
                        </label>
                        <label class="radio-inline">
                            <input type="radio" <?php echo $empresa_test['organi_3'] == 4 ? 'checked="checked"' : '' ?> name="organi_3" value="4">4
                        </label>
                        <label class="radio-inline">
                            <input type="radio" <?php echo $empresa_test['organi_3'] == 5 ? 'checked="checked"' : '' ?> name="organi_3" value="5">5
                        </label>
                        <label class="radio-inline">
                            <input type="radio" <?php echo $empresa_test['organi_3'] == 6 ? 'checked="checked"' : '' ?> name="organi_3" value="6">6
                        </label>
                        <label class="radio-inline">
                            <input type="radio" <?php echo $empresa_test['organi_3'] == 7 ? 'checked="checked"' : '' ?> name="organi_3" value="7">7
                        </label>                                
                    </div>
                </div> 

                <div class="control-group">
                    <div class="span8">La organización tiene definidos en su estructura cargos específicos para los procesos de innovación.</div>
                    <div class="span4">
                        <label class="radio-inline">
                            <input type="radio" <?php echo $empresa_test['organi_4'] == 1 ? 'checked="checked"' : '' ?> name="organi_4" value="1">1
                        </label>
                        <label class="radio-inline">
                            <input type="radio" <?php echo $empresa_test['organi_4'] == 2 ? 'checked="checked"' : '' ?> name="organi_4" value="2">2
                        </label>
                        <label class="radio-inline">
                            <input type="radio" <?php echo $empresa_test['organi_4'] == 3 ? 'checked="checked"' : '' ?> name="organi_4" value="3">3
                        </label>
                        <label class="radio-inline">
                            <input type="radio" <?php echo $empresa_test['organi_4'] == 4 ? 'checked="checked"' : '' ?> name="organi_4" value="4">4
                        </label>
                        <label class="radio-inline">
                            <input type="radio" <?php echo $empresa_test['organi_4'] == 5 ? 'checked="checked"' : '' ?> name="organi_4" value="5">5
                        </label>
                        <label class="radio-inline">
                            <input type="radio" <?php echo $empresa_test['organi_4'] == 6 ? 'checked="checked"' : '' ?> name="organi_4" value="6">6
                        </label>
                        <label class="radio-inline">
                            <input type="radio" <?php echo $empresa_test['organi_4'] == 7 ? 'checked="checked"' : '' ?> name="organi_4" value="7">7
                        </label>                                
                    </div>
                </div>

                <div class="control-group">
                    <div class="span8">La organización cuenta con líderes, personas empoderadas con herramientas y credibilidad en las diversas áreas y niveles que apoyan los procesos de gestión de la innovación al interior de la organización. Estos líderes tienen el respaldo de la Alta Gerencia.</div>
                    <div class="span4">
                        <label class="radio-inline">
                            <input type="radio" <?php echo $empresa_test['organi_5'] == 1 ? 'checked="checked"' : '' ?> name="organi_5" value="1">1
                        </label>
                        <label class="radio-inline">
                            <input type="radio" <?php echo $empresa_test['organi_5'] == 2 ? 'checked="checked"' : '' ?> name="organi_5" value="2">2
                        </label>
                        <label class="radio-inline">
                            <input type="radio" <?php echo $empresa_test['organi_5'] == 3 ? 'checked="checked"' : '' ?> name="organi_5" value="3">3
                        </label>
                        <label class="radio-inline">
                            <input type="radio" <?php echo $empresa_test['organi_5'] == 4 ? 'checked="checked"' : '' ?> name="organi_5" value="4">4
                        </label>
                        <label class="radio-inline">
                            <input type="radio" <?php echo $empresa_test['organi_5'] == 5 ? 'checked="checked"' : '' ?> name="organi_5" value="5">5
                        </label>
                        <label class="radio-inline">
                            <input type="radio" <?php echo $empresa_test['organi_5'] == 6 ? 'checked="checked"' : '' ?> name="organi_5" value="6">6
                        </label>
                        <label class="radio-inline">
                            <input type="radio" <?php echo $empresa_test['organi_5'] == 7 ? 'checked="checked"' : '' ?> name="organi_5" value="7">7
                        </label>                                
                    </div>
                </div>

                <div class="control-group">
                    <div class="span8">La organización conoce las capacidades y habilidades que le generan ventajas competitivas y agregan valor a sus productos o servicios.</div>
                    <div class="span4">
                        <label class="radio-inline">
                            <input type="radio" <?php echo $empresa_test['organi_6'] == 1 ? 'checked="checked"' : '' ?> name="organi_6" value="1">1
                        </label>
                        <label class="radio-inline">
                            <input type="radio" <?php echo $empresa_test['organi_6'] == 2 ? 'checked="checked"' : '' ?> name="organi_6" value="2">2
                        </label>
                        <label class="radio-inline">
                            <input type="radio" <?php echo $empresa_test['organi_6'] == 3 ? 'checked="checked"' : '' ?> name="organi_6" value="3">3
                        </label>
                        <label class="radio-inline">
                            <input type="radio" <?php echo $empresa_test['organi_6'] == 4 ? 'checked="checked"' : '' ?> name="organi_6" value="4">4
                        </label>
                        <label class="radio-inline">
                            <input type="radio" <?php echo $empresa_test['organi_6'] == 5 ? 'checked="checked"' : '' ?> name="organi_6" value="5">5
                        </label>
                        <label class="radio-inline">
                            <input type="radio" <?php echo $empresa_test['organi_6'] == 6 ? 'checked="checked"' : '' ?> name="organi_6" value="6">6
                        </label>
                        <label class="radio-inline">
                            <input type="radio" <?php echo $empresa_test['organi_6'] == 7 ? 'checked="checked"' : '' ?> name="organi_6" value="7">7
                        </label>                                
                    </div>
                </div>

                <div class="control-group">
                    <div class="span8">La organización dedica espacios, tiempo y recursos a la planeación prospectiva de sí misma y del sector.</div>
                    <div class="span4">
                        <label class="radio-inline">
                            <input type="radio" <?php echo $empresa_test['organi_7'] == 1 ? 'checked="checked"' : '' ?> name="organi_7" value="1">1
                        </label>
                        <label class="radio-inline">
                            <input type="radio" <?php echo $empresa_test['organi_7'] == 2 ? 'checked="checked"' : '' ?> name="organi_7" value="2">2
                        </label>
                        <label class="radio-inline">
                            <input type="radio" <?php echo $empresa_test['organi_7'] == 3 ? 'checked="checked"' : '' ?> name="organi_7" value="3">3
                        </label>
                        <label class="radio-inline">
                            <input type="radio" <?php echo $empresa_test['organi_7'] == 4 ? 'checked="checked"' : '' ?> name="organi_7" value="4">4
                        </label>
                        <label class="radio-inline">
                            <input type="radio" <?php echo $empresa_test['organi_7'] == 5 ? 'checked="checked"' : '' ?> name="organi_7" value="5">5
                        </label>
                        <label class="radio-inline">
                            <input type="radio" <?php echo $empresa_test['organi_7'] == 6 ? 'checked="checked"' : '' ?> name="organi_7" value="6">6
                        </label>
                        <label class="radio-inline">
                            <input type="radio" <?php echo $empresa_test['organi_7'] == 7 ? 'checked="checked"' : '' ?> name="organi_7" value="7">7
                        </label>                                
                    </div>
                </div>

                <div class="control-group">
                    <div class="span8">La organización cuenta con una oficina de proyectos estructurada que se encarga de la planificación, programación, seguimiento, control y evaluación de resultados.</div>
                    <div class="span4">
                        <label class="radio-inline">
                            <input type="radio" <?php echo $empresa_test['organi_8'] == 1 ? 'checked="checked"' : '' ?> name="organi_8" value="1">1
                        </label>
                        <label class="radio-inline">
                            <input type="radio" <?php echo $empresa_test['organi_8'] == 2 ? 'checked="checked"' : '' ?> name="organi_8" value="2">2
                        </label>
                        <label class="radio-inline">
                            <input type="radio" <?php echo $empresa_test['organi_8'] == 3 ? 'checked="checked"' : '' ?> name="organi_8" value="3">3
                        </label>
                        <label class="radio-inline">
                            <input type="radio" <?php echo $empresa_test['organi_8'] == 4 ? 'checked="checked"' : '' ?> name="organi_8" value="4">4
                        </label>
                        <label class="radio-inline">
                            <input type="radio" <?php echo $empresa_test['organi_8'] == 5 ? 'checked="checked"' : '' ?> name="organi_8" value="5">5
                        </label>
                        <label class="radio-inline">
                            <input type="radio" <?php echo $empresa_test['organi_8'] == 6 ? 'checked="checked"' : '' ?> name="organi_8" value="6">6
                        </label>
                        <label class="radio-inline">
                            <input type="radio" <?php echo $empresa_test['organi_8'] == 7 ? 'checked="checked"' : '' ?> name="organi_8" value="7">7
                        </label>                                
                    </div>
                </div>                   

            </div>
            <div class="tab-pane fade" id="articulacion" role="tabpanel" aria-labelledby="contact-tab">
                <div class="control-group">
                    <div class="span8">La organización obtiene con frecuencia financiación de entidades gubernamentales para el desarrollo de proyectos de Investigación, desarrollo e innovación (I+D+i).</div>
                    <div class="span4">
                        <label class="radio-inline">
                            <input type="radio" <?php echo $empresa_test['articu_1'] == 1 ? 'checked="checked"' : '' ?> name="articu_1" value="1">1
                        </label>
                        <label class="radio-inline">
                            <input type="radio" <?php echo $empresa_test['articu_1'] == 2 ? 'checked="checked"' : '' ?> name="articu_1" value="2">2
                        </label>
                        <label class="radio-inline">
                            <input type="radio" <?php echo $empresa_test['articu_1'] == 3 ? 'checked="checked"' : '' ?> name="articu_1" value="3">3
                        </label>
                        <label class="radio-inline">
                            <input type="radio" <?php echo $empresa_test['articu_1'] == 4 ? 'checked="checked"' : '' ?> name="articu_1" value="4">4
                        </label>
                        <label class="radio-inline">
                            <input type="radio" <?php echo $empresa_test['articu_1'] == 5 ? 'checked="checked"' : '' ?> name="articu_1" value="5">5
                        </label>
                        <label class="radio-inline">
                            <input type="radio" <?php echo $empresa_test['articu_1'] == 6 ? 'checked="checked"' : '' ?> name="articu_1" value="6">6
                        </label>
                        <label class="radio-inline">
                            <input type="radio" <?php echo $empresa_test['articu_1'] == 7 ? 'checked="checked"' : '' ?> name="articu_1" value="7">7
                        </label>                                
                    </div>
                </div>

                <div class="control-group">
                    <div class="span8">La organización participa activamente en redes nacionales y/o internacionales con el fin de tener referentes de talla mundial, nutrirse de nuevas perspectivas y conocer otras formas de operar.</div>
                    <div class="span4">
                        <label class="radio-inline">
                            <input type="radio" <?php echo $empresa_test['articu_2'] == 1 ? 'checked="checked"' : '' ?> name="articu_2" value="1">1
                        </label>
                        <label class="radio-inline">
                            <input type="radio" <?php echo $empresa_test['articu_2'] == 2 ? 'checked="checked"' : '' ?> name="articu_2" value="2">2
                        </label>
                        <label class="radio-inline">
                            <input type="radio" <?php echo $empresa_test['articu_2'] == 3 ? 'checked="checked"' : '' ?> name="articu_2" value="3">3
                        </label>
                        <label class="radio-inline">
                            <input type="radio" <?php echo $empresa_test['articu_2'] == 4 ? 'checked="checked"' : '' ?> name="articu_2" value="4">4
                        </label>
                        <label class="radio-inline">
                            <input type="radio" <?php echo $empresa_test['articu_2'] == 5 ? 'checked="checked"' : '' ?> name="articu_2" value="5">5
                        </label>
                        <label class="radio-inline">
                            <input type="radio" <?php echo $empresa_test['articu_2'] == 6 ? 'checked="checked"' : '' ?> name="articu_2" value="6">6
                        </label>
                        <label class="radio-inline">
                            <input type="radio" <?php echo $empresa_test['articu_2'] == 7 ? 'checked="checked"' : '' ?> name="articu_2" value="7">7
                        </label>                                
                    </div>
                </div>

                <div class="control-group">
                    <div class="span8">La organización realiza convenios de trabajo o transferencias de conocimiento y/o tecnologías con instituciones que aportan al desarrollo de proyectos de I+D+i, y éstos son socializados a todos los miembros de la organización.</div>
                    <div class="span4">
                        <label class="radio-inline">
                            <input type="radio" <?php echo $empresa_test['articu_3'] == 1 ? 'checked="checked"' : '' ?> name="articu_3" value="1">1
                        </label>
                        <label class="radio-inline">
                            <input type="radio" <?php echo $empresa_test['articu_3'] == 2 ? 'checked="checked"' : '' ?> name="articu_3" value="2">2
                        </label>
                        <label class="radio-inline">
                            <input type="radio" <?php echo $empresa_test['articu_3'] == 3 ? 'checked="checked"' : '' ?> name="articu_3" value="3">3
                        </label>
                        <label class="radio-inline">
                            <input type="radio" <?php echo $empresa_test['articu_3'] == 4 ? 'checked="checked"' : '' ?> name="articu_3" value="4">4
                        </label>
                        <label class="radio-inline">
                            <input type="radio" <?php echo $empresa_test['articu_3'] == 5 ? 'checked="checked"' : '' ?> name="articu_3" value="5">5
                        </label>
                        <label class="radio-inline">
                            <input type="radio" <?php echo $empresa_test['articu_3'] == 6 ? 'checked="checked"' : '' ?> name="articu_3" value="6">6
                        </label>
                        <label class="radio-inline">
                            <input type="radio" <?php echo $empresa_test['articu_3'] == 7 ? 'checked="checked"' : '' ?> name="articu_3" value="7">7
                        </label>                                
                    </div>
                </div> 

                <div class="control-group">
                    <div class="span8">¿Con qué frecuencia la organización desarrolla nuevos productos, servicios, procesos o modelos de negocio en colaboración con otras organizaciones?</div>
                    <div class="span4">
                        <label class="radio-inline">
                            <input type="radio" <?php echo $empresa_test['articu_4'] == 1 ? 'checked="checked"' : '' ?> name="articu_4" value="1">1
                        </label>
                        <label class="radio-inline">
                            <input type="radio" <?php echo $empresa_test['articu_4'] == 2 ? 'checked="checked"' : '' ?> name="articu_4" value="2">2
                        </label>
                        <label class="radio-inline">
                            <input type="radio" <?php echo $empresa_test['articu_4'] == 3 ? 'checked="checked"' : '' ?> name="articu_4" value="3">3
                        </label>
                        <label class="radio-inline">
                            <input type="radio" <?php echo $empresa_test['articu_4'] == 4 ? 'checked="checked"' : '' ?> name="articu_4" value="4">4
                        </label>
                        <label class="radio-inline">
                            <input type="radio" <?php echo $empresa_test['articu_4'] == 5 ? 'checked="checked"' : '' ?> name="articu_4" value="5">5
                        </label>
                        <label class="radio-inline">
                            <input type="radio" <?php echo $empresa_test['articu_4'] == 6 ? 'checked="checked"' : '' ?> name="articu_4" value="6">6
                        </label>
                        <label class="radio-inline">
                            <input type="radio" <?php echo $empresa_test['articu_4'] == 7 ? 'checked="checked"' : '' ?> name="articu_4" value="7">7
                        </label>                                
                    </div>
                </div>

                <div class="control-group">
                    <div class="span8">La organización hace uso efectivo de las alianzas y convenios efectuados con instituciones externas y como producto de estas alianzas y espacios de colaboración han surgido proyectos tangibles de I+D+i.</div>
                    <div class="span4">
                        <label class="radio-inline">
                            <input type="radio" <?php echo $empresa_test['articu_5'] == 1 ? 'checked="checked"' : '' ?> name="articu_5" value="1">1
                        </label>
                        <label class="radio-inline">
                            <input type="radio" <?php echo $empresa_test['articu_5'] == 2 ? 'checked="checked"' : '' ?> name="articu_5" value="2">2
                        </label>
                        <label class="radio-inline">
                            <input type="radio" <?php echo $empresa_test['articu_5'] == 3 ? 'checked="checked"' : '' ?> name="articu_5" value="3">3
                        </label>
                        <label class="radio-inline">
                            <input type="radio" <?php echo $empresa_test['articu_5'] == 4 ? 'checked="checked"' : '' ?> name="articu_5" value="4">4
                        </label>
                        <label class="radio-inline">
                            <input type="radio" <?php echo $empresa_test['articu_5'] == 5 ? 'checked="checked"' : '' ?> name="articu_5" value="5">5
                        </label>
                        <label class="radio-inline">
                            <input type="radio" <?php echo $empresa_test['articu_5'] == 6 ? 'checked="checked"' : '' ?> name="articu_5" value="6">6
                        </label>
                        <label class="radio-inline">
                            <input type="radio" <?php echo $empresa_test['articu_5'] == 7 ? 'checked="checked"' : '' ?> name="articu_5" value="7">7
                        </label>                                
                    </div>
                </div>

                <div class="control-group">
                    <div class="span8">Los procesos de colaboración que se dan para desarrollar en conjunto proyectos de I+D+i con otras instituciones están articulados a la estructura de Investigación, Desarrollo e Innovación (I+D+i) de la organización.</div>
                    <div class="span4">
                        <label class="radio-inline">
                            <input type="radio" <?php echo $empresa_test['articu_6'] == 1 ? 'checked="checked"' : '' ?> name="articu_6" value="1">1
                        </label>
                        <label class="radio-inline">
                            <input type="radio" <?php echo $empresa_test['articu_6'] == 2 ? 'checked="checked"' : '' ?> name="articu_6" value="2">2
                        </label>
                        <label class="radio-inline">
                            <input type="radio" <?php echo $empresa_test['articu_6'] == 3 ? 'checked="checked"' : '' ?> name="articu_6" value="3">3
                        </label>
                        <label class="radio-inline">
                            <input type="radio" <?php echo $empresa_test['articu_6'] == 4 ? 'checked="checked"' : '' ?> name="articu_6" value="4">4
                        </label>
                        <label class="radio-inline">
                            <input type="radio" <?php echo $empresa_test['articu_6'] == 5 ? 'checked="checked"' : '' ?> name="articu_6" value="5">5
                        </label>
                        <label class="radio-inline">
                            <input type="radio" <?php echo $empresa_test['articu_6'] == 6 ? 'checked="checked"' : '' ?> name="articu_6" value="6">6
                        </label>
                        <label class="radio-inline">
                            <input type="radio" <?php echo $empresa_test['articu_6'] == 7 ? 'checked="checked"' : '' ?> name="articu_6" value="7">7
                        </label>                                
                    </div>
                </div>

                <div class="control-group">
                    <div class="span8">Se cuenta al interior de la organización con una cultura abierta que propicia la apropiación del conocimiento y el reconocimiento de las capacidades de todos los miembros del equipo.</div>
                    <div class="span4">
                        <label class="radio-inline">
                            <input type="radio" <?php echo $empresa_test['articu_7'] == 1 ? 'checked="checked"' : '' ?> name="articu_7" value="1">1
                        </label>
                        <label class="radio-inline">
                            <input type="radio" <?php echo $empresa_test['articu_7'] == 2 ? 'checked="checked"' : '' ?> name="articu_7" value="2">2
                        </label>
                        <label class="radio-inline">
                            <input type="radio" <?php echo $empresa_test['articu_7'] == 3 ? 'checked="checked"' : '' ?> name="articu_7" value="3">3
                        </label>
                        <label class="radio-inline">
                            <input type="radio" <?php echo $empresa_test['articu_7'] == 4 ? 'checked="checked"' : '' ?> name="articu_7" value="4">4
                        </label>
                        <label class="radio-inline">
                            <input type="radio" <?php echo $empresa_test['articu_7'] == 5 ? 'checked="checked"' : '' ?> name="articu_7" value="5">5
                        </label>
                        <label class="radio-inline">
                            <input type="radio" <?php echo $empresa_test['articu_7'] == 6 ? 'checked="checked"' : '' ?> name="articu_7" value="6">6
                        </label>
                        <label class="radio-inline">
                            <input type="radio" <?php echo $empresa_test['articu_7'] == 7 ? 'checked="checked"' : '' ?> name="articu_7" value="7">7
                        </label>                                
                    </div>
                </div>                   
            </div>
            <div class="tab-pane fade" id="aprendizaje" role="tabpanel" aria-labelledby="contact-tab">
                <div class="control-group">
                    <div class="span8">La organización tiene establecidos procedimientos que permiten documentar el conocimiento de las personas que trabajan en ella.</div>
                    <div class="span4">
                        <label class="radio-inline">
                            <input type="radio" <?php echo $empresa_test['aprend_1'] == 1 ? 'checked="checked"' : '' ?> name="aprend_1" value="1">1
                        </label>
                        <label class="radio-inline">
                            <input type="radio" <?php echo $empresa_test['aprend_1'] == 2 ? 'checked="checked"' : '' ?> name="aprend_1" value="2">2
                        </label>
                        <label class="radio-inline">
                            <input type="radio" <?php echo $empresa_test['aprend_1'] == 3 ? 'checked="checked"' : '' ?> name="aprend_1" value="3">3
                        </label>
                        <label class="radio-inline">
                            <input type="radio" <?php echo $empresa_test['aprend_1'] == 4 ? 'checked="checked"' : '' ?> name="aprend_1" value="4">4
                        </label>
                        <label class="radio-inline">
                            <input type="radio" <?php echo $empresa_test['aprend_1'] == 5 ? 'checked="checked"' : '' ?> name="aprend_1" value="5">5
                        </label>
                        <label class="radio-inline">
                            <input type="radio" <?php echo $empresa_test['aprend_1'] == 6 ? 'checked="checked"' : '' ?> name="aprend_1" value="6">6
                        </label>
                        <label class="radio-inline">
                            <input type="radio" <?php echo $empresa_test['aprend_1'] == 7 ? 'checked="checked"' : '' ?> name="aprend_1" value="7">7
                        </label>                                
                    </div>
                </div>

                <div class="control-group">
                    <div class="span8">La organización cuenta con mecanismos de transferencia de conocimiento que le permiten que éste circule en doble vía: desde la organización hacia las personas y viceversa.</div>
                    <div class="span4">
                        <label class="radio-inline">
                            <input type="radio" <?php echo $empresa_test['aprend_2'] == 1 ? 'checked="checked"' : '' ?> name="aprend_2" value="1">1
                        </label>
                        <label class="radio-inline">
                            <input type="radio" <?php echo $empresa_test['aprend_2'] == 2 ? 'checked="checked"' : '' ?> name="aprend_2" value="2">2
                        </label>
                        <label class="radio-inline">
                            <input type="radio" <?php echo $empresa_test['aprend_2'] == 3 ? 'checked="checked"' : '' ?> name="aprend_2" value="3">3
                        </label>
                        <label class="radio-inline">
                            <input type="radio" <?php echo $empresa_test['aprend_2'] == 4 ? 'checked="checked"' : '' ?> name="aprend_2" value="4">4
                        </label>
                        <label class="radio-inline">
                            <input type="radio" <?php echo $empresa_test['aprend_2'] == 5 ? 'checked="checked"' : '' ?> name="aprend_2" value="5">5
                        </label>
                        <label class="radio-inline">
                            <input type="radio" <?php echo $empresa_test['aprend_2'] == 6 ? 'checked="checked"' : '' ?> name="aprend_2" value="6">6
                        </label>
                        <label class="radio-inline">
                            <input type="radio" <?php echo $empresa_test['aprend_2'] == 7 ? 'checked="checked"' : '' ?> name="aprend_2" value="7">7
                        </label>                                
                    </div>
                </div>

                <div class="control-group">
                    <div class="span8">La organización frecuentemente acude a mecanismos que le permiten conocer, aprender y adoptar buenas prácticas de otras organizaciones.</div>
                    <div class="span4">
                        <label class="radio-inline">
                            <input type="radio" <?php echo $empresa_test['aprend_3'] == 1 ? 'checked="checked"' : '' ?> name="aprend_3" value="1">1
                        </label>
                        <label class="radio-inline">
                            <input type="radio" <?php echo $empresa_test['aprend_3'] == 2 ? 'checked="checked"' : '' ?> name="aprend_3" value="2">2
                        </label>
                        <label class="radio-inline">
                            <input type="radio" <?php echo $empresa_test['aprend_3'] == 3 ? 'checked="checked"' : '' ?> name="aprend_3" value="3">3
                        </label>
                        <label class="radio-inline">
                            <input type="radio" <?php echo $empresa_test['aprend_3'] == 4 ? 'checked="checked"' : '' ?> name="aprend_3" value="4">4
                        </label>
                        <label class="radio-inline">
                            <input type="radio" <?php echo $empresa_test['aprend_3'] == 5 ? 'checked="checked"' : '' ?> name="aprend_3" value="5">5
                        </label>
                        <label class="radio-inline">
                            <input type="radio" <?php echo $empresa_test['aprend_3'] == 6 ? 'checked="checked"' : '' ?> name="aprend_3" value="6">6
                        </label>
                        <label class="radio-inline">
                            <input type="radio" <?php echo $empresa_test['aprend_3'] == 7 ? 'checked="checked"' : '' ?> name="aprend_3" value="7">7
                        </label>                                
                    </div>
                </div> 

                <div class="control-group">
                    <div class="span8">La organización cuenta con un programa definido para la gestión del conocimiento, y hace uso de él para la documentación y transferencia del conocimiento crítico identificado.</div>
                    <div class="span4">
                        <label class="radio-inline">
                            <input type="radio" <?php echo $empresa_test['aprend_4'] == 1 ? 'checked="checked"' : '' ?> name="aprend_4" value="1">1
                        </label>
                        <label class="radio-inline">
                            <input type="radio" <?php echo $empresa_test['aprend_4'] == 2 ? 'checked="checked"' : '' ?> name="aprend_4" value="2">2
                        </label>
                        <label class="radio-inline">
                            <input type="radio" <?php echo $empresa_test['aprend_4'] == 3 ? 'checked="checked"' : '' ?> name="aprend_4" value="3">3
                        </label>
                        <label class="radio-inline">
                            <input type="radio" <?php echo $empresa_test['aprend_4'] == 4 ? 'checked="checked"' : '' ?> name="aprend_4" value="4">4
                        </label>
                        <label class="radio-inline">
                            <input type="radio" <?php echo $empresa_test['aprend_4'] == 5 ? 'checked="checked"' : '' ?> name="aprend_4" value="5">5
                        </label>
                        <label class="radio-inline">
                            <input type="radio" <?php echo $empresa_test['aprend_4'] == 6 ? 'checked="checked"' : '' ?> name="aprend_4" value="6">6
                        </label>
                        <label class="radio-inline">
                            <input type="radio" <?php echo $empresa_test['aprend_4'] == 7 ? 'checked="checked"' : '' ?> name="aprend_4" value="7">7
                        </label>                                
                    </div>
                </div>

                <div class="control-group">
                    <div class="span8">La organización reconoce las Universidades, Centros de Investigación y Centros de Desarrollo, como actores claves para la transferencia de conocimiento en los proyectos.</div>
                    <div class="span4">
                        <label class="radio-inline">
                            <input type="radio" <?php echo $empresa_test['aprend_5'] == 1 ? 'checked="checked"' : '' ?> name="aprend_5" value="1">1
                        </label>
                        <label class="radio-inline">
                            <input type="radio" <?php echo $empresa_test['aprend_5'] == 2 ? 'checked="checked"' : '' ?> name="aprend_5" value="2">2
                        </label>
                        <label class="radio-inline">
                            <input type="radio" <?php echo $empresa_test['aprend_5'] == 3 ? 'checked="checked"' : '' ?> name="aprend_5" value="3">3
                        </label>
                        <label class="radio-inline">
                            <input type="radio" <?php echo $empresa_test['aprend_5'] == 4 ? 'checked="checked"' : '' ?> name="aprend_5" value="4">4
                        </label>
                        <label class="radio-inline">
                            <input type="radio" <?php echo $empresa_test['aprend_5'] == 5 ? 'checked="checked"' : '' ?> name="aprend_5" value="5">5
                        </label>
                        <label class="radio-inline">
                            <input type="radio" <?php echo $empresa_test['aprend_5'] == 6 ? 'checked="checked"' : '' ?> name="aprend_5" value="6">6
                        </label>
                        <label class="radio-inline">
                            <input type="radio" <?php echo $empresa_test['aprend_5'] == 7 ? 'checked="checked"' : '' ?> name="aprend_5" value="7">7
                        </label>                                
                    </div>
                </div>

                <div class="control-group">
                    <div class="span8">La organización tiene definidos protocolos y estatutos para el manejo de la propiedad intelectual.</div>
                    <div class="span4">
                        <label class="radio-inline">
                            <input type="radio" <?php echo $empresa_test['aprend_6'] == 1 ? 'checked="checked"' : '' ?> name="aprend_6" value="1">1
                        </label>
                        <label class="radio-inline">
                            <input type="radio" <?php echo $empresa_test['aprend_6'] == 2 ? 'checked="checked"' : '' ?> name="aprend_6" value="2">2
                        </label>
                        <label class="radio-inline">
                            <input type="radio" <?php echo $empresa_test['aprend_6'] == 3 ? 'checked="checked"' : '' ?> name="aprend_6" value="3">3
                        </label>
                        <label class="radio-inline">
                            <input type="radio" <?php echo $empresa_test['aprend_6'] == 4 ? 'checked="checked"' : '' ?> name="aprend_6" value="4">4
                        </label>
                        <label class="radio-inline">
                            <input type="radio" <?php echo $empresa_test['aprend_6'] == 5 ? 'checked="checked"' : '' ?> name="aprend_6" value="5">5
                        </label>
                        <label class="radio-inline">
                            <input type="radio" <?php echo $empresa_test['aprend_6'] == 6 ? 'checked="checked"' : '' ?> name="aprend_6" value="6">6
                        </label>
                        <label class="radio-inline">
                            <input type="radio" <?php echo $empresa_test['aprend_6'] == 7 ? 'checked="checked"' : '' ?> name="aprend_6" value="7">7
                        </label>                                
                    </div>
                </div>

                <div class="control-group">
                    <div class="span8">La organización cuenta con protocolos para proteger la información susceptible de ser secreto industrial.</div>
                    <div class="span4">
                        <label class="radio-inline">
                            <input type="radio" <?php echo $empresa_test['aprend_7'] == 11 ? 'checked="checked"' : '' ?> name="aprend_7" value="1">1
                        </label>
                        <label class="radio-inline">
                            <input type="radio" <?php echo $empresa_test['aprend_7'] == 2 ? 'checked="checked"' : '' ?> name="aprend_7" value="2">2
                        </label>
                        <label class="radio-inline">
                            <input type="radio" <?php echo $empresa_test['aprend_7'] == 3 ? 'checked="checked"' : '' ?> name="aprend_7" value="3">3
                        </label>
                        <label class="radio-inline">
                            <input type="radio" <?php echo $empresa_test['aprend_7'] == 4 ? 'checked="checked"' : '' ?> name="aprend_7" value="4">4
                        </label>
                        <label class="radio-inline">
                            <input type="radio" <?php echo $empresa_test['aprend_7'] == 5 ? 'checked="checked"' : '' ?> name="aprend_7" value="5">5
                        </label>
                        <label class="radio-inline">
                            <input type="radio" <?php echo $empresa_test['aprend_7'] == 6 ? 'checked="checked"' : '' ?> name="aprend_7" value="6">6
                        </label>
                        <label class="radio-inline">
                            <input type="radio" <?php echo $empresa_test['aprend_7'] == 7 ? 'checked="checked"' : '' ?> name="aprend_7" value="7">7
                        </label>                                
                    </div>
                </div>                 
            </div>
            <div class="tab-pane fade" id="conocimiento" role="tabpanel" aria-labelledby="contact-tab">
                <div class="control-group">
                    <div class="span12">
                        <div class="form-check">
                            <input class="form-check-input" <?php echo $empresa_test['conoci_1'] == 1 ? 'checked="checked"' : '' ?> name="conoci_1" type="checkbox" value="1" id="defaultCheck1"> Alimentos, Ambiental, Agroindustrial y Biotecnología
                        </div>
                    </div>
                </div>
                <div class="control-group">
                    <div class="span12">
                        <div class="form-check">
                            <input class="form-check-input" <?php echo $empresa_test['conoci_2'] == 1 ? 'checked="checked"' : '' ?> name="conoci_2" type="checkbox" value="1" id="defaultCheck1"> Ciencias Administrativas, Empresariales y Económicas
                        </div>
                    </div>
                </div>
                <div class="control-group">
                    <div class="span12">
                        <div class="form-check">
                            <input class="form-check-input" <?php echo $empresa_test['conoci_3'] == 1 ? 'checked="checked"' : '' ?> name="conoci_3" type="checkbox" value="1" id="defaultCheck1"> Ciencias de la salud y de la vida
                        </div>
                    </div>
                </div>
                <div class="control-group">
                    <div class="span12">
                        <div class="form-check">
                            <input class="form-check-input" <?php echo $empresa_test['conoci_4'] == 1 ? 'checked="checked"' : '' ?> name="conoci_4" type="checkbox" value="1" id="defaultCheck1"> Ciencias exactas
                        </div>
                    </div>
                </div>
                <div class="control-group">
                    <div class="span12">
                        <div class="form-check">
                            <input class="form-check-input" <?php echo $empresa_test['conoci_5'] == 1 ? 'checked="checked"' : '' ?> name="conoci_5" type="checkbox" value="1" id="defaultCheck1"> Ciencias sociales e Historia
                        </div>
                    </div>
                </div>
                <div class="control-group">
                    <div class="span12">
                        <div class="form-check">
                            <input class="form-check-input" <?php echo $empresa_test['conoci_6'] == 1 ? 'checked="checked"' : '' ?> name="conoci_6" type="checkbox" value="1" id="defaultCheck1"> Energía y minería
                        </div>
                    </div>
                </div>
                <div class="control-group">
                    <div class="span12">
                        <div class="form-check">
                            <input class="form-check-input" <?php echo $empresa_test['conoci_7'] == 1 ? 'checked="checked"' : '' ?> name="conoci_7" type="checkbox" value="1" id="defaultCheck1"> Educación, arte y lenguaje
                        </div>
                    </div>
                </div>
                <div class="control-group">
                    <div class="span12">
                        <div class="form-check">
                            <input class="form-check-input" <?php echo $empresa_test['conoci_8'] == 1 ? 'checked="checked"' : '' ?> name="conoci_8" type="checkbox" value="1" id="defaultCheck1"> Ingeniería Administrativa y Diseño (incluye Civil, Industrial y Mecánica)
                        </div>
                    </div>
                </div>
                <div class="control-group">
                    <div class="span12">
                        <div class="form-check">
                            <input class="form-check-input" <?php echo $empresa_test['conoci_9'] == 1 ? 'checked="checked"' : '' ?> name="conoci_9" type="checkbox" value="1" id="defaultCheck1"> Ciencias de la computación y TIC (incluye Informática, Sistemas, Software, Telécomunicaciones)
                        </div>
                    </div>
                </div>
                <div class="control-group">
                    <div class="span12">
                        <div class="form-check">
                            <input class="form-check-input" <?php echo $empresa_test['conoci_10'] == 1 ? 'checked="checked"' : '' ?> name="conoci_10" type="checkbox" value="1" id="defaultCheck1"> Ingenierías derivadas de la Química y Física (Incluye Física, Nuclear, Electrónica, Eléctrica y Química)
                        </div>
                    </div>
                </div>
                <div class="control-group">
                    <div class="span12">
                        <div class="form-check">
                            <input class="form-check-input" <?php echo $empresa_test['conoci_11'] == 1 ? 'checked="checked"' : '' ?> name="conoci_11" type="checkbox" value="1" id="defaultCheck1"> Materiales
                        </div>
                    </div>
                </div>
                <div class="control-group">
                    <div class="span12">
                        <div class="form-check">
                            <input class="form-check-input" <?php echo $empresa_test['conoci_12'] == 1 ? 'checked="checked"' : '' ?> name="conoci_12" type="checkbox" value="1" id="defaultCheck1"> Política, territorio y derecho
                        </div>
                    </div>
                </div>                         

            </div>
            
        </div>
        <div class="control-group">
            <div class="controls">
                <button type="submit" class="btn btn-primary" hidefocus="true" style="outline: medium none;"><span class="gradient">Guardar</span></button>
                <a class="btn btn-secondary" href="<?php echo site_url('/empresa') ?>">Cancelar</a>           
            </div>
        </div>          
</div>    
</form>        
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
                    window.location.href = '<?php echo site_url('empresa/') ?>';
                } else {
                    window.location.href = '<?php echo site_url('empresa/') ?>';
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