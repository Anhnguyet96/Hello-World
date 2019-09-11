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
        function numbersInString($s){
            $s= preg_replace('/[^0-9]/',' ', $s);
            $arr = explode(" ", $s);
            $max = "";
            foreach($arr as $val){
                if (strlen($val)> strlen($max)) {
                    $max = $val;
                }
            }
            return $max;
        }
        //echo numbersInString("gh12cdy695m1");
    ?>
</body>
</html>