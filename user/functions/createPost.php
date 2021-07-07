<?php

require '../../config/config.php';

//Retriving     
$title = filter_input(INPUT_POST, 'title', FILTER_SANITIZE_STRING);
$link = filter_input(INPUT_POST, 'link', FILTER_SANITIZE_STRING);

// for($i = 0; $i < 1000; $i++) {

// }

// echo json_encode([
//     'status' => 'success',
//     'data' => [
//         'title' => 'link',
//         'link' => 'link'
//     ]
// ]);


$error_arr = [];

if(empty($title)) {
    $error_arr['title'] = 'Title is not valid';
}
if(empty($link)) {
    $error_arr['link'] = 'Link is not valid';
}
if(!isset($_FILES['picture'])) {
    $error_arr['picture'] = 'Picture is not valid';
}    

if(count($error_arr) > 0) {
    echo json_encode([
        'status' => 'fail',
        'data' => $error_arr
    ]);

    return;
}

// Getting filename
$filename = $_FILES['picture']['name'];

$extension = pathinfo($filename, PATHINFO_EXTENSION);
$extension = strtolower($extension);

// Upload file
$filenameToStore = '/public/uploads/' . time() . '.' . $extension;
$filenameToStore_in_folder = SITE_ROOT . $filenameToStore;

// Validating correct image type
$valid_format = ['jpg','jpeg', 'png'];
if(!in_array($extension, $valid_format)){
    $error_arr['picture'] = 'The file formart should be jpg, jpeg, or png';
}

if(!move_uploaded_file($_FILES['picture']['tmp_name'], $filenameToStore_in_folder)){
    $error_arr['picture'] = 'The Picture cannot be uploaded';
    echo json_encode([
        'status' => 'fail',
        'data' => $error_arr
    ]);

}

echo json_encode([
    'status' => 'success',
    'data' => [
        'title' => $title,
        'link' => $link,
        'path' => $filenameToStore
    ]
]);
