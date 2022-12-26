<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Material Design Bootstrap Template</title>

    <!-- Font Awesome -->
   <link rel="stylesheet" href="{{asset('https://use.fontawesome.com/releases/v5.7.0/css/all.css')}}">

    <!-- Bootstrap core CSS -->
    <link href="{{asset('/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Material Design Bootstrap -->
    <link href="{{asset('css/mdb.min.css')}}" rel="stylesheet">

     <style type="text/css">
  
          
   .navbar.navbar-light .navbar-nav .nav-item .nav-link {
    font-size: 18px!important;
   }
   
   html {
  scroll-behavior: smooth;
}

   
   h4,  nav  .fas{
        color: #4285f4;
    }

    .card p{
      font-size: 15px;
    }

    .card  strong{
        color: #4285f4;
    }
     .fa-angle-right , .text-right
    {
        color: #4285f4;
    }

      nav  .fab {
        color: #4285f4;
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
      height: 400px!important; 
        }
        

         .fit-img {
      width: 100%;
      object-fit: cover;
      height: 300px!important; 
        }


      .fit {
    
         height: 65px!important; 
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


.description
{
 padding-bottom: 130px!important ;
  padding-top: 80px!important ;
}
    


  </style>

</head>

<body class="postpage-v3">

    <!--Main Navigation-->
    <header>
             <!-- Navbar -->
       @include('inc.nav')
      <!-- /.Navbar -->
    </header>

    <main>
      
       <!-- Main Container -->
    <div class="container mt-5 pt-3">

        <!--Navbar-->
        <nav class="navbar navbar-expand-lg navbar-dark primary-color mt-5 mb-5">

            <!-- Navbar brand -->
            <a class="font-weight-bold white-text mr-4" href="#">Categories</a>

            <!-- Collapse button -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent1"
                aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>

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
                            <a class="nav-link no-caret" href="{{asset('/admin/products_management')}}" id="" >Managements</a>
                           
                        </li>

                     @endif
                     @endif


                </ul>
                <!-- Links -->

                <!-- Search form -->
                <form class="search-form" role="search">
                    <div class="form-group md-form my-0 waves-light">
                        <input type="text" name="q2" value="{{$request->q2}}"  class="form-control" placeholder="Search">
                    </div>
                </form>
            </div>
            <!-- Collapsible content -->

        </nav>
        <!--/.Navbar-->

 <div class="row ">


            <!-- Content -->
     <div class="col-lg-12">
             @if(( $catalogs->count() == 0)) 
<h3 class="font-weight-bold">No Results</h3>

             @endif

              
        
                  <!-- Section: Products v.4 -->
<section class="text-center my-2">

  <!-- Grid row -->
  <div class="row">
  @foreach($catalogs as $catalog)
    <!-- Grid column -->
    <div class="col-lg-3 col-md-6 mb-lg-0 mb-4 mt-5 pt-2">
      <!-- Collection card -->
      <div class="card collection-card z-depth-1-half">
        <!-- Card image -->
        <div class="view zoom">
          <img src="{{asset('img/catalog')}}/{{$catalog->image}}" class="img-fluid img-responsive fit-img"
            alt="">
          <div class="stripe dark">
            <a class="media" href="{{asset('img/catalog')}}/{{$catalog->pdf}}">
              <p>Click To See PDF
                <i class="fas fa-angle-right"></i>
              </p>
            </a>
          </div>
        </div>
        <!-- Card image -->
      </div>
      <!-- Collection card -->
    </div>
    <!-- Grid column -->

    @endforeach

  

  

  </div>
  <!-- Grid row -->

</section>
<!-- Section: Products v.4 -->

              
                 


                    <!--Grid row-->
                    <div class="row justify-content-center mb-4 mt-5">

                        <!--Pagination -->
                           {{$catalogs->links()}}
                        <!--/Pagination -->

                    </div>
                    <!--Grid row-->    

            </div>
            <!-- /.Content -->

          


        </div>

    </div>
    <!-- /.Main Container -->

     <div class="container">
      <!--Section: Contact v.2-->
        @include('inc.contact_us')
<!--Section: Contact v.2-->
    </div>



    </main>










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

          <div class="footer-socials">

            <!--Facebook-->
            <a type="button" class="btn-floating primary-color">
              <i class="fab fa-facebook-f"></i>
            </a>
            <!--Dribbble-->
            <a type="button" class="btn-floating primary-color">
              <i class="fab fa-instagram"></i>
            </a>
            <!--Twitter-->
            <a type="button" class="btn-floating primary-color">
              <i class="fab fa-twitter"></i>
            </a>
            <!--Google +-->
            <a type="button" class="btn-floating primary-color ">
              <i class="fab fa-google-plus-g"></i>
            </a>
            <!--Linkedin-->

          </div>
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


 
@include('auth.login')

 

    <!-- SCRIPTS -->

    <!-- JQuery -->
    <script type="text/javascript" src="{{asset('js/jquery-3.3.1.min.js')}}"></script>

    <!-- Tooltips -->
    <script type="text/javascript" src="{{asset('js/popper.min.js')}}"></script>

    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>

    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="{{asset('js/mdb.min.js')}}"></script>
     <script type="text/javascript" src="{{asset('http://github.com/malsup/media/raw/master/jquery.media.js?v0.92')}}"></script> 
     

    <script>
        new WOW().init();

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

    <script>
      $('a.media').media({width:500, height:400});
    </script>



    <script src="{{asset('https://maps.google.com/maps/api/js')}}"></script>


</body>

</html>
