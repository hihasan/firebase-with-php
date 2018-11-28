firebase.auth().onAuthStateChanged(function(user) {
  if (user) {
    // User is signed in.

    document.getElementById("user_div").style.display = "none";
    document.getElementById("login_div").style.display = "block";

    var user = firebase.auth().currentUser;

    if(user != null){


      var email_id = user.email;
      //window.location.href="index.php";
      document.getElementById("user_para").innerHTML = "Welcome User : " + email_id;

    }

  } else {
    // No user is signed in.

    document.getElementById("user_div").style.display = "none";
    document.getElementById("login_div").style.display = "block";

  }
});

function login(){

  var userEmail = document.getElementById("email_field").value;
  var userPass = document.getElementById("password_field").value;

  firebase.auth().signInWithEmailAndPassword(userEmail, userPass).catch(function(error) {
    // Handle Errors here.
    var errorCode = error.code;
    var errorMessage = error.message;

    if (errorMessage==false) 
    {
      window.alert("Error : " + errorMessage);
    }

    else{
      window.location.href = "index.php";
    }

    

    // ...
  });

}

function logout(){
  firebase.auth().signOut();
}