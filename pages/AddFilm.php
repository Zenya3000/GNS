<div class="container">
    <form  class="form-horizontal" role="form" action="<?=SITE?>Films/AddFilm" enctype="multipart/form-data" method="post">
        <div class="form-group">
            <br>
            <label for="inputName" class="col-sm-2 control-label">Название фильма</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="inputEmail3" placeholder="Название фильма" name="Name">
            </div>
        </div>
        <div class="form-group">
            <label for="inputDiscription" class="col-sm-2 control-label">Описание</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="inputPassword3" placeholder="Описание" name="description">
            </div>
        </div>

        <div class="form-group">
            <label for="inputFile" class="col-sm-5 control-label">Фотография</label>
            <div class="col-sm-5">
                <input type="file" class="icon-file" id="inputAvatar" name="avatar">
            </div>
        </div>

        <div class="form-group">
            <label for="inputYear" class="col-sm-5 control-label">Год выхода</label>
            <div class="col-sm-2">
                <input type="datetime" class="form-control" id="inputName" placeholder="Год выхода" name="year">
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-2">
                <input type="hidden" class="form-control" id="inputDate"  name="date" value="<?=date("Y-m-d H:i:s");?>">
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-2">
                <input type="hidden" class="form-control" id="inputIsActive"  name="IsActive" value="0">
            </div>
        </div>
<!--        <div class="form-group">-->
<!--            <label for="inputCity" class="col-sm-2 control-label">City</label>-->
<!--            <div class="col-sm-10">-->
<!--                <select class="form-control" name="city" id="inputCity">-->
<!--                    --><?php //foreach($city as $nameCity) { ?>
<!--                        <option value="--><?//=$nameCity['id']?><!--">--><?//=$nameCity['nameCity']?><!--</option>-->
<!--                    --><?php //} ?>
<!--                </select>-->
<!--            </div>-->
<!--        </div>-->


        <div class="form-group">
            <div class="col-sm-offset-1 col-sm-10">
                <button type="submit" class="btn btn-success">Добавить фильм!</button>
            </div>
        </div>
    </form>
</div>