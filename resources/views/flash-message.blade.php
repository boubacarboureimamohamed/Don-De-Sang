


<script>





$(document).ready(function(){

	@if (Session::has('critique'))
	$.toast({
		heading: 'Avertissement',
		text : '{{ Session::get("critique") }}',
		icon: 'warning',
		position : 'top-right'       // bottom-left or bottom-right or bottom-center or top-left or top-right or top-center or mid-center or an object representing the left, right, top, bottom values to position the toast on page
		})

	@endif

	@if (Session::has('success'))
	swal('Succés!', '{{Session::get("success")}}', 'success')
	@endif

	@if (Session::has('erreur'))
	swal('erreur', '{{Session::get("erreur")}}', 'erreur')
	@endif

	@if (Session::has('error'))
	swal('Erreur', '{{Session::get("error")}}', 'error')
	@endif


	@if ($errors->any())
	swal('Erreur!', `@foreach($errors->all() as $error) {{ $error . "\n" }} @endforeach`, 'error')

	@endif

 $('#sms').click(function(){
  $('#bouton').hide();
 });
});

</script>
