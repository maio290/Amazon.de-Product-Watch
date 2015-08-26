<?PHP

	require_once("watch.php");
	
	// Set your e-mail address here
	
	$mail = 'foo@bar.org';
	
	// Add function calls
	//check_product($asin,$mail,$productname)
	
	check_product("B0085J140S",$mail,"Balea Men Haarshampoo Fresh, 5er Pack (5 x 300 ml)");
	check_product("B00WROM712",$mail,"JIMMY'Z Langanhaltender, einzigartiger Energy Drink mit viel Koffein, japanischem Matcha-Tee und sehr wenig Zucker. Erfrischender Lemon-Geschmack. 24x250ml Dosen. Inklusive Pfand.");

?>