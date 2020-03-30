<?php
/* Smarty version 3.1.34-dev-7, created on 2020-03-27 06:40:15
  from '/home/etxea/NetBeansProjects/DWES/06_1/smarty/templates/crearPista_pag8.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e7d91bf73d2c1_90956092',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3f9e062fafbc497ef70088ce9b3575507884fa0d' => 
    array (
      0 => '/home/etxea/NetBeansProjects/DWES/06_1/smarty/templates/crearPista_pag8.tpl',
      1 => 1585268742,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e7d91bf73d2c1_90956092 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<!-- Desarrollo Web en Entorno Servidor -->
<!-- Tema 6 : Aplicación completa CrimeBook -->
<!-- crimeBook: pagina8 -->
<html>
    <head>
	<title>Estadisticas</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
    </head>

<body class="crearpistas">
        <div class="topnav" id="myTopnav">
            <a href="pagina1.php">Listado<br>de Juegos</a>
            <a href="pagina2.php">Listado<br>de Partidas</a>
            <a href="pagina3.php">Listado<br>de Pruebas</a>
            <a href="pagina4.php">Partida Nueva<br>Editar Partida</a>
            <a href="pagina5.php">Juego Nuevo<br>Editar Juego</a>
            <a href="pagina6.php">Prueba Nueva<br>Editar Prueba</a>
            <a href="pagina7.php">Estadísticas</a>
            <a href="pagina8.php" class="active">Crear Pista</a>
            <a href="javascript:void(0);" class="icon" onclick="myFunction()">
		<i class="fa fa-bars"></i>
            </a>
	</div>
     
   
    <form action='pagina8.php' method='post'>
    <fieldset >
        <br/>
        <div class='campo'>
            <label for='idPrueba' >idPrueba:</label>
            <input type='text' name='idPrueba' maxlength="50" /><br/><br/>
        </div>
        <div class='campo'>
            <label for='id' >id:</label>
            <input type='text' name='id' maxlength="50" /><br/><br/>
        </div>
         <div class='campo'>
            <label for='texto' >texto:</label>
            <input type='text' name='texto' maxlength="50" /><br/><br/>
        </div>
         <div class='campo'>
            <label for='tiempo' >tiempo:</label>
            <input type='text' name='tiempo' maxlength="50" /><br/><br/>
        </div>
         <div class='intentos'>
            <label for='id' >intentos:</label>
            <input type='text' name='intentos' maxlength="50" /><br/><br/>
        </div>
<br>
        <div class='campo'>
            <input type='submit' name='guardar' value='Guardar'/>
            <input type='reset' name='cancelar' value='Cancelar'/>
        </div>
    </fieldset>
    </form>
<br>

        <div id="pie">
            <form action='logoff.php' method='post'>
                <input type='submit' name='desconectar' value='Desconectar usuario'/>
            </form>
        </div>
    </body>
</html>
<?php }
}
