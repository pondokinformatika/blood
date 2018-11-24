<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Model\Patien;
use App\Model\Province;
use App\Model\Pendonor;
use App\Model\BloodType;

class PatientsCotroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $patients = Patien::orderBy('created_at', 'desc')->paginate(8);
        $itemCount = Patien::count();

        return view('admin.patients.index', compact('patients', 'itemCount'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $patient = new Patien();
        $province = Province::orderBy('name', 'asc')->pluck('name', 'id')->toArray();
        $prov = Province::orderBy('name', 'asc')->get();
        $result = collect($province)->prepend('Silahkan Pilih', 0);
        $blood = BloodType::orderBy('name')->pluck('name', 'id')->toArray();
        $type = collect($blood)->prepend('Silahkan Pilih', 0);

        $attlatlong = collect($prov)
                    ->mapWithKeys(function ($item) {
                        return [$item->id => ['data-latitude' => $item->latitude, 'data-longitude' => $item->longitude]];
                    })->all();
        return view('admin.patients.create', compact('patient', 'result', 'blood', 'attlatlong', 'type'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Requests\PatientsStoreRequest $request)
    {
        // $donor = Pendonor::where('province_id', $request->province_id)->get()
        // $this->distanceCalculation($request->latitude, $request->longitude);
        Patien::create($request->all());

        return redirect('admin\patients');
    }

    public function distanceCalculation($point1_lat, $point1_long, $point2_lat, $point2_long, $unit = 'km', $decimals = 2) {
        // Calculate the distance in degrees
        $degrees = rad2deg(acos((sin(deg2rad($point1_lat))*sin(deg2rad($point2_lat))) + (cos(deg2rad($point1_lat))*cos(deg2rad($point2_lat))*cos(deg2rad($point1_long-$point2_long)))));
     
        // Convert the distance in degrees to the chosen unit (kilometres, miles or nautical miles)
        switch($unit) {
            case 'km':
                $distance = $degrees * 111.13384; // 1 degree = 111.13384 km, based on the average diameter of the Earth (12,735 km)
                break;
            case 'mi':
                $distance = $degrees * 69.05482; // 1 degree = 69.05482 miles, based on the average diameter of the Earth (7,913.1 miles)
                break;
            case 'nmi':
                $distance =  $degrees * 59.97662; // 1 degree = 59.97662 nautic miles, based on the average diameter of the Earth (6,876.3 nautical miles)
        }
        return round($distance, $decimals);
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $patient = Patien::findOrFail($id);
        $province = Province::orderBy('name', 'asc')->pluck('name', 'id')->toArray();
        $prov = Province::orderBy('name', 'asc')->get();
        $result = collect($province)->prepend('Silahkan Pilih', 0);
        $blood = BloodType::orderBy('name')->pluck('name', 'id')->toArray();
        $type = collect($blood)->prepend('Silahkan Pilih', 0);

        $attlatlong = collect($prov)
                    ->mapWithKeys(function ($item) {
                        return [$item->id => ['data-latitude' => $item->latitude, 'data-longitude' => $item->longitude]];
                    })->all();

        return view('admin.patients.edit', compact('patient', 'result', 'blood', 'attlatlong', 'type'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Requests\PatientUpdateRequest $request, $id)
    {
        Patien::findOrFail($id)->update($request->all());

        return redirect('admin\patients');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Patien::findOrFail($id)->delete();
        return redirect('admin/patients');
    }
}
