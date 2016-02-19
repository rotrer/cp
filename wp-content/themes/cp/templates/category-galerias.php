<section class="container">
    <div class="row">
        <header class="title category">
            <h1><a href="<?php echo get_category_link(36); ?>">Archivos</a></h1>
        </header>
        <?php 
        $categories = get_categories( array(
            'orderby' => 'name',
            'hide_empty' => 0,
            'parent'  => 36
        ) );
        if ( $categories ) foreach ($categories as $key => $category) {
        ?>
            <?php $photo = get_field('imagen_cat2', $category); ?>
            <div class=" col-xs-12 col-sm-6 col-md-4 " data-w="<?php echo $photo['width'] ?>" data-h="<?php echo $photo['height'] ?>">
                <div class="archive-cat">
                    <a href="<?php echo get_category_link( $category->term_id ); ?>"><img  src="<?php echo $photo['url']; ?>"> 
                        <!-- descripcion imagen --> 
                        <div class="description">
                            <h2><?php echo $category->name; ?></h2>
                        </div>
                    </a>
                </div>
            </div>
        <?php } ?>
    </div>
</section>