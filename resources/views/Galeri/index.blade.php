@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center">Dashboard</div>
                <div class="card-body text-center">
             
<body >
		<table border="1 ">
		<tittle>Galeri</tittle>
			<tr>
				<td>Id</td>
				<td>Nama</td>
				<td>Path</td>
				<td>Users id</td>
				<td>Kategori Galeri Id</td>


              </div>
             </div>
            </div>


			</tr>
		@foreach($Galeri as $item)
		<tr>
			<td>{!! $item->id !!}</td>
			<td>{!! $item->nama !!}</td>
			<td>{!! $item->keterangan !!}</td>
			<td>{!! $item->path !!}</td>
			<td>{!! $item->users_id !!}</td>
			<td>{!! $item->kategori_galeri_id !!}</td>
		</tr>
	
		@endforeach
		
		</table>
		</div>

		@endsection