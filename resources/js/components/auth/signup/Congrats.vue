<template>
    <div class="container">
            <div class="row">

                <div class="col-md-12 col-sm-12 col-12">
                    <div class="join-logo">
                        <a href="#" target="blank"><img src="images/nav-logo.png" alt=""
                                class="img-fluid"></a>
                    </div>
                    <div class="wizard-main">
                        <section class="signup-step-container">
                            <div class="container">
                                <div class="row d-flex justify-content-center">
                                    <div class="col-md-8 col-sm-12 col-12">
                                        <div class="congrats-text">
                                            <h2>Congrats {{ user.name}} !</h2>
                                            <p>Your Account Has Been Created Successfully</p>
                                        </div>
                                        <div class="go-dashboard-button">
                                            <a :href="dashboard" class="go-btn">GO TO DASHBOARD</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>



            </div>
        </div>
</template>
<script>

export default {
    data(){
        return {
            dashboard:localStorage.getItem('dashboard'),
            user:JSON.parse(localStorage.getItem('user'))
        }
    }
}
</script>
