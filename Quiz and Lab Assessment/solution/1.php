
<?php

$link = mysqli_connect("localhost", "root", "", "cse311l_section_2_fall_20");
 
if($link == false){
    die("ERROR: Could not connect. \n" . mysqli_connect_error());
}
 

$hudai = "SELECT First_Name,min(salary),max(salary),sum(salary),avg(salary) from employees group by Job_Id";

$result = mysqli_query($link, $hudai);


if(mysqli_num_rows($result) > 0){
    
 while($row = mysqli_fetch_assoc($result)){
    echo " "  .$row["First_Name"] ."   " .$row["min(salary)"] ."   "  .$row["max(salary)"]  ."  " .$row["sum(salary)"] ."   "  .$row["avg(salary)"]  ." \n";
 }
}

else{
 echo "0 results found";
}

mysqli_close($link);

?>