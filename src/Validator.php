<?php

namespace HexletSlimExample;

class Validator implements ValidatorInterface
{
    public function validate(array $course):array
    {
        $errors = [];
        foreach ($course as $item) {
            if (empty($item['title'])) {
                $errors['title'] = "Can't be blank";
            }
            if ($item['paid'] == '') {
                $errors['paid'] = "Can't be blank";
            }
        }
        return $errors;
    }
}