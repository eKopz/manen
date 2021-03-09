<div class="container">

  <!-- Logo -->
  <div class="logo"> <a href="/"><img class="img-responsive" src="{{url('assets2/images/logohijau.png')}}" alt="" style="width:120px; margin-top:-10px"></a> </div>
  <nav class="navbar ownmenu navbar-expand-lg">
    <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation"> <span></span> </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="nav">
        <li class="dropdown">
        @if (Auth::check())
          <a href="#." class="dropdown-toggle" data-toggle="dropdown"><i class="lnr lnr-user"></i> &nbsp; {{ Auth::User()->nama }} </a>
              <ul class="dropdown-menu">
                <li> <a href="index.html">My Account</a></li>
                <li> <a href="index-1.html">Konfirmasi Pembayaran</a> </li>
                <li> <a href="/pesanan">Status Pemesanan</a></li>
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
      </ul>
    </div>

    <!-- Nav Right -->
    <div class="nav-right">
      <ul class="navbar-right">
        <!-- USER BASKET -->
        <li> <a href="/listkeranjang"><i class="lnr lnr-cart"></i> </a> </li>
      </ul>
    </div>
  </nav>
</div>
<div class="clearfix"></div>
