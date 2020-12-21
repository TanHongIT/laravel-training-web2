<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>asdasd</h1>

    <table>
        <thead>
            <th>
                ID
            </th>
            <th>
                Name
            </th>
            <th>
                User Name
            </th>
            <th>
                Email
            </th>
            <th>
                Action
            </th>
        </thead>
        <tbody>
            <?php foreach ($users as $user) : ?>
                <tr>
                    <td><?php echo $user->id; ?></td>
                    <td><?php echo $user->name; ?></td>
                    <td><?php echo $user->username; ?></td>
                    <td><?php echo $user->email; ?></td>
                    <td>Action</td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>

</html>