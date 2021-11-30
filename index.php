<?php

// функция, которая меняет порядок букв
function revertCharacters($str)
{
    $str1 = "";
    $word="";
    for ($i=0; $i<strlen($str); $i++)
    {

        if ($str[$i] !== "!" AND $str[$i] !== "," AND $str[$i] !== "." AND $str[$i] !== "?" AND $str[$i] !== " ")
        {
            $word = $word . $str[$i];
        }

        if ($str[$i] === "!" OR $str[$i] === "," OR $str[$i] === "." OR $str[$i] === "?" AND $str[$i] !== " " )
        {
            $wordrev = strrev($word);
            for ($j=0; $j<strlen($word); $j++)
            {
                if (ctype_upper($word[$j]))
                    $wordrev[$j] = strtoupper($wordrev[$j]);

                if (ctype_lower($word[$j]))
                    $wordrev[$j] = strtolower($wordrev[$j]);
        }

        $wordrev .=  $str[$i];
        $str1 .=  $wordrev;
        $word ="";
    }

    if ($str[$i] === " " OR ($i===strlen($str)-1))
    {
        $wordrev = strrev($word);
        for ($j=0; $j<strlen($word); $j++)
        {
            if (ctype_upper($word[$j]))
                $wordrev[$j] = strtoupper($wordrev[$j]);

            if (ctype_lower($word[$j]))
                $wordrev[$j] = strtolower($wordrev[$j]);
        }
        if ($str[$i] === " ") $wordrev .= $str[$i];
        $str1 .= $wordrev;
        $word="";
    }
}
return $str1;
}



// функция umit-теста
function unittest($arraystr, $arraystr1){

    $retrn = "<br/>";
    for ($n=0; $n<count($arraystr); $n++) {
        $arraystr11[$n] = revertCharacters($arraystr[$n]);
        echo $arraystr[$n] . "<br/>";
        echo $arraystr11[$n] . "<br/>";
        if  ($arraystr11[$n] === $arraystr1[$n]) $retrn .=  $n . "OK<br/>"; else $retrn = $n . "err<br/>";
    }
return $retrn;
}

// посылаемые строки для проверки и строки которые должны получить
$strr1= array ("Hello, World",
    "Hi, people! World is so beautiful!@#",
    "123");
$strr2 = array("Olleh, Dlrow",
    "Ih, elpoep! Dlrow si os lufituaeb!#@",
    "321"

);

echo unittest($strr1 , $strr2);

?>