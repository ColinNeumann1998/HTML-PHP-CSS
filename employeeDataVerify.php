<link rel = "stylesheet" type = "text/css" href = "readBookFile.css"/>

<?php

$employee_name = $_POST["employee_name"];
$campus_id = $_POST["campus_id"];

$alpha = 0;
$number = 0;

// Count first two characters for alphabet
for ($i = 0; $i < 2; $i++) {
	if (ctype_alpha($campus_id[$i])) {
		$alpha++;
	}
}

// Count last two characters for numbers
for ($i = 0; $i < strlen($campus_id); $i++) {
	if (is_numeric($campus_id[$i])) {
		$number++;
	}
}

// If alphabet are two and numbers are 4 then valid id
if ($alpha == 2 && $number == 4) {
	
	echo "Campus ID was in correct format";
	
} else {
	
echo '<a href = "employee.html"> Campus ID was incorrect. Go back and re-enter name and campus ID </a>';
	
}

?>
