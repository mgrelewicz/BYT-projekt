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
    setcookie('scookie', '', time() + 360);
    ?>

    <div id="topunit">
        <br/><h1>NARZĘDZIE DO ANALIZY I TRANSFORMACJI TEKSTU</h1>
    </div>

    <div id="rightunit">
        <br/><br/>
        <fieldset style="border: 1px solid grey; width: 280px">
        <i style="color: lightgray; text-shadow: 2px 2px black"><center><br/> Panel użytkownika </center></i><br/><br/><br/>
        <br/><center><b><a href='file_upload.php'> Załaduj plik z dysku </a></b><br/>
                <br/><b><a href='file_download.php'> Pobierz plik na dysk </a></b><br/><br/>
            <br/><b><a href='file_preview.php'> Przeglądaj cały plik  </a></b><br/><br/>
            <br/><b><input style="box-shadow: 0 0 0 transparent; width: 120px; font-size: large;" type="submit" name="reset" value="Resetuj filtry"/></b></center><br/><br/>
            <?php
            if(isset($_POST['reset'])){
                session_destroy();
                setcookie('name', '', time() -360);
                header("Refresh:0");
            }
            ?>
        <br/><br/><center><i><a  style="font-size: small" href='leave_message.php'> Masz uwagi / sugestie? Zostaw wiadomość </a></i></center><br/>
        </fieldset>

    </div id="rightunit">

    <div id="leftunit">
        <br/>
        <fieldset style="border: 1px solid grey; width: 280px">
            <br/><i style="color: lightgray; text-shadow: 2px 2px black">Panel skryptów </i><br/><br/>
            <h3><b>Wybierz polecenie:</b>
            <br/>
            <form name="form1" action="" method="post">
                <h5><b>Transformacje</b></h5>
                <select name="kategoria1:">
                    <option value="">--wybierz opcje--</option>
                    <option value="skrypt1">Wszystkie litery wielkie</option>
                    <option value="skrypt2">Wszystkie litery małe</option>
                    <option value="skrypt4">Pierwsze litery wyrazów wielkie</option>
                    <option value="skrypt5">Pierwsze litery zdania wielkie</option>
                </select>
                <input type="submit" name="kat1" value="Apply" />
            </form>
                <?php
           //     $input = $_SESSION['input'];
                if (isset($_POST['kat1'])) {
                    if ($_POST['kategoria1:'] == "skrypt1") {
           //             $script="skrypt1.sh";
           //             $output1 = shell_exec($script);
           //             $output = $output1;
                        exec('python 1-uppercase.py');
                      //  $validation = "";
                      //  exec('python 1-uppercase.py output.txt', $validation);
                    }
                    else if ($_POST['kategoria1:'] == "skrypt2") {
                        exec('python 2-lowercase.py');
                    }
                    else if ($_POST['kategoria1:'] == "skrypt4") {
                        exec('python 4-1stwordletter2big.py');
                    }
                    else if ($_POST['kategoria1:'] == "skrypt5") {
                        exec('python 5-1stsentletter2big.py');
                    }
                   // $_SESSION['output'] = $validation;
           //         header("Refresh:0");
                }
                ?>
            <br/>
            <form name="form2" action="" method="post">
                <h5><b>Usuwanie znaków</b></h5>
                <select name="kategoria2:">
                    <option value="">--wybierz opcje--</option>
                    <option value="skrypt6">Usun tagi</option>
                    <option value="skrypt7">Usun interpunkcje</option>
                    <option value="skrypt3">Usun biale znaki</option>
                    <option value="skrypt8">Usun wszystkie spacje</option>
                    <option value="skrypt9">Usun tabulatory</option>
                    <option value="skrypt10">Usun cyfry</option>
                </select>
                <input type="submit" name="kat2" value="Apply" />
            </form>
                <?php
                if (isset($_POST['kat2'])) {
                    if ($_POST['kategoria2:'] == "skrypt6") {
                        exec('python 6-tagsremove.py');
                    }
                    else if ($_POST['kategoria2:'] == "skrypt7") {
                        exec('python 7-interpunktremove.py');
                    }
                    else if ($_POST['kategoria2:'] == "skrypt3") {
                        exec('python 3-whitespacesremove.py');
                    }
                    else if ($_POST['kategoria2:'] == "skrypt8") {
                        exec('python 13-allspacesremove.py');
                    }
                    else if ($_POST['kategoria2:'] == "skrypt9") {
                        exec('python 12-tabremove.py');
                    }
                    else if ($_POST['kategoria2:'] == "skrypt10") {
                        exec('python 10-digitsremove.py');
                    }
                }
                ?>
            <br/>
            <form name="form3" action="" method="post">
                <h5><b>Struktura</b></h5>
                <select name="kategoria3:">
                    <option value="">--wybierz opcje--</option>
                    <option value="skrypt11">Ustaw wyrazy w kolumnę</option>
                    <option value="skrypt12"></option>
                    <option value="skrypt13"></option>
                    <option value="skrypt14">Sklej znaki</option>
                    <option value="skrypt15">Dodaj spacje po kropkach</option>
                </select>
                <input type="submit" name="kat3" value="Apply" />
            </form>
                <?php
                if (isset($_POST['kat3'])) {
                    if ($_POST['kategoria3:'] == "skrypt11") {
                        exec('python 18-allwordsin1column.py');
                    }
                    else if ($_POST['kategoria3:'] == "skrypt12") {
                        exec('python ');
                    }
                    else if ($_POST['kategoria3:'] == "skrypt13") {
                        exec('python ');
                    }
                    else if ($_POST['kategoria3:'] == "skrypt14") {
                        exec('python 14-textglue.py');
                    }
                    else if ($_POST['kategoria3:'] == "skrypt15") {
                        exec('python 15-addspaceafterpoint.py');
                    }
                }
                ?>
            <br/>
            <form name="form4" action="" method="post">
                <h5><b>Kategoria_nazwa</b></h5>
                <select name="kategoria4:">
                    <option value="">--wybierz opcje--</option>
                    <option value="skrypt16">f--16</option>
                    <option value="skrypt17">f--17</option>
                    <option value="skrypt18">f--18</option>
                    <option value="skrypt19">f--19</option>
                    <option value="skrypt20">f--20</option>
                </select>
                <input type="submit" name="kat4" value="Apply" />
            </form>
                <?php
                if (isset($_POST['kat4'])) {
                    if ($_POST['kategoria4:'] == "skrypt16") {
                        exec('python 16-wordremove.py');
                    }
                    else if ($_POST['kategoria4:'] == "skrypt17") {
                        exec('python 17-wordadd.py');
                    }
                    else if ($_POST['kategoria4:'] == "skrypt18") {
                        exec('python 11-.py');
                    }
                    else if ($_POST['kategoria4:'] == "skrypt19") {
                        exec('python 19-.py');
                    }
                    else if ($_POST['kategoria4:'] == "skrypt20") {
                        exec('python 20-.py');
                    }
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
        <textarea><?php
   //   $output = $_SESSION['output'];
        if (isset($_POST['kat1']) || isset($_POST['kat2']) || isset($_POST['kat3']) || isset($_POST['kat4'])) {
            $output = file_get_contents('output.txt');
            echo htmlspecialchars($output);

      //      $out = $_SESSION['output'];
      //      echo htmlspecialchars($out);
        }
        ?></textarea>
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