




<script>
export default {
    data: () => ({
        userType: "student", // type of user for handle auth tab
        formType: "login", // type of form for handle auth form tab
    }),
    methods: {
        toggleUserType(){
            if(this.userType == "teacher"){
                this.userType = "student"
            }else{
                this.userType = "teacher"
            }
        },
        toggleFormType(){
            if(this.formType == "register"){
                this.formType = "login"
            }else{
                this.formType = "register"
            }
        }
    },
    created() {

    }
}
</script>