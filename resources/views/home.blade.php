@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="row">
                <div class="col-md-12 mb-4">
                    <div class="card">
                        <div class="card-header">Hello, {{ Auth::user()->name }} !</div>
                        <div class="card-body">
                            <p>Aplikasi ini menerapkan <i>package</i> <a href="https://laravel-excel.com/"
                                    target="_blank">Laravel Excel</a></p>
                            Dengan fitur sebagai berikut:
                            <ol>
                                <li><i>Import</i></li>
                                <li><i>Export</i></li>
                            </ol>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 mb-4">
                    <div class="card">
                        <div class="card-header">Form Import</div>
                        <div class="card-body">
                            @if(session('status'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <strong>Yeay!</strong> {{ session('status') }}.
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            @endif
                            <form action="{{ route('import') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label>File <span class="text-danger">*</span></label>
                                    <div class="custom-file">
                                        <input type="file" name="upload" class="custom-file-input" id="customFile">
                                        <label class="custom-file-label" for="customFile">Choose file</label>
                                    </div>
                                    <small class="form-text text-muted">Format yang didukung: xlsx,xls,csv. Maksimum
                                        2MB</small>
                                    @error('upload')<p class="text-danger">{{ $message }}</p>@enderror
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Unggah</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Peoples <a href="{{ route('export') }}"
                        class="btn btn-sm btn-success float-right">Export</a>
                </div>
                <div class="card-body">
                    <div class="container">
                        <div class="row">
                            @forelse($people as $item)
                            <div class="col-md-4 mt-2 mb-2">
                                <div class="card">
                                    <div class="card-body">
                                        <p>Nama: <br> {{ $item->name }}</p>
                                        <p>HP: <br> {{ $item->phone }}</p>
                                        <p class="text-truncate">Alamat: <br> {{ $item->address }}</p>
                                    </div>
                                </div>
                            </div>
                            @empty
                            <div class="col-md-12">
                                <h1>Data not found...</h1>
                            </div>
                            @endforelse
                        </div>
                        {{ $people->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection