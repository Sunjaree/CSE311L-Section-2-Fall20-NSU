
<?php

$link = mysqli_connect("localhost", "root", "", "final");
 
if($link == false){
    die("ERROR: Could not connect.\n" . mysqli_connect_error());
}
 

$sql = "SELECT g.pname
FROM goodies g, stock s, provider p WHERE g.pid = s.pid AND s.sid = p.sid
AND p.sname = 'Acme Widget Suppliers'
AND NOT EXISTS ( SELECT * FROM stock s1, provider p1 WHERE g.pid = s1.pid AND s1.sid = p1.sid AND
p1.sname <> 'Acme Widget Suppliers' ) ";

$result = mysqli_query($link, $sql);


if(mysqli_num_rows($result) > 0){
 while($row = mysqli_fetch_assoc($result)){
  


  echo $row["pname"] ."\n";





 }
}

else{
 echo "0 results found";
}

mysqli_close($link);

?>