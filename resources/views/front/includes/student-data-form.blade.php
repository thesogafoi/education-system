<students-data-form inline-template :old-values="{{json_encode(session()->getOldInput())}}" 
    :students-data-id="{{json_encode($studentsData->id)}}" :student-username="{{json_encode($student->username)}}"
    >
    
    <main class="">
        <div class="uk-section uk-section-default">
            <div class="uk-container uk-container-small uk-position-relative">
                <div class="es-dashboard-content">
                    <div class="es-student-initial-registerform">
                        <legend class="uk-legend"> فرم ثبت نام در سیستم مدرسه </legend>
                        <h6 class="uk-margin uk-heading-divider"> فرم شماره 1 </h6>

                        <form class="uk-grid-small" uk-grid method="POST" 
                        action="/dashboard/update/students/data/{{$student->username}}/{{$studentsData->id}}">
                            {{method_field('PUT')}}
                            {{ csrf_field() }}
                            
                            <div class="uk-width-1-3@s">
                                <label class="uk-form-label" for="date-of-register"> ایمیل خود را وارد کنید</label>
                                <div class="uk-form-controls">
                                    <input @focus="checkValidationRules" v-model="email"
                                    :class="{'uk-input':true,'input-has-error': emailError {{$errors->has('email') ? '|| true' : ''}}}" 
                                     id="date-of-register" type="text"
                                        placeholder="example@example.com" name="email">
                                        <div v-if="emailError  {{$errors->has('email') ? '|| true' : ''}}">
                                            @if($errors->has('email'))
                                                <span style="color:red">
                                                    @foreach ($errors->get('email') as $error)
                                                        {{$error}}
                                                    @endforeach
                                                </span>
                                            @else
                                                <span style="color:red" v-for="error in emailErrorsMessage">@{{error}} . </span>
                                            @endif
                                        </div>
                                </div>
                            </div>
                            <div class="uk-width-1-3@s">
                                <label class="uk-form-label" for="student-register-grade"> پایه </label>
                                <div class="uk-form-controls">
                                    <input @focus="checkValidationRules" v-model="grade"
                                    :class="{'uk-input':true,'input-has-error': gradeError {{$errors->has('grade') ? '|| true' : ''}}}" 
                                    id="student-register-grade" type="text" placeholder="اول" name="grade">
                                    <div v-if="gradeError  {{$errors->has('grade') ? '|| true' : ''}}">
                                        @if($errors->has('grade'))
                                            <span style="color:red">
                                                @foreach ($errors->get('grade') as $error)
                                                    {{$error}}
                                                @endforeach
                                            </span>
                                        @else
                                            <span style="color:red" v-for="error in gradeErrorsMessage">@{{error}} . </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="uk-width-1-3@s">
                                <label class="uk-form-label" for="student-exam-date"> تاریخ آخرین آزمون </label>
                                <div class="uk-form-controls">
                                    <input @focus="checkValidationRules" v-model="last_exam"
                                    :class="{'uk-input':true,'input-has-error': last_examError {{$errors->has('last_exam') ? '|| true' : ''}}}" 
                                     id="student-exam-date" type="text"
                                        placeholder="روز / ماه / سال" name="last_exam">
                                        <div v-if="last_examError  {{$errors->has('last_exam') ? '|| true' : ''}}">
                                            @if($errors->has('last_exam'))
                                                <span style="color:red">
                                                    @foreach ($errors->get('last_exam') as $error)
                                                        {{$error}}
                                                    @endforeach
                                                </span>
                                            @else
                                                <span style="color:red" v-for="error in last_examErrorsMessage">@{{error}} . </span>
                                            @endif
                                        </div>
                                </div>
                            </div>
                            <div class="uk-margin uk-width-1-1">
                                <div class="uk-container">
                                    <ul class="uk-list uk-list-disc">
                                        <li> تکمیل این فرم به منزله ثبت نام قطعی شما در این واحد آموزشی نمی باشد </li>
                                        <li> بدیهی است که این واحد آموزشی هیچگونه تعهدی را در این رابطه نخواهد داشت
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="uk-margin uk-width-1-1">
                                <h5 class="uk-margin uk-heading-divider"> مشخصات دانش آموز </h5>
                            </div>
                            <div class="uk-width-1-2@s">
                                <label class="uk-form-label" for="student-register-name"> نام: </label>
                                <div class="uk-form-controls">
                                    <input @focus="checkValidationRules" 
                                    :class="{'uk-input':true,'input-has-error': firstnameError {{$errors->has('firstname') ? '|| true' : ''}}}" 
                                    id="student-register-name" 
                                    type="text" name="firstname" v-model="firstname" >
                                    <div v-if="firstnameError  {{$errors->has('firstname') ? '|| true' : ''}}">
                                        @if($errors->has('firstname'))
                                            <span style="color:red">
                                                @foreach ($errors->get('firstname') as $error)
                                                    {{$error}}
                                                @endforeach
                                            </span>
                                        @else
                                            <span style="color:red" v-for="error in firstnameErrorsMessage">@{{error}} . </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="uk-width-1-2@s">
                                <label class="uk-form-label" for="student-register-lname"> نام خانوادگی: </label>
                                <div class="uk-form-controls">
                                    <input @focus="checkValidationRules" 
                                    :class="{'uk-input':true,'input-has-error': lastnameError {{$errors->has('lastname') ? '|| true' : ''}}}" 
                                    id="student-register-lname" 
                                    type="text" name="lastname" v-model="lastname" >

                                    <div v-if="lastnameError  {{$errors->has('lastname') ? '|| true' : ''}}">
                                        @if($errors->has('lastname'))
                                            <span style="color:red">
                                                @foreach ($errors->get('lastname') as $error)
                                                    {{$error}}
                                                @endforeach
                                            </span>
                                        @else
                                            <span style="color:red" v-for="error in lastnameErrorsMessage">@{{error}} . </span>
                                        @endif
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="uk-width-1-2@s">
                                <label class="uk-form-label" for="student-register-fathername"> نام پدر: </label>
                                <div class="uk-form-controls">
                                    <input @focus="checkValidationRules" 
                                    :class="{'uk-input':true,'input-has-error': fathersnameError {{$errors->has('fathersname') ? '|| true' : ''}}}" 
                                     id="student-register-fathername" 
                                    type="text" name="fathersname" v-model="fathersname" >

                                    <div v-if="fathersnameError  {{$errors->has('fathersname') ? '|| true' : ''}}">
                                        @if($errors->has('fathersname'))
                                            <span style="color:red">
                                                @foreach ($errors->get('fathersname') as $error)
                                                    {{$error}}
                                                @endforeach
                                            </span>
                                        @else
                                            <span style="color:red" v-for="error in fathersnameErrorsMessage">@{{error}} . </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="uk-width-1-2@s">
                                <label class="uk-form-label" for="student-register-birth"> تاریخ تولد: </label>
                                <div class="uk-form-controls">
                                    <input @focus="checkValidationRules" 
                                    :class="{'uk-input':true,'input-has-error': birthdateError {{$errors->has('birthdate') ? '|| true' : ''}}}" 
                                     id="student-register-birth" type="text"
                                        placeholder="روز / ماه / سال" name="birthdate" v-model="birthdate" >
                                    <div v-if="birthdateError  {{$errors->has('birthdate') ? '|| true' : ''}}">
                                        @if($errors->has('birthdate'))
                                            <span style="color:red">
                                                @foreach ($errors->get('birthdate') as $error)
                                                    {{$error}}
                                                @endforeach
                                            </span>
                                        @else
                                            <span style="color:red" v-for="error in birthdateErrorsMessage">@{{error}} . </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="uk-width-1-1">
                                <label class="uk-form-label" for="student-register-idnumber"> شماره شناسنامه: </label>
                                <div class="uk-form-controls">
                                    <input @focus="checkValidationRules" 
                                    :class="{'uk-input':true,'input-has-error': studentsidError {{$errors->has('studentsid') ? '|| true' : ''}}}" 
                                     id="student-register-idnumber" type="text"
                                        name="studentsid" v-model="studentsid" 
                                        placeholder=" 10 رقم با دقت وارد شود ">
                                        <div v-if="studentsidError  {{$errors->has('studentsid') ? '|| true' : ''}}">
                                            @if($errors->has('studentsid'))
                                                <span style="color:red">
                                                    @foreach ($errors->get('studentsid') as $error)
                                                        {{$error}}
                                                    @endforeach
                                                </span>
                                            @else
                                                <span style="color:red" v-for="error in studentsidErrorsMessage">@{{error}} . </span>
                                            @endif
                                        </div>
                                </div>
                            </div>
                            <div class="uk-width-1-3@s">
                                <label class="uk-form-label" for="student-register-id-serial"> سریال شناسنامه: </label>
                                <div class="uk-form-controls">
                                    <input @focus="checkValidationRules" 
                                    :class="{'uk-input':true,'input-has-error': serialnumberidError {{$errors->has('serialnumberid') ? '|| true' : ''}}}" 
                                     id="student-register-id-serial" 
                                    name="serialnumberid" v-model="serialnumberid"  type="text">
                                    <div v-if="serialnumberidError  {{$errors->has('serialnumberid') ? '|| true' : ''}}">
                                        @if($errors->has('serialnumberid'))
                                            <span style="color:red">
                                                @foreach ($errors->get('serialnumberid') as $error)
                                                    {{$error}}
                                                @endforeach
                                            </span>
                                        @else
                                            <span style="color:red" v-for="error in serialnumberidErrorsMessage">@{{error}} . </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="uk-width-1-3@s">
                                <label class="uk-form-label" for="student-register-id-release"> محل صدور: </label>
                                <div class="uk-form-controls">
                                    <input @focus="checkValidationRules" 
                                    :class="{'uk-input':true,'input-has-error': issueplaceError {{$errors->has('issueplace') ? '|| true' : ''}}}" 
                                     id="student-register-id-release"
                                    name="issueplace" v-model="issueplace"  type="text">
                                    <div v-if="issueplaceError  {{$errors->has('issueplace') ? '|| true' : ''}}">
                                        @if($errors->has('issueplace'))
                                            <span style="color:red">
                                                @foreach ($errors->get('issueplace') as $error)
                                                    {{$error}}
                                                @endforeach
                                            </span>
                                        @else
                                            <span style="color:red" v-for="error in issueplaceErrorsMessage">@{{error}} . </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="uk-width-1-3@s">
                                <label class="uk-form-label" for="student-register-id-birthplace"> محل تولد: </label>
                                <div class="uk-form-controls">
                                    <input @focus="checkValidationRules" 
                                    :class="{'uk-input':true,'input-has-error': birthplaceError {{$errors->has('birthplace') ? '|| true' : ''}}}" 
                                     id="student-register-id-birthplace" 
                                    name="birthplace" v-model="birthplace"  type="text">
                                    <div v-if="birthplaceError  {{$errors->has('birthplace') ? '|| true' : ''}}">
                                        @if($errors->has('birthplace'))
                                            <span style="color:red">
                                                @foreach ($errors->get('birthplace') as $error)
                                                    {{$error}}
                                                @endforeach
                                            </span>
                                        @else
                                            <span style="color:red" v-for="error in birthplaceErrorsMessage">@{{error}} . </span>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="uk-margin-top uk-width-1-1">
                                <h5 class="uk-margin-top uk-heading-divider"> مشخصات پدر دانش آموز </h5>
                            </div>
                            <div class="uk-width-1-2@s">
                                <label class="uk-form-label" for="student-father-register-name"> نام: </label>
                                <div class="uk-form-controls">
                                    <input @focus="checkValidationRules" 
                                    :class="{'uk-input':true,'input-has-error': fathersfirstnameError {{$errors->has('fathersfirstname') ? '|| true' : ''}}}" 
                                     id="student-father-register-name" 
                                    name="fathersfirstname" v-model="fathersfirstname"  type="text">
                                    <div v-if="fathersfirstnameError  {{$errors->has('fathersfirstname') ? '|| true' : ''}}">
                                        @if($errors->has('fathersfirstname'))
                                            <span style="color:red">
                                                @foreach ($errors->get('fathersfirstname') as $error)
                                                    {{$error}}
                                                @endforeach
                                            </span>
                                        @else
                                            <span style="color:red" v-for="error in fathersfirstnameErrorsMessage">@{{error}} . </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="uk-width-1-2@s">
                                <label class="uk-form-label" for="student-father-register-lname"> نام خانوادگی: </label>
                                <div class="uk-form-controls">
                                    <input @focus="checkValidationRules" 
                                    :class="{'uk-input':true,'input-has-error': fatherslastnameError {{$errors->has('fatherslastname') ? '|| true' : ''}}}" 
                                     id="student-father-register-lname" 
                                    name="fatherslastname" v-model="fatherslastname"  type="text">

                                    <div v-if="fatherslastnameError  {{$errors->has('fatherslastname') ? '|| true' : ''}}">
                                        @if($errors->has('fatherslastname'))
                                            <span style="color:red">
                                                @foreach ($errors->get('fatherslastname') as $error)
                                                    {{$error}}
                                                @endforeach
                                            </span>
                                        @else
                                            <span style="color:red" v-for="error in fatherslastnameErrorsMessage">@{{error}} . </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="uk-width-1-2@s">
                                <label class="uk-form-label" for="student-father-register-fname"> نام پدر: </label>
                                <div class="uk-form-controls">
                                    <input @focus="checkValidationRules" 
                                    :class="{'uk-input':true,'input-has-error': fathersfathersnameError {{$errors->has('fathersfathersname') ? '|| true' : ''}}}" 
                                     id="student-father-register-fname" 
                                    name="fathersfathersname" v-model="fathersfathersname"  type="text">

                                    <div v-if="fathersfathersnameError  {{$errors->has('fathersfathersname') ? '|| true' : ''}}">
                                        @if($errors->has('fathersfathersname'))
                                            <span style="color:red">
                                                @foreach ($errors->get('fathersfathersname') as $error)
                                                    {{$error}}
                                                @endforeach
                                            </span>
                                        @else
                                            <span style="color:red" v-for="error in fathersfathersnameErrorsMessage">@{{error}} . </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="uk-width-1-2@s">
                                <label class="uk-form-label" for="student-father-register-birth"> تاریخ تولد: </label>
                                <div class="uk-form-controls">
                                    <input @focus="checkValidationRules" 
                                    :class="{'uk-input':true,'input-has-error': fathersbirthdateError {{$errors->has('fathersbirthdate') ? '|| true' : ''}}}" 
                                     id="student-father-register-birth" type="text"
                                        placeholder="روز / ماه / سال"
                                        name="fathersbirthdate" v-model="fathersbirthdate"  >
                                        <div v-if="fathersbirthdateError  {{$errors->has('fathersbirthdate') ? '|| true' : ''}}">
                                            @if($errors->has('fathersbirthdate'))
                                                <span style="color:red">
                                                    @foreach ($errors->get('fathersbirthdate') as $error)
                                                        {{$error}}
                                                    @endforeach
                                                </span>
                                            @else
                                                <span style="color:red" v-for="error in fathersbirthdateErrorsMessage">@{{error}} . </span>
                                            @endif
                                        </div>
                                </div>
                            </div>
                            <div class="uk-width-1-1">
                                <label class="uk-form-label" for="student-father-register-idnumber"> شماره شناسنامه:
                                </label>
                                <div class="uk-form-controls">
                                    <input @focus="checkValidationRules" 
                                    :class="{'uk-input':true,'input-has-error': fathersidError {{$errors->has('fathersid') ? '|| true' : ''}}}" 
                                     id="student-father-register-idnumber" 
                                    name="fathersid" v-model="fathersid" type="text">
                                    <div v-if="fathersidError  {{$errors->has('fathersid') ? '|| true' : ''}}">
                                        @if($errors->has('fathersid'))
                                            <span style="color:red">
                                                @foreach ($errors->get('fathersid') as $error)
                                                    {{$error}}
                                                @endforeach
                                            </span>
                                        @else
                                            <span style="color:red" v-for="error in fathersidErrorsMessage">@{{error}} . </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="uk-width-1-1">
                                <label class="uk-form-label" for="student-father-register-idnumber-national"> کد ملی:
                                </label>
                                <div class="uk-form-controls">
                                    <input @focus="checkValidationRules" 
                                    :class="{'uk-input':true,'input-has-error': fathersnationalidError {{$errors->has('fathersnationalid') ? '|| true' : ''}}}" 
                                     id="student-father-register-idnumber-national" type="text"
                                        placeholder=" 10 رقم با دقت وارد شود "
                                        name="fathersnationalid" v-model="fathersnationalid" >
                                        <div v-if="fathersnationalidError  {{$errors->has('fathersnationalid') ? '|| true' : ''}}">
                                            @if($errors->has('fathersnationalid'))
                                                <span style="color:red">
                                                    @foreach ($errors->get('fathersnationalid') as $error)
                                                        {{$error}}
                                                    @endforeach
                                                </span>
                                            @else
                                                <span style="color:red" v-for="error in fathersnationalidErrorsMessage">@{{error}} . </span>
                                            @endif
                                        </div>
                                </div>
                            </div>
                            <div class="uk-width-1-3@s">
                                <label class="uk-form-label" for="student-father-register-id-serial"> سریال شناسنامه:
                                </label>
                                <div class="uk-form-controls">
                                    <input @focus="checkValidationRules" 
                                    :class="{'uk-input':true,'input-has-error': fathersserialnumberidError {{$errors->has('fathersserialnumberid') ? '|| true' : ''}}}" 
                                     id="student-father-register-id-serial" 
                                    name="fathersserialnumberid" v-model="fathersserialnumberid" type="text">
                                    <div v-if="fathersserialnumberidError  {{$errors->has('fathersserialnumberid') ? '|| true' : ''}}">
                                        @if($errors->has('fathersserialnumberid'))
                                            <span style="color:red">
                                                @foreach ($errors->get('fathersserialnumberid') as $error)
                                                    {{$error}}
                                                @endforeach
                                            </span>
                                        @else
                                            <span style="color:red" v-for="error in fathersserialnumberidErrorsMessage">@{{error}} . </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="uk-width-1-3@s">
                                <label class="uk-form-label" for="student-father-register-id-release"> محل صدور:
                                </label>
                                <div class="uk-form-controls">
                                    <input @focus="checkValidationRules" 
                                    :class="{'uk-input':true,'input-has-error': fathersissueplaceError {{$errors->has('fathersissueplace') ? '|| true' : ''}}}" 
                                     id="student-father-register-id-release" 
                                    name="fathersissueplace" v-model="fathersissueplace"  type="text">
                                    <div v-if="fathersissueplaceError  {{$errors->has('fathersissueplace') ? '|| true' : ''}}">
                                        @if($errors->has('fathersissueplace'))
                                            <span style="color:red">
                                                @foreach ($errors->get('fathersissueplace') as $error)
                                                    {{$error}}
                                                @endforeach
                                            </span>
                                        @else
                                            <span style="color:red" v-for="error in fathersissueplaceErrorsMessage">@{{error}} . </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="uk-width-1-3@s">
                                <label class="uk-form-label" for="student-father-register-id-birthplace"> محل تولد:
                                </label>
                                <div class="uk-form-controls">
                                    <input @focus="checkValidationRules" 
                                    :class="{'uk-input':true,'input-has-error': fathersbirthplaceError {{$errors->has('fathersbirthplace') ? '|| true' : ''}}}" 
                                     id="student-father-register-id-birthplace"
                                    name="fathersbirthplace" v-model="fathersbirthplace"  type="text">
                                    <div v-if="fathersbirthplaceError  {{$errors->has('fathersbirthplace') ? '|| true' : ''}}">
                                        @if($errors->has('fathersbirthplace'))
                                            <span style="color:red">
                                                @foreach ($errors->get('fathersbirthplace') as $error)
                                                    {{$error}}
                                                @endforeach
                                            </span>
                                        @else
                                            <span style="color:red" v-for="error in fathersbirthplaceErrorsMessage">@{{error}} . </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="uk-width-1-2@s">
                                <label class="uk-form-label" for="student-father-register-degree"> میزان تحصیلات پدر:
                                </label>
                                <div class="uk-form-controls">
                                    <input @focus="checkValidationRules" 
                                    :class="{'uk-input':true,'input-has-error': fatherseducationError {{$errors->has('fatherseducation') ? '|| true' : ''}}}" 
                                     id="student-father-register-degree"
                                    name="fatherseducation" v-model="fatherseducation"  type="text">
                                    <div v-if="fatherseducationError  {{$errors->has('fatherseducation') ? '|| true' : ''}}">
                                        @if($errors->has('fatherseducation'))
                                            <span style="color:red">
                                                @foreach ($errors->get('fatherseducation') as $error)
                                                    {{$error}}
                                                @endforeach
                                            </span>
                                        @else
                                            <span style="color:red" v-for="error in fatherseducationErrorsMessage">@{{error}} . </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="uk-width-1-2@s">
                                <label class="uk-form-label" for="student-father-register-occupation"> شغل پدر به طور
                                    مشخص: </label>
                                <div class="uk-form-controls">
                                    <input @focus="checkValidationRules" 
                                    :class="{'uk-input':true,'input-has-error': fathersjobError {{$errors->has('fathersjob') ? '|| true' : ''}}}" 
                                     id="student-father-register-occupation" 
                                    name="fathersjob" v-model="fathersjob"  type="text">
                                    <div v-if="fathersjobError  {{$errors->has('fathersjob') ? '|| true' : ''}}">
                                        @if($errors->has('fathersjob'))
                                            <span style="color:red">
                                                @foreach ($errors->get('fathersjob') as $error)
                                                    {{$error}}
                                                @endforeach
                                            </span>
                                        @else
                                            <span style="color:red" v-for="error in fathersjobErrorsMessage">@{{error}} . </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="uk-width-1-2@s">
                                <label class="uk-form-label" for="student-father-register-phone"> تلفن همراه پدر:
                                </label>
                                <div class="uk-form-controls">
                                    <input @focus="checkValidationRules" 
                                    :class="{'uk-input':true,'input-has-error': fathersphoneError {{$errors->has('fathersphone') ? '|| true' : ''}}}" 
                                     id="student-father-register-phone" 
                                    name="fathersphone" v-model="fathersphone"  type="text">
                                    <div v-if="fathersphoneError  {{$errors->has('fathersphone') ? '|| true' : ''}}">
                                        @if($errors->has('fathersphone'))
                                            <span style="color:red">
                                                @foreach ($errors->get('fathersphone') as $error)
                                                    {{$error}}
                                                @endforeach
                                            </span>
                                        @else
                                            <span style="color:red" v-for="error in fathersphoneErrorsMessage">@{{error}} . </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="uk-width-1-1">
                                <label class="uk-form-label" for="student-father-register-workplace"> آدرس دقیق محل کار
                                    پدر: </label>
                                <div class="uk-form-controls">
                                    <input @focus="checkValidationRules" 
                                    :class="{'uk-input':true,'input-has-error': fathersjobaddressError {{$errors->has('fathersjobaddress') ? '|| true' : ''}}}" 
                                     id="student-father-register-workplace" 
                                    name="fathersjobaddress" v-model="fathersjobaddress"  type="text">
                                    <div v-if="fathersjobError  {{$errors->has('fathersjob') ? '|| true' : ''}}">
                                        @if($errors->has('fathersjob'))
                                            <span style="color:red">
                                                @foreach ($errors->get('fathersjob') as $error)
                                                    {{$error}}
                                                @endforeach
                                            </span>
                                        @else
                                            <span style="color:red" v-for="error in fathersjobErrorsMessage">@{{error}} . </span>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="uk-margin-top uk-width-1-1">
                                <h5 class="uk-margin-top uk-heading-divider"> مشخصات مادر دانش آموز </h5>
                            </div>
                            <div class="uk-width-1-2@s">
                                <label class="uk-form-label" for="student-mother-register-name"> نام مادر: </label>
                                <div class="uk-form-controls">
                                    <input @focus="checkValidationRules" 
                                    :class="{'uk-input':true,'input-has-error': mothersfirstnameError {{$errors->has('mothersfirstname') ? '|| true' : ''}}}" 
                                     id="student-mother-register-name"
                                    name="mothersfirstname" v-model="mothersfirstname"  type="text">
                                    <div v-if="mothersfirstnameError  {{$errors->has('mothersfirstname') ? '|| true' : ''}}">
                                        @if($errors->has('mothersfirstname'))
                                            <span style="color:red">
                                                @foreach ($errors->get('mothersfirstname') as $error)
                                                    {{$error}}
                                                @endforeach
                                            </span>
                                        @else
                                            <span style="color:red" v-for="error in mothersfirstnameErrorsMessage">@{{error}} . </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="uk-width-1-2@s">
                                <label class="uk-form-label" for="student-mother-register-lname"> نام خانوادگی مادر:
                                </label>
                                <div class="uk-form-controls">
                                    <input @focus="checkValidationRules" 
                                    :class="{'uk-input':true,'input-has-error': motherslastnameError {{$errors->has('motherslastname') ? '|| true' : ''}}}" 
                                     id="student-mother-register-lname" 
                                    name="motherslastname" v-model="motherslastname"  type="text">
                                    <div v-if="motherslastnameError  {{$errors->has('motherslastname') ? '|| true' : ''}}">
                                        @if($errors->has('motherslastname'))
                                            <span style="color:red">
                                                @foreach ($errors->get('motherslastname') as $error)
                                                    {{$error}}
                                                @endforeach
                                            </span>
                                        @else
                                            <span style="color:red" v-for="error in motherslastnameErrorsMessage">@{{error}} . </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="uk-width-1-2@s">
                                <label class="uk-form-label" for="student-mother-register-fname"> نام پدر: </label>
                                <div class="uk-form-controls">
                                    <input @focus="checkValidationRules" 
                                    :class="{'uk-input':true,'input-has-error': mothersfathersnameError {{$errors->has('mothersfathersname') ? '|| true' : ''}}}" 
                                     id="student-mother-register-fname" 
                                    name="mothersfathersname" v-model="mothersfathersname"  type="text">
                                    <div v-if="mothersfathersnameError  {{$errors->has('mothersfathersname') ? '|| true' : ''}}">
                                        @if($errors->has('mothersfathersname'))
                                            <span style="color:red">
                                                @foreach ($errors->get('mothersfathersname') as $error)
                                                    {{$error}}
                                                @endforeach
                                            </span>
                                        @else
                                            <span style="color:red" v-for="error in mothersfathersnameErrorsMessage">@{{error}} . </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="uk-width-1-2@s">
                                <label class="uk-form-label" for="student-mother-register-birth"> تاریخ تولد: </label>
                                <div class="uk-form-controls">
                                    <input @focus="checkValidationRules" 
                                    :class="{'uk-input':true,'input-has-error': mothersbirthdateError {{$errors->has('mothersbirthdate') ? '|| true' : ''}}}" 
                                     id="student-mother-register-birth" type="text"
                                        placeholder="روز / ماه / سال" 
                                        name="mothersbirthdate" v-model="mothersbirthdate" >
                                        <div v-if="mothersbirthdateError  {{$errors->has('mothersbirthdate') ? '|| true' : ''}}">
                                            @if($errors->has('mothersbirthdate'))
                                                <span style="color:red">
                                                    @foreach ($errors->get('mothersbirthdate') as $error)
                                                        {{$error}}
                                                    @endforeach
                                                </span>
                                            @else
                                                <span style="color:red" v-for="error in mothersbirthdateErrorsMessage">@{{error}} . </span>
                                            @endif
                                        </div>
                                </div>
                            </div>
                            <div class="uk-width-1-1">
                                <label class="uk-form-label" for="student-mother-register-idnumber"> شماره شناسنامه:
                                </label>
                                <div class="uk-form-controls">
                                    <input @focus="checkValidationRules" 
                                    :class="{'uk-input':true,'input-has-error': mothersidError {{$errors->has('mothersid') ? '|| true' : ''}}}" 
                                     id="student-mother-register-idnumber"
                                    name="mothersid" v-model="mothersid"  type="text">
                                    <div v-if="mothersidError  {{$errors->has('mothersid') ? '|| true' : ''}}">
                                        @if($errors->has('mothersid'))
                                            <span style="color:red">
                                                @foreach ($errors->get('mothersid') as $error)
                                                    {{$error}}
                                                @endforeach
                                            </span>
                                        @else
                                            <span style="color:red" v-for="error in mothersidErrorsMessage">@{{error}} . </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="uk-width-1-1">
                                <label class="uk-form-label" for="student-mother-register-idnumber-national"> کد ملی:
                                </label>
                                <div class="uk-form-controls">
                                    <input @focus="checkValidationRules" 
                                    :class="{'uk-input':true,'input-has-error': mothersnationalidError {{$errors->has('mothersnationalid') ? '|| true' : ''}}}" 
                                     id="student-mother-register-idnumber-national"
                                    name="mothersnationalid" v-model="mothersnationalid"  type="text"
                                        placeholder=" 10 رقم با دقت وارد شود ">
                                        <div v-if="mothersnationalidError  {{$errors->has('mothersnationalid') ? '|| true' : ''}}">
                                            @if($errors->has('mothersnationalid'))
                                                <span style="color:red">
                                                    @foreach ($errors->get('mothersnationalid') as $error)
                                                        {{$error}}
                                                    @endforeach
                                                </span>
                                            @else
                                                <span style="color:red" v-for="error in mothersnationalidErrorsMessage">@{{error}} . </span>
                                            @endif
                                        </div>
                                </div>
                            </div>
                            <div class="uk-width-1-3@s">
                                <label class="uk-form-label" for="student-mother-register-id-serial"> سریال شناسنامه:
                                </label>
                                <div class="uk-form-controls">
                                    <input @focus="checkValidationRules" 
                                    :class="{'uk-input':true,'input-has-error': mothersserialnumberidError {{$errors->has('mothersserialnumberid') ? '|| true' : ''}}}" 
                                     id="student-mother-register-id-serial"
                                    name="mothersserialnumberid" v-model="mothersserialnumberid"  type="text">
                                    <div v-if="mothersserialnumberidError  {{$errors->has('mothersserialnumberid') ? '|| true' : ''}}">
                                        @if($errors->has('mothersserialnumberid'))
                                            <span style="color:red">
                                                @foreach ($errors->get('mothersserialnumberid') as $error)
                                                    {{$error}}
                                                @endforeach
                                            </span>
                                        @else
                                            <span style="color:red" v-for="error in mothersserialnumberidErrorsMessage">@{{error}} . </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="uk-width-1-3@s">
                                <label class="uk-form-label" for="student-mother-register-id-release"> محل صدور:
                                </label>
                                <div class="uk-form-controls">
                                    <input @focus="checkValidationRules" 
                                    :class="{'uk-input':true,'input-has-error': mothersissueplaceError {{$errors->has('mothersissueplace') ? '|| true' : ''}}}" 
                                     id="student-mother-register-id-release"
                                    name="mothersissueplace" v-model="mothersissueplace"  type="text">
                                    <div v-if="mothersissueplaceError  {{$errors->has('mothersissueplace') ? '|| true' : ''}}">
                                        @if($errors->has('mothersissueplace'))
                                            <span style="color:red">
                                                @foreach ($errors->get('mothersissueplace') as $error)
                                                    {{$error}}
                                                @endforeach
                                            </span>
                                        @else
                                            <span style="color:red" v-for="error in mothersissueplaceErrorsMessage">@{{error}} . </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="uk-width-1-3@s">
                                <label class="uk-form-label" for="student-mother-register-id-birthplace"> محل تولد:
                                </label>
                                <div class="uk-form-controls">
                                    <input @focus="checkValidationRules" 
                                    :class="{'uk-input':true,'input-has-error': mothersbirthplaceError {{$errors->has('mothersbirthplace') ? '|| true' : ''}}}" 
                                     id="student-mother-register-id-birthplace"
                                    name="mothersbirthplace" v-model="mothersbirthplace"  type="text">
                                    <div v-if="mothersbirthplaceError  {{$errors->has('mothersbirthplace') ? '|| true' : ''}}">
                                        @if($errors->has('mothersbirthplace'))
                                            <span style="color:red">
                                                @foreach ($errors->get('mothersbirthplace') as $error)
                                                    {{$error}}
                                                @endforeach
                                            </span>
                                        @else
                                            <span style="color:red" v-for="error in mothersbirthplaceErrorsMessage">@{{error}} . </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="uk-width-1-2@s">
                                <label class="uk-form-label" for="student-mother-register-degree"> میزان تحصیلات مادر:
                                </label>
                                <div class="uk-form-controls">
                                    <input @focus="checkValidationRules" 
                                    :class="{'uk-input':true,'input-has-error': motherseducationError {{$errors->has('motherseducation') ? '|| true' : ''}}}" 
                                     id="student-mother-register-degree"
                                    name="motherseducation" v-model="motherseducation"  type="text">
                                    <div v-if="motherseducationError  {{$errors->has('motherseducation') ? '|| true' : ''}}">
                                        @if($errors->has('motherseducation'))
                                            <span style="color:red">
                                                @foreach ($errors->get('motherseducation') as $error)
                                                    {{$error}}
                                                @endforeach
                                            </span>
                                        @else
                                            <span style="color:red" v-for="error in motherseducationErrorsMessage">@{{error}} . </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="uk-width-1-2@s">
                                <label class="uk-form-label" for="student-mother-register-occupation"> شغل مادر به طور
                                    مشخص: </label>
                                <div class="uk-form-controls">
                                    <input @focus="checkValidationRules" 
                                    :class="{'uk-input':true,'input-has-error': mothersjobError {{$errors->has('mothersjob') ? '|| true' : ''}}}" 
                                     id="student-mother-register-occupation"
                                    name="mothersjob" v-model="mothersjob"  type="text">
                                    <div v-if="mothersjobError  {{$errors->has('mothersjob') ? '|| true' : ''}}">
                                        @if($errors->has('mothersjob'))
                                            <span style="color:red">
                                                @foreach ($errors->get('mothersjob') as $error)
                                                    {{$error}}
                                                @endforeach
                                            </span>
                                        @else
                                            <span style="color:red" v-for="error in mothersjobErrorsMessage">@{{error}} . </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="uk-width-1-2@s">
                                <label class="uk-form-label" for="student-mother-register-phone"> تلفن همراه مادر:
                                </label>
                                <div class="uk-form-controls">
                                    <input @focus="checkValidationRules" 
                                    :class="{'uk-input':true,'input-has-error': mothersphoneError {{$errors->has('mothersphone') ? '|| true' : ''}}}" 
                                     id="student-mother-register-phone"
                                    name="mothersphone" v-model="mothersphone"  type="text">
                                    <div v-if="mothersphoneError  {{$errors->has('mothersphone') ? '|| true' : ''}}">
                                        @if($errors->has('mothersphone'))
                                            <span style="color:red">
                                                @foreach ($errors->get('mothersphone') as $error)
                                                    {{$error}}
                                                @endforeach
                                            </span>
                                        @else
                                            <span  style="color:red" v-for="error in mothersphoneErrorsMessage">@{{error}} . </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="uk-width-1-1">
                                <label class="uk-form-label" for="student-mother-register-workplace"> آدرس دقیق محل کار
                                    مادر: </label>
                                <div class="uk-form-controls">
                                    <input @focus="checkValidationRules" 
                                    :class="{'uk-input':true,'input-has-error': mothersjobaddressError {{$errors->has('mothersjobaddress') ? '|| true' : ''}}}" 
                                     id="student-mother-register-workplace"
                                    name="mothersjobaddress" v-model="mothersjobaddress"  type="text">
                                    <div v-if="mothersjobaddressError  {{$errors->has('mothersjobaddress') ? '|| true' : ''}}">
                                        @if($errors->has('mothersjobaddress'))
                                            <span style="color:red">
                                                @foreach ($errors->get('mothersjobaddress') as $error)
                                                    {{$error}}
                                                @endforeach
                                            </span>
                                        @else
                                            <span style="color:red" v-for="error in mothersjobaddressErrorsMessage">@{{error}} . </span>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="uk-margin-top uk-width-1-1">
                                <h5 class="uk-margin-top uk-heading-divider"> مشخصات خانواده </h5>
                            </div>
                            <div class="uk-width-1-3@s">
                                <label class="uk-form-label" for="student-family-members"> تعداد فرزندان: </label>
                                <div class="uk-form-controls">
                                    <input @focus="checkValidationRules" 
                                    :class="{'uk-input':true,'input-has-error': numberofchildrenError {{$errors->has('numberofchildren') ? '|| true' : ''}}}" 
                                     id="student-family-members"
                                    name="numberofchildren" v-model="numberofchildren"  type="text">
                                    <div v-if="numberofchildrenError  {{$errors->has('numberofchildren') ? '|| true' : ''}}">
                                        @if($errors->has('numberofchildren'))
                                            <span style="color:red">
                                                @foreach ($errors->get('numberofchildren') as $error)
                                                    {{$error}}
                                                @endforeach
                                            </span>
                                        @else
                                            <span style="color:red" v-for="error in numberofchildrenErrorsMessage">@{{error}} . </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="uk-width-1-3@s">
                                <label class="uk-form-label" for="student-family-brothers"> تعداد برادر: </label>
                                <div class="uk-form-controls">
                                    <input @focus="checkValidationRules" 
                                    :class="{'uk-input':true,'input-has-error': numberofbrothersError {{$errors->has('numberofbrothers') ? '|| true' : ''}}}" 
                                     id="student-family-brothers" 
                                    name="numberofbrothers" v-model="numberofbrothers" type="text">
                                    <div v-if="numberofbrothersError  {{$errors->has('numberofbrothers') ? '|| true' : ''}}">
                                        @if($errors->has('numberofbrothers'))
                                            <span style="color:red">
                                                @foreach ($errors->get('numberofbrothers') as $error)
                                                    {{$error}}
                                                @endforeach
                                            </span>
                                        @else
                                            <span style="color:red" v-for="error in numberofbrothersErrorsMessage">@{{error}} . </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="uk-width-1-3@s">
                                <label class="uk-form-label" for="student-family-sisters"> تعداد خواهر: </label>
                                <div class="uk-form-controls">
                                    <input @focus="checkValidationRules" 
                                    :class="{'uk-input':true,'input-has-error': numberofsistersError {{$errors->has('numberofsisters') ? '|| true' : ''}}}" 
                                     id="student-family-sisters"
                                    name="numberofsisters" v-model="numberofsisters"  type="text">
                                    <div v-if="numberofsistersError  {{$errors->has('numberofsisters') ? '|| true' : ''}}">
                                        @if($errors->has('numberofsisters'))
                                            <span style="color:red">
                                                @foreach ($errors->get('numberofsisters') as $error)
                                                    {{$error}}
                                                @endforeach
                                            </span>
                                        @else
                                            <span style="color:red" v-for="error in numberofsistersErrorsMessage">@{{error}} . </span>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="uk-margin-top uk-width-1-1">
                                <h5 class="uk-margin-top uk-heading-divider"> مشخصات محل سکونت: </h5>
                            </div>
                            <div class="uk-width-1-1">
                                <label class="uk-form-label" for="student-register-adress"> آدرس دقیق محل سکونت:
                                </label>
                                <div class="uk-form-controls">
                                    <input @focus="checkValidationRules" 
                                    :class="{'uk-input':true,'input-has-error': addressError {{$errors->has('address') ? '|| true' : ''}}}" 
                                     id="student-register-adress"
                                    name="address" v-model="address"   type="text">
                                    <div v-if="addressError  {{$errors->has('address') ? '|| true' : ''}}">
                                        @if($errors->has('address'))
                                            <span style="color:red">
                                                @foreach ($errors->get('address') as $error)
                                                    {{$error}}
                                                @endforeach
                                            </span>
                                        @else
                                            <span style="color:red" v-for="error in addressErrorsMessage">@{{error}} . </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="uk-width-1-3@s">
                                <label class="uk-form-label" for="student-register-tel"> تلفن منزل: </label>
                                <div class="uk-form-controls">
                                    <input @focus="checkValidationRules" 
                                    :class="{'uk-input':true,'input-has-error': homesphoneError {{$errors->has('homesphone') ? '|| true' : ''}}}" 
                                     id="student-register-tel" 
                                    name="homesphone" v-model="homesphone"  type="text">
                                    <div v-if="homesphoneError  {{$errors->has('homesphone') ? '|| true' : ''}}">
                                        @if($errors->has('homesphone'))
                                            <span style="color:red">
                                                @foreach ($errors->get('homesphone') as $error)
                                                    {{$error}}
                                                @endforeach
                                            </span>
                                        @else
                                            <span style="color:red" v-for="error in homesphoneErrorsMessage">@{{error}} . </span>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="uk-margin uk-width-1-1">
                                <div class="uk-container">
                                    <ul class="uk-list uk-list-disc">
                                        <li> لطفا در صورت تفییر آدرس و یا شماره تلفن منزل در اولین فرصت مدرسه را در
                                            جریان بگذارید </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="uk-width-1-1">
                                <label class="uk-form-label" for="student-register-postalcode"> کد پستی: </label>
                                <div class="uk-form-controls">
                                    <input @focus="checkValidationRules" 
                                    :class="{'uk-input':true,'input-has-error': postalcodeError {{$errors->has('postalcode') ? '|| true' : ''}}}" 
                                     id="student-register-postalcode" 
                                    name="postalcode" v-model="postalcode"  type="text"
                                        placeholder=" 10 رقم با دقت وارد شود ">
                                        <div v-if="postalcodeError  {{$errors->has('postalcode') ? '|| true' : ''}}">
                                            @if($errors->has('postalcode'))
                                                <span style="color:red">
                                                    @foreach ($errors->get('postalcode') as $error)
                                                        {{$error}}
                                                    @endforeach
                                                </span>
                                            @else
                                                <span style="color:red" v-for="error in postalcodeErrorsMessage">@{{error}} . </span>
                                            @endif
                                        </div>
                                </div>
                            </div>

                            <div class="uk-margin-top uk-width-1-1">
                                <hr class="uk-margin-large">
                            </div>

                            <div class="uk-width-1-1">
                                <label class="uk-form-label" for="student-info-question-1"> 1- سال گذشته فرزندتان در
                                    کدام مهد یا مدرسه مشغول تحصیل بوده است؟ </label>
                                <div class="uk-form-controls">
                                    <input @focus="checkValidationRules" 
                                    :class="{'uk-input':true,'input-has-error': exschoolError {{$errors->has('exschool') ? '|| true' : ''}}}" 
                                     id="student-info-question-1" 
                                    name="exschool" v-model="exschool"  type="text">
                                    <div v-if="exschoolError  {{$errors->has('exschool') ? '|| true' : ''}}">
                                        @if($errors->has('exschool'))
                                            <span style="color:red">
                                                @foreach ($errors->get('exschool') as $error)
                                                    {{$error}}
                                                @endforeach
                                            </span>
                                        @else
                                            <span style="color:red" v-for="error in exschoolErrorsMessage">@{{error}} . </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="uk-width-1-1">
                                <label class="uk-form-label" for="student-info-question-2"> 2- نحوه آشنایی شما با مدرسه
                                    چگونه بوده است؟ </label>
                                <div class="uk-form-controls">
                                    <input @focus="checkValidationRules" 
                                    :class="{'uk-input':true,'input-has-error': howfindusError {{$errors->has('howfindus') ? '|| true' : ''}}}" 
                                     id="student-info-question-2" 
                                    name="howfindus" v-model="howfindus"  type="text">
                                    <div v-if="howfindusError  {{$errors->has('howfindus') ? '|| true' : ''}}">
                                        @if($errors->has('howfindus'))
                                            <span style="color:red">
                                                @foreach ($errors->get('howfindus') as $error)
                                                    {{$error}}
                                                @endforeach
                                            </span>
                                        @else
                                            <span style="color:red" v-for="error in howfindusErrorsMessage">@{{error}} . </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="uk-width-1-1">
                                <label class="uk-form-label" for="student-info-question-3"> 3- فرزند شما در چه زمینه ای
                                    استعداد یا خلاقیت ویژه دارد؟ </label>
                                <div class="uk-form-controls">
                                    <input @focus="checkValidationRules" 
                                    :class="{'uk-input':true,'input-has-error': childtalentError {{$errors->has('childtalent') ? '|| true' : ''}}}" 
                                     id="student-info-question-3" 
                                    name="childtalent" v-model="childtalent"  type="text">
                                    <div v-if="childtalentError  {{$errors->has('childtalent') ? '|| true' : ''}}">
                                        @if($errors->has('childtalent'))
                                            <span style="color:red">
                                                @foreach ($errors->get('childtalent') as $error)
                                                    {{$error}}
                                                @endforeach
                                            </span>
                                        @else
                                            <span style="color:red" v-for="error in childtalentErrorsMessage">@{{error}} . </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="uk-width-1-1">
                                <label class="uk-form-label" for="student-info-question-4"> 4- آیا متقاضی استفاده از
                                    سرویس مدرسه هستید؟ </label>
                                <div class="uk-margin-top uk-form-controls">
                                    <label><input @focus="checkValidationRules" class="uk-radio" type="radio" name="student_service_bool" v-model="student_service_bool" value="true"> بلی
                                    </label>
                                    <label><input @focus="checkValidationRules" class="uk-radio uk-margin-right" type="radio"
                                            name="student_service_bool" v-model="student_service_bool" value="false"> خیر </label>
                                            <div v-if="student_service_boolError  {{$errors->has('student_service_bool') ? '|| true' : ''}}">
                                                @if($errors->has('student_service_bool'))
                                                    <span style="color:red">
                                                        @foreach ($errors->get('student_service_bool') as $error)
                                                            {{$error}}
                                                        @endforeach
                                                    </span>
                                                @else
                                                    <span style="color:red" v-for="error in student_service_boolErrorsMessage">@{{error}} . </span>
                                                @endif
                                            </div>
                                </div>
                            </div>

                            <div class="uk-margin-top uk-width-1-1">
                                <hr class="uk-margin-large">
                            </div>


                            <div class="uk-margin-top uk-width-1-1">
                                <h4 class="uk-margin-top uk-heading-divider"> * ویژه پیش دبستان </h4>
                            </div>
                            <div class="uk-width-1-1">
                                <label class="uk-form-label" for="preschool-student-shift"> تمایل به شرکت فرزندم در یکی
                                    از کلاس های زیر را دارم </label>
                                <div class="uk-margin-top uk-form-controls">
                                    <label><input @focus="checkValidationRules" class="uk-radio" type="radio" 
                                    value="morning" name="preschool_student_shift_bool" v-model="preschool_student_shift_bool"> صبح
                                    </label>
                                    <label><input @focus="checkValidationRules" class="uk-radio uk-margin-right" type="radio"
                                            name="preschool_student_shift_bool" v-model="preschool_student_shift_bool"
                                            value="afternoon"> عصر </label>
                                </div>
                            </div>

                            <div class="uk-margin-top uk-width-1-1">
                                <hr class="uk-margin-small">
                            </div>
                            <div class="uk-width-1-2@s">
                                <label class="uk-form-label" for="registeration-sign"> نام و نام خانوادگی تکمیل کننده
                                    فرم </label>
                                <div class="uk-form-controls">
                                    <input @focus="checkValidationRules" 
                                    :class="{'uk-input':true,'input-has-error': form_completerError {{$errors->has('form_completer') ? '|| true' : ''}}}" 
                                     id="registeration-sign" type="text"
                                        placeholder=" نام و نام خانوادگی " name="form_completer" v-model="form_completer"  >
                                        <div v-if="form_completerError  {{$errors->has('form_completer') ? '|| true' : ''}}">
                                            @if($errors->has('form_completer'))
                                                <span style="color:red">
                                                    @foreach ($errors->get('form_completer') as $error)
                                                        {{$error}}
                                                    @endforeach
                                                </span>
                                            @else
                                                <span style="color:red" v-for="error in form_completerErrorsMessage">@{{error}} . </span>
                                            @endif
                                        </div>
                                </div>
                            </div>
                            <div>

                            <input  type="submit" value="ارسال اطلاعات">
                            <button  @click="checkFields()"
                            type="button" >چک کردن درستی اطلاعات قبل از ارسال</button>
                            <div v-if="showCheckAlert">
                                <span style="color:red" v-if="!isFormValid"> بعضی فیلد ها دچار مشکل هستند , لطفا دوباره اطلاعات را چک کنید</span>
                                <span style="color:green" v-else>تمامی فیلد ها به درستی کامل شده اند </span>
                            </div>
                            </div>
                        </form>
                    </div> <!-- register form -->


                    <!-- more items add here -->

                </div> <!-- es-dashboard-content -->
            </div> <!-- uk-container -->
        </div> <!-- section -->
    </main> <!-- Main Content of the Pages goes here -->

</students-data-form>