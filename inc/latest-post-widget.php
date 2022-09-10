<?php 

    class rimk_latest_post_widget extends WP_Widget{

        public function __construct(){
            parent::__construct('rimk-latest-post-widget','Rimk Latest Post Widget',array(
                'description' => 'Rimk Latest Post Widget by Inovate Digital'
            ));
        }
        
        public function widget($protom,$detio){
            
                $args = array(
                    'post_type' => 'post',
                    'posts_per_page' => $detio['post_count']
                );

                $dors = new WP_Query($args);
            
            ?>

                       <?php echo $protom['before_widget']; ?>
                      <?php echo $protom['before_title']; ?><?php echo $detio['title']; ?><?php echo $protom['after_title']; ?>
                            <ul>
                            <?php while($dors->have_posts( )){
                                    $dors->the_post( );
                                    ?> 
                                        <li>
                                            <a href="<?php the_permalink( ); ?>">
                                                <img  src="<?php the_post_thumbnail_url( ); ?>">
                                            </a>
                                            <div class="media-body">
                                                <span><?php the_time('d M,y' ); ?></span>
                                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                            </div>
                                        </li>
                                    <?php 
                            } ?>
                                
                               
                            </ul>
                       <?php echo $protom['after_widget']; ?>
            

        <?php }

        public function form($titeo){
            ?> 
                <p>
                    <label for="<?php echo $this->get_field_id('title'); ?>">Title</label>
                    <input type="text" name="<?php echo $this->get_field_name('title'); ?>" value="<?php echo $titeo['title'];  ?>" id="<?php echo $this->get_field_id('title'); ?>" class="widefat">
                </p>
                <p>
					<label for="<?php echo $this->get_field_id('post_count'); ?>">Number of posts to show:</label>
					<input class="tiny-text" id="<?php echo $this->get_field_id('post_count'); ?>" name="<?php echo $this->get_field_name('post_count'); ?>" type="number" step="1" min="1" value="<?php echo $titeo['post_count'];  ?>" size="3">
			</p>
            <?php 
        }


    }

    add_action('widgets_init','widgets_rimk_latest_post');

    function widgets_rimk_latest_post(){
        register_widget('rimk_latest_post_widget');
    }

    