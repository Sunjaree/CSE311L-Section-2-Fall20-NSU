
<?php

$link = mysqli_connect("localhost", "root", "", "final");
 
if($link == false){
    die("ERROR: Could not connect.\n" . mysqli_connect_error());
}
 

$sql = "SELECT snum FROM student s
WHERE s.major = 'History'
AND s.snum IN(SELECT co.snum from course co,department d, class c
            WHERE co.cname = c.name AND
            c.fid = d.fid AND
            d.fname = 'Ivana Teach') ";

$result = mysqli_query($link, $sql);


if(mysqli_num_rows($result) > 0){
 while($row = mysqli_fetch_assoc($result)){
  


  echo $row["name"] ."\n";





 }
}

else{
 echo "0 results found";
}

mysqli_close($link);

?>