@extends('Dashboard')
@section('content')


<h3>Data Buku</h3>
 
<a href="#"> + Tambah Petugas</a>

<br/>
<br/>

<table class="table">
    <tr>
        <th>No</th>
        <th>Nama Petugas</th>
    </tr>
    @foreach($petugas as $Get)
    <tr>
        <td>{{ $Get->id_petugas }}</td>
        <td>{{ $Get->nama_petugas }}</td>
        <td>
            <a href="/petugas/edit/{{ $Get->id_petugas }}">Edit</a>
            |
            <a href="/petugas/hapus/{{ $Get->id_petugas }}">Hapus</a>
        </td>
    </tr>
    @endforeach
</table>

    
@endsection
