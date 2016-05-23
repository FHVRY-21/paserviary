<html>
<head>
<title>PASR</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="{{ url('css/style.css')}}" rel="stylesheet">
<link href="{{ url('css/form.css')}}" rel="stylesheet">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>

<!-- start menu -->     
<link href="{{ url('css/megamenu.css')}}" rel="stylesheet">

<!-- end menu -->
<script src="{{ url('js/jquery.min.js')}}"></script>
<script src="{{url('js/jquery.easydropdown.js')}}"></script>
<!-- top scrolling -->
<script type="text/javascript" src="/js/move-top.js"></script>
<script type="text/javascript" src="{{ url('js/move-top.js')}}"></script>
<script type="text/javascript" src="{{ url('js/easing.js')}}" ></script>
<script src="{{ url('js/js.js')}}"></script>
<script type="text/javascript" src="{{ url('js/megamenu.js')}}"></script>
<script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
<script type="text/javascript">
        $(document).ready(function() {
            $(".dropdown img.flag").addClass("flagvisibility");

            $(".dropdown dt a").click(function() {
                $(".dropdown dd ul").toggle();
            });
                        
            $(".dropdown dd ul li a").click(function() {
                var text = $(this).html();
                $(".dropdown dt a span").html(text);
                $(".dropdown dd ul").hide();
                $("#result").html("Selected value is: " + getSelectedValue("sample"));
            });
                        
            function getSelectedValue(id) {
                return $("#" + id).find("dt a span.value").html();
            }

            $(document).bind('click', function(e) {
                var $clicked = $(e.target);
                if (! $clicked.parents().hasClass("dropdown"))
                    $(".dropdown dd ul").hide();
            });


            $("#flagSwitcher").click(function() {
                $(".dropdown img.flag").toggleClass("flagvisibility");
            });
        });
     </script>

   <script type="text/javascript">
    jQuery(document).ready(function($) {
      $(".scroll").click(function(event){   
        event.preventDefault();
        $('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
      });
    });
  </script>
</head>
<body>  
<html>
<head>
<title>PASR</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="{{ url('css/style.css')}}" rel="stylesheet">
<link href="{{ url('css/form.css')}}" rel="stylesheet">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>

<!-- start menu -->     
<link href="{{ url('css/megamenu.css')}}" rel="stylesheet">

<!-- end menu -->
<script src="{{ url('js/jquery.min.js')}}"></script>
<script src="{{url('js/jquery.easydropdown.js')}}"></script>
<!-- top scrolling -->
<script type="text/javascript" src="/js/move-top.js"></script>
<script type="text/javascript" src="{{ url('js/move-top.js')}}"></script>
<script type="text/javascript" src="{{ url('js/easing.js')}}" ></script>
<script src="{{ url('js/js.js')}}"></script>
<script type="text/javascript" src="{{ url('js/megamenu.js')}}"></script>
<script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
<script type="text/javascript">
        $(document).ready(function() {
            $(".dropdown img.flag").addClass("flagvisibility");

            $(".dropdown dt a").click(function() {
                $(".dropdown dd ul").toggle();
            });
                        
            $(".dropdown dd ul li a").click(function() {
                var text = $(this).html();
                $(".dropdown dt a span").html(text);
                $(".dropdown dd ul").hide();
                $("#result").html("Selected value is: " + getSelectedValue("sample"));
            });
                        
            function getSelectedValue(id) {
                return $("#" + id).find("dt a span.value").html();
            }

            $(document).bind('click', function(e) {
                var $clicked = $(e.target);
                if (! $clicked.parents().hasClass("dropdown"))
                    $(".dropdown dd ul").hide();
            });


            $("#flagSwitcher").click(function() {
                $(".dropdown img.flag").toggleClass("flagvisibility");
            });
        });
     </script>

   <script type="text/javascript">
    jQuery(document).ready(function($) {
      $(".scroll").click(function(event){   
        event.preventDefault();
        $('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
      });
    });
  </script>
</head>
<body>     
  <div class="header-top">
     <div class="wrap"> 
        <div class="logo">
            <a href="index.html"><img src="images/logo.png" alt=""/></a>
        </div>
        <div class="cssmenu">
           <ul>
             <li><a href="/login">Masuk</a></li> 
            <li><a href="/reg">Daftar</a></li> 
             <li><a href="checkout.html">Keranjang dan Checkout</a></li> 
           </ul>
        </div>
        <div class="clear"></div>
    </div>
   </div>
 <div class="header-bottom">
    <div class="wrap">
        <!-- start header menu -->
        <ul class="megamenu skyblue">
            <li><a class="color1" href="/">Home</a></li>
            <li class="grid"><a class="color2" href="#">Pertanian atau Koperasi</a>
                <div class="megapanel">
                    <div class="row">
                        <div class="col1">
                            <div class="h_nav">
                                <h4>Favorit</h4>
                                <ul>
                                    <li><a href="">Pertanian Jawa Barat</a></li>
                                    <li><a href="">Pertanian Jawa Barat</a></li>
                                    <li><a href="">Pertanian Jawa Barat</a></li>
                                    <li><a href="">Pertanian Jawa Barat</a></li>
                                    <li><a href="">Pertanian Jawa Barat</a></li>
                                    
                                </ul>   
                            </div>
                        
                        </div>
                       
                        <div class="col1"></div>
                        <div class="col1"></div>
                        <div class="col1"></div>
                        <div class="col1"></div>
                        <img src="images/nav_img.jpg" alt=""/>
                    </div>
                </div>
                </li>
               <li class="active grid"><a class="color4" href="#">Buah</a>
                <div class="megapanel">
                    <div class="row">
                        <div class="col1">
                            <div class="h_nav">
                                <h4>Buah Favorit</h4>
                                <ul>
                                    <li><a href="">Strawberry</a></li>
                                    <li><a href="">Mangga</a></li>
                                    <li><a href="">Apel</a></li>
                                    
                                </ul>   
                            </div>                          
                        </div>
                        <div class="col1">
                            <div class="h_nav">
                                <h4>Pertanian Favorit</h4>
                                <ul>
                                    <li><a href="">Strawberry Enak</a></li>
                                    <li><a href="">Strawberry Sedap</a></li>
                                    <li><a href="">Strawberry Maknyus</a></li>
                                    
                                </ul>   
                            </div>                          
                        </div>
                        <div class="col1">
                            <div class="h_nav">
                                <h4>Semua Jenis</h4>
                                <ul>
                                    <li><a href="">Apel</a></li>
                                    <li><a href="">Apel</a></li>
                                    <li><a href="">Apel</a></li>
                                    <li><a href="">Apel</a></li>
                                    
                                </ul>   
                            </div>                                              
                        </div>

                        <div class="col1">
                         <div class="h_nav">
                           <img src="images/nav_img1.jpg" alt=""/>
                         </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col2"></div>
                        <div class="col1"></div>
                        <div class="col1"></div>
                        <div class="col1"></div>
                        <div class="col1"></div>
                    </div>
                    </div>
                </li>               
                </li>
                <li><a class="color7" href="#">Customize</a>
                <div class="megapanel">
                    <div class="row">
                        <div class="col1">
                            <div class="h_nav">
                                <h4>shop</h4>
                                <ul>
                                    <li><a href="">new arrivals</a></li>
                                    <li><a href="">men</a></li>
                                    <li><a href="">women</a></li>
                                    <li><a href="">accessories</a></li>
                                    <li><a href="">kids</a></li>
                                    <li><a href="">brands</a></li>
                                </ul>   
                            </div>                          
                        </div>
                        <div class="col1">
                            <div class="h_nav">
                                <h4>help</h4>
                                <ul>
                                    <li><a href="">trends</a></li>
                                    <li><a href="">sale</a></li>
                                    <li><a href="">style videos</a></li>
                                    <li><a href="">accessories</a></li>
                                    <li><a href="">kids</a></li>
                                    <li><a href="">style videos</a></li>
                                </ul>   
                            </div>                          
                        </div>
                        <div class="col1">
                            <div class="h_nav">
                                <h4>my company</h4>
                                <ul>
                                    <li><a href="">trends</a></li>
                                    <li><a href="">sale</a></li>
                                    <li><a href="">style videos</a></li>
                                    <li><a href="">accessories</a></li>
                                    <li><a href="">kids</a></li>
                                    <li><a href="">style videos</a></li>
                                </ul>   
                            </div>                                              
                        </div>
                        <div class="col1">
                            <div class="h_nav">
                                <h4>account</h4>
                                <ul>
                                    <li><a href="">login</a></li>
                                    <li><a href="">create an account</a></li>
                                    <li><a href="">create wishlist</a></li>
                                    <li><a href="">my shopping bag</a></li>
                                    <li><a href="">brands</a></li>
                                    <li><a href="">create wishlist</a></li>
                                </ul>   
                            </div>                      
                        </div>
                        <div class="col1">
                            <div class="h_nav">
                                <h4>my company</h4>
                                <ul>
                                    <li><a href="">trends</a></li>
                                    <li><a href="">sale</a></li>
                                    <li><a href="">style videos</a></li>
                                    <li><a href="">accessories</a></li>
                                    <li><a href="">kids</a></li>
                                    <li><a href="">style videos</a></li>
                                </ul>   
                            </div>
                        </div>
                        <div class="col1">
                            <div class="h_nav">
                                <h4>popular</h4>
                                <ul>
                                    <li><a href="">new arrivals</a></li>
                                    <li><a href="">men</a></li>
                                    <li><a href="">women</a></li>
                                    <li><a href="">accessories</a></li>
                                    <li><a href="">kids</a></li>
                                    <li><a href="">style videos</a></li>
                                </ul>   
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col2"></div>
                        <div class="col1"></div>
                        <div class="col1"></div>
                        <div class="col1"></div>
                        <div class="col1"></div>
                    </div>
                    </div>
                </li>
                <li><a class="color7" href="#">Promo</a></li>
</ul>
</div>
</div>
       </div>
       <div class="login">
          <div class="wrap">
                <div class="col_1_of_login span_1_of_login">
                    <h4 class="title">New Customers</h4>
                    <h5 class="sub_title">Register Account</h5>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan</p>
                    <div class="button1">
                       <a href="register.html"><input type="submit" name="Submit" value="Continue"></a>
                     </div>
                     <div class="clear"></div>
                </div>
                <div class="col_1_of_login span_1_of_login">
                  <div class="login-title">
                    <h4 class="title">Registered Customers</h4>
                     <div class="comments-area">
                        <form method="POST">
                        {{csrf_field()}}
                            <p>
                                <label>Email</label>
                                <span>*</span>
                                <input type="text" value="" name="email">
                            </p>
                            <p>
                                <label>Password</label>
                                <span>*</span>
                                <input type="password" value="" name="password">
                            </p>
                             <p id="login-form-remember">
                                <label><a href="#">Forget Your Password ? </a></label>
                             </p>
                             <p>
                                <input type="submit" value="Login">
                            </p>
                        </form>
                    </div>
                  </div>
                </div>
                                  @if (count($errors) > 0)
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif
                <div class="clear"></div>
            </div>
        </div>
        </body>