@extends('adminlte.master')

@section('content')
    <h1>Pertanyaan</h1>
    <h2>{{$question->judul_pertanyaan}}</h2>
    <p>{{ $question->isi_pertanyaan}}</p>
    <p>Tanggal dibuat: {{ $question->tanggal_dibuat_pertanyaan}}</p>
    <p>Tanggal diperbaharui: </p> <br>

    <h1>Jawaban</h1>
    @foreach ($jawaban as $key => $jawaban)
        <p>Jawaban ke-{{$key + 1}}</p>
        <p>Isi Jawaban: {{ $jawaban->isi_jawaban}}</p>
        <p>Tanggal dibuat: {{ $jawaban->tanggal_dibuat_jawaban}}</p>
        <p>Tanggal diperbaharui: {{ $jawaban->tanggal_diperbaharui_jawaban}}</p>
    @endforeach
@endsection