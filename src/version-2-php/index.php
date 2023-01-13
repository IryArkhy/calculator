
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Перевірка усного рахунку</title>
        <link rel="stylesheet" href="styles.css">
    </head>
    <?php
        require("script.php");

    ?>

    <body>
        <center>
        <h1>Математичний тест</h1>
        <hr>
        <form name="test" method="post">
        <table>
            <tr>
                <td>
                    <select name="range">
                    <?php
                        $values=array("10", "20", "100", "150");
                        
                        foreach ($values as $value) {
                            echo '<option value="'.$value.'"'.
                            ($_POST['range'] == $value
                            ?' selected="selected"'
                            :'').'>'."0-".$value.'</option>';
                        }
                    ?>
                    </select>
                <td>
                    <select name="pick_sign">
                    <?php
                        $values=array("+", "-", "*");
                        
                        foreach ($values as $value) {
                            echo '<option value="'.$value.'"'.
                            ($_POST['pick_sign'] == $value
                            ?' selected="selected"'
                            :'').'>'.$value.'</option>';
                        }
                    ?>
                    </select>
                </td>
                <td>
                    <input class="generate-input" name="award" type="submit" value="Згенерувати операнди">
                </td>
            </tr>
        </table>
        <hr>
        <table>
            <tr>
                <td>
                    <input name="op1" size="2" maxlength="3" value="<?php echo $first_operand; ?>">
                </td>
                <td>
                    <input name="s_sign" size="1" maxlength="1" value="<?php echo $sign; ?>">
                </td>
                <td>
                    <input name="op2" size=2 maxlength="3" value="<?php echo $second_operand; ?>">
                </td>
                <td>=</td>
                <td>
                    <input name="user_result" size="3" maxlength="6" value="<?php echo $user_result; ?>">
                </td>
                <td>
                    <input name="r0" value="<?php echo $result_input_value; ?>">
                </td>
            </tr>
        </table>
        <hr>
        <table border="1">
            <tr>
                <td class="num-1">
                    <input class="num-input" name="num-input" type="submit" value="1">
                </td>
                <td class="num-2">
                    <input class="num-input" name="num-input" type="submit" value="2">
                </td>
                <td class="num-3">
                    <input class="num-input" name="num-input" type="submit" value="3">
                </td>
            </tr>
            <tr>
                <td class="num-4">
                    <input class="num-input" name="num-input" type="submit" value="4">
                </td>
                <td class="num-5">
                    <input class="num-input" name="num-input" type="submit" value="5">
                </td>
                <td class="num-6">
                    <input class="num-input" name="num-input" type="submit" value="6">
                </td>
                </tr>
            <tr>
                <td class="num-7">
                    <input class="num-input" name="num-input" type="submit" value="7">
                </td>
                <td class="num-9">
                    <input class="num-input" name="num-input" type="submit" value="8">
                </td>
                <td class="num-9">
                    <input class="num-input" name="num-input" type="submit" value="9">
                </td>
            </tr>
            <tr>
                <td class="num-0"><input class="num-input" name="num-input" type="submit" value="0">
                </td>
                <td colspan=2><input class="enter-input" name="num-input" type="submit" value="OK">
                </td>
            </tr>
        </table>
    </form>
        </center>
        <hr>
    </body>
</html>
