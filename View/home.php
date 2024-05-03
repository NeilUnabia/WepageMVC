<!DOCTYPE>
<html lang="en">
    <head>
    </head>
    <body>
        <form action="<?= BASE_URL."form" ?>" method="POST">
            <div>
                <label for="first-name">First Name</label>
                <input type="text" id="first-name" name="firstName">
            </div>
            <div>
                <label for="middle-name">Middle Name</label>
                <input type="text" id="middle-name" name="middleName">
            </div>
            <div>
                <label for="last-name">Last Name</label>
                <input type="text" id="last-name" name="lastName">
            </div>
            <div>
                <label for="password">Password</label>
                <input type="password" id="password" name="password">
            </div>
            <input type="submit">
        </form>
    </body>
</html>