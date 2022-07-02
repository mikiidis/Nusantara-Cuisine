<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="regisStyle.css">
	<title>Nusantara Cuisine</title>
</head>
<body>
	<header>
        <a href="mainMenu.html" class="logo">Nusantara<br>Cuisine<span>.</span></a>
	</header>

       	<menu class="home" id="home">
        	<div class="content">
            	<h2>Registrasi</h2>
            	<div class="registration">
					<form action="mainMenu.html" id="regisregis" method="post">
						<table>
							<tr>
						<td><label for="username"> username : </label></td>
						<td><input type="text" id ="username"></td>
							</tr>
						<br>
							<tr>
						<td><label for="email"> email : </label></td>
						<td><input type="text" id ="email"></td>
							</tr>
						<br>
							<tr>
						<td><label for="password">password : </label></td>
						<td><input type="password" id ="password"></td>
							</tr>
						<br>
							<tr>
						<td></td>
            			<td><input type="submit" name="register" class="btn"></td>
            				</tr>
            			<br>
					</table>
				</form>
        	</div>
    </menu>

         <div class="madeByText">
        <p>Made By <span>C6</span> Team.</p>
   		 </div>

	<script type="text/javascript" src="regisValidate.js"></script>
	
</body>
</html>