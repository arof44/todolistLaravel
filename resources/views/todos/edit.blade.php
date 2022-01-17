@extends('app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="panel panel-default">
                <div class="panel-heading">Todo List</div>
                <div class="panel-body">
                    <form role="form" method="post" action="{{ url('/todos/'. $todo->id) }}">
                        {{ csrf_field() }}

                        {{ method_field('put') }}

                        <div class="form-group">
                            <label class="control-label">Kegiatan</label>
                            <input type="text" name="kegiatan" class="form-control" value="{{ $todo->kegiatan }}">

                            <label class="control-label">Tanggal</label>
                            <input type="text" name="tanggal" class="form-control" value="{{ $todo->tanggal }}">

                            <label class="control-label">Pukul</label>
                            <input type="text" name="pukul" class="form-control" value="{{ $todo->pukul }}">

                            <label class="control-label">Tempat</label>
                            <input type="text" name="tempat" class="form-control" value="{{ $todo->tempat }}">
                        </div>

                        <div class="form-group">
                            <label class="control-label">Is Done</label>
                            <div class="radio">
                                <label>
                                    <input type="radio" value="Done" name="is_done"> Done
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" value="Not Done" name="is_done"> Not Done
                                </label>
                            </div>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Update Todo</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection