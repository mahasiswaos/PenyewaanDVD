@extends('layout.bootstrap3.index')

@section('content')

<div class="col-sm-8">
    <div class="panel panel-info">
        <div class="panel-heading"><i class="glyphicon glyphicon-plus"></i> Form Edit User</div>
        <div class="panel-body">
            <form class="form-horizontal" action="<?php echo URL::to("/user/update/" . $isi->id); ?>" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">ID</label>
                    <div class="col-sm-4">
                        <input type="text" value="<?php echo $isi->id; ?>" readonly="" 
                               name="id" class="form-control ">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">Username</label>
                    <div class="col-sm-4">
                        <input type="text" value="<?php echo $isi->username; ?>" name="user" class="form-control " placeholder="Username">
                        <p style="color: red"> {{ $errors->first('User') }} </p>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">Password</label>
                    <div class="col-sm-4">
                        <input type="text" value="<?php echo $isi->password; ?>" name="pass" class="form-control " placeholder="Password">
                        <p style="color: red"> {{ $errors->first('password') }} </p>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">Email</label>
                    <div class="col-sm-4">
                        <input type="text" value="<?php echo $isi->email; ?>" name="email" class="form-control " placeholder="Email">
                        <p style="color: red"> {{ $errors->first('Email') }} </p>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-10">
                        <button type="submit" class="btn btn-info">
                            <i class="glyphicon glyphicon-saved"></i> Update</button>
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
                    <td>Edit biodata CD & DVD pada form di samping.</td>
                </tr>
                <tr><td>2.</td>
                    <td>Periksa kembali isi data yang akan di edit.</td>
                </tr>
                <tr><td>3.</td>
                    <td>KlIik tombol Update untuk menyimpan hasil edit.</td>
                </tr>
            </table>
        </div>
    </div>
</div>
@stop