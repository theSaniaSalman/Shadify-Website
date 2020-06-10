<?php
	if(isset($_POST['submit'])){
		$groomname=$_POST['groom-name'];
		$bridename=$_POST['bride-name'];
		$eventdate=$_POST['event-date'];
		$email=$_POST['email'];
		$phone=$_POST['phone'];


		$to='asifff@gmail.com'; // Receiver Email ID, Replace with your email ID
		$subject='Shadify Event Registration';
		$message="Groom Name :".$groomname."\n"."Bride Name :".$bridename."\n"."Event Date :".$eventdate."\n"."Phone :".$phone;
		$headers="From: ".$email;

if (empty($groomname) || empty($bridename) || empty($eventdate) || empty($email) || empty($phone))
	{
		echo "Please fill all the fields";
	}
			else{
			mail($to, $subject, $message, $headers)
			echo "<script type='text/javascript'>
			alert('Event Registered Successfully!');
			window.history.log(-1);
			</script>";
		}
	}
?>
