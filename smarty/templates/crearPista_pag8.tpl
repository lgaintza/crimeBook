<!DOCTYPE html>
<!-- Desarrollo Web en Entorno Servidor -->
<!-- Tema 6 : Aplicación completa CrimeBook -->
<!-- CrimeBook: pagina8 -->
<html>
    <head>
	<title>Crear Pista</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
    </head>

<body class="crearpistas">
        <div class="topnav" id="myTopnav">
            <a href="pagina1.php">Listado de Juegos</a>
            <a href="pagina2.php">Listado de Partidas</a>
            <a href="pagina3.php">Listado de Pruebas</a>
            <a href="pagina4.php">Partida Nueva/Editar</a>
            <a href="pagina5.php">Juego Nuevo/Editar</a>
            <a href="pagina6.php?variable=nuevaPruebaMenu">Prueba Nueva/Editar</a>
            <a href="pagina7.php">Estadísticas</a>
            <a href="pagina8.php" class="active">Crear pista</a>
            <a href="javascript:void(0);" class="icon" onclick="myFunction()">
		<i class="fa fa-bars"></i>

            </a>

	</div>
     
    
    <form action='pagina8.php' method='post'style="text-align:center;">
    <fieldset >
    <h3>Nueva pista: </h3>
    
        <div class='campo'>
            <label for='idPrueba'>idPrueba: </label>
            {if isset($idPrueba)}
            <input type='checkbox' name='idPrueba' value='{$idPrueba}'> {$idPrueba}
            {else}
                                            <select  name="idPrueba">
                                                                <option selected value="0"> Seleccione una prueba...</option>
                                                                <option value="400001">400001</option>
                                                                <option value="400002">400002</option>
                                                                <option value="400003">400003</option>
                                                                <option value="400004">400004</option>
                                                                <option value="400005">400005</option>
                                                                <option value="400006">400006</option>
                                                                <option value="400007">400007</option>
                                                                <option value="400008">400008</option>
                                                                </select>
                                                                
            {/if}

            <br><br>
      </div>
        <div class='campo'>
            <label for='id' >id:<span style="color:red;">*</span></label><select  name="id">
                                                                <option selected value="0"> Seleccione una pista...</option>
                                                                <option value="600001">600001</option>
                                                                <option value="600002">600002</option>
                                                                <option value="600003">600003</option>
                                                                <option value="600004">600004</option>
                                                                <option value="600005">600005</option>
                                                                <option value="600006">600006</option>
                                                                <option value="600007">600007</option>
                                                                <option value="600008">600008</option>
                                                                <option value="600009">600009</option>
                                                                <option value="600010">600010</option>
                                                            </select>
            <br><br>
        </div>
         <div class='campo'>
            <label for='texto' >texto:</label>
            <input type='text' name='texto' maxlength="50" />
            <br><br>
        </div>
         <div class='campo'>
            <label for='tiempo' >tiempo:</label>
            <input type='number' name='tiempo' maxlength="50" />
            <br><br>
        </div>
         <div class='intentos'>
            <label for='id' >intentos:</label>
            <input type='number' name='intentos' maxlength="50" />
            <br><br>
        </div>
        <div class='campo'>
            <br/><input type='submit' name='guardar' value='Guardar' /><br/>
        </div>

         <div class='campo'>
            <br/><input type='reset' name='cancelar' value='Cancelar' />
        </div>
    </fieldset>
    </form>
  <div id="pie">
            <form action='logoff.php' method='post'>
                <input type='submit' name='desconectar' value='Desconectar usuario'/>
            </form>
        </div>
</body>
</html>
