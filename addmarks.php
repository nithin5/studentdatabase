<?php include 'studentdb.php';
    $courses=$students=array();
    $courses=get_all_courses();
    $students=get_all_students();
   
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Mark Details</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.2/css/bootstrapValidator.min.css"/>
  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.2/js/bootstrapValidator.min.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>  

  
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
</head>
<body>
<!-- <form action="/action_page.php"> -->
<div class="container">
<fieldset style="margin-top:5px;margin-left">
<div class="jumbotron">
	<legend class='sub-header' style="margin-left: 14px;">Enter Mark Details</legend>
  <p id="display_message" style="display:none">Records are Saved Successfully</p>
<div class="form-group ">
    <label for="student_name">Student Name:</label>
   
    <select class="form-control student_name width_20" id="student_id" required autocomplete="off">
    <option value="">Select Student</option>
    <?php foreach($students as $student){?>
    <option value="<?php echo $student['student_id'];?>"><?php echo $student['student_name'];?></option>
  <?php }?>
  </select>
</div>
<div class="form-group">
  <label for="course">Select Course:</label>
  <select class="form-control course width_20" id="course_id" required autocomplete="off">
  <option value="">Select Course</option>
  <?php foreach($courses as $course){?>
    <option value="<?php echo $course['course_id'];?>"><?php echo $course['course_name'];?></option>
  <?php }?>

  </select>
</div>
<div class="form-group ">
<div class="form-inline">
    <label for="marks">Enter Marks:</label>
    <input type="number" class="form-control width_20 margin_1" id="marks" min=0 max=100 autocomplete="off">
  </div>
  </div>
  <button type="submit" class="btn btn-default" onclick="return submit_form();">Submit</button>
</div>  
<!-- </form> -->
</fieldset>
</div>
</div>
</body>
<style>
.width_20{
width: 20%!important;
}
.margin_1{
margin-left: 1%;
}
</style>
<script>
 $(document).ready(function() {
    $('.student_name').select2();
    $('.course').select2();
});

  function submit_form(){
		//var course=$("#course option:selected").text();
		var marks=$("#marks").val();
		var student_id=$("#student_id").val();
        var course_id=$("#course_id").val();
        var date_of_birth=$("#date_of_birth").val();
        if(student_id=='' || course_id=='' || marks==''){
          alert('Please Enter all Fields');
          return false;
        } 
        if(marks > 100){
          alert('Please valid Marks');
          return false;
        }
		$.ajax({
			type: "POST",
			dataType: 'json',
			url: "ajaxmarksform.php",
			data:"student_id=" + student_id + " & marks= "+ marks + " & course_id= "+ course_id,
			success: function(data){
        $("#marks").val('');
        $("#student_id").val('');
        $("#course_id").val('');
        $("#display_message").show();
               setTimeout(function() { $("#display_message").hide(); }, 5000);
					
			}
	  	});
	}
  </script>                          