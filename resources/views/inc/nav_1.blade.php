 <!-- Navbar -->
      <nav id ="nav" class="navbar fixed-top navbar-expand-lg navbar-light scrolling-navbar white">
        <div class="container">
          <a class="navbar-brand font-weight-bold white-text" href="{{ url('/') }}"><img src="{{asset('img/products')}}/{{$logo->image}}" class="img-fluid logo img-responsive"></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-4"
            aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
            <ul class="navbar-nav ml-auto">
               <li class="nav-item ml-3">
               <a  class="nav-link dark-grey-text font-weight-bold" href="#contact" ><i class="fas fa-envelope "></i>
                  Contact Us </a>
              </li>
              <li class="nav-item ml-3">
                <a class="nav-link waves-effect waves-light dark-grey-text font-weight-bold" href="#" data-toggle="modal" data-target="#modalProducts"><i class="fab fa-product-hunt"></i>
                  My Industry</a>
              </li>
              <li class="nav-item ml-3">
                <a class="nav-link waves-effect waves-light dark-grey-text font-weight-bold" href="#about"><i class="fas fa-cog "></i>
                  About Us</a>
              </li>
               @if (Auth::check())
                            <li class="nav-item dropdown profile">
                                    <a class=" selver-text nav-link dropdown-toggle waves-effect waves-light font-weight-bold "
                                       id="navbarDropdownMenuLink-4"
                                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fas fa-user   ">     </i>{{ Auth::getUser()->name}} </a>
                                         
                            <div class="dropdown-menu dropdown-menu-right dropdown-cyan"
                                 aria-labelledby="navbarDropdownMenuLink-4">
                                <a class="dropdown-item waves-effect waves-light" href={{url("user/profile")}} >My
                                    Account</a>
                                <a class="dropdown-item waves-effect waves-light" href="{{ url('/logout') }}">Logout</a>
                            </div>
                            
                           </li>
                        @else
               <li class="nav-item ml-3">
                 <a type="button" class="btn btn-primary btn-rounded btn-sm waves-effect waves-light" data-toggle="modal" data-target="#elegantModalForm">Log In</a>
              </li>
               @endif
            </ul>
          </div>
        </div>
      </nav>
      <!-- /.Navbar -->
      