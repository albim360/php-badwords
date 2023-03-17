<?php 
$text = $_GET['text'];
var_dump($_GET);
echo 'Il testo inserito è ' . $text;
?>

<?php 
echo '<br>';
$p2 = str_replace('ciao', '***', $text);

echo 'Il testo censurato è '. $p2;

?>