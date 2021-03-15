<?php

include("connect.php");
$result = mysqli_query($conn,"SELECT * FROM  donor2 WHERE  HealthCondition='good'");
while ($row = mysqli_fetch_assoc($result)) {
    echo $row["id"]."<br>".
     $row["Firstname"]."<br>".
     $row["Lastname"]."<br>".
     $row["Age"]."<br>".
     $row["gender"]."<br>".
     $row["BloodGroup"]."<br>".
     $row["ContactNumber"]."<br>".
     $row["Address"]."<br>".
     $row["email"];

}

mysqli_free_result($result);

?>