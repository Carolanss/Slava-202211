<?php 
$a  = 3;
$b = 7;
bcscale(0);
echo bcmod ($b,$a);

echo '<br/>';

$a = 7;
$b = 7.15;
$c =($a + $b );

echo  floor($c); echo '<br/>';

echo sqrt(25);echo '<br/>';
echo '<br/>';

$text = 'десять негритят пошли купаться в море';
$text = mb_substr($text, 22, 8); 
echo $text;
echo '<br/>';

$text = 'десять негритят пошли купаться в море';
$text = mb_substr($text, 16,1); 
echo $text;
echo '<br/>';

$text = 'десять негритят пошли купаться в море';
$text = mb_convert_case($text, MB_CASE_TITLE ); 
echo $text;
echo '<br/>';

$text = 'десять негритят пошли купаться в море';
 echo mb_strlen($text); echo '<br/>';
 echo '<br/>';

var_dump(true == '1'); echo '<br/>';
var_dump(false === '0'); echo '<br/>';
$str1 = 'the';
$str2 = 'three';
$str3 = 'name';
if  (mb_strlen($str1  'UTF-8') <3) {
    echo 'ya'; 
}
echo mb_strlen($str2);echo '<br/>'; 

$num1 = 125*3+7;
$num2 = 227 +28*2;
echo max($num1,$num2);