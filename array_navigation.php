<?php
	$navigation = array();
	
	$linktest = "Link1";
	$url= "http://augusta.uao.edu.co";
	$linktype="nulo";
	$navigation[] = array('name' => $linktest, 'link' => $url, 'type' => $linktype);
	$linktest = "Link2";
	$url= "http://test.uao.edu.co";
	$linktype="nulo";
	$navigation[] = array('name' => $linktest, 'link' => $url, 'type' => $linktype);
	
	$count = count($navigation);
	printf("%d-\n", $count);
	$link_change='http';
	printf("%s->\n", $link_change);
	for($i=0;$i<$count;$i++){
		$oldurl = $navigation[$i]['link'] ;
		printf("oldurl->%s\n", $oldurl);
		$oldurl = str_replace($link_change, 'https', $oldurl);
		printf("newurl->%s\n", $oldurl);
		$navigation[$i]['link'] = $oldurl;
	}
	
	var_dump($navigation);
?>