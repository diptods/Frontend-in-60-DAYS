<?php
// 1. Check if the form was actually submitted
if ($_SERVER["REQUEST_METHOD"] == "GET") {

    // 2. Collect and clean standard text fields
    // We use the 'name' attribute from your HTML to find these keys
    $first_name   = isset($_GET['first_name']) ? htmlspecialchars($_GET['first_name']) : '';
    $last_name    = isset($_GET['last_name']) ? htmlspecialchars($_GET['last_name']) : '';
    $email        = isset($_GET['email']) ? htmlspecialchars($_GET['email']) : '';
    $phone        = isset($_GET['phone']) ? htmlspecialchars($_GET['phone']) : '';
    $age          = isset($_GET['age']) ? htmlspecialchars($_GET['age']) : '';
    $birthday     = isset($_GET['birthday']) ? htmlspecialchars($_GET['birthday']) : '';
    $height       = isset($_GET['user_height']) ? htmlspecialchars($_GET['user_height']) : '';
    $country_code = isset($_GET['country_code']) ? htmlspecialchars($_GET['country_code']) : '';
    $fav_color    = isset($_GET['favcolor']) ? htmlspecialchars($_GET['favcolor']) : '';
    $message      = isset($_GET['message']) ? htmlspecialchars($_GET['message']) : '';

    // 3. Collect single-choice inputs (Radio Buttons & Select Dropdown)
    $gender         = isset($_GET['gender']) ? htmlspecialchars($_GET['gender']) : 'Not Specified';
    $favorite_drink = isset($_GET['drink']) ? htmlspecialchars($_GET['drink']) : '';

    // 4. Collect multiple-choice inputs (Hobbies Checkboxes)
    $hobbies = [];
    if (isset($_GET['hobby1'])) $hobbies[] = "Cricket";
    if (isset($_GET['hobby2'])) $hobbies[] = "Football";
    if (isset($_GET['hobby3'])) $hobbies[] = "Reading Books";

    // 5. Note on files (Profile Pic and Cover Letter)
    // Files CANNOT be processed via GET method. They will look blank here.
    // To fix files, you must use method="post" in your HTML form tag.

    // 6. Display the collected data back to the browser screen
    echo "<h1>Form Data Processed by action_page.php</h1>";
    echo "<p><strong>First Name:</strong> $first_name</p>";
    echo "<p><strong>Last Name:</strong> $last_name</p>";
    echo "<p><strong>Email:</strong> $email</p>";
    echo "<p><strong>Phone:</strong> $phone</p>";
    echo "<p><strong>Age:</strong> $age</p>";
    echo "<p><strong>Gender:</strong> $gender</p>";
    echo "<p><strong>Birthday:</strong> $birthday</p>";
    echo "<p><strong>Height:</strong> $height cm</p>";
    echo "<p><strong>Country Code:</strong> $country_code</p>";
    echo "<p><strong>Favorite Drink:</strong> $favorite_drink</p>";
    echo "<p><strong>Favorite Color:</strong> $fav_color</p>";
    echo "<p><strong>Hobbies:</strong> " . (!empty($hobbies) ? implode(", ", $hobbies) : "None selected") . "</p>";
    echo "<p><strong>Message:</strong> $message</p>";

} else {
    echo "<p>Error: Invalid submission method.</p>";
}
?>
