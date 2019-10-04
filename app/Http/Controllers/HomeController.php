<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kategori;
use App\Birim;
use App\Urun;
use App\Hareketler;
use App\Log;
use App\Ayarlar;
use App\Sifre;
use TbLog;
use Auth;
use Hash;
use DB;
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

    public function home()
    {
        return view('home');
    }



//URUN
    public function urun()
    {
        $urunler = DB::table('uruns')->select('*')->get();
        return view('stoklar', compact('urunler'));
    }
//URUN DÜZENLE
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
     if ($duzenle) {
         $log=new Log;
         $log->aciklama=Auth::user()->name.' kullanıcısı güncelleme yaptı.';
         $log->save();
     };
     return redirect()->to('urun');
 }
//YENİEKLE
 public function yeniEkle()
 {
    $kategoriler = DB::table('kategori')->select('kategori_ekle')->get();
    $birimler = DB::table('birim')->select('birim_ekle')->get();
    return view('yeniEkle', compact('kategoriler' , 'birimler'));
}
//EKLE
public function ekle(Request $request)
{
 $ekle= new Urun;
 $ekle->fill($request->all());
 $ekle->save();
      if ($ekle) {
         $log=new Log;
         $log->aciklama=Auth::user()->name.' kullanıcısı ekleme yaptı.';
         $log->save();
     };

 $urunler = Urun::get();
 return view('stoklar', compact('urunler'));
}
//URUN SİL
public function urunler()
{
    $uruns=  Urun::get();
    return view('uruns', compact('uruns'));
}
public function sil0($id)
{
    $sil =Urun::where('id','=', $id)->delete();
         if ($sil) {
         $log=new Log;
         $log->aciklama=Auth::user()->name.' kullanıcısı silme işlemi yaptı.';
         $log->save();
     };
    return redirect()->route('urun');
}



//KATEGORİ EKLE
public function kategoriEkle()
{

    return view('kategoriEkle');
}


//KATEGORİEKLE1
public function kategoriEkle1(Request $request)
{
     /*$kategori= new Kategori;
     $kategori->fill($request->all());
     $kategori->save();
     return view('kategoriEkle');*/
     
   $ke = Kategori::insert([
        ['kategori_ekle' =>$request->input('kategori_ekle')]
    ]);
      if ($ke) {
         $log=new Log;
         $log->aciklama=Auth::user()->name.' kullanıcısı kategoride ekleme yaptı.';
         $log->save();
     };
     return view('kategoriEkle');
 }

//BİRİM EKLE
 public function birimEkle()
 {
    return view('birimEkle');
}


//BİRİMEKLE1
public function birimEkle1(Request $request)
{
 $kategori= new Birim;
 $kategori->fill($request->all());
 $kategori->save();
  if ($kategori) {
         $log=new Log;
         $log->aciklama=Auth::user()->name.' kullanıcısı birimde ekleme yaptı.';
         $log->save();
     };

 return redirect()->to('birimler');

}
public function duzenle($id)
{
    $d= Birim::where('id','=',$id)->first();
    return view('duzenle',compact('d'));

}


//BİRİM DÜZENLE
public function birimduzenle(Request $request)
{
    $duzenle=new Birim;
    $duzenle::where('id',$request->id)->update([
        'birim_ekle'=>$request->input('birim_ekle')
    ]);
         if ($duzenle) {
         $log=new Log;
         $log->aciklama=Auth::user()->name.' kullanıcısı birimde güncelleme yaptı.';
         $log->save();
     };

    return redirect()->to('birimler');

}

public function kategoriler()
{
    $kategori=  Kategori::get();
    return view('kategori', compact('kategori'));
}


//KATEGORİ DÜZENLE
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
      if ($duzenle) {
         $log=new Log;
         $log->aciklama=Auth::user()->name.' kullanıcısı kategoride güncelleme yaptı.';
         $log->save();
     };

 return redirect()->to('kategoriler');

}


