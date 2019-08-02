@extends('app')
@section('content')
@section('title','Ürün Düzenle')
<div id="wrapper">

  @include('sidebar')

  <div id="content-wrapper">

    <div class="container-fluid">

      <!-- Breadcrumbs-->

      <!-- Icon Cards-->
      <div class="row">
        <div class="col-xl-12 col-sm-12 mb-12">
          <form id="signupForm" method="post" action="/duzenle2" novalidate="novalidate">
            @csrf
            <div class="form-group">
              <label class="col-form-label" for="firstname"><b>Stok Kodu</b></label>
              <input class="form-control" id="firstname" value="{{$k->stok_kodu}}" type="text" name="stok_kodu" placeholder="Stok Kodunu Giriniz...">
            </div>
            <div class="form-group">
              <label class="col-form-label" for="lastname"><b>Ürün Adı</b></label>
              <input class="form-control" id="stok_adi" value="{{$k->stok_adi}}" type="text" name="stok_adi" placeholder="Ürün Adını Giriniz...">
            </div>
            <input type="hidden"  value="{{$k->id}}" name="id">
            <div class="form-group">
              <label class="col-form-label" for="username"><b>Ürün Kategori Seçiniz</b></label>
              <div class="form-group">
                <select class="form-control" name="kategori">
                  @foreach($kategoriler as $s)
                  <option value="{{$s->kategori_ekle}}">{{$s->kategori_ekle}}</option>
                  @endforeach
                </select>
              </div>
            </div>
            <div class="form-group">
              <label class="col-form-label" for="username"><b>Ürün Birimini Seçiniz</b></label>
              <div class="form-group">
                <select class="form-control" name="birim">
                   @foreach($birimler as $s)
                  <option value="{{$s->birim_ekle}}">{{$s->birim_ekle}}</option>
                  @endforeach
                </select>
              </div>
            </div>
            <div class="form-group">
              <label class="col-form-label" for="email"><b>Çıkış Tarihi</b></label>
              <input class="form-control" id="cikis_tarihi" value="{{$k->cikis_tarihi}}" type="date" name="cikis_tarihi" placeholder="Çıkış Tarihini Giriniz..">
            </div>
            <div class="form-group">
              <label class="col-form-label" for="email"><b>Fiyat</b></label>
              <input class="form-control" id="fiyat" value="{{$k->fiyat}}"type="text" name="fiyat" placeholder="Ürün Fiyatı">
            </div>

            </div>
           
            <br>

            <div class="form-group">
              <button class="btn btn-primary" type="submit" style="margin-left: 15px;"><b>Ekle</b></button>
            </div>

          </form>
        </div>

      </div>
    </div>



  </div>
  <!-- /.container-fluid -->

  @endsection
  @section('js')
  @endsection