<div class="container">


    <div class="row">

        <!-- Gallery Items
        ================================================== -->
        <div class="span12 gallery">


            <div class="row clearfix">
                <ul class="gallery-post-grid holder">

                    <?php foreach ($films as $row) { ?>
                        <li class="span3 gallery-item" data-id="id-1" data-type="illustration">

                        <span class="gallery-hover-4col hidden-phone hidden-tablet">

<!--                            <span class="gallery-icons">-->
<!---->
<!---->
<!---->
<!--<!--                                 <ul>-->-->
<!--<!--                                     <h3><span>-->--><?// //=$row['title']?><!--<!--<span></h3><br/>-->-->
<!---->
<!--<!--                                     <span> <img src="-->--><?// //=$row['photo']?><!--<!--" width="190px"/></span></br>-->-->
<!--<!--                                     <span>Жанр: <h4><span>-->--><?// //=$row['category']?><!--<!--<span></h4><br/></span>-->-->
<!--<!--                                     <span>Описание: -->--><?// //=$row['description']?><!--<!--</span><br/>-->-->
<!--<!--                                     <span> Год: -->--><?// //=$row['year']?><!--<!--</span></br>-->-->
<!--<!--                                     <span> Добавлен на сайт: -->--><?// //=$row['date']?><!--<!--</span></br>-->-->
<!--<!--                                     <input type="button" onclick="alert('Скоро будет!')"  value="Подробнее...">-->-->
<!--<!--                                 </ul>-->-->
<!---->
<!---->
<!--                            </span>-->
                        </span>
<!--                            <a href="--><?//=SITE?><!--Films/id--><?//= '=' . $row['id'] ?><!--"><img src="--><?//= $row['photo'] ?><!--" width="190px"alt="Gallery"></a>-->
<!--                                <a href="--><?//=SITE?><!--Films/id--><?//='=' . $row['id']?><!--"><img src="--><?//=AVATAR . $row['photo']?><!--"></a>-->
                                <a href="<?=SITE?>Films/id<?='=' . $row['id']?>"><img src="<?=SITE?>/files/<?=$row['photo']?>"width="190px"></a>



                        <span class="project-details"><a href="<?=SITE?>Films/id<?= '=' . $row['id'] ?>"><?= $row['title'] ?></a>

                            <br>
                            Год: <?= $row['year'] ?> <br>
                            Добавлен на сайт:<?= $row['date'] ?> <br>
                            Описание:<?= $row['description'] ?> </span>
                        </li>

                        <!--       -->
                        <!--            <a href="" Подробнее>-->
                        <!---->
                        <!--                <ul>-->
                        <!--                    <h3><span>--><? //=$row['title']?><!--<span></h3><br/>-->
                        <!---->
                        <!--                    <span> <img src="--><? //=$row['photo']?><!--" width="190px"/></span></br>-->
                        <!--                    <span>Жанр: <h4><span>--><? //=$row['category']?><!--<span></h4><br/></span>-->
                        <!--                    <span>Описание: --><? //=$row['description']?><!--</span><br/>-->
                        <!--                    <span> Год: --><? //=$row['year']?><!--</span></br>-->
                        <!--                    <span> Добавлен на сайт: --><? //=$row['date']?><!--</span></br>-->
                        <!--                    <input type="button" onclick="alert('Скоро будет!')"  value="Подробнее...">-->
                        <!--                </ul>-->
                        <!--            </a>-->


                    <?php }; ?>
            </div>
        </div>
    </div>
</div>