
<?php

$link = mysqli_connect("localhost", "root", "", "cse311l_section_2_fall_20");
 
if($link == false){
    die("ERROR: Could not connect. \n" . mysqli_connect_error());
}
 

$hudai = "SELECT First_Name , Manager_Id, Max(Salary) Where Manager_Id is not null 
           group by First_Name,Manager_Id having min(Salary)>6000 order by Max(Salary) desc";







$result = mysqli_query($link, $hudai);


if(mysqli_num_rows($result) > 0){
    
 while($row = mysqli_fetch_assoc($result)){
    echo " "  .$row["First_Name"] ."   " .$row["Manager_Id"] ."   "  .$row["max(salary)"]   ."   "    ." \n";
 }
}

else{
 echo "0 results found";
}

mysqli_close($link);

?>