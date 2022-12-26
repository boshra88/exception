<!-- Modal -->
<div class="modal fade" id="elegantModalForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <!--Content-->
    <div class="modal-content form-elegant">
      <!--Header-->
      <div class="modal-header text-center">
        <h3 class="modal-title w-100 dark-grey-text font-weight-bold my-3" id="myModalLabel"><strong>{{ __('Login') }}</strong></h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <!--Body-->
      <div class="modal-body mx-4">
        <!--Body-->
         <form method="POST" action="{{ route('login') }}">
                                @csrf
         <div class="md-form pb-3">
                <i class="fas fa-envelope prefix white-text"></i>
                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                    name="email" value="{{ old('email') }}" required >
                <label  for="email">{{ __('E-Mail Address')}}</label>
                @if ($errors->has('email'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
                @endif
            </div>

             <div class="md-form pb-3">
                    <i class="fas fa-lock prefix white-text"></i>
                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                        name="password" required>
                    <label for="password">{{ __('Password') }}</label>
                    @if ($errors->has('password'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                    @endif
                </div>

        <div class="text-center mb-3">
          <button type="submit" class="btn blue-gradient btn-block btn-rounded z-depth-1a">
             {{ __('Login') }}
          </button>
        </div> 
        </form>   
      </div>
      <!--Footer-->
      <div class="modal-footer mx-5 pt-3 mb-1">
        <p class="font-small grey-text d-flex justify-content-end">Not a member?
         <a href="{{ route('register') }}" class="blue-text ml-1">
            {{ __('Register') }}</a></p>
      </div>
    
    </div>
    <!--/.Content-->
  </div>
</div>
<!-- Modal -->



<!--Modal: modalProducts-->
   <div class="modal fade" id="modalProducts" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <!-- Change class .modal-sm to change the size of the modal -->
  <div class="modal-dialog modal-fluid text-center " role="document">

 <!--/.Content-->
    <div class="modal-content text-center">
      <div id="carousel-example-multi" class="carousel slide carousel-multi-item v-2" data-ride="carousel">

  <!--Controls-->
  <div class="controls-top">
    <a class="btn-floating" href="#carousel-example-multi" data-slide="prev"><i
        class="fas fa-chevron-left"></i></a>
    <a class="btn-floating" href="#carousel-example-multi" data-slide="next"><i
        class="fas fa-chevron-right"></i></a>
  </div>
  <!--/.Controls-->

  <!-- Indicators -->
  <ol class="carousel-indicators">

  </ol>
  <!--/.Indicators-->

  <div class="carousel-inner v-2" role="listbox">

    @if(is_null($first))

 
@else 

   
    <div class="carousel-item active">
      <div class="col-4 col-lg-2">
        <div class="card mb-4">
           <a href="{{url("/menue")}}/{{$first->id}}"> <img  class="card-img-top fit" src="{{asset('img/products')}}/{{$first->image}}"
            alt="Card image cap"></a>
          <div class="card-body">
            <h7 class="card-title font-weight-bold"><a href="{{url("/menue")}}/{{$first->id}}">{{$first->tittle}}</a></h7>
           
            
          </div>
        </div>
      </div>
    </div>



    

@foreach($second as  $menue)
    <div class="carousel-item ">
      <div class="col-4 col-lg-2">
        <div class="card mb-4">
        <a href="{{url("/menue")}}/{{$menue->id}}">  <img class="card-img-top fit" src="{{asset('img/products')}}/{{$menue->image}}"
            alt="Card image cap"></a>
          <div class="card-body">
            <h7 class="card-title font-weight-bold"><a href="{{url("/menue")}}/{{$menue->id}}">{{$menue->tittle}}</a></h7>
           
            
          </div>
        </div>
      </div>
    </div>

@endforeach
  
@endif
   

  </div>

  </div>
  
  </div>
    <!--/.Content-->
</div>
</div>
<!--Modal: modalmodalProducts-->