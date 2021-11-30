<?php

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

    if ($str[$i] === " ")
    {
        $word = strrev($word);
        $word .= $str[$i];
        $str1 .= $word;
        $word="";
    }
}
return $str1;
}


echo revertCharacters("Hel,lo my brother, World!");
?>