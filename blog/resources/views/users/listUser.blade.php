<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="header" style="text-align: center;">
            <h2>List User</h2>
        </div>
        <br>
            <table class="table" id="grvListStudents">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Username</th>
                        <th scope="col">Email</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($users as $user) :  ?>
                        <tr scope="row">
                            <td><?php echo $user->id; ?></td>
                            <td><?php echo $user->name; ?></td>
                            <td><?php echo $user->username; ?></td>
                            <td><?php echo $user->email; ?></td>
                        </tr>
                    <?php
                    endforeach; ?>
                </tbody>
            </table>
    </div>
</body>

</html>