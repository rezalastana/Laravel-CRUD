@extends('adminlte.master')

@section('content')
    <table class="table">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Isi Jawaban</th>
                <th scope="col">Tanggal Dibuat Jawaban</th>
                <th scope="col">Tanggal Diperbaharui Jawaban</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($jawaban as $key => $jawaban)
            <tr>
                <td>{{$key + 1}}</td>
                <td>{{$jawaban->isi_jawaban}}</td>
                <td>{{$jawaban->tanggal_dibuat_jawaban}}</td>
                <td>{{$jawaban->tanggal_diperbaharui_jawaban}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection