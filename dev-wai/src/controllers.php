<?php
    include '../business.php';
    function post_image(&$model){
        if(isset($_FILES['image']) && isset($_POST['title']) && isset($_POST['author'])){
            $model['pictureAdd'] = true;
            return postImage($_FILES['image'], $_POST['title'], $_POST['author'], $_POST['watermark']);
        }
        $model['pictureAdd'] = false;
        return 'post_image_view';
    }
    function index(&$model){
        return 'index_view';
    }
    function contact(&$model){
        return 'contact_view';
    }
    function gallery(&$model){
        uploadImage($_FILES['image'], $model);
        pagination($model);
        return 'gallery_view';
    }
   function registration(&$model){
        userRegistration($model);
        return 'registration_view';
   }
   function login(&$model){
    loginUser($model);
    return loginUser($model);;
   }

function logout(&$model){
    logoutUser($model);
    return 'index_view';
   }