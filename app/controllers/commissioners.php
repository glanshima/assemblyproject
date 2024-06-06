<?php
include ROOT_PATH . "/app/database/db.php";
include ROOT_PATH . "/app/helpers/middleware.php";
include ROOT_PATH . "/app/helpers/validateCommissioner.php";

$table = 'commissioners';

$topics = selectAll('topics');
$commissioners = selectAll($table);

$errors = array();
$id = "";
$title = "";
$body = "";
/* $file = ""; */
$topic_id = "";
$published = "";
$rank = "";
$appointed = "";
$twitter = "";
$instagram = "";
$linkedin = "";
$facebook = "";
$mail = "";

if (isset($_GET['id'])) {
    $commissioner = selectOne($table, ['id' => $_GET['id']]);

    $id = $commissioner['id'];
    $title = $commissioner['title'];
    $body = $commissioner['body'];
    $topic_id = $commissioner['topic_id'];
    $published = $commissioner['published'];
    /* added */
    $twitter = $commissioner["twitter"];
    $instagram = $commissioner["instagram"];
    $linkedin = $commissioner["linkedin"];
    $facebook = $commissioner["facebook"];
    $mail = $commissioner["mail"];
    $rank = $commissioner["rank"];
    $appointed = $commissioner["appointed"];
}

if (isset($_GET['delete_id'])) {
    adminOnly();
    $count = delete($table, $_GET['delete_id']);
    $_SESSION['message'] = "Commissioner deleted successfully";
    $_SESSION['type'] = "success";
    header("location: " . BASE_URL . '/admin/commissioners/index.php');
    exit();
}

if (isset($_GET['published']) && isset($_GET['p_id'])) {
    adminOnly();
    $published = $_GET['published'];
    $p_id = $_GET['p_id'];
    $count = update($table, $p_id, ['published' => $published]);
    $_SESSION['message'] = 'Post publish state changed';
    $_SESSION['type'] = 'success';
    header("location: " . BASE_URL . '/admin/commissioners/index.php');
    exit();
}

if (isset($_POST['add-commissioner'])) {

    adminOnly();
    $errors = validatePost($_POST);

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
        array_push($errors, "Please select commissioner image");
    }

    if (count($errors) == 0) {
        unset($_POST['add-commissioner']);
        $_POST['user_id'] = $_SESSION['id'];
        $_POST['published'] = isset($_POST['published']) ? 1 : 0;
        $_POST['body'] = htmlentities($_POST['body']);

        /* code added */

        $twitter = $_POST["twitter"];
        $instagram = $_POST["instagram"];
        $linkedin = $_POST["linkedin"];
        $facebook = $_POST["facebook"];
        $mail = $_POST["mail"];
        $rank = $_POST["rank"];
        $appointed = $_POST["appointed"];
        /*  code added end */

        $commissioner_id = create($table, $_POST);
        $_SESSION['message'] = 'Commissioner created successfully';
        $_SESSION['type'] = 'success';
        header("location: " . BASE_URL . '/admin/commissioners/index.php');
        exit();
    } else {
        $title = $_POST['title'];
        $body = $_POST['body'];
        /*  $file = $_POST['file']; */
        $twitter = $_POST["twitter"];
        $instagram = $_POST["instagram"];
        $linkedin = $_POST["linkedin"];
        $mail = $_POST["mail"];
        $facebook = $_POST["facebook"];
        $topic_id = $_POST['topic_id'];
        $published = isset($_POST['published']) ? 1 : 0;
    }
}

if (isset($_POST['update-commissioner'])) {
    adminOnly();
    $errors = validatePost($_POST);

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
        array_push($errors, "Please select commissioner image");
    }

    if (count($errors) == 0) {
        $id = $_POST['id'];
        unset($_POST['update-commissioner'], $_POST['id']);
        $_POST['user_id'] = $_SESSION['id'];
        $_POST['published'] = isset($_POST['published']) ? 1 : 0;
        $_POST['body'] = htmlentities($_POST['body']);

        $commissioner_id = update($table, $id, $_POST);
        $_SESSION['message'] = 'Commissioner updated successfully';
        $_SESSION['type'] = 'success';
        header("location: " . BASE_URL . '/admin/commissioners/index.php');
        exit();
    } else {
        $title = $_POST['title'];
        $body = $_POST['body'];
        $topic_id = $_POST['topic_id'];
        $published = isset($_POST['published']) ? 1 : 0;
    }
}
