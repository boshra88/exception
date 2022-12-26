<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Material Design Bootstrap</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href={{url("https://use.fontawesome.com/releases/v5.8.1/css/all.css")}}>
  <!-- Bootstrap core CSS -->
  <link href={{url("css/bootstrap.min.css")}} rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href={{url("css/mdb.min.css")}} rel="stylesheet">
  <style type="text/css">
  
       html,
    body,
    header,
    .view.jarallax {
      height: 100%;
      min-height: 100%;
    }

 html {
  scroll-behavior: smooth;
}

.flip-card p
{
   height: 102px;
  overflow: hidden;
}

    .no-caret , .category , .search-form
    {
      font-size: 18px!important
    }

    .indigo {
    background-color: #4285f4 !important;
}

    #back-to-top{
      position: fixed;
       right: 5px;
      bottom: 10px;
    
  
    }

     .navbar.navbar-light .navbar-nav .nav-item .nav-link {
    font-size: 18px!important;
   }
   
    nav   .fas{
        color: #4285f4;
    }

      nav  .fab {
        color: #4285f4;
    }


    .contact span
    {
      display: inline-block;
    }
    

     .carousel-indicators .secondary-color {
        background-color:  #4285f4 !important;
    }
    }

    .modal-dialog.modal-notify.modal-danger .fas {
        color: #4285f4 !important;
        }

         @media (max-width: 768px) {
          .image-contact {
            margin-bottom: 30px;
            height: 10rm!important;
              object-fit: cover;

          }

         }

    @media (min-width: 768px) {
    .carousel-multi-item-2 .col-md-3 {
    float: left;
    width: 25%;
    max-width: 100%; } }

    .carousel-multi-item-2 .card img {
    border-radius: 2px; }


    .btn-secondary {
    background-color: #4285f4!important;
    color: #fff !important;
  }
            

    .navbar-toggler-icon
    {
        color: #fff!important;
    }
    .image-contact{
        width: 100%!important;
  
      height: 170px!important; 
    }

    .fit-image {
      width: 100%;
      object-fit: cover;
      height: 300px!important; 
        }
        .card{
          height: 120% ;
        }
        
      .fit {
    
         height: 175px!important; 
        }

     .carousel-image {
      width: 100%;
      object-fit: cover;
      height: 450px!important; 
        }
      .logo
        {
        width: 200px!important;
        object-fit: cover;
        height: 45px!important; 
        }
       #modalProducts .modal-danger .fas {
      color: #fff;
      }

       .streak.streak-photo {
        background-attachment: fixed;
      }
      
      #modalProducts h7
      {
        color:#4285f4 ;

      }

      .modal-dialog.modal-notify.modal-danger .fas {
       color: #4285f4!important;
}


  .navbar .dropdown-menu a {
  color: #4285f4!important;
}


     #modalProducts .modal-dialog {
    max-width: 100%!important;

}

 .modal-dialog .card-body
 {
  height: 40px!important;

 }

  .modal-dialog .card
 {
  box-shadow: 0 0 0 0 ;

 }


  .btn-outline-primary {
    border: 2px solid #fff !important;
    background-color: transparent !important;
    color: #fff !important;
}

.flip-card {
  background-color: transparent;
  width: 100%;
  height: 300px;
  perspective: 1000px;
}

.flip-card-inner {
  position: relative;
  width: 100%;
  height: 100%;
  text-align: center;
  transition: transform 0.6s;
  transform-style: preserve-3d;

}

.flip-card:hover .flip-card-inner {
  transform: rotateY(180deg);
}

.flip-card-front, .flip-card-back {
  position: absolute;
  width: 100%;
  height: 100%;
  backface-visibility: hidden;
}



.flip-card-back {
  background-color: rgba(33,150,243,.7);

  color: white;
  transform: rotateY(180deg);
}

.btn-outline-primary:hover {
    border-color: #e0e0e0!important;
    background-color: transparent!important;
    color: #e0e0e0!important;
  
} 

figure{
  display: inline-block;
}

    
  </style>
 }
</head>

