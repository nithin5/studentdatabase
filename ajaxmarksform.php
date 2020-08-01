<?php
include 'studentdb.php';
if($_POST)
{

    $marks=$_POST['marks'];
    $course_id=$_POST['course_id'];
    $student_id=$_POST['student_id'];
    

    $query="insert into marks(student_id,course_id,marks)values ('$student_id','$course_id','$marks')";
    if (mysqli_query($connection_mysql, $query)) {
        $last_id = mysqli_insert_id($connection_mysql);
        
       
        echo json_encode("New record created successfully");
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($connection_mysql);
        echo json_encode(0);
    }
    
    mysqli_close($connection_mysql);
}


?>