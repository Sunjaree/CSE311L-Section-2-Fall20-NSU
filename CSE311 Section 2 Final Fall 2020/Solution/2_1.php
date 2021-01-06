
<?php

$link = mysqli_connect("localhost", "root", "", "final");
 
if($link == false){
    die("ERROR: Could not connect.\n" . mysqli_connect_error());
}
 

$sql = "SELECT p.sname FROM provider p WHERE NOT EXISTS
(( SELECT g.pid FROM goodies g )
 
EXCEPT
 
(SELECT s.pid FROM stock s
WHERE s.sid = p.sid )) ";

$result = mysqli_query($link, $sql);


if(mysqli_num_rows($result) > 0){
 while($row = mysqli_fetch_assoc($result)){
  


  echo $row["sname"] ."\n";





 }
}

else{
 echo "0 results found";
}

mysqli_close($link);

?>