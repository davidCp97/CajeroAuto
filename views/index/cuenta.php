
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <div id="menu">
        <ul>
            <li>Home</li>
            <li class="cerrar-sesion"><a href="includes/logout.php">Cerrar sesión</a></li>
        </ul>
    </div>

    <section>
	<center><h1>Bienvenido <?php echo $user->getNombre();  ?></h1></center>
    </section>
    


<div class="container">
	<div class="row">
		<div class="col-md-12">
			<center><h1>Cuentas</h1></center>
			<br>			
			<center>
			<button type="button" onclick="ModalRegister();" class="btn btn-success">Agregar Cuenta</button>
			</center>
			<br>
		<div id="information">
			<button onclick="read();"></button>
		</div>			
		</div>
	</div>
</div>

</body>