<?php
include 'studentdb.php';
if($_POST)
{

   
    $student_name=$_POST['student_name'];
    $date_of_birth=$_POST['date_of_birth'];
    $date_of_birth = strtotime($date_of_birth);

    $date_of_birth = date('Y-m-d',$date_of_birth);
  
    $query="insert into student(student_name,date_of_birth)values ('$student_name','$date_of_birth')";
    if (mysqli_query($connection_mysql, $query)) {
        $last_id = mysqli_insert_id($connection_mysql);
        echo json_encode("New record created successfully");
        
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($connection_mysql);
        
    }
    
    mysqli_close($connection_mysql);
}


?>