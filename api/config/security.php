<?php
class Security {
    public function sanitizeInput($data) {
        return htmlspecialchars(strip_tags($data));
    }

    public function validateInput($data, $rules) {
        $errors = [];
        foreach($rules as $field => $rule) {
            if(!isset($data[$field])) {
                $errors[$field] = "Field required";
            }
        }
        return $errors;
    }
}
