@extends('layouts.adminty')

@section('css')

@endsection

@section('content')

<div class="col-sm-12">
    @php
         $color = 'pink';
    @endphp
   <div class="card bg-c-{{$color}}">
        <div class="card-header">
          <h3 class="text-center text-white">
                <i class="icofont icofont-blood-drop f-30 text-white"></i>
                    {{ (' SITUATION DU STOCK ') }}
                <i class="icofont icofont-blood-drop f-30 text-white"></i>
          </h3>
        </div>
    </div>
</div>

<div class="col-sm-12"> 
   <div class="card">
        <div class="card-block">
            <div class="row">
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-header">
                             <h4 class="text-center">{{ ('Double Poche') }}</h4>
                        </div>
                        <div class="card-block">
                            <canvas class="card-block" id="myChart_D" data-labels="{{ implode(', ', $labels) }}" dataD-stocks="{{ implode(', ', $data_double) }}" width="600" height="400">
                            </canvas>
                        </div>
                        <div class="card-footer">

                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-header">
                             <h4 class="text-center">{{ ('Simple Poche') }}</h4>
                        </div>
                        <div class="card-block">
                             <canvas class="card-block" id="myChart" data-labels="{{ implode(', ', $labels) }}" dataS-stocks="{{ implode(', ', $data_simple) }}" width="600" height="400">
                            </canvas>
                        </div>
                        <div class="card-footer">

                        </div>
                    </div>
                </div>
            </div> <hr>
            <div class="row">
                <div class="col-md-11">
                    <p class="text-inverse text-left m-b-0">Don Du Sang</p>
                    <p class="text-inverse text-left">Blood Donation</a></p>
                </div>
                <div class="col-md-1">
                    <img src="{{ asset('images/DDS/logo-blue.png') }}" alt="small-logo.png">
                </div>
            </div>
            </div>
    </div>
</div>

@endsection

@section('js')
<script src="{{ asset('assets/js/Chart.js') }}"></script>
<script src="{{ asset('assets/js/Chart.BarFunnel.js') }}"></script>

<script>
  var ctx = document.getElementById('myChart_D');
  var libelles = ctx.getAttribute('data-labels')
  var stocks = ctx.getAttribute('dataD-stocks')
  console.log(libelles)
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: libelles.split(', '),
        datasets: [{
            label: '# of Votes',
            data: stocks.split(', '),
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
    var stocks = ctx.getAttribute('dataS-stocks')
    console.log(libelles)
  var myChart = new Chart(ctx, {
      type: 'bar',
      data: {
          labels: libelles.split(', '),
          datasets: [{
              label: '# of Votes',
              data: stocks.split(', '),
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

