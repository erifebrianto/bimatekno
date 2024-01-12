<!DOCTYPE html>
<html>
<head>
    <title>Secret PPP List</title>
</head>
<body>

<h1>Secret PPP List</h1>

<table border="1">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Service</th>
        <th>Profile</th>
        <th>Remote Address</th>
        <th>Action</th> <!-- Added Action column -->
    </tr>
    <?php foreach ($secrets as $secret): ?>
    <tr>
        <td><?php echo $secret['.id']; ?></td>
        <td><?php echo $secret['name']; ?></td>
        <td><?php echo $secret['service']; ?></td>
        <td><?php echo $secret['profile']; ?></td>
        <td><?php echo $secret['remote-address']; ?></td>
        <td>
    <a href="<?php echo base_url('mikrotikppp/edit/' . urlencode($secret['.id'])); ?>">Edit</a>

        </td> <!-- Added Edit button -->
    </tr>
    <?php endforeach; ?>
</table>

</body>
</html>
