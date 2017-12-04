<?php
/**
 * Created by PhpStorm.
 * User: pembrock
 * Date: 03.12.17
 * Time: 21:22
 */

namespace Form;

use InterfaceFormValidation;

class FormValidator implements InterfaceFormValidation
{
    const NOT_VALID_EMAIL = "Неверный E-mail";
    const FIELDS_VALUE_ERROR = "Заполнены не все поля";

    /**
     * @param array $values
     * @return bool
     */
    public function isEmpty($values)
    {
        foreach ($values as $value) {
            if (empty($value)) {
                return true;
            }
        }

        return false;
    }

    /**
     * @param $email
     * @return int
     */
    public function validEmail($email)
    {
        return preg_match('/^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*))@(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,})$/', $email);
    }

    /**
     * @param array $error
     * @return bool
     */
    public function validate($error)
    {
        if (count($error) > 0) {
            return false;
        }
    }

}