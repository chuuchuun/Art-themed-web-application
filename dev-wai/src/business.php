<?php
    require '../../vendor/autoload.php';
    $_SESSION['page'] = 1;
    $page = $_SESSION['page'];
    function get_db()
    {
        $mongo = new MongoDB\Client(
            "mongodb://localhost:27017/wai",
            [
                'username' => 'wai_web',
                'password' => 'w@i_w3b',
            ]);
        $db = $mongo->wai;
        return $db;
    }

function pagination(&$model){
        $db = get_db();
        $pageSize = 4;
        global $page;
        $opts = [
            'skip' => ($page-1)* $pageSize,
            'limit' => $pageSize,
        ];
        $imgs = $db->images->find([], $opts);
        //$imgs = $db->images->deleteMany([],$opts);
        $model['images'] = $imgs;
    }
function saveImage(&$model, &$random){
    $db = get_db();
    $name = $random.$_FILES['image']['name'];
	$type = $_FILES['image']['type'];
    $title = $_POST["title"];
    $author = $_POST["author"];
    $img = [
        'name' => $name,
        'type' => $type,
        'title' => $title,
        'author' => $author,
    ];
    $db->images->insertOne($img);
    pagination($model);
    }

function makeWatermark(){ 
    if($_FILES["image"]["type"] == "image/jpeg" || $_FILES["image"]["type"] == "image/jpg"){
        $image = imagecreatefromjpeg("./images/". $_FILES['image']['name']);
        $textcolor = imagecolorallocate($image,255,255,255);
        $font = getcwd() . '/fonts/OpenSans-Bold.ttf';
        $watermark = $_POST["watermark"];
        imagettftext($image, 60, 0 , 200, 200 ,$textcolor, $font,$watermark);
        $path = "./images/W_".$_FILES['image']['name'];
        imagejpeg($image, $path);
        imagedestroy($image);
    }
    else{
        $image = imagecreatefrompng("./images/". $_FILES['image']['name']);
        $textcolor = imagecolorallocate($image,255,255,255);
        $font = getcwd() . '/fonts/OpenSans-Bold.ttf';
        $watermark = $_POST["watermark"];
        imagettftext($image, 30, 0 , imagesx($image)-125, imagesy($image)-20 ,$textcolor, $font,$watermark);
        $path = "./images/W_".$_FILES['image']['name'];
        imagepng($image, $path);
        imagedestroy($image);
    }
}

function makeSmall(){
    if($_FILES["image"]["type"] == "image/jpeg" || $_FILES["image"]["type"] == "image/jpg"){
        $copy = imagecreatefromjpeg("./images/". $_FILES['image']['name']);
        $width  = imagesx($copy);
        $height = imagesy($copy);
        $width_mini = 200;
        $height_mini = 125;
        $img_mini = imagecreatetruecolor($width_mini, $height_mini);
        imagecopyresampled($img_mini, $copy, 0, 0, 0, 0, $width_mini , $height_mini, $width  , $height);
        imagejpeg($img_mini, "./images/M_". $_FILES['image']['name'], 80);
        imagedestroy($copy);
        imagedestroy($img_mini);
    }
    else{
        $copy = imagecreatefrompng("./images/". $_FILES['image']['name']);
        $width  = imagesx($copy);
        $height = imagesy($copy);
        $width_mini = 200;
        $height_mini = 125;
        $img_mini = imagecreatetruecolor($width_mini, $height_mini);
        imagecopyresampled($img_mini, $copy, 0, 0, 0, 0, $width_mini , $height_mini, $width  , $height);
        imagejpeg($img_mini, "./images/M_". $_FILES['image']['name'], 80);
        imagedestroy($copy);
        imagedestroy($img_mini);
    }
}

