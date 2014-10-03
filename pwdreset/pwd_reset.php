<?php 
	if(isset($_POST['email']) && isset($_POST['pass_confirmation']) && isset($_POST['pass'])){
		$email = $_POST['email'];
		$current_pwd = $_POST['curntpwd'];
		$password = $_POST['pass_confirmation'];
		$cpwd = $_POST['pass'];

		if($password == $cpwd){
			$xml=simplexml_load_file("email_account.xml");
			$isexist = false;
			foreach ($xml as $account) {
				if($account->adr == $email){
					$isexist = true;
					if($account->cur_pwd == "" || $account->cur_pwd == $current_pwd){
						require_once('simpletest/browser.php');
    
						$browser = &new SimpleBrowser();
						$browser->get('http://cpanel.priwebs.com/');

						$browser->setFieldByName("email", "administrator@vpo-ventures.com");
						$browser->setFieldByName("password", "Welcome2VPO5235");
						$browser->setFieldByName("lang", "en");
						$browser->clickSubmit('Login');
						
						$browser->get('http://cpanel.priwebs.com/emails/change-password/id/'.$account->id);
						$browser->setFieldByName("password", $password);
						$browser->setFieldByName("password_confirm", $password);
						$browser->clickSubmit('Change');

						print "Password has been reset";
						$account->cur_pwd = $password;

					}else{
						print "Current Password is not correct";
					}
				}
			}
			$xml->asXML("email_account.xml");

			if($isexist == false){
				print "Unknown Email. Please check!";
			}
			
		}else{
			print "New Password did not match.";
		}
	}else{
		print "Invalid Login Credentials.";
	}
?>