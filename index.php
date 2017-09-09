<?php
echo "
<!DOCTYPE html>
<html lang='en'>
<	head>
		<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css' integrity='sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ' crossorigin='anonymous'>
    	<meta charset='utf-8'>
    	<title> Lavage Reservation </title>
    
	<style>
	#customers {
    		font-family: 'Trebuchet MS', Arial, Helvetica, sans-serif;
    		border-collapse: collapse;
    		width: 100%;
		}

	#customers td, #customers th {
    		border: 1px solid #ddd;
    		padding: 8px;
		}

	#customers tr:nth-child(even){background-color: #f2f2f2;}

	#customers tr:hover {background-color: #ddd;}

	#customers th {
    		padding-top: 12px;
    		padding-bottom: 12px;
    		text-align: left;
    		background-color: #4CAF50;
    		color: white;
		}
	h3 {
		color : white;
		background-color : pink;
		text-align : center;
		border : solid;
		border-color : pink;
		border-radius : 25px;
	}
	#libre{
		color : white;
		background-color : green ;
	}
	#oucuper{
		color : white;
		background-color : red;
	}
	#tc{
		color : white;
	}
	</style>
</head>

<body>
<div class='container'>
<h1><center> Tableaux de Reservation </center></h1>";

if($id=mysqli_connect("localhost","root","root")){
		if($id_db=mysqli_select_db($id,"lavage")){
echo "<table  id='customers'>
<tr>
<td></td><td>8 - 9 </td><td>9 - 10 </td><td>10 - 11 </td><td>11 - 12 </td><td>12 - 13 </td><td>14 - 15 </td> <td>15 - 16 </td> <td>16 - 17 </td> <td>17 - 18 </td>
</tr>";
if($resultat=mysqli_query($id, "select * from etat;")){
				while($ligne=mysqli_fetch_row($resultat)){

echo"
<tr>
<td id='j'>$ligne[0] </td>
<td id='$ligne[8]'><a href='$ligne[8].php?id=huit&day=$ligne[0]' id='tc' > $ligne[8] </a></td>
<td id='$ligne[9]'><a href='$ligne[9].php?id=neuf&day=$ligne[0]'  id='tc'> $ligne[9] </a></td>
<td id='$ligne[10]'><a href='$ligne[10].php?id=dix&day=$ligne[0]' id='tc'> $ligne[10] </a></td>
<td id='$ligne[11]'><a href='$ligne[11].php?id=onze&day=$ligne[0]' id='tc'> $ligne[11] </a></td>
<td id='$ligne[12]'><a href='$ligne[12].php?id=douz&day=$ligne[0]' id='tc'> $ligne[12] </a></td>
<td id='$ligne[14]'><a href='$ligne[14].php?id=quatorze&day=$ligne[0]' id='tc'> $ligne[14] </a></td>
<td id='$ligne[15]'><a href='$ligne[15].php?id=quinze&day=$ligne[0]' id='tc'> $ligne[15] </a></td> 
<td id='$ligne[16]'><a href='$ligne[16].php?id=seize&day=$ligne[0]' id='tc'> $ligne[16] </a></td>
<td id='$ligne[17]'><a href='$ligne[17].php?id=dixsept&day=$ligne[0]' id='tc'> $ligne[17] </a></td>
</tr>";
}}
echo "</table>
<center><a href='complet.php'> Demande lavage complet </a></center>
</div>
</body>
</html>";

		}
}	
?>




