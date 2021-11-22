<?php
	if(isset($_POST['submit'])){
		$name=$_POST['name'];
		$email=$_POST['email'];
		$phone=$_POST['phone'];
		$msg=$_POST['message'];

		$to='contact@tecdatum.in'; // Receiver Email ID, Replace with your email ID
		$subject='Tec Datum Enquiry';
		$message="Name :".$name."\n"."Phone :".$phone."\n"."Wrote the following :"."\n\n".$msg;
		$headers="From: ".$email;

		if(mail($to, $subject, $message, $headers)){
			echo '<script type="text/javascript">alert("Thanks for your interest. Your Message has been sent to Tec Datum");window.location.assign("index.html");</script>';
		}
		else{
			echo '<script type="text/javascript">alert("Thanks for your interest. Your Message has not sent to Tec Datum");window.location.assign("index.html");</script>';
		}
	}
?>
