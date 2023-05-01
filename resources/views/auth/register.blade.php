<!DOCTYPE html>
<html>
<head>
<link href="style/css/style.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="css/tovar.css">
<script src="js/model.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- <script src="style/js/model.js"></script> -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body style="background: #83ACC4">

@include("layouts.head")


<div class="container mt-4">
			<div class="row">
				<div class="col">
					<h1>Форма регистрации</h1>
					<form action="{{route('register')}}" novalidate method="post" >
					@csrf
						
						<input type="text" name="name" class="form-control" id="name" placeholder="Имя"><br>
						<input type="text" name="surname" class="form-control" id="surname" placeholder="Фамилия"><br>
						<input type="text" name="patronymic" class="form-control" id="patronymic" placeholder="Отчество(если есть)"><br>
						<input type="email" class="form-control" id="email" name="email" placeholder="электронная почта" required>
						<br>
						
						<input type="password" class="form-control" id="password" name="password" placeholder="пароль" required>

						<br>
						<!-- <input type="password" class="form-control" id="password2" name="password2" placeholder="password" required>
						<br> -->
						<!-- <div class="form-check">
						<input class="form-check-input" type="checkbox" value="1" name="rol" id="rol">
						<label class="form-check-label" for="flexCheckDefault">
							Я хочу предостовлять услуги
						</label>
						</div> -->
						
						<button class="btn-success">Зарегистрироваться</button><br>


						
					</form> 
					
				</div>


</body>
</html>