<body id="top1" >
    <!--Navigation-->
  
          @include('inc.nav_1')
  
    <!-- /.Navigation -->

    <!--Carousel Wrapper-->
    <div id="carousel-example-1z" class="carousel slide carousel-fade" data-ride="carousel">
        <!--Indicators-->
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-1z" data-slide-to="1"></li>
            <li data-target="#carousel-example-1z" data-slide-to="2"></li>
        </ol>
        <!--/.Indicators-->
        <!--Slides-->
        <div class="carousel-inner " role="listbox">
            <!--First slide-->
         @foreach($sliders as $slider)   
            <div class="carousel-item  @if($loop->first) active @endif">
                <div class="view h-100">
                    <img class="d-block h-100 w-lg-100 carousel-image" src="{{asset('img/products')}}/{{$slider->image}}" alt="First slide">
                    <div class="mask">
                        <!-- Caption -->
                        <div class="full-bg-img flex-center white-text">
                           <ul class="animated fadeInDown col-10 list-unstyled">
                                <li>
                                    <p class="h1 white-text mb-4">
                                        <strong>{{$slider->tittle}}
                                        </strong>
                                    </p>
                                </li>
                                 <li>
                                    <h5 class="h5-responsive white-text font-weight-bold mb-5">{{$slider->content}}
                                   </h5>
                                </li>
                               
                            </ul>
                           
                        </div>
                        <!-- /.Caption -->
                    </div>
                </div>
            </div>
            <!--/First slide-->
       @endforeach  
           
        </div>
        <!--/.Slides-->
        <!--Controls-->
        <a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
        <!--/.Controls-->
    </div>
    <!--/.Carousel Wrapper-->

    <!-- Mega menu -->
    <div class="container-fluid mx-0 px-0">

        <!--Navbar-->
        <nav class="navbar navbar-expand-lg navbar-dark primary-color category mb-5">
            <div class="container">

                <!-- Navbar brand -->
                <a class="font-weight-bold category white-text mr-4" href="#">Categories</a>

                <!-- Collapse button -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent1"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Collapsible content -->
                <div class="collapse navbar-collapse" id="navbarSupportedContent1">

                    <!-- Links -->
                    <ul class="navbar-nav mr-auto">
                       
                           <li class="nav-item dropdown mega-dropdown">
                            <a class="nav-link no-caret" id=""  href="{{asset('/catalogs')}}">Catalogs</a>
                            
                        </li>
                        <li class="nav-item dropdown mega-dropdown">
                            <a class="nav-link  no-caret" href="{{asset('/all_products')}}" id="" >All Products</a>
                           
                        </li>
                      @if (Auth::check())
                     @if($user->hasRole('admin'))
                         <li class="nav-item dropdown mega-dropdown">
                            <a class="nav-link  no-caret" href="{{asset('/admin/products_management')}}" id="" >Managements</a>
                           
                        </li>

                     @endif
                     @endif




                    </ul>
                    <!-- Links -->

                    <!-- Search form -->
                    <form class="search-form" role="search">
                        <div class="form-group md-form my-0 waves-light">
                            <input type="text" name="qq" value="{{$request->qq}}" class="form-control" placeholder="Search">
                        </div>
                    </form>
                    </div>
                <!-- Collapsible content -->
            </div>
        </nav>
        <!--/.Navbar-->

    </div>
    <!-- /Mega menu -->


 

  <!--Main content-->
  <main>




     <!--Gallery-->
    <div class="container pt-2">

      <!--Section: Main portfolio-->
      <section id="portfolio">

        <!--First row-->
        <div class="row wow fadeIn" data-wow-delay="0.4s">

    
            <!--Full width lightbox-->
@foreach($products_img as  $product_img)
           <figure class="col-md-4">
              <div class="flip-card">
                <div class="flip-card-inner">
                   <div class="flip-card-front">
                  <img src="{{asset('img/products')}}/{{$product_img->image}}" class="img-fluid z-depth-1-half fit-image">
              
              
               </div>
                  <div class="flip-card-back">
                      <div class="card-body">

                          <!-- Content -->
                          <h4 class="font-weight-bold mb-0 mt-4">{{$product_img->tittle}}</h4>
                          <hr>
                          <p>
                             {{$product_img->description}} </p>
                            <hr>
                           
                            <!-- Triggering button -->
                            <a class="btn btn-outline-primary waves-effect" href="images/{{$product_img->id}}" > Read More </a>

                        </div>


                  </div>
                </div>
              </div>

              </figure>
