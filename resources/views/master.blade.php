<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Nông sản Bảo Lâm </title>
    <link rel="shortcut icon" href="http://localhost:8082/NongSanBaoLam-main/public/favicon.ico">
    <base href="{{asset('')}}">
	<link href='http://fonts.googleapis.com/css?family=Dosis:300,400' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="client/assets/dest/css/font-awesome.min.css">
	<link rel="stylesheet" href="client/assets/dest/vendors/colorbox/example3/colorbox.css">
	<link rel="stylesheet" href="client/assets/dest/rs-plugin/css/settings.css">
	<link rel="stylesheet" href="client/assets/dest/rs-plugin/css/responsive.css">
	<link rel="stylesheet" title="style" href="client/assets/dest/css/style.css">
	<link rel="stylesheet" href="client/assets/dest/css/animate.css">
	<link rel="stylesheet" title="style" href="client/assets/dest/css/huong-style.css">
</head>
<body>

	@include('header');
	
    @yield('content')

	@include('footer');

	


	<!-- include js files -->
	{{-- thêm thư viện jquery --}}
	{{-- <script src="client/assets/dest/js/jquery-3.3.1.min.js"></script> --}}

	<script src="client/assets/dest/js/jquery.js"></script>
	<script src="client/assets/dest/vendors/jqueryui/jquery-ui-1.10.4.custom.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
	<script src="client/assets/dest/vendors/bxslider/jquery.bxslider.min.js"></script>
	<script src="client/assets/dest/vendors/colorbox/jquery.colorbox-min.js"></script>
	<script src="client/assets/dest/vendors/animo/Animo.js"></script>
	<script src="client/assets/dest/vendors/dug/dug.js"></script>
	<script src="client/assets/dest/js/scripts.min.js"></script>
	<script src="client/assets/dest/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
	<script src="client/assets/dest/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
	<script src="client/assets/dest/js/waypoints.min.js"></script>
	<script src="client/assets/dest/js/wow.min.js"></script>
	<!--customjs-->
	<script src="client/assets/dest/js/custom2.js"></script>

	{{-- sort --}}
	<script type="text/javascript">
		$(document).ready(function($) { 
		//alert("hello");
		

		$('#sort').on('change',function(){
			var url = $(this).val();
			//alert(url);

			if(url)
			{
				window.location = url;
			}
			return false;
		});
	});
	</script>

	<script>
	$(document).ready(function($) {    
		$(window).scroll(function(){
			if($(this).scrollTop()>150){
			$(".header-bottom").addClass('fixNav')
			}else{
				$(".header-bottom").removeClass('fixNav')
			}}
		)
	})
	</script>
</body>
</html>
