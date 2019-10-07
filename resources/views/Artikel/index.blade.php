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
		<tittle>Artikel</tittle>
			<tr>
				<td>Id</td>
				<td>Judul</td>
				<td>Isi</td>
				<td>Users id</td>
				<td>Kategori Artikel id</td>


              </div>
             </div>
            </div>


			</tr>
		@foreach($Artikel as $item)
		<tr>
			<td>{!! $item->id !!}</td>
			<td>{!! $item->judul !!}</td>
			<td>{!! $item->isi !!}</td>
			<td>{!! $item->users_id !!}</td>
			<td>{!! $item->kategori_artikel_id!!}</td>
		</tr>
	
		@endforeach
		
		</table>
		</div>

		@endsection