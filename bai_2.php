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
        function LetterChanges($str){
            $arr = str_split($str);
            $s = range("a","z");
            $l2u = array('a', 'e', 'i', 'o', 'u');
            foreach($arr as $key => $value){
              if (in_array($value,$s)) {
                $arr[$key] = $value == 'z' ? 'a' : ++$value; 
                if(in_array($arr[$key], $l2u)) {
                   $arr[$key] = strtoupper($arr[$key]); 
                }
              } else {
                $arr[$key] = $value; 
              }
            }
            return join("",$arr);
        }
        
    ?>
</body>
</html>