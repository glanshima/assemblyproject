<?php

function validatePost($img)
{
    $errors = array();
    if (empty($img['description'])) {
        array_push($errors, 'Desciption is required');
    }

    if (empty($img['alttext'])) {
        array_push($errors, 'Alt Text is required');
    }

    $existingEvent = selectOne('events', ['filename' => $img['file']]);
    if ($existingEvent) {
        if (isset($img['update-event']) && $existingEvent['id'] != $img['id']) {
            array_push($errors, 'Event with that Filename already exists');
        }
        if (isset($img['upload-image'])) {
            array_push($errors, 'Event with that filename already exists');
        }
    }

    return $errors;
}