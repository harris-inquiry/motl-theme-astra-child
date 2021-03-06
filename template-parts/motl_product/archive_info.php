<article class="pb-6">
  <div class="motl-sample relative overflow-hidden border-4">
    <a href="<?php the_permalink(); ?>" rel="bookmark">
      <div style="justify-content:center;">
        <?php
        $motl_image_id = get_field('motl-image');
        if ($motl_image_id) {
          echo wp_get_attachment_image(
            $motl_image_id,
            "full",
            false,
            array(
              "class" => "motl-sample_image",
              "style" => "position:relative;"
            )
          );
        } ?>
      </div>
      <div class="motl-sample_text title-info absolute bottom-0 px-4 py-2 text-white">
        <h2 class="entry-title mb-0 text-white">
          <?php the_title(); ?>
        </h2>
        <p class="italic mb-1"><?php the_field("motl-medium"); ?></p>
      </div>
    </a>
  </div>
</article>