//KATEGORİ SİL
public function sil($id)
{
   $sill= Kategori::where('id','=', $id)->delete();
 if ($sill) {
         $log=new Log;
         $log->aciklama=Auth::user()->name.' kullanıcısı silme işlemi yaptı.';
         $log->save();
     };
    return redirect()->route('kategoriler');
}
public function birimler()
{


//BİRİM SİL
    $birim=  Birim::get();
    return view('birim', compact('birim'));
}
public function sill($id)
{
   $silll =Birim::where('id','=', $id)->delete();
    if ($silll) {
         $log=new Log;
         $log->aciklama=Auth::user()->name.' kullanıcısı silme işlemi yaptı.';
         $log->save();
     };
    return redirect()->route('birimler');
}




//HAREKETLER
public function hareketler()
{
    $hareketler = DB::table('hareketler')->select('*')->get();
    return view('hareketler', compact('hareketler'));
}

    //hareketler düzenle
public function hareketduzenle($id)
{
    $k =Hareketler::where('id','=', $id)->first();
    $kategoriler = DB::table('kategori')->select('kategori_ekle')->get();
    $birimler = DB::table('birim')->select('birim_ekle')->get();
    return view('hareketduzenle' , compact('k','kategoriler','birimler'));
}
public function duzenle2(Request $request)
{
 $duzenle=new Hareketler;
 $duzenle::where('id',$request->id)->update([
    'stok_kodu'=>$request->input('stok_kodu'),
    'stok_adi'=>$request->input('stok_adi'),
    'kategori'=>$request->input('kategori'),
    'birim'=>$request->input('birim'),
    'cikis_tarihi'=>$request->input('cikis_tarihi'),
    'fiyat'=>$request->input('fiyat')
]);
      if ($duzenle) {
         $log=new Log;
         $log->aciklama=Auth::user()->name.' kullanıcısı güncelleme yaptı.';
         $log->save();
     };
 return redirect()->to('hareketler');
}

     //cikisEkle
public function cikisEkle()
{
    $kategoriler = DB::table('kategori')->select('kategori_ekle')->get();
    $birimler = DB::table('birim')->select('birim_ekle')->get();
    return view('cikisEkle', compact('kategoriler' , 'birimler'));
}

    //cekle
public function cekle(Request $request)
{
 $cekle= new Hareketler;
 $cekle->fill($request->all());
 $cekle->save();

 $hareketler = Hareketler::get();
      if ($hareketler) {
         $log=new Log;
         $log->aciklama=Auth::user()->name.' kullanıcısı ekleme yaptı.';
         $log->save();
     };
 return view('hareketler', compact('hareketler'));

}

    //hareketler sil
public function hareketler1()
{
    $hareketler=  Hareketler::get();
    return view('hareketler', compact('hareketler'));
}
public function sil3($id)
{
   $sil4= Hareketler::where('id','=', $id)->delete();
 if ($sil4) {
         $log=new Log;
         $log->aciklama=Auth::user()->name.' kullanıcısı silme işlemi yaptı.';
         $log->save();
     };
    return redirect()->route('hareketler');
} 



    //ŞİFRE
public function sifre()
{
    return view('sifre');
}

//KAYDET
public function kaydet(Request $request)
{
    if (!(Hash::check($request->aktif_sifre, Auth::user()->password))) {
     // The passwords matches
     return redirect()->back()->with("error","Mevcut şifreniz eski şifreniz ile uyuşmuyor. Lütfen tekrar deneyiniz..");
 }
 if(strcmp($request->aktif_sifre, $request->yeni_sifre) == 0){
            //Current password and new password are same
    return redirect()->back()->with("error","Yeni şifre mevcut şifre ile aynı olamaz. Lütfen farklı bir şifre giriniz.");
}

//Change Password
$user = Auth::user();
$user->password = bcrypt($request->yeni_sifre);
$user->save();
return redirect()->to('/');
}

}
