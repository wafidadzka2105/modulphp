<html>

<head>
    <title>Tipe data object</title>
</head>

<body>
    <h2>Tipe data object</h2>
    <?php
    class test
    {
        var $str = "Variabel Class";
        function set_vars($str)
        {
            $this->str = $str;
        }
    }
    $class = new test;
    echo $class->str;
    $class->set_vars("Variabel Object");
    echo ("<br>");
    echo $class->str;

    ?>
</body>

</html>