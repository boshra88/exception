<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Material Design Bootstrap Template</title>

   <link rel="stylesheet" href="{{asset('https://use.fontawesome.com/releases/v5.7.0/css/all.css')}}">

    <!-- Bootstrap core CSS -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Material Design Bootstrap -->
    <link href="{{asset('css/mdb.min.css')}}" rel="stylesheet">


     <style type="text/css">
  
       .navbar.navbar-light .navbar-nav .nav-item .nav-link {
    font-size: 18px!important;
   }
   
 html {
  scroll-behavior: smooth;
}

   
    h4, nav  .fas{
        color: #4285f4;
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
        

     .head {
      width: 100%;
      object-fit: cover;
      height: 500px!important; 
        }

         .fit-img {
      width: 100%;
      object-fit: cover;
      height: 200px!important; 
        }


      .fit {
    
         height: 175px!important; 
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

        <section>
            <div class="">
                <img src="{{asset('img/products')}}/{{$product_details->image}}" class="img-responsive head" style="width: 100%">
            </div>
        </section>

    </header>
    <!--Main Navigation-->

      <!--Main Layout-->
    <main>

        <div class="container-fluid mb-5">



            <!--Grid row-->
            <div class="row" style="margin-top: -50px;">

                <!--Grid column-->
                <div class="col-md-12 p-4">
                    <!--Card-->
                    <div class="card hoverable  jumbotron pb-5 mx-md-3">
                        <div class="card-body">

                            <div class="container">

                                <!--Section heading-->
                                <h2 class=" text-center h1 pt-4 mb-3">
                                    <strong> {{$product_details->tittle}}</strong>
                                </h2>

                            
                                <!--Grid row-->
                                <div class="row pt-2">

                                    <!--Grid column-->
                                    <div class="col-md-12 col-xl-12">
                                    

                                            <!--Grid row-->
                                            <div class="row mt-5 mt-5">

                                                <p class="dark-grey-text article">{{$product_details->body}}</p>

                                               
                                            </div>
                                            <!--Grid row-->
                                            

                                            <!-- Section: Blog v.1 -->
<section class="my-5  mt-5">


  <!-- Grid row -->
  <div class="row description">

    <!-- Grid column -->
    <div class="col-lg-6">

      <!-- Featured image -->
      <div class="view overlay rounded z-depth-2">
        <img class="img-fluid img-responsive fit-image" src="{{asset('img/products')}}/{{$product_details->image_1}}" alt="Sample image">
        <a>
          <div class="mask rgba-white-slight"></div>
        </a>
      </div>

    </div>
    <!-- Grid column -->

     <!-- Grid column -->
    <div class="col-lg-6">
    
      <!-- Post title -->
      <h4 class="font-weight-bold mb-3">{{$product_details->tittle_1}}</h4>
      <!-- Excerpt -->
      <p> {{$product_details->body_1}}</p>
      <!-- Post data -->
     
     

    </div>
    <!-- Grid column -->
   

  </div>
  <!-- Grid row -->


 

  <!-- Grid row -->
  <div class="row ">

    <!-- Grid column -->
    <div class="col-lg-6">
    
      <!-- Post title -->
      <h4 class="font-weight-bold mb-3">{{$product_details->tittle_2}}</h4>
      <!-- Excerpt -->
      <p>{{$product_details->body_2}}</p>
      <!-- Post data -->
    
    </div>
    <!-- Grid column -->

    <!-- Grid column -->
    <div class="col-lg-6">

      <!-- Featured image -->
      <div class="view overlay rounded z-depth-2">
        <img class="img-fluid img-responsive fit-image" src="{{asset('img/products')}}/{{$product_details->image_2}}" alt="Sample image">
        <a>
          <div class="mask rgba-white-slight"></div>
        </a>
      </div>

    </div>
    <!-- Grid column -->

  </div>
  <!-- Grid row -->



 

</section>
<!-- Section: Blog v.1 -->

                                          

 </div>
 <!--/Grid column-->

    </div>
    <!--/Grid row-->
                                
         
          

                

                    </div>
                    <!--/Card-->
                </div>
                <!--/Grid column-->

            </div>
            <!--/Grid row-->
             <div class="container">
      <!--Section: Contact v.2-->
        @include('inc.contact_us')
      
<!--Section: Contact v.2-->
    </div>


          </div>

    </main>
    <!--Main Layout-->
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

    <script src="https://maps.google.com/maps/api/js"></script>


</body>

</html>
