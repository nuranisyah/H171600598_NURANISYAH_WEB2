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
		<tittle>Kategori Berita</tittle>
			<tr>
				<td>Id</td>
				<td>Nama</td>
				<td>Users id</td>


              </div>
             </div>
            </div>


			</tr>
		@foreach($KategoriBerita as $item)
		<tr>
			<td>{!! $item->id !!}</td>
			<td>{!! $item->nama !!}</td>
			<td>{!! $item->users_id !!}</td>
		</tr>
	
		@endforeach
		
		</table>
		</div>

		@endsection