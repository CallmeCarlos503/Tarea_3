<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>

<body style="background-image: url(https://free4kwallpapers.com/uploads/originals/2021/07/07/-mustang-wallpaper.jpg);">
    <form action="Ejercicio4.php" method="POST">
        <div class="container">
            <div class="row align-items-start">
                <div class="col">
                    <br>
                    <img style="width: 450px;" src="img/Captura de pantalla (13).png" alt="">
                </div>
                <div class="col">
                    <br>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Ingrese la cantidad total</label>
                        <input type="number" step="0.01" min="0.01" class="form-control" id="exampleFormControlInput1" placeholder="1.00" name="txtDinero">
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
                if ($compra >= 0.01 && $compra <= 1000.00) {
                    $Descuento = 0.10;
                } else {
                    if ($compra >= 1000.01 && $compra <= 3000.00) {
                        $Descuento = 0.20;
                    } else {
                        if ($compra >= 3000.01 ) {
                            $Descuento = 0.30;
                        } 
                    }
                }
            }
            ?>
            <?php
            if (isset($_POST["btn_Calcular"])) {
            ?>
                <div class="alert alert-primary" role="alert">
                   
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