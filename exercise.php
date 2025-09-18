<?php
// Task 2: Fetch Users from JSONPlaceholder API

function getUsers() {
    $url = "https://jsonplaceholder.typicode.com/users";
    $data = file_get_contents($url);
    return json_decode($data, true);
}

// Get the list of users
$users = getUsers();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>User Directory</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #e6f5aeff;
            margin: 20px;
        }
        h2 {
            text-align: center;
            color: #033904ff;
        }
        .user-card {
            background: #f8faf1ff;
            border-radius: 12px;
            padding: 15px;
            margin: 10px auto;
            width: 400px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        .user-card h3 {
            margin: 0;
            color: #2a3a07ff;
        }
        .user-card p {
            margin: 5px 0;
            color: #343434ff;
        }
        .address {
            font-size: 14px;
            color: #363636ff;
        }
    </style>
</head>
<body>
    <h2>User Directory</h2>
    <?php
    // for loop
    // took help from stackOverFlow 
    for ($i = 0; $i < count($users); $i++) {
        $user = $users[$i];
        $name = $user['name'];
        $email = $user['email'];
        $address = $user['address'];
        $fullAddress = $address['suite'] . ", " . $address['street'] . ", " . $address['city'] . " - " . $address['zipcode'];
    ?>
        <div class="user-card">
            <h3><?php echo $name; ?></h3>
            <p> <?php echo $email; ?></p>
            <p class="address"> <?php echo $fullAddress; ?></p>
        </div>
    <?php
    }
    ?>
</body>
</html>
