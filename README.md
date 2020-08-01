# studentdatabase
This application is used to store the marks of students and for display of it.

Installation
DB:
1) create a dbname 'studentdb' in mysql admin panels like phpmyadmin.workbench etc
2) create the tables 'student','course' and marks as in the .sql file
3) run the dummy data for 'course' table
4)update the connection.php with respective credentials in your db

code:
1) addmarks.php,addstudents.php respectively for adding marks & student details
2) ajaxmarksform.php,ajaxstudentform.php respectively for implemting ajax backend functionalities from addmarks.php & addstudents.php
3) student_list.php will display the full details of student including courses and marks
4)studentdb.php has the backend functionalities for populating dropdowns and datas of student_list.php
