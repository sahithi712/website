<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Times New Roman, Helvetica, sans-serif;

background-image:url("image2.jpg");
background-size: 1800px 1000px;
background-repeat: no-repeat;
 margin: 0;
}
p{
color:white;
text-align:center;}
* {
    box-sizing: border-box;
}

.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: right;
  color: #f2f2f2;
  text-align: center;
  padding: 20px 30px;
  text-decoration: none;
  font-size: 25px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;

}

.topnav a.active {
  background-color: #4CAF50;
  color: white;

}

/* Full-width input fields */
input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 30px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

/* Set a style for all buttons */
button {
    background-color: #4CAF50;
    color: white;
    font-size: 25px;
    padding: 14px 80px;
    margin: 12px 0;
    border: double;
    cursor: pointer;
    width: 100%;
}

button:hover {
    opacity: 0.8;
}

/* Extra styles for the cancel button */
.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
    position: relative;
}

image2 {
    width: 40%;
    border-radius: 50%;
}

.container {
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 16px;
}

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
    background-color: #fefefe;
    margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
    border: 1px solid #888;
    width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
    position: absolute;
    right: 25px;
    top: 0;
    color: #000;
    font-size: 35px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: red;
    cursor: pointer;
}

/* Add Zoom Animation */
.animate {
    -webkit-animation: animatezoom 0.6s;
    animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
    from {-webkit-transform: scale(0)} 
    to {-webkit-transform: scale(1)}
}
    
@keyframes animatezoom {
    from {transform: scale(0)} 
    to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}

/*for registration*/
/* Add padding to containers */
.container {
    padding: 16px;
    background-color: white;
}

/* Full-width input fields */
input[type=text], input[type=password] {
    width: 100%;
    padding: 15px;
    margin: 5px 0 22px 0;
    display: inline-block;
    border: none;
    background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
    background-color: #ddd;
    outline: none;
}

/* Overwrite default styles of hr */
hr {
    border: 1px solid #f1f1f1;
    margin-bottom: 25px;
}

/* Set a style for the submit button */
.registerbtn {
    background-color: #4CAF50;
    color: white;
    padding: 16px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
    opacity: 0.9;
}

.registerbtn:hover {
    opacity: 1;
}

/* Add a blue text color to links */
a {
    color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
    background-color: #f1f1f1;
    text-align: center;
}

message {
    display:none;
    background: #f1f1f1;
    color: #000;
    position: relative;
    padding: 20px;
    margin-top: 10px;
}

message p {
    padding: 10px 35px;
    font-size: 18px;
}

/* Add a green text color and a checkmark when the requirements are right */
.valid {
    color: green;
}

.valid:before {
    position: relative;
    left: -35px;
    content: "✔";
}

/* Add a red text color and an "x" when the requirements are wrong */
.invalid {
    color: red;
}

.invalid:before {
    position: relative;
    left: -35px;
    content: "✖";
}
</style>
</head>
<body style="text-align:center;">
<div class="topnav">

 
  <a class="active" href="homepage.php">HOME PAGE</a>
  
 </div>
<br>
<br>
<br>
<br>
<br><br>
<br>
<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;"><b>LOGIN</b></button>
<br>
<button onclick="document.getElementById('id02').style.display='block'"style="width:auto;"><b>SIGN UP</b></button></br>
<br>
<p style="font-size:25px"><b>NOTE:</b>PLEASE SIGN UP IF YOU ARE A NEW USER.</p>


<div id="id01" class="modal">
  
  <form class="modal-content animate" action="acceptor.php" method=post>
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      
    </div>

    <div class="container">

      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>
        
      <button type="submit" name="submitlog">Login</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
     
    </div>
  </form>
</div>
<?php
    if (isset($_POST['submitlog']))
        {     
    include("connect.php");
    $username=$_POST['uname'];
    $password=$_POST['psw'];
    $username=stripcslashes($username);
    $password=stripcslashes($password);
    $username=mysqli_real_escape_string($conn,$username);
    $password=mysqli_real_escape_string($conn,$password);
    $query = mysqli_query($conn,"SELECT * FROM acceptor1 WHERE username='$username' and password='$password'");
     if (mysqli_num_rows($query) != 0)
    {
      session_start();
      $_SESSION['login_user']=$username; 
      if(isset( $_SESSION['login_user'])){
        echo "<script language='javascript' type='text/javascript'> location.href='afteracclogin.php' </script>";
      }
      }
      else
      {
    echo "<script type='text/javascript'>alert('User Name Or Password Invalid!')</script>";
    }   
    }
    ?>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>



