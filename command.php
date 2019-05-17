<form action="">
  ping: <input type="text" name="q"><br>
</form> 
<?php
$q=$_GET['q'];
$a=shell_exec("ping -c 1 " . $q);
echo "<pre>";
print_r($a);
echo "</pre>";
?>
