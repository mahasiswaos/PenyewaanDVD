@extends('layout.bootstrap3.index')

@section('content')

<div class="col-sm-8">
    <div class="panel panel-primary">
        <div class="panel-heading"><i class="glyphicon glyphicon-plus"></i> Form Add </div>
        <div class="panel-body">
            <form class="form-horizontal" action="<?php echo URL::to("/transaksi/prosesAdd"); ?>" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-4 control-label">User</label>
                    <div class="col-sm-4">
                        <select class="form-control" name="id">
                            <option value="" disabled="" selected="">Pilih Username...!</option>
                            <?php foreach ($isi as $value) { ?>
                                <option name="id"value="<?php echo $value->id ?>"><?php echo $value->username ?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-4 control-label">ID Pelanggan</label>
                    <div class="col-sm-4">
                        <select class="form-control" name="idp">
                            <option value="" disabled="" selected="">Pilih Pelanggan...!</option>
                            <?php foreach ($pela as $val) { ?>
                                <option name="idp" value="<?php echo $val->id ?>"><?php echo $val->id ?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-4 control-label">Tanggal Pinjam</label>
                    <div class="col-sm-4">
                        <input type="date" name="tpinjam" class="form-control " placeholder="Tgl Pinjam">
                        <p style="color: red"> {{ $errors->first('Tanggal') }} </p>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-4 control-label">Tanggal Kembali</label>
                    <div class="col-sm-5">
                        <input type="date" name="tkembali" class="form-control" placeholder="tgl kembali">
                        <p style="color: red"> {{ $errors->first('Tanggal') }} </p>
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-4 control-label">Tanggal Pengembalian</label>
                    <div class="col-sm-5">
                        <input type="date" name="tpengembalian" class="form-control" placeholder="Tanggal">
                        <p style="color: red"> {{ $errors->first('tgl_pengembalian') }} </p>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-4 col-sm-10">
                        <button type="submit" class="btn btn-primary">
                            <i class="glyphicon glyphicon-saved"></i> Simpan</button>

                        <button type="reset" class="btn btn-danger">
                            <i class="glyphicon glyphicon-warning-sign"></i> Batal</button>
                    </div>
                </div>
            </form>
        </div>
    </div>



    @stop