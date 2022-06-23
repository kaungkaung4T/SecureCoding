<?php
	echo "<html> ";
	echo "<head> ";
	echo '<meta charset="utf-8"> ';
	echo "<title>OnlineCarPurchasingAndSelling - Search </title> ";
	echo '<link href="../css/styles.css" type="text/css" rel="stylesheet"> ';
	echo "<script ";
	echo 'src="https://code.jquery.com/jquery-3.3.1.js" ';
	echo 'integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" ';
	echo 'crossorigin="anonymous"></script> ';
	echo "</head> ";
	echo "<body> ";
	echo "<header> ";
	echo "<nav> ";
	echo "<center> ";
	echo "<ul> ";
	echo '<li><a href="../SearchItemPage/SearchItemDAO.php">Search</a></li> ';
	echo '<li><a href="../BuyItemPage/BuyItem.html">Purchasing</a></li> ';
	echo '<li><a href="../SellItemPage/SellItem.html">Sell Your Car</a></li> ';
	echo "</ul> ";
	echo "</center> ";
	echo "</nav> ";
	echo "</header> ";
	//echo "<section> ";
	echo "<center> ";
	//echo '<h1>Welcome <span id="nameField"></span>!</h1> ';
	echo "<br> ";
	echo "<section> ";
	echo "<h1>Search by Car name</h1> ";
	echo "</section> ";
	echo "<br> ";
	echo "<br> ";

	echo '<form action="./SearchItemDAO.php" method="get"> ';
	echo "<label>Search</label> ";
	echo '<input type="text" id="txtSearchValue" name="searchValue" placeholder="search by Car name"
	autocomplete="off" ng-model="vm.amount" ng-change="vm.updateRequest()" (keypress)="omitSpecialChar($event)"> ';

	echo "<br> ";
	echo "<br> ";
	echo '<input id="submit" type="submit" value="Submit"> ';
	echo "</form> ";
	echo "<br> ";
	echo '<section id="searchResults"> ';




	searchItems();
	// Run show Item function




	function searchItems() {
		include "../include/config.php";





			//$searchValue = $_GET['searchValue'];
			$searchValue = htmlspecialchars($_GET['searchValue'], ENT_QUOTES, 'UTF-8');		//xss attack prevent codes
			$special = array('@', '!', '#', '-', "'", '*');				//sql injection prevent codes
			$searchValue = str_replace($special, "", $searchValue);


			//	$searchValue = mysqli_real_escape_string ($_GET['searchValue']);

			if ($searchValue != "") {
						//if(isset($_GET['searchValue']))	{

			// $sql = "SELECT * FROM `tbl_item` ".
			// 	" WHERE ".
			// 	" ITEM_NAME = '$searchValue'";

			$sql = "SELECT * FROM `tbl_item` "." WHERE ".
				" ITEM_NAME = '$searchValue'";




			//echo "SQL: ". $sql . " <br> ";
			//echo $sql;

			echo " Your search Car- " . $searchValue . "  <br> <br><br> ";

			$res = mysqli_query($connection, $sql);

			while($row = mysqli_fetch_array($res)) {
				echo '<br>' . 'Car category: ' . $row[0] . '<br><br>' . 'Car name: ' . $row[1] . '<br><br>' . 'Car description: ' . $row[2] . '<br><br>' . 'Car price: ' . $row[3] . '<br><br>' . 'Owner email: ' .
				$row[4]  . '<br><br>' . '<input type="button" value="Add to Cart" button style="background-color:#2a475e; border-color:#2a475e; color:#66c0f4" />' . '<br><br>';
			};
		}

	}





	echo '</section> ';
	echo "</center> ";
	//echo "</section> ";
echo "<br> ";
echo "<br> ";
echo "<footer> ";
echo "</footer> ";

	echo "</body> ";
	echo "</html> ";

	// Run add name function
	function addName() {
		session_start();
		$fnln = $_SESSION['fnln'];
		echo $fnln;
	}

	// function mysql_escape_mimic($searchValue) {
	// 	if(is_array($searchValue))
	// 			return array_map(__METHOD__, $searchValue);
	//
	// 	if(!empty($searchValue) && is_string($searchValue)) {
	// 			return str_replace(array('\\', "\0", "\n", "\r", "'", '"', "\x1a"), array('\\\\', '\\0', '\\n', '\\r', "\\'", '\\"', '\\Z'), $searchValue);
	// 	}
	//
	// 	return $searchValue;
	// }


	// function clean($string) {
	//    $string = str_replace(' ', '-', $string); // Replaces all spaces with hyphens.
	//
	//    return preg_replace('/[^A-Za-z0-9\-]/', '', $string); // Removes special chars.
	// }



?>

<script type="text/JavaScript">

// $("#txtSearchValue").keypress(function(event) {
//     var character = String.fromCharCode(event.keyCode);
//     return isValid(character);
// });
//
// function isValid(str) {
//     return !/[~`!#$%\^&*()+=\-\[\]\\';,/{}|\\":<>\?]/g.test(str);
// }
//
// $('#txtSearchValue').bind("cut copy paste",function(e) {
//      e.preventDefault();
//  });




</script>
