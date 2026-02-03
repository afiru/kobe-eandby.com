<?php
$f = fopen("csv/special.csv", "r");
$count = 0;
?>
<div class="bg_6C8958 special">
    <section class="specialLxn">
        <h2 class="cl_fff fw_500 txtset h2Special">（各分野に特化したスペシャリスト）</h2>
        <h3 class="cl_fff fw_700 txtset jstitleFlow h3Special">
            <span class="show">全</span>
            <span class="show">員</span>
            <span class="show">が</span>
            <span class="show">「</span>
            <span class="show">現</span>
            <span class="show">場</span>
            <span class="show">で</span>
            <span class="show">闘</span>
            <span class="show">っ</span>
            <span class="show">て</span>
            <span class="show">き</span>
            <span class="show">た</span>
            <span class="show">」</span>
            <span class="show">人</span>
            <span class="show">間</span>
            <span class="show">で</span>
            <span class="show">す</span>
            <span class="show">。</span>
            <br>
            <span class="show">肩</span>
            <span class="show">書</span>
            <span class="show">き</span>
            <span class="show">よ</span>
            <span class="show">り</span>
            <span class="show">「</span>
            <span class="show">ど</span>
            <span class="show">こ</span>
            <span class="show">で</span>
            <span class="show">、</span>
            <span class="show">何</span>
            <span class="show">を</span>
            <span class="show">」</span>
            <span class="show">し</span>
            <span class="show">て</span>
            <span class="show">き</span>
            <span class="show">た</span>
            <span class="show">か</span>
            <span class="show">。</span>
        </h3>

        <ul class="d_flex j_start row ulSpecial">
            <?php while ($line = fgetcsv($f)) : ?>
                <?php if ($count !== 0): ?>
                    <li class="bg_fff liSpecial">
                        <div class="liSpecialLxn">
                            <div class="d_flex j_between row specialTopFx">
                                <figure class="photoSpecialTop">
                                    <picture>
                                        <source media="(min-width: 768px)" srcset="img/<?php echo $line[0]; ?>Pc.png">
                                        <source media="(max-width: 767px)" srcset="img/<?php echo $line[0]; ?>Sp.png">
                                        <img loading="lazy" src="img/<?php echo $line[0]; ?>Pc.png" alt="<?php echo $line[2]; ?>写真" width="185" height="214">
                                    </picture>
                                </figure>
                                <section class="secSpecialTop">
                                    <h4 class="cl_1D1D1F fw_500 txtset text_justify h4SpecialTop"><?php echo $line[1]; ?></h4>
                                    <h5 class="cl_1D1D1F fw_500 txtset text_justify h5SpecialTop"><?php echo $line[2]; ?></h5>
                                    <p class="cl_1D1D1F fw_400 txtset text_justify txtSpecialTop"><?php echo $line[3]; ?></p>
                                </section>
                            </div>

                            <h3 class="cl_1D1D1F fw_500 txtset h3SpecialMain"><?php echo $line[4]; ?></h3>
                            <p class="cl_2C2C2C fw_400 text_justify txtset txtSpecialMain">
                                <?php echo $line[5]; ?>
                            </p>
                        </div>
                    </li>
                <?php endif; ?>
                <?php $count++; ?>
            <?php endwhile; ?>
        </ul>
    </section>
</div>