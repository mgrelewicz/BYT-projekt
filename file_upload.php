<!DOCTYPE html>
<html lang="pl">
<head>
    <title> Load File </title>
    <link href="style/style_upload.css" rel="stylesheet" type="text/css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<br id="page">

    <?php
    session_start();
    ?>

<div id="topunit">
    <h1>TEXT TRANSFORMATION & ANALYSIS TOOL</h1>
</div>

<div id="rightunit">
</div id="rightunit">

<div id="leftunit">
</div>

    <div id="centralunit">
        <center>
            <br/>
            <h3>Load text file:</h3>

<form action="" method="POST" ENCTYPE="multipart/form-data">
<input type="file" name="plik"/><br/><br/>
<input type="submit" value="Załaduj plik"/><br/><br/>
</form>
<textarea>
<?php
$max_rozmiar = 50000;
if (is_uploaded_file($_FILES['plik']['tmp_name'])) {
    if ($_FILES['plik']['size'] > $max_rozmiar) {
        echo "<br/><br/><br/>";
        echo 'Błąd! Plik jest za duży!';
    } else {
        echo "<br/><br/><br/>";
        echo 'Odebrano plik. o nazwie: '.$_FILES['plik']['name'];
        echo '<br/><br/>';
        if (isset($_FILES['plik']['type'])) {
                $input = file_get_contents($_FILES['plik']['name']);
                 $_SESSION['input'] = $input;
                 sleep(2);
                 header('Location: index.php');
            }
        }
    }
?>
 </textarea>
  <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
  <a href='index.php'> Wróć na stronę główną </a>
  </center>

    </div id="centralunit">

    <div id="bottomunit">
        <h5>Edyta Bartoś, Aleksandra Formela, Marcin Grelewicz * Informatyka zaoczna * rok 3<br/>
            Budowa i integracja systemów informatycznych * Projekt zaliczeniowy: Narzędzie optymalizacji tekstu<br/>
        <b> &copy; PJATK * Wszelkie prawa zastrzeżone * </b></h5>
    </div>

</div id="page">
</body>
</html>