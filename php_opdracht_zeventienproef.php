<?php

/*
De zeventienproef
Bij de zeventienproef worden de afzonderlijke cijfers van een getal “gewogen” bij elkaar opgeteld. Dat wil
zeggen dat afhankelijk van de positie het cijfer met een afgesproken getal (gewicht) wordt vermenigvuldigd.
De som van de resultaten dient een veelvoud van zeventien te zijn.
De gewichten zijn de getallen 1, 2, 3, …. Het laatste cijfer van het getal wordt met 1 vermenigvuldigd, het
voorlaatste cijfer wordt met 2 vermenigvuldigd, het op twee na laatste cijfer wordt met drie vermenigvuldigd,
enzovoorts. Deze producten worden vervolgens bij elkaar opgeteld en daarna wordt de som gedeeld door
17. Het resultaat van deze deling moet een geheel getal groter dan nul zijn. In dat geval is het nummer
geldig. Deze laatste voorwaarde zorgt ervoor dat voorkomen wordt dat een nummer dat alleen uit nullen
bestaat als geldig wordt beschouwd.

Voorbeeld
Nummer 92651109849427955
9x17 + 2x16 + 6x15 + 5x14 + 1x13 + 1x12 + 0x11 + 9x10 + 8x9 + 4x8 + 9x7 + 4x6 + 2x5 + 7x4 + 9x3 + 5x2 +
5x1 = 731
De som 731 is deelbaar door 17: delen door 17 geeft 43 (dus een geheel getal). Het nummer is dus geldig.

Schrijf een eigen functie genaamd “checkNumber” waar je als parameter een nummer mee kunt geven zoals
het nummer uit het voorbeeld hierboven. De functie retourneert true indien het nummer geldig is en de
functie retourneert false indien het nummer ongeldig is. Schrijf de opdracht uit in PHP en / of JavaScript.
*/

$nr1 = '92651109849427955'; # true
$nr2 = '92651109849427954'; # false
$nr3 = '92651109849427953'; # false
printResult($nr1);
printResult($nr2);
printResult($nr3);

function printResult($nr) {
    echo "$nr = " . checkNumber($nr) . "<br>\n";
}

function checkNumber($nr) {
    $i = 1;
    $res = 0;

    foreach (array_reverse( str_split($nr) ) as $n) {
        $res += $i++ * $n;
    }
    echo "sum = $res<br>\n";

    return $res % 17 == 0;
}

?>
