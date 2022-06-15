@section('title', 'Daily Work Recap ')
@section('menu','Layanan')
@section('submenu','List Daily Work Recap')
@extends('layouts/template-admin')
@section('kondisi14','active')

@section('halaman')
<span class="breadcrumb-item active">Daily Work Recap</span>
@endsection

@section('container')

<div class="content">
	<div class="card">
		<div class="card-header header-elements-inline">
		<h5 >Detail Daily Work Recap</h5>
		</div>

		<div class="card-body">
			 {{Form::model($data, ['route' => ['daily-work-recap.update', $data->id],'method' => 'put', 'files' =>
            'true', ''])}}

            @include('daily-work-recap.form')

			{{Form::close()}}
		</div>
	</div>
</div>
@endsection
