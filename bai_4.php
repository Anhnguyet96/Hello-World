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
        function backSpacesInString($s){
            if(strlen($s)==0) return "";
            else {
                $s = " ".$s;
                $pos = strpos($s,'#');
                if($pos>0){
                    $s = substr($s, 0, $pos-1).substr($s, $pos+1);
                    $s = backSpacesInString($s);
                }  
                return str_replace(" ", "", $s);
            }
            
        }
    ?>
</body>
</html>