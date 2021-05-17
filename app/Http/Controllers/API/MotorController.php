<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Motor;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\Response;

class MotorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $motor = Motor::all();
        $response = [
            'message' => 'Data motor berdasarkan tanggal',
            'data' => $motor
        ];
        return response()->json($motor);

        // dump($response);
    //  return response()->json($response, Response::HTTP_OK);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'plat_nomor' => ['required'],
            'no_rangka' => ['required'],
            'no_mesin' => ['required'],
            'merk' => ['required'],
            'warna' => ['required'],
            'nama_motor' => ['required'],
            'modal' => ['required', 'numeric'],
            'status' => ['required'],
            'gambar'=>['required']
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), Response::HTTP_UNPROCESSABLE_ENTITY);
        }

        try {
            $motor = Motor::create($request->all());

            return response()->json([
                'status'=> true,
                'messsage' => 'data tersimpan',
                'data' => $motor
            ]);
        } catch (QueryException $e) {
            return response()->json([
                'message' => 'Failed' . $e->errorInfo

            ]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $motor = Motor::find($id);
        return response()->json($motor);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $motor = Motor::findorFail($id);

        $validator = Validator::make($request->all(), [
            'plat_nomor' => ['required'],
            'no_rangka' => ['required'],
            'no_mesin' => ['required'],
            'merk' => ['required'],
            'warna' => ['required'],
            'nama_motor' => ['required'],
            'modal' => ['required', 'numeric'],
            'status' => ['required'],
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), Response::HTTP_UNPROCESSABLE_ENTITY);
        }

        try {
            $motor->update($request->all());
            return response()->json([
                'status' => true,
                'messsage' => 'data terupdate',
            ]);
            
        } catch (QueryException $e) {
            return response()->json([
                'message' => 'Failed' . $e->errorInfo

            ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $motor = Motor::findorFail($id);


        try {
            $motor->delete();

            return response()->json([
                'messsage' => 'data terhapus',
                'status'=> true
            ]);
        } catch (QueryException $e) {
            return response()->json([
                'message' => 'Failed' . $e->errorInfo

            ]);
        }
    
    }
}