<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> 
<html class="no-js"> <!--<![endif]-->
<head>
    <title>me'nu</title>

    <!-- meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
    <!-- css -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap-theme.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/main.css')}}">
    <!-- google font -->
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Kreon:300,400,700'>
    <!-- js -->
    <script src="{{ asset('js/vendor/modernizr-2.6.2-respond-1.1.0.min.js')}}"></script>

     <style>
      .badge-notify{
        background:red;
        position:relative;
        top: -20px;
        right: 10px;
      }
      .my-cart-icon-affix {
        position: fixed;
        z-index: 999;
      }
    </style>
</head>
<body data-spy="scroll" data-target="#navbar" data-offset="120" >
    <div id="menu" class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header visible-xs">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"><h2>Meat King</h2></a>
            </div><!-- navbar-header -->
        <div id="navbar" class="navbar-collapse collapse">
            <div class="hidden-xs" id="logo"><a href="#header">
                <img src="img/logo.png" alt="">
            </a></div>

            <ul class="nav navbar-nav navbar-right">
                <li><a href="#story">Story</a></li>
                <li><a href="#reservation">Reservation</a></li>
                <li><a href="#chefs">Our Chefs</a></li>

                
                <li><a href="#facts">Facts</a></li>
                <li><a href="#food-menu">Food Menu</a></li>
                <li><a href="#special-offser">Special Offers</a></li>
                
                <!--fix for scroll spy active menu element-->
                <li style="display:none;"><a href="#header"></a></li>

            </ul>
        </div><!--/.navbar-collapse -->
        </div><!-- container -->
    </div><!-- menu -->

    <div id="header">
        <div class="bg-overlay"></div>
        <div class="center text-center">
            <div class="banner">
                <h1 class="">me'nu</h1>
            </div>
            <div class="subtitle"><h4>Food & Friends</h4></div>
        </div>
        <div class="bottom text-center">
            <a id="scrollDownArrow" href="#"><i class="fa fa-chevron-down"></i></a>
        </div>
    </div>
    <!-- /#header -->

    <div id="story" class="light-wrapper">
        <section class="ss-style-top"></section>
        <div class="container inner">
            <h2 class="section-title text-center">Our Story</h2>
            <p class="lead main text-center">We're cooking delecious foods since 1879</p>
            <div class="row text-center story">
                <div class="col-sm-4">
                    <div class="col-wrapper">
                        <div class="icon-wrapper"> <i class="fa fa-anchor"></i> </div>
                        <h3>EST. 1879</h3>
                        <p>Vivamus sagittis lacuson augue laoreet rutrum faucibus dolor auctor. Cras mattis consectetur purus sit amet fermentum ultricies vehicula.</p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="col-wrapper">
                        <div class="icon-wrapper"> <i class="fa  fa-cutlery"></i> </div>
                        <h3>Cooking Traditions</h3>
                        <p>Nullam id dolor id nibh ultricies vehicula ut id elit. Cum sociis natoque penatibus et magnis dis parturient monte nascetur ultricies vehicula. </p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="col-wrapper">
                        <div class="icon-wrapper"> <i class="fa fa-coffee"></i> </div>
                        <h3>Food Quality</h3>
                        <p>Curabitur blandit matti tempus porttitor. Donec id elit non mi porta ut gravida at eget metus. Consectetur adipiscing elit ultricies vehicula.</p>
                    </div>
                </div>
            </div>
            <!-- /.services --> 
        </div>
        <!-- /.container -->
        <section class="ss-style-bottom"></section>
    </div><!-- #story -->


    <div id="facts" class="parallax parallax2 facts">
        <div class="container inner">
            <div class="row text-center services-3">
                <div class="col-sm-3">
                    <div class="col-wrapper">
                    <div class="icon-border bm10"> <i class="fa fa-beer"></i> </div>
                    <h4>79518</h4>
                    <p>Mug of Drinks Sold</p>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="col-wrapper">
                    <div class="icon-border bm10"> <i class="fa fa-play-circle-o"></i> </div>
                    <h4>390472</h4>
                    <p>People Visited </p>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="col-wrapper">
                    <div class="icon-border bm10"> <i class="fa fa-truck"></i> </div>
                    <h4>28764</h4>
                    <p>Pizza Deleverd</p>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="col-wrapper">
                    <div class="icon-border bm10"> <i class="fa fa-users"></i> </div>
                    <h4>4523</h4>
                    <p>Customers Worldwide</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.container --> 
    </div><!-- #facts -->
    <div id="food-menu" class="light-wrapper">
        <section class="ss-style-top"></section>
        <div class="container inner">
            <h2 class="section-title text-center">Food Menu</h2>
            <p class="lead main text-center">There is no sincerer love than the love of food!</p>
            
            
               <!--Start add to cart-->
            
            
          <div class="page-header">
            <h1 style="text-align: center">Hot Coffee
              <div style="float: right; cursor: pointer;">
                <span class="glyphicon glyphicon-shopping-cart my-cart-icon"><span class="badge badge-notify my-cart-badge"></span></span>
              </div>
            </h1>
          </div>
          <div class="row">
            <div class="col-md-3 text-center">
              <img src="img/img_1.png" width="150px" height="150px">
              <br>
               Espresso - <strong>$10</strong>
              <br>
              <button class="btn btn-danger my-cart-btn" data-id="1" data-name="Espresso" data-summary="summary 1" data-price="10" data-quantity="1" data-image="img/img_1.png">Add to Cart</button>
              <a href="#" class="btn btn-info">Details</a>
            </div>

            <div class="col-md-3 text-center">
              <img src="img/hot_1.png" width="150px" height="150px">
              <br>
              Capuccino - <strong>$20</strong>
              <br>
              <button class="btn btn-danger my-cart-btn" data-id="2" data-name="Capuccino" data-summary="summary 2" data-price="20" data-quantity="1" data-image="img/hot_1.png">Add to Cart</button>
              <a href="#" class="btn btn-info">Details</a>
            </div>

            <div class="col-md-3 text-center">
              <img src="img/hot_5.png" width="150px" height="150px">
              <br>
              Fruit Tea - <strong>$30</strong>
              <br>
              <button class="btn btn-danger my-cart-btn" data-id="3" data-name="Fruit Tea" data-summary="summary 3" data-price="30" data-quantity="1" data-image="img/hot_5.png">Add to Cart</button>
              <a href="#" class="btn btn-info">Details</a>
            </div>

            <div class="col-md-3 text-center">
              <img src="img/hot_3.png" width="150px" height="150px">
              <br>
               Hot Chocolate - <strong>$40</strong>
              <br>
              <button class="btn btn-danger my-cart-btn" data-id="4" data-name="Hot Chocolate" data-summary="summary 4" data-price="40" data-quantity="1" data-image="img/hot_3.png">Add to Cart</button>
                <a href="#" class="btn btn-info">Details</a>
               <br>   
               <br>   
               <br>
            </div>
              
              
        <h1 style="color: brown; padding-top: 100px;  text-align: center">Ice Drinks</h1>
            <br>   
            <br> 
        
            <div class="col-md-3 text-center">
              <img src="img/ice_1.png" width="150px" height="150px">
              <br>
              Ice Coffee - <strong>$10</strong>
              <br>
              <button class="btn btn-danger my-cart-btn" data-id="5" data-name="Ice Coffee" data-summary="summary 5" data-price="10" data-quantity="1" data-image="img/ice_1.png">Add to Cart</button>
              <a href="#" class="btn btn-info">Details</a>
            </div>
            <div class="col-md-3 text-center">
              <img src="img/ice_2.png" width="150px" height="150px">
              <br>
              Choco Frappe - <strong>$20</strong>
              <br>
              <button class="btn btn-danger my-cart-btn" data-id="6" data-name="Choco Frappe" data-summary="summary 5" data-price="20" data-quantity="1" data-image="img/ice_2.png">Add to Cart</button>
              <a href="#" class="btn btn-info">Details</a>
            </div> 
            <div class="col-md-3 text-center">
              <img src="img/img_7.png" width="150px" height="150px">
              <br>
              Latte - <strong>$20</strong>
              <br>
              <button class="btn btn-danger my-cart-btn" data-id="7" data-name="Latte" data-summary="summary 5" data-price="20" data-quantity="1" data-image="img/img_7.png">Add to Cart</button>
              <a href="#" class="btn btn-info">Details</a>
            </div> 
            <div class="col-md-3 text-center">
              <img src="img/ice_3.png" width="150px" height="150px">
              <br>
              Espresso Frappe - <strong>$20</strong>
              <br>
              <button class="btn btn-danger my-cart-btn" data-id="8" data-name="Espresso Frappe" data-summary="summary 5" data-price="20" data-quantity="1" data-image="img/ice_3.png">Add to Cart</button>
              <a href="#" class="btn btn-info">Details</a>
                <br>
                <br>
                <br>
            </div>

              

            <h1 style="text-align: center">Smoothies </h1>
              <br>
              <br>
            <div class="col-md-3 text-center">
              <img src="img/smoothie_1.png" width="150px" height="150px">
              <br>
             Mango - <strong>$10</strong>
              <br>
              <button class="btn btn-danger my-cart-btn" data-id="9" data-name="Mango" data-summary="summary 5" data-price="10" data-quantity="1" data-image="img/smoothie_1.png">Add to Cart</button>
              <a href="#" class="btn btn-info">Details</a>
            </div>
            <div class="col-md-3 text-center">
              <img src="img/smoothie_2.png" width="150px" height="150px">
              <br>
              Strawberry - <strong>$20</strong>
              <br>
              <button class="btn btn-danger my-cart-btn" data-id="10" data-name="Strawberry" data-summary="summary 5" data-price="20" data-quantity="1" data-image="img/smoothie_2.png">Add to Cart</button>
              <a href="#" class="btn btn-info">Details</a>
            </div> 
            <div class="col-md-3 text-center">
              <img src="img/smoothie_3.png" width="150px" height="150px">
              <br>
              Pineapple - <strong>$20</strong>
              <br>
              <button class="btn btn-danger my-cart-btn" data-id="11" data-name="Pineapple" data-summary="summary 5" data-price="20" data-quantity="1" data-image="img/smoothie_3.png">Add to Cart</button>
              <a href="#" class="btn btn-info">Details</a>
            </div> 
            <div class="col-md-3 text-center">
              <img src="img/smoothie_4.png" width="150px" height="150px">
              <br>
             Greens - <strong>$20</strong>
              <br>
              <button class="btn btn-danger my-cart-btn" data-id="12" data-name="Greens" data-summary="summary 5" data-price="20" data-quantity="1" data-image="img/smoothie_4.png">Add to Cart</button>
              <a href="#" class="btn btn-info">Details</a>
                <br>
                <br>
                <br>
            </div>  
            
            <h1 style="color: brown; text-align: center">Deserts</h1>
             <br> 
             <br> 
        
            <div class="col-md-3 text-center">
              <img src="img/des_1.png" width="150px" height="150px">
              <br>
             Cheesecake - <strong>$30</strong>
              <br>
              <button class="btn btn-danger my-cart-btn" data-id="13" data-name="Cheesecake" data-summary="summary 5" data-price="30" data-quantity="1" data-image="img/des_1.png">Add to Cart</button>
              <a href="#" class="btn btn-info">Details</a>
            </div>
            <div class="col-md-3 text-center">
              <img src="img/des_2.gif" width="150px" height="150px">
              <br>
              Choco Pie - <strong>$20</strong>
              <br>
              <button class="btn btn-danger my-cart-btn" data-id="14" data-name="Choco Pie" data-summary="summary 5" data-price="20" data-quantity="1" data-image="img/des_2.gif">Add to Cart</button>
              <a href="#" class="btn btn-info">Details</a>
            </div> 
            <div class="col-md-3 text-center">
              <img src="img/des_3.png" width="150px" height="150px">
              <br>
              Pancakes - <strong>$20</strong>
              <br>
              <button class="btn btn-danger my-cart-btn" data-id="15" data-name="Pancakes" data-summary="summary 5" data-price="20" data-quantity="1" data-image="img/des_3.png">Add to Cart</button>
              <a href="#" class="btn btn-info">Details</a>
            </div> 
            <div class="col-md-3 text-center">
              <img src="img/des_4.png" width="150px" height="150px">
              <br>
             Cream Cake - <strong>$20</strong>
              <br>
              <button class="btn btn-danger my-cart-btn" data-id="16" data-name="Cream Cake" data-summary="summary 5" data-price="20" data-quantity="1" data-image="img/des_4.png">Add to Cart</button>
              <a href="#" class="btn btn-info">Details</a>
                <br>
                <br>
                <br>
            </div>
       
          </div>
            <!-- end add to cart
            
         
         /.container -->
        <section class="ss-style-bottom"></section>
    </div><!--/#food-menu-->




    <div id="special-offser" class="parallax pricing">
        <div class="container inner">

            <h2 class="section-title text-center">Special Offers</h2>
            <p class="lead main text-center">There is no sincerer love than the love of food!</p>
            
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    
                    <div class="pricing-item">
                        
                        <a href="#"><img class="img-responsive img-thumbnail" src="img/dish/dish3.jpg" alt=""></a>
                        
                        <div class="pricing-item-details">
                            
                            <h3><a href="#">Chicken Fried Rice</a></h3>
                            
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            
                            <button class="btn btn-danger my-cart-btn" data-id="17" data-name="Chicken Fried Rice" data-summary="summary 5" data-price="26" data-quantity="1" data-image="img/dish/dish3.jpg">Add to Cart</button>
                            <div class="clearfix"></div>
                        </div>
                        <!--price tag-->
                        <span class="hot-tag br-red">$26</span>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    
                    <div class="pricing-item">
                        
                        <a href="#"><img class="img-responsive img-thumbnail" src="img/dish/dish2.jpg" alt=""></a>
                        
                        <div class="pricing-item-details">
                            
                            <h3><a href="#">Hot Fried Chicken</a></h3>
                            
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            
                             <button class="btn btn-danger my-cart-btn" data-id="18" data-name="Hot Fried Chicken" data-summary="summary 5" data-price="37" data-quantity="1" data-image="img/dish/dish2.jpg">Add to Cart</button>
                            <div class="clearfix"></div>
                        </div>
                        <!--price tag-->
                        <span class="hot-tag br-lblue">$37</span>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="clearfix visible-md"></div>
                <div class="col-md-6 col-sm-6">
                    
                    <div class="pricing-item">
                        
                        <a href="#"><img class="img-responsive img-thumbnail" src="img/dish/dish4.jpg" alt=""></a>
                        
                        <div class="pricing-item-details">
                            
                            <h3><a href="#">Thi Chicken Momo</a></h3>
                            
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            
                            <button class="btn btn-danger my-cart-btn" data-id="19" data-name="Thi Chicken Momo" data-summary="summary 5" data-price="54" data-quantity="1" data-image="img/dish/dish4.jpg">Add to Cart</button>
                            <div class="clearfix"></div>
                        </div>
                        <!--price tag-->
                        <span class="hot-tag br-green">$54</span>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    
                    <div class="pricing-item">
                        
                        <a href="#"><img class="img-responsive img-thumbnail" src="img/dish/dish1.jpg" alt=""></a>
                        
                        <div class="pricing-item-details">
                            
                            <h3><a href="#">Cocktail Sushi</a></h3>
                            
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            
                             <button class="btn btn-danger my-cart-btn" data-id="20" data-name="Cocktail Sushi" data-summary="summary 5" data-price="27" data-quantity="1" data-image="img/dish/dish1.jpg">Add to Cart</button>
                            <div class="clearfix"></div>
                        </div>
                        <!--price tag-->
                        <span class="hot-tag br-red">$27</span>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>

        </div>
        <!-- /.container --> 
    </div><!-- /#special-offser -->




    <div id="reservation" class="light-wrapper">
        <section class="ss-style-top"></section>
        <div class="container inner">
            <h2 class="section-title text-center">Reservation</h2>
            <p class="lead main text-center">Reserve your table &amp; enjoy lorem Ipsum</p>
            <div class="row">
                <div class="col-md-6">
                    <form class="form form-table" method="post" name="">
                        <div class="form-group">
                            <h4>Fill the form for table reservation (all fields required)</h4>
                        </div>

                        <div class="row">
                          <div class="col-lg-6 col-md-6 form-group">
                            <label class="sr-only" for="first_name1">first name</label>
                            <input class="form-control hint" type="text" id="first_name1" name="first_name" placeholder="First name" required="">
                          </div>
                          <div class="col-lg-6 col-md-6 form-group">
                            <label class="sr-only" for="last_name1">last name</label>
                            <input class="form-control hint" type="text" id="last_name1" name="last_name" placeholder="Last name" required="">
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-lg-6 col-md-6 form-group">
                            <label class="sr-only" for="email1">email</label>
                            <input class="form-control hint" type="email" id="email1" name="email" placeholder="Email@domain.com" required="">
                          </div>
                          <div class="col-lg-6 col-md-6 form-group">
                            <label class="sr-only" for="phone1">phone</label>
                            <input class="form-control hint" type="text" id="phone1" name="phone" placeholder="Phone" required="">
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-lg-6 col-md-6 form-group">
                            <label class="sr-only" for="reserv_date1">reservation date</label>
                            <input class="form-control datepicker hasDatepicker hint" type="text" id="reserv_date1" name="reserv_date" placeholder="Reservation date" required="">
                          </div>
                          <div class="col-lg-6 col-md-6 form-group">
                            <label class="sr-only" for="numb_guests1">number of guests</label>
                            <input class="form-control hint" type="text" id="numb_guests1" name="numb_guests" placeholder="Number of guests" required="">
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-lg-6 col-md-6 form-group">
                            <label class="sr-only" for="alt_reserv_date1">time from</label>
                            <input class="form-control datepicker hasDatepicker hint" type="text" id="alt_reserv_date1" name="alt_reserv_date" placeholder="Time from" required="">
                          </div>
                          <div class="col-lg-6 col-md-6 form-group">
                            <label class="sr-only" for="time1">time</label>
                            <input class="form-control timepicker ui-timepicker-input hint" type="text" id="time1" name="time" placeholder="Time to" required="" autocomplete="off">
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-lg-12 col-md-12">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse.</p>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-lg-12 col-md-12">
                            <button type="submit" class="btn btn-danger btn-lg">Reserve!</button>
                          </div>
                        </div>
                      </form>
                </div><!-- col-md-6 -->
                <div class="col-md-5 col-md-offset-1">
                    
                    <h3><i class="fa fa-clock-o fa-fw"></i>Hours</h3>
                    <h4>Breakfast</h4>
                    <p>Mon to Fri: 7:30 AM - 11:30 AM<br>Sat &amp; Sun: 8:00 AM - 9:00 AM</p>
                    <h4>Lunch</h4>
                    <p>Mon to Fri: 12:00 PM - 5:00 PM</p>
                    <h4>Dinner</h4>
                    <p>Mon to Sat: 6:00 PM -  1:00 AM<br>Sun: 5:30 PM - 12:00 AM</p>

                    <h3><i class="fa fa-map-marker fa-fw"></i>Directions</h3>
                    <p>3300 Modina Market,Sylhet</p>

                    <h3><i class="fa fa-mobile fa-fw"></i>Contacts</h3>
                    <p>Email: <a href="mailto:rasel@menu.com">rasel@menu.com</a></p>
                    <p>Phone: <a href="callto:r+8801748084106">+880 1748084106</a></p>

                </div><!-- col-md-6 -->
            </div>
            <!-- /.services --> 
        </div>
        <!-- /.container -->
        <section class="ss-style-bottom"></section>
    </div><!-- #reservation -->



    <div id="chefs" class="parallax pricing">
        <div class="container inner">

            <h2 class="section-title text-center">Our Chefs</h2>
            <p class="lead main text-center">There is no sincerer love than the love of food!</p>
            
            <div class="row text-center chefs">
                <div class="col-sm-4">
                    <div class="col-wrapper">
                        <div class="icon-wrapper">
                            <img src="img/chefs/1.jpg">
                        </div>
                        <h3>Saransh Goila</h3>
                        <p>Vivamus sagittis lacuson augue laoreet rutrum faucibus dolor auctor. Cras mattis consectetur purus sit amet fermentum ultricies vehicula.</p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="col-wrapper">
                        <div class="icon-wrapper">
                            <img src="img/chefs/3.jpg">
                        </div>
                        <h3>Jane Doe</h3>
                        <p>Nullam id dolor id nibh ultricies vehicula ut id elit. Cum sociis natoque penatibus et magnis dis parturient monte nascetur ultricies vehicula. </p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="col-wrapper">
                        <div class="icon-wrapper">
                            <img src="img/chefs/2.jpg">
                        </div>
                        <h3>Anton Mosimann</h3>
                        <p>Curabitur blandit matti tempus porttitor. Donec id elit non mi porta ut gravida at eget metus. Consectetur adipiscing elit ultricies vehicula.</p>
                    </div>
                </div>
            </div>

        </div>
        <!-- /.container --> 
    </div><!-- /#chefs -->


    <footer id="footer" class="dark-wrapper">
        <section class="ss-style-top"></section>
        <div class="container inner">
            <div class="row">
                <div class="col-sm-6">
                    
                    <br/>&copy;  <a class="themeBy" href="http://www.facebook.com/ahmedrusseel">Rasel Ahmed</a>
                </div>
                <div class="col-sm-6">
                    <div class="social-bar">
                        <a href="#" class="fa fa-instagram tooltipped" title=""></a>
                        <a href="#" class="fa fa-youtube-square tooltipped" title=""></a>
                        <a href="#" class="fa fa-facebook-square tooltipped" title=""></a>
                        <a href="#" class="fa fa-pinterest-square tooltipped" title=""></a>
                        <a href="#" class="fa fa-google-plus-square tooltipped" title=""></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.container -->
    </footer>
    <script src="{{ asset('js/jquery-2.1.3.min.js')}}"></script>
    <script src="{{ asset('js/jquery.actual.min.js')}}"></script>
    <script src="{{ asset('js/jquery.scrollTo.min.js')}}"></script>
    <script src="{{ asset('js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('js/main.js')}}"></script>
    <script src="{{ asset('js/jquery-2.2.3.min.js')}}"></script>
    <script src="{{ asset('js/jquery.mycart.js')}}"></script>


  <script type="text/javascript">
  $(function () {

    var goToCartIcon = function($addTocartBtn){
      var $cartIcon = $(".my-cart-icon");
      var $image = $('<img width="30px" height="30px" src="' + $addTocartBtn.data("image") + '"/>').css({"position": "fixed", "z-index": "999"});
      $addTocartBtn.prepend($image);
      var position = $cartIcon.position();
      $image.animate({
        top: position.top,
        left: position.left
      }, 500 , "linear", function() {
        $image.remove();
      });
    }

    $('.my-cart-btn').myCart({
      currencySymbol: '$',
      classCartIcon: 'my-cart-icon',
      classCartBadge: 'my-cart-badge',
      classProductQuantity: 'my-product-quantity',
      classProductRemove: 'my-product-remove',
      classCheckoutCart: 'my-cart-checkout',
      affixCartIcon: true,
      showCheckoutModal: true,
      numberOfDecimals: 2,
      cartItems: [
       
      ],
      clickOnAddToCart: function($addTocart){
        goToCartIcon($addTocart);
      },
      afterAddOnCart: function(products, totalPrice, totalQuantity) {
        console.log("afterAddOnCart", products, totalPrice, totalQuantity);
      },
      clickOnCartIcon: function($cartIcon, products, totalPrice, totalQuantity) {
        console.log("cart icon clicked", $cartIcon, products, totalPrice, totalQuantity);
      },
      checkoutCart: function(products, totalPrice, totalQuantity) {
        var checkoutString = "Total Price: " + totalPrice + "\nTotal Quantity: " + totalQuantity;
        checkoutString += "\n\n id \t name \t summary \t price \t quantity \t image path";
        $.each(products, function(){
          checkoutString += ("\n " + this.id + " \t " + this.name + " \t " + this.summary + " \t " + this.price + " \t " + this.quantity + " \t " + this.image);
        });
        alert(checkoutString)
        console.log("checking out", products, totalPrice, totalQuantity);
      },
      getDiscountPrice: function(products, totalPrice, totalQuantity) {
        console.log("calculating discount", products, totalPrice, totalQuantity);
        return totalPrice * 0.5;
      }
    });

  });
  </script>
</body>
</html>