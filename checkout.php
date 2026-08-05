<!DOCTYPE html>
<html lang="zxx">

<!-- Mirrored from html.webtend.net/oxence/checkout.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 28 Jul 2026 16:29:38 GMT -->
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="description" content="" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title>Oxence - Web Design Company HTML Template || Checkout</title>
    <!-- Favicon Icon -->
    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Kumbh+Sans:wght@700&amp;family=Merriweather:wght@700&amp;family=Roboto:wght@400;500;700&amp;display=swap" rel="stylesheet">
    
    <!-- Flaticon -->
    <link rel="stylesheet" href="assets/css/flaticon.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="assets/css/fontawesome-5.14.0.min.css">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="assets/css/magnific-popup.min.css">
    <!-- Nice Select -->
    <link rel="stylesheet" href="assets/css/nice-select.min.css">
    <!-- Type Writer -->
    <link rel="stylesheet" href="assets/css/jquery.animatedheadline.css">
    <!-- Animate -->
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <!-- Slick -->
    <link rel="stylesheet" href="assets/css/slick.min.css">
    <!-- Main Style -->
    <link rel="stylesheet" href="assets/css/style.css">
    
</head>
<body class="home-one">
    <div class="page-wrapper">

        <!-- Preloader -->
        <div class="preloader"></div>

                        <!-- main header -->
                             <?php include('include/header.php'); ?>

        
        <!-- Page Banner Start -->
        <section class="page-banner-area pt-245 rpt-150 pb-170 rpb-100 rel z-1 bgc-lighter text-center">
            <div class="container">
                <div class="banner-inner rpt-10">
                    <h1 class="page-title wow fadeInUp delay-0-2s">Chec<span>kout</span></h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center wow fadeInUp delay-0-4s">
                            <li class="breadcrumb-item"><a href="index.html">home</a></li>
                            <li class="breadcrumb-item active">Checkout</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="banner-shapes">
                <div class="circle wow zoomInLeft delay-0-2s" data-wow-duration="2s"></div>
                <img class="shape-one" src="assets/images/shapes/hero-shape1.png" alt="Shape">
                <img class="shape-two" src="assets/images/shapes/hero-shape2.png" alt="Shape">
            </div>
        </section>
        <!-- Page Banner End -->
        
        
        <!-- Checkout Form Area Start -->
        <div class="checkout-form-area py-130">
            <div class="container">
               <div class="checkout-faqs" id="checkout-faqs">
                    <div class="alert bgc-lighter wow fadeInUp delay-0-2s">
                        <h6>Returning customer? <a href="#" class="collapsed card-header" data-bs-toggle="collapse" data-bs-target="#collapse0" aria-expanded="false" aria-controls="collapse0">Click here to login</a></h6>
                        <div id="collapse0" class="collapse content">
                            <form action="#">
                                <p>Please login your accont.</p>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="email" id="email-address" name="email-address" class="form-control" value="" placeholder="Your Email Address" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="password" id="password" name="password" class="form-control" value="" placeholder="Your Password" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-footer">
                                    <button type="submit" class="theme-btn style-two">login <i class="fas fa-angle-double-right"></i></button>
                                    <input type="checkbox" name="loss-passowrd" id="loss-passowrd" required>
                                    <label for="loss-passowrd">Remember me</label>
                                </div>
                                <a href="#">Lost your password?</a>
                            </form>
                        </div>
                    </div>
                    <div class="alert bgc-lighter wow fadeInUp delay-0-3s">
                        <h6>Have a coupon? <a href="#" class="collapsed card-header" data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">Click here to enter your code</a></h6>
                        <div id="collapse3" class="collapse content">
                            <form action="#">
                                <p>If you have a coupon code, please apply it below.</p>
                                <div class="form-group">
                                    <input type="text" id="coupon-code" name="coupon-code" class="form-control" value="" placeholder="Coupon Code" required>
                                </div>
                                <button type="submit" class="theme-btn style-two">apply coupon <i class="fas fa-angle-double-right"></i></button>
                            </form>
                        </div>
                    </div>
                    <div class="alert bgc-lighter wow fadeInUp delay-0-4s">
                        <h6>Billing Address <a href="#" class="card-header" data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="true" aria-controls="collapse4"> Enter here</a></h6>
                        <div id="collapse4" class="collapse content show">
                            <form id="checkout-form" class="checkout-form" name="checkout-form" action="#" method="post">
                                <div class="row">
                                    <div class="col-lg-12 pt-15">
                                        <h5>Personal Information</h5>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" id="first-name" name="first-name" class="form-control" value="" placeholder="First Name" required="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" id="last-name" name="last-name" class="form-control" value="" placeholder="Last Name" required="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" id="number" name="number" class="form-control" value="" placeholder="Phone Number" required="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="email" id="email" name="email" class="form-control" value="" placeholder="Email Address" required="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" id="company-name" name="company-name" class="form-control" value="" placeholder="Company name (optional)">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" id="company-address" name="company-address" class="form-control" value="" placeholder="Company Address (optional)">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <h5>Your Address</h5>
                                    </div>
                                    <div class="col-md-6 mb-30">
                                        <div class="form-group">
                                           <select name="country" id="country">
                                                <option value="value1">Select Country</option>
                                                <option value="value2">Australia</option>
                                                <option value="value3">Canada</option>
                                                <option value="value4">China</option>
                                                <option value="value5">Morocco</option>
                                                <option value="value6">Saudi Arabia</option>
                                                <option value="value7">United Kingdom (UK)</option>
                                                <option value="value8">United States (US)</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" id="city" name="city" class="form-control" value="" placeholder="City" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" id="state" name="state" class="form-control" value="" placeholder="State" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" id="zip" name="zip" class="form-control" value="" placeholder="Zip" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" id="street-name" name="street-name" class="form-control" value="" placeholder="House, street name" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" id="apartment-name" name="apartment-name" class="form-control" value="" placeholder="Apartment, suite, unit etc. (optional)">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <h5>Order Notes (optional)</h5>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group mb-0">
                                            <textarea name="order-note" id="order-note" class="form-control" rows="5" placeholder="Notes about your order, e.g. special notes for delivery."></textarea>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="alert bgc-lighter wow fadeInUp delay-0-2s">
                        <h6>Select Your <a href="#" class="collapsed card-header" data-bs-toggle="collapse" data-bs-target="#collapse5" aria-expanded="false" aria-controls="collapse5"> Payment Method</a></h6>
                        <div id="collapse5" class="collapse content">
                            <div class="payment-cart-total pt-25">
                                <div class="row justify-content-between">
                                    <div class="col-lg-6">
                                        <div class="payment-method rmb-30">
                                            <h5 class="mb-20">Payment Method</h5>
                                            <ul id="paymentMethod" class="mb-30">
                                                <!-- Default unchecked -->
                                                <li class="custom-control custom-radio">
                                                    <input type="radio" class="custom-control-input" id="methodone" name="defaultExampleRadios" checked>
                                                    <label class="custom-control-label" for="methodone" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-controls="collapseOne">Direct Bank Transfer <i class="fas fa-money-check"></i></label>

                                                    <div id="collapseOne" class="collapse show" data-bs-parent="#paymentMethod" style="">
                                                        <p>Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order will not be shipped our account.</p>
                                                    </div>
                                                </li>

                                                <!-- Default unchecked -->
                                                <li class="custom-control custom-radio">
                                                    <input type="radio" class="custom-control-input" id="methodtwo" name="defaultExampleRadios">
                                                    <label class="custom-control-label collapsed" for="methodtwo" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-controls="collapseTwo">Cash On Delivery <i class="fas fa-truck"></i></label>

                                                    <div id="collapseTwo" class="collapse" data-bs-parent="#paymentMethod" style="">
                                                        <p>Pay with cash upon delivery.</p>
                                                    </div>
                                                </li>

                                                <!-- Default unchecked -->
                                                <li class="custom-control custom-radio">
                                                    <input type="radio" class="custom-control-input" id="methodthree" name="defaultExampleRadios">
                                                    <label class="custom-control-label collapsed" for="methodthree" data-bs-toggle="collapse" data-bs-target="#collapsethree" aria-controls="collapsethree">Paypal <i class="fab fa-cc-paypal"></i></label>

                                                    <div id="collapsethree" class="collapse" data-bs-parent="#paymentMethod" style="">
                                                        <p>Pay via PayPal; you can pay with your credit card if you don’t have a PayPal account.</p>
                                                    </div>

                                                </li>
                                            </ul>
                                            <p>Your personal data will be used to process your order, support your experience throughout this website, and for other purposes described in our privacy policy.</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-5">
                                        <div class="shoping-cart-total text-left mb-20">
                                            <h5 class="text-center mb-20">Cart Totals</h5>
                                            <table>
                                                <tbody>
                                                    <tr>
                                                        <td>Fitness UI Kits <strong>× 1</strong></td>
                                                        <td>$70.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Dashboard UI <strong>× 2</strong></td>
                                                        <td>$130.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Shipping Fee</td>
                                                        <td>$10.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Vat</td>
                                                        <td>$5.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>Order Total</strong></td>
                                                        <td><strong>$225.00</strong></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="button" class="theme-btn w-100">Place order <i class="fas fa-angle-double-right"></i></button>
                </div>
            </div>
        </div>
        <!-- Checkout Form Area End -->

        
        <!-- Call to Action Area start -->
        <section class="call-to-action-area bgc-black pt-80 pb-50">
            <div class="container">
                <div class="row justify-content-between align-items-center">
                    <div class="col-xl-7 col-lg-9">
                        <div class="section-title text-white mb-25 wow fadeInUp delay-0-2s">
                            <h2>Let’s Design Your New Website</h2>
                            <p>Do you want to have a website that stands out and impresses your clients? Then we are ready to help! Click the button below to contact us and discuss your ideas.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 text-lg-end">
                        <a href="contact.html" class="theme-btn style-two mb-30 wow fadeInUp delay-0-4s">Let’s Get Started <i class="fas fa-angle-double-right"></i></a>
                    </div>
                </div>
            </div>
        </section>
        <!-- Call to Action Area End -->
        
        
                <!-- footer area start -->
                        <?php include('include/footer.php'); ?>

        <!-- footer area end -->

    </div>
    <!--End pagewrapper-->
   
    
    <!-- Jquery -->
    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <!-- Bootstrap -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Appear Js -->
    <script src="assets/js/appear.min.js"></script>
    <!-- Slick -->
    <script src="assets/js/slick.min.js"></script>
    <!-- Magnific Popup -->
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <!-- Nice Select -->
    <script src="assets/js/jquery.nice-select.min.js"></script>
    <!-- Image Loader -->
    <script src="assets/js/imagesloaded.pkgd.min.js"></script>
    <!-- Type Writer -->
    <script src="assets/js/jquery.animatedheadline.min.js"></script>
    <!-- Circle Progress -->
    <script src="assets/js/circle-progress.min.js"></script>
    <!-- Isotope -->
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <!--  WOW Animation -->
    <script src="assets/js/wow.min.js"></script>
    <!-- Custom script -->
    <script src="assets/js/script.js"></script>

<script type="module" src="https://static.cloudflareinsights.com/beacon.min.js/v4513226cdae34746b4dedf0b4dfa099e1781791509496" integrity="sha512-ZE9pZaUXND66v380QUtch/5sE9tPFh2zg45pR2PB0CVkCtOREv2AJKkSidISWkysEuQ0EH8faUU5du78bx87UQ==" data-cf-beacon='{"version":"2024.11.0","token":"df305e9ac2e249899636eeac9e14a642","r":1}' crossorigin="anonymous"></script>
</body>

<!-- Mirrored from html.webtend.net/oxence/checkout.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 28 Jul 2026 16:29:38 GMT -->
</html>