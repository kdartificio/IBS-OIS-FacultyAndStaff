<?php namespace App\Http\Controllers\FacultyAndStaff;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Input;
use DB;
use Session;
use Auth;

use App\Employee;
use App\Degree;
use App\Division;
use App\FacultyPosition;
use App\StaffPosition;
use App\Specialization;
use App\EditRequest;
use App\ApprovedRequest;
use App\DeclinedRequest;
use App\EditNotice;
use App\UploadedRecords;

class FacultyController extends Controller {

	public function index(){
		if(Session::has('type')){
			if(Session::get('type') == 1){
				$enum = Session::get('userEmp')['employeeNum'];
				$approvedCount = ApprovedRequest::where('employeeNum', '=', $enum)->get(); 
				$declinedCount = DeclinedRequest::where('employeeNum', '=', $enum)->get(); 
				$editNoticeCount = EditNotice::where('employeeNum', '=', $enum)->get();

				return view('facultyandstaff.faculty.faculty-home', compact('approvedCount', 'declinedCount', 'editNoticeCount'));
			}
		}
		Session::put('error', 'You must log in first!');
		return redirect('login');
	}

	public function viewProfile(){
		if(Session::has('type')){
			if(Session::get('type') == 1){
				$enum = Session::get('userEmp')['employeeNum'];
				$approvedCount = ApprovedRequest::where('employeeNum', '=', $enum)->get(); 
				$declinedCount = DeclinedRequest::where('employeeNum', '=', $enum)->get();
				$editNoticeCount = EditNotice::where('employeeNum', '=', $enum)->get(); 
				$user = Employee::where('employeeNum', '=', $enum)->get();
				$fileRecords = UploadedRecords::where('employeeNum', '=', $enum)->get();

				return view('facultyandstaff.faculty.faculty-profile', compact('approvedCount', 'declinedCount', 'editNoticeCount', 'user', 'fileRecords'));
			}
		}
		Session::put('error', 'You must log in first!');
		return redirect('login');
	}

	public function editProfile(){
		if(Session::has('type')){
			if(Session::get('type') == 1){
				$enum = Session::get('userEmp')['employeeNum'];
				$approvedCount = ApprovedRequest::where('employeeNum', '=', $enum)->get(); 
				$declinedCount = DeclinedRequest::where('employeeNum', '=', $enum)->get();
				$editNoticeCount = EditNotice::where('employeeNum', '=', $enum)->get();


				$facultypositions = FacultyPosition::all();
				$divisions = Division::all();
				$degrees = Degree::all();
				$specializations = Specialization::all();

				if(Input::has('employeeNum')){
					Session::forget('editStatus');
					Session::forget('editEmployeeID');

					$employee = Employee::where('employeeNum', '=', $enum)->get();
					$status = false;
					Session::put('editStatus', false);
					Session::put('editEmployeeID', $enum);
				}
				else{
					$employee = Employee::where('employeeNum', '=', Session::get('editEmployeeID'))->get();
					$status = Session::get('editStatus');

					Session::put('editStatus', false);
				}

				return view('facultyandstaff.faculty.edit-faculty-profile', compact('approvedCount', 'declinedCount', 'editNoticeCount', 'employee', 'status', 'facultypositions', 'divisions', 'degrees', 'specializations'));
			}
		}
		Session::put('error', 'You must log in first!');
		return redirect('login');
	}

