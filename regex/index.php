<?php


//$string = <<<CSS
//body { color: #888; }
//
//@media print { body { color: #333; } }
//
//code { color: blue; }
//CSS;
//
//echo $string.' : ';
//$pattern = '/{(?:[^{}]+|(?R))*}/';
//
//preg_match_all($pattern, $string, $groups);
//var_export($groups);
//
//echo '<hr />';


//// The \\2 is an example of backreferencing. This tells pcre that
//// it must match the second set of parentheses in the regular expression
//// itself, which would be the ([\w]+) in this case. The extra backslash is
//// required because the string is in double quotes.
//$html = "<b>bold text</b><a href=howdy.html>click me</a>";
//
//preg_match_all("/(<([\w]+)[^>]*>)(.*?)(<\/\\2>)/", $html, $matches, PREG_SET_ORDER);
//
//var_dump($matches);
//
//exit();

$string = "ab,c,dd=(some,text,cool=(aaa(b(c1)(c2)d)e)(test) more text)";

/*
 * Analyses the string multidimensionally by its opening and closing delimiters
 */
function recursiveSplit($string, $pattern, $layer)
{
    $resultI = 3;
    preg_match_all($pattern, $string, $matches);
    // iterate thru matches and continue recursive split
    if (count($matches) > 1) {
        for ($i = 0; $i < count($matches[$resultI]); $i++) {
            if (is_string($matches[$resultI][$i])) {
                if (strlen($matches[$resultI][$i]) > 0) {
                    echo "<pre>Layer " . $layer . ":   " . $matches[$resultI][$i] . "</pre><br />";
                    recursiveSplit($matches[$resultI][$i], $pattern, $layer + 1);
                }
            }
        }
    }
}

$regex = "/


(?:(\w+)=|)
(
\(
    (
        (
            [^()]*
            |
            (?R)
        )*
    )
\))
/six";

regexOutput($regex, $string);
recursiveSplit($string, $regex, 0);


exit();
//
//$pattern=',(?x)(?(DEFINE)(?<phone>(?:Tel|Fax):[ ]415-\d{3}-\d{4}))
//            ^start[ ](?&phone)[ ]////[ ](?&phone)
//            [ ]----[ ]((?&phone)),';
//$string = 'start Tel: 415-555-1212 //// Fax: 415-555-0000 ---- Fax: 415-555-9999';
//if(preg_match($pattern, $string, $match))
//    echo 'Properly formatted string.<br /> The third number is: <b>'.$match[2].'</b><br />';
//
//exit();


//http://stackoverflow.com/questions/2583472/regex-to-validate-json

$pcre_regex = '
  /
  (?(DEFINE)
     (?<number>   -? (?= [1-9]|0(?!\d) ) \d+ (\.\d+)? ([eE] [+-]? \d+)? )
     (?<boolean>   true | false | null )
     (?<string>    " ([^"\\\\]* | \\\\ ["\\\\bfnrt\/] | \\\\ u [0-9a-f]{4} )* " )
     (?<array>     \[  (  (?&json)  ( , (?&json)  )*  )?  \s* \] )
     (?<pair>      \s* (?&string) \s* : (?&json)  )
     (?<object>    \{  (  (?&pair)  ( , (?&pair)  )*  )?  \s* \} )
     (?<json>   \s* ( (?&number) | (?&boolean) | (?&string) | (?&array) | (?&object) ) \s* )
  )
  \A ((?&json)) \Z
  /six';

$json = '{"ok":"hello"}';
$json = <<<JSON

