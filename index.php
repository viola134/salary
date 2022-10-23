<?php
$positions = [
    "Учитель младших классов" => 8000,
    "Учитель старших классов" => 12000,
    "Завуч школы" => 15000,
    "Директор школы" => 22000,
];
function salary($position){
    $salary = $position;
    $position_name = array_search($position, $GLOBALS["positions"]);
    return "Зарплата: $position_name - $salary ₴";
}
print call_user_func("salary", $positions["Завуч школы"]);