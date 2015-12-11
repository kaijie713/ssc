<?php
class CamelTool{
     
    //驼峰命名法转下划线风格
    public static function toUnderScore($str){
         
        $array = array();
        for($i=0;$i<strlen($str);$i++){
            if($str[$i] == strtolower($str[$i])){
                $array[] = $str[$i];
            }else{
                if($i>0){
                    $array[] = '_';
                }
                $array[] = strtolower($str[$i]);
            }
        }
         
        $result = implode('',$array);
        return $result;
    }
     
    //下划线风格转驼峰命名法  
    public static function toCamelCase($str){
         
        $array = explode('_', $str);
        $result = '';
        foreach($array as $value){
            $result.= ucfirst($value);
        }
         
        return $result;
    }
     
}


$str = 'user_point_log';
$result = CamelTool::toCamelCase($str);
//输出 UserPointLog
echo $result;
 
echo '<br/>';
 
$str = 'UserPointLog';
$result = CamelTool::toUnderScore($str);
//输出 user_point_log
echo $result;
?>