<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
        function longestWord($sen){
            $sen = preg_replace("/[^A-Za-z0-9]/", ' ', $sen);
            $arr = explode(" ", $sen);
            $s = "";
            foreach ($arr as $val) 
            {
                if (strlen($val) > strlen($s)) {
                    $s = $val;
                }
        
            }
            return $s;
        }
    ?>
</body>
</html>