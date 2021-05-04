
<!DOCTYPE html>
<html>

<!-- Head -->
<head>

<title>Đăng Nhập Và Đăng Ký</title>
<base href="{{asset('')}}">
<base src="{{asset('')}}">
<!-- Meta-Tags -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //Meta-Tags -->

<link href="assets/css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />

<!-- Style --> <link rel="stylesheet" href="assets/css/style.css" type="text/css" media="all">

<!-- Fonts -->
<link href="//fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">
<!-- //Fonts -->

</head>
<!-- //Head -->

<!-- Body -->
<body>

	<h1>Đăng Nhập Tài Khoản</h1>

	<div class="w3layoutscontaineragileits">
	<h2></h2>
		<form action="#" method="post">
			<input type="email" Name="Username" placeholder="EMAIL" required="">
			<input type="password" Name="Password" placeholder="MẬT KHẨU" required="">
			<ul class="agileinfotickwthree">
				<li>
					<input type="checkbox" id="brand1" value="">
					<label for="brand1"><span></span>Nhớ Mật Khẩu</label>
					<a href="#">Quên Mật Khẩu?</a>
				</li>
			</ul>
			<div class="aitssendbuttonw3ls">
				<input type="submit" value="ĐĂNG NHẬP">
				<p> Đăng Ký Tài Khoản Mới <span>→</span> <a class="w3_play_icon1" href="#small-dialog1"> Click Vào Đây</a></p>
				<div class="clear"></div>
			</div>
		</form>
	</div>
	
	<!-- for register popup -->
	<div id="small-dialog1" class="mfp-hide">
		<div class="contact-form1">
			<div class="contact-w3-agileits">
				<h3>Form Đăng Ký</h3>
				<form action="#" method="post">
						<div class="form-sub-w3ls">
							<input placeholder="Họ Tên"  type="text" required="">
							<div class="icon-agile">
								<i class="fa fa-user" aria-hidden="true"></i>
							</div>
						</div>
						<div class="form-sub-w3ls">
							<input placeholder="Email" class="mail" type="email" required="">
							<div class="icon-agile">
								<i class="fa fa-envelope-o" aria-hidden="true"></i>
							</div>
						</div>
						<div class="form-sub-w3ls">
							<input placeholder="Mật Khẩu"  type="password" required="">
							<div class="icon-agile">
								<i class="fa fa-unlock-alt" aria-hidden="true"></i>
							</div>
						</div>
						<div class="form-sub-w3ls">
							<input placeholder="Nhập Lại Mật Khẩu"  type="password" required="">
							<div class="icon-agile">
								<i class="fa fa-unlock-alt" aria-hidden="true"></i>
							</div>
						</div>
					<div class="login-check">
						 <label class="checkbox"><input type="checkbox" name="checkbox" checked="">
Tôi chấp nhận các Điều khoản & Điều kiện</label>
					</div>
					<div class="submit-w3l">
						<input type="submit" value="Đăng Ký">
					</div>
				</form>
			</div>
		</div>	
	</div>
	<!-- //for register popup -->
	
	
	<script type="text/javascript" src="assets/js/jquery-2.1.4.min.js"></script>

	<!-- pop-up-box-js-file -->  
		<script src="assets/js/jquery.magnific-popup.js" type="text/javascript"></script>
	<!--//pop-up-box-js-file -->
	<script>
		$(document).ready(function() {
		$('.w3_play_icon,.w3_play_icon1,.w3_play_icon2').magnificPopup({
			type: 'inline',
			fixedContentPos: false,
			fixedBgPos: true,
			overflowY: 'auto',
			closeBtnInside: true,
			preloader: false,
			midClick: true,
			removalDelay: 300,
			mainClass: 'my-mfp-zoom-in'
		});
																		
		});
	</script>

</body>
<!-- //Body -->

</html>