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
        $this->from = $request['from'];
    }

    public function send()
    {
        mail($this->to, $this->subject, $this->message);
    }

    public function validation(Validator $validator)
    {
        if (!$validator->validate()) {
            return $this->error;
        }
    }

}