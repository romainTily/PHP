function logIn(){
	$.ajax({
			url : "Log.php",
			type : "POST", 
		    data : {
		    	login : $("#login").val(),
		    	password : $("#mdp").val()
		    },
		    success : function(data){
		    	data = JSON.parse(data);

		    	if(data=="True")
		    	{
		    		window.location.href = 'show.php';
		    	}
		    	else
		    	{
		    		alert("Votre mot de passe ou votre login sont incorrects.")
		    	}
		    }
		});
}


function addUser(){
	$.ajax({
			url : "addUser.php",
			type : "POST", 
		    data : {
		    	user : $("#addUserInput").val(),
		    	password : $("#passUserInput").val()
		    },
		    success : function(data){
		    	alert("Utilisateur ajouté !");
		    	location.reload();
		    }
		});
}