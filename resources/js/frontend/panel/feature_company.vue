<template>
  <div class="section section-padding">
    <div class="container">
        <div class="section-title">
            <h2 class="title">Featured Companies</h2>
            <p>Here's the most job listed by those companies.</p>
        </div>

        <!-- Company List Wrap Start -->
        <div class="company-slider row">

            <!-- Company List Start -->
            <div class="col">
                <a href="company-single.html" class="feature-company">
                    <span class="company-logo">
                        <img :src="`/frontend_assets/images/companies/company-1.png`" alt="company-1">
                    </span>
                    <h6 class="title">Envato</h6>
                    <span class="open-job">2 open positions</span>
                </a>
            </div>
            <!-- Company List Start -->

            <!-- Company List Start -->
            <div class="col">
                <a href="company-single.html" class="feature-company">
                    <span class="company-logo">
                        <img :src="`/frontend_assets/images/companies/company-2.png`" alt="company-2">
                    </span> 
                    <h6 class="title">Astha</h6>
                    <span class="open-job">1 open positions</span>
                </a>
            </div>
            <!-- Company List Start -->
        </div>
        <!-- Company List Wrap Start -->

    </div>
</div>
</template>

<script>
export default {
    name: 'FrontendFeatureCompany',
}
</script>

<style>

</style>
