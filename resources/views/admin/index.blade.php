@extends('layouts/main')

@section('title','Data pendaftar')
@section('content')
<h1 class="h3">Data Pendaftar</h1>
    {{-- <a href="{{route('pengajuan.create')}}">
        <button type="button" class="btn btn-primary btn-sm float-end">+Tambah Data</button>
    </a> --}}
    <div class="col-12 col-sm-6">
        {{-- Input Group. Sumber : https://getbootstrap.com/docs/4.0/components/input-group/ --}}
        <div class="input-group mb-3">
            <input type="text" name="nama" class="form-control" placeholder="" aria-label="Seacrh " aria-describedby="basic-addon2">
            <div class="input-group-append">
                <button class="btn btn-success" type="submit">Search</button>
            </div>
        </div>
    </div>
<table class="table">
    <thead>
        <tr>
            <th>Nama</th>
            <th></th>
            <th>Nama Ayah</th>
            <th></th>
            <th>Nama Ibu</th>
            <th></th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($data as $item)
            <tr>
                <td>{{ $item->nama }}</td>
                <td></td>
                <td>{{ $item->nama_ayah }}</td>
                <td></td>
                <td>{{ $item->nama_ibu }}</td>
                <td></td>
                <td>
                    <a href="{{route('registration-admin.show', [$item->id])}}" class="btn btn-secondary btn-sm">Detail</a>
                    
                    <a href="{{ route('registration-admin.edit', [$item->id]) }}" class="btn btn-warning btn-sm">Edit</a>

                    <form class="d-inline" action="{{route('registration-admin.destroy', [$item->id])}}" method="POST" onsubmit="return confirm('Yakin hapus data?')">
                        @csrf
                        @method('delete')
                        <button class="btn btn-danger btn-sm" type="submit">Delete</button>
                    </form>
                </td>
                
            </tr>
        @endforeach
        {{-- @dd($data) --}}
    </tbody>   
</table>
{{ $data->links() }}   
@endsection