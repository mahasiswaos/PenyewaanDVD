@extends('layout.bootstrap3.index')

@section('content')

<div class="col-sm-8">
    <div class="panel panel-primary">
        <div class="panel-heading"><i class="glyphicon glyphicon-plus"></i> Form Edit Daftar CD dan DVD</div>
        <div class="panel-body">
            <form class="form-horizontal" action="<?php echo URL::to("/pelanggan/update/" . $isi->id); ?>" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">User</label>
                    <div class="col-sm-4">
                        <input type="text" value="<?php echo $isi->users_id; ?>" readonly="" 
                               name="id" class="form-control ">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">Nama</label>
                    <div class="col-sm-4">
                        <input type="text" value="<?php echo $isi->nama; ?>"name="nama" class="form-control " placeholder="Nama">
                        <p style="color: red"> {{ $errors->first('nama') }} </p>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">Jenis Kelamin</label>
                    <div class="col-sm-4">
                        <select class="form-control" name="jk">
                            <option value="" disabled="" selected="">Pilih JK..!</option>
                            <?php if ($isi->status == "Ada") { ?>
                                <option value="Laki-laki" selected="seleted">Laki-Laki</option>
                                <option value="Perempuan">Perempuan</option>
                            <?php } else { ?>
                                <option value="Laki-laki">Laki-laki</option>
                                <option value="Perempuan" selected="seleted">Perempuan</option>
                            <?php }; ?>
                        </select>
                        <p style="color: red"> {{ $errors->first('Satus') }} </p>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">Alamat</label>
                    <div class="col-sm-4">
                        <input type="text" value="<?php echo $isi->alamat; ?>"name="alamat" class="form-control " placeholder="Alamat">
                        <p style="color: red"> {{ $errors->first('Alamat') }} </p>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">Pekerjaan</label>
                    <div class="col-sm-4">
                        <input type="text" value="<?php echo $isi->pekerjaan; ?>"name="pekerjaan" class="form-control " placeholder="Pekerjaan">
                        <p style="color: red"> {{ $errors->first('Pekerjaan') }} </p>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">No Identitas</label>
                    <div class="col-sm-4">
                        <input type="text" value="<?php echo $isi->no_id; ?>"name="no_idn" class="form-control " placeholder="Nomor Identitas">
                        <p style="color: red"> {{ $errors->first('No Identitas') }} </p>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">No Telpn / Hp</label>
                    <div class="col-sm-4">
                        <input type="text" value="<?php echo $isi->no_hp; ?>"name="no_hpn" class="form-control " placeholder="Nomor Tlpn / Hp">
                        <p style="color: red"> {{ $errors->first('No Telpn') }} </p>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-10">
                        <button type="submit" class="btn btn-info">
                            <i class="glyphicon glyphicon-saved"></i> Update </button>
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
                    <td>Isi dengan lengkap biodata CD & DVD pada form di samping.</td>
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