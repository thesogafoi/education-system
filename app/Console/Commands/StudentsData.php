<?php

namespace App\Console\Commands;

use App\Student;
use Carbon\Carbon;
use Illuminate\Console\Command;

class StudentsData extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'studentsData {fromWho} {--username=}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create or update Student\'s Data from Students dashboard or Admins dashboard';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        if ($this->argument('fromWho') == 'FromStudent') {
            if ($this->option('username')) {
                $username = $this->option('username');
                $this->fillStudentsData($username);
            } else {
                $student = factory(Student::class)->create();
                $this->fillStudentsData($student->username);
            }
        }
    }

    protected function fillStudentsData($username)
    {
        $studentsData = Student::whereUsername($username)->first()->studentsData()->first();
        Student::whereUsername($username)->first()->studentSubmittedForm();
        $studentsData->fathersname = 'محمد';
        $studentsData->birthdate = Carbon::now()->subYear(25);
        $studentsData->studentsid = '0012569985';
        $studentsData->serialnumberid = '0012569985';
        $studentsData->issueplace = 'تهران';
        $studentsData->birthplace = 'تهران';

        $studentsData->fathersfirstname = 'محمد';
        $studentsData->fatherslastname = 'قریشی';
        $studentsData->fathersfathersname = 'محمد محمدیان';
        $studentsData->fathersbirthdate = '1344/1/1';
        $studentsData->fathersid = '18';
        $studentsData->fathersnationalid = '5632587452';
        $studentsData->fathersserialnumberid = '5632587452';
        $studentsData->fathersissueplace = 'یزد';
        $studentsData->fathersbirthplace = 'یزد';
        $studentsData->fatherseducation = 'لیسانس';
        $studentsData->fathersjob = 'سرباز';
        $studentsData->fathersphone = '09359876420';
        $studentsData->fathersjobaddress = 'اونجا پایین تر از اینجا';

        $studentsData->mothersfirstname = 'زهره';
        $studentsData->motherslastname = 'حجت';
        $studentsData->mothersfathersname = 'رضا';
        $studentsData->mothersbirthdate = '1349/4/14';
        $studentsData->mothersid = '5632587452';
        $studentsData->mothersnationalid = '5632587452';
        $studentsData->mothersserialnumberid = '5632587452';
        $studentsData->mothersissueplace = 'تهران';
        $studentsData->mothersbirthplace = 'تهران';
        $studentsData->motherseducation = 'دیپلم';
        $studentsData->mothersjob = 'بیکار';
        $studentsData->mothersphone = '09352457856';
        $studentsData->mothersjobaddress = 'اونجا پایین تر از همه جا';

        $studentsData->numberofchildren = '3';
        $studentsData->numberofbrothers = '1';
        $studentsData->numberofsisters = '1';
        $studentsData->address = 'میای بد که رسیدی بالاتر از پاین سمت راست دیوار بلندرو دیدی به من چه';
        $studentsData->homesphone = '021-66666666';
        $studentsData->postalcode = '5632587452';
        $studentsData->exschool = 'جوب';
        $studentsData->howfindus = 'واقعا سخت بود ';
        $studentsData->childtalent = 'مهارت خاصی نداره آووردیمش مدرسه بهش مهارت یاد بدید دیگ';
        $studentsData->student_service_bool = 'false';
        $studentsData->preshool_student_shift_bool = 'afternoon';
        $studentsData->form_completer = 'اصغر همت';
        $studentsData->form_completed_date = Carbon::now();
        $studentsData->save();
    }
}
