<?php

use App\LoginManager;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\signup;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});



Route::get('/login',function(  Request $request){

    try{
        $username=$request['username'];
        $password=$request['password'];
        $result=LoginManager::isUsernameAndPasswordCorrect($username,$password);
        

        if(!$result){
            throw new Exception('Username or password wrong');
        }

        return "true";
    }
    catch(\Exception $ex){
        return "false";

        // return "false";
    }
});


Route::get('/showdata',function(Request $request){

    try{
        $td=signup::all();
        if($td==null){
            throw new Exception('Data not found');
        }
        $output=[];
        $output["result"]=$td;
        $output['status']="ok";
        return response()->json($output,200);
    }
    catch(\Exception $ex){
        $error=array("status"=>"failed","error"=>$ex -> getMessage());
        return response()->json($error,200);
    }
});
