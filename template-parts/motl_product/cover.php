<?php

/**
 * Product cover for MOTL art pages
 * @since 1.0.0
 */

$motl_cover_path_stephen_photo = get_stylesheet_directory_uri() . "/assets/images/stephen.jpg";

function conditional_get_table_row($label, $field_name)
{
  if (get_field($field_name)) { ?>
    <tr>
      <td><?php echo $label; ?></td>
      <td><?php the_field($field_name); ?></td>
    </tr>
<?php
  }
}
?>

<div class="container mx-auto p-4">

  <div id="preview-content">

    <div class="sm:flex my-2 sm:space-x-2 justify-center">

      <div id="left-content" class="flex-shrink-0 sm:max-w-1/2" style="min-width:40%">
        <div>

          <?php
          $motl_image_id = get_field('motl-image');
          if ($motl_image_id) {
            echo wp_get_attachment_image(
              $motl_image_id,
              "full",
              false,
              array(
                "class" => "p-2 mx-auto",
                "id" => "artwork-image"
              )
            );
            echo wp_get_attachment_image(
              $motl_image_id,
              "full",
              false,
              array(
                "class" => "p-2 mx-auto",
                "id" => "artwork-image"
              )
            );
          } ?>

          <!-- TODO - more images -->
        </div>
      </div>

      <div id="right-content" class="mt-4 w-full">
        <div class="sticky top-1/3 mb-8 mt-4">
          <div id="title" class="top-0 flex justify-between z-50 bg-white py-2 opacity-95 border-2 rounded shadow-md">
            <div class="mx-4 my-auto">
              <h1 class="font-medium mb-1 text-4xl"><?php echo the_title(); ?></h1>
              <p class="text-gray-700 mb-1 text-xl">
                <?php if (get_field("motl-date-created")) {
                  the_field("motl-date-created"); 
                  echo ",";
                } ?>
                <?php if (get_field("motl-medium")) {
                  the_field("motl-medium"); 
                  echo ",";
                } ?>
                <?php if (get_field("motl-dimensions")) {
                  the_field("motl-dimensions");
                } ?>
              </p>
            </div>
          </div>
          <?php $motl_quote_var = "motl-tag-line";
          if (get_field($motl_quote_var)) : ?>
            <blockquote class="my-6 font-semibold text-2xl text-gray-600 not-italic">
              <?php the_field($motl_quote_var); ?>
            </blockquote>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>

  <hr class="my-8">
</div>