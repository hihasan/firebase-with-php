<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
  	<link rel="stylesheet" href="style.css" />
</head>
<body>
	<div id="login_div" class="main-div">
	    <h3>Firebase Web login Example</h3>
	    <input type="email" placeholder="Email..." id="email_field" />
	    <input type="password" placeholder="Password..." id="password_field" />

	    <a href="index.php"><button onclick="login()">Login to Account</button></a>
	</div>

	  <div id="user_div" class="loggedin-div">
	    <h3>Welcome User</h3>
	    <p id="user_para">Welcome to Firebase web login Example. You're currently logged in.</p></a>
	    <button onclick="logout()">Logout</button>
	  </div>
	
	<script src="https://www.gstatic.com/firebasejs/5.5.9/firebase.js"></script>
	<script>
	  // Initialize Firebase
	  var config = {
	    apiKey: "AIzaSyAFnq-YrY7MYOHrIKm5LR3IHl-8lFPSWpI",
	    authDomain: "cse499healthmanagement.firebaseapp.com",
	    databaseURL: "https://cse499healthmanagement.firebaseio.com",
	    projectId: "cse499healthmanagement",
	    storageBucket: "cse499healthmanagement.appspot.com",
	    messagingSenderId: "638987735704"
	  };
	  firebase.initializeApp(config);
	</script>
	<script src="login.js"></script>

</body>
</html>