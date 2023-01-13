<?php

$sign = "+";
$input = "";
$result_input_value = "???";
$range = $_POST['range'] ?? null;
$sign_select = $_POST['pick_sign'] ?? null;
$first_operand = 0;
$second_operand = 0;
$user_result = $_POST['user_result'] ?? null;

function get_flag($selected_sign)
{
    if ($selected_sign == "+") {
        return 0;

    }

    if ($selected_sign == "-") {
        return 1;
    }

    if ($selected_sign == "*") {
        return  3;
    }

    return 0;
}

function f_operand()
{
    global $first_operand;
    global $range;

    $first_operand = floor(rand(0, (int) $range));

    return (int) $first_operand;
}

function s_operand()
{
    global $range;
    global $first_operand;
    global $second_operand;
    global $sign_select;

    $flag = get_flag($sign_select);

    if ($flag == 0 || $flag == 3) {
        $second_operand = rand(0, (int) $range -  $first_operand);
    } else {
        $second_operand = rand(0, $first_operand);
    }

    return (int) $second_operand;
}


function reset_input()
{
    global $user_result;
    global $result_input_value;

    $result_input_value = "Думай!?";
    $user_result = "";
}

function notify_success()
{
    global $result_input_value;
    $result_input_value = "Молодец!";    
}

//30 Проверить введенные данные
function input_sign($x)
{
    global $first_operand;
    global $second_operand;
    global $user_result;
    global $sign_select;
    global $sign;

    $flag = get_flag($sign_select);
    $first_operand = $_POST['op1'];
    $second_operand = $_POST['op2'];
    $sign_select = $_POST['s_sign'];
    $sign = $_POST['s_sign'];


    if ($x == "OK") {
        if ($flag == 0){
            if ($first_operand + $second_operand == (int) $user_result) {
                notify_success();
            } else {
                reset_input();
            }
        }

        if ($flag == 1) {
            if ($first_operand - $second_operand == (int) $user_result) {
                notify_success();
            } else {
                reset_input();
            }
        }

        if ($flag == 3) {
            if ($first_operand * $second_operand == (int) $user_result) {
                notify_success();
            } else {
                reset_input();
            }
        }

        return true;
    }

    $user_result = $user_result . $x;

    return true;
}


function main_calc()
{
    global $first_operand;
    global $second_operand;
    global $sign;
    global $sign_select;
    global $user_result;


    $first_operand = f_operand();

    $second_operand = s_operand();

    if ($sign_select) {
        $sign = $sign_select;
    } else {
        $sign = "+";
    }

    $user_result = "";

    return true;
}


if (isset($_POST['award'])) {
    main_calc();
}

if (isset($_POST['num-input'])) {
    input_sign($_POST['num-input']);
}