<?php
function escape($data) {
    // If the $data is null or an empty string, return a default message
    if ($data === null || $data === '') {
        return 'No date available'; // You can change this to any default message
    }

    // If the $data is a valid date, format it to only display the date
    if (strtotime($data)) {
        $data = date('Y-m-d', strtotime($data)); // Format as 'YYYY-MM-DD' (date only)
    }

    // Escape the data to prevent XSS attacks
    $data = htmlspecialchars($data, ENT_QUOTES | ENT_SUBSTITUTE, "UTF-8");
    $data = trim($data);
    $data = stripslashes($data);

    return $data;
}
