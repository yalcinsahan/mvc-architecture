<?php
$title = "Update Post";
include(__DIR__ . '/../layout/head.php');

$_SESSION['update_id'] = $post->id;
?>

<form action="../update" method="post" class="flex flex-col max-w-xl m-auto mt-6">

    <h1 class="mb-4 font-bold text-lg">Update the post</h1>

    <input class="border-solid border border-purple-700 outline-none mt-2 p-2 rounded" type="text" name="title" value="<?php echo $post->title ?>">

    <textarea class="border-solid border border-purple-700 outline-none mt-2 p-2 rounded" type="text" name="description" rows="6"><?php echo $post->description ?></textarea>

    <button class="w-min mt-6 ml-auto bg-purple-700 text-white text-md p-2 rounded-md" type="submit">Update</button>
</form>

<?php
include(__DIR__ . '/../layout/footer.php');
?>