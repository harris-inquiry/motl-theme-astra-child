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