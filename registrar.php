<?php
include("conexion.php");

if (isset($_POST['register'])) {
    if (strlen($_POST['username']) >= 1 && strlen($_POST['password']) >= 1){
        $name = trim($_POST['username']);
        $pass = trim($_POST['password']);
        $datereg = date("d/m/y");
        $consulta = "INSERT INTO datos(user, pass, date_reg) VALUES ('$name','$pass','$datereg')";
        $resultado = mysqli_query($conn,$consulta);
        if ($resultado){
            ?>
            <h3 class="text-center bg-success text-white p-2 mt-4">Te has inscrito correctamente</h3>
            <?php
        } else{
            ?>
            <h3 class="text-danger">Ha ocurrido un error</h3>

            <?php
        }
    }   else{
        ?>
            <h3 class="text-center bg-danger text-white p-2 mt-4">Por favor complete los campos</h3>
            <?php
    }
}

?>
