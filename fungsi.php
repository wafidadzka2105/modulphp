<html>
    <head>
        <title>Fungsi Sederhana</title>
    </head>
    <body>
        <h2>Penggunaan Fungsi</h2>
        <?php
        function hitung($e,$b)
        {
            $hasil=$e+$b;
            return $hasil;
        }
        echo("4 + 3 = ".hitung(4,3));
        ?>
    </body>
</html>