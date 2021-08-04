<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shoes Store</title>
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/css/bootstrap.min.css" integrity="sha512-usVBAd66/NpVNfBge19gws2j6JZinnca12rAe2l+d+QkLU9fiG02O1X8Q6hepIpr/EYKZvKx/I9WsnujJuOmBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital@0;1&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="icon" type="image/png" href="./assets/image/shoes-logo.png"/>

</head>
<?php
    $base_url = "http://" . $_SERVER['SERVER_NAME'] ."/ShoesStore/";

    $name = substr($_POST['name'], 0, -1);
    $harga = (int)$_POST['harga'];
    $warna = substr($_POST['warna'], 0, -1);
    $img_url = substr($_POST['img_url'], 0, -1);

?>
<body>
    <div class="header">
        <div><span class="head-title"><a href='./index.php' class="head-title"><img src="./assets/image/shoes-logo.png"/>Shoes Store</a></span></div>
        <div><span class="buy-now"><a href='./product.php' class="head-title">Shop Now</a><span></div>
        <div><span><a href='./aboutUs.php' class="head-title">About Us</a><span></div>
    </div>
    <div class="content">
        <div class="text-center title-content"></div>
        <form action=<?= "'./buyForm.php'"; ?> method="post">
            <div class="row container-detail-product">
                <div class="col-6 img-detail-product">
                    <div class="container-product">
                        <img src="<?= $img_url ?>" class="w-100">
                    </div>
                </div>
                <div class="col-6">
                    <p class="nama-product"><?= str_replace('_',' ',$name) ?></p>
                    <p class="harga-product">Rp. <?= number_format($harga,2,',','.') ?></p>
                    <p class="warna-product">Color - <?= $warna ?></p>
                    <div class="size-product d-flex">
                        <span class="w-20">Size </span>
                        <select name="size" class="form-select" required>
                            <option value="29">29</option>
                            <option value="30">30</option>
                            <option value="31">31</option>
                            <option value="32">32</option>
                        </select>
                    </div>
                    <div class="size-product d-flex">
                        <span class="w-20 mt-4">Qty </span>
                        <input type="number" name="qty" min=1 class="form-control mt-4" value="0" required>
                    </div>
                    <input type="hidden" name="name" value="<?= $name ?>">
                    <input type="hidden" name="harga" value="<?= $harga ?>">
                    <input type="hidden" name="warna" value="<?= $warna ?>">
                    <input type="hidden" name="img_url" value="<?= $img_url ?>">
                    <input type="submit" value="BUY" class="buy-button btn btn-danger"/>
                </div>
            </div>
        </form>
        <!-- <form method="post" action="./product.php">
            <input type="hidden" name="test" value="test">
            <button id="submit"></button>

        </form> -->
        
    </div>
    <div class="footer">
        <div class="footer-content">
            <div class="footer-img">
                <div>
                    <img src="./assets/image/shoes-logo.png" class="w-20">
                    <span>Shoes Store</span>
                </div>
                <div>
                    <span>Find Us &nbsp; <a href="#"><i class="fab fa-lg fa-instagram"></i></a> <a href="#"><i class="fab fa-lg fa-facebook-square"></i></a> <a href="#"><i class="fab fa-lg fa-twitter-square"></i></a>  </span>

                </div>
            </div>
        </div>
        <div class="footer-copy">
            <p>Privacy Policy     |     Terms and Conditions © 2021 ShoesStore</p>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/js/bootstrap.min.js" integrity="sha512-a6ctI6w1kg3J4dSjknHj3aWLEbjitAXAjLDRUxo2wyYmDFRcz2RJuQr5M3Kt8O/TtUSp8n2rAyaXYy1sjoKmrQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" integrity="sha512-RXf+QSDCUQs5uwRKaDoXt55jygZZm2V++WUZduaU/Ui/9EGp3f/2KZVahFZBKGH0s774sd3HmrhUy+SgOFQLVQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>
</html>