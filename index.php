<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/style.css">
<script>
function mensaje(){
  alert("Hola JavaScript");
  analizar();   
}
function analizar(){
  var _nom=document.getElementById("Nombre").value;
  if(_nom=="")
  {
      alert("Falta Nombre");
      return;
  }  
}
</script>
</head>
<body>

<form action="validar.php" method="POST" id="miForm">
  Nombre Completo:<br>
  <input type="text" name="NombreAlumno" id="Nombre" placeholder="Tu Nombre...">
  <br>
  Edad:<br>
  <input type="text" name="EdadAlumno" id="Edad" placeholder="Tu Edad...">
  <br><br>
  <input type="button" value="ENVIAR" onclick="mensaje()">
</form> 

<p>If you click the "Submit" button, the form-data will be sent to a page called "/action_page.php".</p>

</body>
</html>