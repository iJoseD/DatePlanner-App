<?php
    $servidor = "localhost"; $usuario = "angeles_admin"; $password = "4h@33leK"; $basededatos = "angeles_admin";
    $conexion = mysqli_connect( $servidor, $usuario, $password ) or die ("No se ha podido conectar al servidor de Base de datos");
    $db = mysqli_select_db( $conexion, $basededatos ) or die ( "Upps! Pues va a ser que no se ha podido conectar a la base de datos" );
?>

<div class="container">
    <div class="row mt-5">
        <div class="col-12">
            <h4><a class="badge bg--AquaSpray" href="/historia-clinica/" role="button"><i class="bi bi-arrow-left-circle"></i></a> Nueva Historia Clínica</h4><hr>
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
                <input type="text" class="form-control" id="DatosBasicos-NombreCompleto">
            </div>
            <div class="col-xl-3 col-sm-12 mb-3">
                <label for="DatosBasicos-FechaNacimiento" class="form-label">Fecha nacimiento</label>
                <input type="date" class="form-control" id="DatosBasicos-FechaNacimiento" value="01/01/1990">
            </div>
            <div class="col-xl-3 col-sm-12 mb-3">
                <label for="DatosBasicos-Edad" class="form-label">Edad</label>
                <input type="text" class="form-control" id="DatosBasicos-Edad" readonly>
            </div>
            <div class="col-xl-3 col-sm-12 mb-3">
                <label for="DatosBasicos-FechaTerapia" class="form-label">Fecha terapia</label>
                <input type="date" class="form-control" id="DatosBasicos-FechaTerapia">
            </div>
            <div class="col-xl-3 col-sm-12 mb-3">
                <label for="DatosBasicos-Celular" class="form-label">Número celular</label>
                <input type="text" class="form-control" id="DatosBasicos-Celular">
            </div>
            <div class="col-xl-3 col-sm-12 mb-3">
                <label for="DatosBasicos-EstadoCivil" class="form-label">Estado civil</label>
                <select class="form-select" id="DatosBasicos-EstadoCivil">
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
                <select class="form-select" id="DatosBasicos-Hijos">
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
                        <input class="form-check-input" type="checkbox" name="VidasPasadas" value="VidasPasadas-Celibato" id="VidasPasadas-Celibato">
                        Celibato
                    </li>
                    <li class="list-group-item">
                        <input class="form-check-input" type="checkbox" name="VidasPasadas" value="VidasPasadas-Castidad" id="VidasPasadas-Castidad">
                        Castidad
                    </li>
                    <li class="list-group-item">
                        <input class="form-check-input" type="checkbox" name="VidasPasadas" value="VidasPasadas-Pobreza" id="VidasPasadas-Pobreza">
                        Pobreza
                    </li>
                    <li class="list-group-item">
                        <input class="form-check-input" type="checkbox" name="VidasPasadas" value="VidasPasadas-Silencio" id="VidasPasadas-Silencio">
                        Silencio
                    </li>
                    <li class="list-group-item">
                        <input class="form-check-input" type="checkbox" name="VidasPasadas" value="VidasPasadas-Sufrimiento" id="VidasPasadas-Sufrimiento">
                        Sufrimiento
                    </li>
                    <li class="list-group-item">
                        <input class="form-check-input" type="checkbox" name="VidasPasadas" value="VidasPasadas-Obediencia" id="VidasPasadas-Obediencia">
                        Obediencia
                    </li>
                    <li class="list-group-item">
                        <input class="form-check-input" type="checkbox" name="VidasPasadas" value="VidasPasadas-Sacrificio" id="VidasPasadas-Sacrificio">
                        Sacrificio
                    </li>
                    <li class="list-group-item">
                        <input class="form-check-input" type="checkbox" name="VidasPasadas" value="VidasPasadas-Soledad" id="VidasPasadas-Soledad">
                        Soledad
                    </li>
                </ul>
            </div>

            <div class="col-12 mb-3">
                <label for="VidasPasadas-Observaciones" class="form-label">Observaciones</label>
                <textarea class="form-control" id="VidasPasadas-Observaciones" cols="30" rows="10"></textarea>
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
                        <input class="form-check-input" type="checkbox" name="KarmasTransgeneracionales-Pobreza" id="KarmasTransgeneracionales-Pobreza">
                        Pobreza
                    </li>
                    <li class="list-group-item">
                        <input class="form-check-input" type="checkbox" name="KarmasTransgeneracionales-Castidad" id="KarmasTransgeneracionales-Castidad">
                        Castidad
                    </li>
                    <li class="list-group-item">
                        <input class="form-check-input" type="checkbox" name="KarmasTransgeneracionales-Maldiciones" id="KarmasTransgeneracionales-Maldiciones">
                        Maldiciones
                    </li>
                    <li class="list-group-item">
                        <input class="form-check-input" type="checkbox" name="KarmasTransgeneracionales-ProyectoSentido" id="KarmasTransgeneracionales-ProyectoSentido">
                        Proyecto sentido
                    </li>
                    <li class="list-group-item">
                        <input class="form-check-input" type="checkbox" name="KarmasTransgeneracionales-HijoSustituto" id="KarmasTransgeneracionales-HijoSustituto">
                        Hijo sustituto
                    </li>
                    <li class="list-group-item">
                        <input class="form-check-input" type="checkbox" name="KarmasTransgeneracionales-HijoImpostor" id="KarmasTransgeneracionales-HijoImpostor">
                        Hijo impostor
                    </li>
                    <li class="list-group-item">
                        <input class="form-check-input" type="checkbox" name="KarmasTransgeneracionales-HijoRechazado" id="KarmasTransgeneracionales-HijoRechazado">
                        Hijo rechazado
                    </li>
                </ul>
            </div>

            <div class="col-12 mb-3">
                <label for="KarmasTransgeneracionales-Observaciones" class="form-label">Observaciones</label>
                <textarea class="form-control" id="KarmasTransgeneracionales-Observaciones" cols="30" rows="10"></textarea>
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
                        <input class="form-check-input" type="checkbox" name="CanalizacionInfancia-Rechazo" id="CanalizacionInfancia-Rechazo">
                        Rechazo
                    </li>
                    <li class="list-group-item">
                        <input class="form-check-input" type="checkbox" name="CanalizacionInfancia-Traición" id="CanalizacionInfancia-Traición">
                        Traición
                    </li>
                    <li class="list-group-item">
                        <input class="form-check-input" type="checkbox" name="CanalizacionInfancia-Injusticia" id="CanalizacionInfancia-Injusticia">
                        Injusticia
                    </li>
                    <li class="list-group-item">
                        <input class="form-check-input" type="checkbox" name="CanalizacionInfancia-Humillación" id="CanalizacionInfancia-Humillación">
                        Humillación
                    </li>
                    <li class="list-group-item">
                        <input class="form-check-input" type="checkbox" name="CanalizacionInfancia-Abandono" id="CanalizacionInfancia-Abandono">
                        Abandono
                    </li>
                    <li class="list-group-item">
                        <input class="form-check-input" type="checkbox" name="CanalizacionInfancia-Maltrato" id="CanalizacionInfancia-Maltrato">
                        Maltrato
                    </li>
                    <li class="list-group-item">
                        <input class="form-check-input" type="checkbox" name="CanalizacionInfancia-Abuso" id="CanalizacionInfancia-Abuso">
                        Abuso
                    </li>
                    <li class="list-group-item">
                        <input class="form-check-input" type="checkbox" name="CanalizacionInfancia-NinoInterior" id="CanalizacionInfancia-NinoInterior">
                        Niño interior
                    </li>
                </ul>
            </div>

            <div class="col-12 mb-3">
                <label for="CanalizacionInfancia-Observaciones" class="form-label">Observaciones</label>
                <textarea class="form-control" id="CanalizacionInfancia-Observaciones" cols="30" rows="10"></textarea>
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
                <textarea class="form-control" id="CanalizacionFuturo-Observaciones" cols="30" rows="10"></textarea>
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
                <textarea class="form-control" id="ActivacionAbundancia-Observaciones" cols="30" rows="10"></textarea>
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
                <textarea class="form-control" id="MisionVida-Observaciones" cols="30" rows="10"></textarea>
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
                <textarea class="form-control" id="PropositosEspirituales-Observaciones" cols="30" rows="10"></textarea>
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
                        <input class="form-check-input" type="checkbox" name="Chakras-YoSoy" id="Chakras-YoSoy">
                        Coronilla - Yo soy
                    </li>
                    <li class="list-group-item">
                        <input class="form-check-input" type="checkbox" name="Chakras-YoVeo" id="Chakras-YoVeo">
                        Ojo - Yo veo
                    </li>
                    <li class="list-group-item">
                        <input class="form-check-input" type="checkbox" name="Chakras-YoHablo" id="Chakras-YoHablo">
                        Garganta - Yo hablo
                    </li>
                    <li class="list-group-item">
                        <input class="form-check-input" type="checkbox" name="Chakras-YoAmo" id="Chakras-YoAmo">
                        Corazón - Yo amo
                    </li>
                    <li class="list-group-item">
                        <input class="form-check-input" type="checkbox" name="Chakras-YoPuedo" id="Chakras-YoPuedo">
                        Plexo - Yo puedo
                    </li>
                    <li class="list-group-item">
                        <input class="form-check-input" type="checkbox" name="Chakras-YoDeseo" id="Chakras-YoDeseo">
                        Sacro - Yo deseo
                    </li>
                    <li class="list-group-item">
                        <input class="form-check-input" type="checkbox" name="Chakras-YoTengo" id="Chakras-YoTengo">
                        Raíz - Yo tengo
                    </li>
                </ul>
            </div>

            <div class="col-12 mb-3">
                <label for="Chakras-Traumas" class="form-label">Traumas</label>
                <textarea class="form-control" id="Chakras-Traumas" cols="30" rows="10"></textarea>
            </div>
            <div class="col-12 mb-3">
                <label for="Chakras-HeridasInfancia" class="form-label">Heridas infancia</label>
                <textarea class="form-control" id="Chakras-HeridasInfancia" cols="30" rows="10"></textarea>
            </div>
            <div class="col-12 mb-3">
                <label for="Chakras-VidasPasadas" class="form-label">Vidas pasadas</label>
                <textarea class="form-control" id="Chakras-VidasPasadas" cols="30" rows="10"></textarea>
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
                        <input class="form-check-input" type="checkbox" name="CargaEnergetica-LarvasAstrales" id="CargaEnergetica-LarvasAstrales">
                        Larvas astrales
                    </li>
                    <li class="list-group-item">
                        <input class="form-check-input" type="checkbox" name="CargaEnergetica-Egregores" id="CargaEnergetica-Egregores">
                        Egregores
                    </li>
                    <li class="list-group-item">
                        <input class="form-check-input" type="checkbox" name="CargaEnergetica-Espiritus" id="CargaEnergetica-Espiritus">
                        Espíritus
                    </li>
                    <li class="list-group-item">
                        <input class="form-check-input" type="checkbox" name="CargaEnergetica-Muertos" id="CargaEnergetica-Muertos">
                        Muertos
                    </li>
                    <li class="list-group-item">
                        <input class="form-check-input" type="checkbox" name="CargaEnergetica-Demonios" id="CargaEnergetica-Demonios">
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
                        <input class="form-check-input" type="checkbox" name="Magia-Negra" id="Magia-Negra">
                        Negra
                    </li>
                    <li class="list-group-item">
                        <input class="form-check-input" type="checkbox" name="Magia-MalOjo" id="Magia-MalOjo">
                        Mal de ojo
                    </li>
                    <li class="list-group-item">
                        <input class="form-check-input" type="checkbox" name="Magia-Entierro" id="Magia-Entierro">
                        Entierro
                    </li>
                    <li class="list-group-item">
                        <input class="form-check-input" type="checkbox" name="Magia-Hechiceria" id="Magia-Hechiceria">
                        Hechicería
                    </li>
                    <li class="list-group-item">
                        <input class="form-check-input" type="checkbox" name="Magia-Frizamiento" id="Magia-Frizamiento">
                        Frizamiento
                    </li>
                    <li class="list-group-item">
                        <input class="form-check-input" type="checkbox" name="Magia-Amarre" id="Magia-Amarre">
                        Amarre
                    </li>
                    <li class="list-group-item">
                        <input class="form-check-input" type="checkbox" name="Magia-Conjuros" id="Magia-Conjuros">
                        Conjuros
                    </li>
                    <li class="list-group-item">
                        <input class="form-check-input" type="checkbox" name="Magia-Tabaco" id="Magia-Tabaco">
                        Tabaco
                    </li>
                    <li class="list-group-item">
                        <input class="form-check-input" type="checkbox" name="Magia-Santeria" id="Magia-Santeria">
                        Santeria
                    </li>
                    <li class="list-group-item">
                        <input class="form-check-input" type="checkbox" name="Magia-Quereme" id="Magia-Quereme">
                        Quereme
                    </li>
                    <li class="list-group-item">
                        <input class="form-check-input" type="checkbox" name="Magia-Macumbe" id="Magia-Macumbe">
                        Macumbe
                    </li>
                    <li class="list-group-item">
                        <input class="form-check-input" type="checkbox" name="Magia-Vudu" id="Magia-Vudu">
                        Vudú
                    </li>
                    <li class="list-group-item">
                        <input class="form-check-input" type="checkbox" name="Magia-Maldiciones" id="Magia-Maldiciones">
                        Maldiciones
                    </li>
                    <li class="list-group-item">
                        <input class="form-check-input" type="checkbox" name="Magia-PaloYombe" id="Magia-PaloYombe">
                        Palo Yombe
                    </li>
                    <li class="list-group-item">
                        <input class="form-check-input" type="checkbox" name="Magia-3Potencias" id="Magia-3Potencias">
                        3 Potencias
                    </li>
                    <li class="list-group-item">
                        <input class="form-check-input" type="checkbox" name="Magia-Umbanda" id="Magia-Umbanda">
                        Umbanda
                    </li>
                    <li class="list-group-item">
                        <input class="form-check-input" type="checkbox" name="Magia-Bebedizo" id="Magia-Bebedizo">
                        Bebedizo
                    </li>
                    <li class="list-group-item">
                        <input class="form-check-input" type="checkbox" name="Magia-Alumbramiento" id="Magia-Alumbramiento">
                        Alumbramiento
                    </li>
                    <li class="list-group-item">
                        <input class="form-check-input" type="checkbox" name="Magia-Vampirismo" id="Magia-Vampirismo">
                        Vampirismo
                    </li>
                    <li class="list-group-item">
                        <input class="form-check-input" type="checkbox" name="Magia-Satanismo" id="Magia-Satanismo">
                        Satanismo
                    </li>
                    <li class="list-group-item">
                        <input class="form-check-input" type="checkbox" name="Magia-Ruinas" id="Magia-Ruinas">
                        Ruinas
                    </li>
                    <li class="list-group-item">
                        <input class="form-check-input" type="checkbox" name="Magia-EnfermedadFisica" id="Magia-EnfermedadFisica">
                        Enfermedad física
                    </li>
                    <li class="list-group-item">
                        <input class="form-check-input" type="checkbox" name="Magia-EnfermedadMental" id="Magia-EnfermedadMental">
                        Enfermedad mental
                    </li>
                    <li class="list-group-item">
                        <input class="form-check-input" type="checkbox" name="Magia-EnfermedadEmocional" id="Magia-EnfermedadEmocional">
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
                        <input class="form-check-input" type="checkbox" name="Recomendaciones-Banios" id="Recomendaciones-Banios">
                        Baños
                    </li>
                    <li class="list-group-item">
                        <input class="form-check-input" type="checkbox" name="Recomendaciones-Proteccion" id="Recomendaciones-Proteccion">
                        Protección
                    </li>
                    <li class="list-group-item">
                        <input class="form-check-input" type="checkbox" name="Recomendaciones-Autoritual" id="Recomendaciones-Autoritual">
                        Autoritual
                    </li>
                    <li class="list-group-item">
                        <input class="form-check-input" type="checkbox" name="Recomendaciones-Exorcismo" id="Recomendaciones-Exorcismo">
                        Exorcismo
                    </li>
                    <li class="list-group-item">
                        <input class="form-check-input" type="checkbox" name="Recomendaciones-LimpiezaPendulo" id="Recomendaciones-LimpiezaPendulo">
                        Limpieza péndulo
                    </li>
                    <li class="list-group-item">
                        <input class="form-check-input" type="checkbox" name="Recomendaciones-ReikiAngelical" id="Recomendaciones-ReikiAngelical">
                        Reiki angelical
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="row mt-5 mb-5">
        <div class="d-grid gap-2 col-6 mx-auto">
            <button class="btn btn-primary" type="button" id="crearHistoriaClinica">Guardar</button>
        </div>
    </div>
</div>