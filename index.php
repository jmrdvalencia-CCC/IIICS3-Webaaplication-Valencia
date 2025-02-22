<html>
<header>
    <style>
    body{
        font-family: san-sarif;
        background-color:gray;
        display:flex;
        justify-content:center;
        align-items:center;
        min-height:10vh;
        margin:0;
    }    
    .login-container
    {
       background-color:white;
       padding:50px;
       border-radius:5px;
       width:300px;  
    }
    h2{
        text-align:center;
        margin-bottom:5px;
    }

    label
    {
        display:block;
        margin-bottom:5px;
    }

    .inputText
    {
        width:100%;
        padding:10px;
        border: 1px solid gray;
        box-sizing:border-box; 
    }
    .btnSubmit
    {
        background-color:blue;
        color:white;
        padding: 10px 15px;
        border:none;
        border-radius:3px;
        cursor:pointer;

    }
    .btnSubmit:hover
    {
        background-color:green;
    }

    </style>
</header>
<body>
    <div class="login-container">
        <form method="POST" action="auth.php">
            <h2>Login Credential</h2>
            <label for="username" id="lblusername" name="lblusername">Username: </label>
            <input type="text" name="username" id="username" class="inputText"/>

            <label for="password" id="lblpassword" name="lblpassword">Password:</label>
            <input type="password" id="password" name="password" class="inputText"/>
            <input type="submit" id="btnsubmit" name="btnsubmit" value="Submit" class="btnSubmit"/>
        </form>
    </div>
</body>    


</html>