[
    "JSON Test Pattern pass1",
    {"object with 1 member":["array with 1 element"]},
    {},
    [],
    -42,
    true,
    false,
    null,
    {
        "integer": 1234567890,
        "real": -9876.543210,
        "e": 0.123456789e-12,
        "E": 1.234567890E+34,
        "":  23456789012E66,
        "zero": 0,
        "one": 1,
        "space": " ",
        "quote": "\"",
        "backslash": "\\\",
        "controls": "\b\f\n\r\t",
        "slash": "/ & \/",
        "alpha": "abcdefghijklmnopqrstuvwyz",
        "ALPHA": "ABCDEFGHIJKLMNOPQRSTUVWYZ",
        "digit": "0123456789",
        "0123456789": "digit",
        "special": "`1~!@#$%^&*()_+-={':[,]}|;.</>?",
        "hex": "\u0123\u4567\u89AB\uCDEF\uabcd\uef4A",
        "true": true,
        "false": false,
        "null": null,
        "array":[  ],
        "object":{  },
        "address": "50 St. James Street",
        "url": "http://www.JSON.org/",
        "comment": "// /* <!-- --",
        "# -- --> */": " ",
        " s p a c e d " :[1,2 , 3

,

4 , 5        ,          6           ,7        ],"compact":[1,2,3,4,5,6,7],
        "jsontext": "{\"object with 1 member\":[\"array with 1 element\"]}",
        "quotes": "&#34; \u0022 %22 0x22 034 &#x22;",
        "\/\\\\\"\uCAFE\uBABE\uAB98\uFCDE\ubcda\uef4A\b\f\n\r\t`1~!@#$%^&*()_+-=[]{}|;:',./<>?"
: "A key can be any string"
    },
    0.5 ,98.6
,
99.44
,

1066,
1e1,
0.1e1,
1e-1,
1e00,2e+00,2e-00
,"rosebud"]


JSON;


echo "<hr />";

//TODO : Comprendre pourquoi on ne récupère rien
regexOutput($pcre_regex, $json);

//\A 	=>  Matches at the start of the string the regex pattern is applied to. Matches a position rather than a character. Never matches after line breaks. Ex: \A. matches a in abc
//\Z 	=>  Matches at the end of the string the regex pattern is applied to. Matches a position rather than a character. Never matches before line breaks, except for the very last line break if the string ends with a line break. Ex: .\Z matches f in abc\ndef


exit();


function regexOutput($pattern, $string)
{
    preg_match_all($pattern, $string, $matches);
    echo '<pre>' . var_export($matches, true) . '</pre>';
}

$regex1 = '/(?=\d{10})\d{5}/'; //Positive lookahead : Je prend les 5 premiers(!!) chiffres si il y en a bien 10 en tout. Il n'y aura pas de groupe pour les 10 chiffres
$string1 = '0123456789';
regexOutput($regex1, $string1);

$regex1 = '/bubble(?=gum)/'; //Positive lookahead : Je prend bubble si c'est bubblegum
$string1 = 'bubblegum';
regexOutput($regex1, $string1);

$regex1 = '/bubble(?!gum)/'; //Negative lookahead : Je prend bubble si ce qui suit n'est pas gum
$string1 = 'bubbleabc1';
regexOutput($regex1, $string1);

$regex3 = '/(?!theatre)the\w+/'; //Negative lookahead: un mot qui commence par the (+ des lettres), mais pas theatre
$string3 = 'theme'; //theatre = pas trouvé
regexOutput($regex3, $string3);


$regex2 = '/(?<=\d)cat/'; //Positive lookbehind : Je prend cat, s'il y a bien un chiffre avant. Il n'y aura pas de group pour le chiffre trouvé devant cat
$string2 = '2cat';
regexOutput($regex2, $string2);


$regex4 = '/\w{3}(?<!mon)ster/'; //Negative lookbehind1 : 3 lettres, mais pas "mon", suivit de "ster"
$string4 = 'Munster'; //monster = pas trouvé
regexOutput($regex4, $string4);


$regex4 = '/(?<!gum)boot/'; //Negative lookbehind0 : "boot" not preceded by "gum". Matches "boot" in "carboot".
$string4 = 'carboot'; //gumboot pas trouvé
regexOutput($regex4, $string4);


$regex = '/(?:Bob)(\d)/'; //(?:  ==> Non-Capturing Groups: Bob est catché, mais pas capturé
$string = 'Bob1'; //Bob est pris en compte dans la regex, mais pas capturé. Le "1" oui. Peter1 ne fonctionnera poas
regexOutput($regex, $string);

