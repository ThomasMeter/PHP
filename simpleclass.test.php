class Motor {
   var $merk;
   var $bouwjaar
    function geefInfo() {
        echo"Het merk: $merk en het bouwjaar: $bouwjaar";
    }

}

$motor = new motor():
$motor merk->'Ducati';
$motor bouwjaar->'2018'

$motor -> geefInfo();
