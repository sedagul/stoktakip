@extends('app')
@section('content')
@section('title','Birim Ekle')
  <div id="wrapper">

    @include('sidebar')

    <div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        
        <!-- Icon Cards-->
        <div class="row">
          <div class="col-xl-12 col-sm-12 mb-12">
            <form id="signupForm" method="post" action="birimEkle1" novalidate="novalidate">
<div class="form-group">
<label class="col-form-label" for="firstname"><b>Birim Ekle</b></label>
<input class="form-control" id="firstname" type="text" name="birim_ekle" placeholder="Birim türünü giriniz">
</div>
@csrf
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