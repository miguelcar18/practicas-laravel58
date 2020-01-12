<?php

namespace App\Http\Controllers\Api;

//use EllipseSynergie\ApiResponse\Contracts\Response as ApiResponse;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /*
public function __construct(ApiResponse $response)
{
$this->response = $response;
}
 */
}
