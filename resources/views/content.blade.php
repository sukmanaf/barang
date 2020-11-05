@extends('skin')
@section('content')

<div class="row">
	<div class="col-12">
		@if(session('sukses'))
		<div class="alert alert-success" role="alert">
			{{session('sukses')}}
		</div>
		@endif
	</div>
	<div class="col-6">
		
		<h1>PUBG</h1>
	</div>
	<div class="col-6">
		<!-- Button trigger modal -->
		<button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal">
			Tambah
		</button>

		<!-- Modal -->
		
		<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<form action="/barang/data/create" method="POST">
							{{csrf_field()}}
							<div class="form-group">
								<label for="exampleInputEmail1">Nama</label>
								<input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="nama">
							</div>
							<div class="form-group">
								<label for="exampleInputPassword1">harga</label>
								<input type="text" class="form-control" id="exampleInputPassword1" placeholder="Password" name="harga">
							</div>
							
						</div>
						<div class="modal-footer">
							<button type="submit" class="btn btn-primary">Submit</button>
						</form>
						<!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
						<!-- <button type="button" class="btn btn-primary">Save </button> -->
					</div>
				</div>
			</div>
		</div>
	</div>

	<table class="table table-hover">
		<tr>
			<th>nama	</th>
			<th>barang	</th>
			<th>Action	</th>
		</tr>
		@foreach($data as $v)
		<tr>
			<td>{{$v->nama}}</td>
			<td>{{$v->harga}}</td>
			<td>
				<a href="/barang/data/{{$v->id}}/edit" class="btn btn-warning">Edit</a>
				<a href="/barang/data/{{$v->id}}/destroy" class="btn btn-danger">Hapus</a>
				
			</td>
		</tr>
		@endforeach
	</table>
</div>

@endsection
<!-- modal -->
