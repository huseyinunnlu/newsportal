<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>ADMIN DASHBOARD | WEBSITE NAME</title>
	<link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="/css/ionicons.min.css">
	<link rel="stylesheet" type="text/css" href="/css/menu.css">
	<link rel="stylesheet" type="text/css" href="/css/adminpanel.style.css">	 
  <script type="text/javascript" src="/js/jquery.min.js"></script>
  <script type="text/javascript" src="/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="/js/app.min.js"></script>
  <script type="text/javascript" src="/js/script.js"></script>
  <script src="https://cdn.ckeditor.com/4.15.1/standard/ckeditor.js"></script>

</head>
<body>

  <div class="sidebar">
   <ul class="sidebar-menu">
    <li><a href="/adminpanel" class="dashboard"><i class="fa fa-tachometer"></i> <span>Dashboard</span></a></li>
    <li class="treeview">
      <a href="#">
        <i class="fa fa-bookmark-o"></i> <span>Posts</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
      </a>
      <ul class="treeview-menu">
        <li><a href="/adminpanel/all-posts"><i class="fa fa-eye"></i>All Posts</a></li>
        <li><a href="/adminpanel/add-post"><i class="fa fa-plus-circle"></i>Add Posts</a></li>
        <li><a href="/adminpanel/category"><i class="fa fa-plus-circle"></i>Categories</a></li>
      </ul>
    </li>
    <li class="treeview">
      <a href="/adminpanel/all-messages">
        <i class="fa fa-file"></i> <span>Messages</span>
      </a>            
    </li>
    <li class="treeview">
      <a href="#">
        <i class="fa fa-image"></i> <span>Gallery</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
      </a>
      <ul class="treeview-menu">
        <li><a href="#"><i class="fa fa-eye"></i>All Images</a></li>
        <li><a href="#"><i class="fa fa-plus-circle"></i>Add Images</a></li>
        <li><a href="#"><i class="fa fa-eye"></i>All Videos</a></li>
        <li><a href="#"><i class="fa fa-plus-circle"></i>Add Videos</a></li>
      </ul>
    </li>
    <li class="treeview">
      <a href="#">
        <i class="fa fa-file"></i> <span>Pages</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
      </a>
      <ul class="treeview-menu">
        <li><a href="/adminpanel/all-pages"><i class="fa fa-eye"></i>All Pages</a></li>
        <li><a href="/adminpanel/add-page"><i class="fa fa-plus-circle"></i>Add Pages</a></li>
      </ul>
    </li>
        <li class="treeview">
      <a href="#">
        <i class="fa fa-image"></i> <span>Advertisements</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
      </a>
      <ul class="treeview-menu">
        <li><a href="/adminpanel/all-ads"><i class="fa fa-eye"></i>All Advertisements</a></li>
        <li><a href="/adminpanel/add-ads"><i class="fa fa-plus-circle"></i>Add Advertisements</a></li>
      </ul>
    </li>
    <li class="treeview">
      <a href="menu.html">
        <i class="fa fa-file"></i> <span>Menu</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
      </a>            
    </li>
    <li class="treeview">
      <a href="#">
        <i class="fa fa-bar-chart"></i> <span>Reports</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
      </a>
      <ul class="treeview-menu">
        <li><a href="#"><i class="fa fa-eye"></i>All Reports</a></li>
        <li><a href="#"><i class="fa fa-plus-circle"></i>Add Reports</a></li>
      </ul>
    </li>

    <li class="treeview">
      <a href="{{url('/adminpanel/settings')}}">
        <i class="fa fa-bar-chart"></i> <span>Settings</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
      </a>
      <ul class="treeview-menu">
        <li><a href="/adminpanel/settings"><i class="fa fa-eye"></i>All Settings</a></li>
        <li><a href="#"><i class="fa fa-plus-circle"></i>Add Settings</a></li>
      </ul>
    </li>

    <li class="treeview">
      <a href="#">
        <i class="fa fa-user-plus"></i> <span>Users</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
      </a>
      <ul class="treeview-menu">
        <li><a href="#"><i class="fa fa-eye"></i>All Users</a></li>
        <li><a href="#"><i class="fa fa-plus-circle"></i>Add Users</a></li>
      </ul>
    </li>
    <li class="treeview">
      <a href="#">
        <i class="fa fa-address-book"></i> <span>Active User</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
      </a>
      <ul class="treeview-menu">
        <li><a href="#"><i class="fa fa-edit"></i>Edit Profile</a></li>
        <li><a href="/logout"><i class="fa fa-power-off"></i>Log Out</a></li>
      </ul>
    </li>		
  </ul>
</div>

<!-- Header -->

@yield('content')


<!--Footer -->

<footer>
  <div class="col-sm-6">
    Copyright &copy; 2018 <a href="http://www.webtrickshome.com">Webtrickshome.com</a> All rights reserved. 
  </div>
  <div class="col-sm-6">
    <span class="pull-right">Version 2.2.3</span>
  </div>
</footer>

</body>
</html>
