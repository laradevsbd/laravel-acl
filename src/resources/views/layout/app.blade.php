
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="">
    <title>Access Controll</title>
    <link rel="canonical" href="">
    <!-- Bootstrap core CSS -->
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <!-- Custom styles for this template -->
    <link href="{{ asset('acl/dashboard.css') }}" rel="stylesheet" />
  </head>

  <body>
    <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0">
      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">{{ env('APP_NAME') }}</a>
      <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
      <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
          <a class="nav-link" href="#">Sign out</a>
        </li>
      </ul>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column flex-nowrap overflow-hidden">
                <li class="nav-item">
                    <a class="nav-link text-truncate" href="#"><span data-feather="home"></span> <span class="d-none d-sm-inline">Home</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link collapsed text-truncate" href="#submenu1" data-toggle="collapse" data-target="#submenu1"><span data-feather="settings"></span> <span class="d-none d-sm-inline">Configaration</span></a>
                    <div class="collapse" id="submenu1" aria-expanded="false">
                        <ul class="flex-column pl-2 nav">
                         
                            <li class="nav-item">
                                <a class="nav-link  text-truncate collapsed py-1" href="#submenu1sub1" data-toggle="collapse" data-target="#submenu1sub1"><span data-feather="layers"></span><span> Menus </span> </a>
                                <div class="collapse" id="submenu1sub1" aria-expanded="false">
                                    <ul class="flex-column nav pl-4">
                                        <li class="nav-item">
                                            <a class="nav-link p-1 text-truncate" href="#">
                                                <span data-feather="plus-circle"></span> Add Menu </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link p-1 text-truncate" href="#">
                                                <span data-feather="plus-circle"></span> Add Permission </a>
                                        </li>
                                        
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link  text-truncate collapsed py-1" href="#submenu1sub2" data-toggle="collapse" data-target="#submenu1sub2"><span data-feather="layers"></span><span>Sub Menus </span> </a>
                                <div class="collapse" id="submenu1sub2" aria-expanded="false">
                                    <ul class="flex-column nav pl-4">
                                        <li class="nav-item">
                                            <a class="nav-link p-1 text-truncate" href="#">
                                                <span data-feather="plus-circle"></span> Add Sub Menu </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link p-1 text-truncate" href="#">
                                                <span data-feather="plus-circle"></span> Add Permission </a>
                                        </li>
                                        
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item"><a class="nav-link text-truncate" href="#"><span data-feather="list"></span> <span class="d-none d-sm-inline">Roles</span></a></li>
                 <li class="nav-item"><a class="nav-link text-truncate" href="#"><span data-feather="shield"></span> <span class="d-none d-sm-inline">Role Permission</span></a></li>
                <li class="nav-item"><a class="nav-link text-truncate" href="#"><span data-feather="user"></span> <span class="d-none d-sm-inline">Users</span></a></li>
            </ul>

           
          </div>
        </nav>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
          


         
        </main>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"><\/script>')</script>

  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Icons -->
    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    <script>
      feather.replace()
    </script>


  </body>
</html>
