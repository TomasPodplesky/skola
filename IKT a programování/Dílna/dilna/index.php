

<?php

// odkaz na stránku : http://podpleskyt.borec.cz/login.php

// index.php
require_once 'db.php';
requireAuth();

$msg = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['pridat_dil'])) {
        $p_name = $_POST['part_name'];
        $sch = $_POST['schematic'];
        $loc = $_POST['location'];
        $m_id = (int)$_POST['material_id'];
        $m_need = (float)$_POST['material_need'];
        if (createPart($p_name, $sch, $loc, $m_id, $m_need)) {
            $msg = "<div class='success'>Díl úspěšně zaevidován k budoucí výrobě!</div>";
        } else {
            $msg = "<div class='error'>Chyba při přidání dílu.</div>";
        }
    } elseif (isset($_POST['pridat_zakazku'])) {
        $cust = $_POST['customer_name'];
        $p_id = (int)$_POST['part_id'];
        $p_qty = (int)$_POST['part_quantity'];
        $dl = $_POST['deadline'];
        if (createOrder($cust, $p_id, $p_qty, $dl, 'Nová')) {
            $msg = "<div class='success'>Zakázka byla přidána do systému!</div>";
        } else {
            $msg = "<div class='error'>Chyba při zakládání zakázky.</div>";
        }
    } elseif (isset($_POST['vykaz_prace'])) {
        $u_id = (int)$_POST['user_id'];
        $m_id = (int)$_POST['machine_id'];
        $o_id = (int)$_POST['order_id'];
        
        $start_dt = str_replace('T', ' ', $_POST['start_time']);
        if (strlen($start_dt) == 16) $start_dt .= ':00';
        
        $end_dt = str_replace('T', ' ', $_POST['end_time']);
        if (strlen($end_dt) == 16) $end_dt .= ':00';
        
        $qty = (int)$_POST['part_quantity'];

        try {
            if (createLog($u_id, $m_id, $o_id, $start_dt, $end_dt, $qty)) {
                $msg = "<div class='success'>Výkaz byl uložen a kusy byly automaticky přidány na sklad!</div>";
            }
        } catch (Exception $e) {
            $msg = "<div class='error'>Chyba při výkazu: " . $e->getMessage() . "</div>";
        }
    }
}

$parts = getParts();
$materialsList = getMaterials();
$orders = getOrders();
$users = getUsers();
$machines = getMachines();
$recentLogs = getLogs(5);

$defaultEnd = date('Y-m-d\TH:i');
$defaultStart = date('Y-m-d\TH:i', strtotime('-8 hours'));
?>
<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <title>Výroba a Zakázky</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div id="container">
        <header>
            <h1>Dílna - Výroba a Zakázky</h1>
        </header>

        <?php include 'menu.php'; ?>
        
        <?php echo $msg; ?>

        <!-- TERMINÁL PRO ZAMĚSTNANCE -->
        <h2>Zápis práce a výroby</h2>
        <div class="form-box">
            <form method="POST">
                <label>Pracovník:</label>
                <select name="user_id" required>
                    <option value="">-- Vyberte --</option>
                    <?php foreach ($users as $u): ?>
                        <option value="<?php echo $u['user_id']; ?>"><?php echo htmlspecialchars($u['surname'] . ' ' . $u['name']); ?></option>
                    <?php endforeach; ?>
                </select>

                <label>Stroj:</label>
                <select name="machine_id" required>
                    <option value="">-- Vyberte --</option>
                    <?php foreach ($machines as $m): ?>
                        <option value="<?php echo $m['machine_id']; ?>"><?php echo htmlspecialchars($m['machine_name']); ?></option>
                    <?php endforeach; ?>
                </select>

                <label>Zakázka:</label>
                <select name="order_id" required>
                    <option value="">-- Vyberte --</option>
                    <?php foreach ($orders as $o): ?>
                        <option value="<?php echo $o['order_id']; ?>"><?php echo htmlspecialchars($o['customer_name'] . " - " . $o['part_name']); ?></option>
                    <?php endforeach; ?>
                </select>

                <label>Začátek směny:</label>
                <input type="datetime-local" name="start_time" value="<?php echo $defaultStart; ?>" required>

                <label>Konec směny:</label>
                <input type="datetime-local" name="end_time" value="<?php echo $defaultEnd; ?>" required>

                <label>Vyrobených kusů (Přičtou se na sklad):</label>
                <input type="number" name="part_quantity" required>

                <input type="submit" name="vykaz_prace" value="Odeslat výkaz práce">
            </form>
        </div>

        <h2>Nedávné záznamy práce</h2>
        <table>
            <tr>
                <th>Pracovník</th>
                <th>Zakázka</th>
                <th>Vyrobeno</th>
            </tr>
            <?php foreach ($recentLogs as $l): ?>
            <tr>
                <td><?php echo htmlspecialchars($l['username']); ?></td>
                <td><?php echo htmlspecialchars($l['customer_name']); ?></td>
                <td style="color: green; font-weight: bold;">+<?php echo $l['part_quantity']; ?> ks</td>
            </tr>
            <?php endforeach; ?>
        </table>

        <!-- ZAKÁZKY -->
        <h2>Nová zakázka</h2>
        <div class="form-box">
            <form method="POST">
                <label>Zákazník:</label>
                <input type="text" name="customer_name" required>
                <label>Požadovaný díl:</label>
                <select name="part_id" required>
                    <option value="">-- Vyberte --</option>
                    <?php foreach ($parts as $p): ?>
                        <option value="<?php echo $p['part_id']; ?>"><?php echo htmlspecialchars($p['part_name']); ?></option>
                    <?php endforeach; ?>
                </select>
                <label>Počet kusů pro zákazníka:</label>
                <input type="number" name="part_quantity" required>
                <label>Deadline:</label>
                <input type="datetime-local" name="deadline" required>
                <input type="submit" name="pridat_zakazku" value="Založit zakázku">
            </form>
        </div>

        <!-- DÍLY -->
        <h2>Nový typ dílu do katalogu</h2>
        <div class="form-box">
            <form method="POST">
                <label>Název dílu:</label>
                <input type="text" name="part_name" required>
                <label>Výkres:</label>
                <input type="text" name="schematic" required>
                <label>Umístění (Skladová pozice pro budoucí výrobu):</label>
                <input type="text" name="location">
                <label>Materiál:</label>
                <select name="material_id" required>
                    <option value="">-- Vyberte --</option>
                    <?php foreach ($materialsList as $m): ?>
                        <option value="<?php echo $m['material_id']; ?>"><?php echo htmlspecialchars($m['material_name']); ?></option>
                    <?php endforeach; ?>
                </select>
                <label>Spotřeba materiálu (na 1 kus):</label>
                <input type="number" step="0.01" name="material_need" required>
                <input type="submit" name="pridat_dil" value="Přidat díl k výrobě">
            </form>
        </div>

    </div>
</body>
</html>
