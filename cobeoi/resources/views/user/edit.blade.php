@extends('section.base')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-5">
                <div class="card">
                    <div class="card-header">
                        Edit Data
                    </div>
                    <div class="card-body">
                        <form action="{{ url('admin/user', $user->id) }}" method="post">
                            @csrf
                            @method("PUT")
                            <div class="form-group">
                                <label for="" class="control-label">Nama</label>
                                <input type="text" class="form-control" name="Nama"  value="{{ $user->nama }}">
                            </div>
                            <div class="form-group">
                                <label for="" class="control-label">username</label>
                                <input type="text" class="form-control" name="Username" value="{{ $user->username }}">
                            </div>
                            <div class="form-group">
                                <label for="" class="control-label">email</label>
                                <input type="Email" class="form-control" name="Email" value="{{ $user->email }}">
                            </div>
                            <div class="form-group">
                                <label for="" class="control-label">password</label>
                                <input type="Password" class="form-control" name="Password">
                            </div>

                            <button class="btn btn-dark float-right"><i class="fa fa-save"></i> Save</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
