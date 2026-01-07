<!DOCTYPE html>
<html>
    <head>
        <title>
            LATIHAN 8 PEMOGRAMAN WEB
        </title>
    </head>
    <body>
        <?php
            #cara pertama mendeklarasikan array 1 dimensi 
            print ("CARA PERTAMA MENDEKLARASIKAN ARRAY 1 DIMENSI: <br/>");
            $kota[0] = "Yogyakarta";
            $kota[1] = "Jakarta";
            $kota[2] = "Malang";
            print ("Kota Pilihanmu : $kota[2]");

            echo "<br/><br/><br/>";

            #cara kuda mendeklarasikan array 2 dimensi 
            print ("CARA KEDUA MENDEKLARASIKAN ARRAY 2 DIMENSI: <br/>");
            $kota2 = array(0=>"jember", 1=>"bondowoso", 2=>"surabaya");
            print ("Kota Pilihanmu : $kota2[0]");

            echo "<br/><br/><br/>";
            
            #cara ketiga mendelarasikan array dengan nilai index berupa teks, bukan angka
            print ("CARA KETIGA MENDEKLARASIKAN ARRAY 1 DIMENSI: <br/>");
            $inisialkota = array("JBR"=>"jember", "SDA"=>"sidoarjo", "SBY"=>"surabaya");
            echo "inisial JBR adalah kota: ".$inisialkota["JBR"]."";
        ?>
    </body>
</html>