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
                    <th>Birim</th>
                    <th>Çıkkış Tarihi</th>
                    <th>Fiyat</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($hareketler as $k)
                  <tr>
                    <td>{{$k->stok_kodu}}</td>
                    <td>{{$k->stok_adi}}</td>
                    <td>{{$k->kategori}}</td>
                    <td>{{$k->birim}}</td>
                    <td>{{$k->cikis_tarihi}}</td>
                    <td>{{$k->fiyat}}</td>
                    <td>
            <div align="right" style="margin-right: 20px;">
              <a href="{{url('hareketduzenle')}}/{{$k->id}}"><button class="btn btn-info"><i class="fas fa-edit"></i></button> 
              </a>
              <a href="{{url('sil3')}}/{{$k->id}}">
                <button class="btn btn-info"><i class="fas fa-trash-alt"></i></button>
              </a>
            </div>
          </td> 
                  </tr>
                  @endforeach

                </tbody>

                
                
              </table><br>
            </div>
            <div align="right"><a href="{{url('cikisEkle')}}"><button class="btn btn-info"><i class="fas fa-plus-square"></i>&nbsp;Üürn Çıkış</element></button></a></div>
          </div>
          

        <p class="small text-center text-muted my-5">
          <em>.</em>
        </p>

      </div>
      <!-- /.container-fluid -->

      <!-- Sticky Footer -->
     @endsection