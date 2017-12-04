<?php
/**
 * Created by PhpStorm.
 * User: k.pasikuta
 * Date: 04.12.2017
 * Time: 9:46
 */

use Form\Form;

if (isset($_POST['form'])) {
    $request = $_POST['form'];

    $form = new Form($request);

    if (!$form->send()) {
        echo json_encode($form->getError());
    }
}