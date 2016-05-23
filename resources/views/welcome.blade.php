<!DOCTYPE HTML>
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

   <script>
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
            <li><a href="/register">Daftar</a></li> 

           </ul>
        </div>
        <div class="clear"></div>
    </div>
   </div>

       <div class="index-banner">
          <div class="wmuSlider example1" style="height: 560px;">
              <div class="wmuSliderWrapper">
                  <article style="position: relative; width: 100%; opacity: 1;"> 
                    <div class="banner-wrap">
                        <div class="slider-left">
                            <img src="images/banner1.png" alt=""/> 
                        </div>

                         <div class="clear"></div>
                     </div>
                    </article>
                   <article style="position: absolute; width: 100%; opacity: 0;"> 
                     <div class="banner-wrap">
                        <div class="slider-left">
                            <img src="images/banner2.jpg" alt=""/> 
                        </div>

                         <div class="clear"></div>
                     </div>
                   </article>
                   <article style="position: absolute; width: 100%; opacity: 0;">

                   </article>
                   <article style="position: absolute; width: 100%; opacity: 0;">
                    <div class="banner-wrap">
                        <div class="slider-left">
                            <img src="images/banner2.jpg" alt=""/> 
                        </div>
                         <div class="slider-right">
                         </div>
                         <div class="clear"></div>
                     </div>
                   </article>
                   <article style="position: absolute; width: 100%; opacity: 0;"> 
                     <div class="banner-wrap">
                        <div class="slider-left">
                            <img src="images/banner1.jpg" alt=""/> 
                        </div>
                         <div class="slider-right">
                         </div>
                         <div class="clear"></div>
                     </div>
                  </article>
                </div>
                <a class="wmuSliderPrev">Previous</a><a class="wmuSliderNext">Next</a>
                <ul class="wmuSliderPagination">
                    <li><a href="#" class="">0</a></li>
                    <li><a href="#" class="">1</a></li>
                    <li><a href="#" class="wmuActive">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                  </ul>
                 <a class="wmuSliderPrev">Previous</a><a class="wmuSliderNext">Next</a><ul class="wmuSliderPagination"><li><a href="#" class="wmuActive">0</a></li><li><a href="#" class="">1</a></li><li><a href="#" class="">2</a></li><li><a href="#" class="">3</a></li><li><a href="#" class="">4</a></li></ul></div>
                 <script src="js/jquery.wmuSlider.js"></script> 
                 <script type="text/javascript" src="js/modernizr.custom.min.js"></script> 
                        <script>
                             $('.example1').wmuSlider();         
                        </script>                     
             </div>
     <div class="header-bottom">
    <div class="wrap">
        <!-- start header menu -->
        <ul class="megamenu skyblue">
            <li><a class="color2" href="/">Home</a></li>
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
               <li class="active grid"><a class="color2" href="#">Buah</a>
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
                <li><a class="color2" href="#">Customize</a>
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
                <li><a class="color2" href="#">Promo</a></li>
</ul>
</div>
</div>
       </div>
       </div>
 <div class="clear"></div>
 
                 @foreach($data as $prdks)
                   <div class="col_1_of_single1 span_1_of_single1"><a href="single.html">
                  
 
                     <div class="view1 view-fifth1">
                      <div class="top_box">
                        <h3 class="m_1">{{ $prdks->nama_barang }}</h3>
                        <p class="m_2">{{ $prdks->nama_petani }} {{ $prdks->nama_barang }}</p>
                         <div class="grid_img">
                           <div class="css3"><img src="images/{{ $prdks->gambar }}"style="width:300px;height:300px" /></div>
                              <div class="mask1">
                                <div class="info" ><a href="/single/{{ $prdks->id}}" style="text-decoration: none">Quick View</a></div>
                              </div>
                        </div>
                       <div class="price">{{ $prdks->harga}}/{{ $prdks->satuan }}</div>
                       <p>Stok {{ $prdks->jumlah }}</p>
                       </div>
                        </div>
                       <span class="rating1">
                        <input type="radio" class="rating-input" id="rating-input-1-5" name="rating-input-1">
                        <label for="rating-input-1-5" class="rating-star1"></label>
                        <input type="radio" class="rating-input" id="rating-input-1-4" name="rating-input-1">
                        <label for="rating-input-1-4" class="rating-star1"></label>
                        <input type="radio" class="rating-input" id="rating-input-1-3" name="rating-input-1">
                        <label for="rating-input-1-3" class="rating-star1"></label>
                        <input type="radio" class="rating-input" id="rating-input-1-2" name="rating-input-1">
                        <label for="rating-input-1-2" class="rating-star"></label>
                        <input type="radio" class="rating-input" id="rating-input-1-1" name="rating-input-1">
                        <label for="rating-input-1-1" class="rating-star"></label>&nbsp;
                      (45)
                      </span>
                         <ul class="list2">
                          <li>
                            <img src="images/plus.png" alt=""/>
                            <ul class="icon1 sub-icon1 profile_img">
                              <li><a class="active-icon c1" href="#">Add To Bag </a>
                                <ul class="sub-icon1 list">
                                    <li><h3>sed diam nonummy</h3><a href=""></a></li>
                                    <li><p>Lorem ipsum dolor sit amet, consectetuer  <a href="">adipiscing elit, sed diam</a></p></li>
                                </ul>
                              </li>
                             </ul>
                           </li>
                         </ul>
                         
                        <div class="clear"></div>

                    </a></div>
                    @endforeach
                           <div class="clear"></div>
                    </a></div>
                  <div class="clear"></div>
              </div>
              
              </div>
              <div class="clear"></div>

            </div>
           </div>
           
         <div class="copy">
           <div class="wrap">
              <p>© All rights reserved | Template by&nbsp;<a href="http://w3layouts.com/"> W3Layouts</a></p>
           </div>
         </div>
       </div>
       <script>
            $(document).ready(function() {
            
                var defaults = {
                    containerID: 'toTop', // fading element id
                    containerHoverID: 'toTopHover', // fading element hover id
                    scrollSpeed: 1200,
                    easingType: 'linear' 
                };
                
                
                $().UItoTop({ easingType: 'easeOutQuart' });
                
            });
        </script>
        <a href="#" id="toTop" style="display: block;"><span id="toTopHover" style="opacity: 1;"></span></a>
</body>
</html>
       </body>
