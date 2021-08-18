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
    <div id="title" class="sticky top-0 flex justify-between z-50 bg-white py-2 opacity-95 border-2 rounded">
      <div class="ml-4 italic">
        <h1 class="font-medium mb-1 text-4xl"><?php echo the_title(); ?></h1>
        <p class="text-gray-400 mb-1"><?php the_field("motl-medium"); ?></p>
      </div>
      <a class="p-2" href="/About">
        <img height="64" width="64" class="h-16 w-16 rounded-full object-cover" src="<?php echo $motl_cover_path_stephen_photo; ?>" alt="Stephen Daniel">
      </a>
    </div>

    <div class="sm:flex my-2 sm:space-x-2">

      <div id="left-content" class="flex-shrink-0 sm:max-w-1/2">
        <div class="sticky top-24">

          <?php
          $motl_image_id = get_field('motl-image');
          if ($motl_image_id) {
            echo wp_get_attachment_image(
              $motl_image_id,
              "full",
              false,
              array("class" => "p-2 mx-auto",
                    "id" => "artwork-image")
            );
          } ?>
        </div>
      </div>

      <div id="right-content" class="mt-4">
        <div class="mb-8 mt-4">
          <?php $motl_quote_var = "motl-tag-line";
          if (get_field($motl_quote_var)) : ?>
            <blockquote class="mb-6 font-semibold text-2xl text-gray-600">
              <?php the_field($motl_quote_var); ?>
            </blockquote>
          <?php endif; ?>

          <div id="description">
            <?php if (get_field("motl-description")) {
              the_field("motl-description");
            } ?>
          </div>
        </div>

        <div id="contacts" class="my-4 mb-8">
          <div class="p-2 flex space-x-2">
            <button class="text-white bg-yellow-300 font-bold rounded-md p-2">Inquire</button>
            <a href="#main">
              <button class="text-white bg-gray-800 font-bold rounded-md p-2">Learn More</button>
            </a>
          </div>
        </div>

        <table>
          <tr>
            <td>Title</td>
            <td><?php echo the_title(); ?></td>
          </tr>
          <tr>
            <td>Artist</td>
            <td>
              <div class="flex items-center">
                <a href="/About">
                  <img height="64" width="64" class="h-12 w-12 rounded-full object-cover" src="<?php echo $motl_cover_path_stephen_photo; ?>" alt="Stephen Daniel">
                </a>
                <a href="/About" class="text-blue-500 font-semibold italic">
                  <div class="ml-2">Stephen Daniel</div>
                </a>
              </div>
            </td>
          </tr>
          <?php conditional_get_table_row("Medium", "motl-medium"); ?>
          <?php conditional_get_table_row("Dimensions", "motl-dimensions"); ?>
          <?php conditional_get_table_row("Date Created", "motl-date-created"); ?>
          <?php conditional_get_table_row("Subject", "motl-subject"); ?>
          <?php conditional_get_table_row("Inspiration", "motl-inspiration"); ?>
          <?php conditional_get_table_row("Theme", "motl-theme"); ?>
        </table>
      </div>
    </div>
  </div>

  <hr class="my-8">
</div>