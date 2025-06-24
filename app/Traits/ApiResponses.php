<?php

namespace App\Traits;

trait ApiResponses
{
    protected function getSuccessData($data)
    {
        return  response([
            "status" => "Success",
            "data" => $data
        ], 200);
    }

    protected function createSuccessMessage()
    {
        return  response([
            "status"    => "Success",
            "message"   => "Create Successfully"
        ], 201);
    }

}
