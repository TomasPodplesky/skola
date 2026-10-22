<?php
// sklad.php
require_once 'db.php';
requireAuth();

$msg = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['pridat_stroj'])) {
        $name = $_POST['machine_name'];
        $type = $_POST['machine_type'];
        $status = $_POST['status'];
        if (!empty($_POST['machine_id'])) {
            if (updateMachine($_POST['machine_id'], $name, $type, $status)) {
                $msg = "<div class='success'>Stroj upraven!</div>";
            } else {
                $msg = "<div class='error'>Chyba při úpravě stroje.</div>";
            }
        } else {
            if (createMachine($name, $type, $status)) {
                $msg = "<div class='success'>Stroj přidán!</div>";
            } else {
                $msg = "<div class='error'>Chyba při přidávání stroje.</div>";
            }
        }
    } elseif (isset($_POST['pridat_material'])) {
        $name = $_POST['material_name'];
        $qty = $_POST['quantity'];
        $unit = $_POST['unit'];
        $loc = $_POST['location'];
        if (!empty($_POST['material_id'])) {
            if (updateMaterial($_POST['material_id'], $name, $qty, $unit, $loc)) {
                $msg = "<div class='success'>Materiál upraven!</div>";
            } else {
                $msg = "<div class='error'>Chyba při úpravě materiálu.</div>";
            }
        } else {
            if (createMaterial($name, $qty, $unit, $loc)) {
                $msg = "<div class='success'>Materiál přidán!</div>";
            } else {
                $msg = "<div class='error'>Chyba při přidávání materiálu.</div>";
            }
        }
    }
}

$editMachine = null;
if (isset($_GET['edit_machine'])) {
    $editMachine = getMachine($_GET['edit_machine']);
}

$editMaterial = null;
if (isset($_GET['edit_material'])) {
    $editMaterial = getMaterial($_GET['edit_material']);
}

$machines = getMachines();
$materials = getMaterials();
?>
<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <title>Sklad a Stroje</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div id="container">
        <header>
            <h1>Sklad a Stroje</h1>
        </header>

        <?php include 'menu.php'; ?>
        
        <?php echo $msg; ?>

        <h2><?php echo $editMachine ? 'Upravit stroj' : 'Přidat Stroj'; ?></h2>
        <div class="form-box">
            <form method="POST" action="sklad.php">
                <?php if ($editMachine): ?>
                    <input type="hidden" name="machine_id" value="<?php echo $editMachine['machine_id']; ?>">
                <?php endif; ?>
                <label>Název stroje:</label>
                <input type="text" name="machine_name" value="<?php echo $editMachine ? htmlspecialchars($editMachine['machine_name']) : ''; ?>" required>
                <label>Typ stroje:</label>
                <input type="text" name="machine_type" value="<?php echo $editMachine ? htmlspecialchars($editMachine['machine_type']) : ''; ?>" required>
                <label>Status:</label>
                <select name="status">
                    <option value="Online" <?php echo ($editMachine && $editMachine['status'] == 'Online') ? 'selected' : ''; ?>>Online (V provozu)</option>
                    <option value="Údržba" <?php echo ($editMachine && $editMachine['status'] == 'Údržba') ? 'selected' : ''; ?>>Údržba</option>
                    <option value="Offline" <?php echo ($editMachine && $editMachine['status'] == 'Offline') ? 'selected' : ''; ?>>Offline</option>
                </select>
                <input type="submit" name="pridat_stroj" value="<?php echo $editMachine ? 'Uložit úpravy stroje' : 'Uložit nový stroj'; ?>">
                <?php if ($editMachine): ?>
                    <a href="sklad.php" style="margin-left: 10px; text-decoration: none; padding: 10px; background: #999; color: white;">Zrušit úpravu</a>
                <?php endif; ?>
            </form>
        </div>

        <h2>Seznam strojů</h2>
        <table>
            <tr>
                <th>Název stroje</th>
                <th>Typ</th>
                <th>Status</th>
                <th>Akce</th>
            </tr>
            <?php foreach ($machines as $m): ?>
            <tr>
                <td><?php echo htmlspecialchars($m['machine_name']); ?></td>
                <td><?php echo htmlspecialchars($m['machine_type']); ?></td>
                <td><?php echo htmlspecialchars($m['status']); ?></td>
                <td><a href="?edit_machine=<?php echo $m['machine_id']; ?>">Upravit</a></td>
            </tr>
            <?php endforeach; ?>
        </table>

        <hr style="margin: 40px 0;">

        <h2><?php echo $editMaterial ? 'Upravit materiál' : 'Přidat Materiál'; ?></h2>
        <div class="form-box">
            <form method="POST" action="sklad.php">
                <?php if ($editMaterial): ?>
                    <input type="hidden" name="material_id" value="<?php echo $editMaterial['material_id']; ?>">
                <?php endif; ?>
                <label>Název materiálu:</label>
                <input type="text" name="material_name" value="<?php echo $editMaterial ? htmlspecialchars($editMaterial['material_name']) : ''; ?>" required>
                <label>Množství:</label>
                <input type="number" name="quantity" value="<?php echo $editMaterial ? htmlspecialchars($editMaterial['quantity']) : ''; ?>" required>
                <label>Jednotka (ks, kg, m):</label>
                <input type="text" name="unit" value="<?php echo $editMaterial ? htmlspecialchars($editMaterial['unit']) : ''; ?>" required>
                <label>Umístění (regál):</label>
                <input type="text" name="location" value="<?php echo $editMaterial ? htmlspecialchars($editMaterial['location']) : ''; ?>">
                <input type="submit" name="pridat_material" value="<?php echo $editMaterial ? 'Uložit úpravy materiálu' : 'Uložit nový materiál'; ?>">
                <?php if ($editMaterial): ?>
                    <a href="sklad.php" style="margin-left: 10px; text-decoration: none; padding: 10px; background: #999; color: white;">Zrušit úpravu</a>
                <?php endif; ?>
            </form>
        </div>

        <h2>Seznam materiálu na skladě</h2>
        <table>
            <tr>
                <th>Název materiálu</th>
                <th>Skladem</th>
                <th>Umístění</th>
                <th>Akce</th>
            </tr>
            <?php foreach ($materials as $mat): ?>
            <tr>
                <td><?php echo htmlspecialchars($mat['material_name']); ?></td>
                <td><?php echo htmlspecialchars($mat['quantity'] . ' ' . $mat['unit']); ?></td>
                <td><?php echo htmlspecialchars($mat['location']); ?></td>
                <td><a href="?edit_material=<?php echo $mat['material_id']; ?>">Upravit</a></td>
            </tr>
            <?php endforeach; ?>
        </table>

    </div>
</body>
</html>
