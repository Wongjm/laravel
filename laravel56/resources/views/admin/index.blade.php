<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
<meta name="description" content="">
<meta name="author" content="">
<title>喜帖吧商户端</title>

<!-- font link  -->
<!-- <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,400i,500,700" rel="stylesheet"> -->

<!-- Bootstrap Core CSS -->
<link href="{{asset('admin/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
<!-- Morris Charts CSS -->
<link href="{{asset('admin/vendor/morrisjs/morris.css')}}" rel="stylesheet">
<!-- Custom CSS -->
<link href="{{asset('admin/css/adminnine.css')}}" rel="stylesheet">

<!-- Custom Fonts -->
<link href="{{asset('admin/vendor/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">


</head>
<!-- <a href="aboutus.html">Click here!</a> -->
<body>
<!-- loader 刷新层-->
<div class="loader"><h1 class="loadingtext">喜帖吧商户端</h1><p>Welcome to use...</p><br><img src="{{asset('admin/img/loader2.gif')}}" alt=""> </div>
<!-- loader ends -->        
    
<div id="wrapper">


  <!-- 侧边栏 -->

  <div class="navbar-default sidebar" >
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" > <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      <a class="navbar-brand" href="index.html">Admin9</a> </div>
    <div class="clearfix"></div>
    <div class="sidebar-nav navbar-collapse"> 
      
      <!-- user profile pic -->
      <div class="userprofile text-center">
        <div class="userpic"> <img src="http://placehold.it/100x100" alt="" class="userpicimg"> <a href="aboutus.html" class="btn btn-primary settingbtn"><i class="fa fa-home"></i></a> </div>
        <h3 class="username">Lucky Sans</h3>
        <p>Gujarat, India</p>
      </div>
      <div class="clearfix"></div>
      <!-- user profile pic -->
      
      <ul class="nav" id="side-menu">


<!--         <li> <a href="javascript:void(0)" class="menudropdown"><i class="fa fa-cubes"></i>内容管理<span class="badge">12</span><span class="fa arrow"></span></a>
          <ul class="nav nav-second-level">
        <li> <a href="index.html"><i class="fa fa-dashboard fa-fw"></i>模版中心</a> </li>
        <li> <a href="adList.html"><i class="fa fa-picture-o fa-fw"></i>轮播图管理</a> </li>
        <li> <a href="addMainitem.html"><i class="fa fa-th-list fa-fw"></i>栏目管理</a> </li>
        <li> <a href="boardMsg.html"><i class="fa fa-pencil fa-fw"></i>留言板管理</a> </li>
        <li> <a href="ContactUs.html"><i class="fa fa-phone-square fa-fw"></i>联系我们管理</a> </li>
        <li> <a href="AboutMe.html"><i class="fa fa-male fa-fw"></i>公司介绍管理</a> </li>
        <li> <a href="systemManagement.html"><i class="fa fa-cog fa-fw"></i>系统管理</a> </li>
        <li> <a href="login.html"><i class="fa fa-sign-out fa-fw"></i>注销</a> </li>
          </ul>
        </li>
 -->


        <li> <a href="index.html"><i class="fa fa-dashboard fa-fw"></i>模版中心</a> </li>
        <li> <a href="adList.html"><i class="fa fa-picture-o fa-fw"></i>轮播图管理</a> </li>
        <li> <a href="addMainitem.html"><i class="fa fa-th-list fa-fw"></i>栏目管理</a> </li>
        <li> <a href="boardMsg.html"><i class="fa fa-pencil fa-fw"></i>客户留言</a> </li>
        <li> <a href="ContactUs.html"><i class="fa fa-phone-square fa-fw"></i>联系我们</a> </li>
        <li> <a href="AboutMe.html"><i class="fa fa-male fa-fw"></i>公司介绍</a> </li>
        <li> <a href="systemManagement.html"><i class="fa fa-cog fa-fw"></i>主页管理</a> </li>
          </ul>


      </ul>
    </div>
    <!-- /.sidebar-collapse --> 
  </div>
  <!-- /.navbar-static-side -->
  
  <div id="page-wrapper">

    <div class="row">
      <nav class="navbar navbar-default navbar-static-top" style="margin-bottom: 0">
        <button class="menubtn pull-left btn "><i class="glyphicon  glyphicon-th"></i></button>
      <ul class="nav navbar-top-links navbar-right">
          </li>
          <!-- /.dropdown -->
          <li class="dropdown"> <a class="dropdown-toggle userdd" data-toggle="dropdown" href="javascript:void(0)">
            <div class="userprofile small "> <span class="userpic"> <img src="http://placehold.it/100x100" alt="" class="userpicimg"> </span>
              <div class="textcontainer">
                <h3 class="username">欢迎您！</h3>
                <p>2222222</p>
              </div>
            </div>
            <i class="caret"></i> </a>
            <ul class="dropdown-menu dropdown-user">
              <li> <a href="socialprofile.html"><i class="fa fa-user fa-fw"></i>个人信息</a> </li>
              <li> <a href="login.html"><i class="fa fa-gear fa-fw"></i>注销</a> </li>
            </ul>
            <!-- /.dropdown-user --> 
          </li>
          <!-- /.dropdown -->
        </ul>
        <!-- /.navbar-top-links --> 
      </nav>
    </div>


    <div class="row">
      <div class="col-md-12  header-wrapper" >
        <h1 class="page-header">模版中心</h1>
        <p class="page-subtitle">This is 模版中心</p>
      </div>
      <!-- /.col-lg-12 --> 
    </div>

<!--     <div class="row">

      <div class="col-lg-3 col-sm-6">
        <div class="panel panel-green">
          <div class="panel-heading">
            <div class="row">
              <div class="col-xs-3"> <i class="fa fa-tasks fa-2x"></i> </div>
              <div class="col-xs-9 text-right">
                <div class="huge">12</div>
                <div>今日主页访问量</div>
              </div>
            </div>
          </div>
          <a href="javascript:void(0)">
          <div class="panel-footer"> <span class="pull-left">View Details</span> <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
            <div class="clearfix"></div>
          </div>
          </a> </div>
      </div>

      </div>

 -->    

    <div class="row">
      <!-- /.col-lg-3 col-md-4 -->
        <div class="col-lg-3 col-md-4 col-sm-6">
            <div class="panel panel-default userlist">
              <div class="panel-body text-center">
                <div class="product_item">
                  <img src="{{asset('admin/img/product3.jpg')}}" alt="" class="productpic">
                  <h3 class="username">模版3</h3>
                  <p>模版3模版3模版3模版3模版3模版3模版3</p>
                </div>
              </div>
              <div class="panel-footer text-center"> <a href="" class="btn btn-primary">选中</a><a href="" class="btn btn-default">预览</a>  </div>
            </div>
        </div>
        <!-- /.col-lg-3 col-md-4 -->          
    </div>
    <!-- /.row -->     


    </div>



  <!-- /#page-wrapper --> 
  
</div>
<!-- /#wrapper -->

</div>
<!-- /.panel .chat-panel -->
    

    
<!-- jQuery --> 
<script src="{{asset('admin/vendor/jquery/jquery.min.js')}}"></script> 
<!-- Bootstrap Core JavaScript --> 
<script src="{{asset('admin/vendor/bootstrap/js/bootstrap.min.js')}}"></script> 
<!-- Custom Theme JavaScript --> 
<script src="{{asset('admin/js/adminnine.js')}}"></script> 

</body>
</html>
