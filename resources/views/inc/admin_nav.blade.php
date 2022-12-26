 <!-- Sidebar navigation -->
    <div id="slide-out" class="side-nav sn-bg-4 fixed">
      <ul class="custom-scrollbar">

        <!-- Logo -->
        <li class="logo-sn waves-effect py-3">
          <div class="text-center ">
            <a href="{{ url('/') }}" class="pl-0 "><img class="logo" src="{{asset('img/products')}}/{{$logo->image}}"></a>
          </div>
        </li>

       
        
        <!-- Side navigation links -->
        <li>
          <ul class="collapsible collapsible-accordion">

         
           
            
          
            <li>
              <a href="{{route('user_management')}}" class="collapsible-header waves-effect"><i class="w-fa fas fa-th-large"></i>Users</a>
            </li>
            <li>
              <a href="{{route('products_management')}}" class="collapsible-header waves-effect"><i class="w-fa fas fa-th-large"></i> All Products</a>
            </li>
            <li>
              <a href="{{route('image_management')}}" class="collapsible-header waves-effect"><i class="w-fa fas fa-th-large"></i>Home Categories</a>
            </li>
            <li>
              <a href="{{route('menu_management')}}" class="collapsible-header waves-effect"><i class="w-fa fas fa-th-large"></i> Menu Categories</a>
            </li>

             <li>
              <a href="{{route('catalog_management')}}" class="collapsible-header waves-effect"><i class="w-fa fas fa-th-large"></i>Catalogs</a>
            </li>

             <li>
              <a href="{{route('slider_management')}}" class="collapsible-header waves-effect"><i class="w-fa fas fa-th-large"></i>Home </a>
            </li>
             <li>
              <a href="{{route('contact_management')}}" class="collapsible-header waves-effect"><i class="w-fa fas fa-th-large"></i>Contact us</a>
            </li>
          </ul>
        </li>
        <!-- Side navigation links -->

      </ul>
      <div class="sidenav-bg mask-strong"></div>
    </div>
    <!-- Sidebar navigation -->

    <!-- Navbar -->
    <nav class="navbar fixed-top navbar-expand-lg scrolling-navbar double-nav sn-bg-4">

      <!-- SideNav slide-out button -->
      <div class="float-left">
        <a href="#" data-activates="slide-out" class="button-collapse"><i class="fas fa-bars"></i></a>
      </div>

      <!-- Breadcrumb -->
     
      <!-- Navbar links -->
      <ul class="nav navbar-nav nav-flex-icons ml-auto">

        <!-- Dropdown -->
       
       
       
        <li class="nav-item dropdown">
          <a  href="{{ url('/') }}" class="nav-link dropdown-toggle waves-effect admin font-weight-bold  " href="#" >
            <span class="clearfix d-none d-sm-inline-block">Home</span>
          </a>
         
        </li>

      </ul>
      <!-- Navbar links -->

    </nav>
    <!-- Navbar -->
