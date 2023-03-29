<?php
class Ab{
    //adattagok
    private $host="localhost";
    private $felhasznaloNev="root";
    private $jelszo="";
    private $abNev="magyar_kártya";
    private $kapcsolat;

    //konstruktor
    function __construct()
    {
        $this->kapcsolat =new mysqli(
            $this->host,
            $this->felhasznaloNev,
            $this->jelszo,
            $this->abNev);
        if ($this->kapcsolat->connect_error){
            $szoveg="<p>Sikertelen
            kapcsolodás!</p>";
        }
        else{ $szoveg=
            "<p>Sikeres kapcsolódás!</p>";
        }
        echo $szoveg;
        $this->kapcsolat->query("SET NAMES UTF8");
        $this->kapcsolat->query("set character set UTF8");
    }
    function adatLeker($oszlop1,$oszlop2,$tabla){
        $sql="SELECT $oszlop1, $oszlop2 FROM $tabla";
        $phpTomb= $this->kapcsolat->query($sql);
        echo "<main>";
        echo "<h1>Adatbazis összekapcsolasa</h1>";
        echo "<table class='tabla'>";
        echo "<tr class='elso'  >";
        echo "<td id='kiemeles'>név</td>";
        echo "<td id='kiemeles'>kép</td>";
        echo "</tr>";
        while ($sor = $phpTomb->fetch_assoc())
        {
            echo "<tr>";
            echo "<td id='kiemeles'><p>$sor[$oszlop1]</p></td>";
            echo"<td><img src='forras/$sor[$oszlop2]' alt='kartya kepe'></td>";
            echo "</tr>";
        }
        "</table>";
        echo "</main>";
    }

    function kapcsolatBezar(){
        $this->kapcsolat->close();
    }   
    //metodusók

}
?>