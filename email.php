<!DOCTYPE html>
<html>
<body style="text-align:center;">

<?php

$msg = 'hi';

$msg = wordwrap($msg,70);


try{
   mail('bmalyadrivaishnavi@gmail.com','My subject',$msg);
    echo "<script language='javascript' type='text/javascript'> alert('SUCCESS!') </script>";
     echo "<script language='javascript' type='text/javascript'> location.href='afteracclogin.php' </script>";
} catch(Exception $e){
    // Something went bad
    echo "Fail :(";
}
?>
<p>
<b>Note:</b> Spaces between words should be replaced by %20 to ensure that the browser will display the text properly.
</p>
</body>
</html>
