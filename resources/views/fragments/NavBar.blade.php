<nav class="row row-header container-fluid d-flex m-3 justify-content-between">

  <div class="col-2 logo text-semibold text-light">
    E-commerce
  </div>

  <div class="col-5 mx-3 search d-flex justify-content-center border-2">
    <div class="input-group">
      <input class="form-control search-input form-control no-outline border-0" type="search" placeholder="Recherche" aria-label="Recherche">
      <div class="input-group-append">
        <button class="input-group-text">
          <i class="fas fa-search"></i>
        </button>
      </div>
    </div>
  </div>

  <div class="col-2 order-md-1 me-lg-5 me-md-3 me-sm-1">
    <ul class="navbar-nav navbar-nav-icons flex-row px-1">

      <li class="nav-item me-5 me-md-3 me-sm-1 d-flex">
        <div class="theme-control-toggle fa-icon-wait px-2">
          <input class="form-check-input theme-control-toggle-input" type="checkbox" data-theme-control="phoenixTheme" value="dark" id="themeControlToggle">
          <label class="mb-0 theme-control-toggle-label theme-control-toggle-light" for="themeControlToggle" data-bs-toggle="tooltip" data-bs-placement="left" aria-label="Changer de thème" data-bs-original-title="Switch theme">
            <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-sun icon">
              <circle cx="12" cy="12" r="5"></circle>
              <line x1="12" y1="1" x2="12" y2="3"></line>
              <line x1="12" y1="21" x2="12" y2="23"></line>
              <line x1="4.22" y1="4.22" x2="5.64" y2="5.64"></line>
              <line x1="18.36" y1="18.36" x2="19.78" y2="19.78"></line>
              <line x1="1" y1="12" x2="3" y2="12"></line>
              <line x1="21" y1="12" x2="23" y2="12"></line>
              <line x1="4.22" y1="19.78" x2="5.64" y2="18.36"></line>
              <line x1="18.36" y1="5.64" x2="19.78" y2="4.22"></line>
            </svg>
          </label>
          <label class="mb-0 theme-control-toggle-label theme-control-toggle-dark" for="themeControlToggle" data-bs-toggle="tooltip" data-bs-placement="left" aria-label="Changer de thème" data-bs-original-title="Switch theme">           
            <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-moon icon">
              <path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"></path>
            </svg>
          </label>
        </div>
      </li>

      <li class="nav-item me-3 flex">
        <a class="nav-link px-2 icon-indicator icon-indicator-primary position-relative" href="#" role="button">
          <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-cart text-700" style="height:20px;width:20px;">
            <circle cx="9" cy="21" r="1"></circle>
            <circle cx="20" cy="21" r="1"></circle>
            <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>
          </svg>
          <span class="icon-indicator-number bg-primary rounded-circle text-light d-flex justify-content-center align-items-center position-absolute" style="top: 0; right: -150%; width: 15px; height: 15px;">3</span>
        </a>
      </li>&nbsp;&nbsp;

      <li class="nav-item me-3 flex">
        <a class="nav-link px-2 icon-indicator icon-indicator-sm icon-indicator-danger position-relative" id="navbarTopDropdownNotification" href="#" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false">
          <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bell text-700" style="height:20px;width:20px;">
            <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path>
            <path d="M13.73 21a2 2 0 0 1-3.46 0"></path>
          </svg>
          <span class="icon-indicator-number bg-danger rounded-circle t-0 d-flex justify-content-center position-absolute" style="top: 0; right: -100%; width: 10px; height: 10px;"></span>
        </a>
      </li>&nbsp;&nbsp;

      {{-- @if (auth()->check())
      <li class="nav-item me-3 flex">
        <img src="{{ asset('images/Capture.PNG') }}" alt="profil" class="rounded-lg" />
      </li>
      @else --}}
      <li class="nav-item me-3 flex">
        <a class="nav-link px-2" id="navbarDropdownUser" href="#" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false">
            <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user text-700" style="height:20px;width:20px;">
              <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
              <circle cx="12" cy="7" r="4"></circle>
            </svg>
        </a>
      </li>
      {{-- @endif --}}
    </ul>
  </div>

</nav>

