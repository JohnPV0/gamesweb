<!DOCTYPE html>
<html>
<head>
	<title>Plantilla de correo</title>
	<style>
		body {
			font-family: Arial, sans-serif;
			font-size: 14px;
			line-height: 1.5;
			color: #333;
			background-color: #f2f2f2;
			padding: 20px;
		}

		.container {
			max-width: 600px;
			margin: 0 auto;
			background-color: #fff;
			padding: 20px;
			border-radius: 5px;
			box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
		}

		.header {
			background-color: #007bff;
			color: #fff;
			padding: 10px 20px;
			border-radius: 5px 5px 0 0;
		}

		.header h1 {
			margin: 0;
			font-size: 24px;
			font-weight: bold;
		}

		.content {
			padding: 20px;
			border-bottom: 1px solid #ddd;
		}

		.footer {
			background-color: #ddd;
			color: #333;
			padding: 10px 20px;
			border-radius: 0 0 5px 5px;
			text-align: right;
			font-size: 12px;
		}
	</style>
</head>
<body>
	<div class="container">
		<div class="header">
			<h1>Correo enviado desde Laravel</h1>
		</div>
		<div class="content">
			<p><?= $mensaje ?></p>
		</div>
		<div class="footer">
			<p>John Pérez Valencia <br>
                Instituto Tecnológico de Toluca <br>
                Tecnológico Nacional de México <br>
                Ingeniería en Sistemas Computacionales <br>
            </p>
		</div>
	</div>
</body>