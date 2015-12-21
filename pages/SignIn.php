<br>
<div class="container">
    <form class="form-horizontal" role="form" action="<?=SITE?>SignIn/actionSignIn" method="post">
        <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
            <div class="col-sm-10">
                <input type="email" class="form-control" id="inputEmail3" placeholder="Email" name="Email">
            </div>
        </div>
        <div class="form-group">
            <label for="inputPassword3" class="col-sm-2 control-label">Пароль</label>
            <div class="col-sm-10">
                <input type="password" class="form-control" id="inputPassword3" placeholder="Password" name="Pass">
            </div>
        </div>
        <div>

        <button type="submit" class="btn btn-success">Войти</button>
         <br>
         <br>
         <a href="<?=SITE?>Users/Registration" class="btn btn-warning">Регистрация</a>
        </div>
    </form>



</div>



