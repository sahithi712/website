<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

input[type=text], select, textarea {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    margin-top: 6px;
    margin-bottom: 16px;
    resize: vertical;
}

input[type=submit] {
    background-color: #4CAF50;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}

.container {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
}
</style>
</head>
<body>

<h3>Change in any of the details</h3>

<div class="container">
  <form action="changeindetails.php"  method=post>
 
    <label for="fname">FirstName</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name..">

    <label for="lname">LastName</label>
    <input type="text" id="lname" name="lastname" placeholder="Your last name..">

   <label for="Contactnumber">New Contact number</label>
    <input type="text" id="Contactnumber" name="Contactnumber" placeholder="Your Contact number..">
     <label for="Address">New Address</label>
    <input type="text" id="Address" name="Address" placeholder="Your New Address..">
      <label for="email">New email</label>
    <input type="text" id="email" name="email" pattern="[^ @]*@[^ @]*" placeholder="Your email..">
    <input type="submit" name="submit" value="submit">
  </form>
</div>
<?php
            if (isset($_POST['submit']))
            {
           
            include("connect.php");
            $sql="INSERT INTO changeindetails(firstname,lastname,Contactnumber,Address,email)
            VALUES('$_POST[firstname]','$_POST[lastname]','$_POST[Contactnumber]','$_POST[Address]','$_POST[email]')";

            if (!mysqli_query($conn,$sql))
            {
              die('Error: ' . mysqli_error());
            }
            echo "<script type='text/javascript'>alert('Details will be update soon')</script>";
            echo "<script language='javascript' type='text/javascript'> location.href='afterdonlogin.php' </script>";
           
          }
            ?>
            
</body>
</html>
