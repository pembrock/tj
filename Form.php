<?php
/**
 * Created by PhpStorm.
 * User: pembrock
 * Date: 03.12.17
 * Time: 21:19
 */

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
        $this->template = '<p>%message%</p>';
    }

    public function send()
    {
        $validator = new Validator();
        if ($this->validation($validator)) {
            mail($this->to, $this->subject, $this->message);
            return true;
        } else {
            return false;
        }
    }

    public function validation(Validator $validator)
    {
        if (!$validator->validEmail($this->to)) {
            $this->error[] = Validator::NOT_VALID_EMAIL;
        }

        if ($validator->isEmpty(array($this->from, $this->to, $this->subject, $this->getTemplate()))) {
            $this->error[] = Validator::FIELDS_VALUE_ERROR;
        }

        if (!$validator->validate($this->error)) {
            return false;
        }
    }

    public function getTemplate()
    {
        return strtr($this->template, array('%message%' => $this->message));
    }

    public function getError() {
        return $this->error;
    }

}