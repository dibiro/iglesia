<!DOCTYPE html>
<html lang="es">
	<head>
		   <title>DIOS es  Amor</title>
		    
	<body>
				<center>
			<div class="container2">
				<td><img src='img/avatar/".$_SESSION['idus'].".jpg' width='75px' height='75px' class='img-rounded'></td>
				<font class='titulo'><br><br></font>
				<div class="btn-group" role="group" aria-label="leopoldo">
				  <a type="button" class="btn btn-info btn-lg " href="principal.php">inicio</a>
				  <a type="button" class="btn btn-info btn-lg " href="micuenta.php">Mi Cuenta</a>
				  <a type="button" class="btn btn-info btn-lg " href="buscar.php">Buscar Estudio</a>
				  <a type="button" class="btn btn-info btn-lg " href="usuarios.php">Gestor De Usuarios</a>
				  <a type="button" class="btn btn-info btn-lg " href="index.html">Salir</a>
				<br>
			</div>
			</div></center>
			<form method="POST" action="agg.php" >
			<div class="container">
				<div class="row-fluid">
					<div class="span12">
						<center><br>
						<font class='titulo'> Disfruta momentos de intimidad con Dios. </font>
						<br>
						<font class='titulo'> En Una Vida Devocional Profunda </font>
						<br><br>
						<font class='parrafo'>PASAJE BIBLICO ESTUDIADO:</font><input class="span8 "  placeholder='PASAJE BIBLICO ESTUDIADO' required type="textarea" name='pasaje' id='pasaje' >
						</center>
					</div>

				</div>
				<div class="row-fluid">
					<div class="span12">
						<div class="span4">
							<div class="cajas">
								
							</div>
						</div>
						<div class="span3">
							<div class="cajas">
									
							</div>
						</div>
						
						<div class="span5">
							<div class="cajas">
								Lugar y	Fecha:<input class="span5 "  placeholder='Lugar' required type="text" name='lugar' id='lugar' >,<?php echo date('d/m/Y'); ?><br>
					   			Hora decomienzo devocional:<input class="span5 "   required type="time" name='hora' id='hora' ><br>
					   			Estudio Devocional Numero: 
								<br>
					   			Ayuno: Si <input type="radio" value="si" id="ayuno" name="ayuno" /> No <input type="radio" value="no" id="ayuno" name="ayuno"/> &nbsp;&nbsp;&nbsp;&nbsp;
							</div>
						</div>
					</div>
				</div>
			<div class="row-fluid">
					<div class="span12">
						<center><br>
						 
						<font class='parrafo'>Mandamiento A Obedecer:</font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><textarea class="span7 " name='mandamiento' id='mandamiento' ></textarea>
						</center>
					</div>
			</div>
			<div class="row-fluid">
					<div class="span12">
						<center><br>
						 
						<font class='parrafo'>Promesas Para Una Vida Abundante:</font> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><textarea class="span7 " name='promesa' id='promesa' ></textarea>
						</center>
					</div>
			</div>
			<div class="row-fluid">
					<div class="span12">
						<center><br>
						 
						<font class='parrafo'>Ense�anza para el desarrollo espiritual:</font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><textarea class="span7 " name='ense�anza' id='ense�anza' ></textarea>
						</center>
					</div>
			</div>
			<div class="row-fluid">
					<div class="span12">
						<center><br>
						 
						<font class='parrafo'>Aplicacion Personal:</font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><textarea class="span7 " name='aplicacion' id='aplicacion' ></textarea>
						</center>
					</div>
			</div>
			<div class="row-fluid">
					<div class="span12">
						<center><br>
						 
						<font class='parrafo'>Texto Rema:</font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><textarea class="span7 " name='rema' id='rema' ></textarea>
						</center>
					</div>
			</div>
			<div class="row-fluid">
					<div class="span12">
						<center><br>
						 
						<font class='parrafo'>Reflexi�n:</font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><textarea class="span7 " name='reflexion' id='reflexion' ></textarea>
						</center>
					</div>
			</div>
			<div class="row-fluid">
					<div class="span12">
					<center><button class="btn btn-large btn-primary span12" type="submit"> <i style='color:lightgrey;' class="icon-plus "></i> <strong>Agregar Estudio</strong></button></center>
			</div>
			</div>
			</div>
		</form>
		</div>

	</body>
</html>