@endforeach
             
        </div>

      </section>
      <!--/Section: Main portfolio-->

    </div>
    <!--/Gallery-->


    <!--First container-->
    <div id="about" class="container">

      <!--Section: About-->
      <section  class="about mt-3 mb-5">

        <!--Secion heading-->
        <div class="row mt-5 mb-4">
          <div class="col-md-12">
            <div class="divider-new">
              <h3 class="text-center text-uppercase font-weight-bold mr-3 ml-3 wow fadeIn" data-wow-delay="0.2s">about us</h3>
            </div>
          </div>
          <!--First row-->

          <div class="row mt-4">

            <!--First column-->
            <div class="col-lg-5 col-md-12 mb-3 wow fadeIn" data-wow-delay="0.4s">

              <!--Image-->
              <img src="{{asset('/img/products/16.png')}}" alt="" class="z-depth-0 img-fluid fit-image">

            </div>
            <!--/First column-->

            <!--Second column-->
            <div class="col-lg-6 offset-lg-1 col-md-12 wow fadeIn" data-wow-delay="0.4s">

              <!--Title-->
              <h4 class="text-center mb-4">
              </h4>

              <!--Description-->
              <p class="grey-text mb-6 mr-3  ml-3" align="justify">

              Exceptional Company Established in Jeddah 2009 to provide Saudi Market with high quality services through most famous manufacturing brands around the world.

              Our scope of work expanded to cover another Gulf cities like United Arabs of Emirates with the same quality of services which we started.
              In past two years we entered Europe market through the gate of Turkey to achieve our dreams to be worldwide company.
             </p>

            </div>
            <!--/Second column-->

          </div>
          <!--/First row-->

        </div>

      </section>
      <!--/Section: About-->

    </div>
    <!--/First container-->

    <!--Streak-->
    <div class="streak streak-photo streak-md" style="background-image: url('{{asset('/img/products/3.jpg')}}');">
      <div class="flex-center mask rgba-black-strong">
        <div class="text-center white-text">
          <h2 class="h2-responsive mb-5">
            <i class="fas fa-quote-left" aria-hidden="true"></i> if you want to know more about our servises kindly visit us
            <i class="fas fa-quote-right" aria-hidden="true"></i>
          </h2>
          <h5 class="text-center font-italic">Contact us through our contact page channels

        </h5>
        </div>
      </div>
    </div>
    <!--/Streak-->

    <!--Second container-->
    <div class="container">

      <!--Section: Menu intro-->
      <section id="intro" class="mt-3 mb-4">

        <!--Section heading-->
        <div class="row mt-5 mb-4">
          <div class="col-md-12 mb-3">
            <div class="divider-new">
              <h3 class="text-center text-uppercase font-weight-bold mr-3 ml-3 wow fadeIn" data-wow-delay="0.2s">Discover our delights</h3>
            </div>
          </div>
        </div>

        <!--First row-->
        <div class="row smooth-scroll">

          <!--First column-->
          <div class="col-lg-6 col-md-12 wow fadeIn" data-wow-delay="0.4s">

            <!--Title-->
            <h4 class="mb-4 text-center">Best Of Our Works</h4>

            <!--Description-->
            <p class="grey-text mb-4" align="justify">
              Exceptional Company executed hundreds of successfull projects for multi-domains like Hospitals, Manufacturing , Airports , Laboratories .
              We had projects on level of Government and Private sectors .
            </p>

            <!--Menu button-->
           

          </div>
          <!--/First column-->

          <!--Second column-->
            <div class="col-lg-5 col-md-12 mb-3 wow fadeIn" data-wow-delay="0.4s">

              <!--Image-->
              <img src="{{asset('/img/products/4.jpg')}}" alt="" class="z-depth-0 img-fluid fit-image">

            </div>
          <!--/Second column-->

        </div>
        <!--/First row-->

      </section>
      <!--/Section: Menu intro-->

    </div>

    <hr>

    <!--Section: Products-->
    <div class="container">

      <section id="specials">

        <!--Secion heading-->
        <div class="row mt-5 mb-4">
          <div class="col-md-12">
            <div class="divider-new">
              <h3 class="text-center text-uppercase font-weight-bold mr-3 ml-3 wow fadeIn" data-wow-delay="0.2s">our specials</h3>
            </div>
          </div>

          <p class="grey-text text-center ml-3 mr-3 mt-1 mb-5">
          </p>

          <!--First row-->
          <div class="row text-center mr-2 ml-2 mt-3">

            <!--First column-->
            <div class="col-lg-4 col-md-12 mb-4 wow fadeIn" data-wow-delay="0.4s">

              <!--Card-->
              <div class="card card-cascade wider h-100">

                <!--Card image-->
                <div class="view view-cascade overlay zoom">
                  <img src="{{asset('/img/products/1.jpg')}}" class="img-fluid fit-image  img-responsive">
                  <a href="#!">
                    <div class="mask rgba-white-slight"></div>
                  </a>
                </div>
                <!--/Card image-->

               <!-- Card content -->
            <div class="card-body card-body-cascade text-center">

              <!-- Title -->
              <h4 class="card-title"><strong>General Manufacturing</strong></h4>
              <!-- Subtitle --
              <!-- Text -->
              <p class="card-text mr-3">
                 When you require pure performance, we have the floors that deliver. Our seamless, impact, chemical, abrasion-resistant floors do the work of ten floors for manufacturing environments whether they’re processing, packaging, warehouses, traffic aisles, battery storage or others. Big-picture solutions, long-term protection.


              </p>

            
            </div>

              </div>
              <!--/.Card-->

            </div>
            <!--/First column-->

            <!--Second column-->
            <div class="col-lg-4 col-md-6 mb-4 wow fadeIn" data-wow-delay="0.4s">

              <!--Card-->
              <div class="card card-cascade wider h-100">

                <!--Card image-->
                <div class="view view-cascade overlay zoom">
                  <img src="{{asset('/img/products/2.jpg')}}" class="img-fluid fit-image img-responsive ">
                  <a href="#!">
                    <div class="mask rgba-white-slight"></div>
                  </a>
                </div>
                <!--/Card image-->

                <!--Card content-->
              <div class="card-body card-body-cascade text-center">

              <!-- Title -->
              <h4 class="card-title"><strong>  Flooring Solutions  </strong></h4>

 
              <!-- Subtitle --
              <!-- Text -->
              <p class="card-text mr-3">
                Corporate spaces and condominium buildings need hardworking floors for both indoor and outdoor applications. We have formulations for kitchens, offices, patios and walkways that cover a multitude of demands. Easy to clean, textured, long lasting solutions for property managers
              </p>

            
            </div>
                <!--/.Card content-->

              </div>
              <!--/.Card-->

            </div>
            <!--/Second column-->

            <!--Third column-->
            <div class="col-lg-4 col-md-6 mb-4 wow fadeIn" data-wow-delay="0.4s">

              <!--Card-->
              <div class="card card-cascade wider h-100">

                <!--Card image-->
                <div class="view view-cascade overlay zoom">
                  <img src="{{asset('/img/products/3.jpg')}}" class="img-fluid fit-image img-responsive">
                  <a href="#!">
                    <div class="mask rgba-white-slight"></div>
                  </a>
                </div>
                <!--/Card image-->

                <!--Card content-->
               <div class="card-body card-body-cascade text-center">

              <!-- Title -->
              <h4 class="card-title"><strong>Logistics</strong></h4>
              <!-- Subtitle --
              <!-- Text -->
              <p class="card-text mt-4">
                here’s no time to worry about maintenance or repairs in warehouses, distribution centers and air & ground carrier facilities. Survival is about long lasting floors that can handle consistent truck and forklift traffic. Our seamless floors stand up to it all and are easy clean too! Chemical, impact and stain resistant solutions for an industry that never sleeps
              </p>

            
                </div>
                 
                <!--/.Card content-->

              </div>
              <!--/.Card-->

            </div>
            <!--/Third column-->

          </div>
          <!--/First row-->

        </div>

      </section>

    </div>
    <!--/Section: Products-->

    <!--Streak-->
    <div class="streak streak-photo streak-long-2" style="background-image:url('{{asset('/img/products/19.jpg')}}')">
      <div class="mask flex-center rgba-black-strong">
        <div class="container">

          <h2 class="text-center text-white mb-5 text-uppercase font-weight-bold wow fadeIn" data-wow-delay="0.2s">Great
            people trusted our services</h2>

          <!--First row-->
          <div class="row text-white text-center wow fadeIn" data-wow-delay="0.2s">

            <!--First column-->
            <div class="col-md-3 mb-2">
              <h1 class="green-text mb-1 font-weight-bold py-3">+950</h1>
              <p class="mb-3">Happy clients</p>
            </div>
            <!--/First column-->

            <!--Second column-->
            <div class="col-md-3 mb-2">
              <h1 class="green-text mb-1 font-weight-bold py-3">+150</h1>
              <p class="mb-3">Projects completed</p>
            </div>
            <!--/Second column-->

            <!--Third column-->
            <div class="col-md-3 mb-2">
              <h1 class="green-text mb-1 font-weight-bold py-3">+85</h1>
              <p class="mb-3">Winning awards</p>
            </div>
            <!--/Third column-->

            <!--Fourth column-->
            <div class="col-md-3">
              <h1 class="green-text mb-1 font-weight-bold py-3">+246</h1>
              <p class="mb-3">Cups of coffee</p>

            </div>
            <!--/Fourth column-->

          </div>
          <!--/First row-->
        </div>
      </div>
    </div>
    <!--/Streak-->

    <!--Section: Menu-->
    <div class="container">

      <section class="my-4 " id="products">

        <!--Secion heading-->
        <div class="row mt-5 mb-4">
          <div class="col-md-12">
            <div class="divider-new">
              <h3 class="text-center text-uppercase font-weight-bold mr-3 ml-3 wow fadeIn" data-wow-delay="0.2s"> Partners of Success</h3>
            </div>
          </div>
        </div>

        <!--Section description-->
      
