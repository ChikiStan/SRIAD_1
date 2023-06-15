<?php
include "function/function.php";
$patient = Patient::show($_GET["id"]);
$experiments = Values::experiments_show($_GET['id']);
$values = Values::feet_show($_GET["id"]);
$x = Values::algorythm($values);
var_dump($values);
//var_dump($x);

$count='0';
?>
<!DOCTYPE html>
<html>
    <head>
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
        <script type="text/javascript">
            google.charts.load('current', {'packages':['corechart']});
            google.charts.setOnLoadCallback(drawChart);
            function drawChart() {
                var data = google.visualization.arrayToDataTable([
                    ['Year', 'Sales', 'Expenses'],
                   <?php
                    foreach($values as $value)
                    {echo '['.$value->time.','.(int)$value->axel_z_right.','.$x[$count].'],';
                    $count++;}?>
                ]);

                var options = {
                    title: 'Company Performance',
                    curveType: 'function',
                    legend: { position: 'bottom' }
                };

                var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

                chart.draw(data, options);
            }
        </script>
        <meta charset='utf-8'>
        <title>СРИАД - система регистрации и анализа движений</title>
        <link rel="stylesheet" href="styles.css">
    </head>
    <body>
    <div class="container">
        <div class="head">
            <div class="image-flex">
                <img src="Group 9.svg"/>
            </div>
                <p class="def">Система регистрации и анализа движений</p>
        </div>
        
        <div class="add-button"> 
            <h2>Карточка пациента</h2>
            <a href="index.php" class="add">все пациенты</a>
        </div>

        <div class="info">
            <table>
                <tr>
                    <th class="name"><?php echo $patient->second_name." ".$patient->first_name." ".$patient->middle_name; ?></th>
                    <th class="edit">
                        <a href="edit.html"><img src="edit-2 1.png" width="22"></a>
                    </th>
                    <th class="trash">
                        <a><img src="trash 1.png" width="21"></a>
                    </th>
                    <th colspan="3">
                    </th>
                </tr>
                <tr>
                    <td>Пол:</td>
                    <td>Дата рождения:</td>
                    <td>Рост, см:</td>
                    <td>Вес, кг:</td>
                    <td>Диагноз:</td>
                </tr>
                <tr>
                    <td class="gender"><?php echo $patient->male;?></td>
                    <td class="birth"><?php echo $patient->birthday;?></td>
                    <td class="high"><?php echo $patient->height;?></td>
                    <td class="weight"><?php echo $patient->weight;?></td>
                    <td class="problem"><?php echo $patient->diagnosis;?></td>
                    <td>
                        <div class="list">
                            <select>
                                <?php
                                foreach($experiments as $experiment)
                                 echo '<option value="GRR">'.$experiment->date_start.'</option>';
                                ?>

                            </select>
                        </div>
                    </td>
                </tr>
            </table>
        </div>
        <div class="graphics">
            <table class="choice">
                <tr class="test">
                    <td class="parametr">
                        <a href="index.html">Параметр1</a>
                    </td>
                    <td class="parametr">Параметр2</td>
                    <td class="parametr"> Параметр3</td>
                    <td class="parametr">Параметр4</td>
                    <td class="parametr">Параметр5</td>
                    <td class="parametr">Параметр6</td>
                </tr>
            </table>
        </div>

        <div class="graph"> 
            <h2>График</h2>
            <button class="add" type="button" onclick="onPredictSmaClick()">Прогноз</button>
        </div>
        <div id="curve_chart" style="width: 900px; height: 500px"></div>

        <div>
            <img src="Vector.png" class="wave" width="500"/>
        </div>

    </div>

</html>