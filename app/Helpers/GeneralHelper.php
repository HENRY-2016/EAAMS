<?php
namespace App\Helpers;

use App\Models\EmployeeModel;

class GeneralHelper 
{
    public static function getEmpName ($id)
    {
        $data = EmployeeModel::where('id',$id)->get(['FName','LName']);
            $length = count ($data);
            if ($length == 0){return '';}
            else 
            {
                $FName =  $data[0]["FName"];
                $LName =  $data[0]["LName"];
                $name = $FName . " " . $LName;
                return $name;
            }
    }












}