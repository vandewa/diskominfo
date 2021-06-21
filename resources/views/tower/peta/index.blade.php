
@section('title', 'Detail TIket')
@section('menu','Tiket')
@section('submenu','Detail Tiket Dan Penugasan')
@extends('layouts/template-admin')
@section('kondisi8','nav-item-expanded nav-item-open')

@section('halaman')
    <span class="breadcrumb-item active">Tiket</span>
    <span class="breadcrumb-item active">Penugasan</span>
@endsection

@section('container')
    @if(session('status'))
        <div class="alert bg-success text-white alert-styled-left alert-dismissible mt-1" >
            <button type="button" class="close" data-dismiss="alert"><span>&times;</span></button>
            {{ session('status') }}
        </div>
    @endif
    <div class="content">
        <div class="card">
            <div class="cord-body">
                <div id="map"></div>
            </div>
        </div>

        <!-- CKEditor default -->

        <!-- /CKEditor default -->
    </div>
@endsection

@push('js')
    <script
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDrDZUMLkQWuGfFpUyMcCDrzY7zA1sHmBU&callback">
    </script>
    <script>
        let map;


            map = new google.maps.Map(document.getElementById("map"), {
                center: { lat: -34.397, lng: 150.644 },
                zoom: 8,
            });

    </script>


@endpush
