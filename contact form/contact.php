<?php
echo '<pre>';
print_r($_POST);
echo '<pre>';


$sent_status = mail('s2100152@edu.bc.fi', 'Sent from test PHP application', $_POST['message'] . ' sent by ' . $_POST['username']);

if ($sent_status) {
	echo "Message was delivered";
} else {
	"Message was not delivered";
};

?>