<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Calculator</title>
        <link rel="stylesheet" type="text/css" href="css/stylesheet.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="js/set-value.js"></script>
        <script src="js/get-value.js"></script>


        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>

<body>
    <div class="wrap">
        <form method="post" action="#" id="calculator-form" attr='[id="screen"]'>
        <table class="calculator" id="calc">
            <tbody><tr>
                <td colspan="4" class="calc_td_result">
                    <input type="text" readonly="readonly" name="calc_result" id="calc_result" class="calc_result" value="" style="font-size: 25px; width: 97%;
">
                </td>
            </tr>
            <tr>
                <td class="calc_td_btn">
                        <input type="button" class="c_btn"  id="ce" value="C">
                </td>
                <td class="calc_td_btn">
                        <input type="button" class="calc_btn" value="√2">
                </td>
                <td class="calc_td_btn">
                        <input type="button" class="calc_btn" value="%" >
                </td>
                <td class="calc_td_btn">
                        <input type="button" class="calc_btn" value="+">
                </td>
            </tr>
            <tr>
                <td class="calc_td_btn">
                        <input type="button" class="calc_btn" value="7">
                </td>
                <td class="calc_td_btn">
                        <input type="button" class="calc_btn" value="8">
                </td>
                <td class="calc_td_btn">
                        <input type="button" class="calc_btn" value="9">
                </td>
                <td class="calc_td_btn">
                        <input type="button" class="calc_btn"  value="-">
                </td>
            </tr>
                        <tr>
                <td class="calc_td_btn">
                        <input type="button" class="calc_btn" value="4">
                </td>
                <td class="calc_td_btn">
                        <input type="button" class="calc_btn" value="5">
                </td>
                <td class="calc_td_btn">
                        <input type="button" class="calc_btn" value="6">
                </td>
                <td class="calc_td_btn">
                        <input type="button" class="calc_btn" value="x">
                </td>
            </tr>
            <tr>
                <td class="calc_td_btn">
                        <input type="button" class="calc_btn" value="1">
                </td>
                <td class="calc_td_btn">
                        <input type="button" class="calc_btn" value="2">
                </td>
                <td class="calc_td_btn">
                        <input type="button" class="calc_btn" value="3">
                </td>
                <td class="calc_td_btn">
                        <input type="button" class="calc_btn" value="/">
                </td>
            </tr>
            <tr>
                <td class="calc_td_btn">
                        <input type="button" class="calc_btn" value="0">
                </td>
                <td class="calc_td_btn">
                           <input type="button" class="neg_btn" id="neg" name="-" value="+/-">
                </td>
                <td class="calc_td_btn">
                        <input type="button" class="calc_btn" value=".">
                </td>
                <td class="calc_td_btn">
                        <input type="submit" class="calc_btn" value="=" id="sum">
                </td>
            </tr>
        </tbody></table>
        </form>
    </div>
</body>
<footer>
</footer>
</html>