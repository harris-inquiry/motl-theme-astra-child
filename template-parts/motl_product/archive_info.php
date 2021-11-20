
<article class="pb-6">
  <div class="relative">
    <a href="<?php the_permalink(); ?>" rel="bookmark">
      <div style="justify-content:center;">
      <?php
        $motl_image_id = get_field('motl-image');
        if ($motl_image_id) {
          echo wp_get_attachment_image(
            $motl_image_id,
            "full",
            false,
            array("class" => "",
                  "style" => "position:relative;")
          );
        } ?>
      </div>
    <div class="title-info absolute bottom-0 px-4 py-2 text-white" style="width: 100%;background: linear-gradient(45deg, #000000a3, transparent 60%);">
      <h2 class="entry-title mb-0 text-white">
        <?php the_title(); ?>
      </h2>
      <p class="italic mb-1"><?php the_field("motl-medium"); ?></p>
    </div>
    </a>
  </div>
</article>

