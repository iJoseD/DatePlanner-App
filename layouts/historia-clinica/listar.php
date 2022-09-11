<?php
    $servidor = "localhost"; $usuario = "angeles_admin"; $password = "4h@33leK"; $basededatos = "angeles_admin";
    $conexion = mysqli_connect( $servidor, $usuario, $password ) or die ("No se ha podido conectar al servidor de Base de datos");
    $db = mysqli_select_db( $conexion, $basededatos ) or die ( "Upps! Pues va a ser que no se ha podido conectar a la base de datos" );
?>

<div class="container">
    <div class="row mt-5">
        <div class="col-12">
            <h4>Historias Clínicas <a class="badge bg--AquaSpray" href="/historia-clinica/crear" role="button"><i class="bi bi-plus-circle-fill"></i></a></h4>
            <hr>
        </div>
    </div>

    <div class="row mt-5">
        <div class="row">
            <table id="table-HistoriasClinicas" class="display" style="width:100%">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Teléfono</th>
                        <th>Fecha terapia</th>
                        <th>Ultima actualización</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $consulta = "SELECT * FROM HistoriaClinica";
                        $resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");

                        while ($columna = mysqli_fetch_array( $resultado )) {
                            $fechaNacimiento = $columna['fechaNacimiento'];
                            $newFechaNacimiento = date("m/d/Y", strtotime( $fechaNacimiento )); ?>

                            <tr id="cliente-<?php echo $columna['id']; ?>">
                                <td><a href="/historia-clinica/editar?idPaciente=<?php echo $columna['id']; ?>"><?php echo $columna['NombreCompleto']; ?></a></td>
                                <td><?php echo $columna['Celular']; ?></td>
                                <td><?php echo $columna['FechaTerapia']; ?></td>
                                <td>Daniel Bahena</td>
                            </tr>
                        <?php }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>