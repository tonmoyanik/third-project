<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $student;

    public function newStudent()
    {
        $this->student          = new Student();
        $this->student->name    = 'Rafa';
        $this->student->email   = 'semicolon@gmail.com';
        $this->student->mobile  = '123456';
        $this->student->save();
    }

    public static function getAllStudent()
    {
        return [
            0=> [
                'id' => 1,
                'name' => 'Hasan',
                'email' => 'hsn@gmail.com',
                'mobile' => '01323445566',
                'image' => '',
            ],

             1=> [
                 'id' => 2,
                'name' => 'Imam',
                'email' => 'imam@gmail.com',
                'mobile' => '01623445566',
                'image' => '',
            ],

            2=> [
                'id' => 3,
                'name' => 'Arnob',
                'email' => 'arnob@gmail.com',
                'mobile' => '01923445566',
                'image' => '',
            ],
        ];
    }
}
