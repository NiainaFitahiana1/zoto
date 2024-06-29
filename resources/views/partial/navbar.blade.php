<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href={{route("home")}}><img src={{asset("asset/picture/kinala.png")}} style="height: 60px" alt=""></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          {{-- <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Article</a>
          </li>
          <li class="nav-item dropdown">
                <span
                  data-mdb-button-init data-mdb-ripple-init data-mdb-dropdown-init class="nav-link dropdown-toggle"
                  type="button"
                  id="dropdownMenuButton"
                  data-mdb-toggle="dropdown"
                  aria-expanded="false"
                >
                  About
          </span>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                  <li><a class="dropdown-item" href="#">Nos services</a></li>
                  <li><a class="dropdown-item" href="#">Inscrire tant que Compagnies</a></li>
                  <li><a class="dropdown-item" href="#">Se plaindre</a></li>
                </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled">Se connecter</a>
          </li> --}}
        </ul>
        <ul class="d-flex navbar-nav">
            <li class="mx-2 nav-item">
              <a class="nav-link active" aria-current="page" href={{route("home")}}>HOME</a>
            </li>
            <li class="mx-2 nav-item dropdown">
                  <span
                    data-mdb-button-init data-mdb-ripple-init data-mdb-dropdown-init class="nav-link dropdown-toggle"
                    type="button"
                    id="dropdownMenuButton"
                    data-mdb-toggle="dropdown"
                    aria-expanded="false"
                  >
                    MENUS
            </span>
                  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <li><a class="dropdown-item" href="#">Voyager</a></li>
                    <li><a class="dropdown-item" href="#">Louer Voiture</a></li>
                    <li><a class="dropdown-item" href="#">Chauffeur</a></li>
                    <li><a class="dropdown-item" href="#">Commission</a></li>
                  </ul>
            </li>
            <li class="mx-2 nav-item dropdown">
              <span
                      data-mdb-button-init data-mdb-ripple-init data-mdb-dropdown-init class="nav-link dropdown-toggle"
                      type="button"
                      id="dropdownMenuButton"
                      data-mdb-toggle="dropdown"
                      aria-expanded="false"
                    >
                      AIDE
              </span>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                      <li><a class="dropdown-item" href="#">A propos</a></li>
                      <li><a class="dropdown-item" href="#">Compagnies</a></li>
                      <li><a class="dropdown-item" href="#">Plainte</a></li>
                    </ul>
          </li>
            <li class="mx-2 nav-item">
              <a class="nav-link" href={{route("login")}}>SE CONNECTER </a>
            </li>
        </ul>
      </div>
    </div>
  </nav>