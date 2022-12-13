<?php
$prefix = "find_us";
// include block settings vars
include(get_theme_file_path("/template-parts/block-settings.php"));


$title = get_sub_field('title_block');
$content = get_sub_field('content');
$add_country_block = get_field('add_country_block', 'option');
if ($title || $content):
    ?>

    <section class="where_to_buy section" id="<?= esc_attr($id) ?>-section">
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
                    'hide_empty' => 0,
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
                    'hide_empty' => 0,
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
                    'hide_empty' => 0,
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
            </div>
        </div>


        <div id="response">
            <div class="search-modal">

            </div>
        </div>
    </section>
<?php endif; ?>