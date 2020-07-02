<?php
	if($_GET["country"] == 1){
		echo json_encode(array("1" => "Wash", "2" => "New York"));
	}elseif ($_GET["country"] == 2) {
		echo json_encode(array("3" => "Moscow", "4" => "snt_p"));
	}elseif ($_GET["country"] == 3) {
		echo json_encode(array("4" => 'kh', "5" => 'kyiv'));
	}else{
		echo json_encode(array("5" => ''));
	}



?>