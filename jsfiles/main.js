


function signUpForm(){
 debugger;
   document.getElementsByClassName('registerForm')[0].style.display = 'block';
   document.getElementsByClassName('login')[0].style.display = 'none';
}

function loginForm(){
    debugger;
        document.getElementsByClassName('login')[0].style.display = 'block';
        document.getElementsByClassName('registerForm')[0].style.display = 'none';
    
}


function login(){
debugger;
   $.ajax({
     type: "POST",
     url: "./phpfiles/login.php",
      data: { name: document.getElementById('username').value,
              password: document.getElementById('password').value}
         }).done(function( msg ) {
                window.location.href = 'aframefiles/shopping.html';
          });  

}

   
