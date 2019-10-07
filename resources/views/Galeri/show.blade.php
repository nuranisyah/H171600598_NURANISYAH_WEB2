@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Show an Article') }}</div>

                <div class="card-body">
                    @csrf

                    <div class="form-group row">
                        <label for="judul" class="col-md-3 col-form-label text-md-right">Category</label>
                        <label for="judul" class="col-md-6 col-form-label text-md-left">{{ $Galeri->kategori_galeri_id }}</label>
                    </div>

                    <div class="form-group row">
                        <label for="judul" class="col-md-3 col-form-label text-md-right">Title</label>
                        <label for="judul" class="col-md-6 col-form-label text-md-left">{{ $Galeri->judul }}</label>
                    </div>

                    <div class="form-group row">
                        <label for="judul" class="col-md-3 col-form-label text-md-right">Content</label>
                        <label for="judul" class="col-md-6 col-form-label text-md-left">{{ $Galeri->isi }}</label>
                    </div>

                    <div class="form-group row">
                        <label for="judul" class="col-md-3 col-form-label text-md-right">Created At</label>
                        <label for="judul" class="col-md-6 col-form-label text-md-left">{{ $Galeri->created_at }}</label>
                    </div>

                    <div class="form-group row">
                        <label for="judul" class="col-md-3 col-form-label text-md-right">Last Updated</label>
                        <label for="judul" class="col-md-6 col-form-label text-md-left">{{ $Galeri->updated_at }}</label>
                    </div>

                    <div class="form-group row">
                        <label for="judul" class="col-md-3 col-form-label text-md-right">Publisher</label>
                        <label for="judul" class="col-md-6 col-form-label text-md-left">{{ $Galeri->users_id }}</label>
                    </div>

                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection