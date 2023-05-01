<!DOCTYPE html>
<html>
<head>
<link href="style/css/style.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<script src="js/model.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- <script src="style/js/model.js"></script> -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body style="background: #83ACC4">

@include("layouts.head")

<div class="container mt-4">
			<div class="row">
				<div class="col">
					<h1>Форма авторизации</h1>
					<form action="{{route('login')}}" novalidate autocomplete="off" method="post" >
					@csrf
						
						
						<input type="email" class="form-control" id="email" name="email" placeholder="email" required>
						<br>
						
						<input type="password" class="form-control" id="password" name="password" placeholder="password" required>

						<br>
						<!-- <input type="password" class="form-control" id="password2" name="password2" placeholder="password" required>
						<br> -->
						
						<button class="btn-success">Войти</button><br>


						
					</form> 
					
				</div>


</body>
</html>