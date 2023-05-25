<?php
get_header();
$metaData = get_post_meta(get_the_ID());
?>
<div class="movie-content">
    <h1 class="title"><?php the_title(); ?></h1>
    <p class="description"><?php the_content(); ?></p>
</div>
<div class="movie-meta">
    <h4 class="meta-name"><?php foreach($metaData as $metaKey => $metaValue){
        if($metaKey == 'movie_title')
        echo $metaKey.' = '.$metaValue[0];
        
        
    }  ?></h4>
    <h3 class="meta-value"></h3>
</div>



<?php
get_footer();
?>