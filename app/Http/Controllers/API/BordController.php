<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Bord;
use Illuminate\Http\Request;

use Validator;

class BordController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        {
            $bords = Bord::all()->toArray();
            return array_reverse($bords);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $bord = new Bord();
        $bord->bord = $request->bord;
        $bord->save();
        // $bord = new Bord([
        //     'bord' => $request->input('bord'),
        // ]);
        // $bord->save();
 
        return response()->json('The bord successfully added');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Bord  $bord
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $bord = Bord::find($id);
        return response()->json($bord);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Bord  $bord
     * @return \Illuminate\Http\Response
     */
    // public function edit($bord)
    // {
    //     $bord = Bord::find($bord);
    //     return response()->json($bord);

    // }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Bord  $bord
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request)
    {
        $bord = Bord::find($id);
        $bord->update($request->all());
 
        return response()->json('The bord successfully updated');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Bord  $bord
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $bord = Bord::find($id);
        $bord->delete();
 
        return response()->json('The Bord successfully deleted');

    }
}