<nav class="navbar navbar-expand-lg navbar-light justify-content-around">

    <div class="dropdown">
      <button class="btn text-900 px-5 text-nowrap dropdown-toggle dropdown-caret-none" data-category-btn="data-category-btn" data-bs-toggle="dropdown">
        <svg class="svg-inline--fa fa-bars me-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="bars" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
          <path fill="currentColor" d="M0 96C0 78.33 14.33 64 32 64H416C433.7 64 448 78.33 448 96C448 113.7 433.7 128 416 128H32C14.33 128 0 113.7 0 96zM0 256C0 238.3 14.33 224 32 224H416C433.7 224 448 238.3 448 256C448 273.7 433.7 288 416 288H32C14.33 288 0 273.7 0 256zM416 448H32C14.33 448 0 433.7 0 416C0 398.3 14.33 384 32 384H416C433.7 384 448 398.3 448 416C448 433.7 433.7 448 416 448z"></path>
        </svg>
        Categories
      </button>

      <div class="dropdown-menu py-0">
        <div class="card border-0 scrollbar">
          <div class="card-body p-6 pb-3">
            <div class="col-lg gx-7 gy-5 mb-5 card-types">

              <div class="col-lg-12 col-sm-6 col-md-4 pe-5 m-4">
                <div class="d-flex align-items-center mb-3">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-pocket text-primary me-2" style="stroke-width:3;"><path d="M4 3h16a2 2 0 0 1 2 2v6a10 10 0 0 1-10 10A10 10 0 0 1 2 11V5a2 2 0 0 1 2-2z"></path><polyline points="8 10 12 14 16 10"></polyline></svg>
                  <h6 class="text-1000 mb-0 text-nowrap">Collectibles &amp; Art</h6>
                </div>
                <div class="ms-n2">
                  <a class="d-block mb-1 text-decoration-none hover-bg-100 px-2 py-1 rounded-2" href="#!">Collectibles</a>
                  <a class="d-block mb-1 text-decoration-none hover-bg-100 px-2 py-1 rounded-2" href="#!">Antiques</a>
                  <a class="d-block mb-1 text-decoration-none hover-bg-100 px-2 py-1 rounded-2" href="#!">Sports memorabilia </a>
                  <a class="d-block mb-1 text-decoration-none hover-bg-100 px-2 py-1 rounded-2" href="#!">Art</a>
                </div>
              </div>

              <div class="col-lg-12 col-sm-6 col-md-4 pe-5 m-4">
                <div class="d-flex align-items-center mb-3">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home text-primary me-2" style="stroke-width:3;">
                    <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                    <polyline points="9 22 9 12 15 12 15 22"></polyline>
                  </svg>
                  <h6 class="text-1000 mb-0 text-nowrap">Home &amp; Gardan</h6>
                </div>
                <div class="ms-n2">
                  <a class="d-block mb-1 text-decoration-none hover-bg-100 px-2 py-1 rounded-2" href="#!">Yard, Garden &amp; Outdoor</a>
                  <a class="d-block mb-1 text-decoration-none hover-bg-100 px-2 py-1 rounded-2" href="#!">Crafts</a>
                  <a class="d-block mb-1 text-decoration-none hover-bg-100 px-2 py-1 rounded-2" href="#!">Home Improvement</a>
                  <a class="d-block mb-1 text-decoration-none hover-bg-100 px-2 py-1 rounded-2" href="#!">Pet Supplies</a>
                </div>
              </div>

              <div class="col-lg-12 col-sm-6 col-md-4 pe-5 m-4">
                <div class="d-flex align-items-center mb-3">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-globe text-primary me-2" style="stroke-width:3;">
                    <circle cx="12" cy="12" r="10"></circle>
                    <line x1="2" y1="12" x2="22" y2="12"></line>
                    <path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path>
                  </svg>
                  <h6 class="text-1000 mb-0 text-nowrap">Sporting Goods</h6>
                </div>
                <div class="ms-n2">
                  <a class="d-block mb-1 text-decoration-none hover-bg-100 px-2 py-1 rounded-2" href="#!">Outdoor Sports</a>
                  <a class="d-block mb-1 text-decoration-none hover-bg-100 px-2 py-1 rounded-2" href="#!">Team Sports</a>
                  <a class="d-block mb-1 text-decoration-none hover-bg-100 px-2 py-1 rounded-2" href="#!">Exercise &amp; Fitness</a>
                  <a class="d-block mb-1 text-decoration-none hover-bg-100 px-2 py-1 rounded-2" href="#!">Golf</a>
                </div>
              </div>

              <div class="col-lg-12 col-sm-6 col-md-4 pe-5 m-4">
                <div class="d-flex align-items-center mb-3">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-monitor text-primary me-2" style="stroke-width:3;">
                    <rect x="2" y="3" width="20" height="14" rx="2" ry="2"></rect>
                    <line x1="8" y1="21" x2="16" y2="21"></line>
                    <line x1="12" y1="17" x2="12" y2="21"></line>
                  </svg>
                  <h6 class="text-1000 mb-0 text-nowrap">Electronics</h6>
                </div>
                <div class="ms-n2">
                  <a class="d-block mb-1 text-decoration-none hover-bg-100 px-2 py-1 rounded-2" href="#!">Computers &amp; Tablets</a>
                  <a class="d-block mb-1 text-decoration-none hover-bg-100 px-2 py-1 rounded-2" href="#!">Camera &amp; Photo</a>
                  <a class="d-block mb-1 text-decoration-none hover-bg-100 px-2 py-1 rounded-2" href="#!">TV, Audio &amp; Surveillance</a>
                  <a class="d-block mb-1 text-decoration-none hover-bg-100 px-2 py-1 rounded-2" href="#!">Cell Ohone &amp; Accessories</a>
                </div>
              </div>

              <div class="col-lg-12 col-sm-6 col-md-4 pe-5 m-4">
                <div class="d-flex align-items-center mb-3">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-monitor text-primary me-2" style="stroke-width:3;">
                    <rect x="2" y="3" width="20" height="14" rx="2" ry="2"></rect>
                    <line x1="8" y1="21" x2="16" y2="21"></line>
                    <line x1="12" y1="17" x2="12" y2="21"></line>
                  </svg>
                  <h6 class="text-1000 mb-0 text-nowrap">Electronics</h6>
                </div>
                <div class="ms-n2">
                  <a class="d-block mb-1 text-decoration-none hover-bg-100 px-2 py-1 rounded-2" href="#!">Computers &amp; Tablets</a>
                  <a class="d-block mb-1 text-decoration-none hover-bg-100 px-2 py-1 rounded-2" href="#!">Camera &amp; Photo</a>
                  <a class="d-block mb-1 text-decoration-none hover-bg-100 px-2 py-1 rounded-2" href="#!">TV, Audio &amp; Surveillance</a>
                  <a class="d-block mb-1 text-decoration-none hover-bg-100 px-2 py-1 rounded-2" href="#!">Cell Ohone &amp; Accessories</a></div>
              </div>

              <div class="col-lg-12 col-sm-6 col-md-4 pe-5 m-4">
                <div class="d-flex align-items-center mb-3">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-music text-primary me-2" style="stroke-width:3;">
                    <path d="M9 18V5l12-2v13"></path>
                    <circle cx="6" cy="18" r="3"></circle>
                    <circle cx="18" cy="16" r="3"></circle>
                  </svg>
                  <h6 class="text-1000 mb-0 text-nowrap">Musical Instruments &amp; Gear</h6>
                </div>
                <div class="ms-n2">
                  <a class="d-block mb-1 text-decoration-none hover-bg-100 px-2 py-1 rounded-2" href="#!">Guitar</a>
                  <a class="d-block mb-1 text-decoration-none hover-bg-100 px-2 py-1 rounded-2" href="#!">Pro Audio Equipment</a>
                  <a class="d-block mb-1 text-decoration-none hover-bg-100 px-2 py-1 rounded-2" href="#!">String</a>
                  <a class="d-block mb-1 text-decoration-none hover-bg-100 px-2 py-1 rounded-2" href="#!">Stage Lighting &amp; Effects</a>
                </div>
              </div>

            </div>

            <div class="text-center border-top pt-3">
              <a class="fw-bold" href="#!">See all Categories<svg class="svg-inline--fa fa-angle-right ms-1" data-fa-transform="down-1" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="angle-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512" data-fa-i2svg="" style="transform-origin: 0.25em 0.5625em;"><g transform="translate(128 256)"><g transform="translate(0, 32)  scale(1, 1)  rotate(0 0 0)">
                <path fill="currentColor" d="M64 448c-8.188 0-16.38-3.125-22.62-9.375c-12.5-12.5-12.5-32.75 0-45.25L178.8 256L41.38 118.6c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0l160 160c12.5 12.5 12.5 32.75 0 45.25l-160 160C80.38 444.9 72.19 448 64 448z" transform="translate(-128 -256)"></path></g></g></svg><!-- <span class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span> Font Awesome fontawesome.com -->
              </a>
            </div>

          </div>
        </div>
      </div>

    </div>

  <div class="col-auto" id="navbarNav">
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" href="{{ route('home') }}">Maison</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Magasin</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Produits</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Listes des souhaits</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Information d'expedition</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Soyez un vendeur</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Suivi de commandes</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Verifier</a>
        </li>
    </ul>
  </div>

  <div class="col-2"></div>

</nav>
