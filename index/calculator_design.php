<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>calculator</title>

    <!-- link to css -->
    <link rel="stylesheet" href="calculator_design.css">
</head>
<body>
        <div class="calculator">
            <h2>Calculate Required Quantity</h2>
            <div class="calculate">
                <label for="o_recipe">Original Recipe Serve</label>
                <input type="number" name="o_recipe">

                <label for="n_recipe">Need to Serve</label>
                <input type="number" name="n_recipe">

                <button type="submit" name="enter">Enter</button>
            </div>
            <div class="col">
               <table>
                    <tr>
                        <th>Ingredients</th>
                        <th>Quantity</th>
                    </tr>
                    <tr>
                        <td>Potato</td>
                        <td>1 kg</td>
                    </tr>
                    <tr>
                        <td>Oil</td>
                        <td>1 ltr.</td>
                    </tr>
               </table>
            </div>
            
        </div>
        
</body>
</html>