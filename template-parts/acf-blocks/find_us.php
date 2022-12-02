<?php 
    $prefix = "find_us";
    // include block settings vars
    include(get_theme_file_path("/template-parts/block-settings.php"));


    $title = get_sub_field('title_block');
    $content = get_sub_field('content');
    if($title ||  $content):
?>

<section class="find_us section" id="<?= esc_attr($id) ?>-section">
    <div class="section-bg"></div>
    <div class="container">
        <div class="title_block">
            <?php if($title): ?>
            <h1><?= $title ?></h1>
            <?php endif; ?>
            <?php if($content): ?>
            <div class="subtitle content-block text--size--29">
                <?= $content ?>
                <!-- <p>Find your nearest place to enjoy <b>LA HECHICERA</b></p> -->
            </div>
            <?php endif; ?>
        </div>
        <div class="main_block">
            <form action="">
                <div class="select_container">
                    <label for="oCountryFilter">Country</label>
                    <div class="input_container">
                        <input type="text" id="oCountryFilter" data-validate="autocomplete" autocomplete="off"
                            class="autocomplete o_text_field" placeholder="Select country" value="">
                        <div class="o_input_arrow"></div>
                        <div class="scroll-element" style="">
                            <ul class="list drop-down-ul map" id="o_countries">
                                <li data-city-ref="" id="France">
                                    <span>France</span>
                                </li>
                                <li data-city-ref="" id="Italy">
                                    <span>Italy</span>
                                </li>
                                <li data-city-ref="" id="Czech">
                                    <span>Czech</span>
                                </li>
                                <li data-city-ref="" id="Colombia">
                                    <span>Colombia</span>
                                </li>
                                <li data-city-ref="" id="Hungary">
                                    <span>Hungary</span>
                                </li>
                                <li data-city-ref="" id="Peru">
                                    <span>Peru</span>
                                </li>
                                <li data-city-ref="" id="Benelux">
                                    <span>Benelux</span>
                                </li>
                                <li data-city-ref="" id="Slovenia">
                                    <span>Slovenia</span>
                                </li>
                                <li data-city-ref="" id="Germany">
                                    <span>Germany</span>
                                </li>
                                <li data-city-ref="" id="United_Kingdom">
                                    <span>United Kingdom</span>
                                </li>
                                <li data-city-ref="" id="Denmark">
                                    <span>Denmark</span>
                                </li>
                                <li data-city-ref="" id="Sweden">
                                    <span>Sweden</span>
                                </li>
                                <li data-city-ref="" id="Norway">
                                    <span>Norway </span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="select_container">
                    <label for="oCityFilter">City</label>
                    <div class="input_container">
                        <input type="text" id="oCityFilter" data-validate="autocomplete" autocomplete="off"
                            class="autocomplete o_text_field" placeholder="Select Sity" value="">
                        <div class="o_input_arrow"></div>
                        <div class="scroll-element">
                            <ul class="list drop-down-ul map" id="o_cities">
                                <li data-city-ref="" id="Paris">
                                    <span>Paris</span>
                                </li>
                                <li data-city-ref="" id="Rome">
                                    <span>Rome</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="select_container">
                    <label for="oCategoryFilter">Category</label>
                    <div class="input_container">
                        <input type="text" id="oCategoryFilter" data-validate="autocomplete" autocomplete="off"
                            class="autocomplete o_text_field" placeholder="Bar\Restaurant" value="">
                        <div class="o_input_arrow"></div>
                        <div class="scroll-element">
                            <ul class="list drop-down-ul map" id="o_bars">
                                <li data-city-ref="" id="Bar">
                                    <span>Bar\Restaurant</span>
                                </li>
                                <li data-city-ref="" id="Shops">
                                    <span>Shops</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="btn_container">
                    <input type="submit" value="SEARCH" class="button">
                </div>
            </form>
        </div>
    </div>
</section>
<?php endif; ?>