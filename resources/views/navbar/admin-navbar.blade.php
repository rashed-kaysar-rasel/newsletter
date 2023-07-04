<main class="main-content position-relative border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg  px-0 mx-4 shadow-none border-radius-xl z-index-sticky " id="navbarBlur" data-scroll="false">
      <div class="container-fluid py-4 px-3">
      <?php if (isset($breadcrumb)){ ?>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm text-white"><a class="opacity-5 text-white" href="{{$breadcrumb['pre_link']}}">{{$breadcrumb['pre_title']}}</a></li>
            <?php if(isset($breadcrumb['parent'])){ ?>
              <li class="breadcrumb-item text-sm text-white" aria-current="page"><a class="opacity-5 text-white" href="{{$breadcrumb['parent_link']}}">{{$breadcrumb['parent']}}</a></li>
            <?php } ?>
            <li class="breadcrumb-item text-sm text-white active" aria-current="page">{{$breadcrumb['title']}}</li>
          </ol>
        </nav>
        <?php } ?>
        <div class="sidenav-toggler sidenav-toggler-inner d-xl-block d-none">
          <a href="javascript:;" class="nav-link p-0">
            <div class="sidenav-toggler-inner">
              <i class="sidenav-toggler-line bg-white"></i>
              <i class="sidenav-toggler-line bg-white"></i>
              <i class="sidenav-toggler-line bg-white"></i>
            </div>
          </a>
        </div>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <div class="ms-md-auto pe-md-3 d-flex align-items-center">
          </div>
          <ul class="navbar-nav  justify-content-end">
            <li class="nav-item d-flex align-items-center">
            <form id="logout_form" action="{{ route('logout') }}" method="post">  
            @csrf 
            </form>
            <a onclick="document.getElementById('logout_form').submit();" class="nav-link text-white font-weight-bold px-0" target="_blank">
              <i class="fa fa-sign-out me-sm-1"></i>
              <span class="d-sm-inline d-none pointer" style="cursor: pointer;">Sign Out</span>
            </a>

              </li>
            <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-white p-0" id="iconNavbarSidenav">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line bg-white"></i>
                  <i class="sidenav-toggler-line bg-white"></i>
                  <i class="sidenav-toggler-line bg-white"></i>
                </div>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>