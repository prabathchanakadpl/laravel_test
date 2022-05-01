@extends('layouts.main')

@section('title','Individual Settings View Edit | My AnAngel')

@section('content')
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
{{--            <div class="row d-none">--}}
{{--                <div class="col-12">--}}
{{--                    <div class="page-title-box d-flex align-items-center justify-content-between">--}}
{{--                        <div class="page-title-left">--}}
{{--                            <ol class="breadcrumb m-0">--}}
{{--                                <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>--}}
{{--                                <li class="breadcrumb-item active">Campaign</li>--}}
{{--                                <li class="breadcrumb-item active">Start a campaign</li>--}}
{{--                            </ol>--}}
{{--                        </div>--}}

{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
            <!-- end page title -->

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <div class="page-title-left custom-page-title">
                            <x-page-title class="shadowintolight-two-font color-blue font-size-48 pt-2 pb-2">SETTINGS</x-page-title>
                            <x-description>View & update your account settings.</x-description>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="settings-section">
                <!--Row Start-->

                <div class="row">
                    <div class="col-md-12 ">
                        <div class="card card-body p-4 pb-5">

                            <div class="row">
                                <div class="col-md-12 ">
                                    <div class="text-panel">
                                        <x-headings.h4>Password</x-headings.h4>
                                        <x-description>************** <br>
                                            <x-links.change-password-link url="#" class="chng-password" text="Change password"/>
                                        </x-description>
                                    </div>
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-md-12 ">
                                    <div class="text-panel">
                                        <x-headings.h4>Address</x-headings.h4>
                                        <x-description>74B AJC Bose Road, Kolkata 700 016</x-description>
                                        <x-links.data-edit-link url="javascript:void(0);"
                                              class="mr-3 color-red edit" />
                                    </div>
                                </div>

                            </div>


                            <div class="row">
                                <div class="col-md-12 ">
                                    <div class="text-panel">
                                        <x-headings.h4>Privacy settings</x-headings.h4>
                                        <x-description>My activities are - Public</x-description>
                                        <x-links.data-edit-link url="javascript:void(0);"
                                              class="mr-3 color-red edit" />
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-12 ">
                                    <div class="text-panel">
                                        <x-headings.h4>Communication preferences (messaging and email)</x-headings.h4>
                                        <ul class="nopadbottom nomarginbottom">
                                            <li>	Allow non-friends to message me</li>
                                            <li>	Email when deed has an update (completed or announcement)</li>
                                            <li>	New message</li>
                                        </ul>
                                        <x-links.data-edit-link url="javascript:void(0);"
                                              class="mr-3 color-red edit" />
                                    </div>
                                </div>

                            </div>


                            <div class="row">
                                <div class="col-md-12 ">
                                    <div class="text-panel">
                                        <x-headings.h4>Advanced security</x-headings.h4>

                                        <x-description>
                                            <x-label>Email recovery address</x-label>
                                            <br/>
                                            <x-links.normal-link url="mailto:emailrecovery@mydomain.com" class="editlink">emailrecovery@mydomain.com</x-links.normal-link>
                                        </x-description>
                                        <x-description>
                                            <x-label>Secret question</x-label>
                                            <br/>
                                            Sed ut perspiciatis unde omnis iste natus error sit?
                                        </x-description>
                                        <x-description>
                                            <x-label>Two factor authentication</x-label>
                                            <br/>
                                            On
                                        </x-description>
                                        <x-links.data-edit-link url="javascript:void(0);"
                                              class="mr-3 color-red edit" />
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-12 ">
                                    <div class="text-panel">
                                        <x-links.delete-link url="javascript:void(0);" class="color-red">Delete account</x-links.delete-link>
                                    </div>
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-lg-12 pt-5 roundedorange-white-buttonholder-save-cancel text-center">
                                    <x-buttons.primary type="button" class="btn btn-primary btn-rounded waves-effect waves-light commonrounded-save-btn disabled">Save</x-buttons.primary>
                                    <x-buttons.primary type="button" class="btn btn-primary btn-rounded waves-effect waves-light commonrounded-cancel-btn disabled">Cancel</x-buttons.primary>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!--Row End-->
            </div> <!-- container-fluid -->
        </div>
        <!-- End Page-content -->
@endsection
