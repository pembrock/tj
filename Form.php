<?php

namespace Form;

class Form extends AbstractForm
{
    /**
     * Form constructor.
     * @param array $request
     */
    function __construct($request)
    {
        $this->from = $request['from'];
        $this->to = $request['to'];
        $this->subject = $request['subject'];
        $this->message = $request['message'];
        $this->error = [];
    }

    /**
     * @return bool
     */
    public function send()
    {
        $validator = new FormValidator();
        if ($this->validation($validator)) {
            mail($this->to, $this->subject, $this->getTemplate());
            return true;
        } else {
            return false;
        }
    }

    /**
     * @param FormValidator $validator
     * @return bool
     */
    public function validation(FormValidator $validator)
    {
        if (!$validator->validEmail($this->to)) {
            $this->error[] = FormValidator::NOT_VALID_EMAIL;
        }

        if (!$validator->isEmpty([$this->from, $this->to, $this->subject, $this->message])) {
            $this->error[] = FormValidator::FIELDS_VALUE_ERROR;
        }

        if (!$validator->validate($this->error)) {
            return false;
        }

        return true;
    }

    /**
     * @return string
     */
    public function getTemplate()
    {
        $this->template = '<p>%message%</p>';
        return strtr($this->template, array('%message%' => $this->message));
    }

    /**
     * @return array
     */
    public function getError() {
        return $this->error;
    }
}