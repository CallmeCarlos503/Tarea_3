<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>

<body style="background-image: url(https://wallpaperaccess.com/full/2159510.jpg);">
    <form action="Ejercicio3.php" method="POST">
        <div class="container">
            <div class="row align-items-start">
                <div class="col">
                    <br>
                    <img style="width: 550px;" src="img/Captura de pantalla (12).png" alt="">
                </div>
                <div class="col">
                    <br>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Ingrese el total a pagar</label>
                        <input type="number" required step="0.01" min="1.00" class="form-control" id="exampleFormControlInput1" placeholder="1.00" name="txtDinero">
                        <br>
                        <label for="exampleFormControlInput1" class="form-label">Ingrese la cantidad de productos comprados</label>
                        <input type="number" required min="1" class="form-control" id="exampleFormControlInput1" placeholder="1.00" name="txtCantidad">
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
                $Gasto = $_POST["txtDinero"];
                $Descuento = 0.00;

                $Cantidad = $_POST["txtCantidad"];
                if ($Cantidad >= 1 || $Cantidad <= 5) {
                    $Descuento = 0.10;
                } else {
                    if ($Cantidad >= 6 || $Cantidad <= 10) {
                        $Descuento = 0.20;
                    } else {
                        if ($Cantidad >= 11 || $Cantidad <= 15) {
                            $Descuento = 0.30;
                        } else {
                            if ($Cantidad >= 16 || $Cantidad <= 20) {
                                $Descuento = 0.40;
                            } else {
                                if ($Cantidad >= 21) {
                                    $Descuento = 0.50;
                                }
                            }
                        }
                    }
                }
            }
            ?>
            <?php
            if (isset($_POST["btn_Calcular"])) {
            ?>
                <div class="alert alert-primary" role="alert">

                    Su descuento por el : <?php echo "%" . $Descuento * 100.00; ?>
                    <br>
                    Descuento Aplicado: <?php echo "$" . $Gasto * $Descuento; ?>
                    <br>
                    Total a pagar: <?php echo "$" . $Gasto - ($Descuento  * $Gasto); ?>
                </div>
            <?php
            }
            ?>
    </form>
</body>

</html>
</body>

</html>