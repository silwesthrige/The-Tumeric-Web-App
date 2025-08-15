<?php
session_start();
header('Content-Type: application/json');

// Get JSON input
$input = json_decode(file_get_contents('php://input'), true);

if (!$input || !isset($input['action'])) {
    echo json_encode(['success' => false, 'message' => 'Invalid request']);
    exit;
}

switch ($input['action']) {
    case 'login':
        if (isset($input['user_data'])) {
            $userData = $input['user_data'];
            
            // Set session variables
            $_SESSION['logged_in'] = true;
            $_SESSION['user_id'] = $userData['id'];
            $_SESSION['user_email'] = $userData['email'];
            $_SESSION['user_name'] = $userData['username'];
            $_SESSION['user_role'] = $userData['role'];
            $_SESSION['user_image'] = $userData['imageUrl'] ?? '';
            
            echo json_encode(['success' => true, 'message' => 'Login successful']);
        } else {
            echo json_encode(['success' => false, 'message' => 'User data missing']);
        }
        break;
        
    case 'logout':
        // Clear all session variables
        $_SESSION = array();
        
        // Destroy the session cookie
        if (isset($_COOKIE[session_name()])) {
            setcookie(session_name(), '', time()-3600, '/');
        }
        
        // Destroy the session
        session_destroy();
        
        echo json_encode(['success' => true, 'message' => 'Logout successful']);
        break;
        
    default:
        echo json_encode(['success' => false, 'message' => 'Unknown action']);
        break;
}
?>