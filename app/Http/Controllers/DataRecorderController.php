<?php

namespace App\Http\Controllers;

use App\Services\DataRecorderService;
use Illuminate\Http\Request;

class DataRecorderController extends Controller
{
    private $dataServiceRecorder;

    public function __construct()
    {
        $this->dataServiceRecorder = new DataRecorderService();
    }

    public function recordData(Request $request)
    {
        $this->validateRequest($request);

         try {
             $this->dataServiceRecorder->save($request);
         } catch (\Exception $e) {
             return response()->json(['error' => $e->getMessage()], 400);
         }

        return response()->json(['message' => true], 200);
    }

    private function validateRequest(Request $request)
    {
        $this->validate($request, [
            'sensor' => 'required|integer',
            'plant' => 'required|integer',
            'data' => 'required|array'
        ]);
    }
}
