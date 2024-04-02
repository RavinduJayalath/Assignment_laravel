<?php

namespace Domain\Facades;

use Domain\Services\StudentService;
use Illuminate\Support\Facades\Facade;

class StudentFacade extends Facade{

    protected static function getFacadeAccessor()
    {
        return StudentService::class;
        return 'student';
    }

}