<div class="container pb-5 ">
        <div class="row ">
                      <div class="col-md-3">
                         <img src="{{asset('/img/products/Crane.jpg')}}" class="img-fluid z-depth-1-half image-contact">
                     </div>
                       <div class="col-md-4">
                           <img src="{{asset('/img/products/PolySto_LOGO.png')}}" class="img-fluid z-depth-1-half image-contact">
                     </div>
                      <div class="col-md-3">
                           <img src="{{asset('/img/products/blucher.png')}}" class="img-fluid z-depth-1-half image-contact">
                     </div>
                        <div class="col-md-2">
                           <img src="{{asset('/img/products/MPM.png')}}" class="img-fluid z-depth-1-half image-contact">
                     </div>
                      
                      
                   </div>
        </div>

      </section>

    </div>
    <!--/Section: Menu-->

  

    <div id="contact" class="container">
      <!--Section: Contact v.2-->
     @include('inc.contact_us')
<!--Section: Contact v.2-->


    </div>

<div class=" row  ">
  <div class="col-md-11">
    
  </div>

   <div class="col-md-1 ">
     <a href="" id="back-to-top" type="button" class=" btn-floating indigo"><i class="fas fa-angle-up"></i></a>
    
  </div>
        
    </div>
    

  </main>
  <!--/Main content-->

  <!--Footer-->
  <footer class="page-footer stylish-color-dark text-center text-md-left pt-4">

    <!--Footer Links-->
    <div class="container mb-4">

      <!--First row-->
      <div class="row">

        <!--First column-->
        <div class="col-lg-4 pt-1 pb-3 wow fadeIn" data-wow-delay="0.3s">
          <!--About-->
          <h5 class="title mb-4">
            <strong>ABOUT INDUSTRY
            </strong>
          </h5>

           <p class="mb-1-half">Exceptional Company Established in Jeddah 2009 to provide Saudi Market with high quality services through most famous manufacturing brands around the world
          </br>
          Our scope of work expanded to cover another Gulf cities like United Arabs of Emirates with the same quality of services which we started. </p>
          </p>In past two years we entered Europe market through the gate of Turkey to achieve our dreams to be worldwide company</p>
          <!--/About -->

         
        </div>
        <!--/First column-->

        <hr class="w-100 clearfix d-md-none">

        <!--Second column-->
        <div class="col-lg-4 pt-1 pb-1 col-md-6 wow fadeIn" data-wow-delay="0.3s">
          <!--Search-->
          <h5 class="text-uppercase mb-4">
            
          </h5>

          <ul class="footer-search list-unstyled">
            <li>
              <form class="search-form" role="search">
                <div class="md-form">
                  <input type="text" class="form-control text-white" placeholder="Search">
                </div>
              </form>
            </li>
          </ul>

          <!--Info-->
          <p>
            <i class="fas fa-home mr-3"></i> Saudi Arabia - Jeddah </p>
          <p>
            <i class="fas fa-envelope mr-3"></i> info@exceptionalco.com
          </p>
          <p>
            <i class="fas fa-phone mr-3"></i> +966 12 66 33 238
          </p>
          <p>
            <i class="fab fa-whatsapp mr-3"></i> +966 53 2127722
           </p>

        </div>
        <!--/Second column-->

        <hr class="w-100 clearfix d-md-none">

        <!--First column-->
        <div class="col-lg-4 pt-1 pb-1 col-md-6 wow fadeIn text-center" data-wow-delay="0.3s">

          <!--Title-->
          <h5 class="title mb-4 text-uppercase">
            <strong>Opening hours</strong>
          </h5>

          <!--Opening hours table-->
          <table class="table text-white">
            <tbody>
              <tr>
                <td>Saturday - Thursday 
                :</td>
                <td>09 AM - 5 PM</td>
              </tr>
             
            
            </tbody>
          </table>

        </div>
        <!--/First column-->

      </div>
      <!--/First row-->

    </div>
    <!--/Footer Links-->

    <!--Copyright-->
    <div class="footer-copyright py-3 text-center" data-wow-delay="0.3s">
      <div class="container-fluid">
        © 2019 Copyright: <a href="https://mdbootstrap.com/education/bootstrap/" target="_blank"> Exceptional.com </a>
      </div>
    </div>
    <!--/Copyright-->

  </footer>
  <!--/Footer-->

 

