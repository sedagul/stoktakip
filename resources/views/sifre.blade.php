@extends('app')
@section('content')
@section('title','Şifre Değiştir')
<div id="wrapper">

  @include('sidebar')

  <div id="content-wrapper">

    <div class="container-fluid">

      <!-- Breadcrumbs-->

      <!-- Icon Cards-->
      <div  class="row col col-md-6">
        <div class="col-xl-12 col-sm-12 mb-12">
          <form id="signupForm" method="post" action="kaydet" novalidate="novalidate">
            @csrf
            <div  class="form-group">
              <label class="col-form-label" for="firstname"><b>Aktif Şifre</b></label>
              <input class="form-control" id="password" type="password" name="aktif_sifre" placeholder="Aktif Şifrenizi Giriniz..." required="">
            </div>
            <div class="form-group">
              <label class="col-form-label" for="lastname"><b>Yeni Şifre</b></label>
              <input class="form-control" id="password" type="password" name="yeni_sifre" placeholder="Yeni şifrenizi Tekrar Giriniz..." required="">
            </div>
            <div class="form-group">
              <label class="col-form-label" for="lastname"><b>Yeni Şifre Tekrar</b></label>
              <input class="form-control" id="password" type="password" name="yeni_sifretekrar" placeholder="Yeni şifrenizi Giriniz..." required="">
            </div>
            
            <br>

            <div class="form-group">
              
              <button class="btn btn-primary" type="submit"><b>Kaydet</b></button>
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