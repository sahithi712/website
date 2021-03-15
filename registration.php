<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
    font-family: Arial, Helvetica, sans-serif;
    background-color: black;
}

* {
    box-sizing: border-box;
}

/* Add padding to containers */
.container {
    padding: 16px;
    background-color: white;
}
.topnav a:hover {
  background-color: #ddd;
  color: black;
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

</style>
</head>
<body>


<form action="registration.php" method=post>
     <div class="imgcontainer">
      <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
      
    </div>
  <div class="container">
    <h1>Registration</h1>
    <p>Please fill in this form to register.</p>
    <hr>
 <label for="First Name"><b>Firstname</b></label>
    <input type="text" placeholder="Enter your Firstname " name="Firstname" required>

<label for="Last Name"><b>Lastname</b></label>
    <input type="text" placeholder="Enter your Lastname " name="Lastname" required>

<label for="Age"><b>Age</b></label>
    <input type="text" placeholder="Enter Age" name="Age" required>

<label for="Gender"><b>Gender   </b></label>
   <form>
  <input type="radio" checked="checked" name="gender" value="MALE" > MALE
  <input type="radio" name="gender" value="FEMALE" > FEMALE
<input type="radio" name="gender" value="OTHER" > OTHER
   
</form> <br>
<label for="BloodGroup"><b>BloodGroup</b></label>
    <input type="text" placeholder="Enter BloodGroup" name="BloodGroup" required>

<label for="HealthCondition"><b>HealthCondition</b></label>
    <input type="text" placeholder="Enter HealthCondition" name="HealthCondition" required>

<label for="ContactNumber"><b>ContactNumber</b></label>
    <input type="text" placeholder="Enter ContactNumber" name="ContactNumber" required>
<label for="Address"><b>Address</b></label>
    <input type="text" placeholder="Enter Address" name="Address" required>

    <label for="email"><b>Email</b></label>
    <input type="text" pattern="[^ @]*@[^ @]*" placeholder="Enter Email" name="email" required>

    <button type="submit" class="registerbtn" name="submit">Register</button>
  </div>

   <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button>
        </div>

  
  </form>


<?php
            if (isset($_POST['submit']))
            {
            
            include("connect.php");
            $sql="INSERT INTO donor2(Firstname,Lastname,Age,gender,BloodGroup,HealthCondition,ContactNumber,Address,email)
            VALUES('$_POST[Firstname]','$_POST[Lastname]','$_POST[Age]','$_POST[gender]','$_POST[BloodGroup]','$_POST[HealthCondition]','$_POST[ContactNumber]','$_POST[Address]','$_POST[email]')";

            if (!mysqli_query($conn,$sql))
            {
              die('Error: ' . mysqli_error());
            }
            
            echo "<script type='text/javascript' type='text/javascript'>alert('Registration successfully completed')  </script>";
            echo "<script language='javascript' type='text/javascript'> location.href='afterdonlogin.php' </script>";
           
          }
            ?>
           
</body>
 <script>

var modal = document.getElementById('id02');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
</html>
