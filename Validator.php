<?php
/**
 * Created by PhpStorm.
 * User: pembrock
 * Date: 03.12.17
 * Time: 21:22
 */

namespace Form;

use InterfaceFormValidation;

class Validator implements InterfaceFormValidation
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

    public function validEmail($email)
    {
        return preg_match("/[-0-9a-zA-Z.+_]+@[-0-9a-zA-Z.+_]+.[a-zA-Z]{2,4}/", $email);
    }

    public function validate($error)
    {
        if (count($error) > 0) {
            return false;
        }
    }

}