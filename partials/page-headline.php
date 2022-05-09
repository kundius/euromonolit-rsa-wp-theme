<?php
$title = get_the_title();
$title_size = 'normal';
if (strlen($title) > 50) {
  $title_size = 'medium';
}
if (strlen($title) > 100) {
  $title_size = 'small';
}
?>
<div class="page-headline<?php if ($args['is_product']): echo ' page-headline_product'; endif ?>">
  <div class="ui-container">
    <h1 class="page-headline__title <?php echo 'page-headline__title_' . $title_size ?>"><?php echo $title ?></h1>
  </div>
</div>
