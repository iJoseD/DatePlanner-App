<?php
    $servidor = "localhost"; $usuario = "angeles_admin"; $password = "4h@33leK"; $basededatos = "angeles_admin";
    $conexion = mysqli_connect( $servidor, $usuario, $password ) or die ("No se ha podido conectar al servidor de Base de datos");
    $db = mysqli_select_db( $conexion, $basededatos ) or die ( "Upps! Pues va a ser que no se ha podido conectar a la base de datos" );

    $idPaciente = $_GET["idPaciente"];

    $consulta = "SELECT * FROM HistoriaClinica WHERE id = '$idPaciente'";
    $resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");

    while ($columna = mysqli_fetch_array( $resultado )) {
        $DatosBasicosNombreCompleto = $columna['NombreCompleto'];
        $DatosBasicosFechaNacimiento = $columna['FechaNacimiento'];
        $DatosBasicosEdad = $columna['Edad'];
        $DatosBasicosFechaTerapia = $columna['FechaTerapia'];
        $DatosBasicosCelular = $columna['Celular'];
        $DatosBasicosEstadoCivil = $columna['EstadoCivil'];
        $DatosBasicosHijos = $columna['Hijos'];

        $VidasPasadasCelibato = $columna['VPCelibato'];
        $VidasPasadasCastidad = $columna['VPCastidad'];
        $VidasPasadasPobreza = $columna['VPPobreza'];
        $VidasPasadasSilencio = $columna['VPSilencio'];
        $VidasPasadasSufrimiento = $columna['VPSufrimiento'];
        $VidasPasadasObediencia = $columna['VPObediencia'];
        $VidasPasadasSacrificio = $columna['VPSacrificio'];
        $VidasPasadasSoledad = $columna['VPSoledad'];
        $VidasPasadasObservaciones = $columna['VPObservaciones'];

        $KarmasTransgeneracionalesPobreza = $columna['KTPobreza'];
        $KarmasTransgeneracionalesCastidad = $columna['KTCastidad'];
        $KarmasTransgeneracionalesMaldiciones = $columna['KTMaldiciones'];
        $KarmasTransgeneracionalesProyectoSentido = $columna['KTProyectoSentido'];
        $KarmasTransgeneracionalesHijoSustituto = $columna['KTHijoSustituto'];
        $KarmasTransgeneracionalesHijoImpostor = $columna['KTHijoImpostor'];
        $KarmasTransgeneracionalesHijoRechazado = $columna['KTHijoRechazado'];
        $KarmasTransgeneracionalesObservaciones = $columna['KTObservaciones'];

        $CanalizacionInfanciaRechazo = $columna['CIRechazo'];
        $CanalizacionInfanciaTraición = $columna['CITraición'];
        $CanalizacionInfanciaInjusticia = $columna['CIInjusticia'];
        $CanalizacionInfanciaHumillación = $columna['CIHumillación'];
        $CanalizacionInfanciaAbandono = $columna['CIAbandono'];
        $CanalizacionInfanciaMaltrato = $columna['CIMaltrato'];
        $CanalizacionInfanciaAbuso = $columna['CIAbuso'];
        $CanalizacionInfanciaNinoInterior = $columna['CINinoInterior'];
        $CanalizacionInfanciaObservaciones = $columna['CiObservaciones'];

        $CanalizacionFuturoObservaciones = $columna['CFObservaciones'];
        $ActivacionAbundanciaObservaciones = $columna['AAObservaciones'];
        $MisionVidaObservaciones = $columna['MVObservaciones'];
        $PropositosEspiritualesObservaciones = $columna['PEObservaciones'];

        $ChakrasYoSoy = $columna['CYoSoy'];
        $ChakrasYoVeo = $columna['CYoVeo'];
        $ChakrasYoHablo = $columna['CYoHablo'];
        $ChakrasYoAmo = $columna['CYoAmo'];
        $ChakrasYoPuedo = $columna['CYoPuedo'];
        $ChakrasYoDeseo = $columna['CYoDeseo'];
        $ChakrasYoTengo = $columna['CYoTengo'];
        $ChakrasTraumas = $columna['CTraumas'];
        $ChakrasHeridasInfancia = $columna['CHeridasInfancia'];
        $ChakrasVidasPasadas = $columna['CVidasPasadas'];

        $CargaEnergeticaLarvasAstrales = $columna['CELarvasAstrales'];
        $CargaEnergeticaEgregores = $columna['CEEgregores'];
        $CargaEnergeticaEspiritus = $columna['CEEspiritus'];
        $CargaEnergeticaMuertos = $columna['CEMuertos'];
        $CargaEnergeticaDemonios = $columna['CEDemonios'];

        $MagiaNegra = $columna['MNegra'];
        $MagiaMalOjo = $columna['MMalOjo'];
        $MagiaEntierro = $columna['MEntierro'];
        $MagiaHechiceria = $columna['MHechiceria'];
        $MagiaFrizamiento = $columna['MFrizamiento'];
        $MagiaAmarre = $columna['MAmarre'];
        $MagiaConjuros = $columna['MConjuros'];
        $MagiaTabaco = $columna['MTabaco'];
        $MagiaSanteria = $columna['MSanteria'];
        $MagiaQuereme = $columna['MQuereme'];
        $MagiaMacumbe = $columna['MMacumbe'];
        $MagiaVudu = $columna['MVudu'];
        $MagiaMaldiciones = $columna['MMaldiciones'];
        $MagiaPaloYombe = $columna['MPaloYombe'];
        $Magia3Potencias = $columna['M3Potencias'];
        $MagiaUmbanda = $columna['MUmbanda'];
        $MagiaBebedizo = $columna['MBebedizo'];
        $MagiaAlumbramiento = $columna['MAlumbramiento'];
        $MagiaVampirismo = $columna['MVampirismo'];
        $MagiaSatanismo = $columna['MSatanismo'];
        $MagiaRuinas = $columna['MRuinas'];
        $MagiaEnfermedadFisica = $columna['MEnfermedadFisica'];
        $MagiaEnfermedadMental = $columna['MEnfermedadMental'];
        $MagiaEnfermedadEmocional = $columna['MEnfermedadEmocional'];

        $RecomendacionesBanios = $columna['RBanios'];
        $RecomendacionesProteccion = $columna['RProteccion'];
        $RecomendacionesAutoritual = $columna['RAutoritual'];
        $RecomendacionesExorcismo = $columna['RExorcismo'];
        $RecomendacionesLimpiezaPendulo = $columna['RLimpiezaPendulo'];
        $RecomendacionesReikiAngelical = $columna['RReikiAngelical'];
    }
