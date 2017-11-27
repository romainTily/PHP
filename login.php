<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
<script type="text/javascript" src="script.js"></script>
<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
<head>
</head>

<style>

	*{
		font-family : Calibri;
	}
	input{
		text-indent : 8px;
	}

	button{
		border : 1px dashed grey;
		background : light blue;
		color : black;

		width : 80px;
		height : 20px;
	}

	button:hover{
		cursor : pointer;
	}

</style>
<body>
	<h1> Formulaire de connexion </h1>
	<p><input id="login" placeholder='Login' name='login'></input></p>
	<p><input id="mdp" placeholder='Password' type='password'></input></p>
	<button onclick='logIn()'>Connexion</button>
</body>