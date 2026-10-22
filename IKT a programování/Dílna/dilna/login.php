<?php
// login.php
require_once 'db.php';

$error = '';

if (isLoggedIn()) {
    header("Location: index.php");
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username'] ?? '');
    $password = $_POST['password'] ?? '';

    if (empty($username) || empty($password)) {
        $error = 'Vyplňte prosím obě pole.';
    } else {
        if (loginUser($username, $password)) {
            header("Location: index.php");
            exit;
        } else {
            $error = 'Špatné jméno nebo heslo.';
        }
    }
}
?>
<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <title>Přihlášení do systému Dílny</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="login-box">
        <h2>Přihlášení</h2>
        
        <?php if (!empty($error)): ?>
            <div class="error"><?php echo htmlspecialchars($error); ?></div>
        <?php endif; ?>

        <form method="POST" action="login.php">
            <label for="username">Uživatelské jméno:</label>
            <input type="text" id="username" name="username" required>
            
            <label for="password">Heslo:</label>
            <input type="password" id="password" name="password" required>
            
            <input type="submit" value="Přihlásit">
        </form>
        
        <p>Nemáte účet? <a href="register.php">Zaregistrujte se zde</a></p>
    </div>
</body>
</html>
