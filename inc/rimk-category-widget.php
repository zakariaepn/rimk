<?php 

    class rimk_category_widget extends WP_Widget{

        public function __construct(){
            parent::__construct('rimk-category-widget','Rimk Category Widget',array(
                'description' => 'Rimk Category Widget by Inovate Digital'
            ));
        }
        
        public function widget($protom,$detio){

            $post_categories = get_categories( array(
                'orderby' => 'name',
                'order'   => 'ASC'
            ) );
            
            ?>

                       <?php echo $protom['before_widget']; ?>
                      <?php echo $protom['before_title']; ?><?php echo $detio['cat_title']; ?><?php echo $protom['after_title']; ?>
                            <ul>
                            
                                <?php foreach($post_categories as $pc){
                                        ?> 
                                             <li><a href="<?php echo get_category_link($pc->term_id); ?>"><i class="fas fa-tags"></i><?php echo $pc->name; ?></a></li>
                                        <?php 
                                } ?>
                                    
                                        
                                    
                           
                                
                               
                            </ul>
                       <?php echo $protom['after_widget']; ?>
            

        <?php }

        public function form($titeo){
            ?> 
                <p>
                    <label for="<?php echo $this->get_field_id('cat_title'); ?>">Title</label>
                    <input type="text" name="<?php echo $this->get_field_name('cat_title'); ?>" value="<?php echo $titeo['cat_title'];  ?>" id="<?php echo $this->get_field_id('cat_title'); ?>" class="widefat">
                </p>
               
            <?php 
        }


    }

    add_action('widgets_init','rimk_category_widget');

    function rimk_category_widget(){
        register_widget('rimk_category_widget');
    }

    