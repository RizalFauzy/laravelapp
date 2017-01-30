@extends('template')

@section('main')
	<div id="siswa">
		<h2>Siswa</h2>
		@if(isset($siswa))
			<table class="table">
				<thead>
					<tr>
						<th>NISN</th>
						<th>Nama Siswa</th>
						<th>Tanggal Lahir</th>
						<th>Jenis Kelamin</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					@foreach($siswa as $anak)
						<tr>
							<td>{{ $anak->nisn }}</td>
							<td>{{ $anak->nama_siswa }}</td>
							<td>{{ $anak->tanggal_lahir }}</td>
							<td>{{ $anak->jenis_kelamin }}</td>
							<td>
								<div class="box-button">
									<a href="{{ url('siswa/'.$anak->id) }}" class="btn btn-success btn-sm">Detail</a>
								</div>
								<div class="box-button">
									<a href="{{ url('siswa/'.$anak->id.'/edit') }}" class="btn btn-warning btn-sm">Edit</a>
								</div>
								<div class="box-button">
									<form method="post" action="{{ url('siswa/'.$anak->id) }}">
										{{ csrf_field() }}
										<input name="_method" value="DELETE" type="hidden">
										<input class="btn btn-danger btn-sm" value="Delete" type="submit">
									</form>
								</div>
							</td>
						</tr>
					@endforeach
				</tbody>
			</table>
		@else
			<p>Tidak ada data siswa.</p>
		@endif
		<div class="table-nav">
			<div class="jumlah-data">
				<strong>Jumlah siswa : {{ $total }}</strong>
			</div>
			<div class="paging">
				{{ $siswa->links() }}
			</div>
		</div>
		<div class="tombol-nav">
			<a href="{{ url('siswa/create') }}" class="btn btn-primary">Tambah Siswa</a>
		</div>
	</div>
@stop

@section('footer')
	@include('footer')
@stop