@extends('app')
@section('content')
@section('title','Ürün Ekle')
<div id="wrapper">

  @include('sidebar')

  <div id="content-wrapper">

    <div class="container-fluid">

      <!-- Breadcrumbs-->

      <!-- Icon Cards-->
      <div class="row">
        <div class="col-xl-12 col-sm-12 mb-12">
          <form id="signupForm" method="post" action="/duzenle1" novalidate="novalidate">
            @csrf
            <div class="form-group">
              <label class="col-form-label" for="firstname"><b>Stok Kodu</b></label>
              <input class="form-control" id="firstname" value="{{$n->stok_kodu}}" type="text" name="stok_kodu" placeholder="Stok Kodunu Giriniz...">
            </div>
            <div class="form-group">
              <label class="col-form-label" for="lastname"><b>Ürün Adı</b></label>
              <input class="form-control" id="lastname" value="{{$n->urun_adi}}" type="text" name="urun_adi" placeholder="Ürün Adını Giriniz...">
            </div>
            <input type="hidden"  value="{{$n->id}}" name="id">
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
                <select class="form-control" name="birimi">
                   @foreach($birimler as $s)
                  <option value="{{$s->birim_ekle}}">{{$s->birim_ekle}}</option>
                  @endforeach
                </select>
              </div>
            </div>
            <div class="form-group">
              <label class="col-form-label" for="email"><b>Fiyatı</b></label>
              <input class="form-control" id="email" value="{{$n->fiyatı}}" type="text" name="fiyatı" placeholder="Ürün Fiyatı">
            </div>
            <div class="form-group">
              <label class="col-form-label" for="aciklam"><b>Açıklama</b></label>
              <textarea class="editor1" name="aciklama" placeholder="Ürün detayını giriniz.." id="editor1" data-rule ="requiled"> </textarea>
              <script src="https://cdn.ckeditor.com/4.12.1/standard/ckeditor.js"></script>
              <script type="text/javascript">
                CKEDITOR.replace( 'editor1' );
              </script>
            </div>
            <br>

            <div class="form-group">
              <button class="btn btn-primary" type="submit"><b>Ekle</b></button>
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