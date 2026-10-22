<?php
// register.php
require_once 'db.php';

$error = '';
$success = '';

if (isLoggedIn()) {
    header("Location: index.php");
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username'] ?? '');
    $password = $_POST['password'] ?? '';
    $name = trim($_POST['name'] ?? '');
    $surname = trim($_POST['surname'] ?? '');
    $role = $_POST['role'] ?? 'Pracovník';

    if (empty($username) || empty($password) || empty($name) || empty($surname)) {
        $error = 'Vyplňte prosím všechna pole.';
    } else {
        try {
            if (registerUser($username, $password, $name, $surname, $role)) {
                $success = 'Účet vytvořen. Můžete se přihlásit.';
            } else {
                $error = 'Chyba při registraci.';
            }
        } catch (Exception $e) {
            $error = $e->getMessage();
        }
    }
}
?>
<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <title>Registrace do systému Dílny</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="login-box">
        <h2>Registrace</h2>
        
        <?php if (!empty($error)): ?>
            <div class="error"><?php echo htmlspecialchars($error); ?></div>
        <?php endif; ?>

        <?php if (!empty($success)): ?>
            <div class="success"><?php echo htmlspecialchars($success); ?></div>
            <a href="login.php">Přejít na přihlášení</a>
        <?php else: ?>

            <form method="POST" action="register.php">
                <label>Jméno:</label>
                <input type="text" name="name" required>

                <label>Příjmení:</label>
                <input type="text" name="surname" required>

                <label>Uživatelské jméno:</label>
                <input type="text" name="username" required>
                
                <label>Heslo:</label>
                <input type="password" name="password" required>

                <label>Role:</label>
                <select name="role">
                    <option value="Pracovník">Pracovník</option>
                    <option value="Administrátor">Administrátor</option>
                </select>
                
                <input type="submit" value="Zaregistrovat">
            </form>
            
            <p>Už máte účet? <a href="login.php">Přihlaste se zde</a></p>
        <?php endif; ?>
    </div>
</body>
</html>
