<?php
// the message
$msg = "WELCOME TO NIT Andhra Pradesh Student Information System,

You got this message beacuse you are registered in Student Information System , NIT Andhra Pradesh.

Features of Student Information System :-
1. Attendance Updated from Time to Time.
2. All your course marks at your fingertips.
3. Various Certificates and Achievements.
4. Course Registrations
5. Still Many More Under Development. Stay Tuned. ";

// use wordwrap() if lines are longer than 70 characters
$msg = wordwrap($msg,70);

// send email
mail("tvsvishnu2002@gmail.com","NIT Andhra Pradesh Student Information System",$msg);
?>