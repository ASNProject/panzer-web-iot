<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Sensor;
use App\Http\Resources\Resource;
use Illuminate\Support\Facades\Validator;

class SensorController extends Controller
{
    /**
     * index
     * 
     * @return void
     */
    public function index()
    {
        // get all data
        $sensors = Sensor::latest()->paginate(5);

        return new Resource(true, 'List Data Sensors', $sensors);
    }

    /**
     * store
     * 
     * @param mixed $request
     * @return void
     */
    public function store(Request $request)
    {
        // define validation rules
        $validator = Validator::make($request->all(), [
            'ph'        => 'required',
            'do'        => 'required',
            'temp'      => 'required',
            'aerator'   => 'required',
        ]);

        // check if validation fails
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        // create post
        $sensors = Sensor::create([
            'ph'        => $request->ph,
            'do'        => $request->do,
            'temp'      => $request->temp,
            'aerator'   => $request->aerator,
        ]);

        // return response
        return new Resource(true, 'Data Sensor Berhasil Ditambahkan!', $sensors);
    }

    /**
     * show
     * 
     * @param mixed $id
     * @return void
     */
    public function show($id)
    {
        // find sensors by id
        $sensor = Sensor::find($id);

        // return single sensor as resource
        return new Resource(true, 'Detail Data Sensor!', $sensor);
    }
}
