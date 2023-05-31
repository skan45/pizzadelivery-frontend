<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Retrieve the JSON data from the request body
    $json = file_get_contents("php://input");

    // Check if the JSON data is valid
    if ($json) {
        // Decode the JSON data into an associative array
        $user = json_decode($json, true);

        // Check if the "username" and "password" keys exist in the user array
        if (isset($user["username"]) && isset($user["password"])) {
            // Access the values using the array keys
            $username = $user["username"];
            $password = $user["password"];
             echo($username);
            // Do something with the username and password
            // ...

            // Return a success response
            echo "Data received successfully.";
        } else {
            // Return an error response if the required keys are missing
            echo "Invalid data format. Please provide username and password.";
        }
    } else {
        // Return an error response if the JSON data is not valid
        echo "Invalid JSON data.";
    }
} else {
    // Return an error response if the request method is not POST
    echo "Invalid request method.";
}
print_r($password);
?>