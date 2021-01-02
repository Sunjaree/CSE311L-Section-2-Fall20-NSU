
<?php

$link = mysqli_connect("localhost", "root", "", "cse311l_section_2_fall_20");
 
if($link == false){
    die("ERROR: Could not connect. \n" . mysqli_connect_error());
}
 

$hudai = "SELECT Last_name,Salary,Commission_pct from employees where Commission_pct is null order by salary desc )";

$result = mysqli_query($link, $hudai);


if(mysqli_num_rows($result) > 0){
    
 while($row = mysqli_fetch_assoc($result)){
    echo " "  .$row["Last_Name"] ."   " .$row["Salary"] ."   "  .$row["Commission_pct"]  ." \n";
 }
}

else{
 echo "0 results found";
}

mysqli_close($link);

?>