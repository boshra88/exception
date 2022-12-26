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

.modal-dialog.modal-notify .modal-body {
    color: red;
}

.md-form input.valid[type="date"], .md-form input.valid[type="date"]:focus, .md-form input.valid[type="datetime-local"], .md-form input.valid[type="datetime-local"]:focus, .md-form input.valid[type="email"], .md-form input.valid[type="email"]:focus, .md-form input.valid[type="number"], .md-form input.valid[type="number"]:focus, .md-form input.valid[type="password"], .md-form input.valid[type="password"]:focus, .md-form input.valid[type="search-md"], .md-form input.valid[type="search-md"]:focus, .md-form input.valid[type="search"], .md-form input.valid[type="search"]:focus, .md-form input.valid[type="tel"], .md-form input.valid[type="tel"]:focus, .md-form input.valid[type="text"], .md-form input.valid[type="text"]:focus, .md-form input.valid[type="time"], .md-form input.valid[type="time"]:focus, .md-form input.valid[type="url"], .md-form input.valid[type="url"]:focus, .md-form textarea.md-textarea.valid, .md-form textarea.md-textarea.valid:focus {
    border-bottom: 1px solid #4285F4 ;
    -webkit-box-shadow: 0 1px 0 0 #4285F4;
    box-shadow: 0 1px 0 0 #4285F4;
}

.nav .admin{
  font-size: 18px;
}
        

.logo {
    width: 201px !important;
    object-fit: cover;
    height: 50px !important;
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
  width: 100px; 
  overflow: hidden;
  text-overflow: clip; }

   tr a{ 
    
    color:#4285F4!important;
   
 }

td h5{
  width: 100px;
  font-size: 14px;
}

  .links{
     word-wrap: break-word;

  }


#modalUpdateForm  .md-form label {
    
        color: #4285F4;
        font-size: 20px;
    -webkit-transform: translateY(-140%);
    -ms-transform: translateY(-140%);
    transform: translateY(-140%);
}

#modalUpdateForm .md-form label.active {
    font-size: 14px;
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
                <h5 class="mb-0 font-weight-bold">Contacts </h5>
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
                                <th class="w">Company</th>
                                 <th class="w"> Telephone</th>
                                  <th class="w"> Country</th>
                                    <th class="w"> Link Message</th>
                                   <th class="w"> Message</th>
                            </tr>
                          </thead>
                          <tbody>
       @foreach($contacts as $contact)
          <tr>
            <td scope="row">{{ $contact->id}}</td>
            <td class="w" >{{ $contact->name}}</td>
            <td><p>{{ $contact->email}}</p></td>
          
            <td class="w"><p>{{ $contact->company}}</p></td>
             <td class="w"><p>{{ $contact->number}}</p></td>
              <td class="w"><p>{{ $contact->country}}</p></td>
               <td class="links"><h5><a href="{{ $contact->alias}}">{{ $contact->alias}}</a></h5></td>
               <td class="w"><p>{{ $contact->message}}</p></td>
            <td  class="w">
               <a class="blue-text" href="{{url("/admin/message")}}/{{$contact->id}}"><i class="fas fa-user"></i></a>
              <a class="red-text" data-toggle="modal" data-target="#modalConfirmDelete" data-contact="{{ $contact->id}}" ><i class="fas fa-times"></i></a>
            </td>
          </tr>
   @endforeach

          </tbody>
                        </table>
                      </div>
                    </div>
   <div class="row">
     <div class="col.md-12 d-flex justify-content-center text-center">
       {{$contacts->links()}}
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
        <form action="{{route('destroy_contact')}} " method="post">
                    {{ csrf_field() }}
                   {{ method_field('delete') }}
              
                    
                      
                        <input type="hidden" name="contact" id="contact" value="" />
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
         <h4 class="modal-title w-100 font-weight-bold white-text">Edit Catalog </h4>

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true" class="white-text">&times;</span>
        </button>
      </div>
      <div class="modal-body ">
        <form method="POST" action=" {{route('update_catalog')}} "   enctype="multipart/form-data">
                                  {{ csrf_field() }}
                                {{ method_field('PATCH') }}
                            
              <input type="hidden" name="cata_id" id="cata_id"  value="" />
        <div class="md-form ">
        
          <input type="text" id="form1" name="form1" class="form-control "  required> 
          <label data-error="wrong" data-success="right" for="form1">Tittle</label>
        </div>
        
        



  <div class="md-form">
  <div class="file-field">
    <div class="btn btn-primary btn-sm float-left">
      <span>Choose image</span>
      <input type="file" name="image"  id="Image">
    </div>
    <div class="file-path-wrapper">
      <input class="file-path validate" id="img2" type="text" placeholder="Upload image ">
    </div>
  </div>

 </div>      


  <div class="md-form">
  <div class="file-field">
    <div class="btn btn-primary btn-sm float-left">
      <span>Choose image</span>
      <input type="file"  name="pdf" id="pdf" >
    </div>
    <div class="file-path-wrapper">
      <input class="file-path validate" type="text"  id="pdf2"  placeholder="Upload image 2">
    </div>
  </div>
</div>

        



       

    
      <div class="modal-footer d-flex justify-content-center">
        <button type="submit" class="btn btn-unique">Send <i class="fas fa-paper-plane-o ml-1"></i></button>
      </div>
    </form>
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


  
<div class="modal fade" id="modalContactForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-lg modal-notify modal-info" role="document">
    <div class="modal-content">
        <div class="modal-header text-center">
         <h4 class="modal-title w-100 font-weight-bold white-text">Add Product</h4>

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true" class="white-text">&times;</span>
        </button>
      </div>
      <div class="modal-body ">
        <form method="POST" action=" {{route('add_catalog')}} "   method="POST" enctype="multipart/form-data">
                                @csrf 
                            

        <div class="md-form ">
        
          <input type="text" id="form34" name="form2" class="form-control " required> 
          <label data-error="wrong" data-success="right" for="form2">Tittle</label>
        </div>


  


  <div class="md-form">
  <div class="file-field">
    <div class="btn btn-primary btn-sm float-left">
      <span>Choose image</span>
      <input type="file" name="image" id="image" required>
    </div>
    <div class="file-path-wrapper">
      <input class="file-path validate"  type="text" placeholder="Upload image ">
    </div>
  </div>

 </div>      


  <div class="md-form">
  <div class="file-field">
    <div class="btn btn-primary btn-sm float-left">
      <span>Choose catalog </span>
      <input type="file"  id="pdf"  name="pdf" required>
    </div>
    <div class="file-path-wrapper">
      <input class="file-path validate" type="text" placeholder="Upload catalog">
    </div>
  </div>
</div>
    
      <div class="modal-footer d-flex justify-content-center">
        <button type="submit" class="btn btn-unique">Send <i class="fas fa-paper-plane-o ml-1"></i></button>
      </div>
    </form>
   </div>
    </div>
  </div>
</div>






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


  <!-- Custom scripts -->
  <script>
       

   
  </script>

  


    <script type="text/javascript">
  
  $('#modalConfirmDelete').on('show.bs.modal', function (event) {
 
   var button = $(event.relatedTarget) 
  var contact = button.data('contact')

  var modal = $(this)
  modal.find('.modal-footer #contact').val(contact)
 

})
</script>




</body>

</html>
