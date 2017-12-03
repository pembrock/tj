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
    /**
     * @param string $value
     * @return bool
     */
    public function isEmpty($value)
    {
        return empty($value);
    }

    public function validEmail($email)
    {
        return preg_match("/[-0-9a-zA-Z.+_]+@[-0-9a-zA-Z.+_]+.[a-zA-Z]{2,4}/", $email);
    }

    public function validate()
    {
        // TODO: Implement validate() method.
    }

}