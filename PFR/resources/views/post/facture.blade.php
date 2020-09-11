<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Universe CRM |  Deals</title>
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">
    <!-- Morris -->
    <link href="/css/plugins/morris/morris-0.4.3.min.css" rel="stylesheet">
    <link href="/css/animate.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">
</head>

<body>
    <div id="wrapper">
    <nav class="navbar-default navbar-static-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav metismenu" id="side-menu">
                <li class="nav-header">
                    <div class="dropdown profile-element">
                        <img alt="image"  src="welcom/img/logo.png"/><br><br>
                            <span class="block m-t-xs font-bold">Welcome ...</span>
                    </div>
                    <div class="logo-element">
                        <img alt="image"  src="img/logo.png" style="width: 70%"/>
                    </div>
                </li>
                <li class="active">
                    <a href="{{ route('home')}}"><i class="fa fa-edit"></i> <span class="nav-label">Deals</span></a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-bar-chart-o"></i> <span class="nav-label">Statistics</span></a>
                </li>
                <li>
                    <a href="{{route('Profils')}}"><i class="fa fa-id-card-o"></i> <span class="nav-label">Profile</span></a>
                </li>
                
                
                

        </div>
    </nav>

        <div id="page-wrapper" class="gray-bg">
            <div class="row border-bottom">
                <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
                <div class="navbar-header">
                    <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
                    <form role="search" class="navbar-form-custom" action="search_results.html">
                        <div class="form-group">
                            <input type="text" placeholder="Search for something..." class="form-control" name="top-search" id="top-search">
                        </div>
                    </form>
                </div>
                    <ul class="nav navbar-top-links navbar-right">
                        <li style="padding: 20px">
                            <span class="m-r-sm text-muted welcome-message">Welcome to Univers CRM | Dashboard.</span>
                        </li>
                        @guest 
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                    </ul>
                </nav>
                </div>

    <div class="wrapper wrapper-content">
        <h1 class="text-center">Add New Deals</h1><br><br>
        <div class="row d-flex justify-content-center">
            <div class="col-6">
                <form action="{{ route('Facture.store')}}" method="post" enctype="multipart/form-data" class="php-email-form">
                    @csrf
                    <div class="form-group row">
                      <label for="" class="col-3 col-form-label">Manager Name</label> 
                      <div class="col-5">
                          {{-- {{dd(Auth::user()->name)}} --}}
                        <input id="" name="ID_manager" type="text" class="form-control" value="{{ Auth::user()->name }}">
                      </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-3 col-form-label">Client Name</label> 
                        <div class="col-5">
                          <select id="" name="ID_client" required="required" class="custom-select">
                              {{-- <option>client name</option> --}}
                            @foreach ($username as $item)
                        <option value="{{$item->name}}">{{$item->name}}</option>
                            @endforeach
                          </select>
                        </div>
                      </div>
                    <div class="form-group row">
                      <label for="" class="col-3 col-form-label">Provider Or Company</label> 
                      <div class="col-5">
                        <select id="" name="fonction" required="required" class="custom-select">
                          <option value="Provider">Provider</option>
                          <option value="Company">Company</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="" class="col-3 col-form-label">Subject</label> 
                      <div class="col-5">
                        <input id="" name="Subject" type="text" class="form-control">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="" class="col-3 col-form-label">Status</label> 
                      <div class="col-5">
                        <select id="" name="Status" class="custom-select">
                          <option value="Pending">Pending</option>
                          <option value="Complete">Complete</option>
                          <option value="Canceled">Canceled</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="textarea" class="col-3 col-form-label">Description</label> 
                      <div class="col-5">
                        <textarea id="" name="Desc" cols="40" rows="3" class="form-control"></textarea>
                      </div>
                    </div> 
                    <div class="form-group row">
                      <div class="offset-6 col-4">
                        <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                      </div>
                      @if($errors->any())
                      <ul>
                      @foreach ($errors->all() as $error)
                      <li style="color: red;margin-left:10px">{{$error}}</li>            
                      @endforeach
                      </ul>
                      @endif
                    </div>
                  </form>
            </div>
        </div>
    </div>
        

    <div class="row" style="justify-content: center">
        <div class="col-lg-10">
            <div class="ibox ">
                <div class="ibox-title">
                    <h5>Add New Deals <small>For best service CRM Univers.</small></h5>
                    <div class="ibox-tools">
                        <a class="collapse-link">
                            <i class="fa fa-chevron-up"></i>
                        </a>
                        <a class="close-link">
                            <i class="fa fa-times"></i>
                        </a>
                    </div>
                </div>
                <div class="ibox-content">
                    <form method="get">
                        <div class="form-group row"><label class="col-sm-2 col-form-label">Personal information</label>
                            <div class="col-sm-10">
                                <div class="row">
                                    <div class="col-md-3">Manager Name<input type="text" placeholder="Manager name" class="form-control"></div>
                                    <div class="col-md-3">Client Name<input type="text" placeholder="Client name" class="form-control"></div>
                                        <div class="col-sm-3">Provider Or Company<select class="form-control m-b" name="account">
                                            <option>Provider</option>
                                            <option>Company</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>
                        <div class="form-group row"><label class="col-sm-2 col-form-label">Subject</label>
                            <div class="col-sm-2"><input type="text" placeholder="Title" class="form-control form-control-lg m-b"></div>
                        </div>
                        <div class="hr-line-dashed"></div>
                        <div class="form-group row"><label class="col-sm-2 col-form-label">Status<br/><small class="text-navy">Custom elements</small></label>
                            <div class="col-sm-10">
                                <div class="i-checks"><label> <input type="radio" value="" name="a"> <i></i> Panding </label></div>
                                <div class="i-checks"><label> <input type="radio" checked="" value="" name="a"> <i></i> Complete </label></div>
                                <div class="i-checks"><label> <input type="radio" checked="" value="" name="a"> <i></i> Canalced </label></div>
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>
                        <div class="form-group row"><label  class="col-sm-2 col-form-label">Description</label> 
                        <textarea class="col-sm-2" type="text" cols="40" rows="3" placeholder="Description ..." class="form-control form-control-lg m-b"></textarea>
                        </div>
                    </form>
                </div>
            </div><br><br>
        </div>

        
        
        </div>
            <div class="footer" style="text-align: center"><strong>&copy; <script>document.write(new Date().getFullYear())</script> Univers CRM</strong><br/> PFR de la Promotion 2019 du référentiel développement web | YouCode Safi.
            </div>        
        </div>

    <!-- Mainly scripts -->
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- Flot -->
    <script src="js/plugins/flot/jquery.flot.js"></script>
    <script src="js/plugins/flot/jquery.flot.tooltip.min.js"></script>
    <script src="js/plugins/flot/jquery.flot.spline.js"></script>
    <script src="js/plugins/flot/jquery.flot.resize.js"></script>
    <script src="js/plugins/flot/jquery.flot.pie.js"></script>
    <script src="js/plugins/flot/jquery.flot.symbol.js"></script>
    <script src="js/plugins/flot/curvedLines.js"></script>

    <!-- Peity -->
    <script src="js/plugins/peity/jquery.peity.min.js"></script>
    <script src="js/demo/peity-demo.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="js/inspinia.js"></script>
    <script src="js/plugins/pace/pace.min.js"></script>

    <!-- jQuery UI -->
    <script src="js/plugins/jquery-ui/jquery-ui.min.js"></script>

    <!-- Jvectormap -->
    <script src="js/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>

    <!-- Sparkline -->
    <script src="js/plugins/sparkline/jquery.sparkline.min.js"></script>

    <!-- Sparkline demo data  -->
    <script src="{{ asset('js/demo/sparkline-demo.js') }}"></script>

    <!-- ChartJS-->
    <script src="{{ asset('js/plugins/chartJs/Chart.min.js') }}"></script>


</body>
</html>

