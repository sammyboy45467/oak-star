 <?php global $nature_mt; ?>
</div>
<!-- Footer -->
<footer class="wow animated fadeIn">
    <section id="footer" class="footer">
        <div class="container-fluid">
            <div class="row-fluid">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="scroll-top"><a href="#" class="fa fa-arrow-up fa-5x" ></a></div>
                    <br/>
                    <br/>
                    <?php if(isset($nature_mt['footer_text']) && $nature_mt['footer_text'] != '') { ?>
                    <p class="sub-title">&copy;<?php echo $nature_mt['footer_text'];?></p>
                    <?php } ?> 
                    <!-- Footer Social Icon -->
                    <ul class="social">
                        <?php if(isset($nature_mt['twitter_url']) && $nature_mt['twitter_url'] != '') { ?>
                                <li><a class="fa fa-twitter-square fa-5x" href="<?php echo $nature_mt['twitter_url'];?>"></a></li>
                        <?php } ?>
                        <?php if(isset($nature_mt['facebook_url']) && $nature_mt['facebook_url'] != '') { ?>
                                <li><a class="fa fa-facebook-square fa-5x" href="<?php echo $nature_mt['facebook_url'];?>"></a></li>
                        <?php } ?>
                        <?php if(isset($nature_mt['rss_url']) && $nature_mt['rss_url'] != '') { ?>
                                <li><a class="fa fa-instagram fa-5x" href="<?php echo $nature_mt['rss_url'];?>"></a></li>
                        <?php } ?>
                    </ul>
                    <!-- Footer Social Icon end -->
                </div>
            </div>
        </div>
    </section>
</footer>

<!-- Footer end -->
<?php global $nature_mt;
if(isset($nature_mt['integration_footer'])) echo $nature_mt['integration_footer'] . PHP_EOL; ?>

 <?php wp_footer(); ?>
  </body>
</html>