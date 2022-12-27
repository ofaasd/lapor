@extends('layouts.app')

@section('content')
    <div class="card-header">
        Form Laporan Pembayaran
    </div>
    <div class="Card-content">
        <br />
        <form method="POST" action="{{ url('keluhan/simpan') }}">
            <div class="form-group">
                <label class="form-label">Nama Santri</label>
                <input class="form-control col-md-6" type="text" name="nama_santri" >
            </div>
            <div class="form-group">
                <label class="form-label">Pembayaran Sebesar (Rp)</label>
                <input class="form-control col-md-6" type="email" name="jumlah" >
            </div>
            <div class="form-group">
                <label class="form-label">Tanggal Bayar</label>
                <input class="form-control col-md-6" type="date" name="tanggal_bayar">
            </div>
            
            <div class="form-group">
                <label class="form-label">Bank Pengirim</label>
                <select name="bank_pengirim" class="form-control col-md-6">
                    @foreach($var['bank_pengirim'] as $bank)
                        <option value="{{$bank->id}}">{{$bank->nama}}</option>
                    @endforeach
                </select>
            </div>
            
            <div class="form-group">
                <label class="form-label">Pengirim Atas Nama</label>
                <input class="form-control col-md-6" type="text" name="atas_nama">
            </div>
            <div class="form-group">
                <label class="form-label">Pembayaran</label>
                <table class="table col-md-6">
                    @foreach($var['jenis_pembayaran'] as $jenis_pembayaran)
                    <tr>
                        <td>{{$jenis_pembayaran->jenis}}</td>
                        <td><input type="text" name="jenis_pembayaran[]" class="form-control"></td>
                    </tr>
                    @endforeach
                </table>    
            </div>
            <div class="form-group">
                <label class="form-label">Catatan</label>
                <textarea class="form-control col-md-12" name="catatan" ></textarea>
            </div>
            <div class="form-group">
                <label class="form-label">Upload Bukti Bayar</label>
                <input type="file" class="form-control col-md-6" name="file">
            </div>

            <div class="form-group">
                <label class="form-label">No. Wa / Telp Konfirmasi</label>
                <input class="form-control col-md-6" type="text" name="no_hp">
            </div>
            <div class="form-group">
                <input type="submit" class="form-control col-md-12 btn btn-primary" value="Kirim">
            </div>
        </form>
    </div>
@endsection