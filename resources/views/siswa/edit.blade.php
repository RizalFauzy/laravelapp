@extends('template')

@section('main')
	<div id="siswa">
		<h2>Update Siswa</h2>
		<form method="post" action="{{ url('siswa/'.$siswa->id) }}">
		{{-- {!! Form::open(['method' => 'PATCH', 'url' => 'siswa/'.$siswa->id]) !!} --}}
			{{ csrf_field() }}
			<input name="_method" value="PATCH" type="hidden">
			<div class="form-group">
				<label for="nisn" class="control-label">NISN : </label>
				<input class="form-control" name="nisn" id="nisn" type="text" value="{{ $siswa->nisn }}">
			</div>
			<div class="form-group">
				<label for="nama_siswa" class="control-label">Nama : </label>
				<input class="form-control" name="nama_siswa" id="nama_siswa" type="text" value="{{ $siswa->nama_siswa }}">
			</div>
			<div class="form-group">
				<label for="tanggal_lahir" class="control-label">Tgl Lahir : </label>
				<input class="form-control" id="tanggal_lahir" name="tanggal_lahir" type="date" placeholder="yyyy-mm-dd" value="{{ $siswa->tanggal_lahir }}">
			</div>
			<div class="form-group">
				<label for="jenis_kelamin" class="control-label">Jenis Kelamin : </label>
				@if($siswa->jenis_kelamin == 'L')
					<div class="radio">
						<label><input name="jenis_kelamin" value="L" id="jenis_kelamin" type="radio" checked> Laki - laki</label>
					</div>
					<div class="radio">
						<label><input name="jenis_kelamin" value="P" id="jenis_kelamin" type="radio"> Perempuan</label>
					</div>
				@elseif($siswa->jenis_kelamin == 'P')
					<div class="radio">
						<label><input name="jenis_kelamin" value="L" id="jenis_kelamin" type="radio"> Laki - laki</label>
					</div>
					<div class="radio">
						<label><input name="jenis_kelamin" value="P" id="jenis_kelamin" type="radio" checked> Perempuan</label>
					</div>
				@else
					<div class="radio">
						<label><input name="jenis_kelamin" value="L" id="jenis_kelamin" type="radio"> Laki - laki</label>
					</div>
					<div class="radio">
						<label><input name="jenis_kelamin" value="P" id="jenis_kelamin" type="radio"> Perempuan</label>
					</div>
				@endif

			</div>
			<div class="form-group">
				<input class="btn btn-primary form-control" value="Update Siswa" type="submit">
			</div>
		{{-- {!! Form::close() !!} --}}
		</form>
	</div>
@stop

@section('footer')
	@include('footer')
@stop