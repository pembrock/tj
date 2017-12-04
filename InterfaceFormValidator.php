<?php

interface InterfaceFormValidation
{
    /**
     * @param array $error
     * @return mixed
     */
    public function validate($error);
}