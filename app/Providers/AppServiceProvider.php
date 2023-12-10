<?php

namespace App\Providers;

use App\Teacher;
use App\Student;
use App\presenceT;
use App\presenceS;
use App\Classroom;
use App\Learning;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer('*', function ($view) {
            $teacherCount = Teacher::count(); // Ganti dengan logika yang sesuai untuk menghitung jumlah guru
            $view->with('teacherCount', $teacherCount);
            $studentCount = Student::count(); // Ganti dengan logika yang sesuai untuk menghitung jumlah guru
            $view->with('studentCount', $studentCount);
            $presensi_tCount = PresenceT::count();
            $view->with('presensi_tCount', $presensi_tCount);
            $presensi_sCount = PresenceS::count();
            $view->with('presensi_sCount', $presensi_sCount);
            $classroomCount = Classroom::count();
            $view->with('classroomCount', $classroomCount);
            $learningCount = Learning::count();
            $view->with('learningCount', $learningCount);
        });
    }
}
