<?php 
$text = $_GET['text'];
var_dump($_GET);
echo '<h1>Il testo inserito è <em>' . $text . '</em> </h1>';
?>

<?php 
echo '<br>';
$p2 = str_replace('ciao', '***', $text);

echo '<h2> Il testo censurato è '. $p2 .'</h2>';

?>