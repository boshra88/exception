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

 
   
   h4,  nav  .fas{
        color: #4285f4!important;
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
 min-height: : 17rem!important;

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
      @include('inc.nav')

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
                            <a class="nav-link no-caret" href="{{asset('/all_products')}}" id="" >All Products</a>
                           
                        </li>
                       @if(Auth::check())
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
                        <input type="text" name="qq" value="{{$request->qq}}" class="form-control" placeholder="Search">
                    </div>
                </form>
            </div>
            <!-- Collapsible content -->

        </nav>
        <!--/.Navbar-->


        <div class="row pt-4">


            <!-- Content -->
            <div class="col-lg-12">

                  @if(( $products->count() == 0)) 
<h3 class="font-weight-bold">No Results</h3>

             @endif


                <!-- Products Grid -->

           <section class="section pt-4">
                    <!--Grid row-->
            <div class="row single-post mb-4">

            @foreach($products as $product)
              <!--Grid column-->
               <div class="col-md-4 mt-5">

                <!--Card-->
                <div class="card card-cascade narrower card-ecommerce">

                  <!--Card image-->
                  <div class="view view-cascade overlay zoom">
                    <img src="{{asset('img/products')}}/{{$product->image}}" class="card-img-top fit-img"
                      alt="">
                    <a>
                      <div class="mask rgba-white-slight"></div>
                    </a>
                  </div>
                  <!--Card image-->

                  <!--Card content-->
                  <div class="card-body card-body-cascade text-center no-padding">
                    <!--Category & Title-->
                    <a href="" class="text-muted">
                    
                    </a>
                    <h4 class="card-title">
                      <strong>
                        <a href="{{url('products')}}/{{$product->id}}">{{$product->tittle}}</a>
                      </strong>
                      <hr>

                    </h4>

                    <!--Description-->
                    <p class="card-text"> {{$product->description}}
                    </p>

                    <!--Card footer-->
                  
                       <p class="text-right mb-0 font-small font-weight-bold "><a href="{{url('products')}}/{{$product->id}}">read more <i class="fas fa-angle-right pb-0 mb-0"></i></a></p>
                

                  </div>
                  <!--Card content-->

                </div>
                <!--Card-->

              </div>
              <!--Grid column-->
             @endforeach

             


                
               




                
               
               </div>
                
                 


                    <!--Grid row-->
                   <div class="d-flex justify-content-center">
    {!! $blogs->links() !!}
</div>
                    <!--Grid row-->
                </section>
                <!-- /.Products Grid -->

            </div>
            <!-- /.Content -->

          


        </div>

    </div>
  


    <div class="container">
      <!--Section: Contact v.2-->
        @include('inc.contact_us')
<!--Section: Contact v.2-->
    </div>


  </main>

    <!-- /.Main Container -->


    










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
    <script type="text/javascript">
      var minHeight = parseInt(0);
$(".narrower").each(function(){
  if($(this).outerHeight() > minHeight){
    minHeight = $(this).outerHeight();
  }
});
$('.narrower').css('height', minHeight);
    </script>

    <script src="https://maps.google.com/maps/api/js"></script>


</body>

</html>
