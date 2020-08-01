<!DOCTYPE html>
<html lang="en">
<head>
  <title>Student Details</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.2/css/bootstrapValidator.min.css"/>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.2/js/bootstrapValidator.min.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

</head>
<body>
<!-- <form action="/action_page.php"> -->
<div class="container">
<fieldset style="margin-top:5px;margin-left">
<div class="jumbotron">
	<legend class='sub-header' style="margin-left: 14px;">Student Details</legend>
  <p id="display_message" style="display:none">Records are Saved Successfully</p>
<div class="form-group ">
    <label for="student_name">Student Name:</label>
    <input type="student_name" class="form-control" id="student_name" autocomplete="off">
</div>
<div class="form-group">
    <label for="date_of_birth">Date of Birth:</label>
    <div class='input-group date' >
        <input type='text' name="date_of_birth" class="form-control" id='date_of_birth' value="" autocomplete="off"/>
        <span class="input-group-addon">
            <span class="glyphicon  glyphicon-calendar"></span>
        </span>
    </div>
</div>

  <button type="submit" class="btn btn-default" onclick="return submit_form();">Submit</button>
</div>  
<!-- </form> -->
</fieldset>
</div>
</div>
</body>

<script>
  $( function() {
     $('#date_of_birth').datepicker({ dateFormat: 'dd-mm-yy' });
  } );

  function submit_form(){
	
		var student_name=$("#student_name").val();
        var date_of_birth=$("#date_of_birth").val();
		
		$.ajax({
			type: "POST",
			dataType: 'json',
			url: "ajaxstudentform.php",
			data:"student_name=" + student_name + " & date_of_birth= "+ date_of_birth ,
			success: function(data){
        
        $("#student_name").val('');
        $("#date_of_birth").val('');
        $("#display_message").show();
        setTimeout(function() { $("#display_message").hide(); }, 5000);
						
					
			}
	  	});
	}
  </script>                          