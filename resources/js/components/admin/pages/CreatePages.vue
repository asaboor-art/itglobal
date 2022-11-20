<template>

        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>{{ Lang.create_msg.replace(':attribute',Lang.page) }}</h1>
                </div>
                <!-- <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#"></a></li>
                    <li class="breadcrumb-item active">User Profile</li>
                    </ol>
                </div> -->
                </div>
            </div>
        </section>
        <!-- Main content -->
        <div class="loading" v-if="loader">Loading</div>
        <section class="content" v-else>

        <!-- Default box -->
        <div class="card card-secondary card-outline">
            
            <div class="card-body">
                <Form :fields="FormFields" :data="FormData" :action="store" :name="name" :errors="errors"/>
            </div>

            <!-- /.card-body -->
        </div>
        <!-- /.card -->
        
        </section>
</template>
<script>
import {Language} from '../../../helpers/lang/lang';
import Form from '../../commons/Form.vue';
import usePages from '../../../composables/pages';
import useService  from '../../../services/index';
export default {
    components:{
        Form,
    },
    data(){
        return {
            Lang:Language,
            loader:false,
            errors:{},
            FormFields:[
                {
                    label:Language.name,
                    field:"name",
                    class:"form-control",
                    grid:"col-md-12 col-12",
                    type:"text",
                    required:true,
                },
                {
                    label:Language.slug,
                    field:"slug",
                    class:"form-control",
                    grid:"col-md-12 col-12",
                    type:"text",
                    required:true,
                },
                {
                    label:Language.description,
                    field:"description",
                    class:"form-control",
                    type:"textarea",
                    grid:"col-md-12 col-12",
                    required:true,
                },
                {
                    label:Language.view,
                    field:"view",
                    class:"form-control",
                    grid:"col-md-12 col-12",
                    type:"text",
                    required:true,
                },
                {
                    label:Language.home_page,
                    field:"is_home_page",
                    class:"form-check-input",
                    grid:"col-md-12 col-12",
                    type:"checkbox",
                    required:false,
                },
                {
                    label:Language.layout,
                    field:"layout",
                    class:"form-control",
                    grid:"col-md-12 col-12",
                    type:"text",
                    required:true,
                },
                {
                    label:Language.display_on_menu,
                    field:"display_to_menu",
                    class:"form-check-input",
                    grid:"col-md-12 col-12",
                    type:"checkbox",
                    required:false,
                },
                
            ],
            FormData:{
                name:'',
                slug:'',
                view:'',
                layout:'',
                description:'',
                display_to_menu:0,
                is_home_page:0
            },
            name:"Create Page",
        }
    },
    methods:{
        async store(){
            const {storePage,errors} = usePages();
            const {successAlert,errorAlert} = useService();
            this.loader =true;
            
            await storePage(this.FormData).then(async (response) => {
                successAlert(Language.success_msg.replace(':attribute',Language.page).replace(':action',Language.saved))
                setTimeout(() => {
                    window.location.href = '/admin/pages';
                }, 3000);
            }).catch((e) => {
                if(e.response.status === 422){
                    this.errors = e.response.data.errors
                }else if(e.response.status == 500){
                    errorAlert(e.message)
                }else{

                    errorAlert(e.response.data.message)
                }
            });;
            this.loader =false;
            this.errors = errors.value;
            
    
        }
   }
}
</script>