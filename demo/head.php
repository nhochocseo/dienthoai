<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Demo HTML</title>
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="bootstrap/css/bootstrap-theme.min.css">
	<link rel='stylesheet' id='wpbootstrap-theme-css'  href='bootstrap/css/bootstrap-theme.min.css?ver=4.4.2' type='text/css' media='all' />
	<link rel='stylesheet' id='wpfont-awesome-css'  href='bootstrap/font-awesome-4.5.0/css/font-awesome.min.css?ver=4.4.2' type='text/css' media='all' />
	<script type='text/javascript' src='bootstrap/js/jquery.js?ver=1.11.3'></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
	<script src="bootstrap/js/jquery-1.7.2.js"></script>
    <script type="text/javascript">
		$(document).ready( function (){
			var CDdemoJsMenu = document.getElementsByClassName("item-wrapper");
			var i;
			for (i = 0; i < CDdemoJsMenu.length; i++) {
				CDdemoJsMenu[i].onclick = function(){
					this.classList.toggle("selected");
					this.nextElementSibling.classList.toggle("show");
			}
		}
		});
	</script>
</head>
<body>
	<div id="wraper">
		<div class="navbar navbar-inverse">
			<div class="logo">
				<img src="logo.png" alt="Demo Shop">
			</div>
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                 </button>
            </div>
                <div class="navbar-collapse collapse" id="menu">
                    <ul class="nav navbar-nav">
	                    <li><a href="">Trang chủ</a></li>
	                    <li><a href="">Giới thiệu</a></li>
	                    <ul class="nav navbar-nav">
	                        <li class="dropdown">
	                            <a data-toggle="dropdown" href="">Tài khoản<span class="caret"></span></a>
	                            <ul class="dropdown-menu">
	                                <li><a href="#">Thông tin</a></li>
	                                <li><a href="#">Đổi mật khẩu</a></li>
	                                <li><a href="#">Thoát</a></li>
	                            </ul>
	                         </li>
	                    </ul>
	                    <ul class="nav navbar-nav">
	                        <li class="dropdown">
	                            <a data-toggle="dropdown" href="">Tài khoản<span class="caret"></span></a>
	                            <ul class="dropdown-menu">
	                                <li><a href="#">Thông tin</a></li>
	                                <li><a href="#">Đổi mật khẩu</a></li>
	                                <li><a href="#">Thoát</a></li>
	                            </ul>
	                         </li>
	                    </ul>
                    </ul>
                    <form class="navbar-form navbar-right" role="search">
    					<input type="search" placeholder="Tìm Kiếm....">
					</form>
                </div>
            </div>