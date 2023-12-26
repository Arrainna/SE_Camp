<html>
<head>
        <title><b>Workshop #html-form</b></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="styhw4.css">
    </head>
       <body>
        <h1><?php echo "Hello World<br><br>";?></h1>
        <?php
        $value = " TAO ";
            pre($value);
        ?>
        <?php
        function pre($value){
            echo "<pre>";
            print_r($value);
            echo "</pre>";
        }
        ?>
        </body>
</html>