<?php
	
	include_once('simplehtmldom_1_9_1/simple_html_dom.php');

	function cUrl($url){
	$referer = 'https://www.google.com';
	//$url = 'https://www.nbcomputers.ru';
	$agent = 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.190 Safari/537.36';
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_HEADER, 0);
	curl_setopt($ch, CURLOPT_USERAGENT, $agent);
	curl_setopt($ch, CURLOPT_REFERER, $referer);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$data = curl_exec($ch);
	curl_close($ch);
	return $data;
	}
	$html = cUrl('https://ntschool.ru/kursyi');
	$dom = str_get_html($html);

	$nowtbooks = $dom->find('.courses-list--item-body');

	foreach ($nowtbooks as $noutbook) {
		$a = $noutbook->find('a', 0);

		$one = cUrl('https://ntschool.ru'.$a->href);
		$one_dom = str_get_html($one);

		$cost = $one_dom->find('.course1-ticket1--box-newPrice', 0);
		echo $a->plaintext.' '.$cost->plaintext;
		break;
	}
	//echo $data;
	//curl_close($ch);
	
	//file_put_contents('1', $data);
?>