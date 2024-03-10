<?php
include 'dbconnect.php';
$output = '';
if (isset($_POST["query"])) {
    $search = mysqli_real_escape_string($conn, $_POST["query"]);
    $query = "SELECT item_name FROM products WHERE item_name LIKE '%" . $search . "%'";
    $result = mysqli_query($conn, $query);
    $output = '<ul class="list-unstyled">';
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_array($result)) {
            $item_name = $row["item_name"];
            $output .= '<li><a href=" ">' . $item_name . '</a></li>';
        }
    } else {
        $output .= '<li>Product Not Found</li>';
    }
    $output .= '</ul>';
    echo $output;
}
