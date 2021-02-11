<!DOCTYPE html>
<html lang="en">
<head>
	
	<meta charset="utf-8">
	<meta name="description" content="Miminium Admin Template v.1">
	<meta name="author" content="Isna Nur Azis">
	<meta name="keyword" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Miminium</title>

  <!-- start: Css -->
  <link rel="stylesheet" type="text/css" href="{{asset('asset/css/bootstrap.min.css')}}">

  <!-- plugins -->
  <link rel="stylesheet" type="text/css" href="{{asset('asset/css/plugins/font-awesome.min.css')}}"/>
  <link rel="stylesheet" type="text/css" href="{{asset('asset/css/plugins/simple-line-icons.css')}}"/>
  <link rel="stylesheet" type="text/css" href="{{asset('asset/css/plugins/mediaelementplayer.css')}}"/>
  <link rel="stylesheet" type="text/css" href="{{asset('asset/css/plugins/animate.min.css')}}"/>
  <link rel="stylesheet" href="{{asset('asset/css/style.css')}}" >
  <link rel="stylesheet" type="text/css" href="{{asset('css/mycss.css')}}"/>


  <!-- end: Css -->

  <link rel="shortcut icon" href="{{asset('asset/img/logomi.png')}}">
  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="{{asset('https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js')}}"></script>
      <script src="{{asset('https://oss.maxcdn.com/respond/1.4.2/respond.min.js')}}"></script>
      <![endif]-->
</head>

<body id="mimin" class="dashboard topnav">
      <!-- start: Header -->
        <nav class="navbar navbar-default header navbar-fixed-top">
          <div class="col-md-12 nav-wrapper">
            <div class="navbar-header" style="width:100%;">
                <a href="{{asset('user/home')}}" class="navbar-brand"> 
                 <b>Insta App</b>
                </a>
              <ul class="nav navbar-nav navbar-right user-nav">
                <li class="user-name"><span>{{Auth::user()->name}}</span></li>
                  <li class="dropdown avatar-dropdown">
                   <img src="{{asset('/img/'.Auth::user()->dp)}}" class="img-circle avatar" alt="user name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"/>
                    <ul class="dropdown-menu user-dropdown">
                     <li>
                       <a class="btn btn-default btn-flat" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                      </li>
                    </ul>
                </li>
              </ul>
            </div>
          </div>
        </nav>
      <!-- end: Header -->

      <!-- start: Content -->
        <div id="content">
          
          
          <div class="col-md-12 top-20 padding-0">
            <div class="col-md-1">
                 {{-- hello world         --}}
            </div>
            
            <div class="col-md-10">
              <div class="col-md-12">
                @yield('content')
              </div>
              
            </div>

            <div class="col-md-1">
                {{-- hello world --}}
            </div>  

          </div>
        </div>
      <!-- end: content -->

<!-- start: Javascript -->
<script src="{{asset('asset/js/jquery.min.js')}}"></script>
<script src="{{asset('asset/js/jquery.ui.min.js')}}"></script>
<script src="{{asset('asset/js/bootstrap.min.js')}}"></script>



<!-- plugins -->
<script src="{{asset('asset/js/plugins/holder.min.js')}}"></script>
<script src="{{asset('asset/js/plugins/moment.min.js')}}"></script>
<script src="{{asset('asset/js/plugins/jquery.nicescroll.js')}}"></script>
<script src="{{asset('https://kit.fontawesome.com/a076d05399.js')}}"></script>


<!-- custom -->
<script src="{{asset('asset/js/main.js')}}"></script>
<script src="{{asset('js/myjs.js')}}"></script>
<script type="text/javascript">
  $(document).ready(function(){

  });
</script>

<!-- end: Javascript -->
</body>
</html>