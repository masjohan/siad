@extends('backend.template')
@section('content')
<div class="box box-primary">
    <div class="box-header with-border">
        <h1 class="box-title">Tambah Kelas</h1>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
        {!! Form::open(['route' => 'jenis.store'])!!}
        <table class="table table-bordered">
            <tr>
                <th>Jenis Pembayaran</th>
                <td>
                    {!! Form::text('pembayaran', null, ['class'=>'form-control','autofocus','required', 'placeholder'=>'Jenis Pembayaran']) !!}
                    {!! $errors->first('pembayaran', '<p class="help-block">:message</p>') !!}
                </td>
            </tr>
            <tr>
                <th>Nominal</th>
                <td>
                    {!! Form::number('nominal', null, ['class'=>'form-control','min'=>50000,'required', 'placeholder'=>'Nominal']) !!}
                    {!! $errors->first('nominal', '<p class="help-block">:message</p>') !!}
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <a href="{{ route('jenis.index') }}" class="btn btn-default" title="">Kembali</a>
                </td>
            </tr>
        </table>
        {!! Form::close() !!}
    </div>
    <!-- /.box-body -->
</div>
<!-- /.box -->
@endsection