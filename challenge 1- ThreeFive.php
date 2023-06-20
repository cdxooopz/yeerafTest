<?php
for($i = 1; $i <= 100; $i++) 
{
    if($i%5 == 0 && $i%3 == 0)
    {
        echo 'ThreeFive';
    }
    else if($i%3 == 0)
    {
        echo 'Three';
    }
    else if($i%5 == 0)
    {
        echo 'Five';
    }
    else
    {
        echo $i;
    }
    echo "\n";

}
?>