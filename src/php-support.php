<?php

require '../app/app.php';

if (isset($_POST['function'])) {
    $functionToExecute = $_POST['function'];
    $appFunctions = new AppFunctions();

    if (method_exists($appFunctions, $functionToExecute)) {

        isset($_POST['passed_data']) ? $passed_data = $_POST['passed_data'] : $passed_data = NULL;

        if (isset($_POST['encode_output'])) {
            if ($_POST['encode_output'] == 'true') {
                $func_response = call_user_func(array($appFunctions, $functionToExecute), $passed_data);
                die(htmlspecialchars($func_response, ENT_QUOTES, 'UTF-8'));
            } else {
                $func_response = call_user_func(array($appFunctions, $functionToExecute), $passed_data);
                die($func_response);
            }
        }
    } else {
        die("func_dsnt_exist");
    }
}

?>