<?php
include 'dbconnect.php';
session_start();

$email = $_SESSION['user_data']['email'];

$query = "SELECT id, user_email, qr_details, scan_count FROM qr ";
$result = $conn->query($query);

if ($row = $result->fetch_assoc()) {
    ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="author" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>User Details</title>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css' />
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css' />
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js'></script>
    <style>
        .container {
            padding-bottom: 10px;
        }

        td {
            text-align: center;
        }

        td img {
            height: 8rem;
            border-radius: 1.5rem;
            width: 50%;
        }

        table h4 {
            color: black !important;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="table-responsive mt-2">
                    <table class="table table-bordered table-striped text-center">
                        <thead>
                            <tr>
                                <td colspan="4">
                                    <h2 class="text-center text-info m-0" style="color: black !important;">QR Details</h2>
                                </td>
                            </tr>
                            <tr>
                                <th>ID</th>
                                <th>User</th>
                                <th>QR Details</th>
                                <th>Scan Count</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><?php echo $row['id']; ?></td>
                                <td><?php echo $row['user_email']; ?></td>
                                <td><?php echo $row['qr_details']; ?></td>
                                <td><?php echo $row['scan_count']; ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</body>

</html>

<?php
} else {
    echo "NO Data Available";
}
?>
