@extends('Dashboard')
@section('content')


<h3>Data Anggota</h3>
 
<a href="#"> + Tambah Anggota</a>

<br/>
<br/>

<table  class="table">
    <tr>
        <th>No</th>
        <th>Nama Anggota</th>
        <th>Tanggal Regristrasi</th>
    </tr>
    @foreach($anggota as $Get)
    <tr>
        <td>{{ $Get->id_anggota }}</td>
        <td>{{ $Get->nama_anggota }}</td>
        <td>{{ $Get->tgl_reg }}</td>
        <td>
            <a href="/anggota/edit/{{ $Get->id_anggota }}">Edit</a>
            |
            <a href="/anggota/hapus/{{ $Get->id_anggota }}">Hapus</a>
        </td>
    </tr>
    @endforeach
</table>
    
@endsection
