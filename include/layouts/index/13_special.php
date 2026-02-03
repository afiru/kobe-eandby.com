<?php
$f = fopen("csv/special.csv", "r");
$count = 0;
?>
<div id="special" class="bg_6C8958 special">
    <section class="wap specialLxn">
        <h2 class="cl_fff fw_500 txtset h2Special">（各分野に特化したスペシャリスト）</h2>
        <h3 class="cl_fff fw_700 txtset jstitleFlow h3Special">
            <span class="txtset show">全</span>
            <span class="txtset show">員</span>
            <span class="txtset show">が</span>
            <span class="txtset show">「</span>
            <span class="txtset show">現</span>
            <span class="txtset show">場</span>
            <span class="txtset show">で</span>
            <span class="txtset show">闘</span>
            <span class="txtset show">っ</span>
            <span class="txtset show">て</span>
            <span class="txtset show">き</span>
            <span class="txtset show">た</span>
            <span class="txtset show">」</span>
            <br class="sp_only">
            <span class="txtset show">人</span>
            <span class="txtset show">間</span>
            <span class="txtset show">で</span>
            <span class="txtset show">す</span>
            <span class="txtset show">。</span>
            <br class="pc_only">
            <span class="txtset show">肩</span>
            <span class="txtset show">書</span>
            <span class="txtset show">き</span>
            <span class="txtset show">よ</span>
            <span class="txtset show">り</span>
            <br class="sp_only">
            <span class="txtset show">「</span>
            <span class="txtset show">ど</span>
            <span class="txtset show">こ</span>
            <span class="txtset show">で</span>
            <span class="txtset show">、</span>
            <span class="txtset show">何</span>
            <span class="txtset show">を</span>
            <span class="txtset show">」</span>
            <span class="txtset show">し</span>
            <span class="txtset show">て</span>
            <span class="txtset show">き</span>
            <span class="txtset show">た</span>
            <span class="txtset show">か</span>
            <span class="txtset show">。</span>
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