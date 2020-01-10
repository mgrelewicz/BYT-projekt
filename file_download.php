<!DOCTYPE html>
<?php
session_start();
        if (isset($_COOKIE['scookie'])){
            echo session_id();
        }else {
            header('location: index.php');
        }
?>
<html lang="pl">
<head>
    <title>Download file</title>
    <link href="style/style_download.css" rel="stylesheet" type="text/css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<br id="page">

<div id="topunit">
    <br/><h1>NARZĘDZIE DO ANALIZY I TRANSFORMACJI TEKSTU</h1>
</div>

<div id="rightunit">
</div id="rightunit">

<div id="leftunit">
</div>

    <div id="centralunit">
        <center>
            <br/><br/><br/><br/><br/>
            <h2>Pobierz swój plik:</h2>
            <center>

    <br/><br/>
    <FORM action="" method="POST">
        <center>
            <INPUT style="font-size: x-large" name="dwnld" type="submit" value=" DOWNLOAD ">
            <?php
      //      $output = $_SESSION['output'];
      //      $output =  file_get_contents('output.txt');
            if (isset($_POST['dwnld'])) {

                $file = 'output.txt';
          //      header("Content-Description: File Transfer");
                header("Content-Type: application/octet-stream");
                header('Content-Disposition: attachment; filename='.basename($file));
                header('Expires: -1');
                header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
                header('Pragma: public');
                flush();
                while (ob_get_level()) {
                    ob_end_clean();
                }
                readfile($file);
                exit();


             //   $file = "output.txt";
             //   $fp = fopen($file, "a");
             //   flock($fp, 2);
             //   fwrite($fp, $output);
             //   flock($fp, 3);
             //   fclose($fp);

            }
            ?>
        </center>
    </FORM>

    <br/><br/><br/><br/><br/>
    <a href='index.php'> Wróć na stronę główną </a><br/><br/>
    <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
    </div id="centralunit">


    <div id="bottomunit">
        <h5>Edyta Bartoś, Aleksandra Formela, Marcin Grelewicz * Informatyka zaoczna * rok 3<br/>
            Budowa i integracja systemów informatycznych * Projekt zaliczeniowy: Narzędzie optymalizacji tekstu</h5>
        <h4><b> &copy; PJATK * Wszelkie prawa zastrzeżone * </b></h4>
    </div>


</div id="page">
</body>
</html>