@extends('app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-xl-12">
            <div class="panel panel-default">
                <div class="panel-heading">Edit Jadwal Kegiatan</div>
                <div class="panel-body">
                    <form role="form" method="post" action="{{ url('/todos/'. $todo->id) }}">
                        {{ csrf_field() }}

                        {{ method_field('put') }}

                        <div class="form-group">
                            <label class="control-label">Kegiatan</label>
                            <input type="text" name="kegiatan" class="form-control" value="{{ $todo->kegiatan }}">

                            <label class="control-label">Tanggal</label>
                            <input type="text" name="tanggal" class="date form-control" value="{{ $todo->tanggal }}">

                            <label class="control-label">Pukul</label>
                            <input type="text" name="pukul" class="form-control" value="{{ $todo->pukul }}">

                            <label class="control-label">Tempat</label>
                            <input type="text" name="tempat" class="form-control" value="{{ $todo->tempat }}">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                            <a href="{{ url('/') }}" class="btn btn-primary">Back</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $('.date').datepicker({
        format: 'dd-mm-yyyy'
    });
</script>
@endsection