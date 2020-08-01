<?php include 'studentdb.php';
    $student_list=array();
    $student_list=get_all_student_marks();
  
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Student List Details</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>
<body>
<!-- <form action="/action_page.php"> -->
<div class="container">
<fieldset style="margin-top:5px;margin-left">
<div class="jumbotron">
	<legend class='sub-header' style="margin-left: 14px;">Student List Details</legend>
           
  <table class="table">
    <thead>
      <tr>
        <th>Name</th>
        <th>Date of Birth</th>
        <th>Course</th>
        <th>Marks</th>
      </tr>
    </thead>
    <tbody>
    <?php foreach($student_list as $student_lists){?>
      <tr>
       <td> <?php echo $student_lists['name'];?></td>
        <td><?php echo $student_lists['dob'];?></td>
        <td><?php echo $student_lists['course'];?></td>
        <td><?php echo $student_lists['marks'];?></td>
      </tr>
    <?php } ?> 
    </tbody>
  </table>
</div>
</fieldset>
</div>
</div>
</body>
                         