@extends('layouts.app')
@section('content')

<?php
echo "<br>";

?>
<body>
    <table class="table table-bordered">
        <tr>
            <th>1</th>
            <th>2</th>
            <th>3</th>
            <th>4</th>
            <th>5</th>
            <th>6</th>
            <th>7</th>
            <th>8</th>
            <th>9</th>
            <th>10</th>
        </tr>
        @foreach($answers as $row)
            <tr>
                <td>{{ $row['question1'] }}</td>
                <td>{{ $row['question2'] }}</td>
                <td>{{ $row['question3'] }}</td>
                <td>{{ $row['question4'] }}</td>
                <td>{{ $row['question5'] }}</td>
            </tr>
        @endforeach
</table>
</body>
<div class="container">
    <canvas id="myChart"></canvas>
</div>
@endsection
<script src="path/to/chartjs/dist/Chart.js"></script>
<script>
    var ctx = document.getElementById('myChart').getContext('2d');
    var myPieChart = new Chart(ctx, {
    type: 'pie',
    data: [5, 6, 20, 84, 4],
    options: options
});
print(myChart);
</script>