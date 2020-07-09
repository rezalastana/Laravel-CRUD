@extends('adminlte.master')

@section('content')
            <form action="{{ url('/pertanyaan/'.$id_pertanyaan)}}" method="POST">
                {{ method_field('put')}}
                @csrf
                <input hidden name="id_pertanyaan" value="{{$id_pertanyaan}}">
                <div class="card-body">
                    <div class="form-group">
                        <label for="judul_pertanyaan">Judul Pertanyaan:</label>
                        <input type="text" class="form-control" id="judul_pertanyaan" name="judul_pertanyaan" value="{{ $question->judul_pertanyaan }}">
                    </div>

                    <div class="form-group">
                        <label for="isi_pertanyaan">Isi Pertanyaan:</label>
                        <input type="text" class="form-control" id="isi_pertanyaan" name="isi_pertanyaan" value="{{ $question->isi_pertanyaan }}"></input>
                    </div>

                    <div class="form-group">
                        <input hidden type="text" class="form-control" id="tanggal_dibuat_pertanyaan" name="tanggal_diperbaharui_pertanyaan" value="{{ $question->tanggal_dibuat_pertanyaan }}"></input>
                    </div>

                    <div class="form-group">
                        <input hidden type="text" class="form-control" id="tanggal_diperbaharui_pertanyaan" name="tanggal_diperbaharui_pertanyaan" value="{{ \Carbon\Carbon::now() }}"></input>
                    </div>

                </div>

                <div class="card-footer">
                    <button type="submit" class="btn btn-success">Update Pertanyaaan</button>
                </div>
            </form>
@endsection