<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>PHP 01 BASIC</title>
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/styles.css" rel="stylesheet" type="text/css"/>
        <script src="assets/js/jquery-3.3.1.min.js" type="text/javascript"></script>
        <script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="assets/js/main.js" type="text/javascript"></script>
    </head>
    <body>
        <div class="container">
            <h1>String und Array Functionen</h1>
            <?php
            $csv = "TXL|Berlin Tegel|Berlin;de";
            $airport = explode('|', $csv);
            $string = implode(',', $airport);
            
            $newCsv = str_replace('|', ':', $csv);
            $statereplace = str_replace('Berlin', 'Spandau', $newCsv);
            
           
                    $transDE = [':', 'Uhr', 'Bushaltestelle', 'Halle'];
                    $transEN = ['.', 'H', 'bus stop', 'hall'];
                    
                    $de = "12:00 Uhr Bushaltestelle Halle A";
                    //////////////////////////////////////////
                    $dearray = explode(' ', $de);
                    $firstElementExplode = explode(':', $dearray[0]);
                    if($firstElementExplode[0] > 12){
                        $firstElementExplode[0] -= 12; // $firstElementExplode[0] = $firstElementExplode[0]-12;
                        $dearray[1] = 'pm';
                    }elseif((int)$firstElementExplode[0] === 0 ){
                        $firstElementExplode[0] = 12; 
                        $dearray[1] = 'am';
                    }elseif((int)$firstElementExplode[0] === 12 ){ 
                        $dearray[1] = 'pm';
                    }else{
                        $dearray[1] = 'am';
                    };
                    $twoElementImplode = implode(':', $firstElementExplode);
                    $dearray[0] = $twoElementImplode;
                    $dearrayImplode = implode(' ', $dearray);
                    
                    //////////////////////////////////////////
                    $en = str_replace($transDE, $transEN, $dearrayImplode);
                    
                    //////////////////////////Array Push function
                    $countries = [];
                    array_push($countries, 'Deutschland');
                    array_push($countries, 'Italian', 'Frankreich');
                    $countries[] = 'Griechenland';
                    array_pop($countries);
                    sort($countries);
                    $prices = [2, 5, 3, 11, 8, 1];
                    sort($prices,SORT_STRING);
            ?>
            <hr>
        </div>
        <hr>
        <pre>
            <?php
            print_r($prices);
            var_dump($prices);
            
            ?>
        </pre>
        
    </body>
</html>
