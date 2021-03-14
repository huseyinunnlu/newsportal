<!--Header -->
<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>NewsPortal</title>
<link href="/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
<link href="/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css" />
<link href="/css/style.css" rel="stylesheet" type="text/css" />
<script src="/js/jquery.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
</head>

<body>
<div class="col-md-12 top" id="top">
	<div class="col-md-9 top-left">
    	<div class="col-md-3">
    		<span class="day">Saturday, December 24, 2016</span> 
        </div>
        <div class="col-md-9">
        	<span class="latest">Latest: </span> <a href="#">Wireless Headphones are now on Market</a>
        </div>
    </div>
    <div class="col-md-3">
        @foreach($settings->social as $key=>$social)
    	<a href="{{$social}}"><i class="fa fa-{{$icons[$key]}}"></i></a>
        @endforeach
    </div>
</diev>

<div class="col-md-12 brand">
	<div class="col-md-4 name">
    	<font color="#555555">COLOR</font><font color="#2ca0c9">MAG</font>
    </div>
    <div class="col-md-8">
        @if($leaderboard)
    	<a href="{{$leaderboard->url}}"><img src="{{$leaderboard->image}}" 
            style="width: 750px;
                   height: 80px;
                   position: relative;
                   top: 10px;" 
            /></a>
        @endif
    </div>
</div>

<div class="col-md-12 main-menu">
	<div class="col-md-10 menu">
		<nav class="navbar">
			<div class="navbar-header">
    			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mynavbar"> 
					<span class="icon-bar"></span>
            		<span class="icon-bar"></span>
            		<span class="icon-bar"></span>
            		<span class="icon-bar"></span>
        		</button>
        		<span class="navbar-brand"><font color="#555555">COLOR</font><font color="#2ca0c9">MAG</font></span>
    		</div>
    		<div class="collapse navbar-collapse" id="mynavbar">
    			<ul class="nav nav-justified">
    				<li><a href="/" class="active"><span class="glyphicon glyphicon-home"></span></a></li>
                    @foreach($categories as $cat)
    				<li><a href="{{url('category')}}/{{$cat->slug}}" class="text-uppercase">{{$cat->title}}</a></li>
                    @endforeach
        		</ul> 
			</div>
		</nav>
	</div>
	<div class="col-md-2 search">
    	<input type="search" class="form-control" /><span class="glyphicon glyphicon-search btn"></span>
    </div>
</div> 
<!-- Header-Finish -->

<!--Content-->
@yield('content')

<!-- Footer -->
<div class="col-md-12 bottom">
        <div class="col-md-4">
            <h3 style="border-bottom:2px solid #ccc;"><span style="border-bottom:2px solid #f00;">About Us</span></h3>
            <img src="images/book.png" align="left" /><span class="name"><font color="#e03521">COLOR</font><font color="#fff">MAG</font></span>
            <p align="justify">{{$settings->about}}</p>
        </div>
        <div class="col-md-4">
            <div class="col-md-12">
                <h3 style="border-bottom:2px solid #ccc;"><span style="border-bottom:2px solid #f00;">Quick Links</span></h3>
            </div>    
            <div class="col-md-6">
                <div class="row">
                <ul class="nav">
                    @foreach($pages as $key=>$page)
                   <li><a href="{{url('page')}}/{{$page->slug}}" class="text-uppercase">{{$page->title}}</a></li>
                    @endforeach
                    <li><a href="/contact-us">Contact Us</a></li>
                </ul> 
                </div>
            </div>  
        </div>
        <div class="col-md-4">
            <h3 style="border-bottom:2px solid #ccc;"><span style="border-bottom:2px solid #f00;">Contact Us</span></h3>
            <span class="name"><font color="#e03521">COLOR</font><font color="#fff">MAG</font></span><br />
            Follow us at:<br /><br />
                    @foreach($settings->social as $key=>$social)
        <a href="{{$social}}"><i class="fa fa-{{$icons[$key]}}"></i></a>
        @endforeach
            <a href="#top" class="btn btn-default goto"><span class="glyphicon glyphicon-arrow-up"></span></a><br />
        </div>
</div>
<div class="col-md-12 text-center copyright">
    Copyright &copy; 2016 <a href="#">COLORMAG</a> Powered by: <a href="#">DREAMTEAM</a>
</div>
</body>
</html>
<!-- Footer-Finish -->
