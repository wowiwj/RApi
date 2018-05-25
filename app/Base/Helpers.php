<?php


use App\Base\Response;

if (! function_exists('api')){

    /**
     * @return Response|mixed
     */
    function api(){
        return app(Response::class);
    }

}