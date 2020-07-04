@extends('adminlte.master')

@section('content')
    <table class="table">
    <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">ID Penanya</th>
            <th scope="col">Judul Pertanyaan</th>
            <th scope="col">Isi Pertanyaan</th>
            <th scope="col">Tanggal Dibuat Pertanyaan</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($question as $key => $question)
        <tr>
            <td>{{$key + 1}}</td>
            <td>{{$question->id_penanya}}</td>
            <td>{{$question->judul_pertanyaan}}</td>
            <td>{{$question->isi_pertanyaan}}</td>
            <td>{{$question->tanggal_dibuat_pertanyaan}}</td>
        </tr>
        @endforeach
    </tbody>
    </table>
@endsection