
<template>
    <div>
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>{{ Lang.welcome }}</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">{{ Lang.admin }}</a></li>
                    </ol>
                </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

       
    </div>
</template>

<script>
import {Language} from '../../helpers/lang/lang';

export default {
   data(){
        return {
            Lang:Language,
        } 
   }
}
</script>
