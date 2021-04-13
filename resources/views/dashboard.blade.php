@extends('layouts.main')
@section('header')
<!-- begin::page-header -->
<!-- <div class="page-header">
    <div class="container-fluid d-sm-flex justify-content-between">
        <h4>DashBoard</h4>
        <div class="pull-right">
           
        </div>
    </div>
</div> -->
<!--Page header-->
<div class="hor-content main-content">
    <div class="container">
        <div class="page-header">
            <div class="page-leftheader">
                <h4 class="page-title mb-0">Hi! Welcome</h4>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="https://laravel.spruko.com/admitro/Horizontal-Light/#"><i
                                class="fe fe-home mr-2 fs-14"></i>Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><a
                            href="https://laravel.spruko.com/admitro/Horizontal-Light/#">Sales Dashboard</a></li>
                </ol>
            </div>
            <div class="page-rightheader">
                <div class="btn btn-list">
                    <a href="https://laravel.spruko.com/admitro/Horizontal-Light/#" class="btn btn-info"><i
                            class="fe fe-settings mr-1"></i> General Settings </a>
                    <a href="https://laravel.spruko.com/admitro/Horizontal-Light/#" class="btn btn-danger"><i
                            class="fe fe-printer mr-1"></i> Print </a>
                    <a href="https://laravel.spruko.com/admitro/Horizontal-Light/#" class="btn btn-warning"><i
                            class="fe fe-shopping-cart mr-1"></i> Buy Now </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!--End Page header-->
