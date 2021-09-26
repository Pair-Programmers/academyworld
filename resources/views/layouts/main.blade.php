<!DOCTYPE html>
<html>
<head>
	@include('partials/header')
</head>
<body>

	@include('partials/navbar')

	<div class="container-fluid">

		@yield('contents')
		
	</div>
	@include('partials/footer')
</body>
</html>