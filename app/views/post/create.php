<?php
$title = "Create Post";
include(__DIR__ . '/../layout/head.php');
?>

<form action="./create" method="post" class="flex flex-col max-w-xl m-auto mt-6">

    <h1 class="mb-4 font-bold text-lg">Create a post</h1>

    <input class="border-solid border border-purple-700 outline-none mt-2 p-2 rounded" type="text" name="title" >

    <textarea class="border-solid border border-purple-700 outline-none mt-2 p-2 rounded" type="text" name="description" rows="6"></textarea>

    <button class="w-min mt-6 ml-auto bg-purple-700 text-white text-md p-2 rounded-md" type="submit">Create</button>

    <span class="mt-6"><?php if(isset($_SESSION['store_status'])) echo $_SESSION['store_status']; ?></span>

</form>

<?php
include(__DIR__ . '/../layout/footer.php');

unset($_SESSION['store_status']);
?>