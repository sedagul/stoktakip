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
            Hareketler</div>
          <div class="card-body">
            <div class="table-responsive">

              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>Stok Kodu</th>
                    <th>Stok Adı</th>
                    <th>Kategori</th>
                    <th>Birimi</th>
                    <th>Çıkış Tarihi</th>
                    <th>Fiyat</th>
                  </tr>
                </thead>
                <tbody>
                  
                  <tr>
                    <td>1234</td>
                    <td>noır</td>
                    <td>çikolata</td>
                    <td>kg</td>
                    <td>02.02.2019</td>
                    <td>50</td>
                    <td>
            <div align="right" style="margin-right: 20px;">
              <a href=""><button class="btn btn-info">Düzenle</button> 
              </a>
              <a href="">
                <button class="btn btn-info">Sil</button>
              </a>
            </div>
          </td> 
                  </tr>
                 

                </tbody>

                
                
              </table><br>
            </div>
            <div align="right"><a href="{{url('cikisEkle')}}"><button class="btn btn-info">ÇıkışYap</button></a></div>
          </div>
          

        <p class="small text-center text-muted my-5">
          <em>.</em>
        </p>

      </div>
      <!-- /.container-fluid -->

      <!-- Sticky Footer -->
     @endsection