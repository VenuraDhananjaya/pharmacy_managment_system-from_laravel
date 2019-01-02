<form action="{{action('GuestControl@mail')}}" method="POST">
	{{csrf_field()}}

	<button>Send mail</button>
	
</form>