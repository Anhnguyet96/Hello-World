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
        function vowelCount($s){
            $s = strtolower($s);
            $let= array('a' => 0, 'e' => 0, 'i' => 0, 'o' => 0, 'u' => 0);
            $arr = str_split($s);
            foreach ($arr as $val) {
                switch ($val) {
                    case 'a': 
                        $let['a']++;
                        break;
                    case 'e': 
                        $let['e']++;
                        break;
                    case 'i': 
                        $let['i']++;
                        break;
                    case 'o': 
                        $let['o']++;
                        break;
                    case 'u': 
                        $let['u']++;
                        break;
                    default : break;            
                }
            }
            return $let;      
        }
      // print_r(vowelCount("hello everyone!"));

    ?>
</body>
</html>