<template>
    <div :class="tab.tab1?'tab-pane active':'tab-pane'" role="tabpanel" id="step1">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-12">
                <div class="sign-buttons-main">
                    <div class="signup-buttons">

                        <a href="javascript:void(0)" @click="setUserType(3)" :class="userType == 3?'company-btn active':'company-btn'">{{ Language.user_type_msg.replace(':attribute',Language.company)}}
                        </a>
                    </div>
                    <div class="signup-buttons">
                        <a href="javascript:void(0)" @click="setUserType(2)" :class="userType == 2?'company-btn active':'company-btn'">{{ Language.user_type_msg.replace(':attribute',Language.innovator)}}</a>
                    </div>
                    <div class="signup-buttons already-reg">
                        <a href="/login" class="company-btn">{{ Language.login}}</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 col-sm-12 col-12">
                <div class="next-button">
                    <button type="button"
                        class="default-btn next-step pull-right" @click="setUserTypeToLocal('tab2')">{{ Language.next}}
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
export default {

    props:{
        tab:Object,
        setUserType:{type:Function},
        setUserTypeToLocal:{type:Function},
        userType:0
    },
    data(){
        return {
            Language:Language,
        }
    },
}
</script>
