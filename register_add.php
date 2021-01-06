<?php
	
	include 'includes/session.php';

	if(isset($_POST['registration'])){

		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$age = $_POST['age'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$repassword = $_POST['repassword'];
		$birthday = $_POST['birthday'];
		$address = $_POST['address'];
		$landmark = $_POST['landmark'];
		$contact_info = $_POST['contact_info'];

		$_SESSION['firstname'] = $firstname;
		$_SESSION['lastname'] = $lastname;
		$_SESSION['email'] = $email;

		if ( $age < 18 ) {
			$_SESSION['error'] = '18 years old below are not allowed to register';
			header('location: user_register.php');
			return;
		}


		if($password != $repassword){
			$_SESSION['error'] = 'Passwords did not match';
			header('location: user_register.php');
		}
		else{
			$conn = $pdo->open();

			$stmt = $conn->prepare("SELECT COUNT(*) AS numrows FROM users WHERE email=:email");
			$stmt->execute(['email'=>$email]);
			$row = $stmt->fetch();
			if($row['numrows'] > 0){
				$_SESSION['error'] = 'Email already taken';
				header('location: user_register.php');
			}
			else{
				$now = date('Y-m-d');
				$password = password_hash($password, PASSWORD_DEFAULT);

				//generate code
				$set='123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
				$code=substr(str_shuffle($set), 0, 12);

				try{
					$stmt = $conn->prepare("INSERT INTO users (firstname, lastname, email, age, password, birthday, address, landmark, activate_code, contact_info, created_on) VALUES (:firstname, :lastname, :email, :age, :password, :birthday, :address, :landmark, :code, :contact_info, :now)");
					$stmt->execute(['firstname'=>$firstname, 'lastname'=>$lastname, 'email'=>$email, 'age'=>$age, 'password'=>$password, 'birthday'=>$birthday, 'address'=>$address, 'landmark'=>$landmark, 'status'=>1, 'activate_code'=>$code, 'contact_info'=>$contact_info, 'created_on'=>$now]);
				//	$userid = $conn->lastInsertId();

				}
				catch(PDOException $e){
					$_SESSION['error'] = $e->getMessage();
					header('location: user_register.php');
				}
				$pdo->close();
			}
		}
	}
	else{
		$_SESSION['error'] = 'Fill up registration form first';
		header('location: register.php');
	}

?>