<?php
include 'connection.php';

function get_all_courses(){
	global $connection_mysql ;
	$row= $return=array();
	$sql = "SELECT course_id, course_name FROM course WHERE status=1";
	$result = mysqli_query($connection_mysql, $sql);
	if (mysqli_num_rows($result) > 0) {
		while($row = mysqli_fetch_assoc($result)) {
			array_push($return,$row); 
		}
		return $return;
	} else {
		$return =0;
		return $return;
	}
}
function get_all_students(){
	global $connection_mysql ;
	$row= $return=array();
	$sql = "SELECT student_id, student_name FROM student WHERE status=1";
	$result = mysqli_query($connection_mysql, $sql);
	if (mysqli_num_rows($result) > 0) {
		while($row = mysqli_fetch_assoc($result)) {
			array_push($return,$row); 
		}
		return $return;
	} else {
		return 0;
	}
}
function get_all_student_marks(){
	global $connection_mysql ;
	$row= $return=array();
    $sql="select mk.marks as marks,stud.student_name as name,stud.date_of_birth as dob,c.course_name as course from  marks mk  
        JOIN student stud ON stud.student_id=mk.student_id
		JOIN course c  on c.course_id=mk.course_id
		where mk.status = '1' and stud.status='1'";
		
		$result = mysqli_query($connection_mysql, $sql);
	if (mysqli_num_rows($result) > 0) {
		while($row = mysqli_fetch_assoc($result)) {
			array_push($return,$row); 
		}
		return $return;
	} else {
		return 0;
	}
		
	}       
?>        