<!-- Button trigger modal-->






@include('auth.login')


  <!-- SCRIPTS -->

    <script type="text/javascript" src={{url("js/jquery-3.3.1.min.js")}}></script>


  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src={{url("js/popper.min.js")}}></script>

  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src={{url("js/bootstrap.min.js")}}></script>

  <!-- MDB core JavaScript -->
  <script type="text/javascript" src={{url("js/mdb.min.js")}}></script>
  <script  src={{asset("https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js")}}></script>

<script src={{asset("https://cdnjs.cloudflare.com/ajax/libs/web-animations/2.2.2/web-animations.min.js")}}></script>
<script src="{{asset('https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js')}}"></script>


 

 

  <!-- MDB core JavaScript -->

  <script>
    //Animation init
    new WOW().init();

     //Modal
    $('#myModal').on('shown.bs.modal', function () {
      $('#myInput').focus()
    });



    // Material Select Initialization
    $(document).ready(function () {
      $('.mdb-select').material_select();
    });

    $('.carousel.carousel-multi-item.v-2 .carousel-item').each(function(){
  var next = $(this).next();
  if (!next.length) {
    next = $(this).siblings(':first');
  }
  next.children(':first-child').clone().appendTo($(this));

  for (var i=0;i<4;i++) {
    next=next.next();
    if (!next.length) {
      next=$(this).siblings(':first');
    }
    next.children(':first-child').clone().appendTo($(this));
  }
});



  
  </script>

  <script type="text/javascript">
    
    (function ($) {

/*--Scroll Back to Top Button Show--*/

$(window).scroll(function(){
    if ($(this).scrollTop() > 200) {
        $('#back-to-top').fadeIn();
    } else {
        $('#back-to-top').fadeOut();
    }
});

//Click event scroll to top button jquery

$('#back-to-top').click(function(){

    $('html, body').animate({scrollTop : 0},600);
    return false;
});

})(jQuery);
  </script>

</body>

</html>
