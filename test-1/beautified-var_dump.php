<?php

function beautifiedVarDump($var) {
    // use <pre> tag to beautify the output of var_dump()
    echo '<pre>';
    var_dump($var);
    echo '</pre>';
}

