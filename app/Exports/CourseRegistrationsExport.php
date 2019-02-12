<?php

namespace App\Exports;

use App\CourseRegistration;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithHeadings;
use App\Course;

class CourseRegistrationsExport implements FromQuery, WithHeadings
{
	use Exportable;

	public function __construct($course)
    {
        $this->course = $course;
    }
  
    public function query()
    {
        return CourseRegistration::query()->where('course_id', $this->course);
    }

    public function headings(): array
    {
        return [
            'id',
            'course_id',
            'first_name',
            'last_name',
            'email',
            'phone',
            'trans_ref',
            'agree',
            'city',
            'country',
            'Created at',
            'Updated at'
        ];
    }
}
