<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="./css/index.css? <?php echo time(); ?>">
</head>
<body>

    <h2>USER DASHBOARD</h2>

    <div id="msgBox">
    </div>

    <div class="container">
        <div class="form__container">
            <h3>Form</h3>
            <form method="POST" class="form" id="form">
                <div class="form__div">
                    <label for="username" class="form__label">Username</label>
                    <input type="text" id="username" name="username" id="username" class="form__input" placeholder="john doe" required>
                </div>
                <div class="form__div">
                    <label for="email" class="form__label">email</label>
                    <input type="email" id="email" name="email" id="email" class="form__input" placeholder="example@support.com" required>
                </div>
                <button type="submit" id="submit__btn" class="submit__btn">submit</button>
            </form>
        </div>

        <div class="table__container">
            <table>
                <thead>
                    <tr>
                        <th>Sno</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Date</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody id="tbody"></tbody>
            </table>
        </div>
    </div>

    <script src="./js/script.js"></script>

</body>
</html>