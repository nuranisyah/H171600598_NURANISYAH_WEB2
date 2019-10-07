@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center">Kategori Artikel</div>
                <div class="card-body text-center">
				
             
<body >
		<table border="1 ">
		
			<tr>
				<td>Id</td>
				<td>Nama</td>
				<td>Users id</td>
				<td>Aksi</td>


              </div>
             </div>
            </div>


			</tr>
		@foreach($KategoriArtikel as $item)
		<tr>
			<td>{!! $item->id !!}</td>
			<td>{!! $item->nama !!}</td>
			<td>{!! $item->users_id !!}</td>
			
			<td><a href="{!! route('Kategori_Artikel.show',[$item-> id]) !!}" button class="btn btn -sm btn-success " >Lihat Detail</a></td>
		</tr>
	
		@endforeach
		
		</table>
		</div>

		@endsection