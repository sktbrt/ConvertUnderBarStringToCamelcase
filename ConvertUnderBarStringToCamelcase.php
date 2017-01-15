<?php

$in = array(
"a",
"aaa",
"a_aaa",
"a_aa_aaa",
"ab_cde",
"ABCD",
"AbCdEfG",
"Abc_Defg",
"a_a_a_A_B_bbb_Bbb",
"_aaa"
);
$out = array();
foreach($in as $name){
    if(empty($name)) continue;
    $strLower = strtolower($name);
    $spName = str_split($strLower);
    while(($shBar = array_search("_", $spName)) !== false){
        if(empty($spName[$shBar + 1])) break;
        $spName[$shBar + 1] = strtoupper($spName[$shBar + 1]);
        $spName[$shBar] = "";
        $strLower = implode($spName);
    }
    $out[] = ucfirst($strLower);
}

foreach($out as $name){
    echo $name ."<br>";
}