<?php
if (isset($_FILES['file'])) {
    $errors = array();
    $allowed_extensions = array("jpg", "jpeg", "png", "pdf", "doc", "docx", "txt");
    $max_size = 2097152; // 2MB size limit
    $upload_dir = "documents/";

    if (!file_exists($upload_dir)) {
        mkdir($upload_dir, 0777, true);
    }

    // Loop through each file
    $total_files = count($_FILES['file']['name']);

    for ($i = 0; $i < $total_files; $i++) {
        $file_name = $_FILES['file']['name'][$i];
        $file_size = $_FILES['file']['size'][$i];
        $file_tmp = $_FILES['file']['tmp_name'][$i];
        $file_ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));

        // Check file extension
        if (!in_array($file_ext, $allowed_extensions)) {
            $errors[] = "File $file_name memiliki ekstensi yang tidak diizinkan.";
            continue;
        }

        // Check file size
        if ($file_size > $max_size) {
            $errors[] = "File $file_name melebihi ukuran maksimum 2MB.";
            continue;
        }

        // Move the file to the upload directory
        if (empty($errors)) {
            $target_file = $upload_dir . $file_name;
            if (move_uploaded_file($file_tmp, $target_file)) {
                echo "File $file_name berhasil diunggah.<br>";
            } else {
                echo "Gagal mengunggah file $file_name.<br>";
            }
        }
    }

    // Print errors if any
    if (!empty($errors)) {
        echo implode("<br>", $errors);
    }
}
