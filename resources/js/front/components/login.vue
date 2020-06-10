




<script>
export default {
    data: () => ({
        userType: "student", // type of user for handle auth tab
        formType: "login", // type of form for handle auth form tab
    }),
    methods: {
        toggleUserType(value){
            this.userType = value;
            
        },
        toggleFormType(value){
            this.formType = value;
        }
    },
    created() {

    }
}
</script>