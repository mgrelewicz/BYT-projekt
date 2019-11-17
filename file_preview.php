<!DOCTYPE html>
<html lang="pl">
<head>
    <title>Preview</title>
    <link href="style/style_preview.css" rel="stylesheet" type="text/css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<br id="page">

<?php
session_start();


?>

<div id="topunit">
    <br/><h1>TEXT TRANSFORMATION & ANALYSIS TOOL</h1>
</div>

<div id="rightunit">
</div id="rightunit">

<div id="leftunit">
</div>

    <div id="centralunit">
        <center>
            <br/>
            <h2>Twój plik z wybranymi filtrami:</h2><br/><br/>
            <center>
            <textarea name="preview">
                    <?php
                    $output = $_SESSION['input'];  # do podmiany

                    echo $output;
                    ?>
            </textarea>
        </center>
            <br/><br/>
            <br/><a href='file_download.php'> Pobierz plik </a><br/>
            <br/><br/>
    <br/><a href='index.php'> Wróć na stronę główną </a><br/><br/>
    </div id="centralunit">

    <div id="bottomunit">
        <h5>Edyta Bartoś, Aleksandra Formela, Marcin Grelewicz * Informatyka zaoczna * rok 3<br/>
            Budowa i integracja systemów informatycznych * Projekt zaliczeniowy: Narzędzie optymalizacji tekstu</h5>
        <h4><b> &copy; PJATK * Wszelkie prawa zastrzeżone * </b></h4>
    </div>


</div id="page">
</body>
</html>