@endsection
@section('content')
<!-- begin::main-content -->
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card bg-secondary-gradient">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-md-12">
                            <!-- <h6 class="card-title mb-3">Welcome</h6> -->
                            <!-- Row-1 -->
                            <div class="row">
                                <div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
                                    <div class="card overflow-hidden dash1-card border-0">
                                        <div class="card-body">
                                            <p class=" mb-1 ">Total Sales</p>
                                            <h2 class="mb-1 number-font">$3,257</h2>
                                            <small class="fs-12 text-muted">Compared to Last Month</small>
                                            <span class="ratio bg-warning">76%</span>
                                            <span class="ratio-text text-muted">Goals Reached</span>
                                        </div>
                                        <div id="spark1" style="min-height: 60px;">
                                            <div id="apexchartspnlras6n"
                                                class="apexcharts-canvas apexchartspnlras6n light"
                                                style="width: 276px; height: 60px;"><svg id="SvgjsSvg1006" width="276"
                                                    height="60" xmlns="http://www.w3.org/2000/svg" version="1.1"
                                                    xlink="http://www.w3.org/1999/xlink" svgjs="http://svgjs.com/svgjs"
                                                    class="apexcharts-svg" xmlns:data="ApexChartsNS"
                                                    transform="translate(0, 0)"
                                                    style="background: transparent none repeat scroll 0% 0%;">
                                                    <g id="SvgjsG1008" class="apexcharts-inner apexcharts-graphical"
                                                        transform="translate(0, 0)">
                                                        <defs id="SvgjsDefs1007">
                                                            <clipPath id="gridRectMaskpnlras6n">
                                                                <rect id="SvgjsRect1013" width="278" height="62" x="-1"
                                                                    y="-1" rx="0" ry="0" fill="#ffffff" opacity="1"
                                                                    stroke-width="0" stroke="none" stroke-dasharray="0">
                                                                </rect>
                                                            </clipPath>
                                                            <clipPath id="gridRectMarkerMaskpnlras6n">
                                                                <rect id="SvgjsRect1014" width="278" height="62" x="-1"
                                                                    y="-1" rx="0" ry="0" fill="#ffffff" opacity="1"
                                                                    stroke-width="0" stroke="none" stroke-dasharray="0">
                                                                </rect>
                                                            </clipPath>
                                                            <linearGradient id="SvgjsLinearGradient1020" x1="0" y1="0"
                                                                x2="0" y2="1">
                                                                <stop id="SvgjsStop1021" stop-opacity="0.65"
                                                                    stop-color="rgba(250,5,122,0.65)" offset="0"></stop>
                                                                <stop id="SvgjsStop1022" stop-opacity="0.5"
                                                                    stop-color="rgba(253,130,189,0.5)" offset="1">
                                                                </stop>
                                                                <stop id="SvgjsStop1023" stop-opacity="0.5"
                                                                    stop-color="rgba(253,130,189,0.5)" offset="1">
                                                                </stop>
                                                            </linearGradient>
                                                            <filter id="SvgjsFilter1026" filterUnits="userSpaceOnUse">
                                                                <feFlood id="SvgjsFeFlood1027" flood-color="#000000"
                                                                    flood-opacity="0.2" result="SvgjsFeFlood1027Out"
                                                                    in="SourceGraphic"></feFlood>
                                                                <feComposite id="SvgjsFeComposite1028"
                                                                    in="SvgjsFeFlood1027Out" in2="SourceAlpha"
                                                                    operator="in" result="SvgjsFeComposite1028Out">
                                                                </feComposite>
                                                                <feOffset id="SvgjsFeOffset1029" dx="2" dy="2"
                                                                    result="SvgjsFeOffset1029Out"
                                                                    in="SvgjsFeComposite1028Out"></feOffset>
                                                                <feGaussianBlur id="SvgjsFeGaussianBlur1030"
                                                                    stdDeviation="3 "
                                                                    result="SvgjsFeGaussianBlur1030Out"
                                                                    in="SvgjsFeOffset1029Out"></feGaussianBlur>
                                                                <feBlend id="SvgjsFeBlend1031" in="SourceGraphic"
                                                                    in2="SvgjsFeGaussianBlur1030Out" mode="normal"
                                                                    result="SvgjsFeBlend1031Out"></feBlend>
                                                            </filter>
                                                            <filter id="SvgjsFilter1034" filterUnits="userSpaceOnUse">
                                                                <feFlood id="SvgjsFeFlood1035" flood-color="#000000"
                                                                    flood-opacity="0.2" result="SvgjsFeFlood1035Out"
                                                                    in="SourceGraphic"></feFlood>
                                                                <feComposite id="SvgjsFeComposite1036"
                                                                    in="SvgjsFeFlood1035Out" in2="SourceAlpha"
                                                                    operator="in" result="SvgjsFeComposite1036Out">
                                                                </feComposite>
                                                                <feOffset id="SvgjsFeOffset1037" dx="2" dy="2"
                                                                    result="SvgjsFeOffset1037Out"
                                                                    in="SvgjsFeComposite1036Out"></feOffset>
                                                                <feGaussianBlur id="SvgjsFeGaussianBlur1038"
                                                                    stdDeviation="3 "
                                                                    result="SvgjsFeGaussianBlur1038Out"
                                                                    in="SvgjsFeOffset1037Out"></feGaussianBlur>
                                                                <feBlend id="SvgjsFeBlend1039" in="SourceGraphic"
                                                                    in2="SvgjsFeGaussianBlur1038Out" mode="normal"
                                                                    result="SvgjsFeBlend1039Out"></feBlend>
                                                            </filter>
                                                        </defs>
                                                        <line id="SvgjsLine1012" x1="0" y1="0" x2="0" y2="60"
                                                            stroke="#b6b6b6" stroke-dasharray="3"
                                                            class="apexcharts-xcrosshairs" x="0" y="0" width="1"
                                                            height="60" fill="#b1b9c4" filter="none" fill-opacity="0.9"
                                                            stroke-width="1"></line>
                                                        <g id="SvgjsG1040" class="apexcharts-xaxis"
                                                            transform="translate(0, 0)">
                                                            <g id="SvgjsG1041" class="apexcharts-xaxis-texts-g"
                                                                transform="translate(0, 1.875)"></g>
                                                        </g>
                                                        <g id="SvgjsG1044" class="apexcharts-grid">
                                                            <line id="SvgjsLine1046" x1="0" y1="60" x2="276" y2="60"
                                                                stroke="transparent" stroke-dasharray="0"></line>
                                                            <line id="SvgjsLine1045" x1="0" y1="1" x2="0" y2="60"
                                                                stroke="transparent" stroke-dasharray="0"></line>
                                                        </g>
                                                        <g id="SvgjsG1016"
                                                            class="apexcharts-area-series apexcharts-plot-series">
                                                            <g id="SvgjsG1017" class="apexcharts-series"
                                                                seriesName="TotalxSales" data:longestSeries="true"
                                                                rel="1" data:realIndex="0">
                                                                <path id="SvgjsPath1024"
                                                                    d="M0 60L0 32.258064516129025C4.199999999999999 32.258064516129025 7.800000000000001 30.96774193548387 12 30.96774193548387C16.2 30.96774193548387 19.8 -7.105427357601002e-15 24 -7.105427357601002e-15C28.2 -7.105427357601002e-15 31.8 35.483870967741936 36 35.483870967741936C40.2 35.483870967741936 43.8 25.16129032258064 48 25.16129032258064C52.2 25.16129032258064 55.8 33.54838709677419 60 33.54838709677419C64.2 33.54838709677419 67.8 25.16129032258064 72 25.16129032258064C76.2 25.16129032258064 79.8 27.096774193548384 84 27.096774193548384C88.2 27.096774193548384 91.8 18.064516129032256 96 18.064516129032256C100.2 18.064516129032256 103.8 20.645161290322577 108 20.645161290322577C112.2 20.645161290322577 115.8 36.12903225806451 120 36.12903225806451C124.2 36.12903225806451 127.8 60 132 60C136.2 60 139.8 30.32258064516129 144 30.32258064516129C148.2 30.32258064516129 151.8 44.516129032258064 156 44.516129032258064C160.2 44.516129032258064 163.8 19.999999999999993 168 19.999999999999993C172.2 19.999999999999993 175.8 37.41935483870968 180 37.41935483870968C184.2 37.41935483870968 187.8 37.41935483870968 192 37.41935483870968C196.2 37.41935483870968 199.8 25.806451612903224 204 25.806451612903224C208.2 25.806451612903224 211.8 23.87096774193548 216 23.87096774193548C220.2 23.87096774193548 223.8 42.58064516129032 228 42.58064516129032C232.2 42.58064516129032 235.8 42.58064516129032 240 42.58064516129032C244.2 42.58064516129032 247.8 47.74193548387097 252 47.74193548387097C256.2 47.74193548387097 259.8 40 264 40C268.2 40 271.8 34.83870967741935 276 34.83870967741935C276 34.83870967741935 276 34.83870967741935 276 60M276 34.83870967741935C276 34.83870967741935 276 34.83870967741935 276 34.83870967741935 "
                                                                    fill="url(#SvgjsLinearGradient1020)"
                                                                    fill-opacity="1" stroke-opacity="1"
                                                                    stroke-linecap="butt" stroke-width="0"
                                                                    stroke-dasharray="0" class="apexcharts-area"
                                                                    index="0" clip-path="url(#gridRectMaskpnlras6n)"
                                                                    filter="url(#SvgjsFilter1026)"
                                                                    pathTo="M 0 60L 0 32.258064516129025C 4.199999999999999 32.258064516129025 7.800000000000001 30.96774193548387 12 30.96774193548387C 16.2 30.96774193548387 19.8 -7.105427357601002e-15 24 -7.105427357601002e-15C 28.2 -7.105427357601002e-15 31.8 35.483870967741936 36 35.483870967741936C 40.2 35.483870967741936 43.8 25.16129032258064 48 25.16129032258064C 52.2 25.16129032258064 55.8 33.54838709677419 60 33.54838709677419C 64.2 33.54838709677419 67.8 25.16129032258064 72 25.16129032258064C 76.2 25.16129032258064 79.8 27.096774193548384 84 27.096774193548384C 88.2 27.096774193548384 91.8 18.064516129032256 96 18.064516129032256C 100.2 18.064516129032256 103.8 20.645161290322577 108 20.645161290322577C 112.2 20.645161290322577 115.8 36.12903225806451 120 36.12903225806451C 124.2 36.12903225806451 127.8 60 132 60C 136.2 60 139.8 30.32258064516129 144 30.32258064516129C 148.2 30.32258064516129 151.8 44.516129032258064 156 44.516129032258064C 160.2 44.516129032258064 163.8 19.999999999999993 168 19.999999999999993C 172.2 19.999999999999993 175.8 37.41935483870968 180 37.41935483870968C 184.2 37.41935483870968 187.8 37.41935483870968 192 37.41935483870968C 196.2 37.41935483870968 199.8 25.806451612903224 204 25.806451612903224C 208.2 25.806451612903224 211.8 23.87096774193548 216 23.87096774193548C 220.2 23.87096774193548 223.8 42.58064516129032 228 42.58064516129032C 232.2 42.58064516129032 235.8 42.58064516129032 240 42.58064516129032C 244.2 42.58064516129032 247.8 47.74193548387097 252 47.74193548387097C 256.2 47.74193548387097 259.8 40 264 40C 268.2 40 271.8 34.83870967741935 276 34.83870967741935C 276 34.83870967741935 276 34.83870967741935 276 60M 276 34.83870967741935z"
                                                                    pathFrom="M -1 60L -1 60L 12 60L 24 60L 36 60L 48 60L 60 60L 72 60L 84 60L 96 60L 108 60L 120 60L 132 60L 144 60L 156 60L 168 60L 180 60L 192 60L 204 60L 216 60L 228 60L 240 60L 252 60L 264 60L 276 60">
                                                                </path>
                                                                <path id="SvgjsPath1032"
                                                                    d="M0 32.258064516129025C4.199999999999999 32.258064516129025 7.800000000000001 30.96774193548387 12 30.96774193548387C16.2 30.96774193548387 19.8 -7.105427357601002e-15 24 -7.105427357601002e-15C28.2 -7.105427357601002e-15 31.8 35.483870967741936 36 35.483870967741936C40.2 35.483870967741936 43.8 25.16129032258064 48 25.16129032258064C52.2 25.16129032258064 55.8 33.54838709677419 60 33.54838709677419C64.2 33.54838709677419 67.8 25.16129032258064 72 25.16129032258064C76.2 25.16129032258064 79.8 27.096774193548384 84 27.096774193548384C88.2 27.096774193548384 91.8 18.064516129032256 96 18.064516129032256C100.2 18.064516129032256 103.8 20.645161290322577 108 20.645161290322577C112.2 20.645161290322577 115.8 36.12903225806451 120 36.12903225806451C124.2 36.12903225806451 127.8 60 132 60C136.2 60 139.8 30.32258064516129 144 30.32258064516129C148.2 30.32258064516129 151.8 44.516129032258064 156 44.516129032258064C160.2 44.516129032258064 163.8 19.999999999999993 168 19.999999999999993C172.2 19.999999999999993 175.8 37.41935483870968 180 37.41935483870968C184.2 37.41935483870968 187.8 37.41935483870968 192 37.41935483870968C196.2 37.41935483870968 199.8 25.806451612903224 204 25.806451612903224C208.2 25.806451612903224 211.8 23.87096774193548 216 23.87096774193548C220.2 23.87096774193548 223.8 42.58064516129032 228 42.58064516129032C232.2 42.58064516129032 235.8 42.58064516129032 240 42.58064516129032C244.2 42.58064516129032 247.8 47.74193548387097 252 47.74193548387097C256.2 47.74193548387097 259.8 40 264 40C268.2 40 271.8 34.83870967741935 276 34.83870967741935C276 34.83870967741935 276 34.83870967741935 276 34.83870967741935 "
                                                                    fill="none" fill-opacity="1" stroke="#fa057a"
                                                                    stroke-opacity="1" stroke-linecap="butt"
                                                                    stroke-width="2" stroke-dasharray="0"
                                                                    class="apexcharts-area" index="0"
                                                                    clip-path="url(#gridRectMaskpnlras6n)"
                                                                    filter="url(#SvgjsFilter1034)"
                                                                    pathTo="M 0 32.258064516129025C 4.199999999999999 32.258064516129025 7.800000000000001 30.96774193548387 12 30.96774193548387C 16.2 30.96774193548387 19.8 -7.105427357601002e-15 24 -7.105427357601002e-15C 28.2 -7.105427357601002e-15 31.8 35.483870967741936 36 35.483870967741936C 40.2 35.483870967741936 43.8 25.16129032258064 48 25.16129032258064C 52.2 25.16129032258064 55.8 33.54838709677419 60 33.54838709677419C 64.2 33.54838709677419 67.8 25.16129032258064 72 25.16129032258064C 76.2 25.16129032258064 79.8 27.096774193548384 84 27.096774193548384C 88.2 27.096774193548384 91.8 18.064516129032256 96 18.064516129032256C 100.2 18.064516129032256 103.8 20.645161290322577 108 20.645161290322577C 112.2 20.645161290322577 115.8 36.12903225806451 120 36.12903225806451C 124.2 36.12903225806451 127.8 60 132 60C 136.2 60 139.8 30.32258064516129 144 30.32258064516129C 148.2 30.32258064516129 151.8 44.516129032258064 156 44.516129032258064C 160.2 44.516129032258064 163.8 19.999999999999993 168 19.999999999999993C 172.2 19.999999999999993 175.8 37.41935483870968 180 37.41935483870968C 184.2 37.41935483870968 187.8 37.41935483870968 192 37.41935483870968C 196.2 37.41935483870968 199.8 25.806451612903224 204 25.806451612903224C 208.2 25.806451612903224 211.8 23.87096774193548 216 23.87096774193548C 220.2 23.87096774193548 223.8 42.58064516129032 228 42.58064516129032C 232.2 42.58064516129032 235.8 42.58064516129032 240 42.58064516129032C 244.2 42.58064516129032 247.8 47.74193548387097 252 47.74193548387097C 256.2 47.74193548387097 259.8 40 264 40C 268.2 40 271.8 34.83870967741935 276 34.83870967741935"
                                                                    pathFrom="M -1 60L -1 60L 12 60L 24 60L 36 60L 48 60L 60 60L 72 60L 84 60L 96 60L 108 60L 120 60L 132 60L 144 60L 156 60L 168 60L 180 60L 192 60L 204 60L 216 60L 228 60L 240 60L 252 60L 264 60L 276 60">
                                                                </path>
                                                                <g id="SvgjsG1018"
                                                                    class="apexcharts-series-markers-wrap"></g>
                                                                <g id="SvgjsG1019" class="apexcharts-datalabels"></g>
                                                            </g>
                                                        </g>
                                                        <line id="SvgjsLine1047" x1="0" y1="0" x2="276" y2="0"
                                                            stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1"
                                                            class="apexcharts-ycrosshairs"></line>
                                                        <line id="SvgjsLine1048" x1="0" y1="0" x2="276" y2="0"
                                                            stroke-dasharray="0" stroke-width="0"
                                                            class="apexcharts-ycrosshairs-hidden"></line>
                                                        <g id="SvgjsG1049" class="apexcharts-yaxis-annotations"></g>
                                                        <g id="SvgjsG1050" class="apexcharts-xaxis-annotations"></g>
                                                        <g id="SvgjsG1051" class="apexcharts-point-annotations"></g>
                                                    </g>
                                                    <rect id="SvgjsRect1011" width="0" height="0" x="0" y="0" rx="0"
                                                        ry="0" fill="#fefefe" opacity="1" stroke-width="0" stroke="none"
                                                        stroke-dasharray="0"></rect>
                                                    <g id="SvgjsG1042" class="apexcharts-yaxis" rel="0"
                                                        transform="translate(-21, 0)">
                                                        <g id="SvgjsG1043" class="apexcharts-yaxis-texts-g"></g>
                                                    </g>
                                                </svg>
                                                <div class="apexcharts-legend"></div>
                                            </div>
                                        </div>
                                        <div class="resize-triggers">
                                            <div class="expand-trigger">
                                                <div style="width: 277px; height: 188px;"></div>
                                            </div>
                                            <div class="contract-trigger"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
                                    <div class="card overflow-hidden dash1-card border-0">
                                        <div class="card-body">
                                            <p class=" mb-1 ">Total User</p>
                                            <h2 class="mb-1 number-font">1,678</h2>
                                            <small class="fs-12 text-muted">Compared to Last Month</small>
                                            <span class="ratio bg-info">85%</span>
                                            <span class="ratio-text text-muted">Goals Reached</span>
                                        </div>
                                        <div id="spark2" style="min-height: 60px;">
                                            <div id="apexcharts3u1nklmd"
                                                class="apexcharts-canvas apexcharts3u1nklmd light"
                                                style="width: 276px; height: 60px;"><svg id="SvgjsSvg1052" width="276"
                                                    height="60" xmlns="http://www.w3.org/2000/svg" version="1.1"
                                                    xlink="http://www.w3.org/1999/xlink" svgjs="http://svgjs.com/svgjs"
                                                    class="apexcharts-svg" xmlns:data="ApexChartsNS"
                                                    transform="translate(0, 0)"
                                                    style="background: transparent none repeat scroll 0% 0%;">
                                                    <g id="SvgjsG1054" class="apexcharts-inner apexcharts-graphical"
                                                        transform="translate(0, 0)">
                                                        <defs id="SvgjsDefs1053">
                                                            <clipPath id="gridRectMask3u1nklmd">
                                                                <rect id="SvgjsRect1059" width="278" height="62" x="-1"
                                                                    y="-1" rx="0" ry="0" fill="#ffffff" opacity="1"
                                                                    stroke-width="0" stroke="none" stroke-dasharray="0">
                                                                </rect>
                                                            </clipPath>
                                                            <clipPath id="gridRectMarkerMask3u1nklmd">
                                                                <rect id="SvgjsRect1060" width="278" height="62" x="-1"
                                                                    y="-1" rx="0" ry="0" fill="#ffffff" opacity="1"
                                                                    stroke-width="0" stroke="none" stroke-dasharray="0">
                                                                </rect>
                                                            </clipPath>
                                                            <linearGradient id="SvgjsLinearGradient1066" x1="0" y1="0"
                                                                x2="0" y2="1">
                                                                <stop id="SvgjsStop1067" stop-opacity="0.65"
                                                                    stop-color="rgba(45,206,137,0.65)" offset="0">
                                                                </stop>
                                                                <stop id="SvgjsStop1068" stop-opacity="0.5"
                                                                    stop-color="rgba(150,231,196,0.5)" offset="1">
                                                                </stop>
                                                                <stop id="SvgjsStop1069" stop-opacity="0.5"
                                                                    stop-color="rgba(150,231,196,0.5)" offset="1">
                                                                </stop>
                                                            </linearGradient>
                                                            <filter id="SvgjsFilter1072" filterUnits="userSpaceOnUse">
                                                                <feFlood id="SvgjsFeFlood1073" flood-color="#000000"
                                                                    flood-opacity="0.2" result="SvgjsFeFlood1073Out"
                                                                    in="SourceGraphic"></feFlood>
                                                                <feComposite id="SvgjsFeComposite1074"
                                                                    in="SvgjsFeFlood1073Out" in2="SourceAlpha"
                                                                    operator="in" result="SvgjsFeComposite1074Out">
                                                                </feComposite>
                                                                <feOffset id="SvgjsFeOffset1075" dx="2" dy="2"
                                                                    result="SvgjsFeOffset1075Out"
                                                                    in="SvgjsFeComposite1074Out"></feOffset>
                                                                <feGaussianBlur id="SvgjsFeGaussianBlur1076"
                                                                    stdDeviation="3 "
                                                                    result="SvgjsFeGaussianBlur1076Out"
                                                                    in="SvgjsFeOffset1075Out"></feGaussianBlur>
                                                                <feBlend id="SvgjsFeBlend1077" in="SourceGraphic"
                                                                    in2="SvgjsFeGaussianBlur1076Out" mode="normal"
                                                                    result="SvgjsFeBlend1077Out"></feBlend>
                                                            </filter>
                                                            <filter id="SvgjsFilter1080" filterUnits="userSpaceOnUse">
                                                                <feFlood id="SvgjsFeFlood1081" flood-color="#000000"
                                                                    flood-opacity="0.2" result="SvgjsFeFlood1081Out"
                                                                    in="SourceGraphic"></feFlood>
                                                                <feComposite id="SvgjsFeComposite1082"
                                                                    in="SvgjsFeFlood1081Out" in2="SourceAlpha"
                                                                    operator="in" result="SvgjsFeComposite1082Out">
                                                                </feComposite>
                                                                <feOffset id="SvgjsFeOffset1083" dx="2" dy="2"
                                                                    result="SvgjsFeOffset1083Out"
                                                                    in="SvgjsFeComposite1082Out"></feOffset>
                                                                <feGaussianBlur id="SvgjsFeGaussianBlur1084"
                                                                    stdDeviation="3 "
                                                                    result="SvgjsFeGaussianBlur1084Out"
                                                                    in="SvgjsFeOffset1083Out"></feGaussianBlur>
                                                                <feBlend id="SvgjsFeBlend1085" in="SourceGraphic"
                                                                    in2="SvgjsFeGaussianBlur1084Out" mode="normal"
                                                                    result="SvgjsFeBlend1085Out"></feBlend>
                                                            </filter>
                                                        </defs>
                                                        <line id="SvgjsLine1058" x1="0" y1="0" x2="0" y2="60"
                                                            stroke="#b6b6b6" stroke-dasharray="3"
                                                            class="apexcharts-xcrosshairs" x="0" y="0" width="1"
                                                            height="60" fill="#b1b9c4" filter="none" fill-opacity="0.9"
                                                            stroke-width="1"></line>
                                                        <g id="SvgjsG1086" class="apexcharts-xaxis"
                                                            transform="translate(0, 0)">
                                                            <g id="SvgjsG1087" class="apexcharts-xaxis-texts-g"
                                                                transform="translate(0, 1.875)"></g>
                                                        </g>
                                                        <g id="SvgjsG1090" class="apexcharts-grid">
                                                            <line id="SvgjsLine1092" x1="0" y1="60" x2="276" y2="60"
                                                                stroke="transparent" stroke-dasharray="0"></line>
                                                            <line id="SvgjsLine1091" x1="0" y1="1" x2="0" y2="60"
                                                                stroke="transparent" stroke-dasharray="0"></line>
                                                        </g>
                                                        <g id="SvgjsG1062"
                                                            class="apexcharts-area-series apexcharts-plot-series">
                                                            <g id="SvgjsG1063" class="apexcharts-series"
                                                                seriesName="TotalxUser" data:longestSeries="true"
                                                                rel="1" data:realIndex="0">
                                                                <path id="SvgjsPath1070"
                                                                    d="M0 60L0 37.41935483870968C4.199999999999999 37.41935483870968 7.800000000000001 23.87096774193548 12 23.87096774193548C16.2 23.87096774193548 19.8 44.516129032258064 24 44.516129032258064C28.2 44.516129032258064 31.8 19.999999999999993 36 19.999999999999993C40.2 19.999999999999993 43.8 30.96774193548387 48 30.96774193548387C52.2 30.96774193548387 55.8 33.54838709677419 60 33.54838709677419C64.2 33.54838709677419 67.8 37.41935483870968 72 37.41935483870968C76.2 37.41935483870968 79.8 27.096774193548384 84 27.096774193548384C88.2 27.096774193548384 91.8 47.74193548387097 96 47.74193548387097C100.2 47.74193548387097 103.8 30.32258064516129 108 30.32258064516129C112.2 30.32258064516129 115.8 40 120 40C124.2 40 127.8 -7.105427357601002e-15 132 -7.105427357601002e-15C136.2 -7.105427357601002e-15 139.8 32.258064516129025 144 32.258064516129025C148.2 32.258064516129025 151.8 40 156 40C160.2 40 163.8 34.83870967741935 168 34.83870967741935C172.2 34.83870967741935 175.8 20.645161290322577 180 20.645161290322577C184.2 20.645161290322577 187.8 25.806451612903224 192 25.806451612903224C196.2 25.806451612903224 199.8 35.483870967741936 204 35.483870967741936C208.2 35.483870967741936 211.8 36.12903225806451 216 36.12903225806451C220.2 36.12903225806451 223.8 42.58064516129032 228 42.58064516129032C232.2 42.58064516129032 235.8 18.064516129032256 240 18.064516129032256C244.2 18.064516129032256 247.8 25.16129032258064 252 25.16129032258064C256.2 25.16129032258064 259.8 60 264 60C268.2 60 271.8 25.16129032258064 276 25.16129032258064C276 25.16129032258064 276 25.16129032258064 276 60M276 25.16129032258064C276 25.16129032258064 276 25.16129032258064 276 25.16129032258064 "
                                                                    fill="url(#SvgjsLinearGradient1066)"
                                                                    fill-opacity="1" stroke-opacity="1"
                                                                    stroke-linecap="butt" stroke-width="0"
                                                                    stroke-dasharray="0" class="apexcharts-area"
                                                                    index="0" clip-path="url(#gridRectMask3u1nklmd)"
                                                                    filter="url(#SvgjsFilter1072)"
                                                                    pathTo="M 0 60L 0 37.41935483870968C 4.199999999999999 37.41935483870968 7.800000000000001 23.87096774193548 12 23.87096774193548C 16.2 23.87096774193548 19.8 44.516129032258064 24 44.516129032258064C 28.2 44.516129032258064 31.8 19.999999999999993 36 19.999999999999993C 40.2 19.999999999999993 43.8 30.96774193548387 48 30.96774193548387C 52.2 30.96774193548387 55.8 33.54838709677419 60 33.54838709677419C 64.2 33.54838709677419 67.8 37.41935483870968 72 37.41935483870968C 76.2 37.41935483870968 79.8 27.096774193548384 84 27.096774193548384C 88.2 27.096774193548384 91.8 47.74193548387097 96 47.74193548387097C 100.2 47.74193548387097 103.8 30.32258064516129 108 30.32258064516129C 112.2 30.32258064516129 115.8 40 120 40C 124.2 40 127.8 -7.105427357601002e-15 132 -7.105427357601002e-15C 136.2 -7.105427357601002e-15 139.8 32.258064516129025 144 32.258064516129025C 148.2 32.258064516129025 151.8 40 156 40C 160.2 40 163.8 34.83870967741935 168 34.83870967741935C 172.2 34.83870967741935 175.8 20.645161290322577 180 20.645161290322577C 184.2 20.645161290322577 187.8 25.806451612903224 192 25.806451612903224C 196.2 25.806451612903224 199.8 35.483870967741936 204 35.483870967741936C 208.2 35.483870967741936 211.8 36.12903225806451 216 36.12903225806451C 220.2 36.12903225806451 223.8 42.58064516129032 228 42.58064516129032C 232.2 42.58064516129032 235.8 18.064516129032256 240 18.064516129032256C 244.2 18.064516129032256 247.8 25.16129032258064 252 25.16129032258064C 256.2 25.16129032258064 259.8 60 264 60C 268.2 60 271.8 25.16129032258064 276 25.16129032258064C 276 25.16129032258064 276 25.16129032258064 276 60M 276 25.16129032258064z"
                                                                    pathFrom="M -1 60L -1 60L 12 60L 24 60L 36 60L 48 60L 60 60L 72 60L 84 60L 96 60L 108 60L 120 60L 132 60L 144 60L 156 60L 168 60L 180 60L 192 60L 204 60L 216 60L 228 60L 240 60L 252 60L 264 60L 276 60">
                                                                </path>
                                                                <path id="SvgjsPath1078"
                                                                    d="M0 37.41935483870968C4.199999999999999 37.41935483870968 7.800000000000001 23.87096774193548 12 23.87096774193548C16.2 23.87096774193548 19.8 44.516129032258064 24 44.516129032258064C28.2 44.516129032258064 31.8 19.999999999999993 36 19.999999999999993C40.2 19.999999999999993 43.8 30.96774193548387 48 30.96774193548387C52.2 30.96774193548387 55.8 33.54838709677419 60 33.54838709677419C64.2 33.54838709677419 67.8 37.41935483870968 72 37.41935483870968C76.2 37.41935483870968 79.8 27.096774193548384 84 27.096774193548384C88.2 27.096774193548384 91.8 47.74193548387097 96 47.74193548387097C100.2 47.74193548387097 103.8 30.32258064516129 108 30.32258064516129C112.2 30.32258064516129 115.8 40 120 40C124.2 40 127.8 -7.105427357601002e-15 132 -7.105427357601002e-15C136.2 -7.105427357601002e-15 139.8 32.258064516129025 144 32.258064516129025C148.2 32.258064516129025 151.8 40 156 40C160.2 40 163.8 34.83870967741935 168 34.83870967741935C172.2 34.83870967741935 175.8 20.645161290322577 180 20.645161290322577C184.2 20.645161290322577 187.8 25.806451612903224 192 25.806451612903224C196.2 25.806451612903224 199.8 35.483870967741936 204 35.483870967741936C208.2 35.483870967741936 211.8 36.12903225806451 216 36.12903225806451C220.2 36.12903225806451 223.8 42.58064516129032 228 42.58064516129032C232.2 42.58064516129032 235.8 18.064516129032256 240 18.064516129032256C244.2 18.064516129032256 247.8 25.16129032258064 252 25.16129032258064C256.2 25.16129032258064 259.8 60 264 60C268.2 60 271.8 25.16129032258064 276 25.16129032258064C276 25.16129032258064 276 25.16129032258064 276 25.16129032258064 "
                                                                    fill="none" fill-opacity="1" stroke="#2dce89"
                                                                    stroke-opacity="1" stroke-linecap="butt"
                                                                    stroke-width="2" stroke-dasharray="0"
                                                                    class="apexcharts-area" index="0"
                                                                    clip-path="url(#gridRectMask3u1nklmd)"
                                                                    filter="url(#SvgjsFilter1080)"
                                                                    pathTo="M 0 37.41935483870968C 4.199999999999999 37.41935483870968 7.800000000000001 23.87096774193548 12 23.87096774193548C 16.2 23.87096774193548 19.8 44.516129032258064 24 44.516129032258064C 28.2 44.516129032258064 31.8 19.999999999999993 36 19.999999999999993C 40.2 19.999999999999993 43.8 30.96774193548387 48 30.96774193548387C 52.2 30.96774193548387 55.8 33.54838709677419 60 33.54838709677419C 64.2 33.54838709677419 67.8 37.41935483870968 72 37.41935483870968C 76.2 37.41935483870968 79.8 27.096774193548384 84 27.096774193548384C 88.2 27.096774193548384 91.8 47.74193548387097 96 47.74193548387097C 100.2 47.74193548387097 103.8 30.32258064516129 108 30.32258064516129C 112.2 30.32258064516129 115.8 40 120 40C 124.2 40 127.8 -7.105427357601002e-15 132 -7.105427357601002e-15C 136.2 -7.105427357601002e-15 139.8 32.258064516129025 144 32.258064516129025C 148.2 32.258064516129025 151.8 40 156 40C 160.2 40 163.8 34.83870967741935 168 34.83870967741935C 172.2 34.83870967741935 175.8 20.645161290322577 180 20.645161290322577C 184.2 20.645161290322577 187.8 25.806451612903224 192 25.806451612903224C 196.2 25.806451612903224 199.8 35.483870967741936 204 35.483870967741936C 208.2 35.483870967741936 211.8 36.12903225806451 216 36.12903225806451C 220.2 36.12903225806451 223.8 42.58064516129032 228 42.58064516129032C 232.2 42.58064516129032 235.8 18.064516129032256 240 18.064516129032256C 244.2 18.064516129032256 247.8 25.16129032258064 252 25.16129032258064C 256.2 25.16129032258064 259.8 60 264 60C 268.2 60 271.8 25.16129032258064 276 25.16129032258064"
                                                                    pathFrom="M -1 60L -1 60L 12 60L 24 60L 36 60L 48 60L 60 60L 72 60L 84 60L 96 60L 108 60L 120 60L 132 60L 144 60L 156 60L 168 60L 180 60L 192 60L 204 60L 216 60L 228 60L 240 60L 252 60L 264 60L 276 60">
                                                                </path>
                                                                <g id="SvgjsG1064"
                                                                    class="apexcharts-series-markers-wrap"></g>
                                                                <g id="SvgjsG1065" class="apexcharts-datalabels"></g>
                                                            </g>
                                                        </g>
                                                        <line id="SvgjsLine1093" x1="0" y1="0" x2="276" y2="0"
                                                            stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1"
                                                            class="apexcharts-ycrosshairs"></line>
                                                        <line id="SvgjsLine1094" x1="0" y1="0" x2="276" y2="0"
                                                            stroke-dasharray="0" stroke-width="0"
                                                            class="apexcharts-ycrosshairs-hidden"></line>
                                                        <g id="SvgjsG1095" class="apexcharts-yaxis-annotations"></g>
                                                        <g id="SvgjsG1096" class="apexcharts-xaxis-annotations"></g>
                                                        <g id="SvgjsG1097" class="apexcharts-point-annotations"></g>
                                                    </g>
                                                    <rect id="SvgjsRect1057" width="0" height="0" x="0" y="0" rx="0"
                                                        ry="0" fill="#fefefe" opacity="1" stroke-width="0" stroke="none"
                                                        stroke-dasharray="0"></rect>
                                                    <g id="SvgjsG1088" class="apexcharts-yaxis" rel="0"
                                                        transform="translate(-21, 0)">
                                                        <g id="SvgjsG1089" class="apexcharts-yaxis-texts-g"></g>
                                                    </g>
                                                </svg>
                                                <div class="apexcharts-legend"></div>
                                            </div>
                                        </div>
                                        <div class="resize-triggers">
                                            <div class="expand-trigger">
                                                <div style="width: 277px; height: 188px;"></div>
                                            </div>
                                            <div class="contract-trigger"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
                                    <div class="card overflow-hidden dash1-card border-0">
                                        <div class="card-body">
                                            <p class=" mb-1 ">Total Income</p>
                                            <h2 class="mb-1 number-font">$2,590</h2>
                                            <small class="fs-12 text-muted">Compared to Last Month</small>
                                            <span class="ratio bg-danger">62%</span>
                                            <span class="ratio-text text-muted">Goals Reached</span>
                                        </div>
                                        <div id="spark3" style="min-height: 60px;">
                                            <div id="apexchartssp8xmior"
                                                class="apexcharts-canvas apexchartssp8xmior light"
                                                style="width: 276px; height: 60px;"><svg id="SvgjsSvg1098" width="276"
                                                    height="60" xmlns="http://www.w3.org/2000/svg" version="1.1"
                                                    xlink="http://www.w3.org/1999/xlink" svgjs="http://svgjs.com/svgjs"
                                                    class="apexcharts-svg" xmlns:data="ApexChartsNS"
                                                    transform="translate(0, 0)"
                                                    style="background: transparent none repeat scroll 0% 0%;">
                                                    <g id="SvgjsG1100" class="apexcharts-inner apexcharts-graphical"
                                                        transform="translate(0, 0)">
                                                        <defs id="SvgjsDefs1099">
                                                            <clipPath id="gridRectMasksp8xmior">
                                                                <rect id="SvgjsRect1105" width="278" height="62" x="-1"
                                                                    y="-1" rx="0" ry="0" fill="#ffffff" opacity="1"
                                                                    stroke-width="0" stroke="none" stroke-dasharray="0">
                                                                </rect>
                                                            </clipPath>
                                                            <clipPath id="gridRectMarkerMasksp8xmior">
                                                                <rect id="SvgjsRect1106" width="278" height="62" x="-1"
                                                                    y="-1" rx="0" ry="0" fill="#ffffff" opacity="1"
                                                                    stroke-width="0" stroke="none" stroke-dasharray="0">
                                                                </rect>
                                                            </clipPath>
                                                            <linearGradient id="SvgjsLinearGradient1112" x1="0" y1="0"
                                                                x2="0" y2="1">
                                                                <stop id="SvgjsStop1113" stop-opacity="0.65"
                                                                    stop-color="rgba(255,91,81,0.65)" offset="0"></stop>
                                                                <stop id="SvgjsStop1114" stop-opacity="0.5"
                                                                    stop-color="rgba(255,173,168,0.5)" offset="1">
                                                                </stop>
                                                                <stop id="SvgjsStop1115" stop-opacity="0.5"
                                                                    stop-color="rgba(255,173,168,0.5)" offset="1">
                                                                </stop>
                                                            </linearGradient>
                                                            <filter id="SvgjsFilter1118" filterUnits="userSpaceOnUse">
                                                                <feFlood id="SvgjsFeFlood1119" flood-color="#000000"
                                                                    flood-opacity="0.2" result="SvgjsFeFlood1119Out"
                                                                    in="SourceGraphic"></feFlood>
                                                                <feComposite id="SvgjsFeComposite1120"
                                                                    in="SvgjsFeFlood1119Out" in2="SourceAlpha"
                                                                    operator="in" result="SvgjsFeComposite1120Out">
                                                                </feComposite>
                                                                <feOffset id="SvgjsFeOffset1121" dx="2" dy="2"
                                                                    result="SvgjsFeOffset1121Out"
                                                                    in="SvgjsFeComposite1120Out"></feOffset>
                                                                <feGaussianBlur id="SvgjsFeGaussianBlur1122"
                                                                    stdDeviation="3 "
                                                                    result="SvgjsFeGaussianBlur1122Out"
                                                                    in="SvgjsFeOffset1121Out"></feGaussianBlur>
                                                                <feBlend id="SvgjsFeBlend1123" in="SourceGraphic"
                                                                    in2="SvgjsFeGaussianBlur1122Out" mode="normal"
                                                                    result="SvgjsFeBlend1123Out"></feBlend>
                                                            </filter>
                                                            <filter id="SvgjsFilter1126" filterUnits="userSpaceOnUse">
                                                                <feFlood id="SvgjsFeFlood1127" flood-color="#000000"
                                                                    flood-opacity="0.2" result="SvgjsFeFlood1127Out"
                                                                    in="SourceGraphic"></feFlood>
                                                                <feComposite id="SvgjsFeComposite1128"
                                                                    in="SvgjsFeFlood1127Out" in2="SourceAlpha"
                                                                    operator="in" result="SvgjsFeComposite1128Out">
                                                                </feComposite>
                                                                <feOffset id="SvgjsFeOffset1129" dx="2" dy="2"
                                                                    result="SvgjsFeOffset1129Out"
                                                                    in="SvgjsFeComposite1128Out"></feOffset>
                                                                <feGaussianBlur id="SvgjsFeGaussianBlur1130"
                                                                    stdDeviation="3 "
                                                                    result="SvgjsFeGaussianBlur1130Out"
                                                                    in="SvgjsFeOffset1129Out"></feGaussianBlur>
                                                                <feBlend id="SvgjsFeBlend1131" in="SourceGraphic"
                                                                    in2="SvgjsFeGaussianBlur1130Out" mode="normal"
                                                                    result="SvgjsFeBlend1131Out"></feBlend>
                                                            </filter>
                                                        </defs>
                                                        <line id="SvgjsLine1104" x1="0" y1="0" x2="0" y2="60"
                                                            stroke="#b6b6b6" stroke-dasharray="3"
                                                            class="apexcharts-xcrosshairs" x="0" y="0" width="1"
                                                            height="60" fill="#b1b9c4" filter="none" fill-opacity="0.9"
                                                            stroke-width="1"></line>
                                                        <g id="SvgjsG1132" class="apexcharts-xaxis"
                                                            transform="translate(0, 0)">
                                                            <g id="SvgjsG1133" class="apexcharts-xaxis-texts-g"
                                                                transform="translate(0, 1.875)"></g>
                                                        </g>
                                                        <g id="SvgjsG1136" class="apexcharts-grid">
                                                            <line id="SvgjsLine1138" x1="0" y1="60" x2="276" y2="60"
                                                                stroke="transparent" stroke-dasharray="0"></line>
                                                            <line id="SvgjsLine1137" x1="0" y1="1" x2="0" y2="60"
                                                                stroke="transparent" stroke-dasharray="0"></line>
                                                        </g>
                                                        <g id="SvgjsG1108"
                                                            class="apexcharts-area-series apexcharts-plot-series">
                                                            <g id="SvgjsG1109" class="apexcharts-series"
                                                                seriesName="TotalxIncome" data:longestSeries="true"
                                                                rel="1" data:realIndex="0">
                                                                <path id="SvgjsPath1116"
                                                                    d="M0 60L0 25.806451612903224C4.199999999999999 25.806451612903224 7.800000000000001 36.12903225806451 12 36.12903225806451C16.2 36.12903225806451 19.8 47.74193548387097 24 47.74193548387097C28.2 47.74193548387097 31.8 37.41935483870968 36 37.41935483870968C40.2 37.41935483870968 43.8 30.32258064516129 48 30.32258064516129C52.2 30.32258064516129 55.8 20.645161290322577 60 20.645161290322577C64.2 20.645161290322577 67.8 42.58064516129032 72 42.58064516129032C76.2 42.58064516129032 79.8 25.16129032258064 84 25.16129032258064C88.2 25.16129032258064 91.8 25.16129032258064 96 25.16129032258064C100.2 25.16129032258064 103.8 33.54838709677419 108 33.54838709677419C112.2 33.54838709677419 115.8 44.516129032258064 120 44.516129032258064C124.2 44.516129032258064 127.8 60 132 60C136.2 60 139.8 37.41935483870968 144 37.41935483870968C148.2 37.41935483870968 151.8 40 156 40C160.2 40 163.8 -7.105427357601002e-15 168 -7.105427357601002e-15C172.2 -7.105427357601002e-15 175.8 30.96774193548387 180 30.96774193548387C184.2 30.96774193548387 187.8 42.58064516129032 192 42.58064516129032C196.2 42.58064516129032 199.8 32.258064516129025 204 32.258064516129025C208.2 32.258064516129025 211.8 23.87096774193548 216 23.87096774193548C220.2 23.87096774193548 223.8 19.999999999999993 228 19.999999999999993C232.2 19.999999999999993 235.8 27.096774193548384 240 27.096774193548384C244.2 27.096774193548384 247.8 35.483870967741936 252 35.483870967741936C256.2 35.483870967741936 259.8 34.83870967741935 264 34.83870967741935C268.2 34.83870967741935 271.8 18.064516129032256 276 18.064516129032256C276 18.064516129032256 276 18.064516129032256 276 60M276 18.064516129032256C276 18.064516129032256 276 18.064516129032256 276 18.064516129032256 "
                                                                    fill="url(#SvgjsLinearGradient1112)"
                                                                    fill-opacity="1" stroke-opacity="1"
                                                                    stroke-linecap="butt" stroke-width="0"
                                                                    stroke-dasharray="0" class="apexcharts-area"
                                                                    index="0" clip-path="url(#gridRectMasksp8xmior)"
                                                                    filter="url(#SvgjsFilter1118)"
                                                                    pathTo="M 0 60L 0 25.806451612903224C 4.199999999999999 25.806451612903224 7.800000000000001 36.12903225806451 12 36.12903225806451C 16.2 36.12903225806451 19.8 47.74193548387097 24 47.74193548387097C 28.2 47.74193548387097 31.8 37.41935483870968 36 37.41935483870968C 40.2 37.41935483870968 43.8 30.32258064516129 48 30.32258064516129C 52.2 30.32258064516129 55.8 20.645161290322577 60 20.645161290322577C 64.2 20.645161290322577 67.8 42.58064516129032 72 42.58064516129032C 76.2 42.58064516129032 79.8 25.16129032258064 84 25.16129032258064C 88.2 25.16129032258064 91.8 25.16129032258064 96 25.16129032258064C 100.2 25.16129032258064 103.8 33.54838709677419 108 33.54838709677419C 112.2 33.54838709677419 115.8 44.516129032258064 120 44.516129032258064C 124.2 44.516129032258064 127.8 60 132 60C 136.2 60 139.8 37.41935483870968 144 37.41935483870968C 148.2 37.41935483870968 151.8 40 156 40C 160.2 40 163.8 -7.105427357601002e-15 168 -7.105427357601002e-15C 172.2 -7.105427357601002e-15 175.8 30.96774193548387 180 30.96774193548387C 184.2 30.96774193548387 187.8 42.58064516129032 192 42.58064516129032C 196.2 42.58064516129032 199.8 32.258064516129025 204 32.258064516129025C 208.2 32.258064516129025 211.8 23.87096774193548 216 23.87096774193548C 220.2 23.87096774193548 223.8 19.999999999999993 228 19.999999999999993C 232.2 19.999999999999993 235.8 27.096774193548384 240 27.096774193548384C 244.2 27.096774193548384 247.8 35.483870967741936 252 35.483870967741936C 256.2 35.483870967741936 259.8 34.83870967741935 264 34.83870967741935C 268.2 34.83870967741935 271.8 18.064516129032256 276 18.064516129032256C 276 18.064516129032256 276 18.064516129032256 276 60M 276 18.064516129032256z"
                                                                    pathFrom="M -1 60L -1 60L 12 60L 24 60L 36 60L 48 60L 60 60L 72 60L 84 60L 96 60L 108 60L 120 60L 132 60L 144 60L 156 60L 168 60L 180 60L 192 60L 204 60L 216 60L 228 60L 240 60L 252 60L 264 60L 276 60">
                                                                </path>
                                                                <path id="SvgjsPath1124"
                                                                    d="M0 25.806451612903224C4.199999999999999 25.806451612903224 7.800000000000001 36.12903225806451 12 36.12903225806451C16.2 36.12903225806451 19.8 47.74193548387097 24 47.74193548387097C28.2 47.74193548387097 31.8 37.41935483870968 36 37.41935483870968C40.2 37.41935483870968 43.8 30.32258064516129 48 30.32258064516129C52.2 30.32258064516129 55.8 20.645161290322577 60 20.645161290322577C64.2 20.645161290322577 67.8 42.58064516129032 72 42.58064516129032C76.2 42.58064516129032 79.8 25.16129032258064 84 25.16129032258064C88.2 25.16129032258064 91.8 25.16129032258064 96 25.16129032258064C100.2 25.16129032258064 103.8 33.54838709677419 108 33.54838709677419C112.2 33.54838709677419 115.8 44.516129032258064 120 44.516129032258064C124.2 44.516129032258064 127.8 60 132 60C136.2 60 139.8 37.41935483870968 144 37.41935483870968C148.2 37.41935483870968 151.8 40 156 40C160.2 40 163.8 -7.105427357601002e-15 168 -7.105427357601002e-15C172.2 -7.105427357601002e-15 175.8 30.96774193548387 180 30.96774193548387C184.2 30.96774193548387 187.8 42.58064516129032 192 42.58064516129032C196.2 42.58064516129032 199.8 32.258064516129025 204 32.258064516129025C208.2 32.258064516129025 211.8 23.87096774193548 216 23.87096774193548C220.2 23.87096774193548 223.8 19.999999999999993 228 19.999999999999993C232.2 19.999999999999993 235.8 27.096774193548384 240 27.096774193548384C244.2 27.096774193548384 247.8 35.483870967741936 252 35.483870967741936C256.2 35.483870967741936 259.8 34.83870967741935 264 34.83870967741935C268.2 34.83870967741935 271.8 18.064516129032256 276 18.064516129032256C276 18.064516129032256 276 18.064516129032256 276 18.064516129032256 "
                                                                    fill="none" fill-opacity="1" stroke="#ff5b51"
                                                                    stroke-opacity="1" stroke-linecap="butt"
                                                                    stroke-width="2" stroke-dasharray="0"
                                                                    class="apexcharts-area" index="0"
                                                                    clip-path="url(#gridRectMasksp8xmior)"
                                                                    filter="url(#SvgjsFilter1126)"
                                                                    pathTo="M 0 25.806451612903224C 4.199999999999999 25.806451612903224 7.800000000000001 36.12903225806451 12 36.12903225806451C 16.2 36.12903225806451 19.8 47.74193548387097 24 47.74193548387097C 28.2 47.74193548387097 31.8 37.41935483870968 36 37.41935483870968C 40.2 37.41935483870968 43.8 30.32258064516129 48 30.32258064516129C 52.2 30.32258064516129 55.8 20.645161290322577 60 20.645161290322577C 64.2 20.645161290322577 67.8 42.58064516129032 72 42.58064516129032C 76.2 42.58064516129032 79.8 25.16129032258064 84 25.16129032258064C 88.2 25.16129032258064 91.8 25.16129032258064 96 25.16129032258064C 100.2 25.16129032258064 103.8 33.54838709677419 108 33.54838709677419C 112.2 33.54838709677419 115.8 44.516129032258064 120 44.516129032258064C 124.2 44.516129032258064 127.8 60 132 60C 136.2 60 139.8 37.41935483870968 144 37.41935483870968C 148.2 37.41935483870968 151.8 40 156 40C 160.2 40 163.8 -7.105427357601002e-15 168 -7.105427357601002e-15C 172.2 -7.105427357601002e-15 175.8 30.96774193548387 180 30.96774193548387C 184.2 30.96774193548387 187.8 42.58064516129032 192 42.58064516129032C 196.2 42.58064516129032 199.8 32.258064516129025 204 32.258064516129025C 208.2 32.258064516129025 211.8 23.87096774193548 216 23.87096774193548C 220.2 23.87096774193548 223.8 19.999999999999993 228 19.999999999999993C 232.2 19.999999999999993 235.8 27.096774193548384 240 27.096774193548384C 244.2 27.096774193548384 247.8 35.483870967741936 252 35.483870967741936C 256.2 35.483870967741936 259.8 34.83870967741935 264 34.83870967741935C 268.2 34.83870967741935 271.8 18.064516129032256 276 18.064516129032256"
                                                                    pathFrom="M -1 60L -1 60L 12 60L 24 60L 36 60L 48 60L 60 60L 72 60L 84 60L 96 60L 108 60L 120 60L 132 60L 144 60L 156 60L 168 60L 180 60L 192 60L 204 60L 216 60L 228 60L 240 60L 252 60L 264 60L 276 60">
                                                                </path>
                                                                <g id="SvgjsG1110"
                                                                    class="apexcharts-series-markers-wrap"></g>
                                                                <g id="SvgjsG1111" class="apexcharts-datalabels"></g>
                                                            </g>
                                                        </g>
                                                        <line id="SvgjsLine1139" x1="0" y1="0" x2="276" y2="0"
                                                            stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1"
                                                            class="apexcharts-ycrosshairs"></line>
                                                        <line id="SvgjsLine1140" x1="0" y1="0" x2="276" y2="0"
                                                            stroke-dasharray="0" stroke-width="0"
                                                            class="apexcharts-ycrosshairs-hidden"></line>
                                                        <g id="SvgjsG1141" class="apexcharts-yaxis-annotations"></g>
                                                        <g id="SvgjsG1142" class="apexcharts-xaxis-annotations"></g>
                                                        <g id="SvgjsG1143" class="apexcharts-point-annotations"></g>
                                                    </g>
                                                    <rect id="SvgjsRect1103" width="0" height="0" x="0" y="0" rx="0"
                                                        ry="0" fill="#fefefe" opacity="1" stroke-width="0" stroke="none"
                                                        stroke-dasharray="0"></rect>
                                                    <g id="SvgjsG1134" class="apexcharts-yaxis" rel="0"
                                                        transform="translate(-21, 0)">
                                                        <g id="SvgjsG1135" class="apexcharts-yaxis-texts-g"></g>
                                                    </g>
                                                </svg>
                                                <div class="apexcharts-legend"></div>
                                            </div>
                                        </div>
                                        <div class="resize-triggers">
                                            <div class="expand-trigger">
                                                <div style="width: 277px; height: 188px;"></div>
                                            </div>
                                            <div class="contract-trigger"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
                                    <div class="card overflow-hidden dash1-card border-0">
                                        <div class="card-body">
                                            <p class=" mb-1">Total Tax</p>
                                            <h2 class="mb-1 number-font">$1,954</h2>
                                            <small class="fs-12 text-muted">Compared to Last Month</small>
                                            <span class="ratio bg-success">53%</span>
                                            <span class="ratio-text text-muted">Goals Reached</span>
                                        </div>
                                        <div id="spark4" style="min-height: 60px;">
                                            <div id="apexchartsoqij2mwe"
                                                class="apexcharts-canvas apexchartsoqij2mwe light"
                                                style="width: 276px; height: 60px;"><svg id="SvgjsSvg1144" width="276"
                                                    height="60" xmlns="http://www.w3.org/2000/svg" version="1.1"
                                                    xlink="http://www.w3.org/1999/xlink" svgjs="http://svgjs.com/svgjs"
                                                    class="apexcharts-svg" xmlns:data="ApexChartsNS"
                                                    transform="translate(0, 0)"
                                                    style="background: transparent none repeat scroll 0% 0%;">
                                                    <g id="SvgjsG1146" class="apexcharts-inner apexcharts-graphical"
                                                        transform="translate(0, 0)">
                                                        <defs id="SvgjsDefs1145">
                                                            <clipPath id="gridRectMaskoqij2mwe">
                                                                <rect id="SvgjsRect1151" width="278" height="62" x="-1"
                                                                    y="-1" rx="0" ry="0" fill="#ffffff" opacity="1"
                                                                    stroke-width="0" stroke="none" stroke-dasharray="0">
                                                                </rect>
                                                            </clipPath>
                                                            <clipPath id="gridRectMarkerMaskoqij2mwe">
                                                                <rect id="SvgjsRect1152" width="278" height="62" x="-1"
                                                                    y="-1" rx="0" ry="0" fill="#ffffff" opacity="1"
                                                                    stroke-width="0" stroke="none" stroke-dasharray="0">
                                                                </rect>
                                                            </clipPath>
                                                            <linearGradient id="SvgjsLinearGradient1158" x1="0" y1="0"
                                                                x2="0" y2="1">
                                                                <stop id="SvgjsStop1159" stop-opacity="0.65"
                                                                    stop-color="rgba(252,191,9,0.65)" offset="0"></stop>
                                                                <stop id="SvgjsStop1160" stop-opacity="0.5"
                                                                    stop-color="rgba(254,223,132,0.5)" offset="1">
                                                                </stop>
                                                                <stop id="SvgjsStop1161" stop-opacity="0.5"
                                                                    stop-color="rgba(254,223,132,0.5)" offset="1">
                                                                </stop>
                                                            </linearGradient>
                                                            <filter id="SvgjsFilter1164" filterUnits="userSpaceOnUse">
                                                                <feFlood id="SvgjsFeFlood1165" flood-color="#000000"
                                                                    flood-opacity="0.2" result="SvgjsFeFlood1165Out"
                                                                    in="SourceGraphic"></feFlood>
                                                                <feComposite id="SvgjsFeComposite1166"
                                                                    in="SvgjsFeFlood1165Out" in2="SourceAlpha"
                                                                    operator="in" result="SvgjsFeComposite1166Out">
                                                                </feComposite>
                                                                <feOffset id="SvgjsFeOffset1167" dx="2" dy="2"
                                                                    result="SvgjsFeOffset1167Out"
                                                                    in="SvgjsFeComposite1166Out"></feOffset>
                                                                <feGaussianBlur id="SvgjsFeGaussianBlur1168"
                                                                    stdDeviation="3 "
                                                                    result="SvgjsFeGaussianBlur1168Out"
                                                                    in="SvgjsFeOffset1167Out"></feGaussianBlur>
                                                                <feBlend id="SvgjsFeBlend1169" in="SourceGraphic"
                                                                    in2="SvgjsFeGaussianBlur1168Out" mode="normal"
                                                                    result="SvgjsFeBlend1169Out"></feBlend>
                                                            </filter>
                                                            <filter id="SvgjsFilter1172" filterUnits="userSpaceOnUse">
                                                                <feFlood id="SvgjsFeFlood1173" flood-color="#000000"
                                                                    flood-opacity="0.2" result="SvgjsFeFlood1173Out"
                                                                    in="SourceGraphic"></feFlood>
                                                                <feComposite id="SvgjsFeComposite1174"
                                                                    in="SvgjsFeFlood1173Out" in2="SourceAlpha"
                                                                    operator="in" result="SvgjsFeComposite1174Out">
                                                                </feComposite>
                                                                <feOffset id="SvgjsFeOffset1175" dx="2" dy="2"
                                                                    result="SvgjsFeOffset1175Out"
                                                                    in="SvgjsFeComposite1174Out"></feOffset>
                                                                <feGaussianBlur id="SvgjsFeGaussianBlur1176"
                                                                    stdDeviation="3 "
                                                                    result="SvgjsFeGaussianBlur1176Out"
                                                                    in="SvgjsFeOffset1175Out"></feGaussianBlur>
                                                                <feBlend id="SvgjsFeBlend1177" in="SourceGraphic"
                                                                    in2="SvgjsFeGaussianBlur1176Out" mode="normal"
                                                                    result="SvgjsFeBlend1177Out"></feBlend>
                                                            </filter>
                                                        </defs>
                                                        <line id="SvgjsLine1150" x1="0" y1="0" x2="0" y2="60"
                                                            stroke="#b6b6b6" stroke-dasharray="3"
                                                            class="apexcharts-xcrosshairs" x="0" y="0" width="1"
                                                            height="60" fill="#b1b9c4" filter="none" fill-opacity="0.9"
                                                            stroke-width="1"></line>
                                                        <g id="SvgjsG1178" class="apexcharts-xaxis"
                                                            transform="translate(0, 0)">
                                                            <g id="SvgjsG1179" class="apexcharts-xaxis-texts-g"
                                                                transform="translate(0, 1.875)"></g>
                                                        </g>
                                                        <g id="SvgjsG1182" class="apexcharts-grid">
                                                            <line id="SvgjsLine1184" x1="0" y1="60" x2="276" y2="60"
                                                                stroke="transparent" stroke-dasharray="0"></line>
                                                            <line id="SvgjsLine1183" x1="0" y1="1" x2="0" y2="60"
                                                                stroke="transparent" stroke-dasharray="0"></line>
                                                        </g>
                                                        <g id="SvgjsG1154"
                                                            class="apexcharts-area-series apexcharts-plot-series">
                                                            <g id="SvgjsG1155" class="apexcharts-series"
                                                                seriesName="TotalxTax" data:longestSeries="true" rel="1"
                                                                data:realIndex="0">
                                                                <path id="SvgjsPath1162"
                                                                    d="M0 60L0 30.32258064516129C4.199999999999999 30.32258064516129 7.800000000000001 37.41935483870968 12 37.41935483870968C16.2 37.41935483870968 19.8 23.87096774193548 24 23.87096774193548C28.2 23.87096774193548 31.8 44.516129032258064 36 44.516129032258064C40.2 44.516129032258064 43.8 18.064516129032256 48 18.064516129032256C52.2 18.064516129032256 55.8 30.96774193548387 60 30.96774193548387C64.2 30.96774193548387 67.8 60 72 60C76.2 60 79.8 25.806451612903224 84 25.806451612903224C88.2 25.806451612903224 91.8 42.58064516129032 96 42.58064516129032C100.2 42.58064516129032 103.8 40 108 40C112.2 40 115.8 33.54838709677419 120 33.54838709677419C124.2 33.54838709677419 127.8 20.645161290322577 132 20.645161290322577C136.2 20.645161290322577 139.8 37.41935483870968 144 37.41935483870968C148.2 37.41935483870968 151.8 32.258064516129025 156 32.258064516129025C160.2 32.258064516129025 163.8 34.83870967741935 168 34.83870967741935C172.2 34.83870967741935 175.8 35.483870967741936 180 35.483870967741936C184.2 35.483870967741936 187.8 25.16129032258064 192 25.16129032258064C196.2 25.16129032258064 199.8 25.16129032258064 204 25.16129032258064C208.2 25.16129032258064 211.8 -7.105427357601002e-15 216 -7.105427357601002e-15C220.2 -7.105427357601002e-15 223.8 47.74193548387097 228 47.74193548387097C232.2 47.74193548387097 235.8 19.999999999999993 240 19.999999999999993C244.2 19.999999999999993 247.8 42.58064516129032 252 42.58064516129032C256.2 42.58064516129032 259.8 27.096774193548384 264 27.096774193548384C268.2 27.096774193548384 271.8 36.12903225806451 276 36.12903225806451C276 36.12903225806451 276 36.12903225806451 276 60M276 36.12903225806451C276 36.12903225806451 276 36.12903225806451 276 36.12903225806451 "
                                                                    fill="url(#SvgjsLinearGradient1158)"
                                                                    fill-opacity="1" stroke-opacity="1"
                                                                    stroke-linecap="butt" stroke-width="0"
                                                                    stroke-dasharray="0" class="apexcharts-area"
                                                                    index="0" clip-path="url(#gridRectMaskoqij2mwe)"
                                                                    filter="url(#SvgjsFilter1164)"
                                                                    pathTo="M 0 60L 0 30.32258064516129C 4.199999999999999 30.32258064516129 7.800000000000001 37.41935483870968 12 37.41935483870968C 16.2 37.41935483870968 19.8 23.87096774193548 24 23.87096774193548C 28.2 23.87096774193548 31.8 44.516129032258064 36 44.516129032258064C 40.2 44.516129032258064 43.8 18.064516129032256 48 18.064516129032256C 52.2 18.064516129032256 55.8 30.96774193548387 60 30.96774193548387C 64.2 30.96774193548387 67.8 60 72 60C 76.2 60 79.8 25.806451612903224 84 25.806451612903224C 88.2 25.806451612903224 91.8 42.58064516129032 96 42.58064516129032C 100.2 42.58064516129032 103.8 40 108 40C 112.2 40 115.8 33.54838709677419 120 33.54838709677419C 124.2 33.54838709677419 127.8 20.645161290322577 132 20.645161290322577C 136.2 20.645161290322577 139.8 37.41935483870968 144 37.41935483870968C 148.2 37.41935483870968 151.8 32.258064516129025 156 32.258064516129025C 160.2 32.258064516129025 163.8 34.83870967741935 168 34.83870967741935C 172.2 34.83870967741935 175.8 35.483870967741936 180 35.483870967741936C 184.2 35.483870967741936 187.8 25.16129032258064 192 25.16129032258064C 196.2 25.16129032258064 199.8 25.16129032258064 204 25.16129032258064C 208.2 25.16129032258064 211.8 -7.105427357601002e-15 216 -7.105427357601002e-15C 220.2 -7.105427357601002e-15 223.8 47.74193548387097 228 47.74193548387097C 232.2 47.74193548387097 235.8 19.999999999999993 240 19.999999999999993C 244.2 19.999999999999993 247.8 42.58064516129032 252 42.58064516129032C 256.2 42.58064516129032 259.8 27.096774193548384 264 27.096774193548384C 268.2 27.096774193548384 271.8 36.12903225806451 276 36.12903225806451C 276 36.12903225806451 276 36.12903225806451 276 60M 276 36.12903225806451z"
                                                                    pathFrom="M -1 60L -1 60L 12 60L 24 60L 36 60L 48 60L 60 60L 72 60L 84 60L 96 60L 108 60L 120 60L 132 60L 144 60L 156 60L 168 60L 180 60L 192 60L 204 60L 216 60L 228 60L 240 60L 252 60L 264 60L 276 60">
                                                                </path>
                                                                <path id="SvgjsPath1170"
                                                                    d="M0 30.32258064516129C4.199999999999999 30.32258064516129 7.800000000000001 37.41935483870968 12 37.41935483870968C16.2 37.41935483870968 19.8 23.87096774193548 24 23.87096774193548C28.2 23.87096774193548 31.8 44.516129032258064 36 44.516129032258064C40.2 44.516129032258064 43.8 18.064516129032256 48 18.064516129032256C52.2 18.064516129032256 55.8 30.96774193548387 60 30.96774193548387C64.2 30.96774193548387 67.8 60 72 60C76.2 60 79.8 25.806451612903224 84 25.806451612903224C88.2 25.806451612903224 91.8 42.58064516129032 96 42.58064516129032C100.2 42.58064516129032 103.8 40 108 40C112.2 40 115.8 33.54838709677419 120 33.54838709677419C124.2 33.54838709677419 127.8 20.645161290322577 132 20.645161290322577C136.2 20.645161290322577 139.8 37.41935483870968 144 37.41935483870968C148.2 37.41935483870968 151.8 32.258064516129025 156 32.258064516129025C160.2 32.258064516129025 163.8 34.83870967741935 168 34.83870967741935C172.2 34.83870967741935 175.8 35.483870967741936 180 35.483870967741936C184.2 35.483870967741936 187.8 25.16129032258064 192 25.16129032258064C196.2 25.16129032258064 199.8 25.16129032258064 204 25.16129032258064C208.2 25.16129032258064 211.8 -7.105427357601002e-15 216 -7.105427357601002e-15C220.2 -7.105427357601002e-15 223.8 47.74193548387097 228 47.74193548387097C232.2 47.74193548387097 235.8 19.999999999999993 240 19.999999999999993C244.2 19.999999999999993 247.8 42.58064516129032 252 42.58064516129032C256.2 42.58064516129032 259.8 27.096774193548384 264 27.096774193548384C268.2 27.096774193548384 271.8 36.12903225806451 276 36.12903225806451C276 36.12903225806451 276 36.12903225806451 276 36.12903225806451 "
                                                                    fill="none" fill-opacity="1" stroke="#fcbf09"
                                                                    stroke-opacity="1" stroke-linecap="butt"
                                                                    stroke-width="2" stroke-dasharray="0"
                                                                    class="apexcharts-area" index="0"
                                                                    clip-path="url(#gridRectMaskoqij2mwe)"
                                                                    filter="url(#SvgjsFilter1172)"
                                                                    pathTo="M 0 30.32258064516129C 4.199999999999999 30.32258064516129 7.800000000000001 37.41935483870968 12 37.41935483870968C 16.2 37.41935483870968 19.8 23.87096774193548 24 23.87096774193548C 28.2 23.87096774193548 31.8 44.516129032258064 36 44.516129032258064C 40.2 44.516129032258064 43.8 18.064516129032256 48 18.064516129032256C 52.2 18.064516129032256 55.8 30.96774193548387 60 30.96774193548387C 64.2 30.96774193548387 67.8 60 72 60C 76.2 60 79.8 25.806451612903224 84 25.806451612903224C 88.2 25.806451612903224 91.8 42.58064516129032 96 42.58064516129032C 100.2 42.58064516129032 103.8 40 108 40C 112.2 40 115.8 33.54838709677419 120 33.54838709677419C 124.2 33.54838709677419 127.8 20.645161290322577 132 20.645161290322577C 136.2 20.645161290322577 139.8 37.41935483870968 144 37.41935483870968C 148.2 37.41935483870968 151.8 32.258064516129025 156 32.258064516129025C 160.2 32.258064516129025 163.8 34.83870967741935 168 34.83870967741935C 172.2 34.83870967741935 175.8 35.483870967741936 180 35.483870967741936C 184.2 35.483870967741936 187.8 25.16129032258064 192 25.16129032258064C 196.2 25.16129032258064 199.8 25.16129032258064 204 25.16129032258064C 208.2 25.16129032258064 211.8 -7.105427357601002e-15 216 -7.105427357601002e-15C 220.2 -7.105427357601002e-15 223.8 47.74193548387097 228 47.74193548387097C 232.2 47.74193548387097 235.8 19.999999999999993 240 19.999999999999993C 244.2 19.999999999999993 247.8 42.58064516129032 252 42.58064516129032C 256.2 42.58064516129032 259.8 27.096774193548384 264 27.096774193548384C 268.2 27.096774193548384 271.8 36.12903225806451 276 36.12903225806451"
                                                                    pathFrom="M -1 60L -1 60L 12 60L 24 60L 36 60L 48 60L 60 60L 72 60L 84 60L 96 60L 108 60L 120 60L 132 60L 144 60L 156 60L 168 60L 180 60L 192 60L 204 60L 216 60L 228 60L 240 60L 252 60L 264 60L 276 60">
                                                                </path>
                                                                <g id="SvgjsG1156"
                                                                    class="apexcharts-series-markers-wrap"></g>
                                                                <g id="SvgjsG1157" class="apexcharts-datalabels"></g>
                                                            </g>
                                                        </g>
                                                        <line id="SvgjsLine1185" x1="0" y1="0" x2="276" y2="0"
                                                            stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1"
                                                            class="apexcharts-ycrosshairs"></line>
                                                        <line id="SvgjsLine1186" x1="0" y1="0" x2="276" y2="0"
                                                            stroke-dasharray="0" stroke-width="0"
                                                            class="apexcharts-ycrosshairs-hidden"></line>
                                                        <g id="SvgjsG1187" class="apexcharts-yaxis-annotations"></g>
                                                        <g id="SvgjsG1188" class="apexcharts-xaxis-annotations"></g>
                                                        <g id="SvgjsG1189" class="apexcharts-point-annotations"></g>
                                                    </g>
                                                    <rect id="SvgjsRect1149" width="0" height="0" x="0" y="0" rx="0"
                                                        ry="0" fill="#fefefe" opacity="1" stroke-width="0" stroke="none"
                                                        stroke-dasharray="0"></rect>
                                                    <g id="SvgjsG1180" class="apexcharts-yaxis" rel="0"
                                                        transform="translate(-21, 0)">
                                                        <g id="SvgjsG1181" class="apexcharts-yaxis-texts-g"></g>
                                                    </g>
                                                </svg>
                                                <div class="apexcharts-legend"></div>
                                            </div>
                                        </div>
                                        <div class="resize-triggers">
                                            <div class="expand-trigger">
                                                <div style="width: 277px; height: 188px;"></div>
                                            </div>
                                            <div class="contract-trigger"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Row-1 -->

                            <!-- Row-2 -->
                            <div class="row">
                                <div class="col-xl-8 col-lg-8 col-md-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">Sales Analysis</h3>
                                            <div class="card-options">
                                                <div class="btn-group p-0">
                                                    <button class="btn btn-outline-light btn-sm"
                                                        type="button">Week</button>
                                                    <button class="btn btn-light btn-sm" type="button">Month</button>
                                                    <button class="btn btn-outline-light btn-sm"
                                                        type="button">Year</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="row mb-3">
                                                <div class="col-xl-3 col-6">
                                                    <p class="mb-1">Total Sales</p>
                                                    <h3 class="mb-0 fs-20 number-font1">$52,618</h3>
                                                    <p class="fs-12 text-muted"><span class="text-danger mr-1"><i
                                                                class="fe fe-arrow-down"></i>0.9%</span>this month</p>
                                                </div>
                                                <div class="col-xl-3 col-6 ">
                                                    <p class=" mb-1">Maximum Sales</p>
                                                    <h3 class="mb-0 fs-20 number-font1">$26,197</h3>
                                                    <p class="fs-12 text-muted"><span class="text-success mr-1"><i
                                                                class="fe fe-arrow-up"></i>0.15%</span>this month</p>
                                                </div>
                                                <div class="col-xl-3 col-6">
                                                    <p class=" mb-1">Total Units Sold</p>
                                                    <h3 class="mb-0 fs-20 number-font1">13,876</h3>
                                                    <p class="fs-12 text-muted"><span class="text-danger mr-1"><i
                                                                class="fe fe-arrow-down"></i>0.8%</span>this month</p>
                                                </div>
                                                <div class="col-xl-3 col-6">
                                                    <p class=" mb-1">Maximum Units Sold</p>
                                                    <h3 class="mb-0 fs-20 number-font1">5,876</h3>
                                                    <p class="fs-12 text-muted"><span class="text-success mr-1"><i
                                                                class="fe fe-arrow-up"></i>0.06%</span>this month</p>
                                                </div>
                                            </div>
                                            <div id="echart1" class="chart-tasks chart-dropshadow text-center"
                                                style="user-select: none; position: relative; background: transparent none repeat scroll 0% 0%;"
                                                _echarts_instance_="ec_1617882620456">
                                                <div
                                                    style="position: relative; overflow: hidden; width: 726px; height: 240px; padding: 0px; margin: 0px; border-width: 0px;">
                                                    <canvas
                                                        style="position: absolute; left: 0px; top: 0px; width: 726px; height: 240px; user-select: none; padding: 0px; margin: 0px; border-width: 0px;"
                                                        width="726" height="240" data-zr-dom-id="zr_0"></canvas>
                                                </div>
                                                <div></div>
                                            </div>
                                            <div class="text-center mt-2">
                                                <span class="mr-4"><span class="dot-label bg-primary"></span>Total
                                                    Sales</span>
                                                <span><span class="dot-label bg-secondary"></span>Total Units
                                                    Sold</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">Recent Activity</h3>
                                            <div class="card-options">
                                                <a href="https://laravel.spruko.com/admitro/Horizontal-Light/#"
                                                    class="option-dots" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false"><i
                                                        class="fe fe-more-horizontal fs-20"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item"
                                                        href="https://laravel.spruko.com/admitro/Horizontal-Light/#">Today</a>
                                                    <a class="dropdown-item"
                                                        href="https://laravel.spruko.com/admitro/Horizontal-Light/#">Last
                                                        Week</a>
                                                    <a class="dropdown-item"
                                                        href="https://laravel.spruko.com/admitro/Horizontal-Light/#">Last
                                                        Month</a>
                                                    <a class="dropdown-item"
                                                        href="https://laravel.spruko.com/admitro/Horizontal-Light/#">Last
                                                        Year</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="latest-timeline scrollbar3" id="scrollbar3"
                                                data-simplebar="init">
                                                <div class="simplebar-wrapper" style="margin: 0px;">
                                                    <div class="simplebar-height-auto-observer-wrapper">
                                                        <div class="simplebar-height-auto-observer"></div>
                                                    </div>
                                                    <div class="simplebar-mask">
                                                        <div class="simplebar-offset" style="right: 0px; bottom: 0px;">
                                                            <div class="simplebar-content-wrapper"
                                                                style="height: 100%; overflow: hidden scroll;">
                                                                <div class="simplebar-content" style="padding: 0px;">
                                                                    <ul class="timeline mb-0">
                                                                        <li class="mt-0">
                                                                            <div class="d-flex"><span
                                                                                    class="time-data">Task
                                                                                    Finished</span><span
                                                                                    class="ml-auto text-muted fs-11">09
                                                                                    June 2020</span></div>
                                                                            <p class="text-muted fs-12"><span
                                                                                    class="text-info">Joseph
                                                                                    Ellison</span> finished task on<a
                                                                                    href="https://laravel.spruko.com/admitro/Horizontal-Light/#"
                                                                                    class="font-weight-semibold">
                                                                                    Project Management</a></p>
                                                                        </li>
                                                                        <li>
                                                                            <div class="d-flex"><span
                                                                                    class="time-data">New
                                                                                    Comment</span><span
                                                                                    class="ml-auto text-muted fs-11">05
                                                                                    June 2020</span></div>
                                                                            <p class="text-muted fs-12"><span
                                                                                    class="text-info">Elizabeth
                                                                                    Scott</span> Product delivered<a
                                                                                    href="https://laravel.spruko.com/admitro/Horizontal-Light/#"
                                                                                    class="font-weight-semibold">
                                                                                    Service Management</a></p>
                                                                        </li>
                                                                        <li>
                                                                            <div class="d-flex"><span
                                                                                    class="time-data">Target
                                                                                    Completed</span><span
                                                                                    class="ml-auto text-muted fs-11">01
                                                                                    June 2020</span></div>
                                                                            <p class="text-muted fs-12"><span
                                                                                    class="text-info">Sonia
                                                                                    Peters</span> finished target on<a
                                                                                    href="https://laravel.spruko.com/admitro/Horizontal-Light/#"
                                                                                    class="font-weight-semibold"> this
                                                                                    month Sales</a></p>
                                                                        </li>
                                                                        <li>
                                                                            <div class="d-flex"><span
                                                                                    class="time-data">Revenue
                                                                                    Sources</span><span
                                                                                    class="ml-auto text-muted fs-11">26
                                                                                    May 2020</span></div>
                                                                            <p class="text-muted fs-12"><span
                                                                                    class="text-info">Justin Nash</span>
                                                                                source report on<a
                                                                                    href="https://laravel.spruko.com/admitro/Horizontal-Light/#"
                                                                                    class="font-weight-semibold">
                                                                                    Generated</a></p>
                                                                        </li>
                                                                        <li>
                                                                            <div class="d-flex"><span
                                                                                    class="time-data">Dispatched
                                                                                    Order</span><span
                                                                                    class="ml-auto text-muted fs-11">22
                                                                                    May 2020</span></div>
                                                                            <p class="text-muted fs-12"><span
                                                                                    class="text-info">Ella
                                                                                    Lambert</span> ontime order delivery
                                                                                <a href="https://laravel.spruko.com/admitro/Horizontal-Light/#"
                                                                                    class="font-weight-semibold">Service
                                                                                    Management</a>
                                                                            </p>
                                                                        </li>
                                                                        <li>
                                                                            <div class="d-flex"><span
                                                                                    class="time-data">New User
                                                                                    Added</span><span
                                                                                    class="ml-auto text-muted fs-11">19
                                                                                    May 2020</span></div>
                                                                            <p class="text-muted fs-12"><span
                                                                                    class="text-info">Nicola
                                                                                    Blake</span> visit the site<a
                                                                                    href="https://laravel.spruko.com/admitro/Horizontal-Light/#"
                                                                                    class="font-weight-semibold">
                                                                                    Membership allocated</a></p>
                                                                        </li>
                                                                        <li>
                                                                            <div class="d-flex"><span
                                                                                    class="time-data">Revenue
                                                                                    Sources</span><span
                                                                                    class="ml-auto text-muted fs-11">15
                                                                                    May 2020</span></div>
                                                                            <p class="text-muted fs-12"><span
                                                                                    class="text-info">Richard
                                                                                    Mills</span> source report on<a
                                                                                    href="https://laravel.spruko.com/admitro/Horizontal-Light/#"
                                                                                    class="font-weight-semibold">
                                                                                    Generated</a></p>
                                                                        </li>
                                                                        <li class="mb-0">
                                                                            <div class="d-flex"><span
                                                                                    class="time-data">New Order
                                                                                    Placed</span><span
                                                                                    class="ml-auto text-muted fs-11">11
                                                                                    May 2020</span></div>
                                                                            <p class="text-muted fs-12"><span
                                                                                    class="text-info">Steven Hart</span>
                                                                                is proces the order<a
                                                                                    href="https://laravel.spruko.com/admitro/Horizontal-Light/#"
                                                                                    class="font-weight-semibold">
                                                                                    #987</a></p>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="simplebar-placeholder"
                                                        style="width: auto; height: 500px;"></div>
                                                </div>
                                                <div class="simplebar-track simplebar-horizontal"
                                                    style="visibility: hidden;">
                                                    <div class="simplebar-scrollbar" style="width: 0px; display: none;">
                                                    </div>
                                                </div>
                                                <div class="simplebar-track simplebar-vertical"
                                                    style="visibility: visible;">
                                                    <div class="simplebar-scrollbar"
                                                        style="height: 266px; transform: translate3d(0px, 0px, 0px); display: block;">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Row-2 -->

                            <!-- Row-3 -->
                            <div class="row">
                                <div class="col-xl-4 col-md-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">Recent Customers</h3>
                                            <div class="card-options">
                                                <a href="https://laravel.spruko.com/admitro/Horizontal-Light/#"
                                                    class="option-dots" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false"><i
                                                        class="fe fe-more-horizontal fs-20"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item"
                                                        href="https://laravel.spruko.com/admitro/Horizontal-Light/#">Today</a>
                                                    <a class="dropdown-item"
                                                        href="https://laravel.spruko.com/admitro/Horizontal-Light/#">Last
                                                        Week</a>
                                                    <a class="dropdown-item"
                                                        href="https://laravel.spruko.com/admitro/Horizontal-Light/#">Last
                                                        Month</a>
                                                    <a class="dropdown-item"
                                                        href="https://laravel.spruko.com/admitro/Horizontal-Light/#">Last
                                                        Year</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="list-card">
                                                <span class="bg-warning list-bar"></span>
                                                <div class="row align-items-center">
                                                    <div class="col-9 col-sm-9">
                                                        <div class="media mt-0">
                                                            <img src="Admitro%20-%20Admin%20Panel%20HTML%20template_files/1.jpg"
                                                                alt="img" class="avatar brround avatar-md mr-3">
                                                            <div class="media-body">
                                                                <div class="d-md-flex align-items-center mt-1">
                                                                    <h6 class="mb-1">Lisa Marshall</h6>
                                                                </div>
                                                                <span class="mb-0 fs-13 text-muted">User ID:#2342<span
                                                                        class="ml-2 text-success fs-13 font-weight-semibold">Paid</span></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-3 col-sm-3">
                                                        <div class="text-right">
                                                            <span
                                                                class="font-weight-semibold fs-16 number-font">$558</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="list-card">
                                                <span class="bg-info list-bar"></span>
                                                <div class="row align-items-center">
                                                    <div class="col-9 col-sm-9">
                                                        <div class="media mt-0">
                                                            <img src="Admitro%20-%20Admin%20Panel%20HTML%20template_files/9.jpg"
                                                                alt="img" class="avatar brround avatar-md mr-3">
                                                            <div class="media-body">
                                                                <div class="d-md-flex align-items-center mt-1">
                                                                    <h6 class="mb-1">John Chapman</h6>
                                                                </div>
                                                                <span class="mb-0 fs-13 text-muted">User ID:#6720<span
                                                                        class="ml-2 text-danger fs-13 font-weight-semibold">Pending</span></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-3 col-sm-3">
                                                        <div class="text-right">
                                                            <span
                                                                class="font-weight-semibold fs-16 number-font">$458</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="list-card">
                                                <span class="bg-danger list-bar"></span>
                                                <div class="row align-items-center">
                                                    <div class="col-9 col-sm-9">
                                                        <div class="media mt-0">
                                                            <img src="Admitro%20-%20Admin%20Panel%20HTML%20template_files/2.jpg"
                                                                alt="img" class="avatar brround avatar-md mr-3">
                                                            <div class="media-body">
                                                                <div class="d-md-flex align-items-center mt-1">
                                                                    <h6 class="mb-1">Sonia Smith </h6>
                                                                </div>
                                                                <span class="mb-0 fs-13 text-muted">User ID:#8763<span
                                                                        class="ml-2 text-success fs-13 font-weight-semibold">Paid</span></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-3 col-sm-3">
                                                        <div class="text-right">
                                                            <span
                                                                class="font-weight-semibold fs-16 number-font">$358</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="list-card">
                                                <span class="bg-success list-bar"></span>
                                                <div class="row align-items-center">
                                                    <div class="col-9 col-sm-9">
                                                        <div class="media mt-0">
                                                            <img src="Admitro%20-%20Admin%20Panel%20HTML%20template_files/11.jpg"
                                                                alt="img" class="avatar brround avatar-md mr-3">
                                                            <div class="media-body">
                                                                <div class="d-md-flex align-items-center mt-1">
                                                                    <h6 class="mb-1">Joseph Abraham</h6>
                                                                </div>
                                                                <span class="mb-0 fs-13 text-muted">User ID:#1076<span
                                                                        class="ml-2 text-danger fs-13 font-weight-semibold">Pending</span></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-3 col-sm-3">
                                                        <div class="text-right">
                                                            <span
                                                                class="font-weight-semibold fs-16 number-font">$796</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="list-card">
                                                <span class="bg-primary list-bar"></span>
                                                <div class="row align-items-center">
                                                    <div class="col-9 col-sm-9">
                                                        <div class="media mt-0">
                                                            <img src="Admitro%20-%20Admin%20Panel%20HTML%20template_files/3.jpg"
                                                                alt="img" class="avatar brround avatar-md mr-3">
                                                            <div class="media-body">
                                                                <div class="d-md-flex align-items-center mt-1">
                                                                    <h6 class="mb-1">Joseph Abraham</h6>
                                                                </div>
                                                                <span class="mb-0 fs-13 text-muted">User ID:#986<span
                                                                        class="ml-2 text-success fs-13 font-weight-semibold">Paid</span></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-3 col-sm-3">
                                                        <div class="text-right">
                                                            <span
                                                                class="font-weight-semibold fs-16 number-font">$867</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4  col-md-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">Revenue by customers in Countries</h3>
                                            <div class="card-options">
                                                <a href="https://laravel.spruko.com/admitro/Horizontal-Light/#"
                                                    class="option-dots" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false"><i
                                                        class="fe fe-more-horizontal fs-20"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item"
                                                        href="https://laravel.spruko.com/admitro/Horizontal-Light/#">Today</a>
                                                    <a class="dropdown-item"
                                                        href="https://laravel.spruko.com/admitro/Horizontal-Light/#">Last
                                                        Week</a>
                                                    <a class="dropdown-item"
                                                        href="https://laravel.spruko.com/admitro/Horizontal-Light/#">Last
                                                        Month</a>
                                                    <a class="dropdown-item"
                                                        href="https://laravel.spruko.com/admitro/Horizontal-Light/#">Last
                                                        Year</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="country-card">
                                                <div class="mb-5">
                                                    <div class="d-flex">
                                                        <span class=""><img
                                                                src="Admitro%20-%20Admin%20Panel%20HTML%20template_files/us.svg"
                                                                class="w-5 h-5 mr-2" alt="">United States</span>
                                                        <div class="ml-auto"><span class="text-success mr-1"><i
                                                                    class="fe fe-trending-up"></i></span><span
                                                                class="number-font">$45,870</span> (86%)</div>
                                                    </div>
                                                    <div class="progress h-2  mt-1">
                                                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-secondary"
                                                            style="width: 80%"></div>
                                                    </div>
                                                </div>
                                                <div class="mb-5">
                                                    <div class="d-flex">
                                                        <span class=""><img
                                                                src="Admitro%20-%20Admin%20Panel%20HTML%20template_files/in.svg"
                                                                class="w-5 h-5 mr-2" alt="">India</span>
                                                        <div class="ml-auto"><span class="text-danger mr-1"><i
                                                                    class="fe fe-trending-down"></i></span><span
                                                                class="number-font">$32,879</span> (65%)</div>
                                                    </div>
                                                    <div class="progress h-2  mt-1">
                                                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-info"
                                                            style="width: 60%"></div>
                                                    </div>
                                                </div>
                                                <div class="mb-5">
                                                    <div class="d-flex">
                                                        <span class=""><img
                                                                src="Admitro%20-%20Admin%20Panel%20HTML%20template_files/ru.svg"
                                                                class="w-5 h-5 mr-2" alt="">Russia</span>
                                                        <div class="ml-auto"><span class="text-success mr-1"><i
                                                                    class="fe fe-trending-up"></i></span><span
                                                                class="number-font">$22,710</span> (55%)</div>
                                                    </div>
                                                    <div class="progress h-2  mt-1">
                                                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-success"
                                                            style="width: 50%"></div>
                                                    </div>
                                                </div>
                                                <div class="mb-5">
                                                    <div class="d-flex">
                                                        <span class=""><img
                                                                src="Admitro%20-%20Admin%20Panel%20HTML%20template_files/ca.svg"
                                                                class="w-5 h-5 mr-2" alt="">Canada</span>
                                                        <div class="ml-auto"><span class="text-danger mr-1"><i
                                                                    class="fe fe-trending-down"></i></span><span
                                                                class="number-font">$56,291</span> (69%)</div>
                                                    </div>
                                                    <div class="progress h-2  mt-1">
                                                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-danger"
                                                            style="width: 80%"></div>
                                                    </div>
                                                </div>
                                                <div class="mb-5">
                                                    <div class="d-flex">
                                                        <span class=""><img
                                                                src="Admitro%20-%20Admin%20Panel%20HTML%20template_files/ge.svg"
                                                                class="w-5 h-5 mr-2" alt="">Germany</span>
                                                        <div class="ml-auto"><span class="text-success mr-1"><i
                                                                    class="fe fe-trending-up"></i></span><span
                                                                class="number-font">$67,357</span> (73%)</div>
                                                    </div>
                                                    <div class="progress h-2  mt-1">
                                                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-teal"
                                                            style="width: 70%"></div>
                                                    </div>
                                                </div>
                                                <div class="mb-5">
                                                    <div class="d-flex">
                                                        <span class=""><img
                                                                src="Admitro%20-%20Admin%20Panel%20HTML%20template_files/br.svg"
                                                                class="w-5 h-5 mr-2" alt="">Brazil</span>
                                                        <div class="ml-auto"><span class="text-success mr-1"><i
                                                                    class="fe fe-trending-up"></i></span><span
                                                                class="number-font">$34,209</span> (60%)</div>
                                                    </div>
                                                    <div class="progress h-2  mt-1">
                                                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-indigo"
                                                            style="width: 60%"></div>
                                                    </div>
                                                </div>
                                                <div class="mb-0">
                                                    <div class="d-flex">
                                                        <span class=""><img
                                                                src="Admitro%20-%20Admin%20Panel%20HTML%20template_files/au.svg"
                                                                class="w-5 h-5 mr-2" alt="">Australia</span>
                                                        <div class="ml-auto"><span class="text-success mr-1"><i
                                                                    class="fe fe-trending-up"></i></span><span
                                                                class="number-font">$12,876</span> (46%)</div>
                                                    </div>
                                                    <div class="progress h-2  mt-1">
                                                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-warning"
                                                            style="width: 40%"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4  col-md-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="d-flex align-items-end justify-content-between">
                                                <div>
                                                    <p class=" mb-1 fs-14">Users</p>
                                                    <h2 class="mb-0"><span class="number-font1">12,769</span><span
                                                            class="ml-2 text-muted fs-11"><span class="text-danger"><i
                                                                    class="fa fa-caret-down"></i> 43.2</span> this
                                                            month</span></h2>

                                                </div>
                                                <span
                                                    class="text-primary fs-35 dash1-iocns bg-primary-transparent border-primary"><i
                                                        class="las la-users"></i></span>
                                            </div>
                                            <div class="d-flex mt-4">
                                                <div>
                                                    <span class="text-muted fs-12 mr-1">Last Month</span>
                                                    <span class="number-font fs-12"><i
                                                            class="fa fa-caret-up mr-1 text-success"></i>10,876</span>
                                                </div>
                                                <div class="ml-auto">
                                                    <span class="text-muted fs-12 mr-1">Last Year</span>
                                                    <span class="number-font fs-12"><i
                                                            class="fa fa-caret-down mr-1 text-danger"></i>88,345</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="d-flex align-items-end justify-content-between">
                                                <div>
                                                    <p class=" mb-1 fs-14">Sales</p>
                                                    <h2 class="mb-0"><span class="number-font1">$34,789</span><span
                                                            class="ml-2 text-muted fs-11"><span class="text-success"><i
                                                                    class="fa fa-caret-up"></i> 19.8</span> this
                                                            month</span></h2>
                                                </div>
                                                <span
                                                    class="text-secondary fs-35 dash1-iocns bg-secondary-transparent border-secondary"><i
                                                        class="las la-hand-holding-usd"></i></span>
                                            </div>
                                            <div class="d-flex mt-4">
                                                <div>
                                                    <span class="text-muted fs-12 mr-1">Last Month</span>
                                                    <span class="number-font fs-12"><i
                                                            class="fa fa-caret-up mr-1 text-success"></i>$12,786</span>
                                                </div>
                                                <div class="ml-auto">
                                                    <span class="text-muted fs-12 mr-1">Last Year</span>
                                                    <span class="number-font fs-12"><i
                                                            class="fa fa-caret-down mr-1 text-danger"></i>$89,987</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="d-flex align-items-end justify-content-between">
                                                <div>
                                                    <p class=" mb-1 fs-14">Subscribers</p>
                                                    <h2 class="mb-0"><span class="number-font1">4,876</span><span
                                                            class="ml-2 text-muted fs-11"><span class="text-success"><i
                                                                    class="fa fa-caret-up"></i> 0.8%</span> this
                                                            month</span></h2>
                                                </div>
                                                <span
                                                    class="text-info fs-35 bg-info-transparent border-info dash1-iocns"><i
                                                        class="las la-thumbs-up"></i></span>
                                            </div>
                                            <div class="d-flex mt-4">
                                                <div>
                                                    <span class="text-muted fs-12 mr-1">Last Month</span>
                                                    <span class="number-font fs-12"><i
                                                            class="fa fa-caret-up mr-1 text-success"></i>1,034</span>
                                                </div>
                                                <div class="ml-auto">
                                                    <span class="text-muted fs-12 mr-1">Last Year</span>
                                                    <span class="number-font fs-12"><i
                                                            class="fa fa-caret-down mr-1 text-danger"></i>8,610</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Row-3 -->

                            <!--Row-->
                            <div class="row">
                                <div class="col-xl-12 col-lg-12 col-md-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">Top Product Sales Overview</h3>
                                            <div class="card-options">
                                                <a href="https://laravel.spruko.com/admitro/Horizontal-Light/#"
                                                    class="option-dots" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false"><i
                                                        class="fe fe-more-horizontal fs-20"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item"
                                                        href="https://laravel.spruko.com/admitro/Horizontal-Light/#">Today</a>
                                                    <a class="dropdown-item"
                                                        href="https://laravel.spruko.com/admitro/Horizontal-Light/#">Last
                                                        Week</a>
                                                    <a class="dropdown-item"
                                                        href="https://laravel.spruko.com/admitro/Horizontal-Light/#">Last
                                                        Month</a>
                                                    <a class="dropdown-item"
                                                        href="https://laravel.spruko.com/admitro/Horizontal-Light/#">Last
                                                        Year</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="table-responsive">
                                                <table
                                                    class="table table-vcenter text-nowrap mb-0 table-striped table-bordered border-top">
                                                    <thead class="">
                                                        <tr>
                                                            <th>Product</th>
                                                            <th>Sold</th>
                                                            <th>Record point</th>
                                                            <th>Stock</th>
                                                            <th>Amount</th>
                                                            <th>Stock Status</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td class="font-weight-bold"><img
                                                                    class="w-7 h-7 rounded shadow mr-3"
                                                                    src="Admitro%20-%20Admin%20Panel%20HTML%20template_files/7.jpg"
                                                                    alt="media1"> New Book</td>
                                                            <td><span class="badge badge-primary">18</span></td>
                                                            <td>05</td>
                                                            <td>112</td>
                                                            <td class="number-font">$ 2,356</td>
                                                            <td><i class="fa fa-check mr-1 text-success"></i> In Stock
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="font-weight-bold"><img
                                                                    class="w-7 h-7 rounded shadow mr-3"
                                                                    src="Admitro%20-%20Admin%20Panel%20HTML%20template_files/8.jpg"
                                                                    alt="media1"> New Bowl</td>
                                                            <td><span class="badge badge-info">10</span></td>
                                                            <td>04</td>
                                                            <td>210</td>
                                                            <td class="number-font">$ 3,522</td>
                                                            <td><i class="fa fa-check text-success"></i> In Stock</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="font-weight-bold"><img
                                                                    class="w-7 h-7 rounded shadow mr-3"
                                                                    src="Admitro%20-%20Admin%20Panel%20HTML%20template_files/9_002.jpg"
                                                                    alt="media1"> Modal Car</td>
                                                            <td><span class="badge badge-secondary">15</span></td>
                                                            <td>05</td>
                                                            <td>215</td>
                                                            <td class="number-font">$ 5,362</td>
                                                            <td><i class="fa fa-check text-success"></i> In Stock</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="font-weight-bold"><img
                                                                    class="w-7 h-7 rounded shadow mr-3"
                                                                    src="Admitro%20-%20Admin%20Panel%20HTML%20template_files/10.jpg"
                                                                    alt="media1"> Headset</td>
                                                            <td><span class="badge badge-primary">21</span></td>
                                                            <td>07</td>
                                                            <td>102</td>
                                                            <td class="number-font">$ 1,326</td>
                                                            <td><i class="fa fa-check text-success"></i> In Stock</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="font-weight-bold"><img
                                                                    class="w-7 h-7 rounded shadow mr-3"
                                                                    src="Admitro%20-%20Admin%20Panel%20HTML%20template_files/12.jpg"
                                                                    alt="media1"> Watch</td>
                                                            <td><span class="badge badge-danger">34</span></td>
                                                            <td>10</td>
                                                            <td>325</td>
                                                            <td class="number-font">$ 5,234</td>
                                                            <td><i class="fa fa-check text-success"></i> In Stock</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="font-weight-bold"><img
                                                                    class="w-7 h-7 rounded shadow mr-3"
                                                                    src="Admitro%20-%20Admin%20Panel%20HTML%20template_files/13.jpg"
                                                                    alt="media1"> Branded Shoes</td>
                                                            <td><span class="badge badge-success">11</span></td>
                                                            <td>04</td>
                                                            <td>0</td>
                                                            <td class="number-font">$ 3,256</td>
                                                            <td><i class="fa fa-exclamation-triangle text-warning"></i>
                                                                Out of stock</td>
                                                        </tr>
                                                        <tr class="mb-0">
                                                            <td class="font-weight-bold"><img
                                                                    class="w-7 h-7 rounded shadow mr-3"
                                                                    src="Admitro%20-%20Admin%20Panel%20HTML%20template_files/11_002.jpg"
                                                                    alt="media1"> New EarPhones</td>
                                                            <td><span class="badge badge-warning">60</span></td>
                                                            <td>10</td>
                                                            <td>0</td>
                                                            <td class="number-font">$ 7,652</td>
                                                            <td><i class="fa fa-exclamation-triangle text-danger"></i>
                                                                Out of stock</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--End row-->




                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection