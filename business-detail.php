<?php
  
   session_start();

   if(!isset($_SESSION['is_adminlogin'])){

	if(isset($_POST['submit'])){
		$name=$_POST['name'];
		$email=$_POST['email'];
		$phone=$_POST['mobile'];
		$buss_name=$_POST['bname'];

		$to='nilesh@hospitalityminds.com';
		$subject='Form Submission';
		$message="Name :".$name."\n"."Phone :".$phone."\n"."Wrote the following :"."\n\n".$buss_name;
		$headers="From: ".$email;

		if(mail($to, $subject, $message, $headers)){
			if($email){	
				$_SESSION['is_adminlogin'] = true;
				$_SESSION['email'] = $email;

				header('Location: pricing_packages.php');
			}
			else{
				header('Location: index.html');
		}
	  }	
	}
}

else{
	header('Location: pricing_packages.php');
}

?>