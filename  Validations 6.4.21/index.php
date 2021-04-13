<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Validations</title>
</head>
<body>
<?php

function validate_user_name($user_name)
{
    $user_name = str_replace(' ', '', $user_name);
    if (strlen($user_name) <= 25 && $user_name != null) {
        echo $user_name . " user ok ";
    } elseif (strlen($user_name) > 25) {
        echo $user_name . " too long name ";
    } elseif ($user_name == null) {
        echo " User name is empty ";
    } else {
        echo " Not valid ";
    }
}

echo "<p>" . validate_user_name("Iolanta") . "</p>";

function validate_weekday($day)
{
    $options = array(
        'options' => array(
            'default' => -1,
            'min_range' => 0,
            'max_range' => 6,
        ),
    );

function validate_weekday($day) {
		$options = array(
			'options' => array(
				'default' => -1,
				'min_range' => 0,
				'max_range' => 6
			)
			);
		if (filter_var($day, FILTER_VALIDATE_INT, $options) != -1 && !is_string($day) ) {
			return true;
	   } else {
		   return false;
	   }
}

echo "<p>0 is a valid weekday: " . validate_weekday(0) . "</p>"; // true
echo "<p>6 is a valid weekday: " . validate_weekday(6) . "</p>"; // true
echo "<p>100 is a valid weekday: " . validate_weekday(100) . "</p>"; // false
echo "<p>-12 is a valid weekday: " . validate_weekday(-12) . "</p>"; // false
echo "<p>4 is a valid weekday: " . validate_weekday(4) . "</p>"; // true
echo "<p>null is a valid weekday: " . validate_weekday(null) . "</p>"; // false
echo "<p>An empty string is a valid weekday: " . validate_weekday("") . "</p>"; // false
echo "<p>A string is a valid weekday: " . validate_weekday("5") . "</p>"; // false
echo "<p>5.5 is a valid weekday: " . validate_weekday(5.5) . "</p>"; // false



function validate_widthdraw_amount($amount, $balance) {
	if (filter_var($amount, FILTER_VALIDATE_INT) && filter_var($balance, FILTER_VALIDATE_INT)&& $balance >= 0 && $amount >= 0 && $amount <= $balance && !is_bool($amount)  && !is_bool($balance)){
		return true;
	} else {
		return false;
	}
}

echo 'Able to withdraw 100 from an account of 1000 balance: ' . validate_widthdraw_amount(100, 1000); // true
echo '<br>';
echo 'Able to withdraw 1000 from an account of 1000 balance: ' . validate_widthdraw_amount(1000, 1000); // true
echo '<br>';
echo 'Able to withdraw -50 from an account of 1000 balance: ' . validate_widthdraw_amount(-50, 1000); // false
echo '<br>';
echo 'Able to withdraw 1500 from an account of 1000 balance: ' . validate_widthdraw_amount(1500, 1000); // false
echo '<br>';
echo 'Able to withdraw true from an account of true balance: ' . validate_widthdraw_amount(true, true); // false
echo '<br>';
echo 'Able to withdraw 0 from an account of negative 100 balance: ' . validate_widthdraw_amount(0, -100); // false
echo '<br>';
echo 'Able to withdraw null from an account of 0 balance: ' . validate_widthdraw_amount(null, 0); // false
echo '<br>';

function validate_school_email($email_addr) {
	if (filter_var($email_addr, FILTER_VALIDATE_EMAIL) && str_contains( $email_addr, "bc.fi")) {
		return true;
	} else {
		return false;
	}
}

echo 'test_student@bc.fi is a valid school email: ' . validate_school_email('test_student@bc.fi'); // true
echo '<br>';
echo 'test_student@bc.fi@bc.fi is a valid school email: ' . validate_school_email('test_student@bc.fi@bc.fi'); // false
echo '<br>';
echo 'bc.fi@bc.fi is a valid school email: ' . validate_school_email('bc.fi@bc.fi'); // true
echo '<br>';
echo 'test_student@gmail.com is a valid school email: ' . validate_school_email('test_student@gmail.fi'); // false
echo '<br>';
echo 'test_student#bc.fi is a valid school email: ' . validate_school_email('test_student#bc.fi'); // false
echo '<br>';
?>


</body>
</html>