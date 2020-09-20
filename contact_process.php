<?php 
		if(isset($_POST['submit'])){
		$to = "notesappgecb@gmail.com"; // this is your Email address
		$from = $_POST['email']; // this is the sender's Email address
		$name = $_POST['name'];
		$subject = $_POST['subject'];
		$message =$_POST['message'];
		
		$headers = "From:" . $from;
		$headers2 = "From:" . $to;
		mail($to,$subject,$message,$headers);
		echo "Message Sent. Thank you " . $first_name . ", we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }
	?>