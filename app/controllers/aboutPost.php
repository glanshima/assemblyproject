<?php
include(ROOT_PATH . "/app/database/db.php");
include(ROOT_PATH . "/app/helpers/middleware.php");
include(ROOT_PATH . "/app/helpers/validateAbout.php");


$table = 'about';

$topics = selectAll('topics');
$post = selectAll($table);


$errors = array();
$id = "";
$body = "";

if (isset($_GET['id'])) {
    $post = selectOne($table, ['id' => $_GET['id']]);

    $id = $post['id'];
    $body = $post['body'];
}

if (isset($_GET['del_id'])) {
    adminOnly();
    $count = delete($table, $_GET['del_id']);
    $_SESSION['message'] = "About section deleted successfully";
    $_SESSION['type'] = "success";
    header("location: " . BASE_URL . '/admin/aboutPost/index.php');
    exit();
}

if (isset($_POST['add-about'])) {
    adminOnly();
    $errors = validateAbout($_POST);


    if (!empty($_FILES['image']['name'])) {
        $image_name = time() . '_' . $_FILES['image']['name'];
        $destination = ROOT_PATH . "/assets/images/" . $image_name;

        $result = move_uploaded_file($_FILES['image']['tmp_name'], $destination);
        if ($result) {
            $_POST['image'] = $image_name;
        } else {
            array_push($errors, "Image upload failed");
        }
    } else {
        array_push($errors, "Please select post image");
    }

    if (count($errors) == 0) {
        unset($_POST['add-about']);
        $_POST['body'] = htmlentities($_POST['body']);
        $post = create($table, $_POST);
        $_SESSION['message'] = 'About updated successfully';
        $_SESSION['type'] = 'success';
        header("location: " . BASE_URL . '/admin/aboutPost/index.php');
        exit();
    } else {
        $id = $_POST['id'];
        $body = $_POST['body'];
    }
}

if (isset($_POST['update-about'])) {
    adminOnly();
    $errors = validateAbout($_POST);

    if (!empty($_FILES['image']['name'])) {
        $image_name = time() . '_' . $_FILES['image']['name'];
        $destination = ROOT_PATH . "/assets/images/" . $image_name;

        $result = move_uploaded_file($_FILES['image']['tmp_name'], $destination);
        if ($result) {
            $_POST['image'] = $image_name;
        } else {
            array_push($errors, "Image upload failed");
        }
    } else {
        array_push($errors, "Please select post image");
    }

    if (count($errors) == 0) {
        $id = $_POST['id'];
        unset($_POST['update-about'], $_POST['id']);
        $_POST['body'] = htmlentities($_POST['body']);

        $post = update($table, $id, $_POST);

        $_SESSION['message'] = 'About updated successfully';
        $_SESSION['type'] = 'success';
        header("location: " . BASE_URL . '/admin/aboutPost/index.php');
        exit();
    } else {
        $body = $_POST['body'];
    }
}
