@extends('web.default.layouts.app', ['appFooter' => false, 'appHeader' => false, 'justMobileApp' => true])

@php
    $maintenanceSettings = getMaintenanceSettings();
    $endDate = !empty($maintenanceSettings['end_date']) ? $maintenanceSettings['end_date'] : null;

    $remainingTimes = null;

    if (!empty($endDate) and is_numeric($endDate)) {
        $remainingTimes = time2string($endDate -  time());
    }
@endphp

@section('content')
    <section class="maintenance-section mt-25 mb-50 position-relative">
        <div class="container">
            <div class="d-flex-center flex-column">
                @if(!empty($maintenanceSettings['image']))
                    <div class="maintenance-image">
                        <img src="{{ $maintenanceSettings['image'] }}" alt="{{ $maintenanceSettings['title'] }}" class="img-cover">
                    </div>
                @endif

                @if(!empty($maintenanceSettings['title']))
                    <h1 class="font-36 font-weight-bold mt-10">{{ $maintenanceSettings['title'] }}</h1>
                @endif

                @if(!empty($maintenanceSettings['description']))
                    <p class="font-14 font-weight-500 text-gray mt-15">{!! nl2br($maintenanceSettings['description']) !!}</p>
                @endif

            </div>
        </div>
    </section>

@endsection

@push('scripts_bottom')
    <style>
        .top-navbar {
            display: none !important;
        }
        section.maintenance-section.mt-25.mb-50.position-relative {
            /* vertical-align: middle; */
            min-height: 80vh;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-top: 0 !important;
            margin-bottom: 0 !important;
        }
    </style>
    <script src="/assets/default/js/parts/maintenance.min.js"></script>
@endpush
