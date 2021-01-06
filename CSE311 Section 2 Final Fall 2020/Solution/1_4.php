
<?php

$link = mysqli_connect("localhost", "root", "", "final");
 
if($link == false){
    die("ERROR: Could not connect.\n" . mysqli_connect_error());
}
 

$sql = "SELECT s.sname
FROM student s
WHERE s.snum NOT IN (SELECT c.snum
FROM course c ) ";

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