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
<!-- 	<script type="text/javascript">
var sjProcess = false;
$CDdemo(document).ready(function(){
	var CaoDungdemoJs = $CDdemo("#demo-menu");
	CaoDungdemoJs.children("li").eq(0).addClass("first");
	CaoDungdemoJs.children("li").eq(CaoDungdemoJs.children("li").length - 1 ).addClass("last");

	
	CaoDungdemoJs.find("a").click(function(){
		if ($CDdemo(this).attr("target") == '_blank') {
			window.open($CDdemo(this).attr("href"));
		} else {
			location = $CDdemo(this).attr("href");
		}		
		return false;

	});	
	try{
		var current = $CDdemo("#demo-menu li.opened");
		var root = current.parents('.accordion-menu'), lis = current.parents('li');
		$CDdemo('li', root).filter(lis).addClass('opened');
	} catch(e){
		console.log(e.message);
	}
CaoDungdemoJs.find(".item-wrapper").click(function(){
	var li = $CDdemo(this).parent();
	if(!li.hasClass("opened")){
		var openedLi = li.parent().children(".opened");
		var ul = li.children(".ul-wrapper");
		openedLi.children(".ul-wrapper").slideUp(300);
		openedLi.removeClass("opened");
		if(li.children(".ul-wrapper").length !=0){
			li.addClass("opened");		
			ul.slideDown(300);
		}
}	else{
		// $CDdemo(".menu-button").css("background", "url(../images/button.png) no-repeat 0px 12px");
		li.children(".ul-wrapper").slideUp(300);
		li.removeClass("opened");
	}
	return false;
});
});
</script> -->
    <script type="text/javascript">
		$(document).ready( function (){
			var acc = document.getElementsByClassName("item-wrapper");
			var i;
			 $(".item-wrapper").click(function(){
			 	if(li.children(".ul-wrapper").length !=0){
		        $(".ul-wrapper").slideDown(1000);
		    }
		        $(".ul-wrapper").slideUp(1000);
    });
			for (i = 0; i < acc.length; i++) {
			acc[i].onclick = function(){
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