<?PHP



function check_product($asin,$mail,$productname)
{	
	$url = 'http://www.amazon.de/dp/'.$asin.'/';
	$text = file_get_contents($url);
	$text_strip = strip_tags($text);
	
	if(strpos($text_strip,'Derzeit nicht') === false)
	{
		send_mail($mail,$productname,$url);
	}
	
}
		
function send_mail($mail,$productname,$url)
{
	$header  = 'MIME-Version: 1.0'."\r\n";
	$header .= 'Content-type: text/html; charset=iso-8859-1'."\r\n";
	$header .= 'From: Amazon-Watcher <amazon_watcher@maio290.de>'."\r\n";
	$header .= 'Reply-To: amazon_watcher@maio290.de'."\r\n";
	$text = '
	<p>Hallo!</p>
	
	<p>der Artikel '.$productname.' ist wieder bestellbar.</p>
	
	Hier ist der Link: <a href="'.$url.'">'.$url.'</a>

			
	';

	mail($mail,'[Amazon-Watcher] Produkt: '.$productname.' ist wieder bestellbar!',$text,$header);

}
		

?>