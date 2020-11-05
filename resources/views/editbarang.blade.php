@extends('skin')
@section('content')

	<div class="container">
		<div class="row">
			<div class="col-6">
				
				<h1>PUBG</h1>
			</div>
			<div class="col-6">
				<!-- Button trigger modal -->


			</div>
			<div class="col-6">
				<form action='{{URL::to("data/$data->id/update")}}' method="POST">
					{{csrf_field()}}
					<div class="form-group">
						<label for="exampleInputEmail1">Nama</label>
						<input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="nama" value="{{$data->nama}}">
					</div>
					<div class="form-group">
						<label for="exampleInputPassword1">harga</label>
						<input type="text" class="form-control" id="exampleInputPassword1" placeholder="Password" name="harga" value="{{$data->harga}}">
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-primary">Submit</button>

					</div>
				</form>
			</div>

		</div>
	</div>

@endsection
