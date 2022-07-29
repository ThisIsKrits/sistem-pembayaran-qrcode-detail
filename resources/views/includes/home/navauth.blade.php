<div class="container-fluid">
    <nav class="navbar navbar-expand-lg navbar-light bg-info">
      <div class="container-fluid">
        <a class="navbar-brand" href="#"> Sistem Pembayaran Wifi </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
         
            <!-- mobile button -->
            @guest
      <form class="form-inline my-2 my-lg-0 d-none d-md-block">
        <button class="btn btn-danger" type="button"
        onclick="event.preventDefault(); location.href='{{url('login')}}';">
            Masuk
        </button>
    </form>
     
      @endguest
      @auth
      <form class="form-inline my-2 my-lg-0 d-none d-md-block" action="{{url('logout')}}" method="POST">
        @csrf
        <button class="btn btn-danger" type="submit">
            Keluar
        </button>
    </form>
      @endauth
          </ul>
        </div>
      </div>
    </nav>
  </div>