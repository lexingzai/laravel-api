<?php
/**
 * Created by PhpStorm.
 * User: lexingzai
 * Date: 19-7-2
 * Time: 上午9:31
 */
use App\Api\Helpers\ApiResponse;

if (! function_exists('api')) {
    function api()
    {
        return app(ApiResponse::class);
    }
}