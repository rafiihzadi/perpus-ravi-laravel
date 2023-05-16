@extends('layouts.main')

@section('content')


    <div class="card card-primary">
    <h2 class="card-title">Data Grafik</h2>

    </div>

        <section class="content">
        <div class="container-fluid">
        <div class="row">
          <div class="col-lg-3 col-6">
            <div class="small-box bg-info">
              <div class="inner">
                <h3>150</h3>
                <p>New Orders</p>
              </div>

              <div class="icon">
                <i class="nav-icon fas fa-book"></i>
              </div>
              <a href="" target="_blank" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <div class="small-box bg-success">
              <div class="inner">
              <h3> 
                  53
                  <sup style="font-size: 20px">%</sup>
                </h3>
                <p>Bounce Rate</p>               
              </div>
              <div class="icon">
                <i class="nav-icon fas fa-building"></i>
              </div>
              <a href="" target="_blank" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>44</h3>
                <p>User Registrations</p>
            </div>
            <div class="icon">
                <i class="nav-icon fas fa-pencil-alt"></i>
              </div>
              <a href="" target="_blank" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
            <div class="col-lg-3 col-6">
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>65</h3>
                <p>Unique Visitors</p>
                
              </div>
              <div class="icon">
                <i class="nav-icon fas fa-list"></i>
              </div>
              <a href="" target="_blank" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <body>
      
      <head>
      <title>Jenis instansi</title>
      <script src="https://code.highcharts.com/highcharts.js"></script>
      <script src="https://code.highcharts.com/modules/exporting.js"></script>
      <script src="https://code.highcharts.com/modules/export-data.js"></script>
      <script src="https://code.highcharts.com/modules/accessibility.js"></script>
      </head>
      <div class="row">
        <div class="col-12">
        <div class="card ">
        <div class="card-body">
        <div class="row">
          <div class="col-sm-6 col-sm-6" id="container1" style="height: 750;"></div>
          <div class="col-sm-6 col-sm-6" id="container2" style="height: 750;"></div>
            </div>
          </div>
          </div>
          </div>
      
      
      <script type="text/javascript">
        
Highcharts.chart('container1', {
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
            name: 'Data Buku',
            y: 70.67,
            sliced: true,
            selected: true
        },  {
            name: 'Anggota',
            y: 4.86
        }, {
            name: 'Peminjaman',
            y: 2.63
        }, {
            name: 'Kategori',
            y: 1.53
        },  {
            name: 'Penerbit',
            y: 1.40
        }, {
            name: 'Penulis',
            y: 0.84
        }]
    }]
});


Highcharts.chart('container2', {
    chart: {
        zoomType: 'xy'
    },
    title: {
        text: 'Monthly weather in Karasjok, 2021',
        align: 'left'
    },
    subtitle: {
        text: 'Source: ' +
            '<a href="https://www.yr.no/nb/historikk/graf/5-97251/Norge/Troms%20og%20Finnmark/Karasjok/Karasjok?q=2021"' +
            'target="_blank">YR</a>',
        align: 'left'
    },
    xAxis: [{
        categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun',
            'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
        crosshair: true
    }],
    yAxis: [{ // Primary yAxis
        labels: {
            format: '{value}°C',
            style: {
                color: Highcharts.getOptions().colors[1]
            }
        },
        title: {
            text: 'Temperature',
            style: {
                color: Highcharts.getOptions().colors[1]
            }
        }
    }, { // Secondary yAxis
        title: {
            text: 'Precipitation',
            style: {
                color: Highcharts.getOptions().colors[0]
            }
        },
        labels: {
            format: '{value} mm',
            style: {
                color: Highcharts.getOptions().colors[0]
            }
        },
        opposite: true
    }],
    tooltip: {
        shared: true
    },
    legend: {
        align: 'left',
        x: 80,
        verticalAlign: 'top',
        y: 80,
        floating: true,
        backgroundColor:
            Highcharts.defaultOptions.legend.backgroundColor || // theme
            'rgba(255,255,255,0.25)'
    },
    series: [{
        name: 'Precipitation',
        type: 'column',
        yAxis: 1,
        data: [27.6, 28.8, 21.7, 34.1, 29.0, 28.4, 45.6, 51.7, 39.0,
            60.0, 28.6, 32.1],
        tooltip: {
            valueSuffix: ' mm'
        }

    }, {
        name: 'Temperature',
        type: 'spline',
        data: [-13.6, -14.9, -5.8, -0.7, 3.1, 13.0, 14.5, 10.8, 5.8,
            -0.7, -11.0, -16.4],
        tooltip: {
            valueSuffix: '°C'
        }
    }]
});

 </script>
</body>
  </td>
</tr>

</tr>

</table>

</div>
</div>
</div>
  @endsection
  
  