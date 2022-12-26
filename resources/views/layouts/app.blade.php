<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  
  <style>



    .hide {
      display: none;
    }
    .pink {
      background-color: #ffb6c1!important;
    }

    .pink-text {
      color: #ffb6c1!important;
    }
    .md-form input[type=text]:focus:not([readonly]), .md-form input[type=password]:focus:not([readonly]) {
      border-bottom: 1px solid #ffb6c1!important;
      box-shadow: 0 1px 0 0 #ffb6c1!important;
    }

    .md-form input[type=text]:focus:not([readonly])+label, .md-form input[type=password]:focus:not([readonly])+label {
      color:#ffb6c1!important;
    }



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

    .intro-2 {
      background: url("../imgs/8.jpg")no-repeat center center;
      background-size: cover;
    }
      
    .card {
      box-shadow: 0 2px 5px 0 rgba(0,0,0,.16),0 2px 10px 0 rgba(0,0,0,.12);
    }
    
      
    h6 {
        line-height: 1.7;
    }
    


    .card {
    margin-bottom: 3rem ;

    }

    

    .md-form input[type=text]:focus:not([readonly]),
    .md-form input[type=password]:focus:not([readonly]) {
        border-bottom: 1px solid #8EDEF8;
        box-shadow: 0 1px 0 0 #8EDEF8;
      
    }
    
    .md-form input[type=password]:focus:not([readonly])+label {
        color: #8EDEF8;
        margin-bottom: 30px;
    }

    .md-form lable.active
    {
      visibility: hidden;
    }

    .md-form .form-control {
        color: #000;
    }

    .sign_up
    {
    
      padding-top: 15rem ;
      padding-bottom: 7rem!important ;
      

    }

    form .error {
      color: red;
      margin-bottom:2rem;
    font-size: 0.8rem;
    }
      

    .intl-tel-input {
      width: 95% !important;
      position: relative;
      display: inline-block;
    }

    .md-form input[type=text]:focus:not([readonly])+label{
      color: red;
          
    }

    input:focus + .field-validation-error { display: none; }


  </style>
<head>

<body>

  



     <!--Intro Section-->
    <section class="view intro-2  " >
 
      <div class="mask h-100 d-flex justify-content-center align-items-center">
        <div class="container mb-5">
          <div class="row sign_up">
            <div class="col-xl-6 col-lg-8  col-md-10 col-sm-12 mx-auto mt-5">

              <!--Form with header-->
              <div class="card wow fadeIn" data-wow-delay="0.3s">
                <div class="card-body">

                  <!--Header-->
                  <div class="form-header black">
                    <h3> {{ __('Register') }}</h3>
                  </div>

                  <form  method="POST" action="{{ route('register') }}" autocomplete="off" id="registration" >
                    @csrf

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
                      <input autocomplete="off" type="text" id="username" class="form-control" name="username">
                      <label  for="username">{{ __('Username') }}</label>
                    </div>
                      
                    <div class="md-form">
                      <input autocomplete="off" type="text" id="email" class="form-control" name="email">
                      <label for="email">{{ __('Email') }}</label>
                    </div>

                    <div class="md-form">
                      <input autocomplete="off" type="password" id="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password"  >
                      <label  for="password">{{ __('Password') }}</label>
                    </div>

                    <div class="md-form">
                      <input type="password" id="password_confirmation" name="password_confirmation" class="form-control">
                      <label for="password_confirmation">{{ __('Confirm Password') }}</label>
                    </div>


                    <div  class="md-form">
                      <select class="mdb-select md-form"  id="country" name ="country"></select> 
                    </div>
                    <div  class="md-form">
                      <select disabled class="mdb-select md-form"  name ="city" id ="state"></select>
                    </div>




                    <div class="md-form" >
                      
                      <input type="text" id="phone"  type="tel" class="form-control" name="tel1">
                      <span id="valid-msg" class="hide">✓</span>
                      <span id="error-msg" class="hide"></span>
                    </div>
 
                    

                    <div class="text-center mb-2">
                      <button class="btn black btn-lg"> {{ __('Register') }}</button>
                    </div>
                  </form>

                  <!--Footer-->
                  <div class="modal-footer pt-2 mb-2 mt-2">
                    <p class="font-small grey-text d-flex justify-content-end">Have an account? <a href={{url('login')}} class="pink-text ml-1">
                    Log in</a></p>
                  </div>

                </div>
              </div>
              <!--/Form with header-->

            </div>
          </div>
        </div>
      </div>
    </section>

 <script type="text/javascript" src={{url("http://www.technicalkeeda.com/js/javascripts/plugin/jquery.js")}}></script>
 <script type="text/javascript" src={{url("http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js")}}></script>
 <script type="text/javascript" src={{url("http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/additional-methods.min.js")}}></script>
 <script src={{url("js/vaildetar.js")}}></script>
 <script src={{url("js/countries.js")}}></script>


<script src={{url("js/intlTelInput.js")}}></script>
<script src={{url("js/countery.js")}}></script>

<script>
    populateCountries("country", "state"); // first parameter is id of country drop-down and second parameter is id of state drop-down
  var input = document.querySelector("#phone");
  window.intlTelInput(input, {
    utilsScript: '{{url("js/utils.js")}}',
  });
</script>



  <script>
  


$( document ).ready(function() {

  var input_selector = 'input[type=text], input[type=password], input[type=email], input[type=url], input[type=tel], input[type=number], input[type=search], textarea';
  $(input_selector).each(function (index, element) {
    if (true) {
      $(this).siblings('label').addClass('active');
    } else {
      $(this).siblings('label').removeClass('active');
    }
  });
});

var input = document.querySelector("#phone"),
errorMsg = document.querySelector("#error-msg"),
validMsg = document.querySelector("#valid-msg");
var flag = false;
// here, the index maps to the error code returned from getValidationError - see readme
var errorMap = [ "Invalid number", "Invalid country code", "Too short", "Too long", "Invalid number"];

// initialise plugin
var iti = window.intlTelInput(input, {
utilsScript: '{{url("js/utils.js")}}',
});

var reset = function() {
input.classList.remove("error");

errorMsg.classList.add("hide");
validMsg.classList.add("hide");

};

// on blur: validate
input.addEventListener('blur', function() {
reset();
if (input.value.trim()) {
  if (iti.isValidNumber()) {
    validMsg.classList.remove("hide");
  } else {
    input.classList.add("error");
    var errorCode = iti.getValidationError();
    $('#phone').val(errorMap[errorCode]);
    errorMsg.classList.remove("hide");

  }
}
});


// on keyup / change flag: reset
input.addEventListener('change', reset);
input.addEventListener('keyup', reset);
  new WOW().init();


    </script>


</body>
</html>