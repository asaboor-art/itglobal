<template>
    <section class="signup-section">
            <div class="loading" v-if="loader">Loading</div>
            <div class="container">
                <div class="row">

                    <div class="col-md-12 col-sm-12 col-12">
                        <div class="join-logo">
                            <a href="/" ><img src="images/nav-logo.png" alt=""
                                    class="img-fluid" />
                            </a>
                        </div>
                        <div class="wizard-main">
                            <section class="signup-step-container">
                                <div class="container">
                                    <div class="row d-flex justify-content-center">
                                        <div class="col-md-8">
                                            <div class="wizard">
                                                <div class="wizard-inner">

                                                    <ul class="nav nav-tabs desktop-1" role="tablist">
                                                        <li role="presentation" :class="tabs.tab1?'active':'disabled'">
                                                            <a  data-toggle="tab" aria-controls="step1"
                                                                role="tab" aria-expanded="true" @click="setTab('tab1')">{{ Language.account_type}}</a>
                                                        </li>
                                                        <li role="presentation" :class="tabs.tab2?'active':'disabled'" >
                                                            <a  data-toggle="tab" aria-controls="step2"
                                                                role="tab" aria-expanded="false"  @click="setUserTypeToLocal('tab2')">{{ Language.honor_code }}</a>
                                                        </li>
                                                        <li role="presentation" :class="tabs.tab3?'active':'disabled'" >
                                                            <a  data-toggle="tab" aria-controls="step3"
                                                                role="tab">{{ Language.account_detail}}</a>
                                                        </li>

                                                    </ul>
                                                </div>

                                                <form class="login-box">
                                                    <div class="tab-content" id="main_form">
                                                        <user-type :tab="tabs" :setUserType="setUserType" :setUserTypeToLocal="setUserTypeToLocal" :userType="userType" v-if="tabs.tab1"/>
                                                        <honor-code :tab="tabs" v-if="tabs.tab2" :setTab="setTab"/>
                                                        <sign-up-form :tab="tabs" v-if="tabs.tab3"/>
                                                        <div class="clearfix"></div>
                                                    </div>

                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>



                </div>
            </div>
        </section>
</template>

<script>
    import UserType from './components/UserType.vue';
    import HonorCode from './components/HonorCode.vue';
    import SignUpForm from './components/SignUpForm.vue';
    import {Language} from '../../../helpers/lang/lang';
  export default {
     components:{
        UserType,
        HonorCode,
        SignUpForm,
     },
     data(){
        return {
            tabs:{
                tab1:true,
                tab2:false,
                tab3:false
            },
            loader:false,
            userType:0,
            Language:Language,

        }
     },
     mounted(){
        //  if(localStorage.getItem('user_type'))
        //     this.setTab('tab2');
     },
     methods:{
        setUserType(userType){
            this.userType = userType;
        },
        setTab(tab){

            this.tabs[tab] = true;
            let ref = this
            Object.keys(ref.tabs).filter(key => {
                if(key != tab)
                   ref.tabs[key] = false;
            });
        },
        async setUserTypeToLocal(tab){
            if(this.userType == 0){
                return
            }
            this.loader = true
            await localStorage.setItem('user_type',this.userType);
            await this.setTab(tab);
            this.loader = false
        }

     }
  }
</script>
