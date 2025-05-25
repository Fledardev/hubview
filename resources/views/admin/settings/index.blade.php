@extends('admin.layouts.app')

@section('content')
<section class="section">
    <div class="section-header">
        <h1>{{ trans('admin/main.settings') }}</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="#">{{ trans('admin/main.dashboard') }}</a></div>
            <div class="breadcrumb-item">{{ trans('admin/main.settings') }}</div>
        </div>
    </div>

    <div class="section-body">
        <h2 class="section-title">{{ trans('admin/main.overview') }}</h2>
        <p class="section-lead">{{ trans('admin/main.overview_hint') }}</p>

        <div class="row">
            <div class="col-lg-6">
                <div class="card card-large-icons">
                    <div class="card-icon bg-primary text-white">
                        <i class="fas fa-cog"></i>
                    </div>
                    <div class="card-body">
                        <h4>{{ trans('admin/main.general_card_title') }}</h4>
                        <p>{{ trans('admin/main.general_card_hint') }}</p>
                        <a href="/admin/settings/general" class="card-cta">{{ trans('admin/main.change_setting') }}<i
                                class="fas fa-chevron-right"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="card card-large-icons">
                    <div class="card-icon bg-primary text-white">
                        <i class="fas fa-dollar-sign"></i>
                    </div>
                    <div class="card-body">
                        <h4>{{ trans('admin/main.financial_card_title') }}</h4>
                        <p>{{ trans('admin/main.financial_card_hint') }}</p>
                        <a href="/admin/settings/financial" class="card-cta">{{ trans('admin/main.change_setting') }}<i
                                class="fas fa-chevron-right"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="card card-large-icons">
                    <div class="card-icon bg-primary text-white">
                        <i class="fas fa-wrench"></i>
                    </div>
                    <div class="card-body">
                        <h4>{{ trans('admin/main.personalization_card_title') }}</h4>
                        <p>{{ trans('admin/main.personalization_card_hint') }}</p>
                        <a href="/admin/settings/personalization/page_background"
                            class="card-cta">{{ trans('admin/main.change_setting') }}<i
                                class="fas fa-chevron-right"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="card card-large-icons">
                    <div class="card-icon bg-primary text-white">
                        <i class="fas fa-bell"></i>
                    </div>
                    <div class="card-body">
                        <h4>{{ trans('admin/main.notifications_card_title') }}</h4>
                        <p>{{ trans('admin/main.notifications_card_hint') }}</p>
                        <a href="/admin/settings/notifications"
                            class="card-cta">{{ trans('admin/main.change_setting') }}<i
                                class="fas fa-chevron-right"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="card card-large-icons">
                    <div class="card-icon bg-primary text-white">
                        <i class="fas fa-globe"></i>
                    </div>
                    <div class="card-body">
                        <h4>{{ trans('admin/main.seo_card_title') }}</h4>
                        <p>{{ trans('admin/main.seo_card_hint') }}</p>
                        <a href="/admin/settings/seo" class="card-cta">{{ trans('admin/main.change_setting') }}<i
                                class="fas fa-chevron-right"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="card card-large-icons">
                    <div class="card-icon bg-primary text-white">
                        <i class="fas fa-list-alt"></i>
                    </div>
                    <div class="card-body">
                        <h4>{{ trans('admin/main.customization_card_title') }}</h4>
                        <p>{{ trans('admin/main.customization_card_hint') }}</p>
                        <a href="/admin/settings/customization"
                            class="card-cta text-primary">{{ trans('admin/main.change_setting') }}<i
                                class="fas fa-chevron-right"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="card card-large-icons">
                    <div class="card-icon bg-primary text-white">
                        <i class="fas fa-list-alt"></i>
                    </div>
                    <div class="card-body">
                        <h4>Update App</h4>
                        <p>Update your platform to the latest version easily (disabled)</p>
                        <a href="/admin/settings/update-app" class="card-cta text-primary">Change Settings<i
                                class="fas fa-chevron-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection