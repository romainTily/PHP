<style>
		table{
			margin  :20px;
		}

		th{
			font-size : 26px;
		}

		#addUserInput{
			margin-left : 20px;
		}

		a{
			margin-top : 10px;
			margin-left : 20px;
		}
</style>
<script type="text/javascript" src="script.js"></script>
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>

<html>
	<body>
	<?php
		// if($_SESSION['login'])
		// {
			include 'lib.php';

			$arrUser = parseCSV();

			$str ="<table><th> Utilisateurs : </th>";

			foreach($arrUser as $user)
			{
				$str .= "<tr>
							<td>".$user[1]."</td>
						</tr>";
			}

			$str .= "</table>";



			$str .= "<input id='addUserInput' placeholder='User'></input>
					 <input id='passUserInput' type='password' placeholder='Password'</input>

					 <button onclick='addUser()'> Ajouter utilisateur</button>";

			print($str);

		// }

	?>

	<br><br><a href='login.php'>Déconnexion</a>
	</body>
</html>