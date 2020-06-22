<?php

namespace App\Policies;

use App\Student;
use App\StudentsData;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class StudentsDataPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\User  $user
     * @param  \App\StudentsData  $studentsData
     * @return mixed
     */
    public function view(User $user, StudentsData $studentsData)
    {
        //
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\StudentsData  $studentsData
     * @return mixed
     */
    public function update(Student $student, StudentsData $studentsData)
    {
        return true;

        return (($student->id == $studentsData->student_id) &&
                ($student->status == 0) &&
                ($student->id == auth()->guard('student')->id()) && auth()->guard('student')->check())
                || $this->ifAdminIsLoggedIn();
    }

    protected function ifAdminIsLoggedIn()
    {
        if (auth()->guard('staff')->check()) {
            return (auth()->guard('staff')->user()->role == 'admin');
        } else {
            return false;
        }
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\User  $user
     * @param  \App\StudentsData  $studentsData
     * @return mixed
     */
    public function delete(User $user, StudentsData $studentsData)
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\User  $user
     * @param  \App\StudentsData  $studentsData
     * @return mixed
     */
    public function restore(User $user, StudentsData $studentsData)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\User  $user
     * @param  \App\StudentsData  $studentsData
     * @return mixed
     */
    public function forceDelete(User $user, StudentsData $studentsData)
    {
        //
    }
}
