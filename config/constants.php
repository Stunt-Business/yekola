<?php

/**
 * Profile type: student
 */
if (! defined('PTYPE_STUDENT')) {
    define('PTYPE_STUDENT', 'student');
}

/**
 * Profile type: teacher
 */
if (! defined('PTYPE_TEACHER')) {
    define('PTYPE_TEACHER', 'teacher');
}

/**
 * Profile type: administrator
 */
if (! defined('PTYPE_ADMINISTRATOR')) {
    define('PTYPE_ADMINISTRATOR', 'adminstrator');
}

return [
    /**
     * DO NOT ALTER THE KEYS WITHOUT PROPER AUTHORIZATION
     */
    'profile_types' => [
        'student' => PTYPE_STUDENT,
        'teacher' => PTYPE_TEACHER,
        'administrator' => PTYPE_ADMINISTRATOR,
    ],
];
