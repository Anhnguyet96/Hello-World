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
        function mostPopularChar($s){
            $arr=[];
            $a = str_split($s);
            foreach($a as $val){
                $arr[$val]=0;
                
            }
            foreach($a as $val){
                $arr[$val]++;
            }
            $max=0;
            $c = '';
            foreach($arr as $key => $value){
              if ($value> $max) {
                    $max = $value;
                    $c = $key;
                } elseif ($value==$max) {
                    $c = "No most popular char";
                }
            }
            return $c;

        }
       // echo mostPopularChar("ababbaccccddddaaaaa");
    ?>
</body>
</html>