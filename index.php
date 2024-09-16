<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HRMS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <style>
        .center {
            background-color: pink;
            width: 90%; 
            max-width: 800px; 
            margin: auto;
            padding: 20px;
            height: auto;
            text-align: center;
        }
        .total_amo {
            font-size: 1.5rem; 
            display: block;
            margin-top: 20px;
            padding: 10px;
            color: white;
            border-radius: 5px;
        }
        .form-container {
            text-align: center;
            margin: auto;
        }
        
        @media (max-width: 576px) {
            .total_amo {
                font-size: 1.2rem;
            }
        }
    </style>
</head>
<body class="container-fluid" style="background-color: powderblue;">
    <div class="center">
        <h1 class="text-bg-primary">HRMS</h1>
        <div class="form-container">
            <table class="table table-bordered">
                <tr>
                    <td class="text-center">BASIC SALARY </td>
                    <td><input name="basic_salary" type="text" class="form-control sal_amo"></td>
                </tr>
                <tr>
                    <td class="text-center">TRANSPORT ALLOWANCE </td>
                    <td><input name="basic_ta" type="text" class="form-control trs_amo"></td>
                </tr>
                <tr>
                    <td class="text-center">FOOD ALLOWANCE </td>
                    <td><input name="basic_allow" type="text" class="form-control fbi_amo"></td>
                </tr>
                <tr>
                    <td class="text-center">BONUS </td>
                    <td><input name="basic_bonus" type="text" class="form-control bonus_amo"></td>
                </tr>
                <tr>
                    <td class="text-center">INCOME TAX</td>
                    <td><input name="basic_tax" type="text" class="form-control tax_amo"></td>
                </tr>
                <tr>
                    <td class="text-center">PROVIDENT FUND</td>
                    <td><input name="basic_fund" type="text" class="form-control pf_amo"></td>
                </tr>
            </table>
            <button class="btn btn-success view_app">Calculate</button>
            <span class="total_amo"></span>
        </div>
        <h1>THANK YOU...</h1>
    </div>
    <script>
        $(document).ready(function() {
            $(".view_app").click(function() {
                var q1 = parseInt($(".sal_amo").val()) || 0;
                var q2 = parseInt($(".trs_amo").val()) || 0;
                var q3 = parseInt($(".fbi_amo").val()) || 0;
                var q4 = parseInt($(".bonus_amo").val()) || 0;
                var q5 = parseInt($(".tax_amo").val()) || 0;
                var q6 = parseInt($(".pf_amo").val()) || 0;
                var total = (q1 + q2 + q3 + q4) - (q5 + q6);

                $(".total_amo").text("NET AMOUNT = " + total);

                if (total < 10000) {
                    $(".total_amo").css("background", "red");
                } else if (total >= 10000 && total <= 30000) {
                    $(".total_amo").css("background", "yellow");
                    $(".total_amo").css("color", "black"); 
                } else {
                    $(".total_amo").css("background", "green");
                }
            });
        });
    </script>
</body>
</html>
