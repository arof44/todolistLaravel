@extends('app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-xl-12">
            <div class="panel panel-default">
                <div class="panel-heading">Tambah Jadwal Kegiatan</div>
                <div class="panel-body">
                    <form role="form" method="post" action="{{ url('/todos') }}">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label class="control-label">kegiatan</label>
                            <input type="text" name="kegiatan" class="form-control">

                            <label class="control-label">Tanggal</label>
                            <input type="text" name="tanggal" class="date form-control">

                            <label class="control-label">Pukul</label>
                            <input type="text" name="pukul" class="form-control">

                            <label class="control-label">Tempat</label>
                            <input type="text" name="tempat" class="form-control">

                            <label class="control-label">Surat</label>
                            <input type="file" name="surat" class="form-control">
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Tambah Jadwal</button>
                            <a href="{{ url('/') }}" class="btn btn-primary">Kembali</a>
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