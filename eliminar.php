<?php include "header.php"; ?>


<div class="container" style="font-family: 'Roboto', sans-serif;">
    <div class="card border-0 shadow my-5">
        <div class="card-body p-5">
        <h1 class="font-weight-light">Eliminar datos con php y mysqli</h1>
            <p class="lead">
                Para poder eliminar datos a mysql con php, solo necesitamos crear la cadena sql valida y ejecutarla 
                con el objeto de conexion, asi recibiremos una respuesta en 1 o 0 o true o false, en este tipo de 
                sentencia es totalmente necesario agregar un where. 
            </p>
            <p style="color:red">
                    Nota: No olvidar el where o te corren jojo
            </p>
            <h3>Ejemplo de como eliminar con php y mysqli</h3>
            <p>$sql = "DELETE FROM t_tabla WHERE idtabla = '$idVariable' "</p>
            <p>$respuesta = mysqli_query($conexion, $sql);</p>
            <p>
                Con la variable $respuesta podremos validar si se ha llevado a cabo el delete o no.
            </p>
        </div>
    </div>
</div>


<?php include "footer.php"; ?>