<?php
if (isset($_GET['date'])) {
    $date = $_GET['date'];
    $url = 'https://azbyka.ru/days/' . $date;

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $response = curl_exec($ch);
    curl_close($ch);

    header('Content-Type: text/html');
    echo $response;
} else {
    echo 'No date parameter provided';
}
?>
