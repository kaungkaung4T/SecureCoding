<?php


if(isset($_POST['phpFunction'])) {
		if($_POST['phpFunction'] == 'checkLogin') {
			checkLogin();
		} elseif($_POST['phpFunction'] == 'logout') {
			logout();
		}
}


function logout () {
	session_start();
 			$_SESSION = array(); // destroy all $_SESSION data
	 		setcookie("PHPSESSID", "", time() - 3600, "/");


		//session_regenerate_id(true);	change the session id on each log in
		//===================
		// 		clearCookie();
		// unset($_SESSION);
		// session_destroy();

		// session_id($current_session_id); //restore current session id.
		// session_start();		//If don't restore it, your current session will refer to the session you just destroyed!
		// session_commit();


	//Destroying all sessions
	if( session_destroy() )
	{

			echo 'true';
	} else {
		echo 'false';
		//header( "Location: ../login/Login.html" );
	}
		//Redirecting to home page
		//header( "Location: ../login/Login.html" );
}








function checkLogin() {
	session_start();
	$uName = $_SESSION['uName'];


	if( isset( $uName ) ) {
		echo 'true';
	} else {
		echo 'false';
	}
}
?>
