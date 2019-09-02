<?php
include_once ('head.php');
include_once ('classes/Link.php');
include_once ('classes/ApiLink.php');
include_once ('classes/TariffsHelper.php');
$apiLink = new ApiLink('http://sknt.ru/job/frontend/data.json');
$tariffsHelper = new TariffsHelper($apiLink);
$tariffs = $tariffsHelper->getTariffsWhithMinMaxPrice();?>
<body>
    <section class="display" page="1">
        <div class="box">
            <?php foreach ($tariffs as $tariff):?>
            <div>
                <div class="box-items">
                    <div>
                        <p class="title">Тариф "<?php echo $tariff->title;?>"
                        </p>
                    </div>
                    <div class="option" onclick="getTariffFromId(<?php echo $tariff->tariffNumber;?>)">
                        <div>
                            <span class="speed"><?php echo $tariff->speed;?> Мбит/с</span>
                            <p>
                                <span><?php echo $tariff->minPrice;?> - <?php echo $tariff->maxPrice;?> &#8381;/мес</span>
                            </p>
                            <?php if(isset($tariff->free_options)):?>
                            <div class="option-items">
                                <?php foreach ($tariff->free_options as $free_option):?>
                                    <p>
                                        <?php echo $free_option;?>
                                    </p>
                                <?php endforeach;?>
                            </div>
                            <?php endif;?>
                        </div>
                        <div class="arrow">
                            <svg id="i-chevron-right" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="16" height="16" fill="none" stroke="#4d575d" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                <path d="M12 30 L24 16 12 2" />
                            </svg>
                        </div>
                    </div>
                    <div>
                        <p class="for-border">
                            <a href = "<?php echo $tariff->link;?>">узнать подробнее на сайте www.sknt.ru
                            </a>
                        </p>
                    </div>
                </div>
            </div>
            <?php endforeach;?>
        </div>
    </section>
    <div class="box no-grid">
        <div class="page3 display" page="3">
        </div>
    </div>
    <div class="page2 display" page="2">
    </div>
</body>
<script>
    var TariffObj = JSON.parse('<?php echo addslashes(json_encode($tariffs));?>');
</script>
</html>
