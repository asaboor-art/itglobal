<template>
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-6">
                <h1>{{ Lang.pages }}</h1>
            </div>
            <!-- <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#"></a></li>
                <li class="breadcrumb-item active">User Profile</li>
                </ol>
            </div> -->
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <div class="loading" v-if="loader">Loading</div>

    <section class="content"  v-else>

      <!-- Default box -->
      <div class="card card-secondary card-outline">
        <div class="card-header  d-flex justify-content-end">

                <a class="btn btn-secondary" href="/admin/general-setting/site-page/create">
                    {{ Lang.add_new_msg.replace(':attribute',Lang.site_page) }}
                </a>
<!--          <h3 class="card-title">{{ Lang.pages }}</h3>-->
        </div>

        <div class="card-body p-0" >
            <datatables :rows="data.data" :pages="data.pages" :filter="filter" :columns="columns" :cheCKbox="false" :setPageNo="setPageNo" :setPageSize="setPageSize" :setFilter="setFilter" :pageNo="pageNo" :pageSize="pageSize"  :setOrder="setOrder" :order="order"/>
        </div>

        <!-- /.card-body -->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
</template>



<script>
import useSitePage from '../../../composables/sitepage'
import {Language} from '../../../helpers/lang/lang';
import useService  from '../../../services/index';
import Datatables from '../../commons/Datatables.vue';
import VueElementLoading from 'vue-element-loading';

export default {

  components: { Datatables,VueElementLoading },

    data(){
        return {
            Lang:Language,
            data:[],
            columns:[],
            pageNo:1,
            pageSize:10,
            loader:false,
            order:'desc',
            pages:1,
            orderBy:'created_at',
            filter:{
                search:''
            }
        }
    },
    beforeMount(){
        this.loader = true
    },
    mounted(){
        this.loader = false
        this.getSitePage()
    },

    methods:{
        setPageNo(pageNo){
            this.pageNo = pageNo;
            this.getSitePage(this.pageNo,this.pageSize,this.filter);
        },
        setPageSize(pageSize){
            this.pageSize = pageSize
            this.getSitePage();
        },
        setOrder(orderBy){
            this.orderBy = orderBy
            this.order = this.order == 'desc'?'asc':'desc';
            this.getSitePage();
        },

        async editSitePage(id){
            window.location.href = '/admin/general-setting/site-page/edit/'+id;
        },
        setFilter(filter){
            this.filter = {
                search:filter
            }

            this.getSitePage(this.pageNo,this.pageSize,this.filter);
        },

        async updateStatus(id){
            const {confirmAlert} = useService();
            let ref = this
                confirmAlert(async () => {
                    this.loader = true
                        const { udpateStatus } = useSitePage();
                        await udpateStatus(id)
                        ref.getSitePage(ref.pageNo,ref.pageSize,ref.filter);
                })
        },
        async getSitePage(){
            const { pages, getSitePage } = useSitePage();
            this.loader = true
            let ref = this
            ref.columns = [
                    {
                        label:'S.no',
                        field:'sno',
                        orignal_name:'sno',
                        width:'6%',
                        sorted:false,
                        has_html:true,
                    },
                    {
                        label:'Title',
                        field:'title',
                        orignal_name:'title',
                        width:'10%',
                        sorted:true,
                        has_html:false,
                    },
                    {
                        label:'Slug',
                        field:'slug',
                        orignal_name:'slug',
                        width:'10%',
                        sorted:true,
                        has_html:false,
                    },
                    {
                        label:'Status',
                        field:'status',
                        orignal_name:'is_active',
                        width:'10%',
                        sorted:true,
                        has_html:true,
                    },
                    {
                        label:'Created At',
                        field:'created_at',
                        orignal_name:'created_at',
                        width:'10%',
                        sorted:true,
                        has_html:false,
                    },
                    {
                        label:'Action',
                        field:'action',
                        orignal_name:'action',
                        width:'10%',
                        sorted:false,
                        has_html:false,
                        dropdown:[
                            {
                                name:(row) => {

                                    console.log(row.is_active);
                                    if(row.is_active)
                                        return Language.inactive
                                    else
                                        return Language.active
                                },
                                icon:(row) => {
                                    return 'fa fa-list-alt mr-2'
                                },
                                action:(row) =>{
                                    ref.updateStatus(row.id)
                                }
                            },
                            {
                                name:(row) => {
                                    return Language.edit
                                },
                                icon:(row) => {
                                    return 'fa fa-edit mr-2'
                                },
                                action:(row) =>{
                                    ref.editSitePage(row.id)
                                }
                            }
                        ]
                    },
            ]
            try{
                await getSitePage(ref.pageNo,ref.pageSize,ref.orderBy,ref.order,ref.filter);
                    ref.data = pages
                    ref.loader = false;

            }catch(e){
                  ref.loader = false;
            }

        },
    }


}
</script>

