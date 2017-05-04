<?php
	include_once "connect.php";
	class user{
		static function checkUser($email){
			global $con; // khai bao bien toan cuc
			$email = mysqli_real_escape_string($con, trim($email));
			//  trim($var): xoa ki tu trang thua trong gia tri cua bien $var
			//  mysqli_real_escape_string($var):
			$query = "SELECT * FROM  user WHERE email='$email'";
			$result = mysqli_query($con, $query) or die(" ERROR CHECK USER: ".$con);
			$number = mysqli_num_rows($result); // dem so dong tra ve
			return $number;
		}
		static function checkName($name){
			global $con;
			$name = mysqli_real_escape_string($con, trim($name));
			if(strlen($name)==0 || !preg_match('/[a-zA-Z]/', $name)){
				$name=NULL;
				return false;
			}
			else{
				$name=stripcslashes($name);
				return true;
			}
		}
		// check acount
		static function checkAcount($acount){
			global $con;
			$acount = mysqli_real_escape_string($con, trim($acount));
			if(strlen($acount)==0){
				return false;
			}
			else{
				$query = "SELECT * FROM user WHERE acount='$acount'";
				$result = mysqli_query($con, $query) or die("LOI TRUY VAN: ".mysqli_error($con));
				$num = mysqli_num_rows($result);
				if($num!=0) return false;
			}
			return true;
		}

		// check email
		static function checkEmail($email){
			global $con;
			$email = mysqli_real_escape_string($con, trim($email));
			if(strlen($email)==0 || !filter_var($email, FILTER_VALIDATE_EMAIL)){
				$email=NULL;
				return false;
			}
			else{
				$email = stripcslashes($email);
				return true;
			}
		}
		// check phonenumber:
		static function checkPhoneNumber($phone){
			global $con;
			$phone = mysqli_real_escape_string($con, trim($phone));
			if(isset($phone)){
				if(!(strlen($phone)>0)){
					$phone = NULL;
					return false;
				}
				elseif(strlen($phone)!=10 && strlen($phone)!=11){
					$phone = NULL;
					return false;
				}
				elseif(!preg_match('/[0-9]/', $phone)){
					$phone = NULL;
					return false;
				}

			}
			return true;
		}
		static function checkBirthday($b_day,$b_month,$b_year){
			// Nam nhuan
				if($b_year%100==0 && $b_year%4==0){
					if($b_month==2){
						if(1>$b_day || $b_day>29){
							$b_day=null;
							$b_month=null;
							$b_year=null;
							return false;
						}
					}

				}
			// Nam thuong
				else{
					if($b_month==2){
						if(1>$b_day || $b_day>28){
							$b_day=null;
							$b_month=null;
							$b_year=null;
							return false;
						}
					}

				}
				switch($b_month){
					case 1:
					case 3:
					case 5:
					case 7:
					case 8:
					case 10:
					case 12:
						if(1>$b_day || $b_day>31){
							$b_day=null;
							$b_month=null;
							$b_year=null;
							return false;
						}
						break;
					case 4:
					case 6:
					case 9:
					case 11:
						if(1>$b_day || $b_day>30){
							$b_day=null;
							$b_month=null;
							$b_year=null;
							return false;
						}
						break;

					}
			return true;
		}
		static function checkPassword($pwd1, $pwd2){
			if(!(strlen($pwd1)>0)){
				$pwd1=NULL;
				$pwd2=NULL;
				return false;
			}
			elseif(strlen($pwd1)<6){
				$pwd1=NULL;
				$pwd2=NULL;
				return false;
			}
			return true;

		}
		static function checkConfirm_Password($pwd1, $pwd2){
			if($pwd2!=$pwd1){
				$pwd1=NULL;
				$pwd2=NULL;
				return false;
			}
			return true;
		}

		static function checkUserLogin($email, $pwd){
			global $con;
			$email 	= mysqli_real_escape_string($con, trim($email));
			$pwd 	= mysqli_real_escape_string($con,trim($pwd));
			$query 	= "SELECT * FROM user WHERE email='$email' AND pass='$pwd'";
			$result = mysqli_query($con, $query) or die("checkUserLogin: ".mysqli_error($con));
			return $result;
		}

	}
?>
