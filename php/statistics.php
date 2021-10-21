<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>C++ calculate</title>
	<script src="https://code.highcharts.com/highcharts.js"></script>
	<script src="https://code.highcharts.com/highcharts-more.js"></script>
	<script src="https://code.highcharts.com/modules/solid-gauge.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
	<script src="../js/script.js"></script>
	<link rel="stylesheet" href="../style/style.css">
	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" 
	integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</head>
<body>
	<?php
		include ("header.php");
	?>
	<?php
		require_once('query_server.php');
		$user_id_current = $_SESSION['user_id'];
		$scores_array = array();
		$take_scores_cpp = "SELECT * FROM cpp_scores WHERE user_id = $user_id_current";
		$take_scores_ict = "SELECT * FROM ict_scores WHERE user_id = $user_id_current";
		$take_scores_calc = "SELECT * FROM calc_scores WHERE user_id = $user_id_current";
		$take_scores_cult = "SELECT * FROM culturology_scores WHERE user_id = $user_id_current";
		$take_scores_eap = "SELECT * FROM eap_scores WHERE user_id = $user_id_current";
		$take_scores_phc = "SELECT * FROM phc_scores WHERE user_id = $user_id_current";
		$take_scores_practice = "SELECT * FROM practice_scores WHERE user_id = $user_id_current";
		$result_of_cpp = $connect->query($take_scores_cpp);
		$result_of_ict = $connect->query($take_scores_ict);
		$result_of_calc = $connect->query($take_scores_calc);
		$result_of_cult = $connect->query($take_scores_cult);
		$result_of_eap = $connect->query($take_scores_eap);
		$result_of_phc = $connect->query($take_scores_phc);
		$result_of_practice = $connect->query($take_scores_practice);
		if(isset($_SESSION['user_id']) && $result_of_cpp->num_rows == 1){
			include('charts.php');
			$scores_array = array(
			$result_of_cpp->fetch_assoc(), 
			$result_of_ict->fetch_assoc(), 
			$result_of_calc->fetch_assoc(), 
			$result_of_cult->fetch_assoc(), 
			$result_of_eap->fetch_assoc(), 
			$result_of_phc->fetch_assoc(), 
			$result_of_practice->fetch_assoc());
			$gpa_of_user = ($scores_array[0]['total_gpa'] * 5) + ($scores_array[1]['total_gpa'] * 5) + ($scores_array[2]['total_gpa'] * 5) + 
			($scores_array[3]['total_gpa'] * 2) + ($scores_array[4]['total_gpa'] * 5) + ($scores_array[5]['total_gpa'] * 2) + ($scores_array[6]['total_gpa'] * 2);
			$gpa_of_user = $gpa_of_user / 26;
			$total_of_cpp = (0.3 * $scores_array[0]['first_att']) + (0.3 * $scores_array[0]['second_att']) + (0.4 * $scores_array[0]['final']);
			$total_of_ict = (0.3 * $first_att_ict_stat) + (0.3 * $second_att_ict_stat) + (0.4 * $ict_final_score_stat);
			$total_of_calc = (0.3 * $first_att_calc_stat) + (0.3 * $second_att_calc_stat) + (0.4 * $calc_final_score_stat);
			$total_of_cult = (0.3 * $first_att_cult_stat) + (0.3 * $second_att_cult_stat) + (0.4 * $cult_final_score_stat);
			$total_of_eap = (0.3 * $first_att_eap_stat) + (0.3 * $second_att_eap_stat) + (0.4 * $eap_final_score_stat);
			$total_of_phc = (0.5 * $first_att_phc_stat) + (0.5 * $second_att_phc_stat);
		}	
		else if(isset($_SESSION['user_id'])){
			include('including_inputs.php');
		}
		else{
			echo "<p style=\"margin-top:50px;font-size:50px;text-align:center;\">Пожалуйста, зарегистрируйтесь</p>";
		}

	?>
	<?php 
		



	?>
	<script>
	$(function() {

  var rawData = <?php echo round($gpa_of_user, 2);?>,
    data = getData(rawData);

  function getData(rawData) {
    var data = [],
      start = Math.round(Math.floor(rawData / 10) * 10);
    data.push(rawData);
    for (i = start; i > 0; i -= 10) {
      data.push({
        y: i
      });
    }
    return data;
  }

  Highcharts.chart('gauge_chart', {
    chart: {
      type: 'solidgauge',
      marginTop: 20
    },
    
    title: {
      text: 'Ваш GPA:',
      style: {
        'font-size': '30px',
        'margin-top': '50px',
      },
      zIndex: 7
    },
    
    subtitle: {
      text: rawData,
      style: {
        'font-size': '60px'
      },
      y: 200,
      zIndex: 7
    },

    tooltip: {
      enabled: false
    },

    pane: [{
      startAngle: -120,
      endAngle: 120,
      background: [{ // Track for Move
        outerRadius: '100%',
        innerRadius: '80%',
        backgroundColor: Highcharts.Color(Highcharts.getOptions().colors[0]).setOpacity(0.3).get(),
        borderWidth: 0,
        shape: 'arc'
      }],
      size: '120%',
      center: ['50%', '65%']
    }, {
      startAngle: -120,
      endAngle: 120,
      size: '95%',
      center: ['50%', '65%'],
      background: []
    }],

    yAxis: [{
      min: 0,
      max: 4,
      lineWidth: 2,
      lineColor: 'white',
      tickInterval: 10,
      labels: {
        enabled: false
      },
      minorTickWidth: 0,
      tickLength: 50,
      tickWidth: 5,
      tickColor: 'white',
      zIndex: 6,
      stops: [
        [0, '#fff'],
        [0.101, '#47b31d'],
        [0.201, '#47b31d'],
        [0.301, '#47b31d'],
        [0.401, '#47b31d'],
        [0.501, '#47b31d'],
        [0.601, '#47b31d'],
        [0.701, '#47b31d'],
        [0.801, '#47b31d'],
        [0.901, '#47b31d'],
        [1, '#47b31d']
      ]
    }, {
      linkedTo: 0,
      pane: 1,
      lineWidth: 5,
      lineColor: 'white',
      tickPositions: [],
      zIndex: 6
    }],
    
    series: [{
      animation: true,
      dataLabels: {
        enabled: false
      },
      borderWidth: 0,
      color: Highcharts.getOptions().colors[0],
      radius: '100%',
      innerRadius: '80%',
      data: data
    }]
  });
});
</script>
	<script type="text/javascript">
      google.charts.load('current', {'packages':['corechart', 'bar']});
      google.charts.setOnLoadCallback(drawStuff);

      function drawStuff() {

        var button = document.getElementById('change-chart');
        var chartDiv = document.getElementById('chart_div');

        var data = google.visualization.arrayToDataTable([
          ['Предметы', 'MidTerm', 'EndTerm', 'Final'],
          ['C++', <?php echo $scores_array[0]['first_att'] . ", " . $scores_array[0]['second_att'] . ", " . $scores_array[0]['final'];?>],
          ['ICT', <?php echo $scores_array[1]['first_att'] . ", " . $scores_array[1]['second_att'] . ", " . $scores_array[1]['final'];?>],
          ['Calculus 1', <?php echo $scores_array[2]['first_att'] . ", " . $scores_array[2]['second_att'] . ", " . $scores_array[2]['final'];?>],
          ['Culturology', <?php echo $scores_array[3]['first_att'] . ", " . $scores_array[3]['second_att'] . ", " . $scores_array[3]['final'];?>],
          ['English', <?php echo $scores_array[4]['first_att'] . ", " . $scores_array[4]['second_att'] . ", " . $scores_array[4]['final'];?>],
          ['PHC', <?php echo $scores_array[5]['first_att'] . ", " . $scores_array[5]['second_att'] . ", " . "0";?>],
		  ['Practice', <?php echo "0" . ", " . "0" . ", " . $scores_array[6]['total'];?>],
        ]);

        var materialOptions = {
          width: 900,
          chart: {
            title: 'Оценки',
            subtitle: 'Оценки по MidTerm, EndTerm, Final'
          },
          series: {
            0: { axis: 'distance' }, // Bind series 0 to an axis named 'distance'.
            1: { axis: 'brightness' } // Bind series 1 to an axis named 'brightness'.
          },
          axes: {
            y: {
              distance: {label: 'Баллы'}, // Left y-axis.
              brightness: {side: 'right', label: 'apparent magnitude'} // Right y-axis.
            }
          }
        };

        var classicOptions = {
          width: 900,
          series: {
            0: {targetAxisIndex: 0},
            1: {targetAxisIndex: 1}
          },
          title: 'Оценки - Оценки по MidTerm, EndTerm, Final',
          vAxes: {
            // Adds titles to each axis.
            0: {title: 'parsecs'},
            1: {title: 'apparent magnitude'}
          }
        };

        function drawMaterialChart() {
          var materialChart = new google.charts.Bar(chartDiv);
          materialChart.draw(data, google.charts.Bar.convertOptions(materialOptions));
          button.innerText = 'Change to Classic';
          button.onclick = drawClassicChart;
        }

        function drawClassicChart() {
          var classicChart = new google.visualization.ColumnChart(chartDiv);
          classicChart.draw(data, classicOptions);
          button.innerText = 'Change to Material';
          button.onclick = drawMaterialChart;
        }

        drawMaterialChart();
    };
    </script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart', 'bar']});
      google.charts.setOnLoadCallback(drawStuff);

      function drawStuff() {

        var button = document.getElementById('change-chart');
        var chartDiv = document.getElementById('chart_div_2');

        var data = google.visualization.arrayToDataTable([

		  ['Предметы', 'Тотал'],
		  ['C++', <?php echo $scores_array[0]['total']; ?>],
		  ['ICT', <?php echo $scores_array[1]['total']; ?>],
		  ['Calculus', <?php echo $scores_array[2]['total']; ?>],
		  ['Culturology', <?php echo $scores_array[3]['total']; ?>],
		  ['EAP', <?php echo $scores_array[4]['total']; ?>],
		  ['PHC', <?php echo $scores_array[5]['total']; ?>],
		  ['Practice', <?php echo $scores_array[6]['total']; ?>],
        ]);

        var materialOptions = {
          width: '100%',
          chart: {
            title: 'Оценки',
            subtitle: 'Оценки по тоталу'
          },
          series: {
            0: { axis: 'distance' }, // Bind series 0 to an axis named 'distance'.
            1: { axis: 'brightness' } // Bind series 1 to an axis named 'brightness'.
          },
          axes: {
            y: {
              distance: {label: 'Баллы'}, // Left y-axis.
              brightness: {side: 'right', label: 'apparent magnitude'} // Right y-axis.
            }
          }
        };

        var classicOptions = {
          width: 800,
          series: {
            0: {targetAxisIndex: 0},
            1: {targetAxisIndex: 1}
          },
          title: 'Оценки - Оценки по MidTerm, EndTerm, Final',
          vAxes: {
            // Adds titles to each axis.
            0: {title: 'parsecs'},
            1: {title: 'apparent magnitude'}
          }
        };

        function drawMaterialChart() {
          var materialChart = new google.charts.Bar(chartDiv);
          materialChart.draw(data, google.charts.Bar.convertOptions(materialOptions));
          button.innerText = 'Change to Classic';
          button.onclick = drawClassicChart;
        }


        drawMaterialChart();
    };
    </script>
</body>
</html>
