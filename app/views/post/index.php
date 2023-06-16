<?php $title = "All Posts"; include(__DIR__.'/../layout/head.php'); ?>

 <div class="grid grid-cols-1 gap-4 max-w-4xl  m-auto">

 <div class=" mt-14 flex justify-end">
  <a href="/posts/create" class="text-white bg-red-500 px-4 py-2 rounded-md cursor-pointer">Add New Post</a>
 </div>

 <?php foreach ($posts as $post) { ?>
    <div class=" m-auto p-4 border-solid border-2 border-indigo-600 w-full">
      <div class="flex justify-between items-center">
      <h1 class="font-bold text-xl"><?php echo $post->id.') '.$post->title ?></h1>
      <div class="flex justify-end">
        <a href="/posts/edit/<?php echo $post->id ?>" class="mr-2 text-green-600 font-bold">Update</a>
        <a href="/posts/delete/<?php echo $post->id ?>" class="text-red-600 font-bold">Delete</a>
      </div>
      </div>
      <p class="mt-4"><?php echo $post->description ?></p>
    </div>
 <?php } ?>

 </div>

 <?php include(__DIR__.'/../layout/footer.php'); ?>
