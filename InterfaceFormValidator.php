<?php

/**
 * Created by PhpStorm.
 * User: pembrock
 * Date: 03.12.17
 * Time: 20:00
 */
interface InterfaceFormValidation
{
    /**
     * @param array $error
     * @return mixed
     */
    public function validate($error);
}