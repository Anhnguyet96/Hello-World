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
        function exchange_with($a, $b){
            $temp = $a;
            $a = array_reverse($b);
            $b = array_reverse($temp);
            print_r($a);
            print_r($b);
        }
        $my_array = ['a', 'b', 'c'];
        $other_array= [1, 2, 3];
        exchange_with($my_array, $other_array);
     
        
       
    ?>
</body>
</html>