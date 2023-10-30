<?php
include 'dbconnect.php';
session_start();

// Get the email of the logged-in user
$email = $_SESSION['user_data']['email'];

// SQL query to fetch first name and last name from the users table for the logged-in user
$sql = "SELECT first_name, last_name FROM users WHERE email = '$email'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    while ($row = $result->fetch_assoc()) {
        $Name = $row["first_name"] . ' ' . $row["last_name"];
    }
} else {
    echo "No results for the current user";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="homepage.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <title>Fosol Homepage</title>
</head>
<style>
    body, h1, h2, p {
    padding: 0;
}

body {
    font-family: Arial, sans-serif;
}

header {
    background-color: #2e4d1d;
    color: #fff;
    padding: 20px 0;
}

nav ul {
    list-style: none;
    display: flex;
    justify-content: center;
}

nav li {
    margin: 0 20px;
}

nav a {
    text-decoration: none;
    color: #fff;
    font-weight: bold;
}
#voiceButton {
    background-color: #000000;
    color: white;
    border: none;
    border-radius: 10px;
    cursor: pointer;
}
.search-form {
    display: flex;
    justify-content: center;
    margin-top: 1rem;
}

.search-form input[type="text"] {
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px 0 0 5px;
}

.search-form button {
    background-color: #333;
    color: #fff;
    border: none;
    padding: 10px 15px;
    cursor: pointer;
}

#title{
    text-align: center;
}
.hero p {
    font-size: 24px;
    margin-top: 20px;
}

.btn {
    display: inline-block;
    padding: 10px;
    background-color: #f2a154;
    color: #fff;
    text-decoration: none;
    font-weight: bold;
    border-radius: 5px;
    margin-top: 0px;
    margin-left: 100px;
    transition: background-color 0.3s;
}

.btn:hover {
    background-color: #f07422;
}

a:hover{
    color: #f07422;
}
.features {
    display: flex;
    justify-content: space-around;
    padding: 50px 0;
    background-color: #d3e0c7;
}

.feature {
    text-align: center;
}

.feature img {
    max-width: 100%;
}

.feature h2 {
    font-size: 24px;
    margin-top: 20px;
}
.products {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 1rem;
    padding: 2rem;
    overflow: scroll;
}

.product {
    background-color: #fff;
    border: 1px solid #ddd;
    padding: 1rem;
    border-radius: 8px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    text-align: center;
}

.product img {
    max-width: 100%;
    height: auto;
}
.product_details{
    background-color: #d3e0c7;
}
.details{
    height: 60px;
    background-color: #2e4d1d;
    border-radius: 5px;
    text-align: center;
    color: rgb(255, 255, 255);
}
#details{
    text-align: center;
    margin-left: 30px;
}
footer {
    background-color: #2e4d1d;
    color: #fff;
    text-align: center;
    position: fixed;
    bottom: 0;
    width: 100%;
    height: 40px;
    margin-top: 10px;
}
</style>
<body>
    <header>
        <h1 id="title">ফসল</h1>
        <h3 style="text-align: center;">স্বাগতম, <?php echo $Name; ?></h3>
        <nav>
            <ul>
                <li><a href="homepage.html">হোমপেজ</a></li>
                <li><a href="about.html">আমাদের সম্পর্কে</a></li>
                <li><a href="service.html">আমাদের সেবা</a></li>
                <li><a href="#">যোগাযোগ</a></li>
                <li><a href="user_profile.php">প্রোফাইল</a></li>
                <li><a href="feedback.php">প্রতিক্রিয়া জানান</a></li>
                <li><a href="weather.html">আবহাওয়ার পূর্বাভাস</a></li>
            </ul>
        </nav>
        <form class="search-form">
            <div class="chat-footer">
                <input type="text" id="userInput" name="query" placeholder="পন্য খুজুন...">
                <button id="voiceButton" onclick="startVoiceInput()"><i class="fas fa-microphone-alt"
                        onclick="startVoiceInput()" @nbsp;></i></button>
                <button id="enterBtn" onclick="performSearch()"><i class="fas fa-search"></i></button>
            </div>
        </form>
    </header>

    <div class="details">
        <h2 style="padding-top: 10px;" id="details">পণ্যের বিবরণ</h2>
    </div>
    <div class="product_details">
        <section class="products">
            <div class="product">
                <img src="/img/apple.jpeg" alt="Loading">
                <h2>আপেল</h2>
                
            </div>
            <div class="product">
                <img src="/img/banana.jpeg" alt="Loading">
                <h2>কলা</h2>
                
            </div>
            <div class="product">
                <img src="/img/orange.jpeg" alt="Loading">
                <h2>কমলা</h2>
            
            </div>
            <div class="product">
                <img src="/img/strawberry.jpeg" alt="Loading">
                <h2>স্ট্রবেরি</h2>
            
            </div>
            <div class="product">
                <img src="/img/grape.jpeg" alt="Loading">
                <h2>আঙ্গুর</h2>
            
            </div>
            <div class="product">
                <img src="/img/watermelone.jpeg" alt="Loading">
                <h2>তরমুজ</h2>
            
            </div>
            <div class="product">
                <img src="/img/mango.jpeg" alt="Loading">
                <h2>আম</h2>
            
            </div>
            <div class="product">
                <img src="/img/pineapple.jpeg" alt="Loading">
                <h2>আনারস</h2>
            
            </div>
            <div class="product">
                <img src="/img/lemon.jpeg" alt="Loading">
                <h2>লেবু</h2>
            
            </div>
            <div class="product">
                <img src="/img/papaya.jpeg" alt="Loading">
                <h2>পেঁপে</h2>
            
            </div>
            <div class="product">
                <img src="/img/blueberry.jpeg" alt="Loading">
                <h2>বিলবেরী </h2>
            
            </div>
            <div class="product">
                <img src="/img/pear.jpeg" alt="Loading">
                <h2>নাশপাতি</h2>
            
            </div>
    </section>
    </div>
    <footer>
        <p>&copy; 2023 ফসল.</p>
    </footer>
</body>
</html>
