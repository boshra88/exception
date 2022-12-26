
  <!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Material Design Bootstrap Template</title>

    <!-- Font Awesome -->
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">

    <!-- Bootstrap core CSS -->
    <link href={{url("css/bootstrap.min.css")}} rel="stylesheet">

    <!-- Material Design Bootstrap -->
    <link href={{url("css/mdb.min.css")}} rel="stylesheet">

    
  <style>

 

   


    html,
    body,
    header,
    .view {
      height: 110%;
    }

    @media (max-width: 740px) {
      html,
      body,
      header,
      .view {
        height: 110%;
      }
    }

    @media (min-width: 800px) and (max-width: 850px) {
      html,
      body,
      header,
      .view  {
        height: 110%;
      }
    }

     .navbar.navbar-light .navbar-nav .nav-item .nav-link {
    font-size: 18px!important;
   }
   

    .intro-2 {
      background: url("{{asset('img/products/15.jpg')}}")no-repeat center center;
      background-size: cover;
    }



    .black, .picker__list-item:hover {
    background-color: #4285f4 !important;
}

.pink-text {
    color: #4285f4 !important;
}

 
   h4,  nav  .fas{
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
        

         .fit-img {
      width: 100%;
      object-fit: cover;
      height: 200px!important; 
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

 .rgba-gradient {
      background: -webkit-linear-gradient(98deg, rgba(22, 91, 231, 0.5), rgba(255, 32, 32, 0.5) 100%);
      background: -webkit-gradient(linear, 98deg, from(rgba(22, 91, 231, 0.5)), to(rgba(255, 32, 32, 0.5)));
      background: linear-gradient(to 98deg, rgba(22, 91, 231, 0.5), rgba(255, 32, 32, 0.5) 100%);
    }

    .card {
      background-color: rgba(255, 255, 255, 0.85);
    }

   

  </style>
<head>

<body>

  @include('inc.nav')



     <!--Intro Section-->
    <section class="view intro-2  " >
 
      <div class="mask h-100 d-flex justify-content-center align-items-center mask rgba-gradient">
        <div class="container mb-5">
          <div class="row sign_up">
            <div class="col-xl-6 col-lg-8  col-md-10 col-sm-12 mx-auto mt-5">

              <!--Form with header-->
              <div class="card wow fadeIn " data-wow-delay="0.3s">
                <div class="card-body">

                  <!--Header-->
                  <div class="form-header black">
                     <h3 class="mt-2 mb-2"> {{ __('Register') }}</h3>
                  </div>

                  <form  method="POST" action="{{ route('register') }}" autocomplete="off" id="registration" >
                     {{csrf_field()}}

                    <!--Body-->
                    <div class="md-form">
                      
                      <input type="text" id="name" class="form-control"  class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>
                      <label for="name">{{ __('Name') }}</label>

                      @if ($errors->has('name'))
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $errors->first('name') }}</strong>
                      </span>
                      @endif
                    </div>


                  
                      
                    <div class="md-form">
                      <input autocomplete="off" type="text" id="email" class="form-control" name="email">
                      <label for="email">{{ __('Email') }}</label>
                         @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong style="color:#dc3545;">{{ $errors->first('email') }}</strong>
                                    </span>
                       @endif

                    </div>

                    <div class="md-form">
                      <input autocomplete="off" type="password" id="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" value="{{ old('password') }}" >
                      <label  for="password">{{ __('Password') }}</label>
                    </div>

                    <div class="md-form">
                      <input type="password" id="password_confirmation" name="password_confirmation" class="form-control"  value="{{ old('password_confirmation') }}">
                        @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong style="color:#dc3545;">{{ $errors->first('password') }}</strong>
                                    </span>
                            @endif
                      <label for="password_confirmation">{{ __('Confirm Password') }}</label>

                     
        
                    </div>



                    <div class="text-center mb-2">
                      <button class="btn black btn-lg"> {{ __('Register') }}</button>
                    </div>
                  </form>

                  <!--Footer-->
                 

                </div>
              </div>
              <!--/Form with header-->

            </div>
          </div>
        </div>
      </div>
    </section>

    @include('auth.login')
 
  <!-- JQuery -->
    <script type="text/javascript" src={{url("js/jquery-3.3.1.min.js")}}></script>

    <!-- Tooltips -->
    <script type="text/javascript" src={{url("js/popper.min.js")}}></script>

    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src={{url("js/bootstrap.min.js")}}></script>

    <!-- MDB core JavaScript -->
    <script type="text/javascript" src={{url("js/mdb.min.js")}}></script>
     <script type="text/javascript" src={{url("http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/additional-methods.min.js")}}></script>
   <script src={{url("js/vaildetar.js")}}></script>


  <script >

$(document).ready(function() {
  $('.mdb-select').materialSelect();
  });


  $(document).ready(function(){
    
    // Initialize form validation on the registration form.
    // It has the name attribute "registration"
    $("#registration").validate({
      // Specify validation rules
      rules: {
        // The key name on the left side is the name attribute
        // of an input field. Validation rules are defined
        // on the right side
        username: "required",
        lastname: "required",
        email: {
          required: true,
          // Specify that email should be validated
          // by the built-in "email" rule
          email: true
        },
        password: {
          required: true,
          atLeastOneLowercaseLetter: true,
          atLeastOneUppercaseLetter: true,
          atLeastOneNumber: true,
          atLeastOneSymbol: true,
          minlength: 8,
          maxlength: 40
        },

        password_confirmation : {
          minlength : 5,
          equalTo : "#password"
          }
      },
       
     


      // Specify validation error messages
      messages: {
        username: "Please enter your firstname",
        lastname: "Please enter your lastname",
        password: {
          required: "Please provide a password",
          minlength: "Your password must be at least 5 characters long",
        
        },

        password_confirmation: "Please Enter Confirm Password Same as Password" ,
        email: "Please enter a valid email address"
      },

      
      // Make sure the form is submitted to the destination defined
      // in the "action" attribute of the form when valid
      submitHandler: function(form) {
        form.submit();
      }
    });
  });

 
       
  </script>

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




 

</body>
</html>