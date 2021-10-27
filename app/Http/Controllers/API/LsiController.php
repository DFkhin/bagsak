<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Lsi;
use Illuminate\Http\Request;
use Flash;
use Response;

class LsiController extends Controller {

    public $successStatus = 200;

    public function testQuery() {
        $lsis = Lsi::all();

        if (count($lsis) > 0) {
            return response()->json($lsis, $this->successStatus);
        } else {
            return response()->json(['Error' => 'There is no LSI in the database'], 404);
        }        
    }
}

?>