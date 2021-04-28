
@section('title', 'Dinas Kominfo Wonosobo  | Visi & Misi')
@extends('layouts/main')
@section('isi')
@section('kondisi')
<header id="header" class="header header-box-shadow-on-scroll header-abs-top header-bg-transparent header-black-nav-links-lg header-show-hide"
          data-hs-header-options='{
              "fixMoment": 1000,
              "fixEffect": "slide"
            }'>
@endsection

@section('kondisi2')
<i class="fas fa-user-circle fa-lg" style="color:black"></i>
@endsection


<br>
  <!-- ========== MAIN ========== -->
  <main id="content" role="main">
    <!-- Article Description Section -->
    <div class="container space-top-1 space-bottom-2">
      <div class="w-lg-60 mx-lg-auto">
        <div class="mb-4">
        </div>
        <!-- Author -->
        <br>
    <img class="img-fluid w-100" src="uploads/{{$visimisi->file_name??''}}" alt="Image Description">
</center>
<br>

        <!-- End Author -->
        <div style="
            text-align:justify;  
            text-justify:auto;
            color:black;
            text-indent: 40px;
        ">
        {!! $visimisi->isi_posting !!}
        </div>
      </div>

      <div class="w-lg-60 mx-lg-auto">
        
      <div class="w-lg-60 mx-lg-auto">
               
      <div class="w-lg-40 mx-lg-auto">

      </div>
    </div>
    <!-- End Subscribe Section -->
  </main>
  <!-- ========== END MAIN ========== -->


@endsection