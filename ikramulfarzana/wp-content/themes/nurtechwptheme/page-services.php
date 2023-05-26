<?php get_header(); ?>
    <section class="inner-section">
        <div class="inner-content-body">
            <article id="post-250" class="post-250 page type-page status-publish hentry">
                <header class="entry-header-page">
                    <h2>Services</h2>
                </header><!-- .entry-header -->
                <div class="entry-content">
                    <div class="tab-entry-content">
                        <?php echo do_shortcode( '[services]' ); ?>
                    </div>



                    <script type="text/javascript">
                        const btntabvalue = document.getElementsByClassName("btntab");
                        const texts = document.getElementsByClassName("text-tab");

                        for (var i = 0; i < btntabvalue.length; i++) {
                            btntabvalue[i].addEventListener("click", function() {
                                document.querySelectorAll(".text-tab.active").forEach(function(item) {
                                    item.classList.remove("active");
                                });
                                texts[this.value].className += " active";
                            })
                        }
                    </script>

                </div>    <!-- .entry-content -->
            </article>
        </div>
    </section>
<?php get_footer();?>
