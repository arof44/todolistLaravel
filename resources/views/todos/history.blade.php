@extends('app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-xl-12">
            <div class="panel panel-default">
                <div class="panel-heading">Riwayat</div>
                <div class="panel-body">
                    <a href="{{ url('/') }}" class="btn btn-primary">Kembali</a>

                    <br>
                    <br>
                    <br>

                    <div class="table-responsive">
                        <table class="table">
                            <tr>
                                <th>Surat</th>
                                <th>Kegiatan</th>
                                <th>Tanggal</th>
                                <th>Pukul</th>
                                <th>Tempat</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>

                            @if(! count($todos))
                            <tr>
                                <td colspan="6">Belum Ada Kegiatan</td>
                            </tr>
                            @endif
                            @foreach($todos as $todo)
                            @if($todo->is_done == 'Selesai')
                            <tr>
                                <td>{{ $todo->surat }}</td>
                                <td>{{ $todo->kegiatan }}</td>
                                <td>{{ $todo->tanggal }}</td>
                                <td>{{ $todo->pukul }}</td>
                                <td>{{ $todo->tempat }}</td>
                                <td>{{ $todo->is_done }}</td>
                                <td>
                                    <!-- <a class="btn btn-warning" href="{{ url('todos/'.$todo->id.'/edit') }}">Edit</a> -->
                                    <a class="btn btn-danger" href="{{ url('todos/'.$todo->id.'/delete') }}">Delete</a>
                                </td>
                            </tr>
                            @endif
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection