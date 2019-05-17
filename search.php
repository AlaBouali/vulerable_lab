 <form action="/search.php">
  search: <input type="text" name="q"><br>
</form> 

<?php
$a= $_GET['q'];
//$a=strip_tags($a);
//$a=htmlspecialchars($a);
//$a=sanitize_xss($a);
echo $a;
?>
