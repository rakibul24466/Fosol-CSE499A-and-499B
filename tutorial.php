<?php

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <link rel="stylesheet" href="style.css">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tutorial</title>
</head>
<style>
    body {
    font-family: Arial, sans-serif;
    background-color: #f0f0f0;
    margin: 0;
    padding: 0;
}

.tutorial {
    max-width: 1200px;
    margin: 20px auto;
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    grid-gap: 20px;
}

.tutorial iframe {
    width: 100%;
    height: 200px;
    border: 1px solid #ddd;
    border-radius: 5px;
    box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
    transition: transform 0.2s ease-in-out;
}

.tutorial iframe:hover {
    transform: scale(1.05);
}

body.main {
    background-image: url('background.jpg');
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
}
header {
        background-color: #DDFFBB;
        color: black;
        padding: 20px 0;
    }

    nav ul {
        list-style: none;
        display: flex;
        justify-content: center;
        color: black;

    }
    nav ul li a{
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

    }
    #voiceButton {
        background-color: #333;
        color: white;
        border: none;
        border-radius: 10px;
        cursor: pointer;
    }
    #voiceButton:hover{
        background-color: #f07422;
    }
    .search-form button {
        background-color: #333;
        color: #ffff;
        border: none;
        padding: 10px 15px;
        cursor: pointer;
    }
    footer {
        background-color: #2e4d1d;
        color: #fff;
        text-align: center;
        position: relative;
        bottom: 0;
        width: 100%;
        height: 40px;
        margin-top: 10px;
    }
</style>
<body class="main">
        <header>
        <nav>
            <ul>
                <li><a href="homepage.php">হোমপেজ</a></li>
                <li><a href="about.php">আমাদের সম্পর্কে</a></li>
                <li><a href="service.php">আমাদের সেবা</a></li>
                <li><a href="user_profile.php">প্রোফাইল</a></li>
                <li><a href="https://weather-six-theta.vercel.app/?fbclid=IwAR02yOudHnHDnmagcdeuMwOPBkppIL_2s4s9v5CLYIn_XrnxryJpzPXVO6U">আবহাওয়ার পূর্বাভাস</a></li>
                <li><a href="qr.php">QR স্ক্যানার</a></li>
            </ul>

        </nav>

    </header>
    <div class="tutorial">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/rDXyPa24BEI?si=U70JfICwoAvaGR8I"
            title="YouTube video player" frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>

        <iframe width="560" height="315" src="https://www.youtube.com/embed/KpfK47pSazs?si=tvd1EYz2SzaNp_4-"
            title="YouTube video player" frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>

        <iframe width="560" height="315" src="https://www.youtube.com/embed/O2G8Q155kyo?si=sh5ZGEXpI2EUixLy"
            title="YouTube video player" frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>

        <iframe width="560" height="315" src="https://www.youtube.com/embed/dCUmet2go2c?si=OR1-w8W7-MrI9DNa"
            title="YouTube video player" frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>

        <iframe width="560" height="315" src="https://www.youtube.com/embed/I6qL8hJ5MMo?si=i9LH7z8J-gwPbf8s"
            title="YouTube video player" frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>

        <iframe width="560" height="315" src="https://www.youtube.com/embed/dIqiwZBGPO0?si=fztuS6TXiJfpCcqf"
            title="YouTube video player" frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>

        <iframe width="560" height="315" src="https://www.youtube.com/embed/Kvqy9BdPqi4?si=b-ZCzHi30eWlBJi2"
            title="YouTube video player" frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>

        <iframe width="560" height="315" src="https://www.youtube.com/embed/55yV0Mh0G_s?si=qxh-WnfggkOv_qpg"
            title="YouTube video player" frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>

        <iframe width="560" height="315" src="https://www.youtube.com/embed/S7uuK4-ZZ-Q?si=kWZ6qcC6h_ZATM7W"
            title="YouTube video player" frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>

        <iframe width="560" height="315" src="https://www.youtube.com/embed/LpE_7wZ1_FM?si=J0f-wvVA_mhCb2kk"
            title="YouTube video player" frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>

        <iframe width="560" height="315" src="https://www.youtube.com/embed/WUnVR1E3gOQ?si=iKunEA3qZT0Wbmrs"
            title="YouTube video player" frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>

        <iframe width="560" height="315" src="https://www.youtube.com/embed/TdtiAe7juZg?si=YxJog0LJ_F_g2up1"
            title="YouTube video player" frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>

        <iframe width="560" height="315" src="https://www.youtube.com/embed/QblvZeA2mCU?si=bNMFUUKm8R2Wle-g"
            title="YouTube video player" frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>

        <iframe width="560" height="315" src="https://www.youtube.com/embed/1Cn4DmL_0Fw?si=cz-jrIfLIvGH7OvE"
            title="YouTube video player" frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>

        <iframe width="560" height="315" src="https://www.youtube.com/embed/Mx66bGDCMbM?si=LljhOQCrERMchZb3"
            title="YouTube video player" frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>

        <iframe width="560" height="315" src="https://www.youtube.com/embed/s0AZdTAldrU?si=Wv55QM-9HxObH_NJ"
            title="YouTube video player" frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>

        <iframe width="560" height="315" src="https://www.youtube.com/embed/dIqiwZBGPO0?si=EfdbxwEYDWgvgvWj"
            title="YouTube video player" frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>

        <iframe width="560" height="315" src="https://www.youtube.com/embed/rZrSucsWq4A?si=F5YBaBxBFHftkGPA"
            title="YouTube video player" frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>

        <iframe width="560" height="315" src="https://www.youtube.com/embed/X1dy0hQOZ-s?si=OMRc-3nnmFWgQw0-"
            title="YouTube video player" frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>

        <iframe width="560" height="315" src="https://www.youtube.com/embed/4YHZHCWT1AU?si=21bHOo0xBvi3I30c"
            title="YouTube video player" frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>

        <iframe width="560" height="315" src="https://www.youtube.com/embed/s1EfR8o9doY?si=2uBGNF16NZoZiJWA"
            title="YouTube video player" frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>

        <!-- <iframe width="560" height="315" src="https://www.youtube.com/embed/bjXHLNFp7qA?si=nUC5t4xQk9U6lRiW"
            title="YouTube video player" frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe> -->





    </div>
<footer>
        <p>&copy; 2023 ফসল.</p>
    </footer>
</body>

</html>
