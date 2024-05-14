<?php
include 'dbconnect.php';
session_start();

if (isset($_GET['img_src'])) {
    $img_src = urldecode($_GET['img_src']);

    $sql = "SELECT * FROM products WHERE img_src = '$img_src'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $product = $result->fetch_assoc();
    } else {
        echo "Product not found";
        exit; 
    }
} else {
    echo "Product Image Source not provided";
    exit; 
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Details</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #E6F1E8;
            text-align: center;
            padding-top: 50px;
            margin: 0;
            padding: 0;
        }

        h1 {
            color: #333;
            padding-top: 60px;
        }

        div {
            display: inline-block;
            background-color: #FFF;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        img {
            width: 300px;
            height: auto;
            display: block;
            margin: 0 auto 20px;
        }

        h2 {
            color: #555;
            margin-bottom: 10px;
        }

        p {
            color: #777;
            margin-bottom: 0;
        }

        header {
            background-color: #DDFFBB;
            color: black;
            padding: 20px 0;
            margin: 0;
        }

        nav ul {
            list-style: none;
            display: flex;
            justify-content: center;
            color: black;
        }

        nav ul li a {
            text-decoration: none;
        }

        nav li {
            margin: 0 20px;
            color: black;
        }

        nav a {
            text-decoration: none;
            color: #fff;
            font-weight: bold;
            color: black;
        }

        a:hover {
            color: #f07422;
        }

footer {
            background-color: #2e4d1d;
            color: white;
            text-align: center;
            position: fixed;
            bottom: 0;
            width: 100%;
            height: 40px;
            margin-top: 0; 
            padding: 10px 0;
        }
    </style>
</head>

<body>
    <header>
        <nav>
            <ul>
                <li><a href="homepage.php">হোমপেজ</a></li>
                <li><a href="user_profile.php">প্রোফাইল</a></li>
                <li><a href="https://weather-six-theta.vercel.app/?fbclid=IwAR02yOudHnHDnmagcdeuMwOPBkppIL_2s4s9v5CLYIn_XrnxryJpzPXVO6U">আবহাওয়ার পূর্বাভাস</a></li>
                <li><a href="qr.php">QR স্ক্যানার</a></li>
            </ul>
        </nav>
    </header>
    <h1>পণ্যের বিবরণ</h1>
    <div>
        <img src="<?php echo $product['img_src']; ?>" alt="<?php echo $product['item_name']; ?>">
        <h2><?php echo $product['item_name']; ?></h2>
        <p>Price: <?php echo $product['price']; ?>৳</p>
    </div>
    <footer>
        <p>&copy; 2023 ফসল.</p>
    </footer>
</body>

</html>