<?php
/*
| 
| 	Este archivo se incluye en /resultado/index.php
| 
| 	Imprime el horario con el resultado final.
| 
| 
*/
//----------------------------------------------------------------------
//	Nombre de las materias a mostrar
//----------------------------------------------------------------------
$mat1="Pruebas de SW<br>SA-50";
$mat2="Redes I<br>SA-21";
$mat3="Verif. y validación<br>SA-26";
$mat4="Sistemas operativos<br>SA-19";
$mat5="Inglés Av. I<br>LC-5";
$mat6="Métodos numéricos<br>SA-31";
$mat7="Evolución del SW<br>SA-50";
$mat8="Tecnologías web<br>SA-10";
?>
<!-- Tabla del resultado (horario) final -->
<br><br>
<div>
	<table class="table table-responsive table-condensed">
		<tr>
			<th>Hora</th>
			<th>Lunes</th>
			<th>Martes</th>
			<th>Miércoles</th>
			<th>Jueves</th>
			<th>Viernes</th>
			<th>Sábado</th>
		</tr>
		
		<tr>
			<td>7:00 </td>
			<td class="materia restriccion"></td>
			<td class="materia restriccion"></td>
			<td class="materia restriccion"></td>
			<td class="materia restriccion"></td>
			<td class="materia restriccion"></td>
			<td></td>
		</tr>
		<tr>
			<td>8:00 </td>
			<td class="materia restriccion"></td>
			<td class="materia restriccion"></td>
			<td class="materia restriccion"></td>
			<td class="materia restriccion"></td>
			<td class="materia restriccion"></td>
			<td></td>
		</tr>
		<tr>
			<td>9:00 </td>
			<td class="materia restriccion"></td>
			<td class="materia restriccion"></td>
			<td class="materia restriccion"></td>
			<td class="materia restriccion"></td>
			<td class="materia restriccion"></td>
			<td></td>
		</tr>
		<tr>
			<td>10:00 </td>
			<td class="materia restriccion"></td>
			<td class="materia restriccion"></td>
			<td class="materia restriccion"></td>
			<td class="materia restriccion"></td>
			<td class="materia restriccion"></td>
			<td class="materia mat-7"><?php echo $mat7; ?></td>
		</tr>
		<tr>
			<td>11:00 </td>
			<td class="materia mat-1"><?php echo $mat1; ?></td>
			<td class="materia mat-1"><?php echo $mat1; ?></td>
			<td></td>
			<td class="materia mat-1"><?php echo $mat1; ?></td>
			<td></td>
			<td class="materia mat-7"><?php echo $mat7; ?></td>
		</tr>
		<tr>
			<td>12:00 </td>
			<td class="materia mat-2"><?php echo $mat2; ?></td>
			<td class="materia mat-2"><?php echo $mat2; ?></td>
			<td class="materia mat-2"><?php echo $mat2; ?></td>
			<td class="materia mat-1"><?php echo $mat1; ?></td>
			<td class="materia mat-2"><?php echo $mat2; ?></td>
			<td class="materia mat-7"><?php echo $mat7; ?></td>
		</tr>
		<tr>
			<td>13:00 </td>
			<td class="materia mat-3"><?php echo $mat3; ?></td>
			<td class="materia mat-3"><?php echo $mat3; ?></td>
			<td class="materia mat-3"><?php echo $mat3; ?></td>
			<td class="materia mat-3"><?php echo $mat3; ?></td>
			<td class="materia mat-6"><?php echo $mat6; ?></td>
			<td></td>
		</tr>
		<tr>
			<td>14:00 </td>
			<td class="materia mat-5"><?php echo $mat5; ?></td>
			<td class="materia mat-5"><?php echo $mat5; ?></td>
			<td></td>
			<td class="materia mat-8"><?php echo $mat8; ?></td>
			<td class="materia mat-8"><?php echo $mat8; ?></td>
			<td></td>
		</tr>
		<tr>
			<td>15:00 </td>
			<td class="materia mat-5"><?php echo $mat5; ?></td>
			<td class="materia mat-5"><?php echo $mat5; ?></td>
			<td class="materia mat-6"><?php echo $mat6; ?></td>
			<td class="materia mat-8"><?php echo $mat8; ?></td>
			<td class="materia mat-8"><?php echo $mat8; ?></td>
			<td></td>
		</tr>
		<tr>
			<td>16:00 </td>
			<td class="materia mat-4"><?php echo $mat4; ?></td>
			<td class="materia mat-4"><?php echo $mat4; ?></td>
			<td class="materia mat-6"><?php echo $mat6; ?></td>
			<td class="materia mat-4"><?php echo $mat4; ?></td>
			<td class="materia mat-4"><?php echo $mat4; ?></td>
			<td></td>
		</tr>
		<tr>
			<td>17:00 </td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
		</tr>
		<tr>
			<td>18:00 </td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
		</tr>
		<tr>
			<td>19:00 </td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
		</tr>
		<tr>
			<td>20:00 </td>
			<td class="materia restriccion"></td>
			<td class="materia restriccion"></td>
			<td class="materia restriccion"></td>
			<td class="materia restriccion"></td>
			<td class="materia restriccion"></td>
			<td></td>
		</tr>	
	</table>
</div>