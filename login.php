
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
        <h3>Enter your Registration Credentials</h3>
        <form action="login1.php" method="POST">
            <label for="first">
                 Enter your Name :
              </label>
            <input type="text"
                   id="t1"
                   name="t1"
                   placeholder="Enter your Full name" required>
            <label for="first">
                 Email or Ph.no :
              </label>
            <input type="text"
                   id="t2"
                   name="t2"
                   placeholder="Enter your email or phone" required>
                
              
              <label for="address">
              Enter your address:
               </label>
            <input type="text"
                   id="t3"
                   name="t3"
                   placeholder="Enter your Address" required>
               
            <label for="password">
                  Password:
              </label>
            <input type="password"
                   id="t4"
                   name="t4"
                   placeholder="Enter your Password" required>
                <h4>password must be strong</h4>
                <h4>Never share your data</h4>
                <h4>password contain's 6 letter's</h4>
            <div class="wrap">
                <button type="submit">
                    Submit
                </button>
            </div>
        </form>
        <p>Already registered? 
              <a href="login2.php"
               style="text-decoration: none;">
                Login
            </a>
        </p>
    </div>
</body>
</html>
