@extends('layout.bootstrap3.index')

@section('content')

<div class="col-sm-8">
    <div class="panel panel-primary">
        <div class="panel-heading"><i class="glyphicon glyphicon-plus"></i> Form Add Data Pelanggan</div>
        <div class="panel-body">
            <form class="form-horizontal" action="<?php echo URL::to("/pelanggan/prosesAdd"); ?>" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">User</label>
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
                    <label for="inputEmail3" class="col-sm-3 control-label">Nama</label>
                    <div class="col-sm-4">
                        <input type="text" name="nama" class="form-control " placeholder="Nama">
                        <p style="color: red"> {{ $errors->first('nama') }} </p>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">Jenis Kelamin</label>
                    <div class="col-sm-4">
                        <select class="form-control" name="jk">
                            <option value="" disabled="" selected="">Pilih Kelamin...!</option>
                            <option value="Laki - Laki">Laki - Laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                        <p style="color: red"> {{ $errors->first('Jenia Kelamin') }} </p>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">Alamat</label>
                    <div class="col-sm-4">
                        <input type="text" name="alamat" class="form-control " placeholder="Alamat">
                        <p style="color: red"> {{ $errors->first('Alamat') }} </p>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">Pekerjaan</label>
                    <div class="col-sm-4">
                        <input type="text" name="pekerjaan" class="form-control " placeholder="Pekerjaan">
                        <p style="color: red"> {{ $errors->first('Pekerjaan') }} </p>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">No Identitas</label>
                    <div class="col-sm-4">
                        <input type="text" name="no_idn" class="form-control " placeholder="Nomor Identitas">
                        <p style="color: red"> {{ $errors->first('No Identitas') }} </p>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">No Telpn / Hp</label>
                    <div class="col-sm-4">
                        <input type="text" name="no_hpn" class="form-control " placeholder="Nomor Tlpn / Hp">
                        <p style="color: red"> {{ $errors->first('No Telpn') }} </p>
                    </div>
                </div>
                
                <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-10">
                        <button type="submit" class="btn btn-info">
                            <i class="glyphicon glyphicon-saved"></i> Simpan</button>
                        <button type="reset" class="btn btn-danger">
                            <i class="glyphicon glyphicon-repeat"></i> Batal</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="col-sm-4">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <i class="glyphicon glyphicon-info-sign"></i> Just Info</div>

        <div class="jumbotron">
            <table class="table">
                <tr><td>1.</td>
                    <td>Isi dengan lengkap biodata Pelanggan pada form di samping.</td>
                </tr>
                <tr><td>2.</td>
                    <td>Periksa kembali isi data yang akan anda simpan.</td>
                </tr>
                <tr><td>3.</td>
                    <td>KlIik tombol simpan untuk menyinpan data.</td>
                </tr>
            </table>
        </div>
    </div>
</div>
@stop