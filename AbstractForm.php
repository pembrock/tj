<?php

namespace Form;

use InterfaceFormValidation;

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

    /**
     * Отправка сообщения
     * @return mixed
     */
    abstract public function send();

    /**
     * @param InterfaceFormValidation $validator
     * @return mixed
     */
    abstract public function validation(InterfaceFormValidation $validator);

    /**
     * Получение шаблона для отправки
     * @return mixed
     */
    abstract public function getTemplate();

    /**
     * Получение списка ошибок
     * @return mixed
     */
    abstract public function getError();
}