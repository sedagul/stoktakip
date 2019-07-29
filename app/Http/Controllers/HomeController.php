<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kategori;
use App\Birim;
use App\Urun;
use Illuminate\Support\Facades\DB;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('index');
    }
    public function urun()
    {
        $urunler = DB::table('uruns')->select('*')->get();
        return view('stoklar', compact('urunler'));
    }
    public function home()
    {
        return view('home');
    }
    public function yeniEkle()
    {
        $kategoriler = DB::table('kategori')->select('kategori_ekle')->get();
        $birimler = DB::table('birim')->select('birim_ekle')->get();
        

        return view('yeniEkle', compact('kategoriler' , 'birimler'));
    }
    public function kategoriEkle()
    {
        return view('kategoriEkle');
    }
    public function birimEkle()
    {
        return view('birimEkle');
    }
    public function kategoriEkle1(Request $request)
    {
     /*$kategori= new Kategori;
     $kategori->fill($request->all());
     $kategori->save();
     return view('kategoriEkle');*/
     
     Kategori::insert([
        ['kategori_ekle' =>$request->input('kategori_ekle')]
    ]);
     return view('kategoriEkle');
 }
 public function birimEkle1(Request $request)
 {
     $kategori= new Birim;
     $kategori->fill($request->all());
     $kategori->save();

     return redirect()->to('birimler');

 }
 public function duzenle($id)
 {
    $d= Birim::where('id','=',$id)->first();
    return view('duzenle',compact('d'));

}
public function ekle(Request $request)
{
 $ekle= new Urun;
 $ekle->fill($request->all());
 $ekle->save();

 $urunler = Urun::get();
 return view('stoklar', compact('urunler'));

}
public function birimduzenle(Request $request)
{
 $duzenle=new Birim;
 $duzenle::where('id',$request->id)->update([
    'birim_ekle'=>$request->input('birim_ekle')
]);

 return redirect()->to('birimler');

}
public function kategoriler()
{
 $kategori=  Kategori::get();
 return view('kategori', compact('kategori'));
}
public function sil($id)
{
    Kategori::where('id','=', $id)->delete();
    return redirect()->route('kategoriler');
}
public function birimler()
{
 $birim=  Birim::get();
 return view('birim', compact('birim'));
}
public function sill($id)
{
    Birim::where('id','=', $id)->delete();
    return redirect()->route('birimler');
}
public function urunler()
{
 $uruns=  Urun::get();
 return view('uruns', compact('uruns'));
}
public function sil0($id)
{
    Urun::where('id','=', $id)->delete();
    return redirect()->route('urun');
}
public function kategoriduzenle($id)
{
   $z =Kategori::where('id','=', $id)->first();
   return view('kategoriduzenle' , compact('z'));
}
public function duzenle0(Request $request)
{
 $duzenle=new Kategori;
 $duzenle::where('id',$request->id)->update([
    'kategori_ekle'=>$request->input('kategori_ekle')
]);

 return redirect()->to('kategoriler');

}
public function urunduzenle($id)
{
    $n =Urun::where('id','=', $id)->first();
    $kategoriler = DB::table('kategori')->select('kategori_ekle')->get();
    $birimler = DB::table('birim')->select('birim_ekle')->get();
    return view('urunduzenle' , compact('n','kategoriler','birimler'));
    
}
public function duzenle1(Request $request)
{
 $duzenle=new Urun;
 $duzenle::where('id',$request->id)->update([
    'stok_kodu'=>$request->input('stok_kodu'),
    'urun_adi'=>$request->input('urun_adi'),
    'kategori'=>$request->input('kategori'),
    'birimi'=>$request->input('birimi'),
    'fiyatı'=>$request->input('fiyatı'),
    'aciklama'=>$request->input('aciklama')

]);

 return redirect()->to('urun');

}
public function hareketler()
    {
        return view('hareketler');
    }
    
   

}
