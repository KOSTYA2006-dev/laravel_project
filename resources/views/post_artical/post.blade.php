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
<body style="background-color: #83ACC4;">

@include("layouts.head")


<div class="container mt-4">
			<div class="row">
				<div class="col">
					<h1>Пост услуг</h1>
					<form action="{{ route('PostUchenik', [Auth::user()->id])}}" novalidate method="post" enctype="multipart/form-data" id="upload-image">
					@csrf
						
						

						<input type="text" name="artical_name" class="form-control" id="artical_name" placeholder="название работы(научной статьи)"><br>
                        <textarea class="form-control" name="artical_description" placeholder="Описание" rows="5" cols="80" id="TITLE"></textarea>
                        <br>

						
						
                        <textarea class="form-control" name="cost" placeholder="Работа подробное описание, решение" rows="5" cols="80" id="TITLE"></textarea>
                        <br>


						<br>
                        
                        <label class="input-file">
                            <span class="input-file-text" type="text"></span>
                            <input type="file" name="previu_img">        
                            <span class="input-file-btn">Выберите файл</span>
                        </label>
                        <br>
                        
                        <br>
                        <select class="form-control" name="colledj">
                            <option value="общее" selected>общее</option>
                            <option value=" механика" selected> механика</option>
                            <option value="молекулярная физика" selected>молекулярная физика</option>
                            <option value="электромагнетизм" selected>электромагнетизм</option>
                            <option value="оптика" selected>оптика</option>
                            <option value="квантовая механика"selected>квантовая механика</option>
                            <option value="термодинамика"selected>термодинамика</option>
                            
                            
                        </select>
                        <br>
                        <br>
                        <input class="form-control" id="date" name="begin">
                        <script type="text/javascript">
                        document.getElementById('date').value = Date();
                        </script>
                        <br>


						<!-- <input type="password" class="form-control" id="password2" name="password2" placeholder="password" required>
						<br> -->
						
						<button class="btn-success">Запоститить</button><br>


						
					</form> 
					
				</div>


</body>
</html>
