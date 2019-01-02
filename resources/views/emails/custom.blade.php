@extends('layouts.pharlayout')

@section('content')
	<script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
	<script>tinymce.init({ selector:'textarea',
						  plugins: "table",
						  toolbar:""
	 });</script>


	<form action="/{{$order_id}}/custom/mail" method="POST">
		{{csrf_field()}}
		<textarea style="height: 450px; width: 80%" name="emailmsg">
			<br>
		<table border="1">
			<tr>
				<th>Ordered</th>
				<th>Available</th>
			</tr>
			<tr>
				<td></td>
			</tr>
		</table>
		</textarea><br>

		<button type="submit" class="btn btn-primary">Send mail</button>
	</form>
	
@endsection