<?php
include 'dbconnect.php';
$output = '';
if (isset($_POST["query"])) {
    $search = mysqli_real_escape_string($conn, $_POST["query"]);
    $query = "SELECT item_name, img_src FROM products WHERE item_name LIKE '%" . $search . "%'";
    $result = mysqli_query($conn, $query);
    $output = '<ul class="list-unstyled">';
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_array($result)) {
            $item_name = $row["item_name"];
            $img_src = $row["img_src"];
            $img_src = urlencode($img_src);
            $output .= '<li data-img-src="' . $img_src . '"><a href="#">' . $item_name . '</a></li>';
        }
    } else {
        $output .= '<li>Product Not Found</li>';
    }
    $output .= '</ul>';
    echo $output;
}
