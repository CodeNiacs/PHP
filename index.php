<?php
    function info()
    {
        ob_start();
        phpinfo( INFO_GENERAL );
        $info = ob_get_clean();

        $info = preg_replace("/^.*?\<body\>/is", "", $info);
        $info = preg_replace("/<\/body\>.*?$/is", "", $info);

        echo $info;
    }
?>
<!DOCTYPE html>
<html>
<head>
    <style>
    body
    {
        background-color: orange;
    }

    h1
    {
        color: white;
        text-align: center;
    }

    p
    {
        font-family: verdana;
        font-size: 20px;
    }
</style>
</head>
<body>
    <h1>Hack informatie over deze editor</h1>
    <pre><p><?php info(); ?></p></pre>
</body>
</html>
