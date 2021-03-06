@extends('layout.bootstraplogin.index')

@section('content')
@if (Session::has('message'))
<div class="alert alert-info alert-dismissable">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    {{ Session::get('message') }}
</div>
@endif
<div class="row">
    <div class="column">
        <div class="col-sm-3"></div>
        <div class="col-sm-6">
            <div class="panel panel-danger">
                <div class="panel panel-heading">
                    <b>Form Login hahahaha </b>
                </div>
                <form class="form-horizontal" action="<?php echo URL::to("/login/proses/"); ?>" method="post">
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-3 control-label">Username</label>
                        <div class="col-sm-8">
                            <input type="email" name="email" class="form-control " placeholder="Username">
                            <p style="color: red"> {{ $errors->first('email') }} </p>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputPassword3" class="col-sm-3 control-label">Password</label>
                        <div class="col-sm-8">
                            <input type="password" name="password" class="form-control" placeholder="Password">
                            <p style="color: red"> {{ $errors->first('password') }} </p>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-info">
                                <i class="glyphicon glyphicon-log-in"></i> Login</button>
                            <button type="reset" class="btn btn-danger">
                                <i class="glyphicon glyphicon-new-window"></i> Reset</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-sm-3"></div>
    </div>
</div>
@stop

