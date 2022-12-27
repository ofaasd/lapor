@extends('layouts.app')

@section('content')
    <div class="card-header">
        Form Keluhan
    </div>
    <div class="Card-content">
        <br />
        <form method="POST" action="{{ url('keluhan/simpan') }}">
            <div class="form-group">
                <label class="form-label">Jenis Laporan</label><br />
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" checked name="inlineRadioOptions" id="inlineRadioJenis1" value="Aduan">
                    <label class="form-check-label" for="inlineRadioJenis1">Aduan</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadioJenis2" value="Keluhan">
                    <label class="form-check-label" for="inlineRadioJenis2">Keluhan</label>
                </div>
            </div>  
            <div class="form-group">
                <label class="form-label">Nama Pelapor</label>
                <input class="form-control col-md-6" type="text" name="nama" >
            </div>
            <div class="form-group">
                <label class="form-label">Email</label>
                <input class="form-control col-md-6" type="email" name="email" >
            </div>
            <div class="form-group">
                <label class="form-label">No. HP</label>
                <input class="form-control col-md-6" type="text" name="no_telp">
            </div>
            <div class="form-group">
                <label class="form-label">Nama Santri</label>
                <input class="form-control col-md-6" type="text" name="nama_santri">
            </div>
            
            <div class="form-group">
                <label class="form-label">Nama Wali Santri</label>
                <input class="form-control col-md-6" type="text" name="nama_santri">
            </div>
            
            <div class="form-group">
                <label class="form-label">Kategori</label>
                <select name="katgori" class="form-control col-md-6">
                    @foreach($var['kategori'] as $kategori)
                        <option value="{{$kategori->id}}">{{$kategori->nama}}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label class="form-label">Masukan</label>
                <textarea class="form-control col-md-12" name="masukan" ></textarea>
            </div>
            <div class="form-group">
                <label class="form-label">Saran</label>
                <textarea class="form-control col-md-12" name="saran" ></textarea>
            </div>
            <div class="form-group">
                <label class="form-label">Berikan rating kepada kami dari skala 1~10</label><br />
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="1">
                    <label class="form-check-label" for="inlineRadio1">1</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="2">
                    <label class="form-check-label" for="inlineRadio2">2</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="3">
                    <label class="form-check-label" for="inlineRadio3">3</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio4" value="4">
                    <label class="form-check-label" for="inlineRadio4">4</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio5" value="5">
                    <label class="form-check-label" for="inlineRadio5">5</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio6" value="4">
                    <label class="form-check-label" for="inlineRadio6">6</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio7" value="4">
                    <label class="form-check-label" for="inlineRadio7">7</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio8" value="4">
                    <label class="form-check-label" for="inlineRadio8">8</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio9" value="4">
                    <label class="form-check-label" for="inlineRadio9">9</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio10" value="4">
                    <label class="form-check-label" for="inlineRadio10">10</label>
                </div>
                <br /><br />
                <input type="submit" class="form-control col-md-12 btn btn-primary" value="Kirim">
            </div>
        </form>
    </div>
@endsection