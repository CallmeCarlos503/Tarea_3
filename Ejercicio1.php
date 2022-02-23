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

<body style="background-image: url(https://images5.alphacoders.com/958/thumb-1920-958580.jpg);">
    <form action="Ejercicio1.php" method="POST">
        <div class="container">
            <div class="row align-items-start">
                <div class="col">
                    <br>
                    <img style="width: 450px;" src="img/Captura de pantalla (1).png" alt="">
                </div>
                <div class="col">
                    <br>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Ingrese la cantidad total</label>
                        <input type="number" step="0.01" min="1.00" class="form-control" id="exampleFormControlInput1" placeholder="1.00" name="txtDinero">
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
                $compra = $_POST["txtDinero"];
                $Descuento = 0.00;
                if ($compra >= 1.00 && $compra <= 100.00) {
                    $Descuento = 0.10;
                } else {
                    if ($compra >= 100.01 && $compra <= 400.00) {
                        $Descuento = 0.15;
                    } else {
                        if ($compra >= 400.01 && $compra <= 600.00) {
                            $Descuento = 0.20;
                        } else {
                            if ($compra >= 600.01) {
                                $Descuento = 0.25;
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
                    Monto Comprado es: <?php echo"$".$compra;?>
                    <br>
                    Su descuento es: <?php echo "%" . $Descuento * 100.00; ?>
                    <br>
                    Monto por el descueto: <?php echo"$". $compra*$Descuento;?>
                    <br>
                    Su Precio total por la compra es: <?php echo "$" . $compra - ($Descuento*$compra); ?>
                </div>
            <?php
            }
            ?>
    </form>
</body>

</html>