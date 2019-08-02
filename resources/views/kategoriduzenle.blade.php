@extends('app')
@section('content')
@section('title','Kategori Düzenle')
  <div id="wrapper">

    @include('sidebar')

    <div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        
        <!-- Icon Cards-->
        <div class="row">
          <div class="col-xl-12 col-sm-12 mb-12">
            <form id="signupForm" method="post" action="/duzenle0" novalidate="novalidate">
               <input type="hidden" name="id" value="{{$z->id}}">
              @csrf
<div class="form-group">
<label class="col-form-label" for="firstname"><b>Kategori Düzenle</b></label>
<input value='{{$z->kategori_ekle}}' class="form-control" id="firstname" type="text" name="kategori_ekle" placeholder="Kategori ismini giriniz">
</div>

<br>

<div class="form-group">
<button class="btn btn-primary" type="submit" name="signup" value="Sign up"><b>Ekle</b></button>
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