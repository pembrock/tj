<?php

use Form\Form;

if (isset($_POST['form'])) {
    $request = $_POST['form'];

    $form = new Form($request);

    if (!$form->send()) {
        echo json_encode($form->getError());
    }
}