@extends('admin.layouts.app')
@section('Content')
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Dashboard</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
            <div class="row">
                <div class="col-xl-3 col-md-6">
                    <div class="card bg-primary text-white mb-4">
                        <div class="card-body d-flex gap-6">
                            <div class="align-self-center">
                                <i class="fa-solid fa-user h-10"></i>
                            </div>
                            <div>
                                <h1>Users</h1>
                            </div>
                        </div>
                        <div class=" d-flex align-items-center justify-content-between px-3 py-2">
                            <h2 class="text-white h-6">{{count($userall)}}</h2>
                            <div class="align-self-center">
                                <a class="small text-white " href="#">View Details</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card bg-warning text-white mb-4">
                        <div class="card-body d-flex gap-6">
                            <div class="align-self-center">
                                <i class="fa-solid fa-truck h-10"></i>
                            </div>
                            <div>
                                <h1>Orders</h1>
                            </div>
                        </div>
                        <div class=" d-flex align-items-center justify-content-between px-3 py-2">
                            <h2 class="text-white h-6">26</h2>
                            <div class="align-self-center">
                                <a class="small text-white " href="#">View Details</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card bg-success text-white mb-4">
                        <div class="card-body d-flex gap-6">
                            <div class="align-self-center">
                                <i class="fa-solid fa-envelope h-10"></i>
                            </div>
                            <div>
                                <h1>Reviews</h1>
                            </div>
                        </div>
                        <div class=" d-flex align-items-center justify-content-between px-3 py-2">
                            <h2 class="text-white h-6">26</h2>
                            <div class="align-self-center">
                                <a class="small text-white " href="#">View Details</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card bg-danger text-white mb-4">
                        <div class="card-body d-flex gap-6">
                            <div class="align-self-center">
                                <i class="fa-solid fa-money-bill h-10"></i>
                            </div>
                            <div>
                                <h1>Revenues</h1>
                            </div>
                        </div>
                        <div class=" d-flex align-items-center justify-content-between px-3 py-2">
                            <h2 class="text-white h-6">260000 kyats</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-xl-6">
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-chart-bar me-1"></i>
                            Bar Chart Example
                        </div>
                        <div class="card-body"><canvas id="myBarChart" width="100%" height="40"></canvas></div>
                    </div>
                </div>
                <div class=" col-xl-6 d-grid gap-3" style="grid-template-columns: repeat(2, 1fr); grid-template-rows: repeat(3, auto);">
                    <div class=" bg-pink-100  px-3 py-2 h-[100px] rounded-lg">
                        <div class="flex justify-start gap-x-3">
                            <div class="self-center">
                                <i class="fa-solid fa-pause text-slate-500 h-6 "></i>
                            </div>

                            <h3 class="text-slate-500 font-medium">Pending</h3>
                        </div>
                        <div class="">
                            <h2 class="text-slate-500 font-bold">{{count($pending)}}</h2>
                        </div>
                    </div>
                    <div class="bg-rose-300 px-3 py-2 h-[100px] rounded-lg">
                        <div class="flex justify-start gap-x-3">
                            <div class="self-center">
                                <i class="fa-solid fa-bell text-slate-500 h-6 "></i>
                            </div>

                            <h3 class="text-slate-500 font-medium">Completed</h3>
                        </div>
                        <div class="">
                            <h2 class="text-slate-500 font-bold">{{ count($success)}}</h2>
                        </div>
                    </div>
                    <div class="bg-green-100 px-3 py-3 rounded-lg h-[100px]">
                        <div class="flex justify-start gap-x-3">
                            <div class="self-center">
                                <i class="fa-solid fa-inbox text-slate-500 h-6 "></i>
                            </div>

                            <h3 class="text-slate-500 font-medium">Product</h3>
                        </div>
                        <div class="">
                            <h2 class="text-slate-500 font-bold">{{count($product)}}</h2>
                        </div>
                    </div>
                    <div class="bg-blue-300 h-[100px] px-3 py-3 rounded-lg">
                        <div class="flex justify-start gap-x-3">
                            <div class="self-center">
                                <i class="fa-solid fa-barcode text-slate-500 h-6 "></i>
                            </div>

                            <h3 class="text-slate-500 font-medium">Category</h3>
                        </div>
                        <div class="">
                            <h2 class="text-slate-500 font-bold">{{count($Category)}}</h2>
                        </div>
                    </div>
                    <div class="bg-green-400 p-3 h-[100px] rounded-lg">
                        <div class="flex justify-start gap-x-3">
                            <div class="self-center">
                                <i class="fa-solid fa-users text-slate-500 h-6 "></i>
                            </div>

                            <h3 class="text-slate-500 font-medium">Users</h3>
                        </div>
                        <div class="">
                            <h2 class="text-slate-500 font-bold"> {{count($users)}}</h2>
                        </div>
                    </div>
                    <div class="bg-gray-100 rounded-lg h-[100px] p-3">
                        <div class="flex justify-start gap-x-3">
                            <div class="self-center">
                                <i class="fa-solid fa-user text-slate-500 h-6 "></i>
                            </div>

                            <h3 class="text-slate-500 font-medium">Admin</h3>
                        </div>
                        <div class="">
                            <h2 class="text-slate-500 font-bold">{{count($admin)}}</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>
@endsection
