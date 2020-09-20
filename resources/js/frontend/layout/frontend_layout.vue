<template>
<div>
    <Header></Header>
    <!--Offcanvas Section Start-->
    <div id="offcanvas" class="offcanvas-section">
        <button class="offcanvas-close" data-target="#offcanvas">&times;</button>
        <div class="offcanvas-wrap">
            <div class="inner">

                <!-- Offcanvas user Start -->
                <div class="offcanvas-user">
                    <a href="#" data-toggle="modal" data-target="#loginSignupModal" data-target-sub="#login">Login</a>
                    <span>or</span>
                    <a href="#" data-toggle="modal" data-target="#loginSignupModal" data-target-sub="#signup">Sign up</a>
                </div>
                <!-- Offcanvas user End -->

                <!-- Offcanvas Menu Start -->
                <MenuBar></MenuBar>
                <!-- Offcanvas Menu End -->

            </div>
        </div>
    </div>
    <!--Offcanvas Section End-->
    <!--OffCanvas Overlay-->
    <div class="offcanvas-overlay"></div>
    <!-- {{-- Login and SignUp Modal Start --}} -->
    <loginSignupModal></loginSignupModal>
    <!-- {{-- Login and SignUp Modal End --}} -->

    <slot></slot>

    <!-- Footer Top Section Start -->
    <FooterTop></FooterTop>
    <!-- Footer Top Section End -->

    <!-- Footer Bottom Section Start -->
    <Footer></Footer>
    <!-- Footer Bottom Section End -->
</div>
</template>

<script>
import Header from '../panel/header';
import MenuBar from '../panel/menubar';
import loginSignupModal from '../panel/login_signup_modal';
import FooterTop from '../panel/footer_top';
import Footer from '../panel/footer';

export default {
    components:{
        Header,
        MenuBar,
        loginSignupModal,
        FooterTop,
        Footer,
    }
}
</script>

<style>
</style>