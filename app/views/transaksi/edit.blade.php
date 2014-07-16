@extends('layout.bootstrap3.index')

@section('content')

<div class="col-sm-8">
    <div class="panel panel-primary">
        <div class="panel-heading"><i class="glyphicon glyphicon-plus"></i> Form Edit</div>
        <div class="panel-body">
            <form class="form-horizontal" action="<?php echo URL::to("/transaksi/update/" . $isi->id); ?>" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-4 control-label">ID User</label>
                    <div class="col-sm-4">
                        <input type="text" value="<?php echo $isi->users_id; ?>" readonly="" 
                               name="id" class="form-control ">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-4 control-label">ID Pelanggan</label>
                    <div class="col-sm-4">
                        <input type="text" value="<?php echo $isi->id_pelanggan; ?>" name="idp" class="form-control " placeholder="ID Pelanggan">
                        <p style="color: red"> {{ $errors->first('id') }} </p>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-4 control-label">Tanggal Pinjam</label>
                    <div class="col-sm-4">
                        <input type="text" value="<?php echo $isi->tgl_pinjam; ?>" name="tpinjam" class="form-control " placeholder="Tanggal">
                        <p style="color: red"> {{ $errors->first('Tanggal') }} </p>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-4 control-label">Tanggal Kembali</label>
                    <div class="col-sm-4">
                        <input type="text" value="<?php echo $isi->tgl_kembali; ?>" name="tkembali" class="form-control " placeholder="Tanggal">
                        <p style="color: red"> {{ $errors->first('Tanggal') }} </p>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-4 control-label">Tanggal Pengambalian</label>
                    <div class="col-sm-4">
                        <input type="text" value="<?php echo $isi->tgl_pengembalian; ?>" name="tpengembalian" class="form-control " placeholder="Tanggal">
                        <p style="color: red"> {{ $errors->first('Tanggal') }} </p>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-4 col-sm-10">
                        <button type="submit" class="btn btn-info">
                            <i class="glyphicon glyphicon-saved"></i> Perbarui</button>
                            
                        <button type="reset" class="btn btn-danger">
                            <i class="glyphicon glyphicon-info-sign"></i> Batal</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@stop