<template>
    <div :class="tab.tab2?'tab-pane active':'tab-pane'" role="tabpanel" id="step2">
        <div class="loading" v-if="loader">Loading</div>
        <div class="row">

            <div class="col-md-12 col-sm-12 col-12">
                <div class="honor-code-main">
                    <div class="company-thumb">
                        <a href="#">
                            <img src="images/company.png" class="img-fluid" />
                            <p>{{ Language.honor_code}}</p>
                        </a>
                    </div>
                    <div class="honor-code-listing" v-html="code.value">
                        
                    </div>

                    <div class="accept-cancel">
                        <a href="javascript:void(0);" :class="is_code_accepted?'accept-btn active':'accept-btn'" @click="setHonorCodeAccepted(true)">{{ Language.accept}}</a>
                        <a href="javascript:void(0);" class="cancel-btn" @click="setHonorCodeAccepted(false)">{{ Language.cancel }}</a>
                    </div>
                </div>
            </div>

        </div>


        <div class="row">
            <div class="col-md-12 col-sm-12 col-12">
                <div class="next-button">
                    <button type="button"
                        class="default-btn next-step pull-right" @click="goToSignUpForm()">{{ Language.next}}
                        <i class="fa fa-arrow-right"
                            aria-hidden="true"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>    
</template>
<script>
    import {Language} from '../../../../helpers/lang/lang';
    import useAuth from '../../../../composables/auth';
    export default {
         props:{
             tab:Object,
             setTab:{type:Function}
         },
         data(){
            return {
                Language:Language,
                code:'',
                loader:false,
                is_code_accepted:false,
            }
         },
         mounted(){
             this.getHonorCode()
         },
         methods:{
            async getHonorCode(){
                const {code,getHonorCode} = useAuth();
                let ref = this
                ref.loader = true;
                try{
                    await getHonorCode(localStorage.getItem('user_type'))
                    ref.code = code
                    ref.loader = false
                }catch(e){
                    ref.loader = false
                }   
                 
            },
            setHonorCodeAccepted(val){
                this.is_code_accepted = val;
                if(!val){
                    this.setTab('tab1');
                }
                
            },
            goToSignUpForm(){
                if(this.is_code_accepted){
                    this.setTab('tab3');
                }
            }

         }
    }
</script>
