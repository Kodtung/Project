<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="home.scss">
    <title>WebBanking</title>
</head>
<body>
    <div class="container">
        <div class="icon-info">
            <div class="user-icon">
                <img src="profile.png" alt="user">    
            </div>
            <div class="user-info">
                <div class="name">
                    <label for="text" id="username">Hi! </label><br>
                </div>
                <div class="info">
                    <label for="">Welcome to my WebBanking!</label>
                </div>
            </div>
        </div>
        <div class="form">
            <form action="check_statement.php">
                <div class="statement">
                    <button type="submit">Check Statement</button>
                </div>
            </form>
            <form action="withdraw.php">
                <div class="withdraw">
                    <button type="submit">Withdraw</button>
                </div>
            </form>
            <form action="dispote.php">
                <div class="dispote">
                    <button type="submit">Dispote</button>
                </div>
            </form>
        </div>
        
    </div>
    
</body>
</html>