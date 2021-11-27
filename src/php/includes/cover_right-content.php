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