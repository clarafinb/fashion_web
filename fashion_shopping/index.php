<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fashion Website</title>
    <link rel="stylesheet" href="css/bootstrap.scss.css">
    <link rel="stylesheet" href="css/base.scss.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>

<body>
    <header>
        <div class="container">
            <div class="row">
                <div class="col-sm-1 col-md-1 col-1">
                    <a href="index.php"><img src="images/logo.png" alt="logo"></a>
                </div>
                <div class="col-sm-6 col-md-6">
                    <div class="free-shipping">
                        <a href="index.html"><img src="images/box.png" alt=""> Free 2-Days Shipping $35+</a>
                    </div>
                    <ul class="nav">
                        <li class="nav-item active"><a href="women.html">WOMEN</a></li>
                        <li class="nav-item"><a href="men.html">MEN</a></li>
                        <li class="nav-item"><a href="kid.html">KIDS</a></li>
                        <li class="nav-item"><a href="sale.html">SALE</a></li>
                        <li class="nav-item"><a href="limited.html" class="light">LIMITED - TIME OFFER</a></li>
                    </ul>
                </div>
                <div class="col-sm-5 col-md-5">
                    <ul class="nav">
                        <li class="nav-item"><a href="loginRegister.html">LOGIN / REGISTER</a></li>
                    </ul>
                    <div class="search-container">
                        <form class="search-form" action="/search.html">
                            <input type="text" class="search-box" placeholder="Search ...">
                            <button class="btn icon-search"><i class="fa fa-search"></i></button>
                        </form>
                        <a href="fav.html" class="favorite">
                            <img src="images/fav.png">
                        </a>
                        <a href="cart.html">
                            <i class="fa fa-cart-arrow-down"></i>
                            <div class="cart-right"><span class="count_item_pr">0</span></div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <br />
    <div class="container">
        <div class="row imagesGroup">
            <div class="imageContainer fade1" id="0">
                <div class="col-sm-7 col-md-7">
                    <a href="women.html"><img src="images/Female11.jpg"></a>
                </div>
                <div class="col-sm-5 col-md-5">
                    <div class="new-arrival">
                        <span>NEW ARRIVAL</span>
                    </div>
                    <p class="new-arrival-font">Shop the new BZ Collection now at online and select stores</p>
                    <p class="new-arrival-sub">NOW AVAILABLE IN STORES</p>
                    <a href="women.html"><button type="submit" class="btn btn btn-default btn-new-arrival">WOMEN</button></a>
                    <p class="new-arrival-sub" style="width: 190px">BZ MODERN 1 SHIRT $ 19.99</p>
                    <p class="new-arrival-sub" style="width: 250px">BZ MODERN 1 SLACK PANTS $ 29.99</p>
                </div>
            </div>
            <div class="imageContainer fade1" id="1">
                <div class="col-sm-12 col-md-12">
                    <div class="slider-men">
                        <div class="slider-man-content">
                            <div class="new-arrival">
                                <span>NEW ARRIVAL</span>
                            </div>
                            <p class="new-arrival-font">BECHAM COLLECTION</p>
                            <p class="new-arrival-man">NOW AVAILABLE IN ONLINE AND IN STORES</p>
                        </div>
                        <div class="slider-man-sub-content">
                            <a href="men.html"><button type="submit" class="btn btn btn-default btn-new-arrival">MAN</button></a>
                            <p class="new-arrival-sub" style="width: 190px">BECHAM BZ100 SHIRT $ 19.99</p>
                            <p class="new-arrival-sub" style="width: 220px">BECHAM BZ001 SHORTS $ 10.00</p>
                        </div>
                    </div>
                    
                </div>
            </div>
           <div class="imageContainer fade1" id="2">
                <div class="col-sm-12 col-md-12">
                    
                        <div class="slider-woman">
                            <div class="slider-woman-content">
                                <div class="limited-time">
                                    <a href="limited.html"><span>LIMITED TIME</span></a>
                                </div>
                                <p class="new-arrival-font">EARLY FALL SALE!</p>
                                <p class="new-arrival-man">NOW AVAILABLE IN ONLINE AND IN STORES</p>
                            </div>
                            <div class="slider-woman-sub-content">
                                <p class="woman-sub">BRIGHTEN YOUR DAY!</p>
                                <p class="woman-sub">WITH</p>
                                <p class="woman-sub">40% OFF</p>
                                <p class="woman-sub">select styles | sale $11.99 - $ 44.99 | reg. $20 - $75 </p>
                            </div>
                        </div>
                    
                </div>
            </div>
            <div class="imageContainer fade1" id="3">
                <div class="col-sm-6 col-md-6" style="padding-top: 150px; padding-left: 50px;">
                    <div class="limited-time" style="text-align: center; padding-bottom: 10px;">
                        <span>LIMITED TIME</span>
                    </div>
                    <p class="sport-sub">ADVENTURE AWAITS!</p>
                    <p class="sport-sub">40% OFF OUTDOORS</p>
                    <p class="sport-sub">SHOP</p>
                    <p class="woman-sub">select style | sale $4.99 - $ 24.99 | reg. $20-$100</p>
                    <div class="btn-sport">
                        <a href="limited.html"><button type="submit" class="btn btn btn-default btn-new-arrival">SHOP NOW</button></a>
                    </div>
                    
                </div>
                <div class="col-sm-6 col-md-6">
                    <a href="limited.html"><img src="images/Model22.jpg"></a>
                </div> 
            </div>
            <a class="prev" href="javascript:void(0)" onclick="plusSlides(-1)">&#10094;</a>
            <a class="last" href="javascript:void(0)" onclick="plusSlides(1)">&#10095;</a>
        </div>
        <div class="dots">
            <a class="dot" id="openDefault" href="javascript:void(0)" onclick="currentSlide(0)"></a>
            <a class="dot" href="javascript:void(0)" onclick="currentSlide(1)"></a>
            <a class="dot" href="javascript:void(0)" onclick="currentSlide(2)"></a>
            <a class="dot" href="javascript:void(0)" onclick="currentSlide(3)"></a>
        </div>
        <script>
            setInterval(function(){
                plusSlides(1) // this will run after every 5 seconds
            }, 8000);

            var current;

            function currentSlide(slide) {
                var containers = document.getElementsByClassName("imageContainer");
                var dots = document.getElementsByClassName("dot");
                if (slide > containers.length - 1) {
                    slide = slide - (containers.length);
                }

                if (slide < 0) {
                    slide = 3;
                }

                for (var i = 0; i < containers.length; i++) {
                    containers[i].style.display = "none";
                }

                for (var i = 0; i < dots.length; i++) {
                    dots[i].classList.remove("active");
                    if (i === slide) {
                        dots[i].classList.add("active");
                    }
                }
                document.getElementById(slide).style.display = "block";
                current = slide;
            }
            document.getElementById("openDefault").click();

            function plusSlides(slide) {
                currentSlide(current + slide);
            }
        </script>
    </div>
    <br />
    <div class="container trending">
        <h3>NEW TRENDING</h3>
        <div class="row" style="padding: 0 10px;">
            <div class="col-sm-3 col-md-3">
                <a href="sale.html"><img src="images/NT1.png" alt=""></a>
            </div>
            <div class="col-sm-3 col-md-3">
                <a href="sale.html"><img src="images/NT2.png" alt=""></a>
            </div>
            <div class="col-sm-3 col-md-3">
                <a href="sale.html"><img src="images/NT3.png" alt=""></a>
            </div>
            <div class="col-sm-3 col-md-3">
                <a href="sale.html"><img src="images/NT4.png" alt=""></a>
            </div>
        </div>
    </div>
    <br />
    <div class="container">
        <h3>NEW OFFER!</h3>
        <div class="row text-center newOfferGroup">
            <div class="newOfferContainer fade1" id="10">
                <div class="col-sm-7 col-md-7">
                    <a href="limited.html"><img src="images/Model1.jpg"></a>
                </div>
                <div class="col-sm-5 col-md-5" style="padding-top: 50px; padding-right: 60px;">
                    <div class="limited-time">
                        <span>LIMITED TIME</span>
                    </div>
                    <p class="new-offer-header">GIRLS NEW STYLE CLOTHES</p>
                    <p class="new-offer-content">select styles | $20 - $75</p>
                    <a href="limited.html"><button type="submit" class="btn btn-default btn-font">SHOP NOW</button></a>

                </div>
            </div>
            <div class="newOfferContainer fade1" id="11">
                <div class="col-sm-6 col-md-6">
                    <a href="limited.html"><img src="images/Kids5.jpg"></a>
                </div>
                <div class="col-sm-6 col-md-6" style="padding-top: 50px; padding-right: 60px;">
                    <div class="limited-time">
                        <span>LIMITED TIME</span>
                    </div>
                    <p class="new-offer-header">KIDS WORLD!</p>
                    <p class="new-offer-header">75% OFF!</p>
                    <p class="new-offer-content">select style sale $4.99 - $ 24.99 reg. $20-$100</p>
                    <a href="limited.html"><button type="submit" class="btn btn btn-default btn-font">SHOP NOW</button></a>
                </div>
            </div>
            <div class="newOfferContainer fade1" id="12">
                <div class="col-sm-6 col-md-6">
                    <a href="limited.html"><img src="images/fall4.jpg"></a>
                </div>
                <div class="col-sm-6 col-md-6" style="padding-top: 50px; padding-right: 60px;">
                    <div class="limited-time">
                        <span>LIMITED TIME</span>
                    </div>
                    <p class="new-offer-header">CLEARANCE FALL 2018 MODEL</p>
                    <p class="new-offer-header">75% OFF!</p>
                    <a href="limited.html"><button type="submit" class="btn btn btn-default btn-font">SHOP NOW</button></a>
                </div>
            </div>
            <a class="prevOffer" href="javascript:void(0)" onclick="plusSlidesOffer(-1)">&#10094;</a>
            <a class="lastOffer" href="javascript:void(0)" onclick="plusSlidesOffer(1)">&#10095;</a>
        </div>
        <div class="dotsOffer">
            <a class="dotOffer" id="openDefaultOffer" href="javascript:void(0)" onclick="currentSlideOffer(10)"></a>
            <a class="dotOffer" href="javascript:void(0)" onclick="currentSlideOffer(11)"></a>
            <a class="dotOffer" href="javascript:void(0)" onclick="currentSlideOffer(12)"></a>
        </div>
        <script>

            setInterval(function(){
                plusSlidesOffer(1) // this will run after every 5 seconds
            }, 8000);

            var current;

            function currentSlideOffer(slideNewOffer) {
                var containersNewOffer = document.getElementsByClassName("newOfferContainer");
                var dotsNewOffer = document.getElementsByClassName("dotOffer");


                if (slideNewOffer > 12) {
                    slideNewOffer = 10;
                }

                if (slideNewOffer < 10) {
                    slideNewOffer = 12;
                }

                for (var i = 0; i < containersNewOffer.length; i++) {
                    containersNewOffer[i].style.display = "none";
                }

                for (var i = 0; i < dotsNewOffer.length; i++) {
                    dotsNewOffer[i].classList.remove("active");
                    if (i === slideNewOffer) {
                        dotsNewOffer[i].classList.add("active");
                    }
                }

                document.getElementById(slideNewOffer).style.display = "block";
                currentNewOffer = slideNewOffer;
            }
            document.getElementById("openDefaultOffer").click();

            function plusSlidesOffer(slideNewOffer) {
                currentSlideOffer(currentNewOffer + slideNewOffer);
            }
        </script>

    </div>
    <br />

    <div class="container">
        <h3 style="text-align: left;">CATEGORIES</h3>
        <div class="row" style="padding: 0 50px;">
            <a onclick="change_section('women')"><div class="col-sm-4 col-md-4 sub-categories">WOMEN</div></a>
            <a onclick="change_section('men')"><div class="col-sm-4 col-md-4 sub-categories">MEN</div></a>
            <a onclick="change_section('kids')"><div class="col-sm-4 col-md-4 sub-categories">KIDS</div></a>
        </div>
        <div id="change_section">
            <div class="row" style="padding: 10px 55px;">
                <div class="col-sm-4 col-md-4">
                    <div class="outware">
                        OUTWARE
                    </div>
                </div>
                <div class="col-sm-4 col-md-4">
                    <div class="top">
                        TOP
                    </div>
                </div>
                 <div class="col-sm-4 col-md-4">
                    <div class="jumpsuits">
                        JUMPSUITS
                    </div>
                </div>
            </div>
            <div class="row" style="padding: 10px 55px;">
               <div class="col-sm-4 col-md-4">
                    <div class="jeans">
                        JEANS
                    </div>
                </div>
                 <div class="col-sm-4 col-md-4">
                    <div class="bottoms">
                        BOTTOMS
                    </div>
                </div>
                <div class="col-sm-4 col-md-4">
                    <div class="dresses">
                        DRESSES
                    </div>
                </div>
            </div>
        </div>
    </div>


    <footer>
        <div class="container">
            <div class="row padding-footer">
                <div class="col-sm-5 col-md-5">
                    <h5>Our Company</h5>
                    <p><span>ADDRESS: </span> 8316, 83 Ave Sw, Lakewood, WA 98498</p>
                    <p><span>HOTLINE: </span> +1 253 433 2481</p>
                    <p><span>EMAIL: </span> Costumer@BZ.com</p>
                    <br />
                    <h5>Our Partner</h5>
                    <ul class="partners">
                        <li class="partner"><a href=""><img src="images/HM.png" alt=""></a></li>
                        <li class="partner"><a href=""><img src="images/levis.png" alt=""></a></li>
                    </ul>
                </div>
                <div class="col-sm-3 col-md-3">
                    <h5>Service & Return</h5>
                    <p>Order Status</p>
                    <p>Shipping, Delivery & Store Pickup</p>
                    <p>Price Match Guarantee</p>
                    <p>Customer Service</p>
                </div>
                <div class="col-sm-4 col-md-4">
                    <h5>Follow Us</h5>
                    <ul class="media">
                        <li class="media-item"><a href=""><img src="images/facebook.png" alt=""></a></li>
                        <li class="media-item"><a href=""><img src="images/youtube.png" alt=""></a></li>
                        <li class="media-item"><a href=""><img src="images/Pinterest_youtube.png" alt=""></a></li>
                        <li class="media-item"><a href=""><img src="images/Rectangle.png" alt=""></a></li>
                        <li class="media-item"><a href=""><img src="images/Pinterest.png" alt=""></a></li>
                        
                    </ul>
                    <h5>Sign Up to Newsletter</h5>
                    <form class="subscribe-form">
                        <input type="text" class="subscribe-text" placeholder="Enter Your Email">
                        <button class="btn btn-danger rounded-0">Subscribe</button>
                    </form>
                </div>
            </div>
        </div>
    </footer>
</body>

<script type="text/javascript">
   
    function change_section(param){
        $.ajax({
            url : "change_section.php",
            type: "POST",
            data:{"id":param},
            success: function(data)
            {
               $('#change_section').html(data);
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
              alert('Error get data from ajax');
            }
        });
    }
</script>

</html>