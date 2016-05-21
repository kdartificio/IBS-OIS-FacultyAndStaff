<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Employees extends Model {

	protected $fillable = ['employeeNum', 'type', 'firstName', 'middleName', 'lastName', 'sex', 'birthdate', 'position', 'division', 'contactNum', 'emailAddress', 'currentAddress', 'permanentAddress', 'degree', 'specialization', 'schoolGraduated', 'yearGraduated', 'tenured'];
	protected $table = 'employees';
}
