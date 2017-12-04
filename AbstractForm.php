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
    /** @var  string $to */
    public $to;

    /** @var  string $from */
    public $from;

    /** @var  string $subject */
    public $subject;

    /** @var  string $message */
    public $message;

    /** @var  string $template */
    public $template;

    /** @var  array $error */
    public $error;

    abstract public function send();

    /** @param object Validator $validator*/
    abstract public function validation(Validator $validator);

    abstract public function getTemplate();
}