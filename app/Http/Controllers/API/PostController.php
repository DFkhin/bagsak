<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Lsi;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

use Flash;
use Response;

class PostController extends Controller {

    public $successStatus = 200;

    public function getAllPosts(Request $request) {
        $token = $request['t']; // t = token
        $userid = $request['u']; // u = userid

        $user = User::where('id', $userid)->where('remember_token', $token)->first();

        if ($user != null) {
            $table_lsi = Lsi::all();

            return response()->json($table_lsi, $this->successStatus);
        } else {
            return response()->json(['response' => 'Bad Call'], 501);
        }        
    }  
}
    
