<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-3">
    <h2>Basic Table</h2>
    <p>The .table class adds basic styling (light padding and horizontal dividers) to a table:</p>
    <table class="table" id="testTable">
        <thead>
        <tr>
            <th>check</th>
            <th>Num</th>
            <th>Email</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td><input class="checkboxclass" type="checkbox"></td>
            <td>111</td>
            <td>john@example.com</td>
        </tr>
        <tr>
            <td><input class="checkboxclass" type="checkbox"></td>
            <td>111</td>
            <td>john@example.com</td>
        </tr>
        <tr>
            <td><input class="checkboxclass" type="checkbox"></td>
            <td>222</td>
            <td>mary@example.com</td>
        </tr>
        <tr>
            <td><input class="checkboxclass" type="checkbox"></td>
            <td>Dooley</td>
            <td>july@example.com</td>
        </tr>
        </tbody>
    </table>
</div>

</body>
</html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    let currentSO = null;

    $('.checkboxclass').on('click', function () {
        const clickedSO = $(this).closest('tr').find('td:eq(1)').text();
        currentSO = clickedSO;

        $('#testTable > tbody > tr ').each(function (row, tr) {
            const so = $(this).closest('tr').find('td:eq(1)').text();

            if (so == clickedSO) {
                $(this).closest('tr').find('input:checkbox').removeAttr("disabled");
            } else {
                $(this).closest('tr').find('input:checkbox').attr('disabled', 'disabled');
            }
        });
        if ($('#testTable input:checked').length == 0){
            $('#testTable > tbody > tr ').each(function (row, tr) {
                $(this).closest('tr').find('input:checkbox').removeAttr("disabled");
            });
        }
    });

</script>