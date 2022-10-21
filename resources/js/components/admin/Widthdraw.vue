<template>


        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>{{ 'Withdrwal Request' }}</h1>
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
            <div class="card-header d-flex justify-content-end">
                <!-- <button class="btn btn-secondary" @click="setShowModal(true)">
                    {{ Lang.add_new_msg.replace(':attribute',Lang.category) }}
                </button> -->
<!--                <h3 class="card-title">{{ Lang.companies }}</h3>-->
            </div>
            <div class="card-body p-0" >
                <datatables :rows="data.data" :pages="data.pages" :columns="columns" :checkbox="false" :setPageNo="setPageNo" :filter="filter" :setPageSize="setPageSize" :setFilter="setFilter" :pageNo="pageNo" :pageSize="pageSize" :updateStatus="updateStatus" :setOrder="setOrder" :order="order" />
            </div>

            <!-- /.card-body -->
        </div>
        <!-- /.card -->
        </section>

    <!-- /.content -->
</template>



<script>
import useWidraw from '../../composables/bank';
import {Language} from '../../helpers/lang/lang';
import Datatables from '../commons/Datatables.vue';
import useService  from '../../services/';
import VueElementLoading from 'vue-element-loading';

export default {

  components: { Datatables,VueElementLoading, },

    data(){
        return {
            Lang:Language,
            data:[],
            columns:[],
            pageNo:1,
            pageSize:10,
            loader:false,
            store_modal_loader:false,
            order:'desc',
            orderBy:'created_at',
            pages:1,
            filter:{
                search:'',
            },
            id:0,
        }
    },
    beforeMount(){
        this.loader = true
    },
    mounted(){
        this.loader = false
        let ref = this;
        this.columns = [
            {
                label:'S.no',
                field:'sno',
                orignal_name:'sno',
                width:'4%',
                sorted:false,
                has_html:true,
            },
            {
                label:'Name',
                field:'name',
                orignal_name:'first_name',
                width:'4%',
                sorted:false,
                has_html:true,
            },
            {
                label:'Bank Name',
                field:'bank_name',
                orignal_name:'bank_name',
                width:'4%',
                sorted:false,
                has_html:false,
            },
            {
                label:'Account Title',
                field:'account_title',
                orignal_name:'account_title',
                width:'4%',
                sorted:false,
                has_html:false,
            },
            {
                label:'Account No',
                field:'account_no',
                orignal_name:'account_no',
                width:'4%',
                sorted:false,
                has_html:false,
            },
            {
                label:'IBAN',
                field:'iban',
                orignal_name:'iban',
                width:'4%',
                sorted:false,
                has_html:false,
            },
            {
                label:'Routing No',
                field:'routing_no',
                orignal_name:'routing_no',
                width:'4%',
                sorted:false,
                has_html:false,
            },
            {
                label:'Price',
                field:'price',
                orignal_name:'price',
                width:'4%',
                sorted:false,
                has_html:false,
            },
            {
                label:'Status',
                field:'transferred',
                orignal_name:'is_transferred',
                width:'4%',
                sorted:false,
                has_html:true,
            },
            {
                label:'Created At',
                field:'created_at',
                orignal_name:'created_at',
                width:'4%',
                sorted:true,
                has_html:false,
            },
            {
                label:'Action',
                field:'action',
                orignal_name:'action',
                width:'4%',
                sorted:false,
                has_html:false,
                dropdown:[
                    {
                        name:(row) => {
                            if(row.is_transferred == 0)
                                return 'Transferred'

                        },
                        icon:(row) => {
                             if(row.is_transferred == 0)
                                return 'fa fa-list-alt mr-2'
                        },
                        action:(row) =>{
                            if(row.is_transferred == 0)
                                ref.approveRequest(row.id)
                        }
                    },

                ]


            },
        ]
        this.getWidthdrawnRequest(this.pageNo,this.pageSize,this.filter);
    },

    methods:{
        setPageNo(pageNo){
            this.pageNo = pageNo;

            this.getWidthdrawnRequest(this.pageNo,this.pageSize,this.filter);
        },
        setPageSize(pageSize){
            this.pageSize = pageSize
            this.getWidthdrawnRequest();
        },
        setOrder(orderBy){
            this.orderBy = orderBy
            this.order = this.order == 'desc'?'asc':'desc';
            this.getWidthdrawnRequest();
        },
        setFilter(filter){
            this.filter = {
                search:filter
            }

            this.getWidthdrawnRequest(this.pageNo,this.pageSize,this.filter);
        },
        async getWidthdrawnRequest(){

            const { banks, getRequestAdmin } = useWidraw();
            this.loader = true
            let ref = this

            try{
                await getRequestAdmin(ref.pageNo,ref.pageSize,ref.orderBy,ref.order,ref.filter);

                ref.data = banks
                ref.loader = false;
            }catch(e){
                ref.loader = false;
            }

        },
        async approveRequest(id){


            const {confirmAlert} = useService();
            let ref = this
                confirmAlert(async () => {
                    this.loader = true
                        const { approveRequest } = useWidraw();
                        await approveRequest(id)
                        ref.getWidthdrawnRequest(ref.pageNo,ref.pageSize,ref.filter);
                })
        },

    },
}
</script>

