<?php

namespace App\Http\Controllers\Pendonor;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Model\Pendonor;
use App\Model\Province;
use App\Model\BloodType;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id = Auth::user()->id;
        $pendonor = Pendonor::findOrFail($id);
        $province = Province::orderBy('name', 'asc')->pluck('name', 'id')->toArray();
        $prov = Province::orderBy('name', 'asc')->get();
        $result = collect($province)->prepend('Silahkan Pilih', 0);
        $blood = BloodType::orderBy('name')->pluck('name', 'id')->toArray();
        $type = collect($blood)->prepend('Silahkan Pilih', 0);

        $attlatlong = collect($prov)
                    ->mapWithKeys(function ($item) {
                        return [$item->id => ['data-latitude' => $item->latitude, 'data-longitude' => $item->longitude]];
                    })->all();
        
        return view('pendonor.home.index', compact('pendonor', 'result', 'blood', 'attlatlong', 'type'));
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
        //
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
    // public function edit($id)
    // {
    //     $pendonor = Pendonor::findOrFail($id);
    //     $province = Province::orderBy('name', 'asc')->pluck('name', 'id')->toArray();
    //     $result = collect($province)->prepend('Silahkan Pilih', 0);
    //     $blood = BloodType::orderBy('name')->pluck('name', 'id')->toArray();


    //     return view('pendonor.home.index', compact('pendonor', 'result', 'blood', 'attlatlong'));
    // }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Requests\PendonorUpdateRequest $request)
    {
        $id = Auth::user()->id;
        Pendonor::findOrFail($id)->update($request->all());

        return redirect('pendonor/home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
