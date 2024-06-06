<?php

function validateAbout($post)
{
    $errors = array();
    /*if (empty($post['title'])) {
        array_push($errors, 'Title is required');
    }*/

    if (empty($post['body'])) {
        array_push($errors, 'Body is required');
    }

    /*if (empty($post['topic_id'])) {
        array_push($errors, 'Please select a topic');
    }*/

  /*  $existingAbout = selectOne('posts', ['title' => $post['title']]);
    if ($existingAbout) {
        if (isset($post['update-about']) && $existingAbout['id'] != $post['id']) {
            array_push($errors, 'Post with that title already exists');
        }
        if (isset($post['add-about'])) {
            array_push($errors, 'Post with that title already exists');
        }
    }*/

    return $errors;
}
