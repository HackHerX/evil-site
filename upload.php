<?php
$data = json_decode(file_get_contents('php://input'), true);
if (!empty($data['image'])) {
    $image = base64_decode(str_replace('data:image/png;base64,', '', $data['image']));
    file_put_contents('screenshots/' . time() . '.png', $image);
}
?>
