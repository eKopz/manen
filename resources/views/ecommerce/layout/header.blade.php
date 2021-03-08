<div class="container">

  <!-- Logo -->
  <div class="logo"> <a href="/"><img class="img-responsive" src="{{url('assets2/images/logohijau.png')}}" alt="" style="width:120px; margin-top:-10px"></a> </div>
  <nav class="navbar ownmenu navbar-expand-lg">
    <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation"> <span></span> </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="nav">
<<<<<<< HEAD
        <li> <a href="/login">LOGIN/REGISTER</a> </li>
=======
        <li class="dropdown">
        @if (Auth::user()->id !=null)
          <a href="#." class="dropdown-toggle" data-toggle="dropdown"><i class="lnr lnr-user"></i> &nbsp; {{ Auth::User()->nama }} </a>
              <ul class="dropdown-menu">
                <li> <a href="index.html">My Account</a></li>
                <li> <a href="index-1.html">Konfirmasi Pembayaran</a> </li>
                <li> <a href="index-2.html">Status Pemesanan</a></li>
                <li>
                  <a href="{{ route('logout') }}"onclick="event.preventDefault();document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                  </form>
                </li>
              </ul>
        @else
          <a href="/login">LOGIN/REGISTER</a>
        @endif

        </li>
>>>>>>> master
      </ul>
    </div>

    <!-- Nav Right -->
    <div class="nav-right">
      <ul class="navbar-right">
        <!-- USER BASKET -->
        <li> <a href="shopping-cart.html"><span class="c-no">2</span><i class="lnr lnr-cart"></i> </a> </li>
        <!-- SEARCH BAR -->
        <li> <a href="javascript:void(0);" class="search-open"><i class="lnr lnr-magnifier"></i></a>
          <div class="search-inside animated bounceInUp"> <i class="icon-close search-close"></i>
            <div class="search-overlay"></div>
            <div class="position-center-center">
              <div class="search">
                <form>
                  <input type="search" placeholder="Search Shop">
                  <button type="submit"><i class="icon-check"></i></button>
                </form>
              </div>
            </div>
          </div>
        </li>
      </ul>
    </div>
  </nav>
</div>
<div class="clearfix"></div>
