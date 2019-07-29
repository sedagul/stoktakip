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
            Birim Seç</div>
          <div class="card-body">
            <div class="table-responsive">

              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    
                    <th>Birim</th>
                   <th>#</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($birim as $s)
                  <tr>
                   
                    <td>{{$s->birim_ekle}}</td>
           <td>
            <div align="right" style="margin-right: 20px;">
              <a href="{{url('duzenle')}}/{{$s->id}}"><button class="btn btn-info">Düzenle</button> 
              </a>
              <a href="{{url('sill')}}/{{$s->id}}">
                <button class="btn btn-info">Sil</button>
              </a>
            </div>
          </td> 
                  </tr>
                  @endforeach

                </tbody>

                
                
              </table><br>
            
         <a href="{{url('birimEkle')}}"> <button class="btn btn-info" >Ekle</button></a>

        <p class="small text-center text-muted my-5">
          <em>.</em>
        </p>

      </div>
      <!-- /.container-fluid -->

      <!-- Sticky Footer -->
     @endsection