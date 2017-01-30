@extends('template')

@section('main')
	<div id="siswa">
		<h2>Detail Siswa</h2>
		@if(isset($siswa))
			<table class="table table-striped">
				<tbody>
					<tr>
						<th>NISN</th>
						<td>{{ $siswa->nisn }}</td>
					</tr>
					<tr>
						<th>Nama Siswa</th>
						<td>{{ $siswa->nama_siswa }}</td>
					</tr>
					<tr>
						<th>Tanggal Lahir</th>
						<td>{{ $siswa->tanggal_lahir }}</td>
					</tr>
					<tr>
						<th>Jenis Kelamin</th>
						<td>{{ $siswa->jenis_kelamin }}</td>
					</tr>
				</tbody>
			</table>
		@else
			<p>Tidak ada data siswa.</p>
		@endif
	</div>
@stop

@section('footer')
	@include('footer')
@stop