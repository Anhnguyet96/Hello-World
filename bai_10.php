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
        function reverseVowels($s){
            $arr= str_split($s);
            $n = sizeof($arr);
            $vow = ['a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U'];
            $i=0;
            $j=$n-1;
            while($i<$n && $j>0 && $i<$j){
                while (!in_array($arr[$i], $vow) && $i<$j){
                    $i++;
                }
                $prev = $i;
                echo $prev."<br>";
                while (!in_array($arr[$j], $vow) && $j> $i){
    
                    $j--;
                }
                $pos = $j;
                echo $pos."<br>";
                $temp = $arr[$prev];
                $arr[$prev] = $arr[$pos];
                $arr[$pos] = $temp;
                $i++; 
                $j--;
            }
            echo implode("", $arr)."<br>";
        }
        reverseVowels("Hello!");
        reverseVowels("Tomatoes");
        reverseVowels("Reverse Vowels In A String");
    ?>
</body>
</html>