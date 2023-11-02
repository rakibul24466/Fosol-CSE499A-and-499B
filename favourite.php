<?php
include 'dbconnect.php';
session_start();

$email = $_SESSION['user_data']['email'];

if (isset($_POST['remove']) && isset($_POST['img_src'])) {
    // Get the img_src of the product to remove
    $imgSrcToRemove = $_POST['img_src'];

    $removeQuery = "DELETE FROM fav_prod WHERE img_src = '$imgSrcToRemove' AND user_email = '$email'";
    if ($conn->query($removeQuery)) {
        $_SESSION['message'] = $_POST['item_name'] . " removed from favorites!";
        $_SESSION['msg_type'] = "danger";
    }

}

$query = "SELECT img_src, item_name, price FROM fav_prod WHERE user_email = '$email'";
$result = $conn->query($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Favourite</title>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css' />
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css' />
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js'></script>
    <style>
        .switch {
            position: relative;
            display: inline-block;
            width: 60px;
            height: 34px;
        }

        .switch input {
            opacity: 0;
            width: 0;
            height: 0;
        }

        .slider {
            position: absolute;
            cursor: pointer;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: #ccc;
            -webkit-transition: .4s;
            transition: .4s;
        }

        .slider:before {
            position: absolute;
            content: "";
            height: 26px;
            width: 26px;
            left: 4px;
            bottom: 4px;
            background-color: white;
            -webkit-transition: .4s;
            transition: .4s;
        }

        input:checked + .slider {
            background-color: #2196F3;
        }

        input:focus + .slider {
            box-shadow: 0 0 1px #2196F3;
        }

        input:checked + .slider:before {
            -webkit-transform: translateX(26px);
            -ms-transform: translateX(26px);
            transform: translateX(26px);
        }

        .slider.round {
            border-radius: 34px;
        }

        .slider.round:before {
            border-radius: 50%;
        }
        td {
            text-align: center;
        }
    </style>
</head>
<body>
<?php include 'nav.php'; ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-10">
            <div class="table-responsive mt-2">
                <table class="table table-bordered table-striped text-center">
                    <thead>
                        <tr>
                            <td colspan="7">
                                <h4 class="text-center text-info m-0">প্রিয় পণ্য</h4>
                            </td>
                        </tr>
                        <tr>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Remove</th>
                            <!-- <th>Buy</th> -->
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($row = $result->fetch_assoc()) { ?>
                            <tr>
                                <td><img src="<?php echo $row['img_src']; ?>" alt="Product Image"></td>
                                <td style="text-align: center;"><?php echo $row['item_name']; ?></td>
                                <td><?php echo $row['price']; ?></td>
                                <td>
                                    <form action="favourite.php" method="post">
                                        <input type="hidden" name="img_src" value="<?php echo $row['img_src']; ?>">
                                        <input type="hidden" name="item_name" value="<?php echo $row['item_name']; ?>"> <!-- Include the product name -->
                                        <button type="submit" name="remove" class="btn btn-danger">Remove</button>
                                    </form>
                                </td>
                        </tr>
                    <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?php include 'footer.php'; ?>
</body>
</html>
