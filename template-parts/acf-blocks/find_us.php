<?php
$prefix = "find_us";
// include block settings vars
include(get_theme_file_path("/template-parts/block-settings.php"));


$title = get_sub_field('title_block');
$content = get_sub_field('content');
$add_country_block = get_field('add_country_block', 'option');
if ($title || $content):
    ?>

    <section class="find_us section" id="<?= esc_attr($id) ?>-section">
        <div class="section-bg"></div>
        <div class="container">
            <div class="title_block">
                <?php if ($title): ?>
                    <h1><?= $title ?></h1>
                <?php endif; ?>
                <?php if ($content): ?>
                    <div class="subtitle content-block text--size--29">
                        <?= $content ?>
                        <!-- <p>Find your nearest place to enjoy <b>LA HECHICERA</b></p> -->
                    </div>
                <?php endif; ?>
            </div>

            <div class="main_block">
                <?php
                $args = array(
                    'type' => 'locations',
                    'child_of' => 0,
                    'parent' => '',
                    'orderby' => 'name',
                    'order' => 'ASC',
                    'hide_empty' => 1,
                    'hierarchical' => 1,
                    'taxonomy' => 'country',
                    'pad_counts' => false);
                $countries = get_categories($args);
                ?>
                <?php
                $args = array(
                    'type' => 'locations',
                    'child_of' => 0,
                    'parent' => '',
                    'orderby' => 'name',
                    'order' => 'ASC',
                    'hide_empty' => 1,
                    'hierarchical' => 1,
                    'taxonomy' => 'city',
                    'pad_counts' => false);
                $cities = get_categories($args);
                ?>
                <?php
                $args = array(
                    'type' => 'locations',
                    'child_of' => 0,
                    'parent' => '',
                    'orderby' => 'name',
                    'order' => 'ASC',
                    'hide_empty' => 1,
                    'hierarchical' => 1,
                    'taxonomy' => 'category',
                    'pad_counts' => false);
                $categories = get_categories($args);
                ?>
                <form id="filter">
                    <div class="select_container">
                        <label for="oCountryFilter">Country</label>
                        <select id="oCountryFilter" name="Country">
                            <?php foreach ($countries as $country) : ?>
                                <option value="<?php echo $country->slug; ?>"><?php echo $country->name; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="select_container">
                        <label for="oCityFilter" name="City">City</label>
                        <select id="oCityFilter" name="City">
                            <?php foreach ($cities as $city) : ?>
                                <option value="<?php echo $city->slug; ?>"><?php echo $city->name; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="select_container">
                        <label for="oCategoryFilter">Category</label>
                        <select id="oCategoryFilter" name="Category">
                            <?php foreach ($categories as $category) : ?>
                                <option value="<?php echo $category->slug; ?>"><?php echo $category->name; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <div class="btn_container">
                        <input type="submit" value="SEARCH" class="button">
                    </div>
                </form>
                <!--            <form action="" method="POST" id="filter">-->
                <!--                <div class="select_container">-->
                <!--                    <label for="oCountryFilter">Country</label>-->
                <!--                    <div class="input_container">-->
                <!--                        <input type="text" id="oCountryFilter" data-validate="autocomplete" autocomplete="off"-->
                <!--                            class="autocomplete o_text_field" placeholder="Select country" value="">-->
                <!--                        <div class="o_input_arrow"></div>-->
                <!--                        <div class="scroll-element" style="">-->
                <!--                            <ul class="list drop-down-ul map" id="o_countries">-->
                <!--                                --><?php //foreach ($countries as $country) {
                ?>
                <!--                                <li data-city-ref="" id="--><?php //echo $country->name;
                ?><!--">-->
                <!--                                    <span>--><?php //echo $country->name;
                ?><!--</span>-->
                <!--                                </li>-->
                <!--                                --><?php //}
                ?>
                <!--                            </ul>-->
                <!--                        </div>-->
                <!--                    </div>-->
                <!--                </div>-->
                <!--                <div class="select_container">-->
                <!--                    <label for="oCityFilter">City</label>-->
                <!--                    <div class="input_container">-->
                <!--                        <input type="text" id="oCityFilter" data-validate="autocomplete" autocomplete="off"-->
                <!--                            class="autocomplete o_text_field" placeholder="Select Sity" value="">-->
                <!--                        <div class="o_input_arrow"></div>-->
                <!--                        <div class="scroll-element">-->
                <!--                            <ul class="list drop-down-ul map" id="o_cities">-->
                <!--                                --><?php //foreach ($cities as $city) {
                ?>
                <!--                                <li data-city-ref="" id="--><?php //echo $city->name;
                ?><!--">-->
                <!--                                    <span>--><?php //echo $city->name;
                ?><!--</span>-->
                <!--                                </li>-->
                <!--                                --><?php //}
                ?>
                <!--                            </ul>-->
                <!--                        </div>-->
                <!--                    </div>-->
                <!--                </div>-->
                <!--                <div class="select_container">-->
                <!--                    <label for="oCategoryFilter">Category</label>-->
                <!--                    <div class="input_container">-->
                <!--                        <input type="text" id="oCategoryFilter" data-validate="autocomplete" autocomplete="off"-->
                <!--                            class="autocomplete o_text_field" placeholder="Bar\Restaurant" value="">-->
                <!--                        <div class="o_input_arrow"></div>-->
                <!--                        <div class="scroll-element">-->
                <!--                            <ul class="list drop-down-ul map" id="o_bars">-->
                <!--                                --><?php // foreach ($categories as $category) {
                ?>
                <!--                                <li data-city-ref="" id="--><?php //echo $category->name;
                ?><!--">-->
                <!--                                    <span>--><?php //echo $category->name;
                ?><!--</span>-->
                <!--                                </li>-->
                <!--                                --><?php //}
                ?>
                <!--                            </ul>-->
                <!--                        </div>-->
                <!--                    </div>-->
                <!--                </div>-->
                <!--                <div class="btn_container">-->
                <!--                    <input type="submit" value="SEARCH" class="button">-->
                <!--                </div>-->
                <!--            </form>-->
            </div>
        </div>

        <div class="container">
            <div id="response">

            </div>
        </div>
    </section>
<?php endif; ?>