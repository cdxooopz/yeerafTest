<?php
    $array = [2,7,11,15];
    $value = 12;

    echo "Input: arrayExampleOne = [2,7,11,15], sum = " . $value;
    echo "\nOutput: " . indexOfArray($array, $value);
    $example = indexOfArray($array, $value);
    $splitIndex = explode(',',$example);
    if(count($splitIndex) == 2)
    {
        echo "\nExplanation: Because array[".$splitIndex[0]."] + array[".$splitIndex[1]."] = " . $value;
    }
    else 
    {
        echo "\nExplanation: The are no two numbers that add up to " . $value;
    }
    echo "\n\n--------------------\n\n";

    function indexOfArray($array, $result)
    {
        $index = '';
        $totalValue = count($array);

        foreach($array as $k => $val)
        {
            for($i = 1; $i < $totalValue; $i++)
            {
                $sum = $val + $array[$i];
                if($result == $sum)
                {
                    $index = $k . ',' . $i;
                }
            }
            if($index != '') {
                break;
            }
        }
        return $index;
    }
?>