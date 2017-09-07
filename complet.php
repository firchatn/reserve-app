<!DOCTYPE html>
<html>
<head>
    <title>Lavage complet</title>
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <style>
        input[type=text],
        select {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        
        input[type=submit] {
            width: 100%;
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        
        input[type=submit]:hover {
            background-color: #45a049;
        }
        
        div {
            border-radius: 5px;
            background-color: #f2f2f2;
            padding: 20px;
        }
    </style>
</head>
<boby>
<center>
    <h1> Lavage complet Demande</h1>
	<div class="container">
    		<div class="col-12 col-md-12">
			<form class='modal-content animate' action='lcomplet.php' method='post' enctype="multipart/form-data">
                		<label><b>Nom et prénom</b></label>
                		<input type='text' name='name' required>
                		<br>
                		<label><b>Telephone</b></label>
                		<input type='text' name='tel' required>
                		<label><b>Matricule</b></label>
                		<input type='text' name='mat' required>
                		<br>
                		<br>
                    		<br>
                    		<br>
                    		<br>
                        	<button type="sumbit">confirmer </button>
            		</form>
    		</div>
	</div>
</center>
</body>
</html>
