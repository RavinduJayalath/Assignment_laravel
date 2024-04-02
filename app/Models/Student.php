<?php

namespace App\Models;

use Carbon\Laravel\ServiceProvider;
use domain\Services\StudentService;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'stid',
        'name',
        'image',
        'age',
        'status',
    ];
}
class StudentServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind('student', function () {
            return new StudentService();
        });
    }
}




