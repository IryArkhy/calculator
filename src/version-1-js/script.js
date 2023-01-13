var max_value, operand1 = 0;
var operand2 = 0; 
var result = 0;
var flag = 0; 
var sign = "+";
var input = "";

//10 Выбрать сложение или вычитание
function set_sign(x) {
    if (x == "+"){
        flag = 0;
        sign = "+";
    }

    if (x == "-"){
        flag = 1; 
        sign = "-";
    }

    if (x == "*"){
        flag = 3; 
        sign = "*";
    }

    return true;
}

//16 Определить первый операнд
function f_operand() {
    operand1 = Math.floor(Math.random() * max_value);
    return parseInt(operand1);
}

//21 Определить второй операнд
function s_operand() {
    if (flag == 0 || flag == 3) {
        operand2 = Math.floor(Math.random() * (max_value - operand1));
    } else {
        operand2 = Math.floor(Math.random() * operand1);
    }

    return parseInt(operand2);
}

function resetInput() {
    window.document.test.r0.value = "Думай!?";
    window.document.test.input = ""; 
    input = "";
}

function notifySuccess() {
    window.document.test.r0.value = "Молодец!";    
}

//30 Проверить введенные данные
function input_sign(x) {
    if (x == 10) {
        if (flag == 0){
            if (operand1 + operand2 == parseInt(input)) {
                notifySuccess()
            } else {
                resetInput()
            }
        }

        if (flag == 1) {
            if (operand1 - operand2 == parseInt(input)) {
                notifySuccess()
            } else {
                resetInput()
            }
        }

        if (flag == 3) {
            if (operand1 * operand2 == parseInt(input)) {
                notifySuccess()
            } else {
                resetInput()
            }
        }

        return true;
    }

    input += x;
    window.document.test.result.value = input;

    return true;
}

//60 Генерация варианта
function main_calc() {
    operand1 = f_operand();
    window.document.test.op1.value = operand1;

    operand2 = s_operand();
    window.document.test.op2.value = operand2;
    
    window.document.test.s_sign.value = sign;
    input = ""; 
    window.document.test.input = "";
    window.document.test.r0.value = " ???";

    return true;
}