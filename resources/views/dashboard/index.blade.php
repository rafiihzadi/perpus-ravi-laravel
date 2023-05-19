@extends('layouts.main')

@section('content')

 <div class="content">
    <div class="card card-primary">
    <div class="card-header">
        <h2 class="card-title">Rekap</h2>
    </div>

     <!-- Small boxes (Stat box) -->
    <div class="card-body">
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->

            <div class="small-box bg-info">
              <div class="inner">
                <h3>{{ $buku }}</h3>
                <p>Jumlah Buku</p>
              </div>

              <div class="icon">
                <i class="nav-icon fas fa-book"></i>
              </div>
              <a href="{{ route('buku.index') }}" target="_blank" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>{{ $buku }}</h3>
                <p>Jumlah Penerbit</p>
              </div>
              <div class="icon">
                <i class="nav-icon fas fa-building"></i>
              </div>
              <a href="{{ route('penerbit.index') }}" target="_blank" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>{{ $buku }}</h3>
                <p>Jumlah Penulis</p>
              </div>

              <div class="icon">
                <i class="nav-icon fas fa-pencil-alt"></i>
              </div>
              <a href="{{ route('penulis.index') }}" target="_blank" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>{{ $buku }}</h3>
                <p>Jumlah Kategori</p>
              </div>
              <div class="icon">
                <i class="nav-icon fas fa-list"></i>
              </div>
              <a href="{{ route('kategori.index') }}" target="_blank" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-6">
        <div class="card">
            <div class="card-header bg-primary">
                Grafik Buku Berdasarkan Penerbit
            </div>
            <div class="card-body">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div id="penerbit">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<script src="https://code.highcharts.com/highcharts.js"></script>    
    
<script>
    Highcharts.chart('penerbit', {
        chart: {
            type: 'column'
        },
        title: {
            text: 'Penerbit Buku'
        },
        subtitle: {
            text: ''
        },
        xAxis: {
            categories: [
                'Gramedia',
                'Kompas',
                'Rafi Publishing',
            ],
            crosshair: true
        },
        yAxis: {
            title: {
                useHTML: true,
                text: 'Jumlah Buku'
            }
        },
        tooltip: {
            headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
            pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                '<td style="padding:0"><b>{point.y:.1f}</b></td></tr>',
            footerFormat: '</table>',
            shared: true,
            useHTML: true
        },
        plotOptions: {
            column: {
                pointPadding: 0.2,
                borderWidth: 0
            }
        },
        series: [{
            name: 'Buku',
            data: [10.14, 10.55, 12.44]

        }]
    });
</script>



    <div class="col-sm-6">
        <div class="card">
            <div class="card-header bg-primary">
                Grafik Buku Berdasarkan Penulis
            </div>
            <div class="card-body">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div id="penulis">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.highcharts.com/highcharts.js"></script>    
    
    <script>
        Highcharts.chart('penulis', {
            chart: {
                type: 'bar'
            },
            title: {
                text: 'Penulis Buku'
            },
            subtitle: {
                text: ''
            },
            xAxis: {
                categories: [
                    'Ardhi Mohamad',
                    'Henry Manampiring',
                    'Arthur Conan Doyle',
                ],
                crosshair: true
            },
            yAxis: {
                title: {
                    useHTML: true,
                    text: 'Jumlah Buku'
                }
            },
            tooltip: {
                headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
                pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                    '<td style="padding:0"><b>{point.y:.1f}</b></td></tr>',
                footerFormat: '</table>',
                shared: true,
                useHTML: true
            },
            plotOptions: {
                column: {
                    pointPadding: 0.2,
                    borderWidth: 0
                }
            },
            series: [{
                name: 'Buku',
                data: [10.14, 10.55, 12.44]
    
            }]
        });
    </script>
    
    <div class="col-sm-6">
        <div class="card">
            <div class="card-header bg-primary">
                Grafik Buku Berdasarkan Kategori
            </div>
            <div class="card-body">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                           <div id="kategori">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://code.highcharts.com/highcharts.js"></script>
    <script>
   Highcharts.chart('kategori', {
    chart: {
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false,
        type: 'pie'
    },
    title: {
        text: 'Browser market shares in May, 2020',
        align: 'left'
    },
    tooltip: {
        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
    },
    accessibility: {
        point: {
            valueSuffix: '%'
        }
    },
    plotOptions: {
        pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            dataLabels: {
                enabled: true,
                format: '<b>{point.name}</b>: {point.percentage:.1f} %'
            }
        }
    },
    series: [{
        name: 'Brands',
        colorByPoint: true,
        data: [{
            name: 'Self Improvement',
            y: 5.99,
            drilldown: true,
        },  {
            name: 'Fiksi',
            y: 4.86
        }, {
            name: 'Komik',
            y: 4.86
        }, {
            name: 'Sastra',
            y: 4.86
        
        }]
    }]
});
</script>






        
      
      
@endsection
  
  