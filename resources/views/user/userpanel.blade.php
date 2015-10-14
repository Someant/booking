@extends('global.master')
@section('content')


  <div class="ui text container" id="userpanel">
    
    <canvas id="salesChart" style="height: 180px; width: 95%;"></canvas>

    
    <div class="ui middle aligned animated list relaxed">      
        <div class="item">
          <div class="right floated content" data-content="Add users to your feed">
            <a class="ui icon button" id="add" href="{{ url('home/booking/create') }}">
              <i class="plus icon"></i>
            </a>
            <a class="ui icon button" href="{{ url('home/setting') }}">
              <i class="setting icon"></i>
            </a>
          </div>
        </div>      
    </div>
    <div class="ui middle aligned animated list selection relaxed segment raised" id="content">
      @foreach ($money as $money)
      <div class="item">
        <div class="right floated content">
          <div class="ui"><i class="yen icon"></i>{{$money->money}}元</div>
        </div>
       
        <div class="content">
          <div class="description"><i class="{{ $money->type }}"></i> {{@substr($money->created_at,0,11)}} </div>
        </div>
      </div>
      @endforeach
    </div>
    <button class="fluid primary ui button" id="more" data-page="2">More</button>
  </div>
    <script>
      var myDate = new Date();
      var week=["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];
      var weekey=myDate.getDay(); 

      
      var weekdata=[];
      for(var i=0;i<7;i++)
      {
        if(weekey-i<0)
        {
          weekdata[6-i]=week[Math.abs(weekey-i)+weekey];
        }
        else
        {
          weekdata[6-i]=week[weekey-i];
        }
      }
      weekdata[6]='Today';
      weekdata[5]='Yesterday'
      var salesChartCanvas = $("#salesChart").get(0).getContext("2d");
      // This will get the first returned node in the jQuery collection.
      var salesChart = new Chart(salesChartCanvas);
    
      var salesChartData = {
        //labels: ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
        labels:weekdata,
        datasets: [
          {
            label: "Week",
            fillColor: "rgba(60,141,188,0.9)",
            strokeColor: "rgba(60,141,188,0.8)",
            pointColor: "#3b8bba",
            pointStrokeColor: "rgba(60,141,188,1)",
            pointHighlightFill: "#fff",
            pointHighlightStroke: "rgba(60,141,188,1)",
            data: [{{ $week }}]
          }
        ]
      };
      var salesChartOptions = {
        //Boolean - If we should show the scale at all
        showScale: true,
        //Boolean - Whether grid lines are shown across the chart
        scaleShowGridLines: false,
        //String - Colour of the grid lines
        scaleGridLineColor: "rgba(0,0,0,.05)",
        //Number - Width of the grid lines
        scaleGridLineWidth: 1,
        //Boolean - Whether to show horizontal lines (except X axis)
        scaleShowHorizontalLines: true,
        //Boolean - Whether to show vertical lines (except Y axis)
        scaleShowVerticalLines: true,
        //Boolean - Whether the line is curved between points
        bezierCurve: true,
        //Number - Tension of the bezier curve between points
        bezierCurveTension: 0.3,
        //Boolean - Whether to show a dot for each point
        pointDot: false,
        //Number - Radius of each point dot in pixels
        pointDotRadius: 4,
        //Number - Pixel width of point dot stroke
        pointDotStrokeWidth: 1,
        //Number - amount extra to add to the radius to cater for hit detection outside the drawn point
        pointHitDetectionRadius: 20,
        //Boolean - Whether to show a stroke for datasets
        datasetStroke: true,
        //Number - Pixel width of dataset stroke
        datasetStrokeWidth: 2,
        //Boolean - Whether to fill the dataset with a color
        datasetFill: true,
        //String - A legend template

        //Boolean - whether to maintain the starting aspect ratio or not when responsive, if set to false, will take up entire container
        maintainAspectRatio: true,
        //Boolean - whether to make the chart responsive to window resizing
        responsive: true
      };
    
      //Create the line chart
      salesChart.Line(salesChartData, salesChartOptions);      
   </script>
  
  
  @stop

