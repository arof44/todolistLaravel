@extends('app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Jadwal Kegiatan</div>
                <div class="panel-body">
                    <a href="{{ url('/') }}" class="btn btn-primary">Back</a>

                    <br>
                    <br>
                    <br>

                    <div class="table-responsive">
                        <table class="table">
                            <tr>
                                <th>Kegiatan</th>
                                <th>Tanggal</th>
                                <th>Pukul</th>
                                <th>Tempat</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>

                            @if(! count($todos))
                            <tr>
                                <td colspan="3">No Todo</td>
                            </tr>
                            @endif
                            @foreach($todos as $todo)
                            @if($todo->is_done == 'Done')
                            <tr>
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