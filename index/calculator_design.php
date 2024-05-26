<?php
$additional_css = 'calculator_design.css';
require_once('./header.php');
?>
        <div class="calculator m-5">
            <h2>Calculate Required Quantity</h2>
            <form class="calculate">
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

<?php
require_once('./footer.php');
?>