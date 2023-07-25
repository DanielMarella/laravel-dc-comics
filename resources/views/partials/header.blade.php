<header class="mb-5">
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/3d/DC_Comics_logo.svg/1024px-DC_Comics_logo.svg.png" class="brand-logo me-4" alt="">
          <a class="navbar-brand" href="#">
            Laravel DC Comics
        </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
              <a class="nav-link active" aria-current="page" href="{{route('guest.home')}}">Homepage</a>
              <a class="nav-link" href="{{route('admin.comic.index')}}">Comics</a>
              <a class="nav-link" href="#">Add New Comics</a>
            </div>
          </div>
        </div>
      </nav>
</header>