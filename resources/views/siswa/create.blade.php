@extends('template')

@section('main')
	<div id="siswa">
		<h2>Tambah Siswa</h2>
		<form method="post" action="{{ url('siswa') }}">
			{{ csrf_field() }}
			<div class="form-group">
				<label for="nisn" class="control-label">NISN : </label>
				<input class="form-control" name="nisn" id="nisn" type="text">
			</div>
			<div class="form-group">
				<label for="nama_siswa" class="control-label">Nama : </label>
				<input class="form-control" name="nama_siswa" id="nama_siswa" type="text">
			</div>
			<div class="form-group">
				<label for="tanggal_lahir" class="control-label">Tgl Lahir : </label>
				<input class="form-control" id="tanggal_lahir" name="tanggal_lahir" type="date" placeholder="yyyy-mm-dd">
			</div>
			<div class="form-group">
				<label for="jenis_kelamin" class="control-label">Jenis Kelamin : </label>
				<div class="radio">
					<label><input name="jenis_kelamin" value="L" id="jenis_kelamin" type="radio"> Laki - laki</label>
				</div>
				<div class="radio">
					<label><input name="jenis_kelamin" value="P" id="jenis_kelamin" type="radio"> Perempuan</label>
				</div>
			</div>
			<div class="form-group">
				<input class="btn btn-primary form-control" value="Tambah Siswa" type="submit">
			</div>
		</form>
	</div>
@stop

@section('footer')
	@include('footer')
@stop