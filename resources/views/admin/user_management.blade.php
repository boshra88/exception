<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Material Design Bootstrap</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
  <!-- Material Design Bootstrap -->
  <link rel="stylesheet" href="{{asset('css/mdb.min.css')}}">
  <link href="{{asset('https://fonts.googleapis.com/css?family=Libre+Baskerville&display=swap" rel="stylesheet')}}"> 
  <!-- Your custom styles (optional) -->
  <style>

  .collapsible li .collapsible-header {
 font-size: 17px!important;
 font-family: 'Libre Baskerville', serif;

  }

  .nav .admin{
  font-size: 18px;
}
     
     .btn-lg
     {
      background-color: #4285F4!important;
     }   

  .logo {
    width: 201px !important;
    object-fit: cover;
    height: 50px !important;
}

  .card.card-cascade.narrower h5
  {
    font-size: 27px!important;
  }

  .modal span 
  {
    font-size: 14px!important;
  }


 .modal-dialog.modal-notify .modal-body {
    color: red;
}

.md-form input.valid[type="date"], .md-form input.valid[type="date"]:focus, .md-form input.valid[type="datetime-local"], .md-form input.valid[type="datetime-local"]:focus, .md-form input.valid[type="email"], .md-form input.valid[type="email"]:focus, .md-form input.valid[type="number"], .md-form input.valid[type="number"]:focus, .md-form input.valid[type="password"], .md-form input.valid[type="password"]:focus, .md-form input.valid[type="search-md"], .md-form input.valid[type="search-md"]:focus, .md-form input.valid[type="search"], .md-form input.valid[type="search"]:focus, .md-form input.valid[type="tel"], .md-form input.valid[type="tel"]:focus, .md-form input.valid[type="text"], .md-form input.valid[type="text"]:focus, .md-form input.valid[type="time"], .md-form input.valid[type="time"]:focus, .md-form input.valid[type="url"], .md-form input.valid[type="url"]:focus, .md-form textarea.md-textarea.valid, .md-form textarea.md-textarea.valid:focus {
    border-bottom: 1px solid #4285F4 ;
    -webkit-box-shadow: 0 1px 0 0 #4285F4;
    box-shadow: 0 1px 0 0 #4285F4;
}

  .narrower {
    padding-bottom: 30px;
  }
section {
margin-bottom: 70px!important;

}
  .modal-dialog.modal-notify.modal-info .modal-header {
    background-color: #4285F4!important;
}

  .mdb-color.lighten-3
{
  background-color: #4285F4!important;
}

.btn-unique {
    background-color: #4285F4!important;
  }

.w
{
  width: 800px;
  white-space: nowrap; 
}

  tr p{ white-space: nowrap; 
  width: 130px; 
  overflow: hidden;
  text-overflow: clip; }


#modalUpdateForm  .md-form label {
    
        color: #4285F4;
        font-size: 16px;
    -webkit-transform: translateY(-140%);
    -ms-transform: translateY(-140%);
    transform: translateY(-140%);
}

#modalUpdateForm .md-form label.active {
    font-size: 16px;
    }

#modalUpdateForm .md-form textarea.md-textarea {
    overflow-y: hidden;
    padding: 1.5rem 0;
    resize: none;
}


  </style>

</head>

