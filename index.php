<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Lavage Reservation	</title>
    
<style>
#customers {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
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
#l{
color : green;
}
</style>
</head>

<body>
<?php
if($id=mysql_connect("localhost","root","")){
		if($id_db=mysql_select_db("lavage")){
			echo "succés de connexion<br/>";
echo "<table  id='customers'>
<tr>
<td></td><td>8 - 9 </td><td>9 - 10 </td><td>10 - 11 </td><td>11 - 12 </td><td>12 - 13 </td><td>14 - 15 </td> <td>15 - 16 </td> <td>16 - 17 </td> <td>17 - 18 </td>
</tr>
<tr>
<td>lundi </td><td><a href='inscri.html' id='l'> libre </a></td><td>libre </td><td>libre </td><td>oucuper </td><td>oucuper </td><td>oucuper </td><td>oucuper </td><td>oucuper </td><td>oucuper </td>
</tr>
<tr>
<td>mardi </td><td>libre </td><td>libre </td><td>libre </td><td>oucuper </td><td>oucuper </td><td>oucuper </td><td>oucuper </td><td>oucuper </td><td>oucuper </td>
</tr>
<tr>
<td>mercredi </td><td>libre </td><td>libre </td><td>libre </td><td>oucuper </td><td>oucuper </td><td>oucuper </td><td>oucuper </td><td>oucuper </td><td>oucuper </td>
</tr>
<tr>
<td>jeudi </td><td>libre </td><td>libre </td><td>libre </td><td>oucuper </td><td>oucuper </td><td>oucuper </td><td>oucuper </td><td>oucuper </td><td>oucuper </td>
</tr>
<tr>
<td>vendredi </td><td>libre </td><td>libre </td><td>libre </td><td>oucuper </td><td>oucuper </td><td>oucuper </td><td>oucuper </td><td>oucuper </td><td>oucuper </td>
</tr>
<tr>
<td>samedi </td><td>libre </td><td>libre </td><td>libre </td><td>oucuper </td><td>oucuper </td><td>oucuper </td><td>oucuper </td><td>oucuper </td><td>oucuper </td>
</tr>
<tr>
<td>dimanche </td><td>libre </td><td>libre </td><td>libre </td><td>oucuper </td><td>oucuper </td><td>oucuper </td><td>oucuper </td><td>oucuper </td><td>oucuper </td>
</tr>
</table>";
?>
</body>
</html>





