@extends('layouts.adminty')

@section('content')
<h1>Stock Graphs</h1>

<div class="card-block" style="width: 50%">
<canvas class="card-block" id="myChart_D" data-labels="{{ implode(', ', $labels) }}" data-stocks="{{ implode(', ', $data_simple) }}" width="600" height="400"></canvas>
</div>
@endsection
@section('js')

<script src="{{ asset('assets/js/Chart.js') }}"></script>
<script src="{{ asset('assets/js/Chart.BarFunnel.js') }}"></script>

<script>
  var ctx = document.getElementById('myChart_D');
  var libelles = ctx.getAttribute('data-labels')
  var stocks = ctx.getAttribute('data_simple-stocks')
  console.log(libelles)
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: libelles.split(', '),
        datasets: [{
            label: '# of Votes',
            data_simple: stocks.split(', '),
            backgroundColor: [
                'rgba(255, 0, 0, 0.6)',
                'rgba(173, 255, 47, 0.6)',
                'rgba(0, 0, 255, 0.6)',
                'rgba(255, 215, 0, 0.6)',
                'rgba(139, 0, 0, 0.6)',
                'rgba(128, 128, 0, 0.6)',
                'rgba(0, 100, 0, 0.6)',
                'rgba(139, 69, 19, 0.6)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(173, 255, 47, 1)',
                'rgba(0, 0, 255, 1)',
                'rgba(255, 215, 0, 1)',
                'rgba(139, 0, 0, 1)',
                'rgba(128, 128, O, 1)',
                'rgba(0, 100, 0, 1)',
                'rgba(139, 69, 19, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});

</script>
<script>
    var ctx = document.getElementById('myChart');
    var libelles = ctx.getAttribute('data-labels')
    var stocks = ctx.getAttribute('data_simple-stocks')
    console.log(libelles)
  var myChart = new Chart(ctx, {
      type: 'bar',
      data: {
          labels: libelles.split(', '),
          datasets: [{
              label: '# of Votes',
              data_simple: stocks.split(', '),
              backgroundColor: [
                  'rgba(255, 0, 0, 0.6)',
                  'rgba(173, 255, 47, 0.6)',
                  'rgba(0, 0, 255, 0.6)',
                  'rgba(255, 215, 0, 0.6)',
                  'rgba(139, 0, 0, 0.6)',
                  'rgba(128, 128, 0, 0.6)',
                  'rgba(0, 100, 0, 0.6)',
                  'rgba(139, 69, 19, 0.6)'
              ],
              borderColor: [
                  'rgba(255, 99, 132, 1)',
                  'rgba(173, 255, 47, 1)',
                  'rgba(0, 0, 255, 1)',
                  'rgba(255, 215, 0, 1)',
                  'rgba(139, 0, 0, 1)',
                  'rgba(128, 128, O, 1)',
                  'rgba(0, 100, 0, 1)',
                  'rgba(139, 69, 19, 1)'
              ],
              borderWidth: 1
          }]
      },
      options: {
          scales: {
              yAxes: [{
                  ticks: {
                      beginAtZero: true
                  }
              }]
          }
      }
  });

  </script>
@endsection

