<?php

namespace App\Trait;

trait GeneralTrait
{
    public function returnData($data = null, $msg = null, $status = null)
    {
        $array = [
            'data' => $data,
            'msg' => $msg,
            'status' => $status
        ];

        return response($array);
    }
}