<body class="fixed-sn white-skin">

  <!-- Main Navigation -->
  <header>

  @include('inc.admin_nav')
   
  </header>
  <!-- Main Navigation -->

  <!-- Main layout -->
  <main>
    <div class="">

      <!-- Section: Customers -->
      <section class="section team-section">

        <!-- First row -->
        <div class="row">
           @include('inc.message')
            @if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
    @endif

          <!-- First column -->
          <div class="col-md-12">

            <div class="row mb-3">
              <div class="col-md-9">
                
                  <a type="button" class="btn btn-primary "  data-toggle="modal" data-target="#modalContactForm">Add User</a>

              </div>
              <div class="col-md-3">
                <form>
                <div class="md-form">
                  <input placeholder="Search"  type="text" name="q" value="{{$request->q}}" class="form-control">
                </div>
             </form>    
              </div>
            </div>
            <div class="row">
              <div class=" mb-1">
                <!-- Tabs -->
                <div class="card card-cascade narrower mb-5 ">
                  <!-- Nav tabs -->
                   <!-- Card image -->
              <div class="view view-cascade gradient-card-header mdb-color lighten-3 mb-4">
                <h5 class="mb-0 font-weight-bold">Users</h5>
              </div>
              <!-- Card image -->
                  <!-- Tab panels -->
                  <div class="">
                    <!-- Panel 1 -->
                    <div class="tab-pane fade show active" id="panel83" role="tabpanel">
                      <div class="table-responsive">
                        <table class="table">
                          <thead>
                            <tr>
                              <th>#</th>
                              <th class="w">Name</th>
                               <th class="w">Email </th>
                                 <th class="w">Action</th>
                            </tr>
                          </thead>
                          <tbody>
       @foreach($users as $user)
          <tr>
          
            <td scope="row">{{ $user->id}}</td>
            <td><p>{{ $user->name}}</p></td>
          
            <td><p>{{ $user->email}}</p></td>
          
            <td>
            

               <a class="teal-text"     data-toggle="modal" data-target="#modalUpdateForm"  
                 data-name="{{$user->name}}"  
                 data-user_id="{{ $user->id}}" data-email="{{ $user->email}}" >
               <i class="fas fa-pencil-alt"  ></i></a>
                


              <a class="red-text" data-toggle="modal" data-target="#modalConfirmDelete" data-user="{{ $user->id}}" ><i class="fas fa-times"></i></a>
            </td>
          </tr>
   @endforeach

          </tbody>
                        </table>
                      </div>
                    </div>
   <div class="row">
     <div class="col.md-12 d-flex justify-content-center text-center">
       {{$users->links()}}
     </div>
   </div>
                 
                    <!-- /.Panel 1 -->
                  
                        <!--Modal: modalConfirmDelete-->
<div class="modal fade" id="modalConfirmDelete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-sm modal-notify modal-danger" role="document">
    <!--Content-->
    <div class="modal-content text-center">
      <!--Header-->
      <div class="modal-header d-flex justify-content-center">
        <p class="heading">Are you sure?</p>
      </div>

      <!--Body-->
      <div class="modal-body">

        <i class="fas fa-times fa-4x animated rotateIn"></i>

      </div>

      <!--Footer-->
      <div class="modal-footer flex-center">
        <form action="{{route('destroy_user')}} " method="post">
                    {{ csrf_field() }}
                   {{ method_field('delete') }}
              
                    
                      
                        <input type="hidden" name="user" id="user" value="" />
        <button type="submit" class="btn  btn-outline-danger">Yes</button>
      </form>
        <a type="button" class="btn  btn-danger waves-effect" data-dismiss="modal">No</a>
      </div>
    </div>
    <!--/.Content-->
  </div>
</div>
<!--Modal: modalConfirmDelete-->
   
    
  
<div class="modal fade" id="modalUpdateForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-lg modal-notify modal-info" role="document">
    <div class="modal-content">
        <div class="modal-header text-center">
         <h4 class="modal-title w-100 font-weight-bold white-text">Edit User </h4>

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true" class="white-text">&times;</span>
        </button>
      </div>
      <div class="modal-body ">
         <form  method="POST" action="{{ route('update_user') }}" autocomplete="off" id="registration" >
                     {{csrf_field()}}
                      {{ method_field('PATCH') }}

                   <input type="hidden" name="user_id" id="user_id"  value="" />
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
                      <button class="btn  btn-lg"> {{ __('Register') }}</button>
                    </div>
                  </form>

                  <!--Footer-->
                 
        
   </div>
    </div>
  </div>
</div>

                  </div>
                  <!-- /.Tabs -->
                </div>
              </div>
            </div>

          </div>
          <!-- First column -->

         

        </div>
        <!-- First row -->

      </section>
      <!-- Section: Customers -->

    </div>
  </main>
  <!-- Main layout -->









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

 
  <!-- Custom scripts -->

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
        name: "required",
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
        name: "Please enter your firstname",
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
    // SideNav Initialization
    $(".button-collapse").sideNav();

    var container = document.querySelector('.custom-scrollbar');
    Ps.initialize(container, {
      wheelSpeed: 2,
      wheelPropagation: true,
      minScrollbarLength: 20
    });

   
  </script>
    


  <!-- Custom scripts -->
  <script>
       new WOW().init();

   
  </script>

    <script type="text/javascript">
  
  $('#modalUpdateForm').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) 
  var name = button.data('name')
 
  var email = button.data('email')
   var user_id = button.data('user_id')

  var modal = $(this)
  modal.find('.modal-body #name').val(name)
 
   modal.find('.modal-body #email').val(email)

   
    modal.find('.modal-body #user_id').val(user_id)

})
</script>



    <script type="text/javascript">
  
  $('#modalConfirmDelete').on('show.bs.modal', function (event) {
 
   var button = $(event.relatedTarget) 
  var user = button.data('user')

  var modal = $(this)
  modal.find('.modal-footer #user').val(user)
 

})
</script>











</body>

</html>
