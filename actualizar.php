<?php include "header.php"; ?>


<div class="container" style="font-family: 'Roboto', sans-serif;">
    <div class="card border-0 shadow my-5">
        <div class="card-body p-5">
        <h1 class="font-weight-light">Actualizar datos de php a mysql con mysqli</h1>
            <p class="lead">
                Para poder actualizar datos con php usando mysqli, necesitamos crear la cedena sql valida y 
                ejecutarla con el objeto de conexion, por otra parte la informacion que se desea actualizar 
                debe estar contenida en variables por convension.
                <p style="color:red">
                    Nota: No olvidar el where o te corren jojo
                </p>
                <h3>Ejemplo de actualizacion con php y mysqli</h3>
                <p>$sql = "UPDATE t_tabla SET campo1 = '$variable1', campo2 = '$variable2' WHERE id = '$variableId' "</p>
                <p>$respuesta = mysqli_query($conexion, $sql);</p>
            </p>
        </div>
    </div>
</div>


<?php include "footer.php"; ?>