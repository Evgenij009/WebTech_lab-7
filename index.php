<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>lab-6</title>
</head>

<body>

    <div class="basic">
        <div class="container">
            <form name="emailSend" method="POST" action="sendMessage.php">
                <label> Name: <input type="text" name="name" required></label><br>
                <label> Tel: <input type="tel" name="tel" required></label><br>
                <label>Email: <input type="email" name="email" required></label><br>
                <label> Topic: <input type="text" name="topic" required></label><br>
                <label> Message: <input type="text" name="msg" required></label><br>
                <label> Count: <input type="text" name="count" required></label><br>

                <input type="submit">
            </form>
        </div>
    </div>

</body>

</html>