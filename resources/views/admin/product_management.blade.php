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

th ,tr
{
  width: 120px;
  white-space: nowrap; 
}

  tr p{ white-space: nowrap; 
  width: 80px; 
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
.w{
  width: 15%;

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
                
                  <a type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalContactForm">Add Product</a>

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
                <h5 class="mb-0 font-weight-bold"> All Products</h5>
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
                              <th class="w">Tittle</th>
                              <th class="w">Description</th>
                              <th class="w">Image</th>
                              <th class="w">Content</th>
                               <th class="w">Tittle 1</th>
                                <th class="w">Tittle 2</th>
                                 <th class="w">Content 1</th>
                                  <th class="w">Content 2</th>
                                   <th class="w">Image 1</th>
                                    <th class="w">Image 2</th>
                                     <th class="w">Action</th>
                            </tr>
                          </thead>
                          <tbody>
       @foreach($products as $product)
          <tr>
          
            <td scope="row">{{$product->id}}</td>
            <td><p>{{$product->tittle}}</p></td>
            <td><p>{{$product->description}}</p></td>
            <td><p>{{$product->image}}</p></td>
              <td><p>{{$product->body}}</p></td>
              <td><p>{{$product->tittle_1}}</p></td>
                <td><p>{{$product->tittle_2}}</p></td>
             <td><p>{{$product->body_1}}</p></td>
             <td><p>{{$product->body_2}}</p></td>
             <td><p>{{$product->image_1}}</p></td>
             <td><p>{{$product->image_2}}</p></td>
            <td>
            

               <a class="teal-text"     data-toggle="modal" data-target="#modalUpdateForm"  data-tittle="{{$product->tittle}}"  data-tittle1="{{$product->tittle_1}}"   data-tittle2="{{$product->tittle_2}}" data-body="{{$product->body}}"  
              data-body1="{{$product->body_1}}" data-body2="{{$product->body_2}}"
              data-description="{{$product->description}}"data-image1="{{$product->image_1}}" 
                data-image2="{{$product->image_2}}"  data-image="{{$product->image}}" data-id="{{$product->id}}" >
               <i class="fas fa-pencil-alt"  ></i></a>
                


              <a class="red-text" data-toggle="modal" data-target="#modalConfirmDelete" data-delet="{{$product->id}}" ><i class="fas fa-times"></i></a>
            </td>
          </tr>
   @endforeach

          </tbody>
                        </table>
                      </div>
                    </div>
   <div class="row">
     <div class="col.md-12 d-flex justify-content-center text-center">
       {{$products->links()}}
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
        <form action="{{route('destroy_product')}} " method="post">
                    {{ csrf_field() }}
                   {{ method_field('delete') }}
              
                    
                      
                        <input type="hidden" name="del_pro" id="del_pro" value="" />
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
         <h4 class="modal-title w-100 font-weight-bold white-text">Edit Product </h4>

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true" class="white-text">&times;</span>
        </button>
      </div>
      <div class="modal-body ">
        <form method="POST" action=" {{route('update_product')}} " id="update"  enctype="multipart/form-data">
                                  {{ csrf_field() }}
                                {{ method_field('PATCH') }}
                            
              <input type="hidden" name="pro_id" id="pro_id"  value="" />
        <div class="md-form ">
        
          <input type="text" id="form34" name="form34" class="form-control "  required> 
          <label  for="form34">Tittle</label>
        </div>

        <div class="md-form ">
        
          <input type="text" id="form29" name="form29" class="form-control" required>
          <label  for="form29">Description</label>
        </div>

        <div class="md-form ">
        
          <input type="text" id="form32" name="form32" class="form-control" required>
          <label  for="form32">Tittle 1</label>
        </div>


        <div class="md-form ">
        
          <input type="text" id="form33" name="form33" class="form-control" required>
          <label for="form33">Tittle 2</label>
        </div>

         <div class="md-form">
        
          <textarea type="text" id="form7" name="form7" class="md-textarea form-control" rows="4"required></textarea>
          <label  for="form7">Content</label>
        </div>

         <div class="md-form">
      
          <textarea type="text" id="form8" name="form8" class="md-textarea form-control" rows="4"required></textarea>
          <label  for="form8">Content 1</label>
        </div>
        
         <div class="md-form">
        
          <textarea type="text" id="form9" name="form9" class="md-textarea form-control" rows="4" required></textarea>
          <label  for="form9">Content 2</label>
        </div>


  


  <div class="md-form">
  <div class="file-field">
    <div class="btn btn-primary btn-sm float-left">
      <span>Choose image</span>
      <input type="file" name="img" accept="image/x-png,image/gif,image/jpeg" >
    </div>
    <div class="file-path-wrapper">
      <input class="file-path validate" name="imge"   id="img" type="text" placeholder="Upload image ">
    </div>
  </div>
 </div>    



  <div class="md-form">
  <div class="file-field">
    <div class="btn btn-primary btn-sm float-left">
      <span>Choose image</span>
      <input type="file"    name="image_1"  accept="image/x-png,image/gif,image/jpeg" >
    </div>
    <div class="file-path-wrapper">
      <input class="file-path validate" type="text"  name="imge1" id="img1" placeholder="Upload image 1">
    </div>
  </div>
</div>

  <div class="md-form">
  <div class="file-field">
    <div class="btn btn-primary btn-sm float-left">
      <span>Choose image</span>
      <input type="file"  name="image_2" accept="image/x-png,image/gif,image/jpeg" >
    </div>
    <div class="file-path-wrapper">
      <input class="file-path validate" type="text" name="imge2" id="img2"  placeholder="Upload image 2">
    </div>
  </div>
</div>

        
  



       

    
      <div class="modal-footer d-flex justify-content-center">
        <button type="submit" class="btn btn-unique">Update <i class="fas fa-paper-plane-o ml-1"></i></button>
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
        <form method="POST" action=" {{route('add_product')}} " id="add"  method="POST" enctype="multipart/form-data">
                                @csrf 
                            

        <div class="md-form ">
        
          <input type="text" id="form34" name="form34" class="form-control " required> 
          <label  for="form34">Tittle</label>
        </div>

        <div class="md-form ">
        
          <input type="text" id="form29" name="form29" class="form-control" required>
          <label  for="form29">Description</label>
        </div>

        <div class="md-form ">
        
          <input type="text" id="form32" name="form32" class="form-control" required>
          <label  for="form32">Tittle 1</label>
        </div>


        <div class="md-form ">
        
          <input type="text" id="form33" name="form33" class="form-control" required>
          <label  for="form33">Tittle 2</label>
        </div>

         <div class="md-form">
        
          <textarea type="text" id="form7" name="form7" class="md-textarea form-control" rows="4"required></textarea>
          <label  for="form7">Content</label>
        </div>

         <div class="md-form">
      
          <textarea type="text" id="form8" name="form8" class="md-textarea form-control" rows="4"required></textarea>
          <label  for="form8">Content 1</label>
        </div>
        
         <div class="md-form">
        
          <textarea type="text" id="form9" name="form9" class="md-textarea form-control" rows="4" required></textarea>
          <label  for="form9">Content 2</label>
        </div>


  


  <div class="md-form">
  <div class="file-field">
    <div class="btn btn-primary btn-sm float-left">
      <span>Choose image</span>
      <input type="file" name="img" accept="image/x-png,image/gif,image/jpeg" required>
    </div>
    <div class="file-path-wrapper">
      <input class="file-path validate" name="imge"   id="img3" type="text" placeholder="Upload image ">
    </div>
  </div>
 </div>    



  <div class="md-form">
  <div class="file-field">
    <div class="btn btn-primary btn-sm float-left">
      <span>Choose image</span>
      <input type="file"    name="image_1" accept="image/x-png,image/gif,image/jpeg" required >
    </div>
    <div class="file-path-wrapper">
      <input class="file-path validate" type="text"  name="imge4" id="img1" placeholder="Upload image 1">
    </div>
  </div>
</div>

  <div class="md-form">
  <div class="file-field">
    <div class="btn btn-primary btn-sm float-left">
      <span>Choose image</span>
      <input type="file"  name="image_2" accept="image/x-png,image/gif,image/jpeg" required >
    </div>
    <div class="file-path-wrapper">
      <input class="file-path validate" type="text" name="imge5" id="img2"  placeholder="Upload image 2">
    </div>
  </div>
</div>

        
  





       

    
      <div class="modal-footer d-flex justify-content-center">
        <button type="submit" class="btn btn-unique">Add <i class="fas fa-paper-plane-o ml-1"></i></button>
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
  
  $('#modalUpdateForm').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) 
  var tittle = button.data('tittle')
  var description = button.data('description')
  var tittle1 = button.data('tittle1')
  var tittle2 = button.data('tittle2')
  var body = button.data('body')
  var body1 = button.data('body1')
  var body2 = button.data('body2')
  var image = button.data('image')
  var image1 = button.data('image1')
  var image2 = button.data('image2')
   var id = button.data('id')

  var modal = $(this)
  modal.find('.modal-body #form34').val(tittle)
  modal.find('.modal-body #form29').val(description)
  modal.find('.modal-body #form32').val(tittle1)
  modal.find('.modal-body #form33').val(tittle2)
   modal.find('.modal-body #form7').val(body)
   modal.find('.modal-body #form8').val(body1)
   modal.find('.modal-body #form9').val(body2)
    modal.find('.modal-body #img').val(image)
    modal.find('.modal-body #img1').val(image1)
    modal.find('.modal-body #img2').val(image2)
    modal.find('.modal-body #pro_id').val(id)

})
</script>



    <script type="text/javascript">
  
  $('#modalConfirmDelete').on('show.bs.modal', function (event) {
 
   var button = $(event.relatedTarget) 
  var delet = button.data('delet')

  var modal = $(this)
  modal.find('.modal-footer #del_pro').val(delet)
 

})
</script>



 

</body>

</html>
