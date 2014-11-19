<?php
class Login_With_Email extends GP_Plugin {
	public $id = 'login_with_email';

	public function __construct() {
		parent::__construct();

		$this->add_action( 'plugins_loaded' );
	}

	public function plugins_loaded() {
		include trailingslashit( dirname( __FILE__) ) . 'route.php';

		GP::$router->add( "/login", array( 'Login_With_Email_Route', 'login_post' ), 'post' );
	}
}

GP::$plugins->login_with_email = new Login_With_Email;
