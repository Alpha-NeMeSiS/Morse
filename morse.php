<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width; initial-scale=1.0">
    <title>code morse</title>
    <a href="https://alpha-nemesis.github.io/morse/"></a>
</head>

<body>
    <form method="POST">
        <fieldset>
            <legend></legend>
            <label>phrase to morse</label>
            <textarea type="text" name="texte"></textarea> 
            <label>morse to phrase</label>
            <textarea type="text" name="morse"></textarea>
            <br /><br />
            <h1>slt code<h1/>
            <p>slt code</p>
            <input type="submit" value="codage">
            <input type="submit" value="décodage">
        </fieldset>
    </form>
    <br />
</body>

</html>
<?php
define('NB', 37);
class tmorse
{
    public $texte;
    public $symbole;
}
function creercollection()
{
    $i = 0;
    $caractère[$i] = new tmorse;
    $caractère[$i]->texte = 'A';
    $caractère[$i]->symbole = '.-';
    $i++;
    $caractère[$i] = new tmorse;
    $caractère[$i]->texte = 'B';
    $caractère[$i]->symbole = '-...';
    $i++;
    $caractère[$i] = new tmorse;
    $caractère[$i]->texte = 'C';
    $caractère[$i]->symbole = '-.-.';
    $i++;
    $caractère[$i] = new tmorse;
    $caractère[$i]->texte = 'D';
    $caractère[$i]->symbole = '-..';
    $i++;
    $caractère[$i] = new tmorse;
    $caractère[$i]->texte = 'E';
    $caractère[$i]->symbole = '.';
    $i++;
    $caractère[$i] = new tmorse;
    $caractère[$i]->texte = 'F';
    $caractère[$i]->symbole = '..-.';
    $i++;
    $caractère[$i] = new tmorse;
    $caractère[$i]->texte = 'G';
    $caractère[$i]->symbole = '--.';
    $i++;
    $caractère[$i] = new tmorse;
    $caractère[$i]->texte = 'H';
    $caractère[$i]->symbole = '....';
    $i++;
    $caractère[$i] = new tmorse;
    $caractère[$i]->texte = 'I';
    $caractère[$i]->symbole = '..';
    $i++;
    $caractère[$i] = new tmorse;
    $caractère[$i]->texte = 'J';
    $caractère[$i]->symbole = '.---';
    $i++;
    $caractère[$i] = new tmorse;
    $caractère[$i]->texte = 'K';
    $caractère[$i]->symbole = '-.-';
    $i++;
    $caractère[$i] = new tmorse;
    $caractère[$i]->texte = 'L';
    $caractère[$i]->symbole = '.-..';
    $i++;
    $caractère[$i] = new tmorse;
    $caractère[$i]->texte = 'M';
    $caractère[$i]->symbole = '--';
    $i++;
    $caractère[$i] = new tmorse;
    $caractère[$i]->texte = 'N';
    $caractère[$i]->symbole = '-.';
    $i++;
    $caractère[$i] = new tmorse;
    $caractère[$i]->texte = 'O';
    $caractère[$i]->symbole = '---';
    $i++;
    $caractère[$i] = new tmorse;
    $caractère[$i]->texte = 'P';
    $caractère[$i]->symbole = '.--.';
    $i++;
    $caractère[$i] = new tmorse;
    $caractère[$i]->texte = 'Q';
    $caractère[$i]->symbole = '--.-';
    $i++;
    $caractère[$i] = new tmorse;
    $caractère[$i]->texte = 'R';
    $caractère[$i]->symbole = '.-.';
    $i++;
    $caractère[$i] = new tmorse;
    $caractère[$i]->texte = 'S';
    $caractère[$i]->symbole = '...';
    $i++;
    $caractère[$i] = new tmorse;
    $caractère[$i]->texte = 'T';
    $caractère[$i]->symbole = '-';
    $i++;
    $caractère[$i] = new tmorse;
    $caractère[$i]->texte = 'U';
    $caractère[$i]->symbole = '..-';
    $i++;
    $caractère[$i] = new tmorse;
    $caractère[$i]->texte = 'V';
    $caractère[$i]->symbole = '...-';
    $i++;
    $caractère[$i] = new tmorse;
    $caractère[$i]->texte = 'W';
    $caractère[$i]->symbole = '.--';
    $i++;
    $caractère[$i] = new tmorse;
    $caractère[$i]->texte = 'X';
    $caractère[$i]->symbole = '-..-';
    $i++;
    $caractère[$i] = new tmorse;
    $caractère[$i]->texte = 'Y';
    $caractère[$i]->symbole = '-.--';
    $i++;
    $caractère[$i] = new tmorse;
    $caractère[$i]->texte = 'Z';
    $caractère[$i]->symbole = '--..';
    $i++;
    $caractère[$i] = new tmorse;
    $caractère[$i]->texte = '1';
    $caractère[$i]->symbole = '.----';
    $i++;
    $caractère[$i] = new tmorse;
    $caractère[$i]->texte = '2';
    $caractère[$i]->symbole = '..---';
    $i++;
    $caractère[$i] = new tmorse;
    $caractère[$i]->texte = '3';
    $caractère[$i]->symbole = '...--';
    $i++;
    $caractère[$i] = new tmorse;
    $caractère[$i]->texte = '4';
    $caractère[$i]->symbole = '....-';
    $i++;
    $caractère[$i] = new tmorse;
    $caractère[$i]->texte = '5';
    $caractère[$i]->symbole = '.....';
    $i++;
    $caractère[$i] = new tmorse;
    $caractère[$i]->texte = '6';
    $caractère[$i]->symbole = '-....';
    $i++;
    $caractère[$i] = new tmorse;
    $caractère[$i]->texte = '7';
    $caractère[$i]->symbole = '--...';
    $i++;
    $caractère[$i] = new tmorse;
    $caractère[$i]->texte = '8';
    $caractère[$i]->symbole = '---..';
    $i++;
    $caractère[$i] = new tmorse;
    $caractère[$i]->texte = '9';
    $caractère[$i]->symbole = '----.';
    $i++;
    $caractère[$i] = new tmorse;
    $caractère[$i]->texte = '0';
    $caractère[$i]->symbole = '-----';
    $i++;
    $caractère[$i] = new tmorse;
    $caractère[$i]->texte = '.';
    $caractère[$i]->symbole = '.-.-.-';
    $i++;
    return $caractère;
}
function codage($caractère, $cart)
{
    $trouve = false;
    $i = 0;
    $itrouver = 0;
    while ($i < NB && $trouve == false) {
        if (strtoupper($cart) == strtoupper($caractère[$i]->texte)) {
            $trouve = true;
            $itrouver =  $i;
        } else {
            $i++;
        }
    }


    $wsymbole = ($trouve == true) ? $caractère[$itrouver]->symbole : '?';
    return $wsymbole;
}


function décodage($caractère, $cart)
{
    $trouve = false;
    $i = 0;
    $itrouver = 0;
    while ($i < NB && $trouve == false) {
        if (strtoupper($cart) == strtoupper($caractère[$i]->symbole)) {
            $trouve = true;
            $itrouver =  $i;
        } else {
            $i++;
        }
    }
    $wtexte = ($trouve == true) ? $caractère[$itrouver]->texte : '?';
    return $wtexte;
}


if (isset($_POST['texte']) && !empty($_POST['texte'])) {
    $caractère = creercollection();
    $texte = $_POST['texte'];
    $wsymbole = '';
    for ($i = 0; $i < strlen($texte); $i++) {
        $wsymbole = $wsymbole . ' ' . codage($caractère, $texte[$i]);
    }
    echo $wsymbole;
} else if (isset($_POST['morse']) && !empty($_POST['morse'])) {
    $caractère = creercollection();
    $morse = $_POST['morse'];
    $tabmorse = explode(' ', $morse);
    $wsymbole = '';
    for ($i = 0; $i < count($tabmorse); $i++) {
        $wsymbole = $wsymbole . décodage($caractère, $tabmorse[$i]);
    }
    echo $wsymbole;
}
?>
