@extends('app')
@section('content')
<div id="wrapper">

  @include('sidebar')

  <div id="content-wrapper">

    <div class="container-fluid">

      <!-- Breadcrumbs-->
      
      <!-- Icon Cards-->
      <p><p style="color:black;font-family:tahoma;font-weight:bold;font-size:125%">Uygulama /<a style="color:#c01616;font-family:tahoma;font-weight:bold;font-size:125%"> Panel</a> <hr>
        <div class="row">
          <div class="col-xl-4 col-sm-4 mb-3">
            <div class="card text-white bg-primary o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                 <font color="white"><i class="fas fa-sort-amount-down"></i></font>
               </div>
               <div class="mr-5"><font color="white"><b>0 Ürün</b></font></div>
             </div>
             <a class="card-footer text-white clearfix small z-1" href="{{url('urun')}}">
              <span class="float-left"><font color="blue">Tüm Ürünler</font></span>
              <span class="float-right">
                
                <font color="blue"><i class="fas fa-arrow-alt-circle-right"></i></font>
              </span>
            </a>
          </div>
        </div>
        <div class="col-xl-4 col-sm-4 mb-3">
          <div class="card text-white bg-warning o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <font color="white"><i class="fas fa-sort-amount-up"></i></font>
              </div>
              <div class="mr-5"><font color="white"><b>0 Ürün</b></font></div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="">
              <span class="float-left"><font color="red">Ürün Çıkış</font></span>
              <span class="float-right">
               <font color="red"><i class="fas fa-arrow-alt-circle-right"></i></font>
             </span>
           </a>
         </div>
       </div>
       <div class="col-xl-4 col-sm-4 mb-3">
        <div class="card text-white bg-success o-hidden h-100">
          <div class="card-body">
            <div class="card-body-icon">
             <font color="white"> <i class="fas fa-fw fa-list"></i></font>
           </div>
           <div class="mr-5"><font color="white"><b>0 Ürün</b></font></div>
         </div>
         <a class="card-footer text-white clearfix small z-1" href="hareketler">
          <span class="float-left"><font color="green">Hareketler</font></span>
          <span class="float-right">
           <font color="green"><i class="fas fa-arrow-alt-circle-right"></i></font>
         </span>
       </a>
     </div>
   </div>
 </div>


 
</div>
<!-- /.container-fluid -->

@endsection