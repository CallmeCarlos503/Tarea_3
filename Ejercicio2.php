<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicios if</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>

<body style="background-image: url(https://wallpaperaccess.com/full/2159510.jpg);">
    <form action="Ejercicio2.php" method="POST">
        <div class="container">
            <div class="row align-items-start">
                <div class="col">
                    <br>
                    <img style="width: 550px;" src="img/Captura de pantalla (11).png" alt="">
                </div>
                <div class="col">
                    <br>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Ingrese el salario neto</label>
                        <input type="number" required step="0.01" min="1.00" class="form-control" id="exampleFormControlInput1" placeholder="1.00" name="txtDinero">
                        <br>
                        <center>
                            <input type="submit" value="Calcular" name="btn_Calcular" class="btn btn-warning">
                        </center>
                    </div>
                </div>

            </div>
            <br><br>
            <?php
            if (isset($_POST["btn_Calcular"])) {
                $Salario = $_POST["txtDinero"];
                $Descuento = 0.00;
                $DescuentoS = 0.00;
                $mensaje = "";
                if ($Salario > 657.25) {
                    $Descuento = 0.03;
                    $mensaje = "ISSS";
                } else {
                    if ($Salario > 857.15) {
                        $Descuento = 0.10;
                        $mensaje = "Renta";
                    } else {
                        if ($Salario > 450.00) {
                            $Descuento = 0.05;
                            $mensaje = "AFP";
                        }
                    }
                }
                if ($Salario < 1000.00) {
                    $DescuentoS = 0.04;
                } else {
                    if ($Salario > 1000.00) {
                        $DescuentoS = 0.06;
                    }
                }
            }
            ?>
            <?php
            if (isset($_POST["btn_Calcular"])) {
            ?>
                <div class="alert alert-primary" role="alert">
                    Descuento por seguro es de : <?php echo "%" . $DescuentoS * 100.00; ?>
                    <br>
                    Su descuento por <?php echo "$mensaje"; ?> : <?php echo "%" . $Descuento * 100.00; ?>
                    <br>
                    Salario Base: <?php echo "$" . $Salario; ?>
                    <br>
                    Salario Neto: <?php echo "$" . $Salario - (($Descuento + $DescuentoS) * $Salario); ?>
                </div>
            <?php
            }
            ?>
    </form>
</body>

</html>
</body>

</html>