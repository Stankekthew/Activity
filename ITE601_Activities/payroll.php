<?php

class Payroll {
    private $firstname = null;
    private $lastname = null;
    private $tax = null;
    private $salary = null;

    public function __construct($firstname, $lastname, $tax, $salary) {
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->tax = (float)$tax;
        $this->salary = (float)$salary;
    }

    public function displayInfo() {
        echo "First Name: " . ($this->firstname) . "<br>";
        echo "Last Name: " . ($this->lastname) . "<br>";
        echo "Tax: $" . (number_format($this->tax, 2)) . "<br>";
        echo "Salary: $" . (number_format($this->salary, 2)) . "<br>";
        echo "Net Salary: $" . (number_format($this->computenet(), 2)) . "<br>";
        echo "Name Display: " . ($this->NameDisplay()) . "<br>";
    }

    public function computenet() {
        return $this->salary - $this->tax;
    }

    public function NameDisplay() {
        return $this->lastname . ", " . $this->firstname;
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstname = $_POST['firstname'] ?? '';
    $lastname = $_POST['lastname'] ?? '';
    $tax = $_POST['tax'] ?? '';
    $salary = $_POST['salary'] ?? '';

    $payroll = new Payroll($firstname, $lastname, $tax, $salary);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payroll Form</title>
</head>
<body>
    <form method="post" action="">
        <label for="firstname">First Name:</label>
        <input type="text" id="firstname" name="firstname" placeholder="First Name" required><br>

        <label for="lastname">Last Name:</label>
        <input type="text" id="lastname" name="lastname" placeholder="Last Name" required><br>

        <label for="tax">Tax:</label>
        <input type="text" id="tax" name="tax" placeholder="Tax" required><br>

        <label for="salary">Salary:</label>
        <input type="text" id="salary" name="salary" placeholder="Salary" required><br>

        <input type="submit" value="Submit">
    </form>

    <?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $payroll->displayInfo();
    }
    ?>

</body>
</html>