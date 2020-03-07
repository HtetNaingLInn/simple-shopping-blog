<nav class="navbar navbar-expand-lg navbar-dark bg-danger">
<a class="navbar-brand" href="{{url('/')}}"><i class="fa fa-home" aria-hidden="true">
    </i>&nbsp;&nbsp;Shopper.com</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto navbar-right">
      <li class="nav-item active">
        <a class="nav-link" href="#"><i class="fa fa-podcast" aria-hidden="true"></i>&nbsp;&nbsp;Brand</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#"><i class="fa fa-flag-checkered" aria-hidden="true"></i>&nbsp;&nbsp;Caregory</a>
      </li>
      <li class="nav-item active">
      <a class="nav-link" href="{{url('/cart')}}"><i class="fa fa-shopping-cart" aria-hidden="true"></i>&nbsp;&nbsp;Cart

        
        
        @if (session('items'))
            {{count(session('items'))}}
        @endif
        </a>
      </li>
      <li class="nav-item active dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fa fa-product-hunt" aria-hidden="true"></i>&nbsp;&nbsp;Product
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="{{url('/products/create')}}">Create</a>
          <a class="dropdown-item" href="#">View all Product</a>
          
          <a class="dropdown-item" href="#">Edit</a>
        </div>



      <li class="nav-item active dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          &nbsp;&nbsp;<i class="fa fa-users" aria-hidden="true"></i>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Login</a>
          <a class="dropdown-item" href="#">Logout</a>
          
        <a class="dropdown-item" href="{{url('/users/register')}}">Register</a>
        </div>
      </li>
    </ul>
    
  </div>
</nav>