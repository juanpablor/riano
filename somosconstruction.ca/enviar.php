<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>mensaje enviado</title>
<link href='http://fonts.googleapis.com/css?family=Quicksand' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="fonts/fonts.css" />
<link rel="stylesheet" href="js/estilos.css" />
<script src="file:///C|/Users/Roberto Jimeno/Documents/Novic artes graficas/web/Scripts/AC_RunActiveContent.js" type="text/javascript"></script>
<style type="text/css">
<!--
*{  padding:0px;
	margin:0px;
	}
.caja {
	position:absolute;
	width:350px;
	height:auto;
	top:150px;
	left:50%;
	margin-left:-175px;
	background-color:#ccc;
	border-radius:5px;
	-moz-border-radius:5px;
	-webkit-border-radius:5px;
	text-align:center;
	font-family:Arial, Helvetica, sans-serif;
	font-size:12px;
	padding:15px;
	box-shadow:0px 2px 0px #999999;
	}	
	
.caja h1 {
	font-family: 'Quicksand', sans-serif;
	color: #000;
	font-size: 24px;
	padding:20px 0px;
	}

.caja a {
	display:block;
	width:250px;
	height:auto;
	color:#333;
	font-family:Arial, Helvetica, sans-serif;
	font-size:14px;
	padding:10px 0px;
	background-color:#999;
	border-radius:4px;
	-moz-border-radius:4px;
	-webkit-border-radius:4px;
	left:50px;
	margin:15px auto;
	text-decoration:none;
	}
	
.caja a:hover {
	color:#FFF;
	background-color:#00BFFF;
	}

-->
</style></head>
<script>
function validar(form1){
if(document.form.nombre.value =="" || document.form.correo.value==""|| document.form.telefono.value=="" || document.form.comentario.value==""){
alert("debe llenar los campos vacios");
	}
}
</script>


<?php 
$nombre=$_POST['nombre'];
$correo=$_POST['correo'];
$telefono=$_POST['telefono'];
$comentario=$_POST['comentario'];

$para=$_POST['correo'];

$remitente="info@somosconstruction.ca";
$headers = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
$headers .= "From: SOMOS DESIGN & CONSTRUCTION <$remitente>\r\n";
$headers .= "Reply-To: $remitente\r\n";
$headers .= "Return-path: $remitente\r\n"; 
$headers .= "Bcc:novicartesgraficas@gmail.com\r\n";


$mensaje='
<html>
<head>

<style type="text/css">

.cuerpo {
position:absolute;
width:600px;
height:auto;
top:20px;
left:20px;
background-color: #CCC;
font: Arial, Helvetica, sans-serif;
color:#999;
font-size:12pt;
}

.imagen {
position:absolute;
width:250px;
height:100px;
top:10px;
left:10px;
}

.contenido_mensaje {
position:absolute;
width:400px;
height:auto;
top:150px;
left:10px;
padding:50px 0px
background-color: #FFF;
font: Arial, Helvetica, sans-serif;
color:#999;
font-size:12pt;
border-radius:5px;
-moz-border-radius:5px;
-webkit-border-radius:5px;
}

h1 {
	color:ff0;
	}
	
.texto1 {
position:absolute;
width:400px;
height:auto;
top:600px;
left:10px;
padding:50px 0px
background-color: #FFF;
font: Arial, Helvetica, sans-serif;
color:#999;
font-size:12pt;
border-radius:5px;
-moz-border-radius:5px;
-webkit-border-radius:5px;
}

.texto1 a {
	display:block;
	width:250px;
	height:auto;
	color:#333;
	font-family:Arial, Helvetica, sans-serif;
	font-size:14px;
	padding:5px 0px;
	background-color:#999;
	border-radius:4px;
	-moz-border-radius:4px;
	-webkit-border-radius:4px;
	
	margin:15px auto;
	text-decoration:none;
	}
	
.texto1 a:hover {
	color:#FF0;
	background-color:#900;
	}

</style>
</head>

<body>

<div class="cuerpo">

<div class="imagen"><img src="http://somosconstruction.ca/img/logo.png" width="300" height="98" /></div>

<div class="contenido_mensaje">

	<h1>Name:</h1><br>
	'.$nombre.'<br><br>

	<h1>Email:</h1><br>
	'.$correo.'<br><br>

	<h1>Phone:</h1><br>
	'.$telefono.'<br><br>

	<h1>Coment:</h1><br>
	'.$comentario.'<br><br>
	
</div>
<div class="texto1">
Your data arrived correctly , we are confirming the information, <br>
in the next 48 hours we will confirm by email.<br><br>

<a href="http://somosconstruction.ca">www.somosconstruction.ca</a>
</div>

</div>
</body>
</html>
';

$asunto='SOMOS DESIGN & CONSTRUCTION';
if($nombre!="" || $correo!="" || $telefono!="" || $comentario!=""){
mail($para,$asunto,$mensaje,$headers);
}
?>





<body>
<form id="form" name="form" method="post" action="" onsubmit="validar()">
</form>
<div class="caja">
	<img src="img/logo.png" width="300" height="98" />
    <h1>Thank you for contacting us!</h1>
    We will respond as soon as possible.<br /><br/>
    <br />
    <a href="index.html" target="_self">Back</a>

</div>
</body>
</html>
