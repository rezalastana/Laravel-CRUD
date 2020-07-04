@extends('adminlte.master')

@section('content')
<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">New Question</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form action="/pertanyaan" method="POST">
        @csrf
        <div class="card-body">
            <div class="form-group">
                <label for="id_penanya">ID Penanya:</label>
                <input type="text" class="form-control" id="id" name="id_penjawab">
            </div>

            <div class="form-group">
                <label for="judul_pertanyaan">Isi Jawaban</label>
                <input type="text" class="form-control" id="isi_jawaban" name="isi_jawaban">
            </div>

            <div class="form-group">
                <label for="isi_pertanyaan">Tanggak Dibuat Jawaban:</label>
                <input type="text" class="form-control" id="tanggal_dibuat_jawaban" name="tanggal_dibuat_jawaban">
            </div>

            <div class="form-group">
                <label for="tanggal_pertanyaan">Tanggal Diperbarui Jawaban:</label>
                <input type="date" class="form-control" id="tanggal_diperbarui_jawaban" name="tanggal_diperbarui_jawaban">
            </div>
        </div>
        
        <!-- /.card-body -->

        <div class="card-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>

@endsection