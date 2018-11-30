<?php
	use Google\Cloud\Translate\TranslateClient;

	$projectId = 'galvanic-idiom-223900';

	$translate = new TranslateClient();

	$text = $_POST["text"];
	$target = 'en';
	$model = 'base';
	$blockSize = 70;
	$output = "";
	$transTxt .= $translate->translate($text, [
				'target' => $target,
				'model' => $model
			 ]);
	print $transTxt;
	$transTxt = $text;	
	$i = 0;
	$txtSize = strlen($transTxt);
	print "here2\n";
	while($i<$txtSize){				
		$output .= http_get("https://www.googleapis.com/customsearch/v1", array("q"=>subStr($transTxt, $i, $blockSize), "num"=>1, "start"=>1, "imgSize"=>"medium"
			"searchType"=>"image", "filetype"=>"jpg", "key"=>"AIzaSyAwMW2qI1pgoedKqiJNKC1b_59D5pQxxJ4", "cx"=>"015475466400920472268%3Aaa1sgtpmdny"),
			$info);	
	}

	return $transTxt;
?>
