
<template>
    <div>
       <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>{{ Language.site_page}}</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">{{ Language.dashboard }}</a></li>
              <li class="breadcrumb-item active">{{ Language.site_page }}</li>
            </ol>
          </div>
        </div>
      </div>
    </section>


    <section class="content">
        <div class="loading" v-if="loader">Loading</div>
      <div class="container-fluid">

        <div class="card card-default">
          <div class="card-header">
            <h3 class="card-title">{{ Language.site_page }}</h3>
          </div>

          <form @submit.prevent="setSitePage()">
          <div class="card-body">
            <div class="row">
              <!--  -->

              <div class="col-md-12">
                <div class="form-group">
                  <label>{{ Language.page_name }}</label>
                  <input type="text" :class="errors.title  ?'form-control is-invalid':'form-control '" :key="index"  placeholder="Enter page name"  v-model="form.title"/>
                   <div v-if="errors.title">
                      <ul>
                          <li class="text-danger" style="list-style:none;" v-for="(error,index) in errors.title" :key="index">{{ error }}</li>
                      </ul>
                  </div>
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label>{{ Language.page_slug }}</label>
                  <input type="text" :class="errors.slug  ?'form-control is-invalid':'form-control '" :key="index"  placeholder="Enter page slug"  v-model="form.slug" />
                   <div v-if="errors.slug">
                      <ul>
                          <li class="text-danger" style="list-style:none;" v-for="(error,index) in errors.slug" :key="index">{{ error }}</li>
                      </ul>
                  </div>
                </div>

              </div>

              <!-- /.col -->
              <div class="col-md-12">
                <div class="form-group">
                  <label>{{ Language.page_description }}</label>
                   <ckeditor :editor="editor"  v-model="form.description" :config="editorConfig" placeholder="Enter Page Description"></ckeditor>
                   <div v-if="errors.description">
                      <ul>
                          <li class="text-danger" style="list-style:none;" v-for="(error,index) in errors.description" :key="index">{{ error }}</li>
                      </ul>
                  </div>
                </div>

              </div>
              <!-- /.col -->
              <div class="col-md-12 d-flex justify-content-end pt-3">
                <button type="submit" class="btn btn-secondary">{{ Language.update }}</button>
              </div>
            </div>
          </div>
          </form>


        </div>

      </div>

    </section>
    </div>
</template>
<script>
import {Language} from '../../../helpers/lang/lang';
import useSetting from '../../../composables/generalsetting';
import CKEditor from '@ckeditor/ckeditor5-vue';
import useService  from '../../../services/index';
import ClassicEditor from '@ckeditor/ckeditor5-build-classic';


export default {

    components: {
            // Use the <ckeditor> component in this view.
            ckeditor: CKEditor.component
    },
    data(){
        return {
            Language:Language,
            loader:false,
            form:{
                type:1,
                name:'',
                slug:'',
                description:'',
            },
            features:[{
                label:'Feature',
                value:'',

            }],
            errors:{},
            editor: ClassicEditor,
            editorConfig:{
                // toolbar: [ 'bold', 'italic', '|', 'link'],
                // plugins:['sourcearea']
            }
        }
    },
    mounted(){

    },
    methods:{

        async setSitePage(){
            const {setSitePage} = useSetting();
            const {successAlert} = useService();
            this.loader = true;
            this.errors = {};
            await setSitePage('/admin/general-setting/site-page',this.form).then(async (response) => {
                successAlert(Language.success_msg.replace(':attribute',Language.site_page).replace(':action',Language.updated))
                setTimeout(function(){
                    window.location.href = '/admin/general-setting/site-page';
                }, 2000);
            }).catch((e) => {
                if(e.response.status === 422){
                    this.errors = e.response.data.errors
                }
            });
            this.loader = false
        }
    },
    watch:{
        'form.title':function(oldValue,newValue){
            this.form.slug = this.form.title.toLowerCase().replace(/\s/g, '-').replace(/[^\w-]+/g, '');
        }
    }

}
</script>
