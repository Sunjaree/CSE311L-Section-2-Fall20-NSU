
<?php


$link = mysqli_connect('localhost','root','','final');

if($link == false){
    die("ERROR: Could not connect. \n" . mysqli_connect_error());
}



$student = "CREATE TABLE Student(
snum decimal(9,0) primary key NOT NULL,
sname varchar(30),
major varchar(25),
level varchar(2),
age decimal(3,0)
)";

if(mysqli_query($link, $student)){
    echo "Student table created successfully.\n";
} else{
    echo "ERROR: Could not able to execute $student. " . mysqli_error($link);
}
 



$department = "CREATE TABLE Department(
fid decimal(9,0) primary key NOT NULL,
fname varchar(30),
deptid decimal(2,0)
)";

if(mysqli_query($link, $department)){
    echo "Department table created successfully.\n";
} else{
    echo "ERROR: Could not able to execute $department. " . mysqli_error($link);
}




$class = "CREATE TABLE Class(

name varchar(40) primary key NOT NULL,
meets_at varchar(20),
room varchar(10),
fid decimal(9,0)
/*foreign key (fid) REFERENCES Department(fid)*/
)";

if(mysqli_query($link, $class)){
    echo "Class table created successfully.\n";
} else{
    echo "ERROR: Could not able to execute $class. " . mysqli_error($link);
}



$course = "CREATE TABLE Course(

snum decimal(9,0),
cname varchar(40) ,
primary key(snum,cname),
foreign key (snum) REFERENCES
Student(snum),
foreign key (cname) REFERENCES
Class(name)
    
)";

if(mysqli_query($link, $course)){
    echo "Course table created successfully.\n";
} else{
    echo "ERROR: Could not able to execute $course. " . mysqli_error($link);
}









$provider = "CREATE TABLE Provider(
    sid int(9) primary key,
	sname varchar(30),
	address varchar(40)

)";

if(mysqli_query($link, $provider)){
    echo "Provider table created successfully.\n";
} else{
    echo "ERROR: Could not able to execute $provider. " . mysqli_error($link);
}



$goodies = "CREATE TABLE Goodies(
    pid int(9) primary key,
	pname varchar(40),
	color varchar(15)

)";

if(mysqli_query($link, $goodies)){
    echo "Goodies table created successfully.\n";
} else{
    echo "ERROR: Could not able to execute $goodies. " . mysqli_error($link);
}




$stock = "CREATE TABLE Stock(
    sid int(9),
	pid int(9),
	cost int(10),
	primary key(sid,pid),
	foreign key(sid) REFERENCES Provider(sid),
	foreign key(pid) REFERENCES Goodies(pid)
)";

if(mysqli_query($link, $stock)){
    echo "Stock table created successfully.\n";
} else{
    echo "ERROR: Could not able to execute $stock. " . mysqli_error($link);
}



?>
