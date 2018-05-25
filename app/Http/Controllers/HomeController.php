<?php

namespace App\Http\Controllers;

use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

        $this->middleware('auth:api')->except([
            'index'
        ]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function index()
    {

//        return api()->success([
//            'user' => 'good'
//        ]);
//
//        $user = User::first();
//
//        return api()->resource(new UserResource($user));
//
        $users = User::paginate(30);
        $result = UserResource::collection($users);
        return api()->resource($result);

    }
}
