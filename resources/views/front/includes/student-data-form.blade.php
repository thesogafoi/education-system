<main class="">
        <div class="uk-section uk-section-default">
            <div class="uk-container uk-container-small uk-position-relative">
                <div class="es-dashboard-header">
                    <div class="es-dashboard-title">
                        <h3 class="es-welcome"> <span class="es-user-lastname"> لیلا </span> <span
                                class="es-user-lastname"> حاتمی </span> عزیز خوش آمدید </h3>
                        <ul class="uk-breadcrumb">
                            <li><a href="#"> خانه </a></li>
                        </ul> <!-- breadcrumb nav -->
                    </div> <!-- header content -->
                </div> <!-- dashboard header info -->
                <div class="es-dashboard-content">
                    <div class="es-dashboard-alertbox">
                        <div class="uk-alert-success" uk-alert>
                            <p> ثبت نام شما در سیستم مدرسه با موفقیت به پایان رسید، در صورت نیاز با شما تماس گرفته خواهد
                                شد </p>
                            <a class="uk-alert-close" uk-close></a>
                        </div> <!-- succes alert -->
                        <div class="uk-alert-danger" uk-alert>
                            <p> دانش آموز عزیز ، برای تکمیل روند ثبت نام نیاز است فرم زیر را تکمیل نمایید </p>
                            <a class="uk-alert-close" uk-close></a>
                        </div> <!-- danger alert -->
                        <div class="uk-alert-danger" uk-alert>
                            <p> دانش آموز عزیز ، فرم ثبت نام شما در انتظار تأیید مدیریت می باشد </p>
                        </div> <!-- danger alert -->
                    </div> <!-- alertbox -->

                    <div class="es-student-initial-registerform">
                        <legend class="uk-legend"> فرم ثبت نام در سیستم مدرسه </legend>
                        <h6 class="uk-margin uk-heading-divider"> فرم شماره 1 </h6>

                        <form class="uk-grid-small" uk-grid>

                            <div class="uk-width-1-3@s">
                                <label class="uk-form-label" for="date-of-register"> تاریخ تمکیل فرم </label>
                                <div class="uk-form-controls">
                                    <input class="uk-input" id="date-of-register" type="text"
                                        placeholder="روز / ماه / سال">
                                </div>
                            </div>
                            <div class="uk-width-1-3@s">
                                <label class="uk-form-label" for="student-register-grade"> پایه </label>
                                <div class="uk-form-controls">
                                    <input class="uk-input" id="student-register-grade" type="text" placeholder="اول">
                                </div>
                            </div>
                            <div class="uk-width-1-3@s">
                                <label class="uk-form-label" for="student-exam-date"> تاریخ آزمون </label>
                                <div class="uk-form-controls">
                                    <input class="uk-input" id="student-exam-date" type="text"
                                        placeholder="روز / ماه / سال">
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
                                    <input class="uk-input" id="student-register-name" 
                                    type="text" name="firstname" value="{{old('firstname')}}">
                                </div>
                            </div>
                            <div class="uk-width-1-2@s">
                                <label class="uk-form-label" for="student-register-lname"> نام خانوادگی: </label>
                                <div class="uk-form-controls">
                                    <input class="uk-input" id="student-register-lname" 
                                    type="text" name="lastname" value="{{old('lastname')}}">
                                </div>
                            </div>
                            <div class="uk-width-1-2@s">
                                <label class="uk-form-label" for="student-register-fathername"> نام پدر: </label>
                                <div class="uk-form-controls">
                                    <input class="uk-input" id="student-register-fathername" 
                                    type="text" name="fathersname" value="{{old('fathersname')}}">
                                </div>
                            </div>
                            <div class="uk-width-1-2@s">
                                <label class="uk-form-label" for="student-register-birth"> تاریخ تولد: </label>
                                <div class="uk-form-controls">
                                    <input class="uk-input" id="student-register-birth" type="text"
                                        placeholder="روز / ماه / سال" name="birthdate" value="{{old('birthdate')}}">
                                </div>
                            </div>
                            <div class="uk-width-1-1">
                                <label class="uk-form-label" for="student-register-idnumber"> شماره شناسنامه: </label>
                                <div class="uk-form-controls">
                                    <input class="uk-input" id="student-register-idnumber" type="text"
                                        name="id" value="{{old('id')}}"
                                        placeholder=" 10 رقم با دقت وارد شود ">
                                </div>
                            </div>
                            <div class="uk-width-1-3@s">
                                <label class="uk-form-label" for="student-register-id-serial"> سریال شناسنامه: </label>
                                <div class="uk-form-controls">
                                    <input class="uk-input" id="student-register-id-serial" 
                                    name="serialnumberid" value="{{old('serialnumberid')}}" type="text">
                                </div>
                            </div>
                            <div class="uk-width-1-3@s">
                                <label class="uk-form-label" for="student-register-id-release"> محل صدور: </label>
                                <div class="uk-form-controls">
                                    <input class="uk-input" id="student-register-id-release"
                                    name="issueplace" value="{{old('issueplace')}}" type="text">
                                </div>
                            </div>
                            <div class="uk-width-1-3@s">
                                <label class="uk-form-label" for="student-register-id-birthplace"> محل تولد: </label>
                                <div class="uk-form-controls">
                                    <input class="uk-input" id="student-register-id-birthplace" 
                                    name="birthplace" value="{{old('birthplace')}}" type="text">
                                </div>
                            </div>

                            <div class="uk-margin-top uk-width-1-1">
                                <h5 class="uk-margin-top uk-heading-divider"> مشخصات پدر دانش آموز </h5>
                            </div>
                            <div class="uk-width-1-2@s">
                                <label class="uk-form-label" for="student-father-register-name"> نام: </label>
                                <div class="uk-form-controls">
                                    <input class="uk-input" id="student-father-register-name" 
                                    name="fatherfirstname" value="{{old('fatherfirstname')}}" type="text">
                                </div>
                            </div>
                            <div class="uk-width-1-2@s">
                                <label class="uk-form-label" for="student-father-register-lname"> نام خانوادگی: </label>
                                <div class="uk-form-controls">
                                    <input class="uk-input" id="student-father-register-lname" 
                                    name="fatherslastname" value="{{old('fatherslastname')}}" type="text">
                                </div>
                            </div>
                            <div class="uk-width-1-2@s">
                                <label class="uk-form-label" for="student-father-register-fname"> نام پدر: </label>
                                <div class="uk-form-controls">
                                    <input class="uk-input" id="student-father-register-fname" 
                                    name="fathersfathersname" value="{{old('fathersfathersname')}}" type="text">
                                </div>
                            </div>
                            <div class="uk-width-1-2@s">
                                <label class="uk-form-label" for="student-father-register-birth"> تاریخ تولد: </label>
                                <div class="uk-form-controls">
                                    <input class="uk-input" id="student-father-register-birth" type="text"
                                        placeholder="روز / ماه / سال"
                                        name="fathersbirthdate" value="{{old('fathersbirthdate')}}" >
                                </div>
                            </div>
                            <div class="uk-width-1-1">
                                <label class="uk-form-label" for="student-father-register-idnumber"> شماره شناسنامه:
                                </label>
                                <div class="uk-form-controls">
                                    <input class="uk-input" id="student-father-register-idnumber" 
                                    name="fathersid" value="{{old('fathersid')}}"type="text">
                                </div>
                            </div>
                            <div class="uk-width-1-1">
                                <label class="uk-form-label" for="student-father-register-idnumber-national"> کد ملی:
                                </label>
                                <div class="uk-form-controls">
                                    <input class="uk-input" id="student-father-register-idnumber-national" type="text"
                                        placeholder=" 10 رقم با دقت وارد شود "
                                        name="fathersnationalid" value="{{old('fathersnationalid')}}">
                                </div>
                            </div>
                            <div class="uk-width-1-3@s">
                                <label class="uk-form-label" for="student-father-register-id-serial"> سریال شناسنامه:
                                </label>
                                <div class="uk-form-controls">
                                    <input class="uk-input" id="student-father-register-id-serial" 
                                    name="fathersserialnumberid" value="{{old('fathersserialnumberid')}}"type="text">
                                </div>
                            </div>
                            <div class="uk-width-1-3@s">
                                <label class="uk-form-label" for="student-father-register-id-release"> محل صدور:
                                </label>
                                <div class="uk-form-controls">
                                    <input class="uk-input" id="student-father-register-id-release" 
                                    name="fathersissueplace" value="{{old('fathersissueplace')}}" type="text">
                                </div>
                            </div>
                            <div class="uk-width-1-3@s">
                                <label class="uk-form-label" for="student-father-register-id-birthplace"> محل تولد:
                                </label>
                                <div class="uk-form-controls">
                                    <input class="uk-input" id="student-father-register-id-birthplace"
                                    name="fathersbirthplace" value="{{old('fathersbirthplace')}}" type="text">
                                </div>
                            </div>
                            <div class="uk-width-1-2@s">
                                <label class="uk-form-label" for="student-father-register-degree"> میزان تحصیلات پدر:
                                </label>
                                <div class="uk-form-controls">
                                    <input class="uk-input" id="student-father-register-degree"
                                    name="fatherseducation" value="{{old('fatherseducation')}}" type="text">
                                </div>
                            </div>
                            <div class="uk-width-1-2@s">
                                <label class="uk-form-label" for="student-father-register-occupation"> شغل پدر به طور
                                    مشخص: </label>
                                <div class="uk-form-controls">
                                    <input class="uk-input" id="student-father-register-occupation" 
                                    name="fathersjob" value="{{old('fathersjob')}}" type="text">
                                </div>
                            </div>
                            <div class="uk-width-1-2@s">
                                <label class="uk-form-label" for="student-father-register-phone"> تلفن همراه پدر:
                                </label>
                                <div class="uk-form-controls">
                                    <input class="uk-input" id="student-father-register-phone" 
                                    name="fathersphone" value="{{old('fathersphone')}}" type="text">
                                </div>
                            </div>
                            <div class="uk-width-1-1">
                                <label class="uk-form-label" for="student-father-register-workplace"> آدرس دقیق محل کار
                                    پدر: </label>
                                <div class="uk-form-controls">
                                    <input class="uk-input" id="student-father-register-workplace" 
                                    name="fathersjobsaddress" value="{{old('fathersjobsaddress')}}" type="text">
                                </div>
                            </div>

                            <div class="uk-margin-top uk-width-1-1">
                                <h5 class="uk-margin-top uk-heading-divider"> مشخصات مادر دانش آموز </h5>
                            </div>
                            <div class="uk-width-1-2@s">
                                <label class="uk-form-label" for="student-mother-register-name"> نام مادر: </label>
                                <div class="uk-form-controls">
                                    <input class="uk-input" id="student-mother-register-name"
                                    name="mothersfirstname" value="{{old('mothersfirstname')}}" type="text">
                                </div>
                            </div>
                            <div class="uk-width-1-2@s">
                                <label class="uk-form-label" for="student-mother-register-lname"> نام خانوادگی مادر:
                                </label>
                                <div class="uk-form-controls">
                                    <input class="uk-input" id="student-mother-register-lname" 
                                    name="motherslastname" value="{{old('motherslastname')}}" type="text">
                                </div>
                            </div>
                            <div class="uk-width-1-2@s">
                                <label class="uk-form-label" for="student-mother-register-fname"> نام پدر: </label>
                                <div class="uk-form-controls">
                                    <input class="uk-input" id="student-mother-register-fname" 
                                    name="mothersfathersname" value="{{old('mothersfathersname')}}" type="text">
                                </div>
                            </div>
                            <div class="uk-width-1-2@s">
                                <label class="uk-form-label" for="student-mother-register-birth"> تاریخ تولد: </label>
                                <div class="uk-form-controls">
                                    <input class="uk-input" id="student-mother-register-birth" type="text"
                                        placeholder="روز / ماه / سال" 
                                        name="mothersbirthdate" value="{{old('mothersbirthdate')}}">
                                </div>
                            </div>
                            <div class="uk-width-1-1">
                                <label class="uk-form-label" for="student-mother-register-idnumber"> شماره شناسنامه:
                                </label>
                                <div class="uk-form-controls">
                                    <input class="uk-input" id="student-mother-register-idnumber"
                                    name="mothersid" value="{{old('mothersid')}}" type="text">
                                </div>
                            </div>
                            <div class="uk-width-1-1">
                                <label class="uk-form-label" for="student-mother-register-idnumber-national"> کد ملی:
                                </label>
                                <div class="uk-form-controls">
                                    <input class="uk-input" id="student-mother-register-idnumber-national"
                                    name="mothersnationalid" value="{{old('mothersnationalid')}}" type="text"
                                        placeholder=" 10 رقم با دقت وارد شود ">
                                </div>
                            </div>
                            <div class="uk-width-1-3@s">
                                <label class="uk-form-label" for="student-mother-register-id-serial"> سریال شناسنامه:
                                </label>
                                <div class="uk-form-controls">
                                    <input class="uk-input" id="student-mother-register-id-serial"
                                    name="mothersserialnumberid" value="{{old('mothersserialnumberid')}}" type="text">
                                </div>
                            </div>
                            <div class="uk-width-1-3@s">
                                <label class="uk-form-label" for="student-mother-register-id-release"> محل صدور:
                                </label>
                                <div class="uk-form-controls">
                                    <input class="uk-input" id="student-mother-register-id-release"
                                    name="mothersissueplace" value="{{old('mothersissueplace')}}" type="text">
                                </div>
                            </div>
                            <div class="uk-width-1-3@s">
                                <label class="uk-form-label" for="student-mother-register-id-birthplace"> محل تولد:
                                </label>
                                <div class="uk-form-controls">
                                    <input class="uk-input" id="student-mother-register-id-birthplace"
                                    name="mothersbirthplace" value="{{old('mothersbirthplace')}}" type="text">
                                </div>
                            </div>
                            <div class="uk-width-1-2@s">
                                <label class="uk-form-label" for="student-mother-register-degree"> میزان تحصیلات مادر:
                                </label>
                                <div class="uk-form-controls">
                                    <input class="uk-input" id="student-mother-register-degree"
                                    name="motherseducation" value="{{old('motherseducation')}}" type="text">
                                </div>
                            </div>
                            <div class="uk-width-1-2@s">
                                <label class="uk-form-label" for="student-mother-register-occupation"> شغل مادر به طور
                                    مشخص: </label>
                                <div class="uk-form-controls">
                                    <input class="uk-input" id="student-mother-register-occupation"
                                    name="mothersjob" value="{{old('mothersjob')}}" type="text">
                                </div>
                            </div>
                            <div class="uk-width-1-2@s">
                                <label class="uk-form-label" for="student-mother-register-phone"> تلفن همراه مادر:
                                </label>
                                <div class="uk-form-controls">
                                    <input class="uk-input" id="student-mother-register-phone"
                                    name="mothersphone" value="{{old('mothersphone')}}" type="text">
                                </div>
                            </div>
                            <div class="uk-width-1-1">
                                <label class="uk-form-label" for="student-mother-register-workplace"> آدرس دقیق محل کار
                                    مادر: </label>
                                <div class="uk-form-controls">
                                    <input class="uk-input" id="student-mother-register-workplace"
                                    name="mothersjobsaddress" value="{{old('mothersjobsaddress')}}" type="text">
                                </div>
                            </div>

                            <div class="uk-margin-top uk-width-1-1">
                                <h5 class="uk-margin-top uk-heading-divider"> مشخصات خانواده </h5>
                            </div>
                            <div class="uk-width-1-3@s">
                                <label class="uk-form-label" for="student-family-members"> تعداد فرزندان: </label>
                                <div class="uk-form-controls">
                                    <input class="uk-input" id="student-family-members"
                                    name="numberofchildren" value="{{old('numberofchildren')}}" type="text">
                                </div>
                            </div>
                            <div class="uk-width-1-3@s">
                                <label class="uk-form-label" for="student-family-brothers"> تعداد برادر: </label>
                                <div class="uk-form-controls">
                                    <input class="uk-input" id="student-family-brothers" 
                                    name="numberofbrothers" value="{{old('numberofbrothers')}}"type="text">
                                </div>
                            </div>
                            <div class="uk-width-1-3@s">
                                <label class="uk-form-label" for="student-family-sisters"> تعداد خواهر: </label>
                                <div class="uk-form-controls">
                                    <input class="uk-input" id="student-family-sisters"
                                    name="numberofsisters" value="{{old('numberofsisters')}}" type="text">
                                </div>
                            </div>

                            <div class="uk-margin-top uk-width-1-1">
                                <h5 class="uk-margin-top uk-heading-divider"> مشخصات محل سکونت: </h5>
                            </div>
                            <div class="uk-width-1-1">
                                <label class="uk-form-label" for="student-register-adress"> آدرس دقیق محل سکونت:
                                </label>
                                <div class="uk-form-controls">
                                    <input class="uk-input" id="student-register-adress"
                                    name="address" value="{{old('address')}}"  type="text">
                                </div>
                            </div>
                            <div class="uk-width-1-3@s">
                                <label class="uk-form-label" for="student-register-tel"> تلفن منزل: </label>
                                <div class="uk-form-controls">
                                    <input class="uk-input" id="student-register-tel" 
                                    name="homesphone" value="{{old('homesphone')}}" type="text">
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
                                    <input class="uk-input" id="student-register-postalcode" 
                                    name="postalcode" value="{{old('postalcode')}}" type="text"
                                        placeholder=" 10 رقم با دقت وارد شود ">
                                </div>
                            </div>

                            <div class="uk-margin-top uk-width-1-1">
                                <hr class="uk-margin-large">
                            </div>

                            <div class="uk-width-1-1">
                                <label class="uk-form-label" for="student-info-question-1"> 1- سال گذشته فرزندتان در
                                    کدام مهد یا مدرسه مشغول تحصیل بوده است؟ </label>
                                <div class="uk-form-controls">
                                    <input class="uk-input" id="student-info-question-1" 
                                    name="exschool" value="{{old('exschool')}}" type="text">
                                </div>
                            </div>
                            <div class="uk-width-1-1">
                                <label class="uk-form-label" for="student-info-question-2"> 2- نحوه آشنایی شما با مدرسه
                                    چگونه بوده است؟ </label>
                                <div class="uk-form-controls">
                                    <input class="uk-input" id="student-info-question-2" 
                                    name="howfindus" value="{{old('howfindus')}}" type="text">
                                </div>
                            </div>
                            <div class="uk-width-1-1">
                                <label class="uk-form-label" for="student-info-question-3"> 3- فرزند شما در چه زمینه ای
                                    استعداد یا خلاقیت ویژه دارد؟ </label>
                                <div class="uk-form-controls">
                                    <input class="uk-input" id="student-info-question-3" 
                                    name="childtalent" value="{{old('childtalent')}}" type="text">
                                </div>
                            </div>
                            <div class="uk-width-1-1">
                                <label class="uk-form-label" for="student-info-question-4"> 4- آیا متقاضی استفاده از
                                    سرویس مدرسه هستید؟ </label>
                                <div class="uk-margin-top uk-form-controls">
                                    <label><input class="uk-radio" type="radio" name="student-service-bool" value="true"> بلی
                                    </label>
                                    <label><input class="uk-radio uk-margin-right" type="radio"
                                            name="student-service-bool" value="false"> خیر </label>
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
                                    <label><input class="uk-radio" type="radio" 
                                    value="morning" name="preschool-student-shift-bool"> صبح
                                    </label>
                                    <label><input class="uk-radio uk-margin-right" type="radio"
                                            name="preschool-student-shift-bool"
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
                                    <input class="uk-input" id="registeration-sign" type="text"
                                        placeholder=" نام و نام خانوادگی " name="form-completer" 
                                        value="{{old('form-completer')}}">
                                </div>
                            </div>

                        </form>
                    </div> <!-- register form -->


                    <!-- more items add here -->

                </div> <!-- es-dashboard-content -->
            </div> <!-- uk-container -->
        </div> <!-- section -->

        
    </main> <!-- Main Content of the Pages goes here -->