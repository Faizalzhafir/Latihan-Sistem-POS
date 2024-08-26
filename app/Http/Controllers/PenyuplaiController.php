<?php

namespace App\Http\Controllers;

use App\Models\Penyuplai;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class PenyuplaiController extends Controller
{
    public function index(Request $request){

        $data = new Penyuplai; 
        if ($request->get('search')){
            $data = $data->where('supplier_name','LIKE','%'.$request->get('search').'%')
            ->orWhere('address','LIKE','%'.$request->get('search').'%'); //code yang digunakan untuk,jika ada user yang memakai filter search,maka data akan ditambahkan,dimana menggunakan 'nama' seperti apa yang direquestkan atau diinputkan di filternya
        }

        $data = $data->get();
        
        return view('Penyuplai.index', compact('data','request')); //(compact)cara untuk memasukkan   variabel data yang dipanggil tadi ke index

    }

    public function create(){
        return view('Penyuplai.create');
    }

    public function store(Request $request){
        //dd($request->all()); //method ini digunakan untuk menangkap semua request yang masuk ke dalam method tersebut (tanpa validasi)

        $validator = validator::make($request->all(),[
            'supplier_name'    => 'required',
            'telephone'        => 'required',
            'address'          => 'required',
            'descriptions'      => 'required',
        ]);  //untuk membuat validasi pada saat pengisian,maka buat terlebih dahulu varibael nya,lalu panggil,setelah itu pilih illuminate nya,dan buat varibaelnya untuk memberlakukan semua requestnya tervalidasi oleh variabel validatornya,array,lalu apa saja yang akan divalidasi,berdasarkan field yang ada di database dan name dari stip field nya di form isian

        if($validator->fails()) return redirect()->back()->withInput()->withErrors($validator); //jika validasinya gagal(ada yang belum diisi),maka sistemnya akan kembali ke halamnan sebelumnya,dengan apa yang diinputkan,dan dengan apa saja yang membuat error(mengirim pesan validasinya),dengan $validatornya

        $data['supplier_name']  = $request->customer_name; //syntax disamping memberikan perintah untuk inputan yang dilakukan di form user tadi agar dapat masuk ke database,isian arry harus sama dengan yang ada pada field database
        $data['telephone']      = $request->phone;
        $data['address']        = $request->live;
        $data['descriptions']    = $request->status;

        Penyuplai::create($data); //pada saat user menginputkan data,maka akan kembali ke halaman index

        return redirect()->route('pelanggan.index'); //disambungkan dengan syntax ini
    }

    public function edit(Request $request,$id){
        $data = Penyuplai::find($id); //fungsi untuk minta ke laravel agar mencarikan data user dengan id tersebut,yang dikirim dari parameter yang dibuat di route

        return view('Penyuplai.edit',compact('data'));
    }

    public function update(Request $request,$id){
        
        $validator = validator::make($request->all(),[
            'supplier_name'    => 'required',
            'telephone'        => 'required',
            'address'          => 'required',
            'descriptioms'      => 'required',
        ]);

        if($validator->fails()) return redirect()->back()->withInput()->withErrors($validator);

        $data['supplier_name']  = $request->customer_name;
        $data['telephone']      = $request->phone;
        $data['address']        = $request->live;
        $data['descriptions']    = $request->status;

        Penyuplai::whereId($id)->update($data);

        return redirect()->route('pelanggan.index');
    }

    public function delete(Request $request,$id){
        $data = Penyuplai::find($id); //syntax ini akan mengecek data user menggunakan id-nya

        if($data){
            $data->delete();
        } //jika ada ,maka delete/hapus datanya

        return redirect()->route('pelanggan.index');
    }
}   
