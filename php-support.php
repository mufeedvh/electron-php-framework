<?php

require 'app.php';

if (isset($_POST['function'])) {
    $functionToExecute = $_POST['function'];

    if (isset($_POST['passed_data'])) {
        $passed_data = $_POST['passed_data'];
    } else {
        $passed_data = NULL;
    }

    $appFunctions = new AppFunctions();

    if (method_exists($appFunctions, $functionToExecute)) {
        echo call_user_func(array($appFunctions, $functionToExecute), $passed_data);
    } else {
        echo "func_dsnt_exist";
    }

}

?>