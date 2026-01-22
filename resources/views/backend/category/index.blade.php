@extends('backend.layouts.master')

@section('head')
    <meta charset="utf-8" />
    <title>Robotech - Admin & Dashboard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta content="Tailwind Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="" name="Mannatthemes" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico" />

    <!-- Css -->
    <!-- Main Css -->
    <link rel="stylesheet" href="assets/libs/icofont/icofont.min.css">
    <link href="assets/libs/flatpickr/flatpickr.min.css" type="text/css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/tailwind.min.css">
@endsection

@section('upcontent')
    <div class="flex flex-wrap">
        <div class="flex items-center py-4 w-full">
            <div class="w-full">
                <div class="">
                    <div class="flex flex-wrap justify-between">
                        <div class="items-center ">
                            <h1 class="font-medium text-3xl block dark:text-slate-100">Ecommerce</h1>
                            <ol class="list-reset flex text-sm">
                                <li><a href="#" class="text-gray-500 dark:text-slate-400">Robotech</a></li>
                                <li><span class="text-gray-500 dark:text-slate-400 mx-2">/</span></li>
                                <li class="text-gray-500 dark:text-slate-400">Dashboard</li>
                                <li><span class="text-gray-500 dark:text-slate-400 mx-2">/</span></li>
                                <li class="text-primary-500 hover:text-primary-600 dark:text-primary-400">Ecommerce</li>
                            </ol>
                        </div>
                        <div class="flex items-center">
                            <div
                                class="today-date leading-5 mt-2 lg:mt-0 form-input w-auto rounded-md border inline-block border-primary-500/60 dark:border-primary-500/60 text-primary-500 bg-transparent px-3 py-1 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-primary-400 focus:border-primary-500 dark:focus:border-primary-500  dark:hover:border-slate-700">
                                <input type="text" class="dash_date border-0 focus:border-0 focus:outline-none" readonly
                                    required="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <div class="grid grid-cols-1 p-4">
        <div class="sm:-mx-6 lg:-mx-8">
            <div class="relative overflow-x-auto block w-full sm:px-6 lg:px-8">
                {{-- successfull massege show conditin --}}
                @if (session('success'))
                    <div id="success-alert"
                        class="bg-green-100 text-green-800 border border-green-300 px-4 py-3 rounded mb-4 transition-opacity duration-500">

                        {{ session('success') }}
                    </div>

                    <script>
                        setTimeout(() => {
                            const alert = document.getElementById('success-alert');
                            if (alert) {
                                alert.style.opacity = '0';
                                setTimeout(() => alert.remove(), 500);
                            }
                        }, 3000); // 3 seconds
                    </script>
                @endif

                <div class="flex justify-end mb-4">
                    <button class="bg-blue-600 hover:bg-blue-700 text-white font-medium px-4 py-2 rounded">
                        <a href="{{ route('category.create') }}">Add Category</a>

                    </button>
                </div>

                <table class="min-w-full">
                    <thead class="bg-gray-50 dark:bg-gray-600/20">
                        <tr>
                            <th scope="col"
                                class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                ID
                            </th>
                            <th scope="col"
                                class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                Name
                            </th>
                            <th scope="col"
                                class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                Action
                            </th>

                        </tr>
                    </thead>
                    <tbody>
                        <!-- 1 -->
                        @foreach ($c_name as $category)
                            <tr {{-- use form to delete success --}}
                                class="bg-white border-b border-dashed dark:bg-gray-900 dark:border-gray-700/40 hover:bg-slate-50 dark:hover:bg-slate-900/30">
                                <form method="post" action="{{ route('category.destroy', $category->id) }}">
                                    @csrf
                                    @method('delete')
                                    <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                        {{ $category->id }}
                                    </td>
                                    <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                        {{ $category->name }}
                                    </td>
                                    <td>

                                        <a href="{{ route('category.edit', $category->id) }}"
                                            class="border border-blue-500 text-blue-500 hover:bg-blue-500 hover:text-white
                                                            px-3 py-1 rounded text-sm transition duration-200">
                                            Edit
                                        </a>

                                        <!-- Delete Button -->
                                        <button type='submit'
                                            class="border border-red-500 text-red-500 hover:bg-red-500 hover:text-white
                                                            px-3 py-1 rounded text-sm transition duration-200">
                                            Delete
                                        </button>
                                    </td>
                                </form>
                            </tr>
                        @endforeach


                    </tbody>
                </table>
            </div>
        </div>
    </div><!--end card-body-->
@endsection

@section('scripts')
    <!-- JAVASCRIPTS -->
    <!-- <div class="menu-overlay"></div> -->
    <script src="assets/libs/lucide/umd/lucide.min.js"></script>
    <script src="assets/libs/simplebar/simplebar.min.js"></script>
    <script src="assets/libs/flatpickr/flatpickr.min.js"></script>
    <script src="assets/libs/@frostui/tailwindcss/frostui.js"></script>

    <script src="assets/libs/apexcharts/apexcharts.min.js"></script>
    <script src="assets/js/pages/analytics-index.init.js"></script>
    <script src="assets/js/app.js"></script>
    <!-- JAVASCRIPTS -->
@endsection
