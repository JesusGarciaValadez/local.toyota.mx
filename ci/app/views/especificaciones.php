        <section class="especificaciones" data-modelo="<?=$modelo?>">
            <div id="especificaciones"></div>
            <div class="scroll-Interno">
                <div class="container">
                    <div class="cont-retic">
                        <h1>HIGHLANDER<span>LE</span></h1>
                        <fieldset>
                            <select class="jsn-select select-otraver">
                            <?php
                                foreach ($modelos as $c => $m) {
                                    
                                    if($c==$modelo){
                                        echo '<option value="'.$c.'" selected>'.$m.'</option>';
                                    }else{
                                        echo '<option value="'.$c.'">'.$m.'</option>';
                                    }
                                }
                            ?>
                            </select>
                        </fieldset>
                    </div>
                    <div class="cont-retic">
                        <!-- Especificaciones Tecnicas -->
                        <div class="eTecnicas">
                            <h2>Especificaciones técnicas</h2>
                            <div class="espMotor">
                                <dl>
                                    <dd><img class="jsn-UrlMotor" alt="Motor" src="<?=base_url('assets/images/datos/img-motor.png');?>"></dd>
                                    <dd>
                                        <dl>
                                            <dt>
                                                <h3>Motor</h3>
                                            </dt>
                                            <dd class="jsn-Capacidad">
                                                <div class="icon-motor">
                                                    <img src="<?=base_url('assets/images/icons/icn-01.jpg');?>">
                                                </div>
                                                <div class="motor">
                                                    <p>2.7 litros</p>
                                                    <small>Cilindrada / capacidad</small>
                                                </div>
                                            </dd>
                                            <dd class="jsn-Potencia">
                                                <div class="icon-motor">
                                                    <img src="<?=base_url('assets/images/icons/icn-02.jpg');?>">
                                                </div>
                                                <div>
                                                    <p>166 @ 5,200</p>
                                                    <small>potencia máxima hp @ rpm</small>
                                                </div>
                                            </dd>
                                            <dd class="jsn-Cilindros">
                                                <div class="icon-motor">
                                                    <img src="<?=base_url('assets/images/icons/icn-03.jpg');?>">
                                                </div>
                                                <div>
                                                    <p>4 en línea</p>
                                                    <small>Número de cilindros / configuración</small>
                                                </div>
                                            </dd>
                                            <dd class="jsn-Valvulas">
                                                <div class="icon-motor">
                                                    <img src="<?=base_url('assets/images/icons/icn-04.jpg');?>">
                                                </div>
                                                <div>
                                                    <p>16</p>
                                                    <small>Torque máximo lb.pie @ rpm</small>
                                                </div>
                                            </dd>
                                            <!-- <dd class="jsn-Traccion">
                                                <div class="icon-motor">
                                                    <img src="<?//=base_url('assets/images/icons/icn-05.jpg');?>">
                                                </div>
                                                <div>
                                                    <p>16</p>
                                                    <small>TRACCIÓN</small>
                                                </div>
                                            </dd> -->
                                        </dl>
                                    </dd>
                                </dl>
                            </div>
                            <div>
                                <div class="espFrenos jsn-Frenos">
                                    <dl>
                                        <dt>
                                            <h3>Frenos</h3>
                                        </dt>
                                        <dd>
                                            <p>De potencia, reforzado por vacío</p>
                                        </dd>
                                        <dd>
                                            <p>Delanteros / Disco ventilado</p>
                                        </dd>
                                        <dd>
                                            <p>Traseros / Tambor</p>
                                        </dd>
                                    </dl>
                                </div>
                                <div class="espRines jsn-Rines">
                                    <dl>
                                        <dt><h3>Neumáticos / Rines</h3></dt>
                                        <dd>
                                            <p>C205/70R15</p>
                                        </dd>
                                        <dd>
                                            <p>Juego de tapabucos con logo Toyota</p>
                                        </dd>
                                    </dl>
                                </div>
                            </div>
                        </div>
                        <!-- Fin Especificaciones Tecnicas -->
                    </div>
                    <!-- Inicio auto -->
                    <div class="cont-imgs">
                        <img class="jsn-UrlAuto" src="<?=base_url('assets/images/datos/img-rav4-detalle.jpg');?>">
                    </div>
                    <!-- Fin auto -->
                    <!-- Inicio exterior -->
                    <div class="cont-retic">
                        <div class="extCarro">
                            <h2>Exterior</h2>
                            <div class="cont-border">
                                <div class="extFaros jsn-Faros">
                                    <dl>
                                        <dt>
                                            <h3>Visibilidad</h3>
                                        </dt>
                                        <dd>
                                            <p>Faros tipo multireflectores de halógeno</p>
                                        </dd>
                                        <dd>
                                            <p>Luces traseras multi-reflectoras</p>
                                        </dd>
                                        <dd>
                                            <p>Luz auxiliar de freno elevada (tipo LED)</p>
                                        </dd>
                                        <dd>
                                            <p>Luces intermitentes de emergencia</p>
                                        </dd>
                                        <dd>
                                            <p>Luces direccionales en salpicaderas delanteras</p>
                                        </dd>
                                    </dl>
                                </div>
                                <div class="extSeguridadExterior jsn-SeguridadExterior">
                                    <dl>
                                        <dt>
                                            <h3>Apariencia</h3>
                                        </dt>
                                        <dd>
                                            <p>Defensa delantera integrada al color de la carrocería</p>
                                        </dd>
                                        <dd>
                                            <p>Defensa trasera / Acero pintado en color obscuro con antiderrapante y escalón</p>
                                        </dd>
                                        <dd>
                                            <p>Escape convencional</p>
                                        </dd>
                                        <dd>
                                            <p>Caja con protección para medallón y 2 soportes para luces</p>
                                        </dd>
                                    </dl>
                                </div>
                            </div>
                            <div class="cont-border">
                                <div class="extVisibilidad">
                                    <dl>
                                        <dt>
                                            <h3>Interiores</h3>
                                        </dt>
                                        <dt class="jsn-VisibilidadCristales">
                                            <dl>
                                                <!-- <dt>
                                                    <h6>De la caja</h6>
                                                </dt> -->
                                                <dd>
                                                    <p>Altura / 480 mm</p>
                                                </dd>
                                                <dd>
                                                    <p>Ancho / 1,575 mm</p>
                                                </dd>
                                                <dd>
                                                    <p>Largo / 2,315 mm</p>
                                                </dd>
                                            </dl>
                                        </dt>
                                        <!-- <dt class="jsn-VisibilidadEspejosLaterales">
                                            <dl>
                                                <dt>
                                                    <h6>Pesos y capacidades</h6>
                                                </dt>
                                                <dd>
                                                    <p>Capacidad del tanque de combustible / 80 Lts</p>
                                                </dd>
                                                <dd>
                                                    <p>Peso vehícular / 1,660 Kg</p>
                                                </dd>
                                                <dd>
                                                    <p>Capacidad de carga / 1,040Kg</p>
                                                </dd>
                                            </dl>
                                        </dt> -->
                                    </dl>
                                </div>
                                <div class="extTeco jsn-Techo">
                                    <dl>
                                        <dt>
                                            <h3>Pesos y capacidades</h3>
                                        </dt>
                                        <dd>
                                            <p>Altura total / 1,690 mm</p>
                                        </dd>
                                        <dd>
                                            <p>Ancho total / 1,800 mm</p>
                                        </dd>
                                        <dd>
                                            <p>Largo total / 5,335 mm</p>
                                        </dd>
                                        <dd>
                                            <p>Distancia entre ejes / 3,085 mm</p>
                                        </dd>
                                        <dd>
                                            <p>Diámetro de giro / 12.6 m</p>
                                        </dd>
                                        <dd>
                                            <p>Entrevía delantera / 1,510 mm</p>
                                        </dd>
                                        <dd>
                                            <p>Entrevía trasera / 1,510 mm</p>
                                        </dd>
                                    </dl>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- fin exterior -->

                    <!-- Inicio auto interior-->
                    <div class="cont-imgs interna">
                        <img class="jsn-UrlInterior" src="<?=base_url('assets/images/datos/img-tablero.jpg');?>">
                    </div>
                    <!-- Fin auto interior-->

                    <!-- Inicio interior -->
                    <div class="cont-retic">
                        <div class="intCarro">
                            <h2>Interior</h2>
                            <div class="cont-border">
                                <div class="extAcabadosInteriores jsn-AcabadosInteriores">
                                    <dl>
                                        <dt>
                                            <h3>Acabados interiores</h3>
                                        </dt>
                                        <dd>
                                            <p>Volante / Uretano</p>
                                        </dd>
                                        <dd>
                                            <p>Manijas interiores negras</p>
                                        </dd>
                                        <dd>
                                            <p>Tapicería de los asientos / Tela en 2 tonos</p>
                                        </dd>
                                        <dd>
                                            <p>Vestidura del piso / Alfombra</p>
                                        </dd>
                                        <dd>
                                            <p>Vestidura del techo / Tela afelpada</p>
                                        </dd>
                                    </dl>
                                </div>
                                <div class="extAsientos jsn-Asientos">
                                    <dl>
                                        <dt>
                                            <h3>Dimensiones</h3>
                                        </dt>
                                        <dd>
                                            <p>Asiento del conductor / Tipo cubo con 4 ajustes manuales y cabecera ajustables en altura</p>
                                        </dd>
                                        <dd>
                                            <p>Asiento del acompañante / Tipo banca 60% con 2 ajustes manuales (ángulo del respaldo) y cabeceras fijas</p>
                                        </dd>
                                    </dl>
                                </div>
                            </div>
                            <div class="cont-border">
                                <div class="extSistemaAudio jsn-SistemaAudio">
                                    <dl>
                                        <dt>
                                            <h3>Equipamiento</h3>
                                        </dt>
                                        <dd>
                                            <p>Preparación de audio con antena de mastíl corto en techo</p>
                                        </dd>
                                        <dd>
                                            <p>Número de bocinas / 2</p>
                                        </dd>
                                        <dd>
                                            <p>Cristales / Elevadores manuales</p>
                                        </dd>
                                        <dd>
                                            <p>Espejo retrovisor / Día - noche</p>
                                        </dd>
                                        <dd>
                                            <p>Toma auxiliar de corriente 12 V DC (120 W)</p>
                                        </dd>
                                        <dd>
                                            <p>Aire acondicionado manual</p>
                                        </dd>
                                        <dd>
                                            <p>Calefacción con sistema de recirculación de aire</p>
                                        </dd>
                                    </dl>
                                </div>
                                <div class="extConfort jsn-Confort">
                                    <dl>
                                        <dt>
                                            <h3>Iluminación</h3>
                                        </dt>
                                        <dd>
                                            <p>Iluminación de cortesía</p>
                                        </dd>
                                        <dd>
                                            <p>Luces de domo</p>
                                        </dd>
                                        <dd>
                                            <p>Reflejantes de cortesía en puertas</p>
                                        </dd>
                                    </dl>
                                </div>
                            </div>
                            <div class="cont-border">
                                <div class="extCinturonesSeguridad jsn-CinturonesSeguridad">
                                    <dl>
                                        <dt>
                                            <h3>Seguridad</h3>
                                        </dt>
                                        <dd>
                                            <p>Compartimientos en la parte delantera 2 (1 abierto y 1 cerrado tipo guantera)</p>
                                        </dd>
                                        <dd>
                                            <p>Portadocumentos en las puertas / 2</p>
                                        </dd>
                                        <dd>
                                            <p>Portavasos / portabotellas</p>
                                        </dd>
                                    </dl>
                                </div>
                                <div class="extSeguridadInterior jsn-SeguridadInterior">
                                    <dl>
                                        <dt>
                                            <h3>Transmisión CTVi-S</h3>
                                        </dt>
                                        <dd>
                                            <p>Sistema ABS (Anti-lock Braking System)</p>
                                        </dd>
                                        <dd>
                                            <p>Bolsa de aire frontales de múltiple etapa (conductor y acompañante)</p>
                                        </dd>
                                        <dd>
                                            <p>Bolsa de aire para rodillas / Conductor</p>
                                        </dd>
                                        <dd>
                                            <p>Desactivación bolsa de aire acompañante</p>
                                        </dd>
                                        <dd>
                                            <p>Cinturones de seguridad delanteros de tres puntos</p>
                                        </dd>
                                        <dd>
                                            <p>Zonas de deformación controlada contra impactos (Integradas al chasis y a la carrocería)</p>
                                        </dd>
                                    </dl>
                                </div>
                            </div>
                            <a href="#" class="boton jsn-Download" target="_blank">Descargar ficha técnica</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>