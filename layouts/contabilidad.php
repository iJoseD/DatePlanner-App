<?php
    /** Conexión BD */
    $servidor = "localhost"; $usuario = "angeles_admin"; $password = "4h@33leK"; $basededatos = "angeles_admin";
    $conexion = mysqli_connect( $servidor, $usuario, $password ) or die ("No se ha podido conectar al servidor de Base de datos");
    $db = mysqli_select_db( $conexion, $basededatos ) or die ( "Upps! Pues va a ser que no se ha podido conectar a la base de datos" );

    /** Get Variables */
    $day    = $_GET["day"];
    $mes    = monthSpanish($_GET["month"]);
    $year   = $_GET["year"];

    /** Función para traducir el mes */
    function monthSpanish($month) {
        switch ($month) {
            case 'January':
                $month = "Enero";
            break;
            case 'February':
                $month = "Febrero";
            break;
            case 'March':
                $month = "Marzo";
            break;
            case 'April':
                $month = "Abril";
            break;
            case 'May':
                $month = "Mayo";
            break;
            case 'June':
                $month = "Junio";
            break;
            case 'July':
                $month = "Julio";
            break;
            case 'August':
                $month = "Agosto";
            break;
            case 'September':
                $month = "Septiembre";
            break;
            case 'October':
                $month = "Octubre";
            break;
            case 'November':
                $month = "Noviembre";
            break;
            case 'December':
                $month = "Diciembre";
            break;
        }

        return $month;
    }
?>

