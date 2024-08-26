<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;


class ProdukController extends Controller
{
   
    public function index(Request $request){

        $data = new Produk; 
        if ($request->get('search')){
            $data = $data->where('products_name','LIKE','%'.$request->get('search').'%')
            ->orWhere('products_id','LIKE','%'.$request->get('search').'%'); //code yang digunakan untuk,jika ada user yang memakai filter search,maka data akan ditambahkan,dimana menggunakan 'nama' seperti apa yang direquestkan atau diinputkan di filternya
        }

        $data = $data->get(); 
        
        return view('Produk.index', compact('data','request')); //(compact)cara untuk memasukkan   variabel data yang dipanggil tadi ke index

    }

    public function create(){
        return view('Produk.create');
    }

    public function store(Request $request){
        //dd($request->all()); //method ini digunakan untuk menangkap semua request yang masuk ke dalam method tersebut (tanpa validasi)

        $validator = validator::make($request->all(),[
            'photo'          => 'required|mimes:png,jpg,jpeg|max:2048',
            'products_id'    => 'required',
            'products_name'  => 'required',
            'buying_price'   => 'required',
            'selling_price'  => 'required',
        ]);  //untuk membuat validasi pada saat pengisian,maka buat terlebih dahulu varibael nya,lalu panggil,setelah itu pilih illuminate nya,dan buat varibaelnya untuk memberlakukan semua requestnya tervalidasi oleh variabel validatornya,array,lalu apa saja yang akan divalidasi,berdasarkan field yang ada di database dan name dari stip field nya di form isian

        if($validator->fails()) return redirect()->back()->withInput()->withErrors($validator); //jika validasinya gagal(ada yang belum diisi),maka sistemnya akan kembali ke halamnan sebelumnya,dengan apa yang diinputkan,dan dengan apa saja yang membuat error(mengirim pesan validasinya),dengan $validatornya

        //dd($request->all());

        $photo      =   $request->file('photo');
        $filename   =   date('Y-m-d').$photo->getClientOriginalName();
        $path       =   'photo.user/'.$filename;
        Storage::disk('public')->put($path,file_get_contents($photo));

        $data['products_id']  = $request->products_id; //syntax disamping memberikan perintah untuk inputan yang dilakukan di form user tadi agar dapat masuk ke database,isian arry harus sama dengan yang ada pada field database
        $data['products_name']      = $request->products_name;
        $data['buying_price']        = $request->buying_price;
        $data['selling_price']    = $request->selling_price;
        $data['photo']          =   $filename;

        Produk::create($data); //pada saat user menginputkan data,maka akan kembali ke halaman index

        return redirect()->route('produk.index'); //disambungkan dengan syntax ini
    }

    public function edit(Request $request,$id){
        $data = Produk::find($id); //fungsi untuk minta ke laravel agar mencarikan data user dengan id tersebut,yang dikirim dari parameter yang dibuat di route

        return view('Produk.edit',compact('data'));
    }

    public function update(Request $request,$id){
        
        $validator = validator::make($request->all(),[
            'products_id'    => 'required',
            'products_name'        => 'required',
            'buying_price'          => 'required',
            'selling_price'      => 'required',
        ]);

        if($validator->fails()) return redirect()->back()->withInput()->withErrors($validator);

        $data['products_id']  = $request->products_id;
        $data['products_name']      = $request->products_name;
        $data['buying_price']        = $request->buying_price;
        $data['selling_price']    = $request->selling_price;

        Produk::whereId($id)->update($data);

        return redirect()->route('produk.index');
    }

    public function delete(Request $request,$id){
        $data = Produk::find($id); //syntax ini akan mengecek data user menggunakan id-nya

        if($data){
            $data->delete();
        } //jika ada ,maka delete/hapus datanya

        return redirect()->route('produk.index');
    }
}   