function uploadImage($img, &$model){
    $image= finfo_open(FILEINFO_MIME_TYPE);
    $tmp_name = $_FILES['image']['tmp_name'];
    $imageType = finfo_file($image, $tmp_name);
    if(is_uploaded_file($tmp_name)){
        $type= $_FILES['image']['type'];
        $size = $_FILES['image']['size'];
        $name = $_FILES['image']['name'];
        if($type == "image/jpeg" || $type == "image/png"|| $type == "image/jpg" )
        {
            if($size <= 1000000){
                move_uploaded_file($tmp_name, './images/' . $name);
                makeWatermark();
                makeSmall();
                global $page;
                $_SESSION['page'] = 1;
                $page = $_SESSION['page'];
                saveImage($model);
            }
            else{
                $model['error'] = 'File is too big. Please choose file less than 1MB.';
            }
        }
        else{
            if($size > 1000000){
                $model['error'] = 'Not supported extension. Please choose jpg/jpeg or png file. File is too big. Please choose file less than 1MB.';
            }
            else{
                $model['error'] = 'Not supported extension. Please choose jpg/jpeg or png file.';
            }
        }
        }
    }
error_reporting(E_ERROR | E_PARSE);
function userRegistration(&$model){
    $errors='';
    $user = array
    (
        '_id' => null,
        'name' => null,
        'surname' => null,
        'email' => null,
        'login' => null,
        'password' => null,

        (
        array("role" => "readWrite", "db" => 'user')
        )

    );
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if(!empty($_POST['name']) && !empty($_POST['surname']) && !empty($_POST['login']) && $_POST['login'] != find_user_by_login($_POST['login'])['login'] && !empty($_POST['email']) && $_POST['password'] === $_POST['password2']) {
            $user =
                [
                    'name' => $_POST['name'],
                    'surname' => $_POST['surname'],
                    'email' => $_POST['email'],
                    'login' => $_POST['login'],
                    'password' => password_hash($_POST['password'],PASSWORD_DEFAULT),
                    (
                    array("role" => "readWrite", "db" => 'user')
                    )
                ];
            if (save_user($user,$_POST['login'])){
                return 'login_view';
            }
        }
        else{
            if ($_POST['password'] != $_POST['password2']) {
                $errors = 'Different passwords.';
            }
            if ($_POST['login'] == find_user_by_login($_POST['login'])['login']) {
                $errors = 'User already exists';
            }
        }
    } 
    else{
        if (!empty($_GET['id'])) {
            $user = find_user_by_id($_GET['id']); 
        }
    }
    $model['errors'] = $errors;
    $model['user'] = $user;
}
function save_user($user,$login){
    $db = get_db();
    if (empty($_POST['id'])) {
        $db->users->insertOne($user);

    } else {
        $id = $_POST['id'];
        $db->users->replaceOne(['_id' => new ObjectID($id)], $user);
    }
    $user = $db->users->findOne(array('login' => $login));
    return true;
}
function loginUser(&$model){
    if ($_SERVER['REQUEST_METHOD'] === 'POST')
    {   
        $db = get_db();
        $query = [
            'login' => $_POST['login'],
            'password' => $_POST['password'],
        ];
        $user = (find_user_by_login($_POST['login']));
        if ($query['login'] != $user['login']){
            $message= "User does not exist.";
            $model['massage'] = $message;
        }elseif (!password_verify($_POST['password'], $user['password'])){
            $message= "Incorrect password.";
            $model['massage'] = $message;
        }else {
            session_regenerate_id();
            $_SESSION['user_id'] = $user['_id'];
            return 'index_view';
        }
    }
    return 'login_view';
}
function find_user_by_login($login){
    $db = get_db();
    return ($db->users->findOne(array('login' =>$login)));
}
function find_user_by_id($id){
    $db = get_db();
    return $db->users->findOne(['_id' => new ObjectID($id)]);
    }

function logoutUser(&$model){
        if (isset($_SESSION['user_id'])) {
            session_destroy();
            unset($_SESSION['user_id']);
        }
        return 'index_view';
    }