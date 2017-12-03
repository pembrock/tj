<?php
/**
 * Created by PhpStorm.
 * User: pembrock
 * Date: 03.12.17
 * Time: 21:14
 */

namespace Form;


abstract class AbstractForm
{
    public $to;

    public $from;

    public $subject;

    public $message;

    public $error;

    abstract public function send();

    abstract public function validation(Validator $validator);
}