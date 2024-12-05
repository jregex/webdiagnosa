<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    public function index()
    {
        $data = [
            'title'=>'Dashboard',
        ];
        return view('admin.dashboard',$data);
    }

    // public function storeGallery(Request $request)
    // {
    //     $request->validate([
    //         'gambar'=>'image|mimes:jpg,png,bmp,jpeg,webp',
    //     ]);

    //     $file = $request->file('gambar');
    //     if (!$file) {
    //         $namafile = "default";
    //     } else {
    //         if (!Storage::exists('/public/galleries')) {
    //             Storage::makeDirectory('public/galleries', 0775, true);
    //         }
    //         $namafile =  $file->hashName();
    //         $img = Image::make($file->path());
    //         $img->resize(1080, null, function ($constraint) {
    //             $constraint->aspectRatio();
    //         });
    //         $img->save(Storage::path('public/galleries/' . $namafile));
    //     }
    //     $save=Gallery::create([
    //         'gallery'=>$namafile
    //     ]);

    //     if($save){
    //         return redirect()->route('galleries.index')->with('success','Data berhasil ditambahkan');
    //     }else{
    //         return redirect()->route('galleries.index')->with('failed','Data gagal ditambahkan');

    //     }

    // }
}
