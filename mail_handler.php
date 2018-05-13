<body align="center" bgcolor="red">
<?php

	if(isset($_POST['submit'])){
		$name=$_POST['name']
		$reply=$_POST['email']
		$subject=$_POST['subject']
		$msg=$_POST['msg'];

		$to=="thefrankz28@gmail.com";
		$message="From :".$name.
		"\n".
		"Message :".
		"\n\n"
		"Reply To :".$reply
		.$msg;
		$headers=.$subject;
		if(mail($to, $subject, $message, $headers)){
			echo "DONE";
		}
	
		else{
			echo "not sent";
		}
	}
?>
<h1><a href="contact.html">Back</a></h1>
</body>