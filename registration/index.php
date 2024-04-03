<?php


$fullname = $email = $address = $phone = $gender = $password = $confirm_password = ""; //hold the data submitted by the user

$fullnameErr = $emailErr = $passwordErr = $confirmPasswordErr = ""; //holds error messages for form validation

// Function to sanitize or cleanse input data
function sanitize_input($data) {
    $data = trim($data); //removes white spaces from beginning and end
    $data = stripslashes($data); //removes backslases "/" from a string
    $data = htmlspecialchars($data); //converts special characters to html entities
    return $data;
}

// Validate form data on form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Full Name validation
    if (empty($_POST["fullname"])) {
        $fullnameErr = "Full Name is required";
    } else {
        $fullname = sanitize_input($_POST["fullname"]);
        
        if (!preg_match("/^[a-zA-Z ]*$/", $fullname)) { // Check if name only contains letters and whitespace
            $fullnameErr = "Only letters and white space allowed";
        }
    }

    // Email validation
    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
    } else {
        $email = sanitize_input($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) { // Check if email address is well-formed using the built in php filter
            $emailErr = "Invalid email format";
        }
    }

    // Password validation
    if (empty($_POST["password"])) {
        $passwordErr = "Password is required";
    } else {
        $password = sanitize_input($_POST["password"]);
       
        // Password should be at least 8 characters long
        if (strlen($password) < 8) {
            $passwordErr = "Password must be at least 8 characters long";
        }
    }

    // Confirm Password validation
    if (empty($_POST["cpassword"])) {
        $confirmPasswordErr = "Please confirm password";
    } else {
        $confirm_password = sanitize_input($_POST["cpassword"]);
        if ($confirm_password != $password) {
            $confirmPasswordErr = "Passwords do not match";
        }
    }
    $password = password_hash($password, PASSWORD_DEFAULT);
    $address = $_POST["address"];
    $gender = $_POST["gender"];
    $phone = $_POST["phone"];

    // If all validations pass, process the form data further
    if (empty($fullnameErr) && empty($emailErr) && empty($passwordErr) && empty($confirmPasswordErr)) {
        $servername = "localhost";
        $username = "root"; // Your MySQL username
        $db_password = ""; // Your MySQL password
        $dbname = "byanjan";
    
        // Create connection
        $conn = new mysqli($servername, $username, $db_password, $dbname);
    
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
    
        // Prepare SQL statement to insert user data into the users table
        $sql = "INSERT INTO registration (fullname, email, password, address, phone, gender) VALUES ('$fullname', '$email', '$password', '$address', '$phone', '$gender')";
        $conn->query($sql);
    
        // Close the statement and connection
        $conn->close();
        echo "Redirecting to: login";
        header("Location: ../login");
        exit();

     }

}
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
    <META http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link rel="stylesheet" type="text/css" href="registration.css">
</head>
<body>
    
    <u></u>
    <div>
    <form class="form-login" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" name="m__register_form">
        <legend>Master Cooking....</legend>
        <div class="field-group">
            <label>Full Name:</label>
            <input type="text" id="m_fname" name="fullname" value="<?php echo $fullname; ?>">
            <span class="error"><?php echo $fullnameErr; ?></span>
        </div>
        <div class="field-group">
            <label>Email:</label>
            <input type="text" id="m_email" name="email" value="<?php echo $email; ?>">
            <span class="error"><?php echo $emailErr; ?></span>
        </div>
        <div class="field-group">
            <label>Address:</label>
            <input type="text" id="m_addr" name="address" value="<?php echo $address; ?>">
        </div>
        <div class="field-group">
            <label>Phone:</label>
            <input type="text" id="m_phone" name="phone" value="<?php echo $phone; ?>">
        </div>
        <div class="field-group">
            <h4>Gender</h4>
            <div class="field-subgroup">
                <div class="field-inline">
                    <input type="radio" id="m_male" name="gender" value="Male"<?php if (isset($gender) && $gender == "Male") echo " checked"; ?>>
                    <label for="m_male">Male</label>
                </div>
                <div class="field-inline">
                    <input type="radio" id="m_female" name="gender" value="Female"<?php if (isset($gender) && $gender == "Female") echo " checked"; ?>>
                    <label for="m_female">Female</label>
                </div>
                <div class="field-inline">
                    <input type="radio" id="m_other" name="gender" value="Other"<?php if (isset($gender) && $gender == "Other") echo " checked"; ?>>
                    <label for="m_other">Other</label>
                </div>
            </div>
        </div>
        <div class="field-group">
            <label for="m_pwd">Password</label>
            <input type="password" value="" name="password" id="m_password">
            <span class="error"><?php echo $passwordErr; ?></span>
        </div>
        <div class="field-group">
            <label for="m_cpwd">Confirm Password</label>
            <input type="password" value="" name="cpassword" id="m_cpwd">
            <span class="error"><?php echo $confirmPasswordErr; ?></span>
        </div>
        <div class="field-group field-group-alt">
            <input type="checkbox" id="m_agree" name="agreement" value="1">
            <label for="m_agree">I agree to register new data on this website.</label>
        </div>
        <div>
            <button type="submit">Register Data</button>
            <button type="reset" name="Reset">Reset Form</button>
        </div>
    </form>
    </div>
</body>


</html>
