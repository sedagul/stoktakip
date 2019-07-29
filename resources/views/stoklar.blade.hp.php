@extends('app')
@section('content')
  <div id="wrapper">

   @include('sidebar')

    <div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        
        <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Ürünler</div>
          <div class="card-body">
            <div class="table-responsive">

              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>Stok Kodu</th>
                    <th>Stok Adı</th>
                    <th>Kategori</th>
                    <th>Birimi</th>
                    <th>FiyatI</th>
                    <th>Açıklama</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($urunler as $s)
                  <tr>
                    <td>{{$s->stok_kodu}}</td>
                    <td>{{$s->urun_adi}}</td>
                    <td>{{$s->kategori}}</td>
                    <td>{{$s->birimi}}</td>
                    <td>{{$s->fiyatı}}</td>
                    <td>{{$s->aciklama}}</td>
                  </tr>
                  @endforeach

                </tbody>

                
                
              </table><br>
            </div>
            <div align="right"><a href="{{url('yeniEkle')}}"><button class="btn btn-info">Yeni Ürün</button></a></div>
          </div>
          

        <p class="small text-center text-muted my-5">
          <em>.</em>
        </p>

      </div>
      <!-- /.container-fluid -->

      <!-- Sticky Footer -->
     @endsection