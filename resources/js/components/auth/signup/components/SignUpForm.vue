<template>
    <form @submit.prevent="signUp()">
        <div :class="tab.tab3?'tab-pane active':'tab-pane'" role="tabpanel" id="step3">
            <div class="loading" v-if="loader">Loading</div>
            <div class="account-details-main">

                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-12" v-if="form.role_id == 2">
                            <div class="form-fields">
                                <input type="text" :class="errors.first_name?'form-control is-invalid ':'form-control'" name="first_name" :placeholder="Language.first_name" v-model="form.first_name">
                                <div v-if="errors.first_name">
                                    <ul>
                                        <li class="text-danger" v-for="(error,index) in errors.first_name" :key="index">{{ error }}</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-12" v-if="form.role_id == 2">
                            <div class="form-fields">
                                <input type="text" :class="errors.last_name?'form-control is-invalid ':'form-control'" name="last_name" :placeholder="Language.last_name" v-model="form.last_name">
                                <div v-if="errors.last_name">
                                    <ul>
                                        <li class="text-danger" v-for="(error,index) in errors.last_name" :key="index">{{ error }}</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-sm-12 col-12" v-else>
                            <div class="form-fields">
                                <input type="text" :class="errors.first_name?'form-control is-invalid ':'form-control'" name="first_name" :placeholder="Language.company_name" v-model="form.first_name">
                                <div v-if="errors.first_name">
                                    <ul>
                                        <li class="text-danger" v-for="(error,index) in errors.first_name" :key="index">{{ error }}</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-12">
                            <div class="form-fields">
                                <input type="text" name="username" :class="errors.username?'form-control is-invalid ':'form-control'" :placeholder="Language.username" v-model="form.username">
                                <div v-if="errors.username">
                                    <ul>
                                        <li class="text-danger" v-for="(error,index) in errors.username" :key="index">{{ error }}</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-12">
                            <div class="form-fields">
                                <div class="custom-file">
                                    <input type="email" name="email" :class="errors.email?'form-control is-invalid ':'form-control'" :placeholder="Language.email" v-model="form.email">
                                    <div v-if="errors.email">
                                        <ul>
                                            <li class="text-danger" v-for="(error,index) in errors.email" :key="index">{{ error }}</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-12">
                            <div class="form-fields">
                                <input :type="!show_password?'password':'text'" name="password" class='form-control' :placeholder="Language.password" v-model="form.password">
                                  <div class="pw-eye"><i :class="!show_password?'fa fa-eye':'fa fa-eye-slash'" @click="setShowPassword()"></i></div>
                                <div v-if="errors.password">
                                        <ul>
                                            <li class="text-danger" v-for="(error,index) in errors.password" :key="index">{{ error }}</li>
                                        </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-12">
                            <div class="form-fields">
                                <input :type="!show_con_pass?'password':'text'" name="password_confirmation" class="form-control" :placeholder="Language.confirm_password" v-model="form.password_confirmation">
                                <div class="pw-eye"><i :class="!show_con_pass?'fa fa-eye':'fa fa-eye-slash'" @click="setShowConPassword()"></i></div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-6" v-if="form.role_id == 2">
                            <div class="form-fields">
                                <Datepicker v-model="form.dob" :class="errors.dob?'is-invalid ':''" autoApply :enableTimePicker="false" menuClassName="dp-custom-date" placeholder="Enter Date Of Birth" textInput/>
                                <div v-if="errors.dob">
                                        <ul>
                                            <li class="text-danger" v-for="(error,index) in errors.dob" :key="index">{{ error }}</li>
                                        </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="javascript:void(0);" class="terms-text"><input type="checkbox" name="term_condition" v-model="term_cond" >{{ Language.privacy_policy_msg }}<span class='privacy-text'>Privacy and Policy</span></a>

            </div>
            <div class="row">
                    <div class="col-md-12 col-sm-12 col-12">
                        <div class="next-button">
                            <button type="submit"
                                class="default-btn next-step pull-right">{{ Language.next}}
                                <i class="fa fa-arrow-right"
                                    aria-hidden="true"></i>
                            </button>
                        </div>
                    </div>
            </div>
        </div>
    </form>
</template>
<script>
import {Language} from '../../../../helpers/lang/lang';
import useAuth from '../../../../composables/auth';
import useService  from '../../../../services/';
import Datepicker from '@vuepic/vue-datepicker';
import { ref } from 'vue';
export default {

    props:{
        tab:Object,
    },
    components:{
      Datepicker
    },
    data(){
        return {
            errors:{},
            Language:Language,
            form:{
                role_id:localStorage.getItem('user_type'),
                first_name:'',
                last_name:'',
                username:'',
                email:'',
                password:'',
                password_confirmation:'',
                term_cond:true,
                dob:null
            },
            show_password:false,
            show_con_pass:false,
            loader:false,


        }
    },
    methods:{
        async signUp(){
            const {signUp,errors} = useAuth();
            const {confirmAlert,errorAlert} = useService();
            if(!this.term_cond){
                errorAlert('Please accept our privacy policy')
                return
            }
            this.errors = {}
            this.loader = true;
            await signUp(this.form)

            if(errors){
                this.errors = errors
            }
            this.loader = false;

        },
        setShowPassword(){
            this.show_password = !this.show_password
        },
        setShowConPassword(){
            this.show_con_pass = !this.show_con_pass
        }
    }
}
</script>
