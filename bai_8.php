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
    
        function commas($num){
            $s=(string)$num;
            $str = 0;
            $a = explode('.', $s);
            if(strpos($s,'.'))  $str= strlen($a[1]);   
            if(is_double($num))  return number_format($num, $str, '.', ',')."<br>";
            if(is_int($num)) return number_format($num)."<br>";
            
        }

       // echo commas(1000000000.23);
        // echo commas(-1000000000.23);
        // echo commas(1);
        // echo commas(1000);
        // echo commas(100.2346);
        // echo commas(1000000000.23);
        // echo commas(-1);
        // echo commas(-1000000.123);


    ?>
</body>
</html>