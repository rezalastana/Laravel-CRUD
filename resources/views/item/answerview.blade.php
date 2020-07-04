@extends('adminlte.master')

@section('content')
    <table class="table">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">ID Penjawab</th>
                <th scope="col">Isi Jawaban</th>
                <th scope="col">Tanggal Dibuat Jawaban</th>
                <th scope="col">Tanggal Diperbaharui Jawaban</th>
                <th scope="col">ID Pertanyaan</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($answer as $key => $jawaban)
            <tr>
                <td>{{$key + 1}}</td>
                <td></td>
                <td>{{$jawaban->id_penjawab}}</td>
                <td>{{$jawaban->isi_jawaban}}</td>
                <td>{{$jawaban->tanggal_dibuat_jawaban}}</td>
                <td>{{$jawaban->tanggal_diperbaharui_jawaban}}</td>
                <td>{{$jawaban->is_selected}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection