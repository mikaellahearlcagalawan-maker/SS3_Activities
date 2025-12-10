<!DOCTYPE html>
<html>
<head>
    <title>Library Expansion Project</title>
    <style>
        body {
            background: #f8f9ff;
            font-family: Arial, sans-serif;
            padding: 30px;
        }
        
        .paper {
            background: white;
            width: 90%;
            max-width: 1000px;
            margin: 0 auto;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.05);
            border: 1px solid #e0e0e0;
        }
        
        h1 {
            color: #333;
            text-align: center;
            margin-bottom: 5px;
            font-size: 24px;
        }
        
        h3 {
            color: #666;
            text-align: center;
            margin-top: 0;
            margin-bottom: 25px;
            font-size: 16px;
        }
        
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }
        
        th {
            background: #4a5fc1;
            color: white;
            padding: 12px;
            text-align: left;
            font-weight: normal;
        }
        
        td {
            padding: 12px;
            border-bottom: 1px solid #eee;
        }
        
        tr:nth-child(even) {
            background: #f9f9f9;
        }
        
        .total-row {
            background: #4a5fc1;
            color: white;
        }
        
        .total-row td {
            border-bottom: none;
            font-weight: bold;
        }
        
        .money {
            text-align: right;
            font-family: monospace;
        }
        
        .signature {
            text-align: right;
            margin-top: 30px;
            padding-top: 20px;
            border-top: 1px solid #ddd;
            color: #666;
            font-size: 14px;
        }
    </style>
</head>
<body>

<div class="paper">
    <h1>Public Library Expansion Project</h1>
    <h3>Cost Estimates</h3>
    
    <?php
        $materials = [
            ["Lumber", 160000.00],
            ["Concrete", 78000.00],
            ["Drywall", 69000.00],
            ["Paint", 12000.00],
            ["Miscellaneous", 20000.00]
        ];
        
        $total_est = 0;
        $total_10 = 0;
        $total_15 = 0;
        $total_20 = 0;
    ?>
    
    <table>
        <tr>
            <th>Expenditures</th>
            <th>Estimated Cost</th>
            <th>10% Increase</th>
            <th>15% Increase</th>
            <th>20% Increase</th>
        </tr>
        
        <?php foreach($materials as $material): 
            $name = $material[0];
            $cost = $material[1];
            
            $inc10 = $cost + ($cost * 0.10);
            $inc15 = $cost + ($cost * 0.15);
            $inc20 = $cost + ($cost * 0.20);
            
            $total_est += $cost;
            $total_10 += $inc10;
            $total_15 += $inc15;
            $total_20 += $inc20;
        ?>
        
        <tr>
            <td><?php echo $name; ?></td>
            <td class="money">$ <?php echo number_format($cost, 2); ?></td>
            <td class="money">$ <?php echo number_format($inc10, 2); ?></td>
            <td class="money">$ <?php echo number_format($inc15, 2); ?></td>
            <td class="money">$ <?php echo number_format($inc20, 2); ?></td>
        </tr>
        
        <?php endforeach; ?>
        
        <tr class="total-row">
            <td>Total Expenditures:</td>
            <td class="money">$ <?php echo number_format($total_est, 2); ?></td>
            <td class="money">$ <?php echo number_format($total_10, 2); ?></td>
            <td class="money">$ <?php echo number_format($total_15, 2); ?></td>
            <td class="money">$ <?php echo number_format($total_20, 2); ?></td>
        </tr>
    </table>
    
    <div class="signature">
        Created by: Mikaella Hearl Cagalawan
    </div>
</div>

</body>
</html>