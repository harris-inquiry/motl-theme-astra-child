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
  $motl_image_classes = "p-2 mx-auto";
  $motl_image_id = get_field('motl-image');
  if ($motl_image_id) {
    echo wp_get_attachment_image(
      $motl_image_id,
      "full",
      false,
      array(
        "class" => $motl_image_classes,
        "id" => "motl-image1"
      )
    );
  } ?>

  <?php
  $motl_image2_id = get_field('motl-image2');
  if ($motl_image2_id) {
    echo wp_get_attachment_image(
      $motl_image2_id,
      "full",
      false,
      array(
        "class" => $motl_image_classes,
        "id" => "motl-image2"
      )
    );
  }
  ?>

  <?php
  $motl_image3_id = get_field('motl-image3');
  if ($motl_image3_id) {
    echo wp_get_attachment_image(
      $motl_image3_id,
      "full",
      false,
      array(
        "class" => $motl_image_classes,
        "id" => "motl-image3"
      )
    );
  }
  ?>
</div>
      </div>

      <div id="right-content" class="mt-4 w-full">
        <div class="sticky top-1/3 mb-8 mt-4" style="margin-left:1rem;">

  <h1 class="font-medium mb-1 text-4xl"><?php echo the_title(); ?></h1>
  <p class="text-gray-700 mb-1 text-xl">
    <?php if (get_field("motl-date-created")) : ?>
      <span class="inline-block">
        <?php the_field("motl-date-created"); ?>,
      </span>
    <?php endif; ?>

    <?php if (get_field("motl-medium")) : ?>
      <span class="inline-block">
        <?php the_field("motl-medium"); ?>,
      </span>
    <?php endif; ?>

    <?php if (get_field("motl-dimensions")) : ?>
      <span class="inline-block">
        <?php the_field("motl-dimensions"); ?>
      </span>
    <?php endif; ?>
  </p>

  <?php $motl_quote_var = "motl-tag-line";
  if (get_field($motl_quote_var)) : ?>
    <p class="my-6 text-xl text-gray-600">
      <?php the_field($motl_quote_var); ?>
    </p>
  <?php endif; ?>
</div>
      </div>
    </div>
  </div>

  <hr class="my-8">
</div>