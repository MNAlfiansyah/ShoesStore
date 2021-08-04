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
<body>
    <div class="header">
        <div><span class="head-title"><a href='./index.php' class="head-title"><img src="./assets/image/shoes-logo.png"/>Shoes Store</a></span></div>
        <div><span class="buy-now"><a href='./product.php' class="head-title">Shop Now</a><span></div>
        <div><span><a href='./aboutUs.php' class="head-title">About Us</a><span></div>
    </div>
    <div class="content">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="https://dealswayshop.co.in/wp-content/uploads/2018/08/banner-114.jpg" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="http://deerbrains.com/wp-content/uploads/2016/03/Tablet_homepage_banner_2048x783-1024x391.jpg" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="https://www.sneaker4shoes.com/media/wysiwyg/infortis/slideshow/adidas-banner-1.jpg" alt="Third slide">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <!-- <div class="img-utama1">
        </div> -->
        <div class="img-couple">
            <div><img src="https://images.pexels.com/photos/2529157/pexels-photo-2529157.jpeg?auto=compress&cs=tinysrgb&dpr=3&h=750&w=1260"></div>
            <div><p>Style Your Life</p></div>
            <div><img src="https://images.pexels.com/photos/4277507/pexels-photo-4277507.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260"></div>
        </div>
        <div class="row img-vendor-logo pt-5">
            <div class="col-4">
                <img src="./assets/image/vans.png" alt="Vans" class="w-100">
            </div>
            <div class="col-4">
                <img src="./assets/image/nike.png" alt="Nike" class="w-100">
            </div>
            <div class="col-4 ">
                <img src="./assets/image/adidas.png" alt="Adidas" class="w-100">
            </div>
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
      

        var myCarousel = document.querySelector('#carouselExampleSlidesOnly')
        var carousel = new bootstrap.Carousel(myCarousel)
    </script>
</body>
</html>