<!DOCKTYPE html>
<html>
    <head>
        <title>Page 1</title>
        <style>
            *{margin: 0;padding: 0;}
body{
    background-color: 000015;
}

header{
    display: flex;
    background-color: #0dffa0;
    border-bottom-right-radius: 50px;
    border-right-style: solid;
    border-right-color: white;
    border-left-style: solid;
    border-left-color: white;
    border-left-width: thick;
    transition: 2s ease-in-out;
}

.div1{
    flex: 1;
    padding: 5px 10px 5px 5px;
    border-right-style: solid;
    border-right-color: 000015;
}
.div2{
    flex: 25;
    padding: 5px 5px 5px 5px;
    font-family: monospace;
    font-size: 13px;
    color: 000015;
}

main{
    margin: 200px auto;
    width: 80%;
    text-align: center;
    color: white;
    background: none;
    color: white;
    border: none;
    outline: none;
    transition: 2s ease-in-out;
    
}

main h1{
    padding: 0px 0px 0px 0px;
    font-size: 40px;
    font-family: sans-serif;
    text-decoration: underline;
    
    
}

main input[type="text"]{
    color: white;
    margin: 100px 0px 10px 0px;
    background-color: 000015;
    padding: 10px 10px 10px 10px;
    border: none;
    outline: none;
    width: 650px;
    border-bottom: 1px solid grey;
    font-family: monospace;
    font-size: 20px;
}

main input[type="password"]{
    color: white;
    margin: 10px 0px 10px 0px;
    background-color: 000015;
    padding: 10px 10px 10px 10px;
    border: none;
    outline: none;    
    width: 650px;
    border-bottom: 1px solid grey;
    font-family: monospace;
    font-size: 20px;
}

main textarea{
    color: white;
    outline: none;
    margin: 10px 0px 10px 0px;
    border-color: transparent;
    background-color: 000015;
    width: 650px;
    border-bottom: 1px solid grey;
    padding: 0px 5px 0px 5px;
    text-align:justify-all;
    overflow-y: scroll;
    overflow-x: hidden;
    font-family: monospace;
    font-size: 20px;
    height: 100px;
}

main input[type="submit"]{
    color: 000015;
    margin: 50px 0px 10px 0px;
    border-color: transparent;
    background-color: 000015;
    padding: 10px 10px 10px 10px;
    border: none;
    width: 250px;
    background-color: #0dffa0;
    font-family: monospace;
    font-size: 20px;
    
}

main input[type="submit"]:hover{
    background-color: #00d682;
}
        </style>
    </head>
    <body>
        <header>
            <div class="div2">
                <h1>anything.com</h1>
            </div>
        </header>
        <main>
            <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
                <h1>GET PASSWORD</h1>
                <input type="text" name="username" placeholder="Username" required>
                <br>
                <input type="submit" name="submit" value="SUBMIT" >
                <br>
            </form>
                        <?php
if ($_SERVER['REQUEST_METHOD']=='POST') {
$name=$_POST['username'];
session_start();
$con = mysqli_connect('localhost','akarsh','PASSWORD123','CRED');
$sql = "select username from info where username = '$name'";
$result = mysqli_query($con,$sql);
$check = mysqli_fetch_assoc($result);
$exist = $check['username'];
if ($exist==$name) {
mail($name,"Change Password","anything.com/index2.php");
echo "reset link sent to your email account!";
}
else{
echo "the user email does not exist";
}

}

?>
                    
      
        </main>
    </body>
</html>
