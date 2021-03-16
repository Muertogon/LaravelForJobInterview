@extends('layouts.app')
@section('content')
<?php
$quest1op1 = $quest1op2 = $quest1op3 = $quest1op4 = $quest1op5 = 0;
$quest2op1 = $quest2op2 = $quest2op3 = $quest2op4 = $quest2op5 = 0;
$quest3op1 = $quest3op2 = $quest3op3 = $quest3op4 = $quest3op5 = 0;
$quest4op1 = $quest4op2 = $quest4op3 = $quest4op4 = $quest4op5 = 0;
$quest5op1 = $quest5op2 = $quest5op3 = $quest5op4 = $quest5op5 = 0;
$quest6op1 = $quest6op2 = $quest6op3 = $quest6op4 = $quest6op5 = 0;
$quest7op1 = $quest7op2 = $quest7op3 = $quest7op4 = $quest7op5 = 0;
$quest8op1 = $quest8op2 = $quest8op3 = $quest8op4 = $quest8op5 = 0;
$quest9op1 = $quest9op2 = $quest9op3 = $quest9op4 = $quest9op5 = 0;
$quest10op1 = $quest10op2 = $quest10op3 = $quest10op4 = $quest10op5 = 0;
$i = 1;
//           neveikia
// foreach ($answers as $q) {
//     if ($q["question".$i]== 'opt1'){
//         ${"quest".$i."op1"} += 1;
//     }
//     elseif($q["question".$i]== 'opt2'){
//         ${"quest".$i."op1"} += 1;
//     }
//     elseif($q["question".$i]== 'opt3'){
//         ${"quest".$i."op1"} += 1;
//     }
//     elseif($q["question".$i]== 'opt4'){
//         ${"quest".$i."op1"} += 1;
//     }
//     else{
//         ${"quest".$i."op1"} += 1;
//     }
//     $i = $i +1;
// }
foreach ($answers as $q) {
    if ($q["question1"]== 'opt1'){
        $quest1op1 += 1;
    }
    elseif($q["question1"]== 'opt2'){
        $quest1op2 += 1;
    }
    elseif($q["question1"]== 'opt3'){
        $quest1op3 += 1;
    }
    elseif($q["question1"]== 'opt4'){
        $quest1op4 += 1;
    }
    else{
        $quest1op5 += 1;
    }
}
foreach ($answers2 as $q) {
    if ($q["question9"]== 'opt1'){
        $quest9op1 += 1;
    }
    elseif($q["question9"]== 'opt2'){
        $quest9op2 += 1;
    }
    elseif($q["question9"]== 'opt3'){
        $quest9op3 += 1;
    }
    elseif($q["question9"]== 'opt4'){
        $quest9op4 += 1;
    }
    else{
        $quest9op5 += 1;
    }
}
foreach ($answers as $q) {
    if ($q["question4"]== 'opt1'){
        $quest4op1 += 1;
    }
    elseif($q["question4"]== 'opt2'){
        $quest4op2 += 1;
    }
    elseif($q["question4"]== 'opt3'){
        $quest4op3 += 1;
    }
    elseif($q["question4"]== 'opt4'){
        $quest4op4 += 1;
    }
    else{
        $quest4op5 += 1;
    }
}

?>
<head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load("current", {"packages":["corechart", "bar"] });
        google.charts.setOnLoadCallback(drawChart);
        google.charts.setOnLoadCallback(drawChart2);
        google.charts.setOnLoadCallback(drawChart3);
        google.charts.setOnLoadCallback(drawChart4);
        google.charts.setOnLoadCallback(drawChart5);
        google.charts.setOnLoadCallback(drawChart6);
        google.charts.setOnLoadCallback(drawChart7);
        google.charts.setOnLoadCallback(drawChart8);
        google.charts.setOnLoadCallback(drawChart9);
        google.charts.setOnLoadCallback(drawChart10);
        
        function drawChart() {
            var q1a1 = <?php echo json_encode($quest1op1);?>;
            var q1a2 = <?php echo json_encode($quest1op2);?>;
            var q1a3 = <?php echo json_encode($quest1op3);?>;
            var q1a4 = <?php echo json_encode($quest1op4);?>;
            var q1a5 = <?php echo json_encode($quest1op5);?>;
            var data = new google.visualization.DataTable();
            data.addColumn('string', 'Options');
            data.addColumn('number', 'ChosenNumber');
            data.addRows([
                ['1', q1a1],
                ['2', q1a2],
                ['3', q1a3],
                ['4', q1a4],
                ['5', q1a5],
            ]);
            var options = {title: 'How many foreign countries have you visited?', colors:['#003f5c', '#58508d','#bc5090','#ff6361', '#ffa600']};

            var chart = new google.visualization.PieChart(document.getElementById('piechart'));
            chart.draw(data, options);
        }
        function drawChart2(){
            var q9a1 = <?php echo json_encode($quest9op1);?>;
            var q9a2 = <?php echo json_encode($quest9op2);?>;
            var q9a3 = <?php echo json_encode($quest9op3);?>;
            var q9a4 = <?php echo json_encode($quest9op4);?>;
            var q9a5 = <?php echo json_encode($quest9op5);?>;
            var data = new google.visualization.DataTable();
            data.addColumn('string', 'Options');
            data.addColumn('number', 'ChosenNumber');
            data.addRows([
                ['Parents', q9a1],
                ['Friends', q9a2],
                ['Spouse', q9a3],
                ['Groups', q9a4],
                ['Alone', q9a5]
            ]);
            var options = {title: 'Who do you travel with most often?', colors:['#003f5c', '#58508d','#bc5090','#ff6361', '#ffa600']};
            var chart = new google.visualization.PieChart(document.getElementById('piechart2'));
            
            chart.draw(data, options);
        }
        function drawChart3(){
            var q4a1 = <?php echo json_encode($quest4op1);?>;
            var q4a2 = <?php echo json_encode($quest4op2);?>;
            var q4a3 = <?php echo json_encode($quest4op3);?>;
            var q4a4 = <?php echo json_encode($quest4op4);?>;
            var q4a5 = <?php echo json_encode($quest4op5);?>;
            var data = new google.visualization.DataTable();
            data.addColumn('string', 'Options');
            data.addColumn('number', 'ChosenNumber');
            data.addRows([
                ['Very often', q4a1],
                ['Sometimes', q4a2],
                ['Rarely', q4a3],
                ['When my finances let me', q4a4],
                ['I dont', q4a5]
            ]);
            var options = {title: 'How often do you travel to foreign places?', colors:['#003f5c', '#58508d','#bc5090','#ff6361', '#ffa600']};
            var chart = new google.visualization.PieChart(document.getElementById('piechart3'));
            chart.draw(data, options);
        }
        
    </script>
</head>
<body>
    <div class="container col-12">
        <div class="d-flex justify-content-center">
            <h4>Some questions and how people answered them</h4>
        </div>
    </div>
    <div class="container ">
        <div class="row d-flex justify-content-center">
            <div id="piechart" class="col-12" style="height: 400px"></div>
            <div id="piechart2" class="col-12" style="height: 400px"></div>
            <div id="piechart3" class="col-12" style="height: 400px"></div>
            <a class="btn btn-outline-dark" href="/page1">Retake the survey</a>
        </div>
    </div>
    
</body>
@endsection
