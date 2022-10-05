@extends('Dashboard')
@section('content')


<h3>Data Buku</h3>
 
<a href="#"> + Tambah Buku Baru</a>

<br/>
<br/>

<table  class="table">
    <tr>
        <th>No</th>
        <th>Barcode</th>
        <th>Judul</th>
        <th>Pengarang</th>
        <th>Penerbit</th>
    </tr>
    @foreach($buku as $Get)
    <tr>
        <td>{{ $Get->kd_buku }}</td>
        <td>{{ $Get->barcode }}</td>
        <td>{{ $Get->judul }}</td>
        <td>{{ $Get->pengarang }}</td>
        <td>{{ $Get->penerbit }}</td>
        <td>
            <a href="/buku/edit/{{ $Get->kd_buku }}">Edit</a>
            |
            <a href="/buku/hapus/{{ $Get->kd_buku }}">Hapus</a>
        </td>
    </tr>
    @endforeach
</table>

    
@endsection
