<?php 
function draw_kotak($x){
    $kotak = true;
    $result = "";
    
    for ($i=0; $i < $x; $i++) { 
        for ($j=0; $j < $x; $j++) { 
            if($kotak)
                $result .="*";
            else
                $result .=" ";
            $kotak = !$kotak;
        }
        $result .="<br>";
    }
    echo "<pre>";
    echo $result;
}
draw_kotak(7);
draw_kotak(5);
?>