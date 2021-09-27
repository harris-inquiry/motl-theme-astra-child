
<article class="p-5">
  <div>
    <div class="title-info italic text-center">
      <h2 class="entry-title mb-0 underline">
        <a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
      </h2>
      <p class="text-gray-400 mb-1"><?php the_field("motl-medium"); ?></p>
    </div>
    <a href="<?php the_permalink(); ?>" rel="bookmark">
      <div style="height:20rem;overflow:hidden;justify-content:center;">
      <?php
        $motl_image_id = get_field('motl-image');
        if ($motl_image_id) {
          echo wp_get_attachment_image(
            $motl_image_id,
            "full",
            false,
            array("class" => "",
                  "style" => "position:relative;top:-12%;")
          );
        } ?>
      </div>
    </a>
  </div>
  <hr style="height: 1px;margin-top:20px;">
</article>

