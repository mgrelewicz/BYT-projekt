<!DOCTYPE html>
<html lang="pl" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8" />
    <title>text tool</title>
    <meta name="keywords" content="najlepszy, best, text, tekst, narzędzie" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="author" content="Marcin Grelewicz" />
    <link href="style/style.css" rel="stylesheet" type="text/css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<br id="page">

    <?php
    session_start();
    setcookie("nazwa", "wartosc", time() + 60*60*24*1);
    ?>

    <div id="topunit">
        <br/><h1>TEXT TRANSFORMATION & ANALYSIS TOOL</h1>
    </div>

    <div id="rightunit">
        <br/><br/>
        <fieldset style="border: 1px solid grey; width: 280px">
        <i style="color: lightgray; text-shadow: 2px 2px black"><center><br/> Panel użytkownika </center></i><br/><br/><br/>
        <br/><center><b><a href='file_upload.php'> Załaduj plik z dysku </a></b><br/>
                <br/><b><a href='file_download.php'> Pobierz plik na dysk </a></b><br/><br/>
            <br/><b><a href='file_preview.php'> Przeglądaj cały plik  </a></b><br/><br/>
            <br/><b><input style="box-shadow: 0 0 0 transparent; width: 50px;" type="submit" name="reset" value="Resetuj filtry"/></b></center><br/><br/>
            <?php
            if(isset($_POST['reset'])){
                session_destroy();
                header('Location: index.php');
            }
            ?>
        <br/><br/><center><i><a  style="font-size: small" href='leave_message.php'> Masz uwagi / sugestie - zostaw wiadomość </a></i></center><br/>
        </fieldset>

    </div id="rightunit">

    <div id="leftunit">
        <br/>
        <fieldset style="border: 1px solid grey; width: 280px">
            <br/><i style="color: lightgray; text-shadow: 2px 2px black">Panel skryptów </i><br/><br/>
            <h3><b>Wybierz polecenie:</b>
            <br/>
            <form name="form1" action="" method="post">
                <h5><b>Kategoria_nazwa</b></h5>
                <select name="kategoria1:">
                    <option value="skrypt1">funkcjonalność1</option>
                    <option value="skrypt2">funkcjonalność2</option>
                    <option value="skrypt3">funkcjonalność3</option>
                    <option value="skrypt4">funkcjonalność4</option>
                    <option value="skrypt5">funkcjonalność5</option>
                </select>
                <input type="submit" name="kat1" value="Apply" />
            </form>
                <?php
                if (isset($_POST['kat1'])) {
                    if ($_POST['kategoria1'] == "skrypt1") {
                        echo "komunikat testowy: wybrano skrypt 1";
                        $script="skrypt1.sh";
                        $output1 = shell_exec($script);
                        $output = $output1;
                    }
                    else if ($_POST['kategoria1'] == "skrypt2") {
                        echo "komunikat testowy: wybrano skrypt 2";
                        $script="skrypt2.sh";
                        $output2 = shell_exec($script);
                        $output = $output2;
                    }
                    else if ($_POST['kategoria1'] == "skrypt3") {
                        echo "komunikat testowy: wybrano skrypt 3";
                        $script="skrypt3.sh";
                        $output3 = shell_exec($script);
                        $output = $output3;
                    }
                    else if ($_POST['kategoria1'] == "skrypt4") {
                        echo "komunikat testowy: wybrano skrypt 4";
                        $script="skrypt4.sh";
                        $output4 = shell_exec($script);
                        $output = $output4;
                    }
                    else if ($_POST['kategoria1'] == "skrypt5") {
                        echo "komunikat testowy: wybrano skrypt 5";
                        $script="skrypt5.sh";
                        $output5 = shell_exec($script);
                        $output = $output5;
                    }
                    $_SESSION['output'] = $output;
                }
                ?>
            <br/>
            <form name="form2" action="" method="post">
                <h5><b>Kategoria_nazwa</b></h5>
                <select name="kategoria2:">
                    <option value="skrypt6">funkcjonalność6</option>
                    <option value="skrypt7">funkcjonalność7</option>
                    <option value="skrypt8">funkcjonalność8</option>
                    <option value="skrypt9">funkcjonalność9</option>
                    <option value="skrypt10">funkcjonalność10</option>
                </select>
                <input type="submit" name="kat2" value="Apply" />
            </form>
                <?php
                if (isset($_POST['kat2'])) {
                    if ($_POST['kategoria2'] == "skrypt6") {
                        echo "komunikat testowy: wybrano skrypt 6";
                        $script="skrypt6.sh";
                        $output6 = shell_exec($script);
                        $output = $output6;
                    }
                    else if ($_POST['kategoria2'] == "skrypt7") {
                        echo "komunikat testowy: wybrano skrypt 7";
                        $script="skrypt7.sh";
                        $output7 = shell_exec($script);
                        $output = $output7;
                    }
                    else if ($_POST['kategoria2'] == "skrypt8") {
                        echo "komunikat testowy: wybrano skrypt 8";
                        $script="skrypt8.sh";
                        $output8 = shell_exec($script);
                        $output = $output8;
                    }
                    else if ($_POST['kategoria2'] == "skrypt9") {
                        echo "komunikat testowy: wybrano skrypt 9";
                        $script="skrypt9.sh";
                        $output9 = shell_exec($script);
                        $output = $output9;
                    }
                    else if ($_POST['kategoria2'] == "skrypt10") {
                        echo "komunikat testowy: wybrano skrypt 10";
                        $script="skrypt10.sh";
                        $output10 = shell_exec($script);
                        $output = $output10;
                    }
                    $_SESSION['output'] = $output;
                }
                ?>
            <br/>
            <form name="form3" action="" method="post">
                <h5><b>Kategoria_nazwa</b></h5>
                <select name="kategoria3:">
                    <option value="skrypt11">funkcjonalność11</option>
                    <option value="skrypt12">funkcjonalność12</option>
                    <option value="skrypt13">funkcjonalność13</option>
                    <option value="skrypt14">funkcjonalność14</option>
                    <option value="skrypt15">funkcjonalność15</option>
                </select>
                <input type="submit" name="kat3" value="Apply" />
            </form>
                <?php
                if (isset($_POST['kat3'])) {
                    if ($_POST['kategoria3'] == "skrypt11") {
                        echo "komunikat testowy: wybrano skrypt 11";
                        $script="skrypt11.sh";
                        $output11 = shell_exec($script);
                        $output = $output11;
                    }
                    else if ($_POST['kategoria3'] == "skrypt12") {
                        echo "komunikat testowy: wybrano skrypt 12";
                        $script="skrypt12.sh";
                        $output12 = shell_exec($script);
                        $output = $output12;
                    }
                    else if ($_POST['kategoria3'] == "skrypt13") {
                        echo "komunikat testowy: wybrano skrypt 13";
                        $script="skrypt13.sh";
                        $output13 = shell_exec($script);
                        $output = $output13;
                    }
                    else if ($_POST['kategoria3'] == "skrypt14") {
                        echo "komunikat testowy: wybrano skrypt 14";
                        $script="skrypt14.sh";
                        $output14 = shell_exec($script);
                        $output = $output14;
                    }
                    else if ($_POST['kategoria3'] == "skrypt15") {
                        echo "komunikat testowy: wybrano skrypt 15";
                        $script="skrypt15.sh";
                        $output15 = shell_exec($script);
                        $output = $output15;
                    }
                    $_SESSION['output'] = $output;
                }
                ?>
            <br/>
            <form name="form4" action="" method="post">
                <h5><b>Kategoria_nazwa</b></h5>
                <select name="kategoria4:">
                    <option value="skrypt16">funkcjonalność16</option>
                    <option value="skrypt17">funkcjonalność17</option>
                    <option value="skrypt18">funkcjonalność18</option>
                    <option value="skrypt19">funkcjonalność19</option>
                    <option value="skrypt20">funkcjonalność20</option>
                </select>
                <input type="submit" name="kat4" value="Apply" />
            </form>
                <?php
                if (isset($_POST['kat4'])) {
                    if ($_POST['kategoria4'] == "skrypt16") {
                        echo "komunikat testowy: wybrano skrypt 16";
                        $script="skrypt16.sh";
                        $output16 = shell_exec($script);
                        $output = $output16;
                    }
                    else if ($_POST['kategoria4'] == "skrypt17") {
                        echo "komunikat testowy: wybrano skrypt 17";
                        $script="skrypt17.sh";
                        $output17 = shell_exec($script);
                        $output = $output17;
                    }
                    else if ($_POST['kategoria4'] == "skrypt18") {
                        echo "komunikat testowy: wybrano skrypt 18";
                        $script="skrypt18.sh";
                        $output18 = shell_exec($script);
                        $output = $output18;
                    }
                    else if ($_POST['kategoria4'] == "skrypt19") {
                        echo "komunikat testowy: wybrano skrypt 19";
                        $script="skrypt19.sh";
                        $output19 = shell_exec($script);
                        $output = $output19;
                    }
                    else if ($_POST['kategoria4'] == "skrypt20") {
                        echo "komunikat testowy: wybrano skrypt 20";
                        $script="skrypt20.sh";
                        $output20 = shell_exec($script);
                        $output = $output20;
                    }
                    $output = $_SESSION['input'];   #tmp : do usuniecia po uzupełnieniu skryptów
                    $_SESSION['output'] = $output;
                    header('Location: index.php');
                }
                ?>
            <br/><br/><br/></h3>
        </fieldset>
    </div>

    <div id="centralunit">

        <br/><br/>
        <br/><b style="color: orangered; text-shadow: 1px 1px black">Podgląd tekstu bazowego:</b><br/>
            <?php
            $input = $_SESSION['input'];
            echo '<textarea>' . htmlspecialchars($input). '</textarea>';
            ?>
        <br/>
        <br/><b style="color: orangered; text-shadow: 1px 1px black">Podgląd działania skryptu:</b><br/>
            <textarea name="text-out">
        <?php
        $output = $_SESSION['output'];
        if (isset($_POST['kat1']) || isset($_POST['kat2']) || isset($_POST['kat3']) || isset($_POST['kat4'])) {
            echo $output;
        }
        ?>
        </textarea>
                <br/><br/><br/><br/><br/><br/>
    </div id="centralunit">

    <div id="bottomunit">
        <h5>Edyta Bartoś, Aleksandra Formela, Marcin Grelewicz * Informatyka zaoczna * rok 3<br/>
            Budowa i integracja systemów informatycznych * Projekt zaliczeniowy: Narzędzie optymalizacji tekstu</h5>
        <h4><b> &copy; PJATK * Wszelkie prawa zastrzeżone * </b></h4>
    </div>

</div id="page">
</body>
</html>