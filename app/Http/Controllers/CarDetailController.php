<?php

namespace App\Http\Controllers;

use App\Models\CarDetails;
use Illuminate\Http\Request;

class CarDetailController extends Controller
{
    public function index(){
        $CarDetail = response()->json(CarDetails::all());
        return $CarDetail;
    }
    public function show($id){
        $CarDetail = response()->json(CarDetails::find($id));
        return $CarDetail;
    }
    public function destroy($id){
        CarDetails::find($id)->delete();
    }
    public function store(Request $request){
        $CarDetail = new CarDetails();
        $CarDetail->car_id = $request->car_id;
        $CarDetail->neve = $request->neve;
        $CarDetail->szine = $request->szine;
        $CarDetail->evjarat = $request->evjarat;
        $CarDetail->motorTipus = $request->motorTipus;
        $CarDetail->muszakiAlkalmas = $request->muszakiAlkalmas;
        $CarDetail->save();
    }
    public function update(Request $request, $id){
        $CarDetail = new CarDetails($id);
        $CarDetail->car_id = $request->car_id;
        $CarDetail->neve = $request->neve;
        $CarDetail->szine = $request->szine;
        $CarDetail->evjarat = $request->evjarat;
        $CarDetail->motorTipus = $request->motorTipus;
        $CarDetail->muszakiAlkalmas = $request->muszakiAlkalmas;
        $CarDetail->save();
    }
}
