<?php get_header(); ?>
    <div id="app-wrapper" role="main">
        <div id="app" class="app-container" data-class="page-404">
            <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <div class="txt--center">
                    <section class="error-404 error__page not-found content-block section">
                        <div class="container">
                            <div class="error__page__content">
                                <h1 class="error__page__title">
                                    404
                                </h1>
                                <div class="error__page__subtitle">Ooops!!!</div>
                                <div class="error__page__text">That page doesn't exist or is unavailable</div>
                                <div class="error__page__button"><a href="<?php echo get_home_url() ?>"
                                                                    class="button button--secondary">Go back to home</a>
                                </div>
                            </div>
                        </div>
                    </section><!-- .error-404 -->
                </div>
            </div>
        </div>
    </div>
<?php get_footer(); ?>