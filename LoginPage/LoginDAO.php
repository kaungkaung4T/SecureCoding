<?php
require_once '../include/config.php';
require_once '../common/php/common.php';

if(isset($_POST['phpFunction'])) {
    /*if($_POST['phpFunction'] == 'checkLogin') {
        checkLogin();

    } else*/

    if($_POST['phpFunction'] == 'login') {
        login();
    }
}

function login() {

	               session_start();
	                   $uName = $_POST['userName'];
                      //sql injection prevent codes
                     $special = array('/','\\',':',';','!','#','$','%','^','*','(',')','_','+','=','|','{','}','[',']','"',"'",'<','>',',','?','~','`','&',' ');
                     $uName = str_replace($special, "", $uName);


                    // $uName = preg_replace('#[^a-z0-9_]#', '', $uName);

                     $pWord = md5($_POST['password']);


                    // $uName = mysqli_real_escape_string($con, $_POST['userName']);
                    // $pWord = mysqli_real_escape_string($con, $_POST['password']);

                   $sql = "SELECT `First_Name`, `Last_Name` FROM `tbl_user` WHERE email='".$uName."' AND password='".$pWord."'";


//$rawQuery = "SELECT `First_Name`, `Last_Name` FROM `tbl_user` WHERE email='%$' AND password='%$';";
//$query = sprintf($rawQuery, mysqli_real_escape_string($mysqli, $uName), mysqli_real_escape_string($mysqli, $pWord));

                     include "../include/config.php";

	                    $res = mysqli_query($connection, $sql);
	                    $num_row = mysqli_num_rows($res);
	                    $row=mysqli_fetch_assoc($res);

                           if( $num_row == 1 ) {
		                           echo json_encode($row);
		                             $_SESSION['uName'] = $uName;
	                               }
	                                else {
		                                  echo 'false';
	                                   }


  //session_start();
  //	$uName = $_POST['userName'];
  	   //$pWord = md5($_POST['password']);

      //$rawQuery = "SELECT `First_Name`, `Last_Name` FROM `tbl_user` WHERE email='%$' AND password='%$'",
    //  mysql_real_escape_string($user),
    //  mysql_real_escape_string($password));;

    //$query = sprintf($rawQuery, mysqli_real_escape_string($mysqli, $uName), mysqli_real_escape_string($mysqli, $pWord));

//$result = mysqli_query($mysqli, $query);


          //var_dump($data);

        //include "../include/config.php";

//	$res = mysqli_query($connection, $sql);
//	$num_row = mysqli_num_rows($res);
//	$row=mysqli_fetch_assoc($res);
//	if( $num_row == 1 ) {
//		echo json_encode($row);
//		$_SESSION['uName'] = $uName;
//	}
//	else {
//		echo 'false';
//	}



}



?>
