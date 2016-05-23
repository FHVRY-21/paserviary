


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
        @if(Auth::user()->role == "Petani")
         <ul>
             <li><a href="/ptnusr">Dashboard</a></li> 
            <li><a href="/inputprdks">Input Produksi</a></li> 
           </ul>
        @elseif(Auth::user()->role == "User")


           <ul>
             <li><a href="/usrdsh">Dashboard</a></li>
             <li><a href="/orderusr">Keranjang dan Checkout</a></li> 
           </ul>
@else
     <ul>
             <li><a href="/login">Login</a></li> 
            <li><a href="/register">Register</a></li> 
             <li><a href="checkout.html">Keranjang dan Checkout</a></li> 
           </ul>
        @endif
        </div>
        <div class="clear"></div>
    </div>
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
                                <ul>s
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
        <div class="login">
         <div class="wrap">

            <div class="rsidebar span_1_of_left" style="
    overflow-y: scroll;
    height: 300px;
    overflow-x: hidden;
">

                <section  class="sky-form">
                    <h4>Jenis</h4>
                        <div class="row row1 scroll-pane">
                            <div class="col col-4">
                                <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Buah</label>
                                <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Jamur</label>
                                <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Olahan</label>
                                <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Rempah</label>
                                <label class="checkbox"><input type="checkbox" name="checkbox" ><i></i>Sayur</label>
                            </div>
                        </div>
               </section>
               <section  class="sky-form">
                    <h4>Satuan</h4>
                        <div class="row row1 scroll-pane">

                            <div class="col col-4">
                                <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Karung</label>
                                <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Buah</label>
                                <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Kilogram</label>
                            </div>
                        </div>
               </section>
               <section  class="sky-form">
                    <h4>Harga</h4>
                        <div class="row row1 scroll-pane">
                            <div class="col col-4">
                                <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>1000-10000</label>
                                <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>11000-20000</label>
                                <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>21000-30000</label>
                                <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>30000+</label>
                            </div>
                        </div>
               </section>
        </div>
        <div class="cont span_2_of_3">
          <div class="mens-toolbar">
              <div class="sort">
                <div class="sort-by">
                    <label>Sort By</label>
                    <select>
                                    <option value="">
                            Popularity               </option>
                                    <option value="">
                            Price : High to Low               </option>
                                    <option value="">
                            Price : Low to High               </option>
                    </select>
                    <a href=""><img src="images/arrow2.gif" alt="" class="v-middle"></a>
               </div>
            </div>
              <div class="pager">   
               <div class="limiter visible-desktop">
                <label>Show</label>
                <select>
                                <option value="" selected="selected">
                        9                </option>
                                <option value="">
                        15                </option>
                                <option value="">
                        30                </option>
                            </select> per page        
                 </div>
                <ul class="dc_pagination dc_paginationA dc_paginationA06">
                    <li><a href="#" class="previous">Pages</a></li>
                    <li><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                </ul>
                <div class="clear"></div>
            </div>
            <div class="clear"></div>
           </div>
           
                <div class="box1">
<form role="form" method="POST" action="/inputpembelian">
 <input type="hidden" name="_token" value="{{csrf_token()}}"> 
                @foreach($data as $prdks)
                   <div class="col_1_of_single1 span_1_of_single1"><a href="single.html">
                  
 
                     <div class="view1 view-fifth1">
                      <div class="top_box">
                        <h3 class="m_1">{{ $prdks->nama_barang }}</h3>
                        <p class="m_2">{{ $prdks->nama_petani }}</p>
                         <div class="grid_img">
                           <div class="css3"><img src="images/{{ $prdks->gambar }}" style="width:200px;height:200px"/></div>
                              <div class="mask1">
                                <div class="info" ><a href="/single/{{ $prdks->id}}" style="text-decoration: none">Quick View</a></div>
                              </div>
                        </div>
                       <div class="price">{{ $prdks->harga}}/{{ $prdks->satuan }}</div>
                       <p>Stok {{ $prdks->jumlah }}</p>
                       </div>
                        </div>
                     
                         <ul class="list2">
                         
                           
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


