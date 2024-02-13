<?php

function predict($dataX, $dataY, $x) {
    $meanX = array_sum($dataX) / count($dataX);
    $meanY = array_sum($dataY) / count($dataY);

    $numerator = 0;
    $denominator = 0;

    for ($i = 0; $i < count($dataX); $i++) {
        $numerator += ($dataX[$i] - $meanX) * ($dataY[$i] - $meanY);
        $denominator += pow($dataX[$i] - $meanX, 2);
    }

    $slope = $numerator / $denominator;
    $intercept = $meanY - ($slope * $meanX);

    $predictedY = ($slope * $x) + $intercept;

    return $predictedY;
}