@extends('layouts.pharlayout')

@section('content')
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<script type="text/javascript">
	$(document).ready(function(){
    var maxField = 10; //Input fields increment limitation
    var addButton = $('.add'); //Add button selector
    var wrapper = $('.field_wrapper'); //Input field wrapper
    var fieldHTML = '<div><table><tr><th>Name</th><th>Amount</th><th>Tablet Cost</th></tr><tr><td><input type="text" name="field_name[0]"></td><td><input type="number" name="field_name[1]"></td><td><input type="number" name="field_name[2]"></td></tr><a href="" class="remove_button">Remove</a></table></div>'; //New input field html 
    var x = 1; //Initial field counter is 1
    
    //Once add button is clicked
    $(addButton).click(function(){
        //Check maximum number of input fields
        if(x < maxField){ 
            x++; //Increment field counter
            $(wrapper).append(fieldHTML); //Add field html
        }
    });
    
    //Once remove button is clicked
    $(wrapper).on('click', '.remove_button', function(e){
        e.preventDefault();
        $(this).parent('div').remove(); //Remove field html
        x--; //Decrement field counter
    });
});
</script>
	
	<form action="" method="post">
		<table id="sales">
			<tr>
				<th>Name</th>
				<th>Amount</th>
				<th>Tablet Cost</th>
			</tr>
			<div class="field_wrapper">
			<tr>
				
				<td><input type="text" name="field_name[0]"></td>
				<td><input type="number" name="field_name[1]"></td>
				<td><input type="number" name="field_name[2]"></td>
				</div>
			</tr>
		</table>
	</form>
	<button class="add">Add</button>
@endsection