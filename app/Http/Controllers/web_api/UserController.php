<?php

namespace App\Http\Controllers\web_api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Laravel\Passport\HasApiTokens;
use App\Models\User;
use Validator;
use Illuminate\Http\JsonResponse;

class UserController extends Controller
{


    public function register(Request $request): JsonResponse
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'c_password' => 'required|same:password',
        ]);
     
        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }
     
        $input = $request->all();
        $input['password'] = bcrypt($input['password']);
        $input['user_type'] = 'customer';
        $user = User::create($input);
        $success['token'] =  $user->createToken('MyApp')->accessToken;
        $success['name'] =  $user->name;
   
        return $this->sendResponse($success, 'User register successfully.');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $user = Auth::user();
            // $tokenResult = $user->createToken('MyApp');
            $token = $user->createToken('appToken')->accessToken; // Use plainTextToken instead of accessToken
            // $token = $tokenResult->plainTextToken; // Use plainTextToken instead of accessToken

            return response()->json([
                'success' => true,
                'data' => [
                    'token' => $token,
                    'user' => $user,
                ],
                'message' => 'User login successfully.'
            ]);
        } else {
            return response()->json(['error' => 'Unauthorized'], 401);
        }
    }

    public function data(Request $request)
    {
        return response()->json(Auth::user(), 200);
    }

    public function logout(Request $request)
    {
        if (!$request->user()) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }

        $request->user()->token()->revoke();
        return response()->json(['message' => 'Successfully logged out']);
    }
}