//Attention, on peut quand meme capturer dans un groupe "non-capturing":

$regex = '/(?:Bob says: (\w+))/'; //(?:  ==> Non-Capturing Groups: "Bob says: " est catché, mais pas capturé
$string = 'Bob says: Bonjour'; //"Bob says: " est pris en compte dans la regex, mais pas capturé. "Bonjour" est capturé
regexOutput($regex, $string);


//CONDITIONNAL ?()

$regex = '/(?:(\()|-)\d{6}(?(1)\))/'; // (?:(\()|-) = Soit une parenthèse ouvrante, soit un -. \d{6} = 6 digits. (?(1)\) = Si la condition 1 est remplie alors, il faut qu'il y ai une parenthèse fermante
//Si la troisième partie avait été "(?(1)\)|-)". Il aurait fallu qu'il y ai une parenhèse fermante ou un tiret en fonction de ce qu'il y avait dans la condition 1.
$string = '(111111)';
regexOutput($regex, $string);
$string = '-222222';
regexOutput($regex, $string);


//Atomic group : (? >\d+) Autre explications à trouver, car c'est pas juste ca "An atomic group is an expression that becomes solid as a block once the regex leaves the closing parenthesis"
$regex = '/(?>\d+)/'; //catch les chiffres mais ne les captures pas
$string = 'j ai mangé 666   666 lapins ce soir avec 2 souris';
regexOutput($regex, $string);


//Racourcis, pour ne plus utiliser \1\2\3
$regex = '/(?P<my_age>\d\d)/'; //On aura word dans le tableau $matches + on peut utiliser \word à la place de \1
$string = "I am 25 years old. ";
regexOutput($regex, $string);

//Commentaires dans la regex
$regex = '/(?#doit contenir bubble)bubble/'; //On a des commentaires dans notre regex pour mieux aider le dev
$string = "puzzle bubble";
regexOutput($regex, $string);


//Changer "on the fly" les modifiers (lettres après le / final)
$regex = '/(?i)bob DIT BONJOUR/'; //Trouve "Bob dit bonjour",... Alors que j'ai pas mis de /i au bout :)
$regex = '/((?i)bob) dit bonjour/'; //Trouve Bob, et le capture... Alors que j'ai pas mis de /i au bout :) le ?i est juste pour bob, pas pour le "dit bonjour"
$regex = "/(?i:bob) dit bonjour/"; //Ca marche aussi avec les "non capturantes". Ex: (?i:bob). Ici ca ne capture pas Bob, mais ca le trouve
$string = "Bob dit bonjour à BIB";
regexOutput($regex, $string);

//Attention ca ne marche pas avec:
//Illegal: (?i=bob)
//Illegal: (?iP<name>bob)
//Illegal: (?i>bob)


//TODO : http://www.rexegg.com/regex-disambiguation.html A partir de Repeating Expressions: (?1), (?2) etc.


//http://www.rexegg.com/regex-disambiguation.html
//Voir : http://www.php.net/manual/en/regexp.reference.subpatterns.php
// UN peu plus : http://forums.phpfreaks.com/topic/255919-tut-two-little-known-but-way-cool-features-of-php-regex/
// voir comment : http://www.php.net/manual/en/regexp.reference.recursive.php
//Regex bible : http://regexkit.sourceforge.net/Documentation/pcre/pcrepattern.html#SEC14
//Blog : http://perldoc.perl.org/perlretut.html#Recursive-patterns

//exit();


$subjects = array('dontmatchme', 'kook', 'book', 'paper', 'kayak', 'okonoko', 'aaaaa', 'bbbb');
$pattern = '/(\w)(?:(?R)|\w?)\1/';
foreach ($subjects as $sub) {
    echo $sub . " " . str_repeat('-', 15 - strlen($sub)) . "-> ";
    if (preg_match($pattern, $sub, $match)) {
        echo $match[0] . "<br />";
    } else {
        echo 'sorry, no match<br />';
    }
}


exit();