<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        function checkEro($word) {
            $pos = strpos($word, 'ero');
            return ($pos && ($pos === strlen($word) - 3));
        }

        $inputWord = "panadero";

        if (checkEro($inputWord)) {
            echo "<h1>La palabra $inputWord contiene 'ero' al final</h1>";
        } else {
            echo "<h1>La palabra $inputWord no contiene 'ero' al final</h1>";
        }
        ?>
    </body>
</html>
