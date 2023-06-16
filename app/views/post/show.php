<?php
$title = $post->title;
include(__DIR__ . '/../layout/head.php');
?>

<h1 class="font-bold text-xl mt-6"><?php echo $post->id . ') ' . $post->title ?></h1>

<p class="mt-2"><?php echo $post->description ?></p>

<?php
include(__DIR__ . '/../layout/footer.php');
?>