<!DOCTYPE html>
<html lang="en">
<!-- 
Cemilhan Sağlam
Onur Kahan
-->
<head>
    <title>Currency Calculation</title>
    <meta name="description" content="CENG 311 Inclass Activity 5" />
</head>
<body>
    <?php
    $result = "";
    $amount = isset($_GET['amount']) ? $_GET['amount'] : '';
    $from_Currency = isset($_GET['from_Currency']) ? $_GET['from_Currency'] : 'USD';
    $to_Currency = isset($_GET['to_Currency']) ? $_GET['to_Currency'] : 'USD';

    if (isset($_GET['convert']) && is_numeric($amount)) {
        $currency_Rates = [
            "USD" => ["CAD" => 1.43, "EUR" => 0.93, "USD" => 1],
            "CAD" => ["USD" => 0.70, "EUR" => 0.65, "CAD" => 1],
            "EUR" => ["USD" => 1.08, "CAD" => 1.54, "EUR" => 1]
        ];
        
        $result = $amount * $currency_Rates[$from_Currency][$to_Currency];
    }
    ?>

    <form action="activity5.php" method="GET">
        <table>
            <tr>
                <td>From:</td>
                <td>
                    <input type="text" name="amount" value="<?php echo($amount); ?>" required />
                </td>
                <td>Currency:</td>
                <td>
                <select name="from_Currency">
                    <option value="USD" <?php if($from_Currency=="USD") echo "selected"; ?>>USD</option>
                    <option value="CAD" <?php if($from_Currency=="CAD") echo "selected"; ?>>CAD</option>
                    <option value="EUR" <?php if($from_Currency=="EUR") echo "selected"; ?>>EUR</option>
                </select>

                </td>
            </tr>
            <tr>
                <td>To:</td>
                <td>
                    <input type="text" value="<?php echo($result); ?>" disabled>
                </td>
                <td>Currency:</td>
                <td>
                    <select name="to_Currency">
                    <option value="USD" <?php if($to_Currency=="USD") echo "selected"; ?>>USD</option>
                    <option value="CAD" <?php if($to_Currency=="CAD") echo "selected"; ?>>CAD</option>
                    <option value="EUR" <?php if($to_Currency=="EUR") echo "selected"; ?>>EUR</option>
                    </select>
                </td>
                </tr>
				<tr>
				<td>
					
				</td>
				<td>
					
				</td>
				<td>
					
				</td>
				<td>
					<input type="submit" name="convert" value="convert"/>
				</td>	
			</tr>
		</table>
    </form>        
</body>
</html>