?>

<input type="hidden" id="idPaciente" value="<?php echo $idPaciente; ?>">

<div class="container">
    <div class="row mt-5">
        <div class="col-12">
            <h4><a class="badge bg--AquaSpray" href="/historia-clinica/" role="button"><i class="bi bi-arrow-left-circle"></i></a> Historia clínica: <span class="nombrePaciente"><?php echo $DatosBasicosNombreCompleto; ?></span></h4><hr>
        </div>
    </div>

    <!-- Datos Básicos -->
    <div class="row mt-5">
        <div class="col-12">
            <h5>Datos Básicos</h5>
        </div>
        <div class="row mt-3">
            <div class="col-xl-6 col-sm-12 mb-3">
                <label for="DatosBasicos-NombreCompleto" class="form-label">Nombre completo</label>
                <input type="text" class="form-control" id="DatosBasicos-NombreCompleto" value="<?php echo $DatosBasicosNombreCompleto; ?>" readonly>
            </div>
            <div class="col-xl-3 col-sm-12 mb-3">
                <label for="DatosBasicos-FechaNacimiento" class="form-label">Fecha nacimiento</label>
                <input type="date" class="form-control" id="DatosBasicos-FechaNacimiento" value="<?php echo $DatosBasicosFechaNacimiento; ?>" readonly>
            </div>
            <div class="col-xl-3 col-sm-12 mb-3">
                <label for="DatosBasicos-Edad" class="form-label">Edad</label>
                <input type="text" class="form-control" id="DatosBasicos-Edad" value="<?php echo $DatosBasicosEdad; ?>" readonly>
            </div>
            <div class="col-xl-3 col-sm-12 mb-3">
                <label for="DatosBasicos-FechaTerapia" class="form-label">Fecha terapia</label>
                <input type="date" class="form-control" id="DatosBasicos-FechaTerapia" value="<?php echo $DatosBasicosFechaTerapia; ?>">
            </div>
            <div class="col-xl-3 col-sm-12 mb-3">
                <label for="DatosBasicos-Celular" class="form-label">Número celular</label>
                <input type="text" class="form-control" id="DatosBasicos-Celular" value="<?php echo $DatosBasicosCelular; ?>">
            </div>
            <div class="col-xl-3 col-sm-12 mb-3">
                <label for="DatosBasicos-EstadoCivil" class="form-label">Estado civil</label>
                <select class="form-select" id="DatosBasicos-EstadoCivil" data-Select="<?php echo $DatosBasicosEstadoCivil; ?>">
                    <option selected>Seleccione...</option>
                    <option value="Soltero/a">Soltero/a</option>
                    <option value="Casado/a">Casado/a</option>
                    <option value="Unión libre">Unión libre</option>
                    <option value="Separado/a">Separado/a</option>
                    <option value="Divorciado/a">Divorciado/a</option>
                    <option value="Viudo/a.">Viudo/a</option>
                </select>
            </div>
            <div class="col-xl-3 col-sm-12 mb-3">
                <label for="DatosBasicos-Hijos" class="form-label">¿Hijos?</label>
                <select class="form-select" id="DatosBasicos-Hijos" data-Select="<?php echo $DatosBasicosHijos; ?>">
                    <option selected>Seleccione...</option>
                    <option value="Si">Si</option>
                    <option value="No">No</option>
                </select>
            </div>
        </div>
    </div>

    <!-- Canalización vidas pasadas -->
    <div class="row mt-5">
        <div class="col-12">
            <h5>Canalización vidas pasadas</h5>
        </div>

        <div class="row mt-3">
            <div class="col-12 mb-3">
                <h6>Votos</h6>
                <ul class="list-group">
                    <li class="list-group-item">
                        <input class="form-check-input" type="checkbox" name="VidasPasadas" id="VidasPasadas-Celibato" data-Check="<?php echo $VidasPasadasCelibato; ?>">
                        Celibato
                    </li>
                    <li class="list-group-item">
                        <input class="form-check-input" type="checkbox" name="VidasPasadas" id="VidasPasadas-Castidad" data-Check="<?php echo $VidasPasadasCastidad; ?>">
                        Castidad
                    </li>
                    <li class="list-group-item">
                        <input class="form-check-input" type="checkbox" name="VidasPasadas" id="VidasPasadas-Pobreza" data-Check="<?php echo $VidasPasadasPobreza; ?>">
                        Pobreza
                    </li>
                    <li class="list-group-item">
                        <input class="form-check-input" type="checkbox" name="VidasPasadas" id="VidasPasadas-Silencio" data-Check="<?php echo $VidasPasadasSilencio; ?>">
                        Silencio
                    </li>
                    <li class="list-group-item">
                        <input class="form-check-input" type="checkbox" name="VidasPasadas" id="VidasPasadas-Sufrimiento" data-Check="<?php echo $VidasPasadasSufrimiento; ?>">
                        Sufrimiento
                    </li>
                    <li class="list-group-item">
                        <input class="form-check-input" type="checkbox" name="VidasPasadas" id="VidasPasadas-Obediencia" data-Check="<?php echo $VidasPasadasObediencia; ?>">
                        Obediencia
                    </li>
                    <li class="list-group-item">
                        <input class="form-check-input" type="checkbox" name="VidasPasadas" id="VidasPasadas-Sacrificio" data-Check="<?php echo $VidasPasadasSacrificio; ?>">
                        Sacrificio
                    </li>
                    <li class="list-group-item">
                        <input class="form-check-input" type="checkbox" name="VidasPasadas" id="VidasPasadas-Soledad" data-Check="<?php echo $VidasPasadasSoledad; ?>">
                        Soledad
                    </li>
                </ul>
            </div>

            <div class="col-12 mb-3">
                <label for="VidasPasadas-Observaciones" class="form-label">Observaciones</label>
                <textarea class="form-control" id="VidasPasadas-Observaciones" cols="30" rows="10"><?php echo $VidasPasadasObservaciones; ?></textarea>
            </div>
        </div>
    </div>

    <!-- Karmas transgeneracionales -->
    <div class="row mt-5">
        <div class="col-12">
            <h5>Karmas transgeneracionales</h5>
        </div>

        <div class="row mt-3">
            <div class="col-12 mb-3">
                <ul class="list-group">
                    <li class="list-group-item">
                        <input class="form-check-input" type="checkbox" name="KarmasTransgeneracionales" id="KarmasTransgeneracionales-Pobreza" data-Check="<?php echo $KarmasTransgeneracionalesPobreza; ?>">
                        Pobreza
                    </li>
                    <li class="list-group-item">
                        <input class="form-check-input" type="checkbox" name="KarmasTransgeneracionales" id="KarmasTransgeneracionales-Castidad" data-Check="<?php echo $KarmasTransgeneracionalesCastidad; ?>">
                        Castidad
                    </li>
                    <li class="list-group-item">
                        <input class="form-check-input" type="checkbox" name="KarmasTransgeneracionales" id="KarmasTransgeneracionales-Maldiciones" data-Check="<?php echo $KarmasTransgeneracionalesMaldiciones; ?>">
                        Maldiciones
                    </li>
                    <li class="list-group-item">
                        <input class="form-check-input" type="checkbox" name="KarmasTransgeneracionales" id="KarmasTransgeneracionales-ProyectoSentido" data-Check="<?php echo $KarmasTransgeneracionalesProyectoSentido; ?>">
                        Proyecto sentido
                    </li>
                    <li class="list-group-item">
                        <input class="form-check-input" type="checkbox" name="KarmasTransgeneracionales" id="KarmasTransgeneracionales-HijoSustituto" data-Check="<?php echo $KarmasTransgeneracionalesHijoSustituto; ?>">
                        Hijo sustituto
                    </li>
                    <li class="list-group-item">
                        <input class="form-check-input" type="checkbox" name="KarmasTransgeneracionales" id="KarmasTransgeneracionales-HijoImpostor" data-Check="<?php echo $KarmasTransgeneracionalesHijoImpostor; ?>">
                        Hijo impostor
                    </li>
                    <li class="list-group-item">
                        <input class="form-check-input" type="checkbox" name="KarmasTransgeneracionales" id="KarmasTransgeneracionales-HijoRechazado" data-Check="<?php echo $KarmasTransgeneracionalesHijoRechazado; ?>">
                        Hijo rechazado
                    </li>
                </ul>
            </div>

            <div class="col-12 mb-3">
                <label for="KarmasTransgeneracionales-Observaciones" class="form-label">Observaciones</label>
                <textarea class="form-control" id="KarmasTransgeneracionales-Observaciones" cols="30" rows="10"><?php echo $KarmasTransgeneracionalesObservaciones; ?></textarea>
            </div>
        </div>
    </div>

    <!-- Canalización de infancia -->
    <div class="row mt-5">
        <div class="col-12">
            <h5>Canalización de infancia</h5>
        </div>

        <div class="row mt-3">
            <div class="col-12 mb-3">
                <ul class="list-group">
                    <li class="list-group-item">
                        <input class="form-check-input" type="checkbox" name="CanalizacionInfancia" id="CanalizacionInfancia-Rechazo" data-Check="<?php echo $CanalizacionInfanciaRechazo; ?>">
                        Rechazo
                    </li>
                    <li class="list-group-item">
                        <input class="form-check-input" type="checkbox" name="CanalizacionInfancia" id="CanalizacionInfancia-Traicion" data-Check="<?php echo $CanalizacionInfanciaTraición; ?>">
                        Traición
                    </li>
                    <li class="list-group-item">
                        <input class="form-check-input" type="checkbox" name="CanalizacionInfancia" id="CanalizacionInfancia-Injusticia" data-Check="<?php echo $CanalizacionInfanciaInjusticia; ?>">
                        Injusticia
                    </li>
                    <li class="list-group-item">
                        <input class="form-check-input" type="checkbox" name="CanalizacionInfancia" id="CanalizacionInfancia-Humillacion" data-Check="<?php echo $CanalizacionInfanciaHumillación; ?>">
                        Humillación
                    </li>
                    <li class="list-group-item">
                        <input class="form-check-input" type="checkbox" name="CanalizacionInfancia" id="CanalizacionInfancia-Abandono" data-Check="<?php echo $CanalizacionInfanciaAbandono; ?>">
                        Abandono
                    </li>
                    <li class="list-group-item">
                        <input class="form-check-input" type="checkbox" name="CanalizacionInfancia" id="CanalizacionInfancia-Maltrato" data-Check="<?php echo $CanalizacionInfanciaMaltrato; ?>">
                        Maltrato
                    </li>
                    <li class="list-group-item">
                        <input class="form-check-input" type="checkbox" name="CanalizacionInfancia" id="CanalizacionInfancia-Abuso" data-Check="<?php echo $CanalizacionInfanciaAbuso; ?>">
                        Abuso
                    </li>
                    <li class="list-group-item">
                        <input class="form-check-input" type="checkbox" name="CanalizacionInfancia" id="CanalizacionInfancia-NinoInterior" data-Check="<?php echo $CanalizacionInfanciaNinoInterior; ?>">
                        Niño interior
                    </li>
                </ul>
            </div>

            <div class="col-12 mb-3">
                <label for="CanalizacionInfancia-Observaciones" class="form-label">Observaciones</label>
                <textarea class="form-control" id="CanalizacionInfancia-Observaciones" cols="30" rows="10"><?php echo $CanalizacionInfanciaObservaciones; ?></textarea>
            </div>
        </div>
    </div>

    <!-- Canalización futuro -->
    <div class="row mt-5">
        <div class="col-12">
            <h5>Canalización futuro</h5>
        </div>

        <div class="row mt-3">
            <div class="col-12 mb-3">
                <label for="CanalizacionFuturo-Observaciones" class="form-label">Observaciones</label>
                <textarea class="form-control" id="CanalizacionFuturo-Observaciones" cols="30" rows="10"><?php echo $CanalizacionFuturoObservaciones; ?></textarea>
            </div>
        </div>
    </div>

    <!-- Activación abundancia -->
    <div class="row mt-5">
        <div class="col-12">
            <h5>Activación abundancia</h5>
        </div>

        <div class="row mt-3">
            <div class="col-12 mb-3">
                <label for="ActivacionAbundancia-Observaciones" class="form-label">Observaciones</label>
                <textarea class="form-control" id="ActivacionAbundancia-Observaciones" cols="30" rows="10"><?php echo $ActivacionAbundanciaObservaciones; ?></textarea>
            </div>
        </div>
    </div>

    <!-- Misión de vida -->
    <div class="row mt-5">
        <div class="col-12">
            <h5>Misión de vida</h5>
        </div>

        <div class="row mt-3">
            <div class="col-12 mb-3">
                <label for="MisionVida-Observaciones" class="form-label">Observaciones</label>
                <textarea class="form-control" id="MisionVida-Observaciones" cols="30" rows="10"><?php echo $MisionVidaObservaciones; ?></textarea>
            </div>
        </div>
    </div>

    <!-- Propósitos espirituales -->
    <div class="row mt-5">
        <div class="col-12">
            <h5>Propósitos espirituales</h5>
        </div>

        <div class="row mt-3">
            <div class="col-12 mb-3">
                <label for="PropositosEspirituales-Observaciones" class="form-label">Observaciones</label>
                <textarea class="form-control" id="PropositosEspirituales-Observaciones" cols="30" rows="10"><?php echo $PropositosEspiritualesObservaciones; ?></textarea>
            </div>
        </div>
    </div>

    <!-- Chakras -->
    <div class="row mt-5">
        <div class="col-12">
            <h5>Chakras</h5>
        </div>

        <div class="row mt-3">
            <div class="col-12 mb-3">
                <ul class="list-group">
                    <li class="list-group-item">
                        <input class="form-check-input" type="checkbox" name="Chakras" id="Chakras-YoSoy" data-Check="<?php echo $ChakrasYoSoy; ?>">
                        Coronilla - Yo soy
                    </li>
                    <li class="list-group-item">
                        <input class="form-check-input" type="checkbox" name="Chakras" id="Chakras-YoVeo" data-Check="<?php echo $ChakrasYoVeo; ?>">
                        Ojo - Yo veo
                    </li>
                    <li class="list-group-item">
                        <input class="form-check-input" type="checkbox" name="Chakras" id="Chakras-YoHablo" data-Check="<?php echo $ChakrasYoHablo; ?>">
                        Garganta - Yo hablo
                    </li>
                    <li class="list-group-item">
                        <input class="form-check-input" type="checkbox" name="Chakras" id="Chakras-YoAmo" data-Check="<?php echo $ChakrasYoAmo; ?>">
                        Corazón - Yo amo
                    </li>
                    <li class="list-group-item">
                        <input class="form-check-input" type="checkbox" name="Chakras" id="Chakras-YoPuedo" data-Check="<?php echo $ChakrasYoPuedo; ?>">
                        Plexo - Yo puedo
                    </li>
                    <li class="list-group-item">
                        <input class="form-check-input" type="checkbox" name="Chakras" id="Chakras-YoDeseo" data-Check="<?php echo $ChakrasYoDeseo; ?>">
                        Sacro - Yo deseo
                    </li>
                    <li class="list-group-item">
                        <input class="form-check-input" type="checkbox" name="Chakras" id="Chakras-YoTengo" data-Check="<?php echo $ChakrasYoTengo; ?>">
                        Raíz - Yo tengo
                    </li>
                </ul>
            </div>

            <div class="col-12 mb-3">
                <label for="Chakras-Traumas" class="form-label">Traumas</label>
                <textarea class="form-control" id="Chakras-Traumas" cols="30" rows="10"><?php echo $ChakrasTraumas; ?></textarea>
            </div>
            <div class="col-12 mb-3">
                <label for="Chakras-HeridasInfancia" class="form-label">Heridas infancia</label>
                <textarea class="form-control" id="Chakras-HeridasInfancia" cols="30" rows="10"><?php echo $ChakrasHeridasInfancia; ?></textarea>
            </div>
            <div class="col-12 mb-3">
                <label for="Chakras-VidasPasadas" class="form-label">Vidas pasadas</label>
                <textarea class="form-control" id="Chakras-VidasPasadas" cols="30" rows="10"><?php echo $ChakrasVidasPasadas; ?></textarea>
            </div>
        </div>
    </div>

    <!-- Carga energética -->
    <div class="row mt-5">
        <div class="col-12">
            <h5>Carga energética</h5>
        </div>

        <div class="row mt-3">
            <div class="col-12 mb-3">
                <ul class="list-group">
                    <li class="list-group-item">
                        <input class="form-check-input" type="checkbox" name="CargaEnergetica" id="CargaEnergetica-LarvasAstrales" data-Check="<?php echo $CargaEnergeticaLarvasAstrales; ?>">
                        Larvas astrales
                    </li>
                    <li class="list-group-item">
                        <input class="form-check-input" type="checkbox" name="CargaEnergetica" id="CargaEnergetica-Egregores" data-Check="<?php echo $CargaEnergeticaEgregores; ?>">
                        Egregores
                    </li>
                    <li class="list-group-item">
                        <input class="form-check-input" type="checkbox" name="CargaEnergetica" id="CargaEnergetica-Espiritus" data-Check="<?php echo $CargaEnergeticaEspiritus; ?>">
                        Espíritus
                    </li>
                    <li class="list-group-item">
                        <input class="form-check-input" type="checkbox" name="CargaEnergetica" id="CargaEnergetica-Muertos" data-Check="<?php echo $CargaEnergeticaMuertos; ?>">
                        Muertos
                    </li>
                    <li class="list-group-item">
                        <input class="form-check-input" type="checkbox" name="CargaEnergetica" id="CargaEnergetica-Demonios" data-Check="<?php echo $CargaEnergeticaDemonios; ?>">
                        Demonios
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Magia -->
    <div class="row mt-5">
        <div class="col-12">
            <h5>Magia</h5>
        </div>

        <div class="row mt-3">
            <div class="col-12 mb-3">
                <ul class="list-group">
                    <li class="list-group-item">
                        <input class="form-check-input" type="checkbox" name="Magia" id="Magia-Negra" data-Check="<?php echo $MagiaNegra; ?>">
                        Negra
                    </li>
                    <li class="list-group-item">
                        <input class="form-check-input" type="checkbox" name="Magia" id="Magia-MalOjo" data-Check="<?php echo $MagiaMalOjo; ?>">
                        Mal de ojo
                    </li>
                    <li class="list-group-item">
                        <input class="form-check-input" type="checkbox" name="Magia" id="Magia-Entierro" data-Check="<?php echo $MagiaEntierro; ?>">
                        Entierro
                    </li>
                    <li class="list-group-item">
                        <input class="form-check-input" type="checkbox" name="Magia" id="Magia-Hechiceria" data-Check="<?php echo $MagiaHechiceria; ?>">
                        Hechicería
                    </li>
                    <li class="list-group-item">
                        <input class="form-check-input" type="checkbox" name="Magia" id="Magia-Frizamiento" data-Check="<?php echo $MagiaFrizamiento; ?>">
                        Frizamiento
                    </li>
                    <li class="list-group-item">
                        <input class="form-check-input" type="checkbox" name="Magia" id="Magia-Amarre" data-Check="<?php echo $MagiaAmarre; ?>">
                        Amarre
                    </li>
                    <li class="list-group-item">
                        <input class="form-check-input" type="checkbox" name="Magia" id="Magia-Conjuros" data-Check="<?php echo $MagiaConjuros; ?>">
                        Conjuros
                    </li>
                    <li class="list-group-item">
                        <input class="form-check-input" type="checkbox" name="Magia" id="Magia-Tabaco" data-Check="<?php echo $MagiaTabaco; ?>">
                        Tabaco
                    </li>
                    <li class="list-group-item">
                        <input class="form-check-input" type="checkbox" name="Magia" id="Magia-Santeria" data-Check="<?php echo $MagiaSanteria; ?>">
                        Santeria
                    </li>
                    <li class="list-group-item">
                        <input class="form-check-input" type="checkbox" name="Magia" id="Magia-Quereme" data-Check="<?php echo $MagiaQuereme; ?>">
                        Quereme
                    </li>
                    <li class="list-group-item">
                        <input class="form-check-input" type="checkbox" name="Magia" id="Magia-Macumbe" data-Check="<?php echo $MagiaMacumbe; ?>">
                        Macumbe
                    </li>
                    <li class="list-group-item">
                        <input class="form-check-input" type="checkbox" name="Magia" id="Magia-Vudu" data-Check="<?php echo $MagiaVudu; ?>">
                        Vudú
                    </li>
                    <li class="list-group-item">
                        <input class="form-check-input" type="checkbox" name="Magia" id="Magia-Maldiciones" data-Check="<?php echo $MagiaMaldiciones; ?>">
                        Maldiciones
                    </li>
                    <li class="list-group-item">
                        <input class="form-check-input" type="checkbox" name="Magia" id="Magia-PaloYombe" data-Check="<?php echo $MagiaPaloYombe; ?>">
                        Palo Yombe
                    </li>
                    <li class="list-group-item">
                        <input class="form-check-input" type="checkbox" name="Magia" id="Magia-3Potencias" data-Check="<?php echo $Magia3Potencias; ?>">
                        3 Potencias
                    </li>
                    <li class="list-group-item">
                        <input class="form-check-input" type="checkbox" name="Magia" id="Magia-Umbanda" data-Check="<?php echo $MagiaUmbanda; ?>">
                        Umbanda
                    </li>
                    <li class="list-group-item">
                        <input class="form-check-input" type="checkbox" name="Magia" id="Magia-Bebedizo" data-Check="<?php echo $MagiaBebedizo; ?>">
                        Bebedizo
                    </li>
                    <li class="list-group-item">
                        <input class="form-check-input" type="checkbox" name="Magia" id="Magia-Alumbramiento" data-Check="<?php echo $MagiaAlumbramiento; ?>">
                        Alumbramiento
                    </li>
                    <li class="list-group-item">
                        <input class="form-check-input" type="checkbox" name="Magia" id="Magia-Vampirismo" data-Check="<?php echo $MagiaVampirismo; ?>">
                        Vampirismo
                    </li>
                    <li class="list-group-item">
                        <input class="form-check-input" type="checkbox" name="Magia" id="Magia-Satanismo" data-Check="<?php echo $MagiaSatanismo; ?>">
                        Satanismo
                    </li>
                    <li class="list-group-item">
                        <input class="form-check-input" type="checkbox" name="Magia" id="Magia-Ruinas" data-Check="<?php echo $MagiaRuinas; ?>">
                        Ruinas
                    </li>
                    <li class="list-group-item">
                        <input class="form-check-input" type="checkbox" name="Magia" id="Magia-EnfermedadFisica" data-Check="<?php echo $MagiaEnfermedadFisica; ?>">
                        Enfermedad física
                    </li>
                    <li class="list-group-item">
                        <input class="form-check-input" type="checkbox" name="Magia" id="Magia-EnfermedadMental" data-Check="<?php echo $MagiaEnfermedadMental; ?>">
                        Enfermedad mental
                    </li>
                    <li class="list-group-item">
                        <input class="form-check-input" type="checkbox" name="Magia" id="Magia-EnfermedadEmocional" data-Check="<?php echo $MagiaEnfermedadEmocional; ?>">
                        Enfermedad emocional
                    </li>
                </ul>
            </div>

            <div class="col-12 mb-3">
                <label for="Magia-Observaciones" class="form-label">Observaciones</label>
                <textarea class="form-control" id="Magia-Observaciones" cols="30" rows="10"></textarea>
            </div>
        </div>
    </div>

    <!-- Recomendaciones -->
    <div class="row mt-5">
        <div class="col-12">
            <h5>Recomendaciones</h5>
        </div>

        <div class="row mt-3">
            <div class="col-12 mb-3">
                <ul class="list-group">
                    <li class="list-group-item">
                        <input class="form-check-input" type="checkbox" name="Recomendaciones" id="Recomendaciones-Banios" data-Check="<?php echo $RecomendacionesBanios; ?>">
                        Baños
                    </li>
                    <li class="list-group-item">
                        <input class="form-check-input" type="checkbox" name="Recomendaciones" id="Recomendaciones-Proteccion" data-Check="<?php echo $RecomendacionesProteccion; ?>">
                        Protección
                    </li>
                    <li class="list-group-item">
                        <input class="form-check-input" type="checkbox" name="Recomendaciones" id="Recomendaciones-Autoritual" data-Check="<?php echo $RecomendacionesAutoritual; ?>">
                        Autoritual
                    </li>
                    <li class="list-group-item">
                        <input class="form-check-input" type="checkbox" name="Recomendaciones" id="Recomendaciones-Exorcismo" data-Check="<?php echo $RecomendacionesExorcismo; ?>">
                        Exorcismo
                    </li>
                    <li class="list-group-item">
                        <input class="form-check-input" type="checkbox" name="Recomendaciones" id="Recomendaciones-LimpiezaPendulo" data-Check="<?php echo $RecomendacionesLimpiezaPendulo; ?>">
                        Limpieza péndulo
                    </li>
                    <li class="list-group-item">
                        <input class="form-check-input" type="checkbox" name="Recomendaciones" id="Recomendaciones-ReikiAngelical" data-Check="<?php echo $RecomendacionesReikiAngelical; ?>">
                        Reiki angelical
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="row mt-5 mb-5">
        <div class="d-grid gap-2 col-6 mx-auto">
            <button class="btn btn-primary" type="button" id="crearHistoriaClinica">Actualizar</button>
        </div>
    </div>
</div>