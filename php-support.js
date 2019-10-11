function phpDo(function_name, pass_data=0, encode=0) {
    if (encode) {
        pass_data = encodeURI(pass_data);
    }
    $.post("http://localhost:1337/php-support.php",
    {
        function: function_name,
        passed_data: pass_data
    },
    function(data, status) {
        if (data == "func_dsnt_exist") {
            var error = "<b style='color: red'>ERROR:</b> <u>function</u> <strong><i>"+function_name+"</i></strong> was not found in app.php";
            console.log(error)
            document.getElementById('output').innerHTML = error;
        } else {
            console.log("REQUEST STATUS: "+status)
            var response_data = data;
            console.log(response_data);
            document.getElementById('output').innerHTML = response_data;
        }
    });
}