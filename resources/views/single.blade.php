


<html>
<head>
<title>PASR</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="{{ url('css/style.css')}}" rel="stylesheet">
<link href="{{ url('css/form.css')}}" rel="stylesheet">
<script type="text/javascript" src="{{ url('js/jquery.min.js')}}"></script>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
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
<!-- start menu -->     
<link href="{{ url('css/megamenu.css')}}" rel="stylesheet">

<!-- end menu -->
<script src="{{ url('js/jquery.min.js')}}"></script>
<script src="{{url('js/jquery.easydropdown.js')}}"></script>
<!-- top scrolling -->
<script src="{{ url('/js/move-top.js')}}"></script>
<script src="{{ url('js/move-top.js')}}"></script>
<script src="{{ url('js/easing.js')}}" ></script>
<script src="{{ url('js/js.js')}}"></script>
<script src="{{ url('js/megamenu.js')}}"></script>
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
   <script type="text/javascript">
    jQuery(document).ready(function($) {
      $(".scroll").click(function(event){   
        event.preventDefault();
        $('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
      });
    });
  </script>

  <script src="{{ url('js/jquery.jscrollpane.min.js')}}"></script>
        <script type="text/javascript" id="sourcecode">
            $(function()
            {
                $('.scroll-pane').jScrollPane();
            });
        </script>
<!----details-product-slider--->
                <!-- Include the Etalage files -->
                    
                    <link href="{{ url('css/etalage.css')}}" rel="stylesheet">
                    <script src="{{ url('js/megamenu.js')}}"></script>
                <!-- Include the Etalage files -->
                <script>
                        jQuery(document).ready(function($){
            
                            $('#etalage').etalage({
                                thumb_image_width: 300,
                                thumb_image_height: 400,
                                
                                show_hint: true,
                                click_callback: function(image_anchor, instance_id){
                                    alert('Callback example:\nYou clicked on an image with the anchor: "'+image_anchor+'"\n(in Etalage instance: "'+instance_id+'")');
                                }
                            });
                            // This is for the dropdown list example:
                            $('.dropdownlist').change(function(){
                                etalage_show( $(this).find('option:selected').attr('class') );
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
 @if(Auth::user()->role="Petani")
         <ul>
             <li><a href="/ptnusr">Dashboard</a></li> 
            <li><a href="/inputprdks">Input Produksi</a></li> 
           </ul>

@elseif(Auth::user()->role="User")
           <ul>
             <li><a href="/usrdsh">Dashboard</a></li>
             <li><a href="/order">Keranjang dan Checkout</a></li> 
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
              <div class="labout span_1_of_a1">
                <!-- start product_slider -->
                     <ul id="etalage">
                            <li>
                                <a href="optionallink.html">
                                    <img class="etalage_thumb_image" src="images/{{ $data->gambar }}" />
                                    <img class="etalage_source_image" src="images/{{ $data->gambar }}" />
                                </a>
                            </li>
                            <li>
                                <img class="etalage_thumb_image" src="images/{{ $data->gambar }}" />
                                <img class="etalage_source_image" src="images/{{ $data->gambar }}" />
                            </li>
                            <li>
                                <img class="etalage_thumb_image" src="images/{{ $data->gambar }}" />
                                <img class="etalage_source_image" src="images/{{ $data->gambar }}" />
                            </li>
                            <li>
                                <img class="etalage_thumb_image" src="images/{{ $data->gambar }}" />
                                <img class="etalage_source_image" src="images/{{ $data->gambar }}" />
                            </li>
                            <li>
                                <img class="etalage_thumb_image" src="images/{{ $data->gambar }}" />
                                <img class="etalage_source_image" src="images/{{ $data->gambar }}" />
                            </li>
                            <li>
                                <img class="etalage_thumb_image" src="images/{{ $data->gambar }}"/>
                                <img class="etalage_source_image" src="images/{{ $data->gambar }}" />
                            </li>
                            <li>
                                <img class="etalage_thumb_image" src="images/{{ $data->gambar }}" />
                                <img class="etalage_source_image" src="images/{{ $data->gambar }}" />
                            </li>
                        </ul>
                    
                    
            <!-- end product_slider -->
            </div>
            <div class="cont1 span_2_of_a1">
                            <form role="form" method="POST" action="/inputpembelian">
 <input type="hidden" name="_token" value="{{csrf_token()}}">  
                <h3 class="m_3" name="" >{{ $data->nama_barang }}</h3>
                <input type="hidden" name="nama" value="{{ $data->nama_barang }} ">
                <input type="hidden" name="id_petani" value="{{ $data->id_petani }} ">
                <input type="hidden" name="id_prdks" value="{{ $data->id }} ">
                <input type="hidden" name="no_rekening" value="{{ $data->no_rekening }} ">
                <input type="hidden" name="id_user" value="{{ \Auth::user()->id }}">
                <input type="hidden" name="satuanharga" value="{{ $data->harga }}/{{ $data->satuan }}">
                <div class="price_single">
                              <span class="actual" name="">{{ $data->harga }}/{{ $data->satuan }}</span>
                              
                              
                            </div>
                <ul class="options">
                    <h4 class="m_9">Stok</h4>
                    <span class="actual">{{ $data->jumlah }}</span>
                    <div class="clear"></div>
                </ul>
                <div class="btn_form">
                   <form>
                     <input type="submit" value="buy now" title=""> 
                  </form>
                  <input type="text" name="jumlah" value="Jumlah" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Jumlah';}">
                </div>

                <ul class="add-to-links">
                   <li><img src="images/wish.png" alt=""/><a href="#">Add to wishlist</a></li>
                </ul>
                <p class="m_desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                
                <div class="social_single"> 
                   
                </div>
            </div>
            <div class="clear"></div>
     
     
         <ul id="flexiselDemo3">
            <li><img src="images/pic11.jpg" /><div class="grid-flex"><a href="#">Bloch</a><p>Rs 850</p></div></li>
            <li><img src="images/pic10.jpg" /><div class="grid-flex"><a href="#">Capzio</a><p>Rs 850</p></div></li>
            <li><img src="images/pic9.jpg" /><div class="grid-flex"><a href="#">Zumba</a><p>Rs 850</p></div></li>
            <li><img src="images/pic8.jpg" /><div class="grid-flex"><a href="#">Bloch</a><p>Rs 850</p></div></li>
            <li><img src="images/pic7.jpg" /><div class="grid-flex"><a href="#">Capzio</a><p>Rs 850</p></div></li>
         </ul>
        <script type="text/javascript">
         $(window).load(function() {
            $("#flexiselDemo1").flexisel();
            $("#flexiselDemo2").flexisel({
                enableResponsiveBreakpoints: true,
                responsiveBreakpoints: { 
                    portrait: { 
                        changePoint:480,
                        visibleItems: 1
                    }, 
                    landscape: { 
                        changePoint:640,
                        visibleItems: 2
                    },
                    tablet: { 
                        changePoint:768,
                        visibleItems: 3
                    }
                }
            });
        
            $("#flexiselDemo3").flexisel({
                visibleItems: 5,
                animationSpeed: 1000,
                autoPlay: true,
                autoPlaySpeed: 3000,            
                pauseOnHover: true,
                enableResponsiveBreakpoints: true,
                responsiveBreakpoints: { 
                    portrait: { 
                        changePoint:480,
                        visibleItems: 1
                    }, 
                    landscape: { 
                        changePoint:640,
                        visibleItems: 2
                    },
                    tablet: { 
                        changePoint:768,
                        visibleItems: 3
                    }
                }
            });
            
        });
    </script>
    <script type="text/javascript" src="js/jquery.flexisel.js"></script>
     <div class="toogle">
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