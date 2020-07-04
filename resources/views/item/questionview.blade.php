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
                <th scope="col">Jawab Pertanyaan</th>
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
                <td>
                    <a href="{{ url('/jawaban/'.$question->key)}}">
                        <input type="text" name="isi_jawaban" >
                        <input hidden name="id_pertanyaan" value="{{ $pertanyaan->id }}" >
                        <input hidden name="tanggal_dibuat_jawaban" value="{{ \Carbon\Carbon::now() }}">
                        <input hidden name="tanggal_diperbaharui_jawaban" value="{{ \Carbon\Carbon::now() }}">
                        <button class="btn btn-success">Submit</button>
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection