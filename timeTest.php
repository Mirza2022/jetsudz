<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script type="text/javascript">
        function fun() {
            html = "<label for='time' class='form-label'>Added Value Offer</label><div><input type='time' class='form - control' name='time' value='08: 00' id='time'><button type='button' class='btn btn-success' onclick='fun()'> Add</button></div>";
            var newField = document.getElementById('test');
            newField.innerHTML += html
        }
    </script>
</head>

<body>

    <div id="test">
        <div>
            <label for="time" class="form-label">Added Value Offer</label>
            <input type="time" class="form-control" name="time" value="" id="time">
            <button type="button" class="btn btn-success" onclick="fun()"> Add</button>
        </div>
    </div>

</body>

</html>

<li class="nav-item">
                            <?php if ($_SESSION['userRole'] == 'admin') { ?>
                                <a class="nav-link" href="./adminDash.php">Dashboard</a>
                            <?php } ?>

                            <?php if ($_SESSION['userRole'] == 'agent') { ?>
                                <a class="nav-link" href="./agentDash.php">Dashboard</a>
                        <?php }
                        } ?>
                        </li>