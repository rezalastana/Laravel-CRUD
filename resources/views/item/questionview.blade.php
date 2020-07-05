@extends('adminlte.master')

@section('content')
    <table class="table">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Judul Pertanyaan</th>
                <th scope="col">Isi Pertanyaan</th>
                <th scope="col">Form Jawaban</th>
                <th scope="col">Detail Jawaban</th>
                <th scope="col">Detail Pertanyaan dan Jawaban</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($question as $key => $question)
            <tr>
                <td>{{$key + 1}}</td>
                <td>{{$question->judul_pertanyaan}}</td>
                <td>{{$question->isi_pertanyaan}}</td>
                <td>
                    <form action="{{ url('/jawaban/'.$question->id_pertanyaan) }}" method="POST">
                        @csrf
                        <input type="text" name="isi_jawaban" >
                        <input hidden name="is_selected" value="{{ $question->id_pertanyaan }}" >
                        <input hidden name="tanggal_dibuat_jawaban" value="{{ \Carbon\Carbon::now() }}">
                        <input hidden name="tanggal_diperbaharui_jawaban" value="{{ \Carbon\Carbon::now() }}">
                        <button class="btn btn-success">Submit</button>
                    </form>
                </td>
                <td>
                    <a href="{{ url('/jawaban/'.$question->id_pertanyaan)}}">
                        <button class="btn btn-primary">Lihat Jawaban</button>
                    </a>
                </td>
                <td>
                    <a href="{{ url('/pertanyaan/'.$question->id_pertanyaan)}}">
                        <button class="btn btn-primary">Lihat Detail</button>
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ url('/pertanyaan/create') }}">
        <button class="btn btn-primary"> Create New Question</button>
    </a>
@endsection