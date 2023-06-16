<?php

require __DIR__.'/router.php';
require __DIR__.'/../app/controllers/PostController.php';


get('/', function(){
   PostController::index();
});

get('/posts/create', function(){
  PostController::create();
});

post('/posts/create', function(){
  PostController::store();
});


get('/posts/post/$id', function($id){
  PostController::show($id);
});

get('/posts/edit/$id', function($id){
  PostController::edit($id);
});

post('/posts/update', function(){
  PostController::update();
});

get('/posts/delete/$id', function($id){
  PostController::destroy($id);
});


any('/404','');