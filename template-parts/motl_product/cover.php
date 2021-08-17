<?php
/**
 * Product cover for MOTL art pages
 * @since 1.0.0
 */

$motl_cover_path_stephen_photo = get_stylesheet_directory_uri() . "/assets/images/stephen.jpg";

function conditional_get_table_row( $label, $field_name ) {
  if( get_field( $field_name ) ) { ?>
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
    <div id="title" class="sticky top-0 flex justify-between z-50 bg-white py-2 opacity-95">
      <div class="ml-4">
        <h1 class="font-medium mb-1 text-4xl"><?php echo the_title(); ?></h1>
        <p class="text-gray-400 mb-1"><?php the_field("motl-medium");?></p>
      </div>
      <a class="p-2" href="/About">
        <img id="artist-icon" class="h-16 w-16 rounded-full object-cover" src="<?php echo $motl_cover_path_stephen_photo; ?>" alt="Stephen Daniel">
      </a>
    </div>

    <div class="sm:flex my-2 sm:space-x-2">

      <div id="left-content" class="max-w-lg sm:w-1/2 flex-shrink-0">
        <div class="sticky top-24">

          <?php 
          $image = get_field('motl-image');
          if( $image ){
              // Image variables.
              $url = $image['url'];
              $alt = $image['alt'];
          }
          ?>
          <img class="w-full p-2" src="<?php echo esc_url( $url );?>" alt="<?php echo esc_attr($alt); ?>">

          <div class="p-2">
            <button class="text-white bg-yellow-300 font-bold rounded-md p-2">Contact Me</button>
          </div>
        </div>
      </div>

      <div id="right-content" class="mt-4">

        <?php if( get_field("motl-description") ){
          the_field("motl-description");
        } ?>

        <table>
          <tr>
            <td>Title</td>
            <td><?php echo the_title(); ?></td>
          </tr>
          <tr>
            <td>Artist</td>
            <td class="flex items-center">
              <a href="/About">
                <img id="artist-icon" class="h-12 w-12 rounded-full object-cover" src="<?php echo $motl_cover_path_stephen_photo; ?>" alt="Stephen Daniel">
              </a>
              <a href="/About" class="text-blue-500 font-semibold italic">
                <div class="ml-2">Stephen Daniel</div>
              </a>
            </td>
          </tr>
          <?php conditional_get_table_row("Medium", "motl-medium"); ?>
          <?php conditional_get_table_row("Dimensions", "motl-dimensions"); ?>
          <?php conditional_get_table_row("Date Created", "motl-date-created"); ?>
          <?php conditional_get_table_row("Inpsiration", "motl-inspiration"); ?>
          <?php conditional_get_table_row("Theme", "motl-theme"); ?>
        </table>
      </div>
    </div>
  </div>

  <hr class="my-8">
</div>