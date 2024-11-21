<?php
    include 'database.php';
    header('Content-Type: application/json');
    
    $first_name = htmlspecialchars($_POST['first_name'], ENT_QUOTES, 'UTF-8');
    $last_name = htmlspecialchars($_POST['last_name'], ENT_QUOTES, 'UTF-8');
    $phone_number = htmlspecialchars($_POST['phone_number'], ENT_QUOTES, 'UTF-8');
    $email = htmlspecialchars($_POST['email'], ENT_QUOTES, 'UTF-8');

    $secretKey = "6LdS_4QqAAAAALwfGsrtLNHkapFIMIp73Udp98D1";
    $captchaResponse = $_POST['g-recaptcha-response'];

    $verifyUrl = 'https://www.google.com/recaptcha/api/siteverify';
        $response = file_get_contents($verifyUrl . '?secret=' . $secretKey . '&response=' . $captchaResponse);
        $responseKeys = json_decode($response, true);
        
        // Check if the CAPTCHA was successfully validated
        if(intval($responseKeys["success"]) !== 1) {
            echo json_encode([
                'status' => 'error',
                'message' => 'Please complete the CAPTCHA.'
            ]);
            exit;
        }
        
    // Prepare the SQL statement
    $stmt = $conn->prepare("INSERT INTO register (first_name, last_name, phone_number, email) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $first_name, $last_name, $phone_number, $email);

    // Insert data into the database
    try {
        // Execute the prepared statement
        if ($stmt->execute()) {
            // Send success response as JSON
            echo json_encode([
                'status' => 'success',
                'message' => 'Registration successful!'
            ]);
        } else {
            throw new Exception("Error executing query: " . $stmt->error);
        }
    } catch (Exception $e) {
        // Send error response as JSON
        echo json_encode([
            'status' => 'error',
            'message' => $e->getMessage()
        ]);
    }

    // Close the prepared statement and connection
    $stmt->close();

?>
