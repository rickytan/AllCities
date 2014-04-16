<?php
    $baseUrl = "http://d.360buy.com/area/get?fid=";
    
    function getSubArea($areaId) {
        global $baseUrl;

        $url = $baseUrl.$areaId;
        echo "Get ".$url."\n";
        $value = file_get_contents($url);
        $value = strstr($value, "(");
        $value = substr($value, 1, strlen($value) - 2);
        $result = json_decode($value, true);
        var_dump($result);
        $rtnval = array();
        if (is_array($result)) {
            foreach ($result as $area) {
                $area["pid"] = $areaId;
                $rtnval[] = $area;
            }
        }
        return $rtnval;
    }
    
    $allAreas = array(array("name"=>"世界", "id"=>0));
    $count = 0;
    while ($count < count($allAreas)) {
        echo "Fetching sub-area of ".$allAreas[$count]['name']."\n";
        $r = getSubArea($allAreas[$count]['id']);
        if (count($r) > 0) {
            $allAreas = array_merge($allAreas, $r);
        }
        
        ++$count;
    }
    file_put_contents("cities.json", json_encode($allAreas));
?>