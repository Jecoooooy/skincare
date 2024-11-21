<?php
include 'database.php';
header('Content-Type: application/json');


if (isset($_POST['first_name'], $_POST['last_name'], $_POST['phone_number'], $_POST['email'], $_POST['g-recaptcha-response'])) {
    $first_name = htmlspecialchars($_POST['first_name'], ENT_QUOTES, 'UTF-8');
    $last_name = htmlspecialchars($_POST['last_name'], ENT_QUOTES, 'UTF-8');
    $phone_number = htmlspecialchars($_POST['phone_number'], ENT_QUOTES, 'UTF-8');
    $email = htmlspecialchars($_POST['email'], ENT_QUOTES, 'UTF-8');
    $captchaResponse = $_POST['g-recaptcha-response'];

    $secretKey = "6LdS_4QqAAAAALwfGsrtLNHkapFIMIp73Udp98D1";  

    // Verify CAPTCHA 
    $verifyUrl = 'https://www.google.com/recaptcha/api/siteverify';
    $response = file_get_contents($verifyUrl . '?secret=' . $secretKey . '&response=' . $captchaResponse);
    $responseKeys = json_decode($response, true);

    if (intval($responseKeys["success"]) !== 1) {
        echo json_encode([
            'status' => 'error',
            'message' => 'Please complete the CAPTCHA.'
        ]);
        exit;
    }


    $stmt = $conn->prepare("INSERT INTO register (first_name, last_name, phone_number, email, created_at) VALUES (?, ?, ?, ?, NOW())");
    $stmt->bind_param("ssss", $first_name, $last_name, $phone_number, $email);

    // Insert data into the database
    try {
        if ($stmt->execute()) {
            echo json_encode([
                'status' => 'success',
                'message' => 'Registration successful!'
            ]);
        } else {
            throw new Exception("Error executing query: " . $stmt->error);
        }
    } catch (Exception $e) {
        echo json_encode([
            'status' => 'error',
            'message' => $e->getMessage()
        ]);
    }


    $stmt->close();
    $conn->close();
} else {
    echo json_encode([
        'status' => 'error',
        'message' => 'Missing required fields.'
    ]);
}
?>