	public function requestEditProfile(){
		if(Session::has('type')){
			if(Session::get('type') == 1){
				$enum = Input::get('employeeNum');
				$user = Employee::where('employeeNum', '=', $enum)->get();
				$requestexist = EditRequest::where('employeeNum', '=', $enum)->get();

				$timestamp = date('Y-m-d H:i:s');
				
				if(count($requestexist) > 0){
					EditRequest::where('employeeNum', '=', $enum)->update([
						'employeeNum' => Session::get('userEmp')['employeeNum'],
						'type' => Session::get('userEmp')['type'],
						'firstName' => Input::get('firstName'),
						'middleName' => Input::get('middleName'),
						'lastName' => Input::get('lastName'),
						'sex' => Input::get('sex'),
						'birthdate' => Input::get('birthdate'),
						'position' => Input::get('position'),
						'division' => Input::get('division'),
						'contactNum' => Input::get('contactNum'),
						'emailAddress' => Input::get('emailAddress'),
						'currentAddress' => Input::get('currentAddress'),
						'permanentAddress' => Input::get('permanentAddress'),
						'degree' => Input::get('degree'),
						'specialization' => Input::get('specialization'),
						'schoolGraduated' => Input::get('schoolGraduated'),
						'yearGraduated' => Input::get('yearGraduated'),
						'updated_at' => $timestamp
					]);
				}
				else{
					EditRequest::insert([
						'employeeNum' => Session::get('userEmp')['employeeNum'],
						'type' => Session::get('userEmp')['type'],
						'firstName' => Input::get('firstName'),
						'middleName' => Input::get('middleName'),
						'lastName' => Input::get('lastName'),
						'sex' => Input::get('sex'),
						'birthdate' => Input::get('birthdate'),
						'position' => Input::get('position'),
						'division' => Input::get('division'),
						'contactNum' => Input::get('contactNum'),
						'emailAddress' => Input::get('emailAddress'),
						'currentAddress' => Input::get('currentAddress'),
						'permanentAddress' => Input::get('permanentAddress'),
						'degree' => Input::get('degree'),
						'specialization' => Input::get('specialization'),
						'schoolGraduated' => Input::get('schoolGraduated'),
						'yearGraduated' => Input::get('yearGraduated'),
						'created_at' => $timestamp
					]);
				}

				Session::put('editStatus', true);
				Session::put('requestEditEmployeeID', $enum);
				return redirect('edit-faculty-profile');
			}
		}
		Session::put('error', 'You must log in first!');
		return redirect('login');
	}

	public function viewAllNotifications(){
		if(Session::has('type')){
			if(Session::get('type') == 1){
				$enum = Session::get('userEmp')['employeeNum'];
				$approvedCount = ApprovedRequest::where('employeeNum', '=', $enum)->get(); 
				$declinedCount = DeclinedRequest::where('employeeNum', '=', $enum)->get();
				$editNoticeCount = EditNotice::where('employeeNum', '=', $enum)->get();

				$approvedusers = ApprovedRequest::where('employeeNum', '=', $enum)->get();
				$declinedusers = DeclinedRequest::where('employeeNum', '=', $enum)->get();
				$editnoticeusers = EditNotice::where('employeeNum', '=', $enum)->get();

				return view('facultyandstaff.faculty.view-notifications', compact('approvedCount', 'declinedCount', 'editNoticeCount', 'enum', 'approvedusers', 'declinedusers', 'editnoticeusers'));
			}
		}
		Session::put('error', 'You must log in first!');
		return redirect('login');
	}

	public function processDismissFacultyNotif(){
		if(Session::has('type')){
			if(Session::get('type') == 1){
				$enum = Session::get('userEmp')['employeeNum'];
				$notifType = Input::get('notifType');
				
				if($notifType == "approvedRequest"){
					$empID = Input::get('empID');
					ApprovedRequest::where('id', '=', $empID)->delete();
				}
				
				else if($notifType == "declinedRequest"){
					$empID = Input::get('empID');
					DeclinedRequest::where('id', '=', $empID)->delete();	
				}

				else if($notifType == "editNotice"){
					$empID = Input::get('empID');
					EditNotice::where('id', '=', $empID)->delete();
				}

				return redirect('faculty-notifications');
			}
		}
		Session::put('error', 'You must log in first!');
		return redirect('login');
	}

	public function viewSchedule(){
		
	}

}
