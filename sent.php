<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {box-sizing: border-box;}
table, th, td {
    border: 1px solid black;
}

body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #e9e9e9;
}

.topnav a {
  float: left;
  display: block;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #2196F3;
  color: white;
}

.topnav .search-container {
  float: right;
}

.topnav input[type=text] {
  padding: 6px;
  margin-top: 8px;
  font-size: 17px;
  border: none;
}

.topnav .search-container button {
  float: right;
  padding: 6px;
  margin-top: 8px;
  margin-right: 16px;
  background: #ddd;
  font-size: 17px;
  border: none;
  cursor: pointer;
}

.topnav .search-container button:hover {
  background: #ccc;
}

@media screen and (max-width: 600px) {
  .topnav .search-container {
    float: none;
  }
  .topnav a, .topnav input[type=text], .topnav .search-container button {
    float: none;
    display: block;
    text-align: left;
    width: 100%;
    margin: 0;
    padding: 14px;
  }
  .topnav input[type=text] {
    border: 1px solid #ccc;  
  }
}
</style>
</head>
<body>
<?php
include("connect.php");
?>
<div class="topnav">
  <a class="active" href="homepage.php">Homepage</a>
    <a href="feedback.php">Feedback</a>
  <a href="login1.php">Logout</a>
  <div class="search-container">
    <form action="sent.php">
     
     
    </form>
  </div>
</div>
<table style="width:100%">
  <tr>
    
    <th>email</th> 
    </tr>
<?php
$result = mysqli_query($conn,"SELECT * FROM  emailsend WHERE'' ");
  while ($row = mysqli_fetch_assoc($result)) 
  {
    echo"<tr>
    
    <td>".$row['email']."</td>
    <td><a href='emailsend.php'>Click</a></td>
    </tr>";
}
  ?>
  
</table>


</body>
</html>
