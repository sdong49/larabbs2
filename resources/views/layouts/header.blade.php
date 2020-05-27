<nav class="navbar navbar-expand-lg navbar-dark bg-dark navbar-static-top">
    <div class="container">
      <!-- Branding Image -->
      <a class="navbar-brand " href="{{ url('/') }}">
        LaraBBS
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
  
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <!-- Left Side Of Navbar -->
        <ul class="navbar-nav mr-auto">
  
        </ul>
  
        <!-- Right Side Of Navbar -->
        <ul class="navbar-nav navbar-right">
          <!-- Authentication Links -->
          @guest
          <li class="nav-item"><a class="nav-link" href="{{route('login')}}">Connexion</a></li>
          <li class="nav-item"><a class="nav-link" href="{{route('register')}}">Inscription</a></li>
          @else
         
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <img src="https://cdn.learnku.com/uploads/images/201709/20/1/PtDKbASVcz.png?imageView2/1/w/60/h/60" class="img-responsive img-circle" width="30px" height="30px">
            {{ Auth::user()->name }}
            </a>
         
            <a style="background-color:rgb(52, 58, 64)" class="dropdown-item" id="logout" href="#">
                <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button class="btn btn-block btn-danger" type="submit" name="button">Déconnecter</button>
                </form>
            </a>
            </div>
      
        @endguest
        </ul>
      </div>
    </div>
  </nav>