
<!DOCTYPE html>
<html>
 
<head>
    <title>Shree Krishna travel's Registration</title>
    <link rel="stylesheet"
          href="style.css">
</head>
 
<body>
    <div class="main">
        <h1>Shree Krishna Travel's</h1>
        <h3>Enter your Login Credentials</h3>
        <form action="login3.php" method="POST">
            <label for="first">
                 Enter your Name :
              </label>
            <input type="text"
                   id="t1"
                   name="t1"
                   placeholder="Enter your Full name" required>
                   
            <label for="password">
                  Password:
              </label>
            <input type="password"
                   id="t2"
                   name="t2"
                   placeholder="Enter your Password" required>
                        <div class="wrap">
                <button type="submit">
                    Submit
                </button>
            </div>
        </form>
        <p>Not registered Yet? 
              <a href="login.php"
               style="text-decoration: none;">
                Register
            </a>
        </p>
    </div>
</body>
</html>
