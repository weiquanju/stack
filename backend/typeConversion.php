<?php


function checkValue($value)
{
    $rules = [
        'int'=>'/^\d+&/',
        'float'=>'/^\d+\.\d+$/',
        'boolean'=>'/^(true|false)$/',
        'null'=>'/^null$/i',
        'string'=>'/[\s\S]+/ms',

    ];
    foreach ($rules as $type => $rule){
        preg_match($rule,$value,$match);

        if(!empty($match)){
            $value = transType($value,$type);
            break;
        }
    }
    return $value;
}

function transType($value,$type)
{
    $value = trim($value);
    switch ($type){
        case 'string':
            {
                $value = (string) $value;
                break;
            }
        case 'int':
            {
                $value = (int) $value;
                break;
            }
        case 'float':
            {
                $value = (float) $value;
                break;
            }
        case 'boolean':
            {
                $value = $value==='true' ? true : ($value==='false' ? false :  (empty($value) ? false :true)  );
                break;
            }
        case 'null':
            {
                $value = null;
                break;
            }
    }
    return $value;
}
//$value = checkValue($_GET['s']);
//
//var_dump($value);