<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $arrMatrix = $_REQUEST["item"];

    function findMax($dataArr){
        $length = count($dataArr);
        $max = $dataArr[0];
        for ($i = 1; $i < $length; $i++){
            if ($dataArr[$i]> $max){
                $max = $dataArr[$i];
            }
        }
        return $max;
    }

    echo "Maximum is: ".findMax($arrMatrix);

}
?>