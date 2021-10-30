<?php
include('style.css');
    function hesapla() {
        echo $_POST["adSoyad"];
        echo "<br>";
        echo $_POST["ogrNo"];

        $vize1 = ($_POST["vize1"]/ 100) * 40;
        echo "<br>Vize 1: $vize1";

        $vize2 = ($_POST["vize2"]/100)*40;
        echo "<br>Vize 2: $vize2";

        $final = ($_POST["final"]/100)* 60;
        echo "<br>Final: $final";
        
        $ort = $vize1+$final;
        

        echo "<br>Ortalama: $ort";

        if($_POST["vize1"] < 40 && $_POST["vize2"] <40){
            echo "<br>FF KALDI";
        }
        else if ($_POST["vize1"]<40){
            echo "<br>FF KALDI";
        }
        else if($_POST["vize2"]<40){
        echo "<br>FF KALDI";
        }
        else if($_POST["final"]<60){
            echo $_POST["sonucTxt"];
        }
    }
    hesapla();
?>
