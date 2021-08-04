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

    $dataProduct = [];
    $dataProduct[] = ['name' => 'Vans_Customs_Leather_Rainbow_Laces_Old_Skool', 'harga' => 1500000, 'img_url' => './assets/image/shoes/vans1.png', 'warna' => 'White'];
    $dataProduct[] = ['name' => 'Vans_Old_Skool_Shoes_White', 'harga' => 800000, 'img_url' => './assets/image/shoes/vans2.png', 'warna' => 'White'];
    $dataProduct[] = ['name' => 'Adidas_Sepatu_Forum_Plus', 'harga' => 1500000, 'img_url' => './assets/image/shoes/adidas1.png', 'warna' => 'White-Red'];
    $dataProduct[] = ['name' => 'Adidas_Superstar', 'harga' => 1600000, 'img_url' => './assets/image/shoes/adidas2.png', 'warna' => 'White'];
    $dataProduct[] = ['name' => 'Adidas_Forum_84_Low', 'harga' => 1700000, 'img_url' => './assets/image/shoes/adidas3.png', 'warna' => 'White-Green-Silver'];
    $dataProduct[] = ['name' => 'Nike_Air_Force_1_07_Craft', 'harga' => 1799000, 'img_url' => './assets/image/shoes/nike1.png', 'warna' => 'White-Red'];
    $dataProduct[] = ['name' => 'Nike_Air_Force_1', 'harga' => 1379000, 'img_url' => './assets/image/shoes/nike2.png', 'warna' => 'Black'];
?>
<body>
    <div class="header">
        <div><span class="head-title"><a href='./index.php' class="head-title"><img src="./assets/image/shoes-logo.png"/>Shoes Store</a></span></div>
        <div><span class="buy-now"><a href='./product.php' class="head-title">Shop Now</a><span></div>
        <div><span><a href='./aboutUs.php' class="head-title">About Us</a><span></div>
    </div>
    <div class="content">
        <div class="text-center title-content"><p>Our Product</p></div>
        <div class="row">
            <?php
                foreach ($dataProduct as $key => $dataP) {
                    // $link = $base_url."productDetail.php?name=".$dataP["name"]."&harga=".$dataP["harga"]."&warna=".$dataP["warna"]."&img_url=".$dataP["img_url"];
                    // <a class="product-list" href='.$link.'>
                    // </a>
                    $link = './productDetail.php';
                    echo '
                    <div class="col-3 pb-4">
                        <form action="'.$link.'" method="post" class="product-pointer">
                            <div class="card">
                                <div class="card-header">
                                    <div class="label">Baru</div>
                                    <img src='.$dataP["img_url"].' class="w-100">
                                </div>
                                <div class="card-content">
                                    <p>'.str_replace('_',' ',$dataP["name"]).'</p>
                                    <p>Rp. '.number_format($dataP["harga"],2,',','.').'</p>
                                </div>
                            </div>
                            <input type="hidden" name="name" value='.$dataP["name"].'/>
                            <input type="hidden" name="harga" value='.$dataP["harga"].'/>
                            <input type="hidden" name="warna" value='.$dataP["warna"].'/>
                            <input type="hidden" name="img_url" value='.$dataP["img_url"].'/>
                        </form>
                    </div>
                    ';
                }
            ?>
        </div>
      
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
    <script>
        $('.product-pointer').click(function () {
            this.submit();
        })
    </script>
</body>
</html>