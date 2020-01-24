<?php
namespace Page;
class Constants {
	// Username and Password
	public static $userName = 'pooja.muchandikar';
	public static $password = '1100';
	
	 // Login Selectors
	 public static $wpUserNameField = 'input#user_login';
	 public static $wpPasswordField = 'input#user_pass';
	 public static $wpSubmitButton = 'input#wp-submit';

	 //Logout Selectors
	 public static $adminBarMenuSelector = '#wp-admin-bar-my-account';
	 public static $logoutLink = '#wp-admin-bar-user-actions #wp-admin-bar-logout a';

	 public static $saveSession = false;


}
?>