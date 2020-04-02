<?php
/* Smarty version 3.1.34-dev-7, created on 2020-04-02 10:04:42
  from 'C:\xampp\htdocs\CrimeBook\crimeBook\smarty\templates\partida_pag4.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e859c9ac17a64_60005919',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3454c76dd0bbb6e71e82a42f14631e135825b137' => 
    array (
      0 => 'C:\\xampp\\htdocs\\CrimeBook\\crimeBook\\smarty\\templates\\partida_pag4.tpl',
      1 => 1585678028,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:listapartida.tpl' => 1,
    'file:listaequipos.tpl' => 1,
  ),
),false)) {
function content_5e859c9ac17a64_60005919 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<!-- Desarrollo Web en Entorno Servidor -->
<!-- Tema 6 : Aplicación completa CrimeBook -->
<!-- crimeBook: pagina4 -->
<html>
    <head>
	<title>Listado de Juegos</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
    </head>
    <body class="pagpruebas">
        <div class="topnav" id="myTopnav">
            <a href="pagina1.php">Listado de Juegos</a>
            <a href="pagina2.php">Listado de Partidas</a>
            <a href="pagina3.php">Listado de Pruebas</a>
            <a href="pagina4.php" class="active">Partida Nueva/Editar</a>
            <a href="pagina5.php">Juego Nuevo/Editar</a>
            <a href="pagina6.php">Prueba Nueva/Editar</a>
            <a href="pagina7.php">Estadísticas</a>
            <a href="pagina8.php">Crear pista</a>
            <a href="javascript:void(0);" class="icon" onclick="myFunction()">
		<i class="fa fa-bars"></i>
            </a>
	</div>

<?php $_smarty_tpl->_assignInScope('export_accion', $_smarty_tpl->tpl_vars['accion_pag4']->value);?>
<p align="center">
<?php if ($_smarty_tpl->tpl_vars['accion_pag4']->value == 'editar') {?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['partida4']->value, 'partida');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['partida']->value) {
?>
        <?php $_smarty_tpl->_assignInScope('partidanombre', $_smarty_tpl->tpl_vars['partida']->value->getnombre());?>
        <?php $_smarty_tpl->_assignInScope('partidaduracion', $_smarty_tpl->tpl_vars['partida']->value->getduracion());?>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <?php $_smarty_tpl->_assignInScope('equipos4', $_smarty_tpl->tpl_vars['equipos4']->value);?>
    <?php $_smarty_tpl->_assignInScope('textoboton1', "Añadir Equipo a la Partida Cargada");?>
    <?php $_smarty_tpl->_assignInScope('textoboton2', "Actualizar Tiempo para esta Partida");?>
    <?php $_smarty_tpl->_assignInScope('aviso1', "Puede modificar el 'Tiempo de Partida' en la celda 'Duración de la Partida'");?>
    Acceso para Editar una partida<br>
    Si desea Crear una partida nueva, acceda desde la Página  <a href="pagina1.php">Listado de Juegos</a> y pulse 'Nueva Partida'
<?php }
if ($_smarty_tpl->tpl_vars['accion_pag4']->value == 'crear') {?>
        <?php $_smarty_tpl->_assignInScope('textoboton1', "Antes de Añadir Equipo debe guardar la Partida Nueva");?>
    <?php $_smarty_tpl->_assignInScope('textoboton2', "Guardar Nueva Partida");?>
    <?php $_smarty_tpl->_assignInScope('aviso1', "Para Guardar Nueva Partida rellene celdas de Nombre y Duración<br> y Pulse Botón Guardar Nueva Partida");?>
    Acceso para Crear una Nueva Partida<br>
    Si desea Editar una Partida en uso, acceda desde la Página <a href="pagina2.php">Listado de Partidas</a> y pulse 'Editar Partida'
<?php }?>
<br>
<?php if ($_smarty_tpl->tpl_vars['nombrejuego']->value == 'No hay Juego Seleccionado') {?>
   <h2 style="color:#ff0000" align="center">No hay Juego Seleccionado</h2>
<?php } else { ?>
    <div align="center"><h2>Juego seleccionado: <?php echo $_smarty_tpl->tpl_vars['nombrejuego']->value;?>
</h2></div>
<?php }?>
<h2 align="center">Duración de la partida</h2>
<form name="partida" action="pagina4.php" method="post">
<div id="partidas">
    <?php $_smarty_tpl->_subTemplateRender("file:listapartida.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</div>

<h2 align="center">Datos sobre los Equipos</h2>
<div id="equipos">
    <?php $_smarty_tpl->_subTemplateRender("file:listaequipos.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</div>
<h3 align="center">
    Nombre del Equipo: <input <?php if ($_smarty_tpl->tpl_vars['accion_pag4']->value == "crear") {?> disabled="true" <?php }?> style=" HEIGHT: 30px" type="text" size="100" align="center" name="nombre_equipo" placeholder="  Introduzca nombre de nuevo Equipo"><br/>
</h3>
<?php if ($_smarty_tpl->tpl_vars['accion_pag4']->value == "crear") {?>
<p align="center" style="color: #999">
Para añadir Equipo a la Partida Creada, primero debe rellenar Tabla 'Duración de la Partida'<br>
y pulse 'Guardar Nueva Partida'
</p>
<div id="botonesirapag" align="center">
    Después de CREAR Partida,<br>
    <input type="radio" value="pag2" name="botonesirapag" checked="true">Ir a Mostrar Listado de Partidas<br>
    <input type="radio" value="pag4editar" name="botonesirapag">Pasar a Editar para meter Equipos en la nueva Partida creada<br>
    <input type="radio" value="pag4crear" name="botonesirapag">Seguir en Crear para poder añadir más Partidas<br>
</div>
<?php }?>
<br>
<?php if ($_smarty_tpl->tpl_vars['nombrejuego']->value !== 'No hay Juego Seleccionado') {?>
<div align="center">
    <button <?php if ($_smarty_tpl->tpl_vars['accion_pag4']->value == "crear") {?> disabled="true" <?php }?> class="button" name='partida_bt' value='anadir'><?php echo $_smarty_tpl->tpl_vars['textoboton1']->value;?>
</button>
    <button class="button" name='partida_bt' value='guardar'><?php echo $_smarty_tpl->tpl_vars['textoboton2']->value;?>
</button>
</div>
<?php } else { ?>
<div align="center">
    <button class="button" name='irapag1' value='irapag1'>Pulse para Ir a Página1 y Seleccionar un Juego</button>
 </div>   
<?php }?>
</form>
       <div id="pie">
            <form action='logoff.php' method='post'>
                <input type='submit' name='desconectar' value='Desconectar usuario'/>
            </form>
        </div>
</body>    
</html><?php }
}