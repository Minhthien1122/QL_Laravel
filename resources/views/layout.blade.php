<!doctype html>
<html>
<head>
    <meta charset="uft-8">
    <title>Product</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <base href="{{asset('')}}">
 	<link rel="stylesheet" type="text/css" href="styles/product_style.css">
</head>
<body>
    <div class="container">
    	<h1 class="banner">Cửa Hàng Điện Máy</h1>
    	<nav class="navbar navbar-expand-sm bg-dark navbar-dark justify-content-center">
		  <!-- Brand/logo -->
		  <a class="navbar-brand" href="{{route('home')}}">Trang chủ</a>
		  
		  <!-- Links -->
		  <ul class="navbar-nav">
		    <li class="nav-item">
		      <a class="nav-link" href="{{route('productlist')}}">Danh mục sản phẩm </a>
		    </li>
		    <li class="nav-item">
		      <a class="nav-link" href="{{route('productadd')}}">Thêm sản phẩm</a>
		    </li>
		  </ul>
		</nav>
    	@yield('content')
        <p class="footer">Copyright @php echo date('m/y') @endphp</p>
    </div>
</body>
</html>

