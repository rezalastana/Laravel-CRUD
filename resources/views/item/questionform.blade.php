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
            <input type="text" class="form-control" id="id" name="id_penanya">
        </div>

        <div class="form-group">
            <label for="judul_pertanyaan">Judul Pertanyaan:</label>
            <input type="text" class="form-control" id="judul_pertanyaan" name="judul_pertanyaan">
        </div>

        <div class="form-group">
            <label for="isi_pertanyaan">Isi Pertanyaan:</label>
            <input type="text" class="form-control" id="isi" name="isi_pertanyaan">
        </div>
        
        <input hidden name="tanggal_dibuat_pertanyaan" value="{{ \Carbon\Carbon::now() }}"> 
        
        </div>
        
        <!-- /.card-body -->

        <div class="card-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>

@endsection