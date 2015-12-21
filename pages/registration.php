<div class="container">
    <form class="form-horizontal" role="form" action="<?=SITE?>Users/actionRegistration" method="post">
        <div class="form-group">
            <br>
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

        <div class="form-group">
            <label for="inputName" class="col-sm-2 control-label">Name</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="inputName" placeholder="Name" name="Name">
            </div>
        </div>

        <div class="form-group">
            <label for="inputCity" class="col-sm-2 control-label">City</label>
            <div class="col-sm-10">
                <select class="form-control" name="city" id="inputCity">
                    <?php foreach($city as $nameCity) { ?>
                        <option value="<?=$nameCity['id']?>"><?=$nameCity['nameCity']?></option>
                    <?php } ?>
                </select>
            </div>
        </div>


        <div class="form-group">
            <div class="col-sm-offset-1 col-sm-10">
                <button type="submit" class="btn btn-success">Войти</button>
            </div>
        </div>
    </form>
</div>