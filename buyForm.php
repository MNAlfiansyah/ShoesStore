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
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="icon" type="image/png" href="./assets/image/shoes-logo.png"/>

</head>
<?php
    $base_url = "http://" . $_SERVER['SERVER_NAME'] ."/ShoesStore/";

    $name = $_POST['name'];
    $size = $_POST['size'];
    $harga = $_POST['harga'];
    $warna = $_POST['warna'];
    $img_url = $_POST['img_url'];
    $qty = $_POST['qty'];

?>
<body>
    <div class="header">
        <div><span class="head-title"><a href='./index.php' class="head-title"><img src="./assets/image/shoes-logo.png"/>Shoes Store</a></span></div>
        <div><span class="buy-now"><a href='./product.php' class="head-title">Shop Now</a><span></div>
        <div><span><a href='./aboutUs.php' class="head-title">About Us</a><span></div>
    </div>
    <div class="content">
        <div class="text-center title-content"></div>
        <form action=<?= "'./invoice.php'"; ?> method="post">  
            <div class="row">
                <div class="col-7" style="border-right-style: groove;">
                    <p class="shipping-title">Shipping address</p>
                    <div class="shipping-form row">
                        <div class="col-6 pb-2"><input type="text" name="first_name" class="form-control " placeholder="First Name" required></div>
                        <div class="col-6 pb-2"><input type="text" name="last_name" class="form-control " placeholder="Last Name" required></div>
                        <div class="col-12 pb-2"> <textarea cols="30" name="address" class="form-control " rows="3" placeholder="Address" required></textarea></div>
                        <div class="col-12 pb-2"><input type="text" name="city" class="form-control" placeholder="City" required></div>
                        <div class="col-6 pb-2"><input type="text" name="province" class="form-control" placeholder="Province" required></div>
                        <div class="col-6 pb-2"><input type="text" name="postal_code" class="form-control" placeholder="Postal Code" required></div>
                        <div class="col-12 pb-2"><input type="text" name="country" class="form-control" value="Indonesia" readonly placeholder="Country/region"><p class="text-danger m-0">*Right now only available in Indonesia</p></div>
                        <div class="col-12 pb-5"><input type="number" name="phone" pattern=”^\d{3}-\d{3}-\d{4}$” class="form-control" placeholder="Phone Number" required></div>
                        <div class="col-12 pt-5"><input type="submit" class="btn btn-primary btn-lg" value="Continue to shipping" required></div>
                    </div>
                </div>
                <div class="col-5 pt-3">
                    <div class="shipping-product d-flex">
                        <div class="product-img"><img src="<?= $img_url ?>" class="w-100"></div>
                        <div class="product-name"><span><?= str_replace('_',' ',$name) ?></span><br/><span>Size <?= $size ?></span> </div>
                        <div class="product-qty"><?= $qty ?></div>
                        <div class="product-harga">Rp. <?= number_format($harga,2,',','.') ?></div>
                    </div>
                    <div class="payment-method">
                        <p class="payment-title">Payment Method</p>
                        <select id="bank" class="select2-option w-100" name="bank" required>
                            <option value=""> - Select Payment Method - </option>
                            <option value="mandiri">Bank Mandiri</option>
                            <option value="bri">Bank BRI</option>
                            <option value="bni">Bank BNI</option>
                            <option value="bca">Bank BCA</option>
                        </select>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <input type="text" class="form-control form-bank" name="bank_holder" placeholder="Bank Account Holder" style="display: none;" required>
                        </div>
                        <div class="col-sm-6">
                            <input type="text" class="form-control form-bank" name="bank_number" placeholder="Bank Account Number" style="display: none;" required> 
                        </div>
                    </div>
                    <div class="d-flex justify-content-between subtotal">
                        <div>Subtotal</div>
                        <div>Rp. <?= number_format(($harga*$qty),2,',','.') ?></div>
                    </div>
                </div>
            </div>
            <input type="hidden" name="name" value="<?= $name ?>">
            <input type="hidden" name="qty" value="<?= $qty ?>">
            <input type="hidden" name="size" value="<?= $size ?>">
            <input type="hidden" name="harga" value="<?= $harga ?>">
            <input type="hidden" name="warna" value="<?= $warna ?>">
            <input type="hidden" name="img_url" value="<?= $img_url ?>">
        </form>
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
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" integrity="sha512-RXf+QSDCUQs5uwRKaDoXt55jygZZm2V++WUZduaU/Ui/9EGp3f/2KZVahFZBKGH0s774sd3HmrhUy+SgOFQLVQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>
        function formatState (state) {
            if (!state.id) {
                return state.text;
            }
            var baseUrl = "./assets/image/bank/";
            var $state = $(
                '<span><img src="' + baseUrl + state.element.value.toLowerCase() + '.png" class="img-flag" /> ' + state.text + '</span>'
            );
            return $state;
        };

        $('.select2-option').select2({
            templateResult: formatState
        });

        $('#bank').change(function() {
            if (this.value) {
                $('.form-bank').show();
            } else {
                $('.form-bank').hide();
            }
        });
    </script>
</body>
</html>