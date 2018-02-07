<?php
if(isset($_GET['img'])){
	$img = $_GET['img'];
    $angle = 0;
    $angleLast = 360;
	if(isset($_GET['angle'])){
        $angle = intval($_GET['angle']);
        $angleLast = $angle + 360;
    }
    $text = "";
	if(isset($_GET['text'])){
        $text = '<a-text font="monoid" value="'.$_GET['text'].'" width="5" position="-2.5 0.25 -2.0" rotation="10 10 0"></a-text>';
    }
	$bar = <<<EOT
<html>
<head></head>
<body>
<a-scene>
{$text}
<a-sky src="{$img}"><a-animation attribute="rotation" fill="forwards" easing="linear" dur="200000" from="0 {$angle} 0" to="0 {$angleLast} 0" repeat="indefinite"></a-animation></a-sky></a-scene><script src="https://aframe.io/releases/0.7.0/aframe.min.js"></script>;
</body>
</html>
EOT;
echo $bar;
}else{
    $bar = <<<EOT
<html>
<head></head>
<body>&nbsp;</body>
</html>
EOT;
    echo $bar;
}
?>