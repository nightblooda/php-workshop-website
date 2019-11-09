<html>
<?php 
    require_once("header.php");
?>


    <body>
        <style>
            .fullpage{
                background:#f1f1f1;
padding: 70px 0px;
height: 100%;
text-align: center;
}
.subcont{
    width: 70%;

margin: auto;

background:#fff;

border: 1px solid #ddd;

padding: 30px;

text-align: center;
}

.dibhd{
    display: grid;

grid-template-columns: 1fr 1fr;

margin: 30px auto;

justify-content: center;


align-items: center;
}

.loginForm{
    display: grid;

grid-gap: 20px;

margin-left: 50px;
}

.login-control{
    border: 1px solid
#ddd;

background:
#f1f1f1;

padding: 10px;

width: 100%;
}

.input-button{
    padding: 10px;

background:
#f1f1f1;

border: 1px solid
#ddd;

width: 100%;
}

img{
    width: 100%;
}
    #validbh{
        margin-bottom: 10px;
    }

@media(max-width: 700px){
    .fullpage{
        padding: 10px 0px;
    }
    .subcont{
        width: 100%;
    }
    .dibhd{
        display: block;
    }
    .loginForm{
        margin-left: 0px;
        margin-top: 30px;
    }

}
            
            
        </style>
        <section class="fullpage">
            <h3>Login to Your Account</h3>
                        <div class="subcont">
                        
        <div class="dibhd">
            <div class="photok">
                <img src="<?php echo URL_ROOT.'/assets/img/login.svg';?>">
            </div>
        <form class="loginForm">
            <div class="login-group">
                                        <div id="validbh" style="color:red;"></div>

                        <input type="email" placeholder="Email" class="input-field login-control" name="email"><div class="validation"></div>
                        </div>
                        <div class="login-group">
                        <input type="password" placeholder="Password" class="input-field login-control" name="password">
                        <div class="validation"></div>
                        </div>
                        <div class="login-group">
                        <input type="submit" value="Login" class="input-button" class="login-control">
                        </div>
                        <a href="../defaultpage/forgotPassword">Forgot Password?</a>
                    </form>
                    </div>
                    
                    <a href="<?php echo URL_ROOT;?>" class="making-back">Back</a>
                    </section>



<?php
    require_once("litefooter.php");
?>
<script src="<?php echo URL_ROOT;?>/assets/js/loginForm.js"></script>

</body>
</html>