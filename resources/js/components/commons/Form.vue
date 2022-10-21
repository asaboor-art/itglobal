<template>
    <form @submit.prevent="store()">
                    
        <div class="row">
            <div v-for="(field,index) in fields" :key="index" :class="field.grid+' mb-3'">
                <div class="form-group" v-if="field.type == 'checkbox'">
                    <input :type="field.type" :class="field.class" :name="field.field" v-model="data[field.field]" :required="field.required">
                    <label class="pl-2">{{ field.label }}</label>
                    <div v-if="errors[field.field]">
                      <ul>
                          <li class="text-danger" style="list-style:none;" v-for="(error,index) in errors[field.field]" :key="index">{{ error }}</li>
                      </ul>
                    </div>
                </div>
                
                <div class="form-group" v-else-if="field.type == 'textarea'">
                    <label class="col-form-label">{{ field.label }}</label>
                    <ckeditor :editor="editor"  v-model="data[field.field]" :config="editorConfig" placeholder="Enter Honor Code"></ckeditor>
                    <div v-if="errors[field.field]">
                      <ul>
                          <li class="text-danger" style="list-style:none;" v-for="(error,index) in errors[field.field]" :key="index">{{ error }}</li>
                      </ul>
                    </div>
                </div>

                <div class="form-group" v-else-if="field.type == 'select'">
                    <label class="col-form-label">{{ field.label }}</label>
                    
                    <div v-if="errors[field.field]">
                      <ul>
                          <li class="text-danger" style="list-style:none;" v-for="(error,index) in errors[field.field]" :key="index">{{ error }}</li>
                      </ul>
                    </div>
                </div>
                <div class="form-group" v-else>
                    <label class="col-form-label">{{ field.label }}</label>
                    <input :type="field.type" :class="field.class" :name="field.field"  v-model="data[field.field]" :required="field.required" autocomplete="email" autofocus>
                    <div v-if="errors[field.field]">
                      <ul>
                          <li class="text-danger" style="list-style:none;" v-for="(error,index) in errors[field.field]" :key="index">{{ error }}</li>
                      </ul>
                    </div>
                </div>
                
            </div>
                                         
        </div>
        <div class="row mb-1 ">
            <div class="col-md-12 text-right">
                <button type="submit" class="btn btn-secondary ">
                                    {{ name.toUpperCase() }}
                </button>
            </div>
        </div>            
                        
    </form>
</template>
<script>
import {Language} from '../../helpers/lang/lang';
import CKEditor from '@ckeditor/ckeditor5-vue';
import useService  from '../../services/index';
import ClassicEditor from '@ckeditor/ckeditor5-build-classic';
export default {
    props:{
        fields:Array,
        data:Object,
        action:Function,
        name:String,
        errors:Object,
    },
    components:{
        ckeditor: CKEditor.component
    },
    data(){
        return {
            Language:Language,
            editor: ClassicEditor,
            editorConfig:[],
        }
    },
    methods:{
        store(){
            this.action();
        }
    }

}
</script>