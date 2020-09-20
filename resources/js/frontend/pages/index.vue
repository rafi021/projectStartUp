<template>
  <FrontendLayout>
     <!-- Slider Section Start -->
     <FrontendSlider></FrontendSlider>
     <!-- Slider Section End -->
 
     <!-- Job Search Section Start -->
     <FrontendJobSearch></FrontendJobSearch>
     <!-- Job Search Section End -->
 
     <!-- Recent Jobs Start -->
    <FrontendRecentJob></FrontendRecentJob>
     <!-- Recent Jobs End -->
 
     <!-- Funfact Section Start -->
    <FrontendFunFact></FrontendFunFact>
     <!-- Funfact Section End -->
 
     <!-- Featured Conpanies Start -->
     <FrontendFeatureCompany></FrontendFeatureCompany>
     <!-- Featured Conpanies End -->
 
     <!-- Testimonial Section Start -->
    <FrontendTestimonial></FrontendTestimonial>
     <!-- Testimonial Section End -->
 
     <!-- Blog Section Start -->
     <FrontendBlog></FrontendBlog>
     <!-- Blog Section End -->
  </FrontendLayout>
</template>

<script>
import FrontendLayout from '../layout/frontend_layout';
import FrontendBlog from '../panel/blog';
import FrontendSlider from '../panel/slider';
import FrontendJobSearch from '../panel/jobsearch';
import FrontendRecentJob from '../panel/recentjob';
import FrontendFunFact from '../panel/funfact';
import FrontendFeatureCompany from '../panel/feature_company';
import FrontendTestimonial from '../panel/testimonial';

export default {
    components: {
        FrontendLayout,
        FrontendBlog,
        FrontendSlider,
        FrontendJobSearch,
        FrontendRecentJob,
        FrontendFunFact,
        FrontendFeatureCompany,
        FrontendTestimonial
    }
}
</script>

<style>

</style>