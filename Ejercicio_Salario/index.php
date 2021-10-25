<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <title>Formulario</title>
</head>

<body>
    <?php
    $empleado = "";
    $horas = "";
    $valor_hora_categoria = "";

    if (isset($_POST['empleado'])) {
        $empleado = $_POST['empleado'];
    }
    if (isset($_POST['horas'])) {
        $horas = $_POST['horas'];
    }
    if (isset($_POST['categoria'])) {
        $idCategoria = $_POST['categoria'];
    }
    $categorias = array(
        array("id" => 1, "nombre" => "Jefe", "valor" => 50),
        array("id" => 2, "nombre" => "Administrativo", "valor" => 30),
        array("id" => 3, "nombre" => "Operario", "valor" => 15),
        array("id" => 4, "nombre" => "Becario", "valor" => 6)
    );

    function calcularBruto($horas, $valor_hora_categoria)
    {
        $bruto = $horas * $valor_hora_categoria;
        return $bruto;
    }

    function calcularDescuento($bruto, $porcentajeDescuento)
    {
        $descuento = $bruto * $porcentajeDescuento;
    }
    ?>


    <div class="container">
        <form action="index.php" method="post">
            <p> Empleado: <input type="text" name="empleado" value="<?php echo $empleado ?>" />
            </p> Horas: <input type="text" name="horas" value="<?php echo $horas ?>" />
            <p>

                Categoría

                <select name="categoria" size="1">

                    <?php
                    foreach ($categorias as $categoria) {
                        if ($idCategoria == $categoria['id']) {
                            $seleccion = "selected";
                        }
                        echo  '<option value="' . $categoria['valor'] . '"' . $seleccion . '>' . $categoria['nombre'] . '</option>';
                    }

                    ?>
                </select>
            </p>

            <?php
            echo '</p>
            Salario bruto
            </p>';
            if ($horas != "") {
                $bruto = $horas * $valor_hora_categoria;
                echo $bruto . '€';
            } else {
                echo '0€';
            }
            echo '<p>';

            echo '</p>Descuento</p>';
            if ($horas != "") {
                $descuento = $horas * 0.15;
                echo $bruto . '€';
            } else {
                echo '0€';
            }
            echo '<p>';

            echo 'Salario neto </p>';

            if ($horas != "") {
                $neto = $bruto - $descuento;
                echo $neto . '€';
            } else {
                echo '0€';
            }
            echo '<p>';
            ?>

            </p>
            Descuento
            </p>
            </p>
            Salario neto
            <p><input type="submit" value="Calcular"></p>
            <p><input type="reset" value="Limpiar"></p>
        </form>
    </div>
</body>

</html>