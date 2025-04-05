<?php
require '../includes/header.php';

?>
    <section id="dashboard">
        <div class="dashbox">
            <h2>DASHBOARD</h2>
        </div>

        <div class="empleados-box">
            <h3>Lista de Empelado</h3>
            <div class="empleados-table">
                <table>
                    <th>IDEmpleado</th>
                    <th>Nombres</th>
                    <th>Apellidos</th>
                    <th>Correo</th>
                    <th>Telefono</th>
                    <th>NSS</th>
                    <th>RFC</th>
                </table>
            </div>
        </div>

        <div class="services-box">
            <h3>Lista de Servicios</h3>
            <div class="services-table">
                <table>
                    <th>IDServicio</th>
                    <th>Nombre Cliente</th>
                    <th>Nombre Empleado</th>
                    <th>Tipo Servici</th>
                    <th>Estado Servicio</th>
                    <th>Costo Estimado</th>
                    <th>Fecha Inicial</th>
                    <th>Fecha Final</th>
                </table>
            </div>
        </div>

    </section>


</body>
</html>