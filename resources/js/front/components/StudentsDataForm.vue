<script>
export default {
  props: ["oldValues"],
  data() {
    return {
      // Binding input
      firstname: "",
      lastname: "",
      email: "",
      fathersname: "",
      birthdate: "",
      studentsid: "",
      serialnumberid: "",
      issueplace: "",
      birthplace: "",
      fathersfirstname: "",
      fatherslastname: "",
      fathersfathersname: "",
      fathersbirthdate: "",
      fathersid: "",
      fathersnationalid: "",
      fathersserialnumberid: "",
      fathersissueplace: "",
      fathersbirthplace: "",
      fatherseducation: "",
      fathersjob: "",
      fathersphone: "",
      fathersjobaddress: "",
      mothersfirstname: "",
      motherslastname: "",
      mothersfathersname: "",
      mothersbirthdate: "",
      mothersid: "",
      mothersnationalid: "",
      mothersserialnumberid: "",
      mothersissueplace: "",
      mothersbirthplace: "",
      motherseducation: "",
      mothersjob: "",
      mothersphone: "",
      mothersjobaddress: "",
      numberofchildren: "",
      numberofbrothers: "",
      numberofsisters: "",
      address: "",
      homesphone: "",
      postalcode: "",
      exschool: "",
      howfindus: "",
      childtalent: "",
      form_completer: "",
      preschool_student_shift_bool: "",
      student_service_bool: "",
      // have we error or not
      firstnameError: false,
      lastnameError: false,
      emailError: false,
      fathersnameError: false,
      birthdateError: false,
      studentsidError: false,
      serialnumberidError: false,
      issueplaceError: false,
      birthplaceError: false,
      fathersfirstnameError: false,
      fatherslastnameError: false,
      fathersfathersnameError: false,
      fathersbirthdateError: false,
      fathersidError: false,
      fathersnationalidError: false,
      fathersserialnumberidError: false,
      fathersissueplaceError: false,
      fathersbirthplaceError: false,
      fatherseducationError: false,
      fathersjobError: false,
      fathersphoneError: false,
      fathersjobaddressError: false,
      mothersfirstnameError: false,
      motherslastnameError: false,
      mothersfathersnameError: false,
      mothersbirthdateError: false,
      mothersidError: false,
      mothersnationalidError: false,
      mothersserialnumberidError: false,
      mothersissueplaceError: false,
      mothersbirthplaceError: false,
      motherseducationError: false,
      mothersjobError: false,
      mothersphoneError: false,
      mothersjobaddressError: false,
      numberofchildrenError: false,
      numberofbrothersError: false,
      numberofsistersError: false,
      addressError: false,
      homesphoneError: false,
      postalcodeError: false,
      exschoolError: false,
      howfindusError: false,
      childtalentError: false,
      form_completerError: false,
      preschool_student_shift_boolError: false,
      student_service_boolError: false,

      // Error messages
      firstnameErrorsMessage: [],
      lastnameErrorsMessage: [],
      emailErrorsMessage: [],
      fathersnameErrorsMessage: [],
      birthdateErrorsMessage: [],
      studentsidErrorsMessage: [],
      serialnumberidErrorsMessage: [],
      issueplaceErrorsMessage: [],
      birthplaceErrorsMessage: [],
      fathersfirstnameErrorsMessage: [],
      fatherslastnameErrorsMessage: [],
      fathersfathersnameErrorsMessage: [],
      fathersbirthdateErrorsMessage: [],
      fathersidErrorsMessage: [],
      fathersnationalidErrorsMessage: [],
      fathersserialnumberidErrorsMessage: [],
      fathersissueplaceErrorsMessage: [],
      fathersbirthplaceErrorsMessage: [],
      fatherseducationErrorsMessage: [],
      fathersjobErrorsMessage: [],
      fathersphoneErrorsMessage: [],
      fathersjobaddressErrorsMessage: [],
      mothersfirstnameErrorsMessage: [],
      motherslastnameErrorsMessage: [],
      mothersfathersnameErrorsMessage: [],
      mothersbirthdateErrorsMessage: [],
      mothersidErrorsMessage: [],
      mothersnationalidErrorsMessage: [],
      mothersserialnumberidErrorsMessage: [],
      mothersissueplaceErrorsMessage: [],
      mothersbirthplaceErrorsMessage: [],
      motherseducationErrorsMessage: [],
      mothersjobErrorsMessage: [],
      mothersphoneErrorsMessage: [],
      mothersjobaddressErrorsMessage: [],
      numberofchildrenErrorsMessage: [],
      numberofbrothersErrorsMessage: [],
      numberofsistersErrorsMessage: [],
      addressErrorsMessage: [],
      homesphoneErrorsMessage: [],
      postalcodeErrorsMessage: [],
      exschoolErrorsMessage: [],
      howfindusErrorsMessage: [],
      childtalentErrorsMessage: [],
      form_completerErrorsMessage: [],
      preschool_student_shift_boolErrorsMessage: [],
      student_service_boolErrorsMessage: [],
      validationRules: {
        firstname: {
          required: "لطفا نام خود را وارد کنید"
        },
        lastname: {
          required: "لطفا نام خانوادگی خود را وارد کنید"
        },
        email: {
          required: "لطفا ایمیل خود را وارد کنید"
        },
        fathersname: {
          required: "لطفا نام پدر را وارد کنید"
        },
        birthdate: {
          required: "لطفا تاریخ تولد خود را وارد کنید"
        },
        studentsid: {
          required: "لطفا شماره شناسنامه را وارد کنید",
          numberOfCharacters: {
            message: "این فیلد باید 10 رقم باشد",
            charactersNumber: 10
          }
        },
        serialnumberid: {
          required: "لطفا سریال شناسنامه را وارد کنید"
        },
        issueplace: {
          required: "لطفا محل صدور را وارد کنید"
        },
        birthplace: {
          required: "لطفا محل تولد را وارد کنید"
        },
        fathersfirstname: {
          required: "لطفا اسم پدر را وارد کنید"
        },
        fatherslastname: {
          required: "لطفا نام خانوادگی پدر را وارد کنید"
        },
        fathersfathersname: {
          required: "لطفا نام پدرِ پدرِ دانش آموز را وارد کنید"
        },
        fathersbirthdate: {
          required: "لطفا تاریخ تولد پدر را وارد کنید"
        },
        fathersid: {
          required: "لطفا شماره شناسنامه پدر را وارد کنید"
        },
        fathersnationalid: {
          required: "لطفا کد ملی پدر را وارد کنید",
          numberOfCharacters: {
            message: "این فیلد باید 10 رقم باشد",
            charactersNumber: 10
          }
        },
        fathersserialnumberid: {
          required: "لطفا سریال شناسنامه پدر را وارد کنید"
        },
        fathersissueplace: {
          required: "لطفا محل صدور شناسنامه پدر را وارد کنید"
        },
        fathersbirthplace: {
          required: "لطفا محل تولد پدر را وارد کنید"
        },
        fatherseducation: {
          required: "لطفا میزان تحصیلات پدر را وارد کنید"
        },
        fathersjob: {
          required: "لطفا شغل پدر را وارد کنید"
        },
        fathersphone: {
          required: "لطفا شماره تلفن پدر را وارد کنید"
        },
        fathersjobaddress: {
          required: "لطفا آدرس محل کار پدر را وارد کنید"
        },
        mothersfirstname: {
          required: "لطفا اسم مادر را وارد کنید"
        },
        motherslastname: {
          required: "لطفا نام خانوادگی مادر را وارد کنید"
        },
        mothersfathersname: {
          required: "لطفا نام پدرِ مادرِ دانش آموز را وارد کنید"
        },
        mothersbirthdate: {
          required: "لطفا تاریخ تولد مادر را وارد کنید"
        },
        mothersid: {
          required: "لطفا شماره شناسنامه مادر را وارد کنید"
        },
        mothersnationalid: {
          required: "لطفا کد ملی مادر را وارد کنید",
          numberOfCharacters: {
            message: "این فیلد باید 10 رقم باشد",
            charactersNumber: 10
          }
        },
        mothersserialnumberid: {
          required: "لطفا سریال شناسنامه مادر را وارد کنید"
        },
        mothersissueplace: {
          required: "لطفا محل صدور شناسنامه مادر را وارد کنید"
        },
        mothersbirthplace: {
          required: "لطفا محل تولد مادر را وارد کنید"
        },
        motherseducation: {
          required: "لطفا میزان تحصیلات مادر را وارد کنید"
        },
        mothersjob: {
          required: "لطفا شغل مادر را وارد کنید"
        },
        mothersphone: {
          required: "لطفا شماره تلفن مادر را وارد کنید"
        },
        mothersjobaddress: {
          required: "لطفا آدرس محل کار مادر را وارد کنید"
        },
        numberofchildren: {
          required: "لطفا تعداد فرزندان را وارد کنید"
        },
        numberofbrothers: {
          required: "لطفا تعداد برادرانِ دانش آموز را وارد کنید"
        },
        numberofsisters: {
          required: "لطفا تعداد خواهرانِ دانش آموز را وارد کنید"
        },
        address: {
          required: "لطفا آدرس را وارد کنید"
        },
        homesphone: {
          required: "لطفا شماره تلفن را وارد کنید"
        },
        postalcode: {
          required: "لطفا کد پستی را وارد کنید"
        },
        howfindus: {
          required: "لطفا به سوال بالا پاسخ دهید"
        },
        childtalent: {
          required: "لطفا به سوال بالا پاسخ دهید"
        },
        form_completer: {
          required: "لطفا به سوال بالا پاسخ دهید"
        }
      }
    };
  },
  created() {
    const thisClass = this;
    if (this.oldValues) {
      Object.assign(this.$data, this.oldValues);
    }
  },
  watch: {
    firstname() {
      this.validation("firstname");
    },
    lastname() {
      this.validation("lastname");
    },
    email() {
      this.validation("email");
    },
    fathersname() {
      this.validation("fathersname");
    },
    birthdate() {
      this.validation("birthdate");
    },
    studentsid() {
      this.validation("studentsid");
    },
    serialnumberid() {
      this.validation("serialnumberid");
    },
    issueplace() {
      this.validation("issueplace");
    },
    birthplace() {
      this.validation("birthplace");
    },
    fathersfirstname() {
      this.validation("fathersfirstname");
    },
    fatherslastname() {
      this.validation("fatherslastname");
    },
    fathersfathersname() {
      this.validation("fathersfathersname");
    },
    fathersbirthdate() {
      this.validation("fathersbirthdate");
    },
    fathersid() {
      this.validation("fathersid");
    },
    fathersnationalid() {
      this.validation("fathersnationalid");
    },
    fathersserialnumberid() {
      this.validation("fathersserialnumberid");
    },
    fathersissueplace() {
      this.validation("fathersissueplace");
    },
    fathersbirthplace() {
      this.validation("fathersbirthplace");
    },
    fatherseducation() {
      this.validation("fatherseducation");
    },
    fathersjob() {
      this.validation("fathersjob");
    },
    fathersphone() {
      this.validation("fathersphone");
    },
    fathersjobaddress() {
      this.validation("fathersjobaddress");
    },
    mothersfirstname() {
      this.validation("mothersfirstname");
    },
    motherslastname() {
      this.validation("motherslastname");
    },
    mothersfathersname() {
      this.validation("mothersfathersname");
    },
    mothersbirthdate() {
      this.validation("mothersbirthdate");
    },
    mothersid() {
      this.validation("mothersid");
    },
    mothersnationalid() {
      this.validation("mothersnationalid");
    },
    mothersserialnumberid() {
      this.validation("mothersserialnumberid");
    },
    mothersissueplace() {
      this.validation("mothersissueplace");
    },
    mothersbirthplace() {
      this.validation("mothersbirthplace");
    },
    motherseducation() {
      this.validation("motherseducation");
    },
    mothersjob() {
      this.validation("mothersjob");
    },
    mothersphone() {
      this.validation("mothersphone");
    },
    mothersjobaddress() {
      this.validation("mothersjobaddress");
    },
    numberofchildren() {
      this.validation("numberofchildren");
    },
    numberofbrothers() {
      this.validation("numberofbrothers");
    },
    numberofsisters() {
      this.validation("numberofsisters");
    },
    address() {
      this.validation("address");
    },
    homesphone() {
      this.validation("homesphone");
    },
    postalcode() {
      this.validation("postalcode");
    },
    howfindus() {
      this.validation("howfindus");
    },
    childtalent() {
      this.validation("childtalent");
    },
    form_completer() {
      this.validation("form_completer");
    },
    student_service_bool() {
      this.checkRadioSelected(
        "student_service_bool",
        "لطفا یکی از گزینه ها را انتخاب نمایید"
      );
    }
  },
  methods: {
    formSubmitted() {
      const thisClass = this;
      Object.values(document.getElementsByTagName("input")).map(element => {
        thisClass.validation(element.name);
        this.hasError(element.name);
      });
      this.checkRadioSelected(
        "student_service_bool",
        "لطفا یکی از گزینه ها را انتخاب نمایید"
      );
    },
    checkRadioSelected(ruleName, message) {
      let checkAllRadios = [];
      let errorName = ruleName + `Error`;
      let errorsMessage = ruleName + `ErrorsMessage`;
      Object.values(document.getElementsByName(ruleName)).forEach(element => {
        if (element.checked) {
          checkAllRadios.push(true);
        } else {
          checkAllRadios.push(false);
        }
      });
      if (checkAllRadios.includes(true)) {
        this.$data[errorsMessage].splice(
          this.$data[errorsMessage].indexOf(message),
          1
        );
        return;
      } else {
        this.$data[errorName] = true;
        if (this.$data[errorsMessage].indexOf(message) <= -1) {
          this.$data[errorsMessage].push(message);
        }
      }
    },
    checkValidationRules(element) {
      this.validation(element.target.name);
    },
    hasError(ruleName) {
      let errorName = ruleName + "Error";
      let errorMessage = ruleName + "ErrorsMessage";
      if (
        this.validationRules[ruleName] == undefined ||
        this.validationRules[ruleName] == ""
      ) {
        return;
      }
      if (this.$data[errorMessage].length) {
        this.$data[errorName] = true;
      } else {
        this.$data[errorName] = false;
      }
    },
    validation(ruleName) {
      const thisClass = this;
      if (!this.validationRules.hasOwnProperty(ruleName)) {
        return;
      }
      if (this.validationRules[ruleName].hasOwnProperty("numberOfCharacters")) {
        let errorsMessage = ruleName + `ErrorsMessage`;
        let message = this.$data.validationRules[ruleName].numberOfCharacters
          .message;
        let charactersNumber = this.$data.validationRules[ruleName]
          .numberOfCharacters.charactersNumber;
        if (this.$data[ruleName].length !== charactersNumber) {
          if (thisClass.$data[errorsMessage].indexOf(message) <= -1) {
            this.$data[errorsMessage].push(message);
          }
        } else {
          this.$data[errorsMessage].map(function(error) {
            if (error == message) {
              thisClass.$data[errorsMessage].splice(
                thisClass.$data[errorsMessage].indexOf(error),
                1
              );
            }
          });
        }
      }
      if (this.validationRules[ruleName].hasOwnProperty("required")) {
        let errorsMessage = ruleName + `ErrorsMessage`;
        let message = this.$data.validationRules[ruleName].required;
        if (this.$data[ruleName] == null || this.$data[ruleName] == "") {
          if (thisClass.$data[errorsMessage].indexOf(message) <= -1) {
            this.$data[errorsMessage].push(message);
          }
        } else {
          this.$data[errorsMessage].map(function(error) {
            if (error == message) {
              thisClass.$data[errorsMessage].splice(
                thisClass.$data[errorsMessage].indexOf(error),
                1
              );
            }
          });
        }
      }
      this.hasError(ruleName);
    }
  }
};
</script>