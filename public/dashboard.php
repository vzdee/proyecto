<?php
include_once '../includes/headerdash.php';
?>

<section id="dashboard">
    <div class="tables-box">
        <div class="table-empleados">
            <h2>Empleados</h2>
            <div class="empleados">
                <table class="employers-table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Correo</th>
                            <th>Teléfono</th>
                            <th>NSS</th>
                            <th>RFC</th>
                        </tr>
                    </thead>
                    <tbody id="employers-body">
                        <!-- Los datos de los empleados se llenarán aquí mediante AJAX -->
                    </tbody>
                </table>
            </div>
        </div>

        <div class="table-services">
            <h2>Servicios</h2>
            <div class="services">
                <table class="services-table">
                    <thead>
                        <tr>
                            <th># Servicio</th>
                            <th># Cliente</th>
                            <th># Empleado</th>
                            <th>Tipo Servicio</th>
                            <th>Costo Estimado</th>
                            <th>Fecha Incio</th>
                            <th>Fecha Final</th>
                        </tr>
                    </thead>
                    <tbody id="services-body">
                        <!-- Los datos de los servicios se llenarán aquí mediante AJAX -->
                    </tbody>
                </table>
            </div>
        </div>

    </div>



</section>


</body>
</html>