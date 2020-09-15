@extends('frontend.layout.frontend_layout')
@section('frontend_content')

    <!-- Page Heading Section Start -->
    @include('frontend.panel.breadcrumb')
    <!-- Page Heading Section End -->

    <!-- Recent Jobs Start -->
    <div class="section section-padding">
        <div class="container">
            <div class="row mb-n5">

                <div class="col-lg-8 col-12 mb-5 pr-lg-5">

                    <!-- Job List Toolbar Start -->
                    <div class="job-list-toolbar">
                        <p>Showing 1 – 10 of 34 results</p>
                        <p>Sort by:
                            <select>
                                <option>Most Recent</option>
                                <option>Top Rated</option>
                                <option>Most Popular</option>
                            </select>
                        </p>
                    </div>
                    <!-- Job List Toolbar End -->

                    <!-- Job List Wrap Start -->
                    <div class="job-list-wrap">

                        <!-- Job List Start -->
                        <a href="job-single.html" class="job-list">
                            <div class="company-logo col-auto">
                                <img src="{{ asset('frontend_assets') }}/images/companies/company-1.png" alt="Company Logo">
                            </div>
                            <div class="salary-type col-auto order-sm-3">
                                <span class="salary-range">$5000 - $8000</span>
                                <span class="badge badge-success">Full Time</span>
                            </div>
                            <div class="content col">
                                <h6 class="title">Full Stack Backend Developer</h6>
                                <ul class="meta">
                                    <li><strong class="text-primary">Envato</strong></li>
                                    <li><i class="fa fa-map-marker"></i> 2020 Willshire Glen, GA-30009</li>
                                </ul>
                            </div>
                        </a>
                        <!-- Job List Start -->

                        <!-- Job List Start -->
                        <a href="job-single.html" class="job-list">
                            <div class="company-logo col-auto">
                                <img src="{{ asset('frontend_assets') }}/images/companies/company-2.png" alt="Company Logo">
                            </div>
                            <div class="salary-type col-auto order-sm-3">
                                <span class="salary-range">$7000 - $13000</span>
                                <span class="badge badge-warning">Part Time</span>
                            </div>
                            <div class="content col">
                                <h6 class="title">Product UI & UX Expert</h6>
                                <ul class="meta">
                                    <li><strong class="text-primary">Astha</strong></li>
                                    <li><i class="fa fa-map-marker"></i> 2020 Willshire Glen, GA-30009</li>
                                </ul>
                            </div>
                        </a>
                        <!-- Job List Start -->

                        <!-- Job List Start -->
                        <a href="job-single.html" class="job-list">
                            <div class="company-logo col-auto">
                                <img src="{{ asset('frontend_assets') }}/images/companies/company-3.png" alt="Company Logo">
                            </div>
                            <div class="salary-type col-auto order-sm-3">
                                <span class="salary-range">$5000 - $8000</span>
                                <span class="badge badge-danger">Freelance</span>
                            </div>
                            <div class="content col">
                                <h6 class="title">Full Stack Backend Developer</h6>
                                <ul class="meta">
                                    <li><strong class="text-primary">Github</strong></li>
                                    <li><i class="fa fa-map-marker"></i> 2020 Willshire Glen, GA-30009</li>
                                </ul>
                            </div>
                        </a>
                        <!-- Job List Start -->

                        <!-- Job List Start -->
                        <a href="job-single.html" class="job-list">
                            <div class="company-logo col-auto">
                                <img src="{{ asset('frontend_assets') }}/images/companies/company-4.png" alt="Company Logo">
                            </div>
                            <div class="salary-type col-auto order-sm-3">
                                <span class="salary-range">$7000 - $13000</span>
                                <span class="badge badge-success">Full Time</span>
                            </div>
                            <div class="content col">
                                <h6 class="title">Product UI & UX Expert</h6>
                                <ul class="meta">
                                    <li><strong class="text-primary">Medicore</strong></li>
                                    <li><i class="fa fa-map-marker"></i> 2020 Willshire Glen, GA-30009</li>
                                </ul>
                            </div>
                        </a>
                        <!-- Job List Start -->

                        <!-- Job List Start -->
                        <a href="job-single.html" class="job-list">
                            <div class="company-logo col-auto">
                                <img src="{{ asset('frontend_assets') }}/images/companies/company-5.png" alt="Company Logo">
                            </div>
                            <div class="salary-type col-auto order-sm-3">
                                <span class="salary-range">$5000 - $8000</span>
                                <span class="badge badge-success">Full Time</span>
                            </div>
                            <div class="content col">
                                <h6 class="title">Full Stack Backend Developer</h6>
                                <ul class="meta">
                                    <li><strong class="text-primary">GreenSoul</strong></li>
                                    <li><i class="fa fa-map-marker"></i> 2020 Willshire Glen, GA-30009</li>
                                </ul>
                            </div>
                        </a>
                        <!-- Job List Start -->

                        <!-- Job List Start -->
                        <a href="job-single.html" class="job-list">
                            <div class="company-logo col-auto">
                                <img src="{{ asset('frontend_assets') }}/images/companies/company-6.png" alt="Company Logo">
                            </div>
                            <div class="salary-type col-auto order-sm-3">
                                <span class="salary-range">$5000 - $8000</span>
                                <span class="badge badge-success">Full Time</span>
                            </div>
                            <div class="content col">
                                <h6 class="title">Full Stack Backend Developer</h6>
                                <ul class="meta">
                                    <li><strong class="text-primary">HM Foundation</strong></li>
                                    <li><i class="fa fa-map-marker"></i> 2020 Willshire Glen, GA-30009</li>
                                </ul>
                            </div>
                        </a>
                        <!-- Job List Start -->

                        <!-- Job List Start -->
                        <a href="job-single.html" class="job-list">
                            <div class="company-logo col-auto">
                                <img src="{{ asset('frontend_assets') }}/images/companies/company-7.png" alt="Company Logo">
                            </div>
                            <div class="salary-type col-auto order-sm-3">
                                <span class="salary-range">$7000 - $13000</span>
                                <span class="badge badge-warning">Part Time</span>
                            </div>
                            <div class="content col">
                                <h6 class="title">Product UI & UX Expert</h6>
                                <ul class="meta">
                                    <li><strong class="text-primary">Insuras</strong></li>
                                    <li><i class="fa fa-map-marker"></i> 2020 Willshire Glen, GA-30009</li>
                                </ul>
                            </div>
                        </a>
                        <!-- Job List Start -->

                        <!-- Job List Start -->
                        <a href="job-single.html" class="job-list">
                            <div class="company-logo col-auto">
                                <img src="{{ asset('frontend_assets') }}/images/companies/company-8.png" alt="Company Logo">
                            </div>
                            <div class="salary-type col-auto order-sm-3">
                                <span class="salary-range">$5000 - $8000</span>
                                <span class="badge badge-danger">Freelance</span>
                            </div>
                            <div class="content col">
                                <h6 class="title">Full Stack Backend Developer</h6>
                                <ul class="meta">
                                    <li><strong class="text-primary">Dhub</strong></li>
                                    <li><i class="fa fa-map-marker"></i> 2020 Willshire Glen, GA-30009</li>
                                </ul>
                            </div>
                        </a>
                        <!-- Job List Start -->

                        <!-- Job List Start -->
                        <a href="job-single.html" class="job-list">
                            <div class="company-logo col-auto">
                                <img src="{{ asset('frontend_assets') }}/images/companies/company-9.png" alt="Company Logo">
                            </div>
                            <div class="salary-type col-auto order-sm-3">
                                <span class="salary-range">$7000 - $13000</span>
                                <span class="badge badge-success">Full Time</span>
                            </div>
                            <div class="content col">
                                <h6 class="title">Product UI & UX Expert</h6>
                                <ul class="meta">
                                    <li><strong class="text-primary">Biddanondo</strong></li>
                                    <li><i class="fa fa-map-marker"></i> 2020 Willshire Glen, GA-30009</li>
                                </ul>
                            </div>
                        </a>
                        <!-- Job List Start -->

                        <!-- Job List Start -->
                        <a href="job-single.html" class="job-list">
                            <div class="company-logo col-auto">
                                <img src="{{ asset('frontend_assets') }}/images/companies/company-10.png" alt="Company Logo">
                            </div>
                            <div class="salary-type col-auto order-sm-3">
                                <span class="salary-range">$5000 - $8000</span>
                                <span class="badge badge-success">Full Time</span>
                            </div>
                            <div class="content col">
                                <h6 class="title">Full Stack Backend Developer</h6>
                                <ul class="meta">
                                    <li><strong class="text-primary">Karen</strong></li>
                                    <li><i class="fa fa-map-marker"></i> 2020 Willshire Glen, GA-30009</li>
                                </ul>
                            </div>
                        </a>
                        <!-- Job List Start -->

                        <!-- Job List Start -->
                        <a href="job-single.html" class="job-list">
                            <div class="company-logo col-auto">
                                <img src="{{ asset('frontend_assets') }}/images/companies/company-1.png" alt="Company Logo">
                            </div>
                            <div class="salary-type col-auto order-sm-3">
                                <span class="salary-range">$5000 - $8000</span>
                                <span class="badge badge-success">Full Time</span>
                            </div>
                            <div class="content col">
                                <h6 class="title">Full Stack Backend Developer</h6>
                                <ul class="meta">
                                    <li><strong class="text-primary">Envato</strong></li>
                                    <li><i class="fa fa-map-marker"></i> 2020 Willshire Glen, GA-30009</li>
                                </ul>
                            </div>
                        </a>
                        <!-- Job List Start -->

                        <!-- Job List Start -->
                        <a href="job-single.html" class="job-list">
                            <div class="company-logo col-auto">
                                <img src="{{ asset('frontend_assets') }}/images/companies/company-2.png" alt="Company Logo">
                            </div>
                            <div class="salary-type col-auto order-sm-3">
                                <span class="salary-range">$7000 - $13000</span>
                                <span class="badge badge-warning">Part Time</span>
                            </div>
                            <div class="content col">
                                <h6 class="title">Product UI & UX Expert</h6>
                                <ul class="meta">
                                    <li><strong class="text-primary">Astha</strong></li>
                                    <li><i class="fa fa-map-marker"></i> 2020 Willshire Glen, GA-30009</li>
                                </ul>
                            </div>
                        </a>
                        <!-- Job List Start -->

                        <!-- Job List Start -->
                        <a href="job-single.html" class="job-list">
                            <div class="company-logo col-auto">
                                <img src="{{ asset('frontend_assets') }}/images/companies/company-3.png" alt="Company Logo">
                            </div>
                            <div class="salary-type col-auto order-sm-3">
                                <span class="salary-range">$5000 - $8000</span>
                                <span class="badge badge-danger">Freelance</span>
                            </div>
                            <div class="content col">
                                <h6 class="title">Full Stack Backend Developer</h6>
                                <ul class="meta">
                                    <li><strong class="text-primary">Github</strong></li>
                                    <li><i class="fa fa-map-marker"></i> 2020 Willshire Glen, GA-30009</li>
                                </ul>
                            </div>
                        </a>
                        <!-- Job List Start -->

                        <!-- Job List Start -->
                        <a href="job-single.html" class="job-list">
                            <div class="company-logo col-auto">
                                <img src="{{ asset('frontend_assets') }}/images/companies/company-4.png" alt="Company Logo">
                            </div>
                            <div class="salary-type col-auto order-sm-3">
                                <span class="salary-range">$7000 - $13000</span>
                                <span class="badge badge-success">Full Time</span>
                            </div>
                            <div class="content col">
                                <h6 class="title">Product UI & UX Expert</h6>
                                <ul class="meta">
                                    <li><strong class="text-primary">Medicore</strong></li>
                                    <li><i class="fa fa-map-marker"></i> 2020 Willshire Glen, GA-30009</li>
                                </ul>
                            </div>
                        </a>
                        <!-- Job List Start -->

                        <!-- Job List Start -->
                        <a href="job-single.html" class="job-list">
                            <div class="company-logo col-auto">
                                <img src="{{ asset('frontend_assets') }}/images/companies/company-5.png" alt="Company Logo">
                            </div>
                            <div class="salary-type col-auto order-sm-3">
                                <span class="salary-range">$5000 - $8000</span>
                                <span class="badge badge-success">Full Time</span>
                            </div>
                            <div class="content col">
                                <h6 class="title">Full Stack Backend Developer</h6>
                                <ul class="meta">
                                    <li><strong class="text-primary">GreenSoul</strong></li>
                                    <li><i class="fa fa-map-marker"></i> 2020 Willshire Glen, GA-30009</li>
                                </ul>
                            </div>
                        </a>
                        <!-- Job List Start -->

                    </div>
                    <!-- Job List Wrap Start -->

                    <!-- Pagination Start -->
                    <ul class="pagination pagination-center mt-5">
                        <li class="page-item"><a class="page-link" href="#"><i class="fa fa-angle-left"></i></a></li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">4</a></li>
                        <li class="page-item"><a class="page-link" href="#"><i class="fa fa-angle-right"></i></a></li>
                    </ul>
                    <!-- Pagination End -->

                </div>

                <!-- Job Sidebar Wrap Start -->
                <div class="col-lg-4 col-12 mb-5">
                    <div class="sidebar-wrap">
                        <!-- Sidebar (Search) Start -->
                        <div class="sidebar-widget">
                            <div class="inner">
                                <h6 class="title">Search Keywords</h6>
                                <form action="#">
                                    <input type="text" placeholder="e.g. web design">
                                </form>
                            </div>
                        </div>
                        <!-- Sidebar (Search) End -->

                        <!-- Sidebar (Category) Start -->
                        <div class="sidebar-widget">
                            <div class="inner">
                                <h6 class="title">Category</h6>
                                <form action="#">
                                    <select>
                                        <option value="1">Any category</option>
                                        <option value="2">Web Designer</option>
                                        <option value="3">Web Developer</option>
                                        <option value="4">Graphic Designer</option>
                                        <option value="5">App Developer</option>
                                        <option value="6">UI &amp; UX Expert</option>
                                    </select>
                                </form>
                            </div>
                        </div>
                        <!-- Sidebar (Category) End -->

                        <!-- Sidebar (Location) Start -->
                        <div class="sidebar-widget">
                            <div class="inner">
                                <h6 class="title">Location</h6>
                                <form action="#">
                                    <input type="text" placeholder="Location">
                                </form>
                            </div>
                        </div>
                        <!-- Sidebar (Location) End -->

                        <!-- Sidebar (Job Type) Start -->
                        <div class="sidebar-widget">
                            <div class="inner">
                                <h6 class="title">Job Type</h6>
                                <form action="#" class="mb-n1">
                                    <div class="custom-control custom-checkbox mb-1">
                                        <input type="checkbox" class="custom-control-input" id="jobtype0">
                                        <label class="custom-control-label" for="jobtype0">All type</label>
                                    </div>
                                    <div class="custom-control custom-checkbox mb-1">
                                        <input type="checkbox" class="custom-control-input" id="jobtype1">
                                        <label class="custom-control-label" for="jobtype1">Full Time</label>
                                    </div>
                                    <div class="custom-control custom-checkbox mb-1">
                                        <input type="checkbox" class="custom-control-input" id="jobtype2">
                                        <label class="custom-control-label" for="jobtype2">Part Time</label>
                                    </div>
                                    <div class="custom-control custom-checkbox mb-1">
                                        <input type="checkbox" class="custom-control-input" id="jobtype3">
                                        <label class="custom-control-label" for="jobtype3">Freelance</label>
                                    </div>
                                    <div class="custom-control custom-checkbox mb-1">
                                        <input type="checkbox" class="custom-control-input" id="jobtype4">
                                        <label class="custom-control-label" for="jobtype4">Internship</label>
                                    </div>
                                    <div class="custom-control custom-checkbox mb-1">
                                        <input type="checkbox" class="custom-control-input" id="jobtype5">
                                        <label class="custom-control-label" for="jobtype5">Temporary</label>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- Sidebar (Job Type) End -->

                        <!-- Sidebar (Salary Range) Start -->
                        <div class="sidebar-widget">
                            <div class="inner">
                                <h6 class="title">Salary Range</h6>
                                <form action="#">
                                    <input type="text" id="salary-range" name="salary-range" class="range-slider" value="" />
                                </form>
                            </div>
                        </div>
                        <!-- Sidebar (Salary Range) End -->

                        <!-- Sidebar (Experince) Start -->
                        <div class="sidebar-widget">
                            <div class="inner">
                                <h6 class="title">Experince</h6>
                                <form action="#" class="mb-n1">
                                    <div class="custom-control custom-radio mb-1">
                                        <input type="radio" class="custom-control-input" name="jobExperince" id="jobExperince0">
                                        <label class="custom-control-label" for="jobExperince0">Any Experince</label>
                                    </div>
                                    <div class="custom-control custom-radio mb-1">
                                        <input type="radio" class="custom-control-input" name="jobExperince" id="jobExperince1">
                                        <label class="custom-control-label" for="jobExperince1">1 Year to 2 Year</label>
                                    </div>
                                    <div class="custom-control custom-radio mb-1">
                                        <input type="radio" class="custom-control-input" name="jobExperince" id="jobExperince2">
                                        <label class="custom-control-label" for="jobExperince2">2 Year to 3 Year</label>
                                    </div>
                                    <div class="custom-control custom-radio mb-1">
                                        <input type="radio" class="custom-control-input" name="jobExperince" id="jobExperince3">
                                        <label class="custom-control-label" for="jobExperince3">3 Year to 4 Year</label>
                                    </div>
                                    <div class="custom-control custom-radio mb-1">
                                        <input type="radio" class="custom-control-input" name="jobExperince" id="jobExperince4">
                                        <label class="custom-control-label" for="jobExperince4">4 Year to 5 Year</label>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- Sidebar (Experince) End -->

                        <!-- Sidebar (Date Posted) Start -->
                        <div class="sidebar-widget">
                            <div class="inner">
                                <h6 class="title">Date Posted</h6>
                                <form action="#" class="mb-n1">
                                    <div class="custom-control custom-radio mb-1">
                                        <input type="radio" class="custom-control-input" name="jobDatePosted" id="jobDatePosted0">
                                        <label class="custom-control-label" for="jobDatePosted0">Any Date</label>
                                    </div>
                                    <div class="custom-control custom-radio mb-1">
                                        <input type="radio" class="custom-control-input" name="jobDatePosted" id="jobDatePosted1">
                                        <label class="custom-control-label" for="jobDatePosted1">Last Hour</label>
                                    </div>
                                    <div class="custom-control custom-radio mb-1">
                                        <input type="radio" class="custom-control-input" name="jobDatePosted" id="jobDatePosted2">
                                        <label class="custom-control-label" for="jobDatePosted2">Last 24 Hours</label>
                                    </div>
                                    <div class="custom-control custom-radio mb-1">
                                        <input type="radio" class="custom-control-input" name="jobDatePosted" id="jobDatePosted3">
                                        <label class="custom-control-label" for="jobDatePosted3">Last 7 Days</label>
                                    </div>
                                    <div class="custom-control custom-radio mb-1">
                                        <input type="radio" class="custom-control-input" name="jobDatePosted" id="jobDatePosted4">
                                        <label class="custom-control-label" for="jobDatePosted4">Last 14 days</label>
                                    </div>
                                    <div class="custom-control custom-radio mb-1">
                                        <input type="radio" class="custom-control-input" name="jobDatePosted" id="jobDatePosted5">
                                        <label class="custom-control-label" for="jobDatePosted5">Last 30 days</label>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- Sidebar (Date Posted) End -->

                        <!-- Sidebar (Qualification) Start -->
                        <div class="sidebar-widget">
                            <div class="inner">
                                <h6 class="title">Qualification</h6>
                                <form action="#" class="mb-n1">
                                    <div class="custom-control custom-radio mb-1">
                                        <input type="radio" class="custom-control-input" name="jobQualification" id="jobQualification0">
                                        <label class="custom-control-label" for="jobQualification0">Matriculation</label>
                                    </div>
                                    <div class="custom-control custom-radio mb-1">
                                        <input type="radio" class="custom-control-input" name="jobQualification" id="jobQualification1">
                                        <label class="custom-control-label" for="jobQualification1">Intermidiate</label>
                                    </div>
                                    <div class="custom-control custom-radio mb-1">
                                        <input type="radio" class="custom-control-input" name="jobQualification" id="jobQualification2">
                                        <label class="custom-control-label" for="jobQualification2">Gradute</label>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- Sidebar (Qualification) End -->
                    </div>
                </div>
                <!-- Job Sidebar Wrap End -->

            </div>
        </div>
    </div>
    <!-- Recent Jobs End -->
@endsection