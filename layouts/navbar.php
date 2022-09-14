<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container-fluid">
        <a class="navbar-brand" href="/"><img src="https://dateplannerus.com/wp-content/uploads/2022/03/logoDPBlanco.svg" width="180"></a>
        
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/administrador/dashboard/">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/administrador/reservas/">Reservas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/administrador/contabilidad/?day=&month=<?php echo date('F'); ?>&year=<?php echo date('Y'); ?>">Contabilidad</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/administrador/nomina/">Nomina</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/administrador/inventario/">Inventario</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/administrador/pos/?idBooking=">Facturación</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/administrador/empleados/">Empleados</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Informes</a>
                </li>
            </ul>
        </div>
    </div>
</nav>