<?php
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;

	include 'includes/session.php';

	if(isset($_POST['submit'])){
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$msg = $_POST['msg'];

		

			$conn = $pdo->open();

				try{
					$stmt = $conn->prepare("INSERT INTO contact (fname, lname, email, phone, msg ) VALUES (:firstname, :lastname, :email, :phone, :msg )");
					$stmt->execute(['firstname'=>$firstname, 'lastname'=>$lastname, 'email'=>$email, 'phone'=>$phone, 'msg'=>$msg ]);
					

					$message = "
						<h2>Thank you ".$firstname." for Contacting us.</h2>
						<p>Your Details:</p>
						<p>Email: ".$email."</p>
						<p>Phone: ".$phone."</p>
						<h4>We'll get in touch with you soon:).</h4>
						
					";

					//Load phpmailer
		    		require 'vendor/autoload.php';

		    		$mail = new PHPMailer(true);                             
				    try {
				        //Server settings
				        $mail->isSMTP();                                     
				        $mail->Host = 'smtp.gmail.com';                      
				        $mail->SMTPAuth = true;                               
				        $mail->Username = 'rentalladmn2021@gmail.com';     
				        $mail->Password = 'Rentall*12345';                    
				        $mail->SMTPOptions = array(
				            'ssl' => array(
				            'verify_peer' => false,
				            'verify_peer_name' => false,
				            'allow_self_signed' => true
				            )
				        );                         
				        $mail->SMTPSecure = 'ssl';                           
				        $mail->Port = 465;                                   

				        $mail->setFrom('@gmail.com');
				        
				        //Recipients
				        $mail->addAddress($email);              
				        $mail->addReplyTo('@gmail.com');
				       
				        //Content
				        $mail->isHTML(true);                                  
				        $mail->Subject = 'By Rentall Website Admin.';
				        $mail->Body    = $message;

				        $mail->send();

				        

				        $_SESSION['success'] = 'Thank You for contacting us, Check your email.';
				        header('location: contact.php');

				    } 
				    catch (Exception $e) {
				        $_SESSION['error'] = 'Message could not be sent. Mailer Error: '.$mail->ErrorInfo;
				        header('location: contact.php');
				    }


				}
				catch(PDOException $e){
					$_SESSION['error'] = $e->getMessage();
					header('location: process.php');
				}

				$pdo->close();

			}

		

	

?>