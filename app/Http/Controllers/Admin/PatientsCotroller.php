<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Model\Patien;
use App\Model\Province;
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

        $attlatlong = collect($prov)
                    ->mapWithKeys(function ($item) {
                        return [$item->id => ['data-latitude' => $item->latitude, 'data-longitude' => $item->longitude]];
                    })->all();
        return view('admin.patients.create', compact('patient', 'result', 'blood', 'attlatlong'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Requests\PatientsStoreRequest $request)
    {
        Patien::create($request->all());

        return redirect('admin\patients');
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

        $attlatlong = collect($prov)
                    ->mapWithKeys(function ($item) {
                        return [$item->id => ['data-latitude' => $item->latitude, 'data-longitude' => $item->longitude]];
                    })->all();

        return view('admin.patients.edit', compact('patient', 'result', 'blood', 'attlatlong'));
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
