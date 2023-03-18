<?php 
$text = $_GET['text'];
var_dump($_GET);
echo '<h1> Il testo inserito è <em>' . $text . '</em> </h1>';
?>

<?php 
echo '<br>';
$text = strtolower($text);
$p2 = str_replace('ciao', '***', $text);
$p2 = str_replace('cane', '***', $p2);
$p2 = str_replace('gatto', '***', $p2);
$p2 = str_replace('pippo', '***', $p2);
$p2 = str_replace('pluto', '***', $p2);
$p2 = str_replace('paperino', '***', $p2);
$p2 = str_replace('topolino', '***', $p2);
$p2 = str_replace('minnie', '***', $p2);
$p2 = str_replace('paperina', '***', $p2);
$p2 = str_replace('paperoga', '***', $p2);
$p2 = str_replace('paperone', '***', $p2);
$p2 = str_replace('paperina', '***', $p2);
$p2 = str_replace('giulia', '***', $p2);

echo trim( '<h2> Il testo censurato è '. $p2 .'</h2>');

?>