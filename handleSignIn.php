<?php
session_start();

// Database connection
$host = 'ecoride_db';
$dbname = 'covoiturage_bd';
$username = 'root';
$password = 'yes';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erreur de connexion à la base de données : " . $e->getMessage());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password_input = $_POST['password'];

    // Retrieve the user based on the provided email
    $sql = "SELECT * FROM utilisateur WHERE email = :email";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([':email' => $email]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    // Check if user exists and the provided password is correct
    if ($user && password_verify($password_input, $user['password'])) {
        // Determine if this is an admin login attempt
        if (isset($_POST['adminLogin']) && $_POST['adminLogin'] === 'true') {
            // Check if the user is an admin (assumes 'is_admin' equals 1 for admin users)
            if (isset($user['is_admin']) && $user['is_admin'] == 1) {
                $_SESSION['user'] = $user;
                header("Location: dashboard.php");
                exit();
            } else {
                // If the user is not an admin, redirect back to the admin panel with an error message
                header("Location: admin_panel.php?error=" . urlencode("user not admin"));
                exit();
            }
        } else {
            // Normal user login process
            $_SESSION['user'] = $user;
            header("Location: profile.php");
            exit();
        }
    } else {
        // Login failure: wrong email or password
        if (isset($_POST['adminLogin']) && $_POST['adminLogin'] === 'true') {
            header("Location: admin_panel.php?error=" . urlencode("Email ou mot de passe incorrect."));
            exit();
        } else {
            header("Location: signIn.php?error=" . urlencode("Email ou mot de passe incorrect."));
            exit();
        }
    }
} else {
    // If the request method is not POST, redirect to the appropriate login page
    if (isset($_POST['adminLogin']) && $_POST['adminLogin'] === 'true') {
        header("Location: admin_panel.php");
    } else {
        header("Location: signIn.php");
    }
    exit();
}
?>
