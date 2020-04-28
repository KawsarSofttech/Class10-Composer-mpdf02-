<?php 
include 'vendor/autoload.php';
;
// Create an instance of the class:
$mpdf = new \Mpdf\Mpdf();

$data = [
	[
		"name"=>"Suny",
		"ID"=>"2020"
	],
	[
		"name"=>"Money",
		"ID"=>"2030"
	],
	[
		"name"=>"Honey",
		"ID"=>"2040"
	],
];
$res="";
foreach ($data as $value){
	// $res .= "<h2>".$value['name']."</h2>";
	$res .= "<li>".$value['name']."</li>";
}

// Write some HTML code:
$html = <<<MYPDF
<!DOCTYPE html>
<html>
<head>
	<title>pdf doc</title>
</head>
<body>
	<ul>
		$res
	</ul>	
</body>
</html>
MYPDF;

$mpdf->WriteHTML($html);

// Output a PDF file directly to the browser
$mpdf->Output();

?>