<?php
session_start();

// If user is already logged in, redirect to dashboard
if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
    header('Location: index.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login - The Turmeric</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #fdf6f4ff;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            margin: 0;
        }

        .login-container {
            background-color: hsla(23, 100%, 49%, 0.20);
            padding: 2rem;
            border-radius: 12px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.5);
            max-width: 400px;
            width: 100%;
            text-align: center;
            z-index: 10;
        }

        .login-container img {
            width: 100px;
            height: 100px;
            object-fit: contain;
            margin-bottom: 1rem;
        }

        .login-container h3 {
            font-weight: bold;
            margin-bottom: 0.2rem;
            color: #ea580c;
        }

        .login-container h6 {
            color: #2c2c2cff;
            margin-bottom: 1rem;
            font-weight: 600;
        }

        .form-label {
            text-align: left;
            display: block;
            font-weight: 600;
            margin-bottom: 0.25rem;
        }

        .form-control {
            border-radius: 8px;
            padding: 10px;
        }

        .btn-login {
            background-color: #ea580c;
            color: white;
            border: none;
            padding: 12px;
            border-radius: 6px;
            width: 100%;
            font-weight: 600;
            margin-top: 1rem;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.5);
        }

        .btn-login:hover {
            background-color: #d54f04;
        }

        .form-check-label {
            font-size: 0.9rem;
        }

        .forgot-link {
            float: right;
            font-size: 0.9rem;
            color: #1e1d1dff;
        }

        .info-text {
            font-size: 0.75rem;
            color: #000000ff;
            margin-top: 1rem;
        }

        /* Loading Overlay */
        .loading-overlay {
            position: fixed;
            top: 0;
            left: 0;
            background-color: rgba(234, 88, 12, 0.9); 
            width: 100%;
            height: 100%;
            z-index: 9999;
            display: none;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            text-align: center;
        }

        .loading-overlay img {
            width: 80px;
            height: 80px;
            margin-bottom: 1rem;
        }

        .loading-overlay h2 {
            font-weight: bold;
            color: #363636ff;
            margin-bottom: 0.5rem;
        }

        .loading-overlay p {
            margin-bottom: 1rem;
            font-weight: 500;
            color: #444;
        }

        .spinner {
            width: 50px;
            height: 50px;
            border: 6px solid #f3f3f3;
            border-top: 6px solid #ea580c;
            border-radius: 50%;
            animation: spin 1s linear infinite;
        }

        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }

        /* Alert Styles */
        .alert {
            margin-bottom: 1rem;
            border-radius: 8px;
        }

        .alert-danger {
            background-color: #f8d7da;
            border-color: #f5c6cb;
            color: #721c24;
        }
    </style>
</head>
<body>

    <!-- Loading Overlay -->
    <div class="loading-overlay" id="loadingOverlay">
        <img src="public/images/UK PJ Logo.png" alt="The Turmeric Logo">
        <h2>The Turmeric</h2>
        <p>Authenticating user...</p>
        <div class="spinner"></div>
    </div>

    <!-- Login Card -->
    <div class="login-container">
        <img src="public/images/UK PJ Logo.png" alt="The Turmeric Logo">
        <h3>The Turmeric</h3>
        <h6>Indian Cuisine</h6>

        <!-- Error Alert -->
        <div id="errorAlert" class="alert alert-danger" style="display: none;" role="alert">
            <i class="fas fa-exclamation-triangle me-2"></i>
            <span id="errorMessage"></span>
        </div>

        <form id="loginForm">
            <div class="mb-3 text-start">
                <label for="email" class="form-label">Email Address</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="admin@theturmeric.com" required>
            </div>
            <div class="mb-3 text-start">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password" required>
            </div>

           

            <button type="submit" class="btn btn-login">
                <i class="fas fa-sign-in-alt me-2"></i>Sign in to Dashboard
            </button>
        </form>

        <p class="info-text">This is a secure admin area. All access attempts are logged and monitored.</p>
    </div>

    <!-- Firebase Configuration -->
    <script type="module">
        import { db } from './includes/dbcon.js';
        import { collection, query, where, getDocs } from "https://www.gstatic.com/firebasejs/12.0.0/firebase-firestore.js";

        const loginForm = document.getElementById('loginForm');
        const loadingOverlay = document.getElementById('loadingOverlay');
        const errorAlert = document.getElementById('errorAlert');
        const errorMessage = document.getElementById('errorMessage');

        // Function to show error
        function showError(message) {
            errorMessage.textContent = message;
            errorAlert.style.display = 'block';
            loadingOverlay.style.display = 'none';
        }

        // Function to hide error
        function hideError() {
            errorAlert.style.display = 'none';
        }

        loginForm.addEventListener('submit', async function(e) {
            e.preventDefault();
            hideError();
            loadingOverlay.style.display = 'flex';

            const email = document.getElementById('email').value;
            const password = document.getElementById('password').value;

            try {
                // Query Firestore for user with matching email
                const usersRef = collection(db, 'userManage');
                const q = query(usersRef, where("email", "==", email));
                const querySnapshot = await getDocs(q);

                if (querySnapshot.empty) {
                    showError('Invalid email or password. Please try again.');
                    return;
                }

                let userFound = false;
                querySnapshot.forEach((doc) => {
                    const userData = doc.data();
                    
                    // Check if password matches and user is active
                    if (userData.password === password && userData.isActive === true) {
                        userFound = true;
                        
                        // Create session via AJAX call to PHP
                        fetch('auth_handler.php', {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/json',
                            },
                            body: JSON.stringify({
                                action: 'login',
                                user_data: {
                                    id: doc.id,
                                    email: userData.email,
                                    username: userData.username,
                                    role: userData.role,
                                    imageUrl: userData.imageUrl
                                }
                            })
                        })
                        .then(response => response.json())
                        .then(data => {
                            if (data.success) {
                                // Redirect to dashboard
                                window.location.href = 'index.php';
                            } else {
                                showError('Login failed. Please try again.');
                            }
                        })
                        .catch(error => {
                            console.error('Error:', error);
                            showError('An error occurred. Please try again.');
                        });
                    }
                });

                if (!userFound) {
                    showError('Invalid email or password, or account is inactive.');
                }

            } catch (error) {
                console.error('Error during login:', error);
                showError('An error occurred during login. Please try again.');
            }
        });
    </script>

</body>
</html>