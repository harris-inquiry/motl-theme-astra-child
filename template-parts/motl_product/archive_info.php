
<article class="p-5 sm:max-w-1/2 flex-shrink-0">
  <div>
    <div class="title-info italic">
      <h2 class="entry-title mb-0">
        <a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
      </h2>
      <p class="text-gray-400 mb-1"><?php the_field("motl-medium"); ?></p>
    </div>
    <a href="<?php the_permalink(); ?>" rel="bookmark">
      <?php
        $motl_image_id = get_field('motl-image');
        if ($motl_image_id) {
          echo wp_get_attachment_image(
            $motl_image_id,
            "full",
            false,
            array("class" => "",
                  "id" => "artwork-image")
          );
        } ?>
    </a>
  </div>
</article>
