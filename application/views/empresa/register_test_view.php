<div class="row">
    <div lass="span12">
        <h1>Evaluar Empresa</h1>
    </div>
    <div class="span12">
        <form id="register_form" class="form-horizontal" method="POST" action="<?php echo site_url('empresa/add_test') ?>">

            <div class="text-right"><h3>Evaluar Empresa <?php echo $empresa['nombre'] ?></h3></div>
            <input type="hidden" name="idempresa" value="<?php echo $empresa['idempresa'] ?>">
            <div class="container">	
                <ul class="nav nav-tabs">
                    <li class="active">
                        <a  href="#1" data-toggle="tab">CARACTERIZACION</a>
                    </li>
                    <li><a href="#2" data-toggle="tab">ESTRATEGIA</a>
                    </li>
                    <li><a href="#3" data-toggle="tab">PROCESO</a>
                    </li>
                    <li><a href="#4" data-toggle="tab">ORGANIZACION</a>
                    </li>
                    <li><a href="#5" data-toggle="tab">ARTICULACION</a>
                    </li>
                    <li><a href="#6" data-toggle="tab">APRENDIZAJE</a>
                    </li>
                    <li><a href="#7" data-toggle="tab">CONOCIMIENTO</a>
                    </li>
                    <li><a href="#8" data-toggle="tab">FIN</a>
                    </li>                    
                </ul>

                <div class="tab-content ">
                    <!-- Tab 1 Caracterizacion -->
                    <div class="tab-pane active" id="1">
                        <div class="control-group">
                            <label>Defina el tamaño de su organización por número de empleados a partir de los siguientes rangos</label>
                            <div>
                                <div class="radio">
                                    <label><input type="radio" name="caract_1" value="1"> No superior a diez (10) trabajadores</label>
                                </div>
                                <div class="radio">
                                    <label><input type="radio" name="caract_1" value="2">Entre once (11) y cincuenta (50) trabajadores</label>
                                </div>
                                <div class="radio">
                                    <label><input type="radio" name="caract_1" value="3">Entre cincuenta y uno (51) y doscientos (200) trabajadores</label>
                                </div>
                                <div class="radio">
                                    <label><input type="radio" name="caract_1" value="4">Mayor a doscientos (200) trabajadores</label>
                                </div>                                 
                            </div>
                        </div>

                        <div class="control-group">
                            <label>Defina el tamaño de su organización por el valor de los activos a partir de los siguientes rangos</label>
                            <div>
                                <div class="radio">
                                    <label><input type="radio" name="caract_2" value="1"> Hasta quinientos (500) salarios mínimos mensuales legales vigentes</label>
                                </div>
                                <div class="radio">
                                    <label><input type="radio" name="caract_2" value="2">Entre quinientos uno (501) y cinco mil (5.000) salarios mínimos mensuales legales vigentes</label>
                                </div>
                                <div class="radio">
                                    <label><input type="radio" name="caract_2" value="3">Entre cinco mil uno (5.001) y veinte mil (20.000) salarios mínimos mensuales legales vigentes</label>
                                </div>
                                <div class="radio">
                                    <label><input type="radio" name="caract_2" value="4">Mayores a veinte mil (20.000) salarios mínimos mensuales legales vigentes</label>
                                </div>                                 
                            </div>
                        </div> 

                        <div class="control-group">
                            <label class="control-label">Escriba en el cuadro correspondiente el monto de las ventas de su organización en el último año</label>
                            <div class="controls">
                                <input type="text" name="caract_3" class="input-xlarge"/>
                            </div>
                        </div> 

                        <div class="control-group">
                            <label class="control-label">Escriba en el cuadro correspondiente qué porcentaje de las ventas anuales de su organización fue destinado a Investigación, Desarrollo tecnológico o Innovación (I+D+i) en el último año.</label>
                            <div class="controls">
                                <input type="text" name="caract_4" class="input-xlarge"/>
                            </div>
                        </div>

                        <div class="control-group">
                            <label>Defina la participación del mercado de su organización a partir de los siguientes rangos</label>
                            <div>
                                <div class="radio">
                                    <label><input type="radio" name="caract_5" value="1">Menor al 4%</label>
                                </div>
                                <div class="radio">
                                    <label><input type="radio" name="caract_5" value="2">Entre el 5% y el 21%</label>
                                </div>
                                <div class="radio">
                                    <label><input type="radio" name="caract_5" value="3">Entre el 22% y el 45%</label>
                                </div>
                                <div class="radio">
                                    <label><input type="radio" name="caract_5" value="4">Mayor al 46%</label>
                                </div>                                 
                            </div>
                        </div>                         

                    </div>

                    <!-- tab 2 Estrategia-->

                    <div class="tab-pane" id="2">
                        <div class="control-group">
                            <div class="row">
                                <div class="span8">En la organización se realizan ejercicios periódicos de planeación de la innovación, que incluye planes de acción, objetivos, indicadores, responsables, presupuestos y mecanismos de control escritos.</div>
                                <div class="span4">
                                    <label class="radio-inline">
                                        <input type="radio" name="estrat_1" value="1">1
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="estrat_1" value="2">2
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="estrat_1" value="3">3
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="estrat_1" value="4">4
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="estrat_1" value="5">5
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="estrat_1" value="6">6
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="estrat_1" value="7">7
                                    </label>                                
                                </div>
                            </div>
                        </div>

                        <div class="control-group">
                            <div class="row">
                                <div class="span8">Los proyectos de investigación, desarrollo e innovación de la empresa están alineados con la estrategia de innovación.</div>
                                <div class="span4">
                                    <label class="radio-inline">
                                        <input type="radio" name="estrat_2" value="1">1
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="estrat_2" value="2">2
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="estrat_2" value="3">3
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="estrat_2" value="4">4
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="estrat_2" value="5">5
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="estrat_2" value="6">6
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="estrat_2" value="7">7
                                    </label>                                
                                </div>
                            </div>
                        </div>

                        <div class="control-group">
                            <div class="row">
                                <div class="span8">En la organización se tienen definidos los temas en los cuales se va a llevar a cabo investigación en el corto, mediano y largo plazo.</div>
                                <div class="span4">
                                    <label class="radio-inline">
                                        <input type="radio" name="estrat_3" value="1">1
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="estrat_3" value="2">2
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="estrat_3" value="3">3
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="estrat_3" value="4">4
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="estrat_3" value="5">5
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="estrat_3" value="6">6
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="estrat_3" value="7">7
                                    </label>                                
                                </div>
                            </div>
                        </div> 

                        <div class="control-group">
                            <div class="row">
                                <div class="span8">En la organización se tiene definida una estructura interna para llevar a cabo las actividades de investigación, desarrollo e innovación (I+D+i).</div>
                                <div class="span4">
                                    <label class="radio-inline">
                                        <input type="radio" name="estrat_4" value="1">1
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="estrat_4" value="2">2
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="estrat_4" value="3">3
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="estrat_4" value="4">4
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="estrat_4" value="5">5
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="estrat_4" value="6">6
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="estrat_4" value="7">7
                                    </label>                                
                                </div>
                            </div>
                        </div>

                        <div class="control-group">
                            <div class="row">
                                <div class="span8">La organización usa regularmente metodologías o herramientas que permitan tomar decisiones estratégicas de mediano y largo plazo.</div>
                                <div class="span4">
                                    <label class="radio-inline">
                                        <input type="radio" name="estrat_5" value="1">1
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="estrat_5" value="2">2
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="estrat_5" value="3">3
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="estrat_5" value="4">4
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="estrat_5" value="5">5
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="estrat_5" value="6">6
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="estrat_5" value="7">7
                                    </label>                                
                                </div>
                            </div>
                        </div>

                        <div class="control-group">
                            <div class="row">
                                <div class="span8">La organización cuenta con personal para monitorear constantemente las áreas del conocimiento importantes para su desarrollo.</div>
                                <div class="span4">
                                    <label class="radio-inline">
                                        <input type="radio" name="estrat_6" value="1">1
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="estrat_6" value="2">2
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="estrat_6" value="3">3
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="estrat_6" value="4">4
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="estrat_6" value="5">5
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="estrat_6" value="6">6
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="estrat_6" value="7">7
                                    </label>                                
                                </div>
                            </div>
                        </div>

                        <div class="control-group">
                            <div class="row">
                                <div class="span8">En sus procesos de planeación estratégica y de toma de decisiones, la organización incluye información del entorno.</div>
                                <div class="span4">
                                    <label class="radio-inline">
                                        <input type="radio" name="estrat_7" value="1">1
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="estrat_7" value="2">2
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="estrat_7" value="3">3
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="estrat_7" value="4">4
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="estrat_7" value="5">5
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="estrat_7" value="6">6
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="estrat_7" value="7">7
                                    </label>                                
                                </div>
                            </div>
                        </div>

                        <div class="control-group">
                            <div class="row">
                                <div class="span8">En la organización se tiene claridad de cuáles son los proyectos de innovación que se deben realizar para asegurar la sostenibilidad actual y el futuro de la compañía.</div>
                                <div class="span4">
                                    <label class="radio-inline">
                                        <input type="radio" name="estrat_8" value="1">1
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="estrat_8" value="2">2
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="estrat_8" value="3">3
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="estrat_8" value="4">4
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="estrat_8" value="5">5
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="estrat_8" value="6">6
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="estrat_8" value="7">7
                                    </label>                                
                                </div>
                            </div>
                        </div>                         

                    </div>

                    <!-- Tab 3 Procesos -->

                    <div class="tab-pane" id="3">
                        <div class="control-group">
                            <div class="row">
                                <div class="span8">La organización tiene establecidos procesos, mecanismos o herramientas que le permite recoger y evaluar las ideas (innovadoras) de sus empleados. (para el mejoramiento o creación de nuevas estrategias, productos, procesos o servicios)</div>
                                <div class="span4">
                                    <label class="radio-inline">
                                        <input type="radio" name="proceso_1" value="1">1
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="proceso_1" value="2">2
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="proceso_1" value="3">3
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="proceso_1" value="4">4
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="proceso_1" value="5">5
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="proceso_1" value="6">6
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="proceso_1" value="7">7
                                    </label>                                
                                </div>
                            </div>
                        </div>

                        <div class="control-group">
                            <div class="row">
                                <div class="span8">La evaluación de las ideas se realiza teniendo en cuenta criterios previamente establecidos, que son conocidos por toda la organización.</div>
                                <div class="span4">
                                    <label class="radio-inline">
                                        <input type="radio" name="proceso_2" value="1">1
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="proceso_2" value="2">2
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="proceso_2" value="3">3
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="proceso_2" value="4">4
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="proceso_2" value="5">5
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="proceso_2" value="6">6
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="proceso_2" value="7">7
                                    </label>                                
                                </div>
                            </div>
                        </div>

                        <div class="control-group">
                            <div class="row">
                                <div class="span8">La organización tiene establecidos procesos, mecanismos o herramientas que le permite recoger y evaluar las ideas (innovadoras) provenientes de sus grupos de interés (Clientes, proveedores, investigadores, inversionistas, accionistas, entre otros externos).</div>
                                <div class="span4">
                                    <label class="radio-inline">
                                        <input type="radio" name="proceso_3" value="1">1
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="proceso_3" value="2">2
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="proceso_3" value="3">3
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="proceso_3" value="4">4
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="proceso_3" value="5">5
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="proceso_3" value="6">6
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="proceso_3" value="7">7
                                    </label>                                
                                </div>
                            </div>
                        </div> 

                        <div class="control-group">
                            <div class="row">
                                <div class="span8">La organización cuenta con procesos establecidos para el desarrollo de nuevos productos o servicios..</div>
                                <div class="span4">
                                    <label class="radio-inline">
                                        <input type="radio" name="proceso_4" value="1">1
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="proceso_4" value="2">2
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="proceso_4" value="3">3
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="proceso_4" value="4">4
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="proceso_4" value="5">5
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="proceso_4" value="6">6
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="proceso_4" value="7">7
                                    </label>                                
                                </div>
                            </div>
                        </div>

                        <div class="control-group">
                            <div class="row">
                                <div class="span8">La organización tiene establecidas metas de Innovación, provenientes de ventas por nuevos productos, ahorros por implementación de nuevos procesos o insumos, acceso a nuevos mercados.</div>
                                <div class="span4">
                                    <label class="radio-inline">
                                        <input type="radio" name="proceso_5" value="1">1
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="proceso_5" value="2">2
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="proceso_5" value="3">3
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="proceso_5" value="4">4
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="proceso_5" value="5">5
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="proceso_5" value="6">6
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="proceso_5" value="7">7
                                    </label>                                
                                </div>
                            </div>
                        </div>

                        <div class="control-group">
                            <div class="row">
                                <div class="span8">La organización hace seguimiento de los procesos de innovación en cada una de sus etapas.</div>
                                <div class="span4">
                                    <label class="radio-inline">
                                        <input type="radio" name="proceso_6" value="1">1
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="proceso_6" value="2">2
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="proceso_6" value="3">3
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="proceso_6" value="4">4
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="proceso_6" value="5">5
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="proceso_6" value="6">6
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="proceso_6" value="7">7
                                    </label>                                
                                </div>
                            </div>
                        </div>

                        <div class="control-group">
                            <div class="row">
                                <div class="span8">En la organización se realizan estudios permanentes de referenciación competitiva, en los cuales se comparan los productos, servicios y procesos propios con empresas líderes a nivel mundial.</div>
                                <div class="span4">
                                    <label class="radio-inline">
                                        <input type="radio" name="proceso_7" value="1">1
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="proceso_7" value="2">2
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="proceso_7" value="3">3
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="proceso_7" value="4">4
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="proceso_7" value="5">5
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="proceso_7" value="6">6
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="proceso_7" value="7">7
                                    </label>                                
                                </div>
                            </div>
                        </div>                        

                        <div class="control-group">
                            <div class="row">
                                <div class="span8">Para el desarrollo y/o mejoramiento de nuevos procesos, productos y servicios se tiene en cuenta la revisión de información externa.</div>
                                <div class="span4">
                                    <label class="radio-inline">
                                        <input type="radio" name="proceso_8" value="1">1
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="proceso_8" value="2">2
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="proceso_8" value="3">3
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="proceso_8" value="4">4
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="proceso_8" value="5">5
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="proceso_8" value="6">6
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="proceso_8" value="7">7
                                    </label>                                
                                </div>
                            </div>
                        </div>

                        <div class="control-group">
                            <div class="row">
                                <div class="span8">La organización tiene un sistema claro para la elección y priorización de los proyectos de innovación.</div>
                                <div class="span4">
                                    <label class="radio-inline">
                                        <input type="radio" name="proceso_9" value="1">1
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="proceso_9" value="2">2
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="proceso_9" value="3">3
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="proceso_9" value="4">4
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="proceso_9" value="5">5
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="proceso_9" value="6">6
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="proceso_9" value="7">7
                                    </label>                                
                                </div>
                            </div>
                        </div>                         

                    </div>

                    <!-- Tab 4 Organizacion -->

                    <div class="tab-pane" id="4">
                        <div class="control-group">
                            <div class="row">
                                <div class="span8">En la organización todas las personas proponen activamente ideas que aportan al mejoramiento de productos, servicios y/o procesos.</div>
                                <div class="span4">
                                    <label class="radio-inline">
                                        <input type="radio" name="organi_1" value="1">1
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="organi_1" value="2">2
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="organi_1" value="3">3
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="organi_1" value="4">4
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="organi_1" value="5">5
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="organi_1" value="6">6
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="organi_1" value="7">7
                                    </label>                                
                                </div>
                            </div>
                        </div>

                        <div class="control-group">
                            <div class="row">
                                <div class="span8">La organización tiene definido un plan de incentivos para los empleados con el fin de promover la innovación.</div>
                                <div class="span4">
                                    <label class="radio-inline">
                                        <input type="radio" name="organi_2" value="1">1
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="organi_2" value="2">2
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="organi_2" value="3">3
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="organi_2" value="4">4
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="organi_2" value="5">5
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="organi_2" value="6">6
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="organi_2" value="7">7
                                    </label>                                
                                </div>
                            </div>
                        </div>

                        <div class="control-group">
                            <div class="row">
                                <div class="span8">La organización propicia espacios para que las personas, en tiempo laboral, dediquen parte de su tiempo a la generación de nuevas ideas y desarrollo de proyectos de innovación.</div>
                                <div class="span4">
                                    <label class="radio-inline">
                                        <input type="radio" name="organi_3" value="1">1
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="organi_3" value="2">2
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="organi_3" value="3">3
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="organi_3" value="4">4
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="organi_3" value="5">5
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="organi_3" value="6">6
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="organi_3" value="7">7
                                    </label>                                
                                </div>
                            </div>
                        </div> 

                        <div class="control-group">
                            <div class="row">
                                <div class="span8">La organización tiene definidos en su estructura cargos específicos para los procesos de innovación.</div>
                                <div class="span4">
                                    <label class="radio-inline">
                                        <input type="radio" name="organi_4" value="1">1
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="organi_4" value="2">2
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="organi_4" value="3">3
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="organi_4" value="4">4
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="organi_4" value="5">5
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="organi_4" value="6">6
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="organi_4" value="7">7
                                    </label>                                
                                </div>
                            </div>
                        </div>

                        <div class="control-group">
                            <div class="row">
                                <div class="span8">La organización cuenta con líderes, personas empoderadas con herramientas y credibilidad en las diversas áreas y niveles que apoyan los procesos de gestión de la innovación al interior de la organización. Estos líderes tienen el respaldo de la Alta Gerencia.</div>
                                <div class="span4">
                                    <label class="radio-inline">
                                        <input type="radio" name="organi_5" value="1">1
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="organi_5" value="2">2
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="organi_5" value="3">3
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="organi_5" value="4">4
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="organi_5" value="5">5
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="organi_5" value="6">6
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="organi_5" value="7">7
                                    </label>                                
                                </div>
                            </div>
                        </div>

                        <div class="control-group">
                            <div class="row">
                                <div class="span8">La organización conoce las capacidades y habilidades que le generan ventajas competitivas y agregan valor a sus productos o servicios.</div>
                                <div class="span4">
                                    <label class="radio-inline">
                                        <input type="radio" name="organi_6" value="1">1
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="organi_6" value="2">2
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="organi_6" value="3">3
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="organi_6" value="4">4
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="organi_6" value="5">5
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="organi_6" value="6">6
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="organi_6" value="7">7
                                    </label>                                
                                </div>
                            </div>
                        </div>

                        <div class="control-group">
                            <div class="row">
                                <div class="span8">La organización dedica espacios, tiempo y recursos a la planeación prospectiva de sí misma y del sector.</div>
                                <div class="span4">
                                    <label class="radio-inline">
                                        <input type="radio" name="organi_7" value="1">1
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="organi_7" value="2">2
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="organi_7" value="3">3
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="organi_7" value="4">4
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="organi_7" value="5">5
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="organi_7" value="6">6
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="organi_7" value="7">7
                                    </label>                                
                                </div>
                            </div>
                        </div>

                        <div class="control-group">
                            <div class="row">
                                <div class="span8">La organización cuenta con una oficina de proyectos estructurada que se encarga de la planificación, programación, seguimiento, control y evaluación de resultados.</div>
                                <div class="span4">
                                    <label class="radio-inline">
                                        <input type="radio" name="organi_8" value="1">1
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="organi_8" value="2">2
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="organi_8" value="3">3
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="organi_8" value="4">4
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="organi_8" value="5">5
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="organi_8" value="6">6
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="organi_8" value="7">7
                                    </label>                                
                                </div>
                            </div>
                        </div>                         

                    </div>

                    <!-- Tab 5 ARTICULACION -->

                    <div class="tab-pane" id="5">
                        <div class="control-group">
                            <div class="row">
                                <div class="span8">La organización obtiene con frecuencia financiación de entidades gubernamentales para el desarrollo de proyectos de Investigación, desarrollo e innovación (I+D+i).</div>
                                <div class="span4">
                                    <label class="radio-inline">
                                        <input type="radio" name="articu_1" value="1">1
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="articu_1" value="2">2
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="articu_1" value="3">3
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="articu_1" value="4">4
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="articu_1" value="5">5
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="articu_1" value="6">6
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="articu_1" value="7">7
                                    </label>                                
                                </div>
                            </div>
                        </div>

                        <div class="control-group">
                            <div class="row">
                                <div class="span8">La organización participa activamente en redes nacionales y/o internacionales con el fin de tener referentes de talla mundial, nutrirse de nuevas perspectivas y conocer otras formas de operar.</div>
                                <div class="span4">
                                    <label class="radio-inline">
                                        <input type="radio" name="articu_2" value="1">1
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="articu_2" value="2">2
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="articu_2" value="3">3
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="articu_2" value="4">4
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="articu_2" value="5">5
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="articu_2" value="6">6
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="articu_2" value="7">7
                                    </label>                                
                                </div>
                            </div>
                        </div>

                        <div class="control-group">
                            <div class="row">
                                <div class="span8">La organización realiza convenios de trabajo o transferencias de conocimiento y/o tecnologías con instituciones que aportan al desarrollo de proyectos de I+D+i, y éstos son socializados a todos los miembros de la organización.</div>
                                <div class="span4">
                                    <label class="radio-inline">
                                        <input type="radio" name="articu_3" value="1">1
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="articu_3" value="2">2
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="articu_3" value="3">3
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="articu_3" value="4">4
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="articu_3" value="5">5
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="articu_3" value="6">6
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="articu_3" value="7">7
                                    </label>                                
                                </div>
                            </div>
                        </div> 

                        <div class="control-group">
                            <div class="row">
                                <div class="span8">¿Con qué frecuencia la organización desarrolla nuevos productos, servicios, procesos o modelos de negocio en colaboración con otras organizaciones?</div>
                                <div class="span4">
                                    <label class="radio-inline">
                                        <input type="radio" name="articu_4" value="1">1
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="articu_4" value="2">2
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="articu_4" value="3">3
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="articu_4" value="4">4
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="articu_4" value="5">5
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="articu_4" value="6">6
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="articu_4" value="7">7
                                    </label>                                
                                </div>
                            </div>
                        </div>

                        <div class="control-group">
                            <div class="row">
                                <div class="span8">La organización hace uso efectivo de las alianzas y convenios efectuados con instituciones externas y como producto de estas alianzas y espacios de colaboración han surgido proyectos tangibles de I+D+i.</div>
                                <div class="span4">
                                    <label class="radio-inline">
                                        <input type="radio" name="articu_5" value="1">1
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="articu_5" value="2">2
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="articu_5" value="3">3
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="articu_5" value="4">4
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="articu_5" value="5">5
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="articu_5" value="6">6
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="articu_5" value="7">7
                                    </label>                                
                                </div>
                            </div>
                        </div>

                        <div class="control-group">
                            <div class="row">
                                <div class="span8">Los procesos de colaboración que se dan para desarrollar en conjunto proyectos de I+D+i con otras instituciones están articulados a la estructura de Investigación, Desarrollo e Innovación (I+D+i) de la organización.</div>
                                <div class="span4">
                                    <label class="radio-inline">
                                        <input type="radio" name="articu_6" value="1">1
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="articu_6" value="2">2
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="articu_6" value="3">3
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="articu_6" value="4">4
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="articu_6" value="5">5
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="articu_6" value="6">6
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="articu_6" value="7">7
                                    </label>                                
                                </div>
                            </div>
                        </div>

                        <div class="control-group">
                            <div class="row">
                                <div class="span8">Se cuenta al interior de la organización con una cultura abierta que propicia la apropiación del conocimiento y el reconocimiento de las capacidades de todos los miembros del equipo.</div>
                                <div class="span4">
                                    <label class="radio-inline">
                                        <input type="radio" name="articu_7" value="1">1
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="articu_7" value="2">2
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="articu_7" value="3">3
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="articu_7" value="4">4
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="articu_7" value="5">5
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="articu_7" value="6">6
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="articu_7" value="7">7
                                    </label>                                
                                </div>
                            </div>
                        </div>                       

                    </div>

                    <!-- Tab 6 APRENDIZAJE -->

                    <div class="tab-pane" id="6">
                        <div class="control-group">
                            <div class="row">
                                <div class="span8">La organización tiene establecidos procedimientos que permiten documentar el conocimiento de las personas que trabajan en ella.</div>
                                <div class="span4">
                                    <label class="radio-inline">
                                        <input type="radio" name="aprend_1" value="1">1
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="aprend_1" value="2">2
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="aprend_1" value="3">3
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="aprend_1" value="4">4
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="aprend_1" value="5">5
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="aprend_1" value="6">6
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="aprend_1" value="7">7
                                    </label>                                
                                </div>
                            </div>
                        </div>

                        <div class="control-group">
                            <div class="row">
                                <div class="span8">La organización cuenta con mecanismos de transferencia de conocimiento que le permiten que éste circule en doble vía: desde la organización hacia las personas y viceversa.</div>
                                <div class="span4">
                                    <label class="radio-inline">
                                        <input type="radio" name="aprend_2" value="1">1
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="aprend_2" value="2">2
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="aprend_2" value="3">3
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="aprend_2" value="4">4
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="aprend_2" value="5">5
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="aprend_2" value="6">6
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="aprend_2" value="7">7
                                    </label>                                
                                </div>
                            </div>
                        </div>

                        <div class="control-group">
                            <div class="row">
                                <div class="span8">La organización frecuentemente acude a mecanismos que le permiten conocer, aprender y adoptar buenas prácticas de otras organizaciones.</div>
                                <div class="span4">
                                    <label class="radio-inline">
                                        <input type="radio" name="aprend_3" value="1">1
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="aprend_3" value="2">2
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="aprend_3" value="3">3
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="aprend_3" value="4">4
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="aprend_3" value="5">5
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="aprend_3" value="6">6
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="aprend_3" value="7">7
                                    </label>                                
                                </div>
                            </div>
                        </div> 

                        <div class="control-group">
                            <div class="row">
                                <div class="span8">La organización cuenta con un programa definido para la gestión del conocimiento, y hace uso de él para la documentación y transferencia del conocimiento crítico identificado.</div>
                                <div class="span4">
                                    <label class="radio-inline">
                                        <input type="radio" name="aprend_4" value="1">1
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="aprend_4" value="2">2
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="aprend_4" value="3">3
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="aprend_4" value="4">4
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="aprend_4" value="5">5
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="aprend_4" value="6">6
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="aprend_4" value="7">7
                                    </label>                                
                                </div>
                            </div>
                        </div>

                        <div class="control-group">
                            <div class="row">
                                <div class="span8">La organización reconoce las Universidades, Centros de Investigación y Centros de Desarrollo, como actores claves para la transferencia de conocimiento en los proyectos.</div>
                                <div class="span4">
                                    <label class="radio-inline">
                                        <input type="radio" name="aprend_5" value="1">1
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="aprend_5" value="2">2
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="aprend_5" value="3">3
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="aprend_5" value="4">4
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="aprend_5" value="5">5
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="aprend_5" value="6">6
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="aprend_5" value="7">7
                                    </label>                                
                                </div>
                            </div>
                        </div>

                        <div class="control-group">
                            <div class="row">
                                <div class="span8">La organización tiene definidos protocolos y estatutos para el manejo de la propiedad intelectual.</div>
                                <div class="span4">
                                    <label class="radio-inline">
                                        <input type="radio" name="aprend_6" value="1">1
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="aprend_6" value="2">2
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="aprend_6" value="3">3
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="aprend_6" value="4">4
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="aprend_6" value="5">5
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="aprend_6" value="6">6
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="aprend_6" value="7">7
                                    </label>                                
                                </div>
                            </div>
                        </div>

                        <div class="control-group">
                            <div class="row">
                                <div class="span8">La organización cuenta con protocolos para proteger la información susceptible de ser secreto industrial.</div>
                                <div class="span4">
                                    <label class="radio-inline">
                                        <input type="radio" name="aprend_7" value="1">1
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="aprend_7" value="2">2
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="aprend_7" value="3">3
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="aprend_7" value="4">4
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="aprend_7" value="5">5
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="aprend_7" value="6">6
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="aprend_7" value="7">7
                                    </label>                                
                                </div>
                            </div>
                        </div>                       

                    </div>

                    <!-- Tab 7 AREAS DEL CONOCIMIENTO -->

                    <div class="tab-pane" id="7">
                        <div class="control-group">
                            <div class="row">
                                <div class="span12">
                                    <div class="form-check">
                                        <input class="form-check-input" name="conoci_1" type="checkbox" value="1" id="defaultCheck1"> Alimentos, Ambiental, Agroindustrial y Biotecnología
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="control-group">
                            <div class="row">
                                <div class="span12">
                                    <div class="form-check">
                                        <input class="form-check-input" name="conoci_2" type="checkbox" value="1" id="defaultCheck1"> Ciencias Administrativas, Empresariales y Económicas
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="control-group">
                            <div class="row">
                                <div class="span12">
                                    <div class="form-check">
                                        <input class="form-check-input" name="conoci_3" type="checkbox" value="1" id="defaultCheck1"> Ciencias de la salud y de la vida
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="control-group">
                            <div class="row">
                                <div class="span12">
                                    <div class="form-check">
                                        <input class="form-check-input" name="conoci_4" type="checkbox" value="1" id="defaultCheck1"> Ciencias exactas
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="control-group">
                            <div class="row">
                                <div class="span12">
                                    <div class="form-check">
                                        <input class="form-check-input" name="conoci_5" type="checkbox" value="1" id="defaultCheck1"> Ciencias sociales e Historia
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="control-group">
                            <div class="row">
                                <div class="span12">
                                    <div class="form-check">
                                        <input class="form-check-input" name="conoci_6" type="checkbox" value="1" id="defaultCheck1"> Energía y minería
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="control-group">
                            <div class="row">
                                <div class="span12">
                                    <div class="form-check">
                                        <input class="form-check-input" name="conoci_7" type="checkbox" value="1" id="defaultCheck1"> Educación, arte y lenguaje
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="control-group">
                            <div class="row">
                                <div class="span12">
                                    <div class="form-check">
                                        <input class="form-check-input" name="conoci_8" type="checkbox" value="1" id="defaultCheck1"> Ingeniería Administrativa y Diseño (incluye Civil, Industrial y Mecánica)
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="control-group">
                            <div class="row">
                                <div class="span12">
                                    <div class="form-check">
                                        <input class="form-check-input" name="conoci_9" type="checkbox" value="1" id="defaultCheck1"> Ciencias de la computación y TIC (incluye Informática, Sistemas, Software, Telécomunicaciones)
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="control-group">
                            <div class="row">
                                <div class="span12">
                                    <div class="form-check">
                                        <input class="form-check-input" name="conoci_10" type="checkbox" value="1" id="defaultCheck1"> Ingenierías derivadas de la Química y Física (Incluye Física, Nuclear, Electrónica, Eléctrica y Química)
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="control-group">
                            <div class="row">
                                <div class="span12">
                                    <div class="form-check">
                                        <input class="form-check-input" name="conoci_11" type="checkbox" value="1" id="defaultCheck1"> Materiales
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="control-group">
                            <div class="row">
                                <div class="span12">
                                    <div class="form-check">
                                        <input class="form-check-input" name="conoci_12" type="checkbox" value="1" id="defaultCheck1"> Política, territorio y derecho
                                    </div>
                                </div>
                            </div>
                        </div>                         

                    </div>

                    <!-- Tab 8 DATOS FINALES -->

                    <div class="tab-pane" id="8">
                        <div class="control-group">
                            <label class="control-label">Código CIIU</label>
                            <div class="controls">
                                <input type="text" name="codigo_ciiu" class="input-xlarge"/>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Sitio Web</label>
                            <div class="controls">
                                <input type="text" name="sitio_web" class="input-xlarge"/>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Direccion</label>
                            <div class="controls">
                                <input type="text" name="direccion" class="input-xlarge"/>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Sector</label>
                            <div class="controls">
                                <select name="sector" class="form-control" id="sel1">
                                    <option value="A">A - Agricultura, ganaderia, caza, silvicultura y pesca</option>
                                    <option value="B">B - Explotacion de minas y canteras</option>
                                    <option value="C">C - Industrias manufactureras</option>
                                    <option value="D">D – Suministro de electricidad, gas, vapor y aire acondicionado</option>
                                    <option value="E">E – Distribución de agua; evacuación y tratamiento de aguas residuales, gestión de desechos y actividades de saneamiento ambiental</option>
                                    <option value="F">F – Construcción</option>
                                    <option value="G">G – Comercio al por mayor y al por menor; reparación de vehículos automotores y motocicletas</option>
                                    <option value="H">H – Transporte y almacenamiento</option>
                                    <option value="I">I – Alojamiento y servicios de comida</option>
                                    <option value="J">J – Información y comunicaciones</option>
                                    <option value="K">K – Actividades financieras y de seguros</option>
                                    <option value="L">L – Actividades inmobiliarias</option>
                                    <option value="M">M – Actividades profesionales, científicas y técnicas</option>
                                    <option value="N">N – Actividades de servicios administrativos y de apoyo</option>
                                    <option value="O">O – Administración pública y defensa; planes de seguridad social de afiliación obligatoria</option>
                                    <option value="P">P – Educación</option>
                                    <option value="Q">Q – Actividades de atención de la salud humana y de asistencia social</option>
                                    <option value="R">R – Actividades artísticas, de entretenimiento y recreación</option>
                                    <option value="S">S – Otras actividades de servicios</option>
                                    <option value="T">T – Actividades de los hogares en calidad de empleadores; actividades no diferenciadas de los hogares individuales como productores de bienes y servicios para uso propio</option>
                                    <option value="U">U – Actividades de organizaciones y entidades extraterritoriales</option>
                                    <option value="V">V – Turismo</option>
                                </select>
                            </div>
                        </div> 

                        <div class="control-group">
                            <label class="control-label">Usted está diligenciando este autodiagnóstico porque está aplicando a una convocatoria o programa de: (*)</label>
                            <div class="controls">
                                <select name="programa" class="form-control" id="sel1">
                                    <option>Colciencias</option>
                                    <option>iNNpulsa</option>
                                    <option>Otra</option>
                                    <option>Ninguna</option>
                                </select>
                            </div>
                        </div>                           

                    </div>                    

                </div>
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