<?php
include 'dbconnect.php';
session_start();

$email = $_SESSION['user_data']['email'];

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $qr_details = $_POST['content'];

    $stmt_check = $conn->prepare("SELECT id, scan_count FROM qr WHERE qr_details = ?");
    $stmt_check->bind_param("s", $qr_details);
    $stmt_check->execute();
    $stmt_check->store_result();

    if ($stmt_check->num_rows > 0) {
        $stmt_check->bind_result($id, $scan_count);
        $stmt_check->fetch();

        $scan_count++;
        $stmt_update = $conn->prepare("UPDATE qr SET scan_count = ? WHERE id = ?");
        $stmt_update->bind_param("ii", $scan_count, $id);
        $stmt_update->execute();
        $stmt_update->close();
    } else {

        $stmt_insert = $conn->prepare("INSERT INTO qr (qr_details, scan_count, user_email) VALUES (?, 1, ?)");
        $stmt_insert->bind_param("ss", $qr_details, $email); 
        $stmt_insert->execute();
        $stmt_insert->close();
    }

    $stmt_check->close();

    $conn->close();

    echo "<script>alert('Details saved.');</script>";
}
