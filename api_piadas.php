<?php 

$url = "https://official-joke-api.appspot.com/random_joke";

$response = file_get_contents($url);

$joke = json_decode($response, true);

if($response) {
    echo "Type: " . $joke['type'] . "<br>";
    echo "Setup: " . $joke['setup'] . "<br>";
    echo "Punchline: " . $joke['punchline'] . "<br>";
} else {
    echo "Não foi possivel exibir a piada!";
}
?>