<div class="container">
    <div class="row mb-3 mt-2">
        
        <!-- Filtros -->
        <a class="btn-link mb-3 text-center" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="true">Filtros <i class="bi bi-funnel"></i></a>

        <!-- Collapse Filtros -->
        <div class="collapse text-center" id="collapseExample">
            <div class="row">
                <div class="col-xl-2 col-sm-12"></div>
                <div class="col-xl-2 col-sm-12 mb-3">
                    <div class="form-floating">
                        <select class="form-select" name="slc-dia--filtro" id="slc-dia--filtro">
                            <option selected>Seleccione...</option>
                            <option value="01">01</option>
                            <option value="02">02</option>
                            <option value="03">03</option>
                            <option value="04">04</option>
                            <option value="05">05</option>
                            <option value="06">06</option>
                            <option value="07">07</option>
                            <option value="08">08</option>
                            <option value="09">09</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                            <option value="13">13</option>
                            <option value="14">14</option>
                            <option value="15">15</option>
                            <option value="16">16</option>
                            <option value="17">17</option>
                            <option value="18">18</option>
                            <option value="19">19</option>
                            <option value="20">20</option>
                            <option value="21">21</option>
                            <option value="22">22</option>
                            <option value="23">23</option>
                            <option value="24">24</option>
                            <option value="25">25</option>
                            <option value="26">26</option>
                            <option value="27">27</option>
                            <option value="28">28</option>
                            <option value="29">29</option>
                            <option value="30">30</option>
                            <option value="31">31</option>
                        </select>
                        <label>Día</label>
                    </div>
                </div>
                <div class="col-xl-2 col-sm-12 mb-3">
                    <div class="form-floating">
                        <select class="form-select" name="slc-mes--filtro" id="slc-mes--filtro">
                            <option selected>Seleccione...</option>
                            <option value="Enero">Enero</option>
                            <option value="Febrero">Febrero</option>
                            <option value="Marzo">Marzo</option>
                            <option value="Abril">Abril</option>
                            <option value="Mayo">Mayo</option>
                            <option value="Junio">Junio</option>
                            <option value="Julio">Julio</option>
                            <option value="Agosto">Agosto</option>
                            <option value="Septiembre">Septiembre</option>
                            <option value="Octubre">Octubre</option>
                            <option value="Noviembre">Noviembre</option>
                            <option value="Diciembre">Diciembre</option>
                        </select>
                        <label>Mes</label>
                    </div>
                </div>
                <div class="col-xl-2 col-sm-12 mb-3">
                    <div class="form-floating">
                        <select class="form-select" name="slc-anio--filtro" id="slc-anio--filtro">
                            <option selected>Seleccione...</option>
                            <option value="2020">2020</option>
                            <option value="2021">2021</option>
                            <option value="2022">2022</option>
                        </select>
                        <label>Año</label>
                    </div>
                </div>
                <div class="col-xl-2 col-sm-12 mb-3 d-grid">
                    <button type="button" class="bg-primary btn btn--filtrar btn-lg text-white">Filtrar <i class="bi bi-funnel"></i></button>
                </div>
                <div class="col-xl-2 col-sm-12"></div>
            </div>
        </div>

        <!-- Subtitulo: Datos relacionados -->
        <?php
            if ( !empty($day) ) { ?>
                <p class="mb-0 mt-2 fs-6 text-center"><strong>Datos relacionados al <span><?php echo $day." de ".$mes." de ".$year; ?></span></strong></p>
            <?php } else { ?>
                <p class="mb-0 mt-2 fs-6 text-center"><strong>Datos relacionados a <span><?php echo $mes." de ".$year; ?></span></strong></p>
            <?php }
        ?>

        <!-- Titulo: BALANCE GENERAL -->
        <h1 class="mb-5 mt-5 text-center"><span class="badge btn-grad-8 text-white" style="background-color: #2F3B59 !important;"> BALANCE GENERAL </span></h1>

        <!-- Widgets -->
        <div class="col-xl-4 col-sm-12">

            <!-- Ingresos -->
            <div class="card text-white mb-3 bg--Quepal">
                <div class="card-header">Ingresos</div>
                <div class="card-body">
                    <?php
                        if ( !empty($day) ) {
                            $consulta = "SELECT SUM(valor) AS total FROM Contabilidad WHERE dia = '$day' AND mes = '$mes' AND anio = '$year' AND tipoRegistro = 'ingreso'";
                        } else {
                            $consulta = "SELECT SUM(valor) AS total FROM Contabilidad WHERE mes = '$mes' AND anio = '$year' AND tipoRegistro = 'ingreso'";
                        }
                        $resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");

                        while ($columna = mysqli_fetch_array( $resultado )) {
                            if ( !empty($columna['total']) ) { $totalIngreso = $columna['total']; } else { $totalIngreso = "0"; } ?>
                            <span class="card-title" style="font-size: xx-large; font-weight: bolder; display: inherit;"><?php echo "$ ".number_format($totalIngreso, 0, ',', '.'); ?></span>
                        <?php }
                    ?>
                </div>
                <div class="card-footer d-md-flex justify-content-md-end">
                    <button type="button" class="btn btn-outline-light btn-sm" data-bs-toggle="modal" data-bs-target="#modal-Ingresos"> Añadir ingresos </button>
                </div>
            </div>

            <!-- Gastos -->
            <div class="card text-white mb-3 bg--Alive">
                <div class="card-header">Gastos</div>
                <div class="card-body">
                    <?php
                        if ( !empty($day) ) {
                            $consulta = "SELECT SUM(valor) AS total FROM Contabilidad WHERE dia = '$day' AND mes = '$mes' AND anio = '$year' AND tipoRegistro = 'gasto'";
                        } else {
                            $consulta = "SELECT SUM(valor) AS total FROM Contabilidad WHERE mes = '$mes' AND anio = '$year' AND tipoRegistro = 'gasto'";
                        }
                        $resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");

                        while ($columna = mysqli_fetch_array( $resultado )) {
                            if ( !empty($columna['total']) ) { $totalGasto = $columna['total']; } else { $totalGasto = "0"; } ?>
                            <span class="card-title" style="font-size: xx-large; font-weight: bolder; display: inherit;"><?php echo "$ ".number_format($totalGasto, 0, ',', '.'); ?></span>
                        <?php }
                    ?>
                </div>
                <div class="card-footer d-md-flex justify-content-md-end">
                    <button type="button" class="btn btn-outline-light btn-sm" data-bs-toggle="modal" data-bs-target="#modal-Gastos"> Añadir gastos </button>
                </div>
            </div>

            <!-- Balance -->
            <div class="card mb-3 text-white bg--Scooter">
                <div class="card-header">Balance</div>
                <div class="card-body">
                    <?php
                        $balance = $totalIngreso - $totalGasto;
                    ?>
                    <span class="card-title" style="font-size: xxx-large; font-weight: bolder; display: inherit;"><?php echo "$ ".number_format($balance, 0, ',', '.'); ?></span>
                </div>
            </div>

            <!-- Modal: Añadir ingresos -->
            <div class="modal fade" id="modal-Ingresos" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Añadir ingresos</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="row form">
                                <div class="col-xl-4 col-sm-12 mb-3">
                                    <div class="form-floating">
                                        <select class="form-select" name="slc-dia--ingresos" id="slc-dia--ingresos">
                                            <option selected>Seleccione...</option>
                                            <option value="01">01</option>
                                            <option value="02">02</option>
                                            <option value="03">03</option>
                                            <option value="04">04</option>
                                            <option value="05">05</option>
                                            <option value="06">06</option>
                                            <option value="07">07</option>
                                            <option value="08">08</option>
                                            <option value="09">09</option>
                                            <option value="10">10</option>
                                            <option value="11">11</option>
                                            <option value="12">12</option>
                                            <option value="13">13</option>
                                            <option value="14">14</option>
                                            <option value="15">15</option>
                                            <option value="16">16</option>
                                            <option value="17">17</option>
                                            <option value="18">18</option>
                                            <option value="19">19</option>
                                            <option value="20">20</option>
                                            <option value="21">21</option>
                                            <option value="22">22</option>
                                            <option value="23">23</option>
                                            <option value="24">24</option>
                                            <option value="25">25</option>
                                            <option value="26">26</option>
                                            <option value="27">27</option>
                                            <option value="28">28</option>
                                            <option value="29">29</option>
                                            <option value="30">30</option>
                                            <option value="31">31</option>
                                        </select>
                                        <label>Día</label>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-sm-12 mb-3">
                                    <div class="form-floating">
                                        <select class="form-select" name="slc-mes--ingresos" id="slc-mes--ingresos">
                                            <option selected>Seleccione...</option>
                                            <option value="Enero">Enero</option>
                                            <option value="Febrero">Febrero</option>
                                            <option value="Marzo">Marzo</option>
                                            <option value="Abril">Abril</option>
                                            <option value="Mayo">Mayo</option>
                                            <option value="Junio">Junio</option>
                                            <option value="Julio">Julio</option>
                                            <option value="Agosto">Agosto</option>
                                            <option value="Septiembre">Septiembre</option>
                                            <option value="Octubre">Octubre</option>
                                            <option value="Noviembre">Noviembre</option>
                                            <option value="Diciembre">Diciembre</option>
                                        </select>
                                        <label>Mes</label>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-sm-12 mb-3">
                                    <div class="form-floating">
                                        <select class="form-select" name="slc-anio--ingresos" id="slc-anio--ingresos">
                                            <option selected>Seleccione...</option>
                                            <option value="2020">2020</option>
                                            <option value="2021">2021</option>
                                            <option value="2022">2022</option>
                                        </select>
                                        <label>Año</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row form">
                                <div class="col-xl-6 col-sm-12 mb-3">
                                    <div class="form-floating">
                                        <select class="form-select" name="slc-concepto--ingresos" id="slc-concepto--ingresos">
                                            <option selected=''>Seleccione...</option>
                                            <option value='Activos corrientes'>Activos corrientes</option>
                                            <option value='Activos no corrientes'>Activos no corrientes</option>
                                            <option value='Activos por impuestos corrientes'>Activos por impuestos corrientes</option>
                                            <option value='Ajustes iniciales en bancos'>Ajustes iniciales en bancos</option>
                                            <option value='Ajustes iniciales en inventario'>Ajustes iniciales en inventario</option>
                                            <option value='Ajustes por saldos iniciales'>Ajustes por saldos iniciales</option>
                                            <option value='Anticipos o saldos a favor del Impuesto de Industria y Comercio'>Anticipos o saldos a favor del Impuesto de Industria y Comercio</option>
                                            <option value='Avances y anticipos entregados'>Avances y anticipos entregados</option>
                                            <option value='Banco 1'>Banco 1</option>
                                            <option value='Bancos'>Bancos</option>
                                            <option value='Caja'>Caja</option>
                                            <option value='Caja general'>Caja general</option>
                                            <option value='Capital social'>Capital social</option>
                                            <option value='Cuentas por cobrar clientes'>Cuentas por cobrar clientes</option>
                                            <option value='Cuentas por cobrar empleados'>Cuentas por cobrar empleados</option>
                                            <option value='Deudores comerciales y otras cuentas por cobrar'>Deudores comerciales y otras cuentas por cobrar</option>
                                            <option value='Devoluciones a proveedores'>Devoluciones a proveedores</option>
                                            <option value='Devoluciones en ventas'>Devoluciones en ventas</option>
                                            <option value='Efectivo y equivalentes de efectivo'>Efectivo y equivalentes de efectivo</option>
                                            <option value='Ganancias acumuladas'>Ganancias acumuladas</option>
                                            <option value='Impuesto a las ventas a favor'>Impuesto a las ventas a favor</option>
                                            <option value='Impuesto de Industria y Comercio retenido'>Impuesto de Industria y Comercio retenido</option>
                                            <option value='Impuestos a favor'>Impuestos a favor</option>
                                            <option value='Ingresos de actividades ordinarias'>Ingresos de actividades ordinarias</option>
                                            <option value='Ingresos financieros'>Ingresos financieros</option>
                                            <option value='Inventarios'>Inventarios</option>
                                            <option value='Inversiones a corto plazo'>Inversiones a corto plazo</option>
                                            <option value='Otras cuentas por cobrar'>Otras cuentas por cobrar</option>
                                            <option value='Otro tipo de impuesto a favor'>Otro tipo de impuesto a favor</option>
                                            <option value='Otro tipo de retención a favor'>Otro tipo de retención a favor</option>
                                            <option value='Otros activos corrientes'>Otros activos corrientes</option>
                                            <option value='Otros Activos no corrientes'>Otros Activos no corrientes</option>
                                            <option value='Otros Ingresos'>Otros Ingresos</option>
                                            <option value='Otros ingresos diversos'>Otros ingresos diversos</option>
                                            <option value='Préstamos a terceros'>Préstamos a terceros</option>
                                            <option value='Propiedad, planta y equipo (Activos fijos)'>Propiedad, planta y equipo (Activos fijos)</option>
                                            <option value='Propiedad, planta y equipo (Impuestos descontables)'>Propiedad, planta y equipo (Impuestos descontables)</option>
                                            <option value='Retención de impuesto a las ventas a favor'>Retención de impuesto a las ventas a favor</option>
                                            <option value='Retención en la fuente a favor'>Retención en la fuente a favor</option>
                                            <option value='Retenciones a favor'>Retenciones a favor</option>
                                            <option value='Ventas'>Ventas</option>
                                        </select>
                                        <label>Concepto</label>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-sm-12 mb-3">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" name="txt-ingreso--ingresos" id="txt-ingreso--ingresos" onkeyup="separadorMiles(this,this.value.charAt(this.value.length-1))">
                                        <label>Ingreso</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row form">
                                <div class="col-xl-12 col-sm-12 mb-3">
                                    <div class="form-floating">
                                        <textarea class="form-control" placeholder="Añadir comentarios" name="txt-comentario--ingresos" id="txt-comentario--ingresos" style="height: 100px"></textarea>
                                        <label>Comentarios</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                            <button type="button" class="btn btn-primary" id="btn--guardar-ingreso">Guardar</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal: Añadir gastos -->
            <div class="modal fade" id="modal-Gastos" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Añadir gastos</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="row form">
                                <div class="col-xl-4 col-sm-12 mb-3">
                                    <div class="form-floating">
                                        <select class="form-select" name="slc-dia--gastos" id="slc-dia--gastos">
                                            <option selected>Seleccione...</option>
                                            <option value="01">01</option>
                                            <option value="02">02</option>
                                            <option value="03">03</option>
                                            <option value="04">04</option>
                                            <option value="05">05</option>
                                            <option value="06">06</option>
                                            <option value="07">07</option>
                                            <option value="08">08</option>
                                            <option value="09">09</option>
                                            <option value="10">10</option>
                                            <option value="11">11</option>
                                            <option value="12">12</option>
                                            <option value="13">13</option>
                                            <option value="14">14</option>
                                            <option value="15">15</option>
                                            <option value="16">16</option>
                                            <option value="17">17</option>
                                            <option value="18">18</option>
                                            <option value="19">19</option>
                                            <option value="20">20</option>
                                            <option value="21">21</option>
                                            <option value="22">22</option>
                                            <option value="23">23</option>
                                            <option value="24">24</option>
                                            <option value="25">25</option>
                                            <option value="26">26</option>
                                            <option value="27">27</option>
                                            <option value="28">28</option>
                                            <option value="29">29</option>
                                            <option value="30">30</option>
                                            <option value="31">31</option>
                                        </select>
                                        <label>Día</label>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-sm-12 mb-3">
                                    <div class="form-floating">
                                        <select class="form-select" name="slc-mes--gastos" id="slc-mes--gastos">
                                            <option selected>Seleccione...</option>
                                            <option value="Enero">Enero</option>
                                            <option value="Febrero">Febrero</option>
                                            <option value="Marzo">Marzo</option>
                                            <option value="Abril">Abril</option>
                                            <option value="Mayo">Mayo</option>
                                            <option value="Junio">Junio</option>
                                            <option value="Julio">Julio</option>
                                            <option value="Agosto">Agosto</option>
                                            <option value="Septiembre">Septiembre</option>
                                            <option value="Octubre">Octubre</option>
                                            <option value="Noviembre">Noviembre</option>
                                            <option value="Diciembre">Diciembre</option>
                                        </select>
                                        <label>Mes</label>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-sm-12 mb-3">
                                    <div class="form-floating">
                                        <select class="form-select" name="slc-anio--gastos" id="slc-anio--gastos">
                                            <option selected>Seleccione...</option>
                                            <option value="2020">2020</option>
                                            <option value="2021">2021</option>
                                            <option value="2022">2022</option>
                                        </select>
                                        <label>Año</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row form">
                                <div class="col-xl-6 col-sm-12 mb-3">
                                    <div class="form-floating">
                                        <select class="form-select" name="slc-concepto--gastos" id="slc-concepto--gastos">
                                            <option selected=''>Seleccione...</option>
                                            <option value='Costos de ventas y operación'>Costos de ventas y operación</option>
                                            <option value='Costos de la mercancía vendida'>Costos de la mercancía vendida</option>
                                            <option value='Ajustes al inventario'>Ajustes al inventario</option>
                                            <option value='Descuentos financieros'>Descuentos financieros</option>
                                            <option value='Costo de los servicios vendidos'>Costo de los servicios vendidos</option>
                                            <option value='Gastos de administración'>Gastos de administración</option>
                                            <option value='Gastos de personal'>Gastos de personal</option>
                                            <option value='Sueldos'>Sueldos</option>
                                            <option value='Horas extras y recargos'>Horas extras y recargos</option>
                                            <option value='Comisiones'>Comisiones</option>
                                            <option value='Auxilio de transporte'>Auxilio de transporte</option>
                                            <option value='Cesantías'>Cesantías</option>
                                            <option value='Intereses sobre cesantías'>Intereses sobre cesantías</option>
                                            <option value='Prima de servicios'>Prima de servicios</option>
                                            <option value='Vacaciones'>Vacaciones</option>
                                            <option value='Dotación a trabajadores'>Dotación a trabajadores</option>
                                            <option value='Aportes a ARL'>Aportes a ARL</option>
                                            <option value='Aportes a EPS'>Aportes a EPS</option>
                                            <option value='Aportes fondo de pensiones y cesantías'>Aportes fondo de pensiones y cesantías</option>
                                            <option value='Aportes cajas de compensación familiar'>Aportes cajas de compensación familiar</option>
                                            <option value='Aportes ICBF'>Aportes ICBF</option>
                                            <option value='Gastos generales'>Gastos generales</option>
                                            <option value='Comisiones, honorarios y servicios'>Comisiones, honorarios y servicios</option>
                                            <option value='Arrendamientos'>Arrendamientos</option>
                                            <option value='Servicios públicos'>Servicios públicos</option>
                                            <option value='Papelería'>Papelería</option>
                                            <option value='Servicios de aseo, cafetería, restaurante y lavandería'>Servicios de aseo, cafetería, restaurante y lavandería</option>
                                            <option value='Publicidad'>Publicidad</option>
                                            <option value='Vigilancia'>Vigilancia</option>
                                            <option value='Seguros generales'>Seguros generales</option>
                                            <option value='Combustibles y lubricantes'>Combustibles y lubricantes</option>
                                            <option value='Otros gastos generales'>Otros gastos generales</option>
                                            <option value='Depreciaciones, amortizaciones y deterioros'>Depreciaciones, amortizaciones y deterioros</option>
                                            <option value='Deterioro de cuentas por cobrar'>Deterioro de cuentas por cobrar</option>
                                            <option value='Depreciación de propiedad, planta y equipo'>Depreciación de propiedad, planta y equipo</option>
                                            <option value='Otros gastos'>Otros gastos</option>
                                            <option value='Gastos financieros'>Gastos financieros</option>
                                            <option value='Ajuste por diferencia en cambio'>Ajuste por diferencia en cambio</option>
                                            <option value='Ajustes por aproximaciones en cálculos'>Ajustes por aproximaciones en cálculos</option>
                                            <option value='Gastos por impuestos'>Gastos por impuestos</option>
                                            <option value='Impuestos de renta y complementarios'>Impuestos de renta y complementarios</option>
                                            <option value='Gastos por impuestos no acreditables'>Gastos por impuestos no acreditables</option>
                                            <option value='Pasivos corrientes'>Pasivos corrientes</option>
                                            <option value='Cuentas por pagar'>Cuentas por pagar</option>
                                            <option value='Cuentas por pagar a proveedores'>Cuentas por pagar a proveedores</option>
                                            <option value='Avances y anticipos recibidos'>Avances y anticipos recibidos</option>
                                            <option value='Otras cuentas por pagar'>Otras cuentas por pagar</option>
                                            <option value='Devoluciones de clientes'>Devoluciones de clientes</option>
                                            <option value='Obligaciones laborales y de seguridad social'>Obligaciones laborales y de seguridad social</option>
                                            <option value='Salarios y prestaciones sociales'>Salarios y prestaciones sociales</option>
                                            <option value='Obligaciones financieras'>Obligaciones financieras</option>
                                            <option value='Tarjetas de crédito'>Tarjetas de crédito</option>
                                            <option value='Tarjeta de crédito empresarial'>Tarjeta de crédito empresarial</option>
                                            <option value='Pasivos por impuestos corrientes'>Pasivos por impuestos corrientes</option>
                                            <option value='Impuestos por pagar'>Impuestos por pagar</option>
                                            <option value='Impuesto a las ventas por pagar'>Impuesto a las ventas por pagar</option>
                                            <option value='Impuesto de Industria y Comercio por pagar'>Impuesto de Industria y Comercio por pagar</option>
                                            <option value='Otro tipo de impuesto por pagar'>Otro tipo de impuesto por pagar</option>
                                            <option value='Retenciones por pagar'>Retenciones por pagar</option>
                                            <option value='Retención en la fuente por pagar'>Retención en la fuente por pagar</option>
                                            <option value='Retención de IVA por pagar'>Retención de IVA por pagar</option>
                                            <option value='Retención de Industria y Comercio por pagar'>Retención de Industria y Comercio por pagar</option>
                                            <option value='Otro tipo de retención por pagar'>Otro tipo de retención por pagar</option>
                                            <option value='Otros pasivos corrientes'>Otros pasivos corrientes</option>
                                            <option value='Pasivos no corrientes'>Pasivos no corrientes</option>
                                            <option value='Préstamos a largo plazo'>Préstamos a largo plazo</option>
                                            <option value='Otros pasivos no corrientes'>Otros pasivos no corrientes</option>
                                        </select>
                                        <label>Concepto</label>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-sm-12 mb-3">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" name="txt-ingreso--gastos" id="txt-ingreso--gastos" onkeyup="separadorMiles(this,this.value.charAt(this.value.length-1))">
                                        <label>Gasto</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row form">
                                <div class="col-xl-12 col-sm-12 mb-3">
                                    <div class="form-floating">
                                        <textarea class="form-control" placeholder="Añadir comentarios" name="txt-comentario--gastos" id="txt-comentario--gastos" style="height: 100px"></textarea>
                                        <label>Comentarios</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                            <button type="button" class="btn btn-primary" id="btn--guardar-gasto">Guardar</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal: Eliminar transacción -->
            <div class="modal fade" id="modal-Eliminar" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Eliminar transacción</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="row form">
                                <div class="col-xl-12 col-sm-12 mb-3 text-center">
                                    <p>¿Estas seguro que deseas eliminar esta transacción?</p>
                                    <p>Tenga en cuenta que una vez eliminada, no habra forma de recuperarla.</p>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                            <button type="button" class="btn btn-danger" id="btn--eliminar-transaccion">Eliminar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Gráfica -->
        <div class="col-xl-8 col-sm-12">
            <canvas id="myChart" width="600" height="350"></canvas>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-xl-12 col-sm-12 mb-5">
            <div class="card">
                <div class="card-header">
                    <h2 class="text-center">Ingresos</h2>
                </div>
                <div class="card-body">
                    <table id="tableIngresos" class="table table-striped responsive nowrap">
                        <thead>
                            <tr>
                                <th>Fecha</th>
                                <th>Concepto</th>
                                <th>Valor</th>
                                <th>Comentarios</th>
                                <th>Opciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                if ( !empty($day) ) {
                                    $consulta = "SELECT * FROM Contabilidad WHERE dia = '$day' AND mes = '$mes' AND anio = '$year' AND tipoRegistro = 'ingreso'";
                                } else {
                                    $consulta = "SELECT * FROM Contabilidad WHERE mes = '$mes' AND anio = '$year' AND tipoRegistro = 'ingreso'";
                                }
                                $resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");

                                while ($columna = mysqli_fetch_array( $resultado )) { ?>
                                    <tr>
                                        <th><?php echo $columna['dia']." ".$columna['mes'].", ".$columna['anio']; ?></th>
                                        <th><?php echo $columna['concepto']; ?></th>
                                        <th><?php echo "$".number_format($columna['valor'], 0, ',', '.'); ?></th>
                                        <th><?php echo ucfirst($columna['comentario']); ?></th>
                                        <th><i class="bi bi-trash btn--eliminar" data-bs-toggle="modal" data-bs-target="#modal-Eliminar" data-id="<?php echo $columna['id']; ?>" style="color: red; cursor: pointer;"></i></th>
                                    </tr>
                                <?php }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="col-xl-12 col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h2 class="text-center">Gastos</h2>
                </div>
                <div class="card-body">
                    <table id="tableGastosNegocios" class="table table-striped responsive nowrap">
                        <thead>
                            <tr>
                                <th>Fecha</th>
                                <th>Concepto</th>
                                <th>Valor</th>
                                <th>Comentarios</th>
                                <th>Opciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                if ( !empty($day) ) {
                                    $consulta = "SELECT * FROM Contabilidad WHERE dia = '$day' AND mes = '$mes' AND anio = '$year' AND tipoRegistro = 'gasto' AND concepto <> 'ANTICIPO EMPLEADOS'";
                                } else {
                                    $consulta = "SELECT * FROM Contabilidad WHERE mes = '$mes' AND anio = '$year' AND tipoRegistro = 'gasto' AND concepto <> 'ANTICIPO EMPLEADOS'";
                                }
                                $resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");

                                while ($columna = mysqli_fetch_array( $resultado )) { ?>
                                    <tr>
                                        <th><?php echo $columna['dia']." ".$columna['mes'].", ".$columna['anio']; ?></th>
                                        <th><?php echo ucfirst(strtolower($columna['concepto'])); ?></th>
                                        <th><?php echo "$".number_format($columna['valor'], 0, ',', '.'); ?></th>
                                        <th><?php echo ucfirst($columna['comentario']); ?></th>
                                        <th><i class="bi bi-trash btn--eliminar" data-bs-toggle="modal" data-bs-target="#modal-Eliminar" data-id="<?php echo $columna['id']; ?>" style="color: red; cursor: pointer;"></i></th>
                                    </tr>
                                <?php }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>