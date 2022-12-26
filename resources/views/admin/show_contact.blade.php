<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Material Design Bootstrap</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('https://use.fontawesome.com/releases/v5.7.0/css/all.css')}}">
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
        

.logo {
    width: 201px !important;
    object-fit: cover;
    height: 50px !important;
}

  label{
      color: #4285f4!important;
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
    <div class="container-fluid">

      <!-- Section: Team v.1 -->
      <section class="section team-section">

        <!-- Grid row -->
        <div class="row text-center">

          <!-- Grid column -->
          <div class="col-md-12 mb-4">

            <!-- Card -->
            <div class="card card-cascade cascading-admin-card user-card">

              <!-- Card Data -->
              <div class="admin-up d-flex justify-content-start">
                <i class="fas fa-users info-color py-4 mr-3 z-depth-2"></i>
                <div class="data">
                  <h5 class="font-weight-bold dark-grey-text">Edit Profile - <span class="text-muted">Complete your
                      profile</span></h5>
                </div>
              </div>
              <!-- Card Data -->

              <!-- Card content -->
              <div class="card-body card-body-cascade">

                <!-- Grid row -->
                <div class="row">

                  <!-- Grid column -->
                  <div class="col-lg-6">

                    <div class="md-form form-sm mb-0">
                      <input type="text" id="form12" class="form-control form-control-sm" value="{{$contact->name}}">
                      <label for="form12" class="">Username</label>
                    </div>

                  </div>
                  <!-- Grid column -->

                  <!-- Grid column -->
                  <div class="col-lg-6">

                    <div class="md-form form-sm mb-0">
                      <input type="text" id="form3" class="form-control form-control-sm" value="{{$contact->email}}">
                      <label for="form3" class="">Email address</label>
                    </div>

                  </div>
                  <!-- Grid column -->

                  <!-- Grid column -->
                  <div class="col-lg-6">

                    <div class="md-form form-sm mb-0">
                      <input type="text" id="form4" class="form-control form-control-sm" value="{{$contact->company}}">
                      <label for="form4" class="disabled">Company</label>
                    </div>

                  </div>
                  <!-- Grid column -->

                </div>
                <!-- Grid row -->

                <!-- Grid row -->
                <div class="row">

                  <!-- Grid column -->
                  <div class="col-md-6">

                    <div class="md-form form-sm mb-0">
                      <input type="text" id="form5" class="form-control form-control-sm" value="{{$contact->number}}">
                      <label for="form5" class="">Telephone</label>
                    </div>

                  </div>
                  <!-- Grid column -->

                  <!-- Grid column -->
                  <div class="col-md-6">

                    <div class="md-form form-sm mb-0">
                      <input type="text" id="form5" class="form-control form-control-sm" value="{{$contact->country}}">
                      <label for="form5" class="">Country</label>
                    </div>

                  </div>
                  <!-- Grid column -->

                </div>
                <!-- Grid row -->

                <!-- Grid row -->
                <div class="row">

                  <!-- Grid column -->
                  <div class="col-md-12">

                    <div class="md-form form-sm mb-0">
                      <input type="url" id="form6" class="form-control form-control-sm" value="{{$contact->alias}}">
                      <label for="form6" class="">Link Message</label>
                    </div>

                  </div>
                  <!-- Grid column -->

                </div>
                <!-- Grid row -->

              

                <!-- Grid row -->
                <div class="row">

                  <!-- Grid column -->
                  <div class="col-md-12">

                  

                    <!-- Basic textarea -->
                    <div class="md-form mb-0">
                      <textarea type="text" id="form10" class="md-textarea form-control" rows="3"
                     placeholder="{{$contact->message}}" ></textarea>
                      <label for="form10">Message</label>
                    </div>

                  </div>
                  <!-- Grid column -->

                </div>
                <!-- Grid row -->

              </div>
              <!-- Card content -->

            </div>
            <!-- Card -->

          </div>
          <!-- Grid column -->

       

        </div>
        <!-- Grid row -->

      </section>
      <!-- Section: Team v.1 -->

    </div>
  </main>
  <!-- Main layout -->


  <!-- SCRIPTS -->
  <!-- JQuery -->
  <script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="{{asset('js/popper.min.js')}}"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="{{asset('js/bootstrap.js')}}"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="{{asset('js/mdb.min.js')}}"></script>
  <!-- Custom scripts -->
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
</body>

</html>
