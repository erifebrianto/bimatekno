<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit PPP Secret</title>
</head>
<body>
    <h1>Edit PPP Secret</h1>

    <form method="post" action="<?php echo base_url('mikrotikppp/edit/'.$secret['.id']); ?>">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="<?php echo $secret['name']; ?>" required><br><br>

        <label for="service">Service:</label>
        <input type="text" id="service" name="service" value="<?php echo $secret['service']; ?>" required><br><br>

        <label for="profile">Profile:</label>
        <input type="text" id="profile" name="profile" value="<?php echo $secret['profile']; ?>" required><br><br>

        <label for="remote_address">Remote Address:</label>
        <input type="text" id="remote_address" name="remote_address" value="<?php echo $secret['remote-address']; ?>" required><br><br>

        <!-- Add other fields you want to edit -->

        <input type="submit" value="Update">
    </form>
</body>
</html>
