@extends('layouts.adminty')

@section('content')
<h1>Stock Graphs</h1>

<div style="width: 50%">
        <canvas id="myChart" width="400" height="400"></canvas>
</div>
@endsection
@section('js')
<script src="{{ asset('assets/js/Chart.js') }}"></script>
<script>
   var mySmithChart = new Chart({
	type: 'barFunnel',
	data: dataObject
});
new Chart({
	config: {
		region: {
			display: true,
			borderColor: "#F6C85F",
			backgroundColor: "rgba(246, 200, 95, 0.2)"
		},

		elements: {
			rectangle: {
				stepLabel: {
					display: true,
					fontSize: 20
					// color: "red"
				}
			}
		}
	}
});
</script>
@endsection

