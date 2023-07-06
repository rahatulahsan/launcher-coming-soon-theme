<div id="fh5co-footer">
			<div class="row">
				<div class="col-md-6">
                    <?php $socials = get_field('social_media'); 
                   
                    if ($socials){
                        echo '<ul id="fh5co-social">';

                        foreach($socials as $social){
                            $link = $social['social_media_link'];
                            $icon = $social['social_media_icons'];
                            ?>
                            <li><a href="<?php echo $link;  ?>"><i class="<?php echo $icon; ?>"></i></a></li>
                        <?php }

                        echo '</ul>';
                    }  
                        
                    ?>
					
					
				</div>
				<div class="col-md-6 fh5co-copyright">
					<p><?php echo get_field('copyright'); ?></p>
				</div>
			</div>
		</div>
		
	</div>
<?php wp_footer(); ?>
</body>
</html>

