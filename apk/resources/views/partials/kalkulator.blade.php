
    <h2>Simple Calculator</h2>

    <form action="index.php" method="post">
        <input type="text" name="num1" placeholder="Enter number 1" required>
        <input type="text" name="num2" placeholder="Enter number 2" required>

        <br>

        <button type="submit" name="add">Add</button>
        <button type="submit" name="subtract">Subtract</button>
        <button type="submit" name="multiply">Multiply</button>
        <button type="submit" name="divide">Divide</button>
    </form>

    <?php
    // Proses perhitungan
    if (isset($_POST['add'])) {
        $result = $_POST['num1'] + $_POST['num2'];
        echo "<h3>Result: $result</h3>";
    } elseif (isset($_POST['subtract'])) {
        $result = $_POST['num1'] - $_POST['num2'];
        echo "<h3>Result: $result</h3>";
    } elseif (isset($_POST['multiply'])) {
        $result = $_POST['num1'] * $_POST['num2'];
        echo "<h3>Result: $result</h3>";
    } elseif (isset($_POST['divide'])) {
        if ($_POST['num2'] != 0) {
            $result = $_POST['num1'] / $_POST['num2'];
            echo "<h3>Result: $result</h3>";
        } else {
            echo "<h3>Error: Cannot divide by zero</h3>";
        }
    }
    ?>
