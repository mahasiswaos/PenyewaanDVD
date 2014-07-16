@extends('layout.bootstrap3.index')

@section('content')

<div class="col-sm-8">
    <div class="panel panel-info">
        <div class="panel-heading"><i class="glyphicon glyphicon-plus"></i> Form Add User</div>
        <div class="panel-body">
            <form class="form-horizontal" action="<?php echo URL::to("/user/prosesAdd"); ?>" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label class="col-sm-2 control-label">Username</label>
                    <div class="col-sm-4">
                        <input type="text" name="user" class="form-control " placeholder="Username">
                        <p style="color: red"> {{ $errors->first('username') }} </p>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Password</label>
                    <div class="col-sm-4">
                        <input type="password" name="pass" class="form-control" placeholder="Password">
                        <p style="color: red"> {{ $errors->first('password') }} </p>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Email</label>
                    <div class="col-sm-5">
                        <input type="email" name="email" class="form-control" placeholder="Email">
                        <p style="color: red"> {{ $errors->first('email') }} </p>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-info">
                            <i class="glyphicon glyphicon-saved"></i> Simpan</button>
                            
                        <button type="reset" class="btn btn-danger">
                            <i class="glyphicon glyphicon-warning-sign"></i> Batal</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="col-sm-4">
    <div class="panel panel-info">
        <div class="panel-heading">
            <i class="glyphicon glyphicon-info-sign"></i> Just Info</div>

        <div class="jumbotron">
            <table class="table">
                <tr><td>1.</td>
                    <td>Isi dengan lengkap biodata pada form di samping.</td>
                </tr>
                <tr><td>2.</td>
                    <td>Periksa kembali isi data yang akan anda simpan.</td>
                </tr>
                <tr><td>3.</td>
                    <td>KlIik tombol simpan untuk menyimpan data.</td>
                </tr>
            </table>
        </div>
    </div>
</div>
@stop