<div id="id02" class="modal">

<form  class="modal-content animate" action="acceptor.php" method=post>
    <div class="imgcontainer">
      <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span> 
    </div>
  <div class="container">

    <h1>Sign Up</h1>
    <p style="color:black;">Please fill  this form to create an account.</p>
    <hr>
<label for="Firstname"><b>Firstname</b></label>
    <input type="text" placeholder="Enter your Firstname " name="Firstname" required>
    <label for="Lastname"><b>Lastname</b></label>
    <input type="text" placeholder="Enter your Lastname " name="Lastname" required>
    <label for="Age"><b>Age</b></label>
    <input type="text" placeholder="Enter your Age " name="Age" required>
    <label for="Gender"><b>Gender   </b></label>
   <form>
  <input type="radio" checked="checked" name="gender" value="MALE" > MALE
  <input type="radio" name="gender" value="FEMALE" > FEMALE
<input type="radio" name="gender" value="OTHER" > OTHER
<label for="Contact Number"><b>ContactNumber</b></label>
    <input type="text" placeholder="Enter ContactNumber" name="ContactNumber" required>
<label for="Address"><b>Address</b></label>
    <input type="text" placeholder="Enter Address" name="Address" required>


    <label for="email"><b>Email</b></label>
    <input type="text" pattern="[^ @]*@[^ @]*" placeholder="Enter Email" name="email" required>

    <label for="username"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="username" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Password" id="psw" name="psw" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
    <label for="psw-repeat"><b>RepeatPassword</b></label>
    <input type="password" placeholder="RepeatPassword" name="pswrepeat" required>
    <button type="submit" class="registerbtn" name="submit">REGISTER</button>
 <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button>
    </div>
    <div id="message">
  <h2>PASSWORD MUST CONTAIN THE FOLLOWING:</h2>
  <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
  <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
  <p id="number" class="invalid">A <b>number</b></p>
  <p id="length" class="invalid">Minimum <b>8 characters</b></p>
</div>
        
<script>
var myInput = document.getElementById("psw");
var letter = document.getElementById("letter");
var capital = document.getElementById("capital");
var number = document.getElementById("number");
var length = document.getElementById("length");

// When the user clicks on the password field, show the message box
myInput.onfocus = function() {
    document.getElementById("message").style.display = "block";
}

// When the user clicks outside of the password field, hide the message box
myInput.onblur = function() {
    document.getElementById("message").style.display = "none";
}

// When the user starts to type something inside the password field
myInput.onkeyup = function() {
  // Validate lowercase letters
  var lowerCaseLetters = /[a-z]/g;
  if(myInput.value.match(lowerCaseLetters)) {  
    letter.classList.remove("invalid");
    letter.classList.add("valid");
  } else {
    letter.classList.remove("valid");
    letter.classList.add("invalid");
  }
  
  // Validate capital letters
  var upperCaseLetters = /[A-Z]/g;
  if(myInput.value.match(upperCaseLetters)) {  
    capital.classList.remove("invalid");
    capital.classList.add("valid");
  } else {
    capital.classList.remove("valid");
    capital.classList.add("invalid");
  }

  // Validate numbers
  var numbers = /[0-9]/g;
  if(myInput.value.match(numbers)) {  
    number.classList.remove("invalid");
    number.classList.add("valid");
  } else {
    number.classList.remove("valid");
    number.classList.add("invalid");
  }
  
  // Validate length
  if(myInput.value.length >= 8) {
    length.classList.remove("invalid");
    length.classList.add("valid");
  } else {
    length.classList.remove("valid");
    length.classList.add("invalid");
  }
}
</script>
  <div class="container signin">
    <p style="color:black;">Already have an account? <a href="acceptor.php">Login</a>.</p>
  </div>
</div>
</form>
</div>

            <?php
            if (isset($_POST['submit']))
            {
           
            include("connect.php");
            $sql="INSERT INTO acceptor1(Firstname,Lastname,Age,gender,ContactNumber,Address,Email,Username,Password,RepeatPassword)
            VALUES('$_POST[Firstname]','$_POST[Lastname]','$_POST[Age]','$_POST[gender]','$_POST[ContactNumber]','$_POST[Address]','$_POST[email]','$_POST[username]','$_POST[psw]','$_POST[pswrepeat]')";

            if (!mysqli_query($conn,$sql))
            {
              die('Error: ' . mysqli_error($conn));
            }
            echo "<script type='text/javascript'>alert('Registration successfully completed')</script>";
           
          }
         
            ?>

<script>

var modal = document.getElementById('id02');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>


</body>
</html>
