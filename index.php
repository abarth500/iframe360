<?php
if(isset($_REQUEST['img'])){
	$img = $_REQUEST['img'];
    $angle = 0;
    $andleLast = 360;
	if(isset($_REQUEST['angle'])){
        $angle = $_REQUEST['angle'];
        $angleLast = $angle + 360;
    }
    $text = "";
	if(isset($_REQUST['text'])){
        $text = $_REQUEST['text'];
    }
	$bar = <<<EOT
<html>
<head></head>
<body>
<a-scene><a-sky src="{$img}"><a-animation attribute="rotation" fill="forwards" easing="linear" dur="200000" from="0 {$angle} 0" to="0 {$angleLast} 0" repeat="indefinite"></a-animation></a-sky></a-scene><sc' + 'ript src="https://aframe.io/releases/0.7.0/aframe.min.js"></' + 'script>');
</body>
</html>
EOT;
echo $bar
}else{
    echo "hello";
}
?>