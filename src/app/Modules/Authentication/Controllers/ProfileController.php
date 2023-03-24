<?php

namespace App\Modules\Authentication\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Authentication\Requests\ProfilePostRequest;
use App\Modules\Authentication\Services\AuthService;

class ProfileController extends Controller
{
    private $authService;

    public function __construct(AuthService $authService)
    {
        $this->authService = $authService;
    }

    public function get(){
        return view('admin.pages.profile.index');
    }

    public function post(ProfilePostRequest $request){

        try {
            //code...
            $this->authService->profile_update($request->all());
            return response()->json(["message" => "Profile Updated successfully."], 201);
        } catch (\Throwable $th) {
            //throw $th;
            return response()->json(["error"=>"something went wrong. Please try again"], 400);
        }

    }
}
