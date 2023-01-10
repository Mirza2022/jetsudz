<?php

try {
    $username = "root";
    $password = "";
    $dsn = new PDO("mysql:host = localhost; dbname=jetsudz", $username, $password);
    $dsn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "connected successfully!";
    //return $dsn;
}
//if any error print an error message and kill the connection
catch (PDOException $e) {
    //echo "Error: Not connected";
    die('Connection Error: ' . $e->getMessage());
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style type="text/css">
        .chartBox {
            width: 700px;
        }
    </style>
</head>

<body>


    <?php
    // Attempt select query execution

    /*try {
        $sql = "SELECT * FROM barchart";
        $result = $dsn->query($sql);
        if ($result->rowCount() > 0) {
            while ($row = $result->fetch()) {
                echo $row['revenue'];
            }

            unset($result);
        } else {
            echo "No records matching your query were found.";
        }
    } catch (PDOException $e) {
        die("ERROR: Could not able to execute $sql. " . $e->getMessage());
    }

    // Close connection
    unset($pdo);
    */

    $stmt = $dsn->prepare('SELECT * FROM barchart');
    if (!$stmt->execute()) {
        $stmt = null; //disregard the statement
        echo 'query failed';
        //header("location: ../");
        //exit();
    } elseif ($stmt->rowCount() == 0) {
        $stmt = null; //disregard the statement
        echo 'no data found';
        //header("location: ../");
        //return $records = 0;
        //exit();
    } else {
        while ($records = $stmt->fetchAll(PDO::FETCH_ASSOC)) {
            foreach ($records as $record) {
                $revenue[] = $record['revenue'];
                $profit[] = $record['profit'];
                $cost[] = $record['cost'];
            }
            //free memory
            unset($records);
        };
        //print_r($records);
        //header("location: ../");
    }
    // Close db connection
    unset($dsn);
    ?>

    <div class="chartBox">
        <canvas id="myChart"></canvas>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script>
        //setup block

        const revenue = <?php echo json_encode($revenue); ?>;
        const profit = <?php echo json_encode($profit); ?>;
        const cost = <?php echo json_encode($cost); ?>;

        const data = {
            labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
            datasets: [{
                    label: 'Revenue',
                    data: revenue,
                    backgroundColor: 'rgba(255, 99, 132, 0.2)',
                    borderColor: 'rgba(255, 99, 132, 1)',
                    borderWidth: 1
                },
                {
                    label: 'Profit',
                    data: profit,
                    backgroundColor: 'rgba(54, 162, 235, 0.2)',
                    borderColor: 'rgba(54, 162, 235, 1)',
                    borderWidth: 1
                },
                {
                    label: 'Cost',
                    data: cost,
                    backgroundColor: 'rgba(255, 206, 86, 0.2)',
                    borderColor: 'rgba(255, 206, 86, 1)',
                    borderWidth: 1
                }
            ]
        };
        //config block
        const config = {
            type: 'bar',
            data,
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        };

        //render block
        const myChart = new Chart(
            document.getElementById('myChart'),
            config
        );
    </script>

</body>

</html>