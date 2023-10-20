<nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
    <a href="" class="navbar-brand p-0">
        <h1 class="m-0"> Universidad Nacional Autonoma de México  </h1>
        <h1 class="m-0"> Facultad de Medicina veterinaria y zootecnia</h1>
        <!-- <img src="img/logo.png" alt="Logo"> -->
        
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="fa fa-bars"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav mx-auto py-0">
            <a href="{{ route('home') }}" class="nav-item nav-link"></a>
            <a href="{{ route('front.courses') }}" class="nav-item nav-link"></a>
           !-- <a href="{{ route('front.plans') }}" class="nav-item nav-link"></a>

            <a href="" class="nav-item nav-link"></a>
            <a href="{{ route('home') }}" class="nav-item nav-link"></a>
        </div>
        @if (Route::has('login'))
        @auth
        <a href="{{ route('dashboard') }}" class="btn rounded-pill py-2 px-4 ms-3 d-none d-lg-block">Dashboard</a>
        @else
        <a href="{{ route('login') }}" class="btn rounded-pill py-2 px-4 ms-3 d-none d-lg-block">Accede</a>    
        @endauth
        <a href="{{ route('register') }}" class="btn rounded-pill py-2 px-4 ms-3 d-none d-lg-block">Registrate</a>    
             
        @endif
    </div>
</nav>