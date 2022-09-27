<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Foydalanuvchilar;

class GuestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        // $foy = Foydalanuvchilar::all();
        // return view('admin.index', compact('foy'));
        
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

        $data = $request->validate([
            'ism' => 'required',
            'familya' => 'required',
            'sharif' => 'required',
            'pasport_rasm' => 'image|nullable|mimes:jpg,png,jpeg,gif,svg|max:5000',
            'sana' => 'required',
            'tel_raqam' => 'required',
            'qosh_tel_raqam' => 'required',
            'tamomlagan_sanasi' => 'required',
            'diplom_raqami' => 'required',
            'fakultet' => 'required',
            'talim_shakli' => 'required',
            'mamlakat' => 'required',
            'viloyat' => 'required',
            'manzil' => 'required',
            'fuqaroligi' => 'required',
            'millati' => 'required',
            'pasport_raqami' => 'required',
            'tamomlagani' => 'required',
            'tamomlagan_nomi' => 'required',
            'tamomlagan_manzil' => 'required'
        ]);

        // dd($request);

        if ($request->hasFile('pasport_rasm')) {
            $filemodel = $request->file("pasport_rasm");
            $fileNameWithExt = $filemodel->getClientOriginalName();
            $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            $ext = $filemodel->getClientOriginalExtension();
            $fileNameToStore = $filename . "_" . time() . "." . $ext;
            #Storage::disk('talaba')->put('', $filemodel, $fileNameToStore);
            $request->file("pasport_rasm")->storeAs("", $fileNameToStore, "foydalanuvchi");
            #$path = $filemodel->storeAs('public/images', $fileNameToStore);
        } else {
            $fileNameToStore = "noimage.jpg";
        }

        $foy = new Foydalanuvchilar;
        
        $foy->ism = $data['ism'];
        $foy->familya = $data['familya'];
        $foy->sharif = $data['sharif'];
        $foy->pasport_rasm = $fileNameToStore;
        $foy->sana = $data['sana'];
        $foy->tel_raqam = $data['tel_raqam'];
        $foy->qosh_tel_raqam = $data['qosh_tel_raqam'];
        $foy->tamomlagan_sanasi = $data['tamomlagan_sanasi'];
        $foy->diplom_raqami = $data['diplom_raqami'];
        $foy->fakultet = $data['fakultet'];
        $foy->talim_shakli = $data['talim_shakli'];
        $foy->mamlakat = $data['mamlakat'];
        $foy->viloyat = $data['viloyat'];
        $foy->manzil = $data['manzil'];
        $foy->fuqaroligi = $data['fuqaroligi'];
        $foy->millati = $data['millati'];
        $foy->pasport_raqami = $data['pasport_raqami'];
        $foy->tamomlagani = $data['tamomlagani'];
        $foy->tamomlagan_nomi = $data['tamomlagan_nomi'];
        $foy->tamomlagan_manzil = $data['tamomlagan_manzil'];
        $foy->status = false;
        $foy->save();



        return redirect()->route('asosiyga')->with('message', "Ariza jo'natildi");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $foy = Foydalanuvchilar::find($id);
        return view('admin.full',compact('foy'));
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
        //
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
