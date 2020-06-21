<?php

namespace App\Http\Controllers;

use App\Student;
use App\StudentsData;
use Illuminate\Http\Request;

class StudentsDataController extends Controller
{
    public function updateFromStudentDashboard(Request $request, Student $student, StudentsData $studentsData)
    {
        $this->updateFromStudentDashboardValidation($request);
        $student->firstname = $request->firstname;
        $student->lastname = $request->lastname;
        $student->email = $request->email;
        $student->save();
        $studentsData->fathersname = $request->fathersname;
        $studentsData->birthdate = $request->birthdate;
        $studentsData->studentsid = $request->studentsid;
        $studentsData->serialnumberid = $request->serialnumberid;
        $studentsData->issueplace = $request->issueplace;
        $studentsData->birthplace = $request->birthplace;
        $studentsData->fathersfirstname = $request->fathersfirstname;
        $studentsData->fatherslastname = $request->fatherslastname;
        $studentsData->fathersfathersname = $request->fathersfathersname;
        $studentsData->fathersbirthdate = $request->fathersbirthdate;
        $studentsData->fathersid = $request->fathersid;
        $studentsData->fathersnationalid = $request->fathersnationalid;
        $studentsData->fathersserialnumberid = $request->fathersserialnumberid;
        $studentsData->fathersissueplace = $request->fathersissueplace;
        $studentsData->fathersbirthplace = $request->fathersbirthplace;
        $studentsData->fatherseducation = $request->fatherseducation;
        $studentsData->fathersjob = $request->fathersjob;
        $studentsData->fathersphone = $request->fathersphone;
        $studentsData->fathersjobaddress = $request->fathersjobaddress;
        $studentsData->mothersfirstname = $request->mothersfirstname;
        $studentsData->motherslastname = $request->motherslastname;
        $studentsData->mothersfathersname = $request->mothersfathersname;
        $studentsData->mothersbirthdate = $request->mothersbirthdate;
        $studentsData->mothersid = $request->mothersid;
        $studentsData->mothersnationalid = $request->mothersnationalid;
        $studentsData->mothersserialnumberid = $request->mothersserialnumberid;
        $studentsData->mothersissueplace = $request->mothersissueplace;
        $studentsData->mothersbirthplace = $request->mothersbirthplace;
        $studentsData->motherseducation = $request->motherseducation;
        $studentsData->mothersjob = $request->mothersjob;
        $studentsData->mothersphone = $request->mothersphone;
        $studentsData->mothersjobaddress = $request->mothersjobaddress;
        $studentsData->numberofchildren = $request->numberofchildren;
        $studentsData->numberofbrothers = $request->numberofbrothers;
        $studentsData->numberofsisters = $request->numberofsisters;
        $studentsData->address = $request->address;
        $studentsData->homesphone = $request->homesphone;
        $studentsData->postalcode = $request->postalcode;
        $studentsData->exschool = $request->exschool;
        $studentsData->howfindus = $request->howfindus;
        $studentsData->childtalent = $request->childtalent;
        $studentsData->form_completer = $request->form_completer;
        $studentsData->preschool_student_shift_bool = $request->preschool_student_shift_bool;
        $studentsData->student_service_bool = $request->student_service_bool;
        $studentsData->save();
    }

    protected function updateFromStudentDashboardValidation(Request $request)
    {
        $rules = [
            'email' => 'required|max:255',
            'firstname' => 'required|max:100',
            'lastname' => 'required|max:100',
            'fathersname' => 'required|max:100',
            'birthdate' => 'required',
            'studentsid' => 'required|max:10',
            'serialnumberid' => 'required|max:100',
            'issueplace' => 'required|max:100',
            'birthplace' => 'required|max:100',
            'fathersfirstname' => 'required|max:100',
            'fatherslastname' => 'required|max:100',
            'fathersfathersname' => 'required|max:100',
            'fathersbirthdate' => 'required',
            'fathersid' => 'required|max:10',
            'fathersnationalid' => 'required|max:10',
            'fathersserialnumberid' => 'required|max:100',
            'fathersissueplace' => 'required|max:100',
            'fathersbirthplace' => 'required|max:100',
            'fatherseducation' => 'required|max:100',
            'fathersjob' => 'required|max:100',
            'fathersphone' => 'required|max:100',
            'fathersjobaddress' => 'required|max:100',
            'mothersfirstname' => 'required|max:100',
            'motherslastname' => 'required|max:100',
            'mothersfathersname' => 'required|max:100',
            'mothersbirthdate' => 'required|max:100',
            'mothersid' => 'required|max:10',
            'mothersnationalid' => 'required|max:10',
            'mothersserialnumberid' => 'required|max:100',
            'mothersissueplace' => 'required|max:100',
            'mothersbirthplace' => 'required|max:100',
            'motherseducation' => 'required|max:100',
            'mothersjob' => 'required|max:100',
            'mothersphone' => 'required|max:100',
            'mothersjobaddress' => 'required|max:100',
            'numberofchildren' => 'required|numeric|max:125',
            'numberofbrothers' => 'required|numeric|max:125',
            'numberofsisters' => 'required|numeric|max:125',
            'address' => 'required',
            'homesphone' => 'required|max:100',
            'postalcode' => 'required|max:10',
            'exschool' => 'required|max:100',
            'howfindus' => 'required',
            'childtalent' => 'required',
            'form_completer' => 'required|max:100',
            'student_service_bool' => 'required'
        ];
        $request->validate($rules);
    }
}
