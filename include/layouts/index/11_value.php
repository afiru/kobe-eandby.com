<?php
$f = fopen("csv/value.csv", "r");
$count = 0;
?>
<div id="value" class="bg_F5F5F5 value">
    <section class="wap valueLxn">
        <div class="d_flex j_start ali_center titleValue">
            <h2 class="cl_1D1D1F fw_700 txtset plus h2ValueLxn">VALUE</h2>
            <h3 class="cl_1D1D1F fw_500 txtset h3ValueLxn">－経験をもとに提供できる8つの価値</h3>
        </div>

        <div class="valueSwipper">
            <div class="swiper">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    <?php while ($line = fgetcsv($f)) : ?>
                    <?php if ($count !== 0): ?>
                    <div class="swiper-slide">
                        <div class="bg_fff valueSliderBx">
                            <div class="valueSliderLxn">
                                <div class="d_flex j_start ali_center titleValueSlider">
                                    <h4 class=" plus cl_1D1D1F fw_600 txtset h4TitleValueSlider"><?php echo $line[0]; ?></h4>
                                    <h5 class="cl_1D1D1F fw_500 txtset h5TitleValueSlider"><?php echo $line[1]; ?></h5>
                                </div>
                                <h6 class="cl_66A13F fw_500 txtset text_justify h6TitleValueSlider">
                                    <?php echo $line[2]; ?>
                                </h6>
                                <div class="bg_D9D9D9 brdTitleValueSlider"></div>
                                <p class="cl_1D1D1F fw_400 txtset text_justify txtValueSlider">
                                    <?php echo $line[3]; ?>
                                </p>
                                <ul class="ulValueSlider">
                                    <li class="bg_F5F5F5 d_flex j_start fw_400 liValueSlider">
                                        <span class="cl_66A13F fw_400 iconLiValueSlider">●</span>
                                        <span class="cl_1D1D1F fw_400 txtLiValueSlider">
                                            <?php echo $line[4]; ?>
                                        </span>
                                    </li>

                                    <li class="bg_F5F5F5 d_flex j_start fw_400 liValueSlider">
                                        <span class="cl_66A13F fw_400 iconLiValueSlider">●</span>
                                        <span class="cl_1D1D1F fw_400 txtLiValueSlider">
                                            <?php echo $line[5]; ?>
                                        </span>
                                    </li>

                                    <li class="bg_F5F5F5 d_flex j_start fw_400 liValueSlider">
                                        <span class="cl_66A13F fw_400 iconLiValueSlider">●</span>
                                        <span class="cl_1D1D1F fw_400 txtLiValueSlider">
                                            <?php echo $line[6]; ?>
                                        </span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <?php endif; ?>
                    <?php $count++; ?>
                    <?php endwhile; ?>
                </div>

                <!-- 必要に応じてナビボタン -->
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
        </div>
    </section>
</div>