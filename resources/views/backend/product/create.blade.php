@extends("backend.layouts.master")

@section("head")

        <meta charset="utf-8" />
        <title>Robotech - Admin & Dashboard Template</title>
        <meta  name="viewport"  content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
        <meta  content="Tailwind Multipurpose Admin & Dashboard Template"  name="description"/>
        <meta content="" name="Mannatthemes" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{url('')}}/assets/images/favicon.ico" />
        
        <!-- Css -->
        <!-- Main Css -->
        <link rel="stylesheet" href="{{url('')}}/assets/libs/icofont/icofont.min.css">
        <link href="{{url('')}}/assets/libs/flatpickr/flatpickr.min.css" type="text/css" rel="stylesheet">
        <link rel="stylesheet" href="{{url('')}}/assets/css/tailwind.min.css">

@endsection

@section("upcontent")

                    <div class="flex flex-wrap">
                        <div class="flex items-center py-4 w-full">
                            <div class="w-full">                    
                                <div class="">
                                    <div class="flex flex-wrap justify-between">
                                        <div class="items-center ">
                                            <h1 class="font-medium text-3xl block dark:text-slate-100">Product Entry</h1>
                                            <ol class="list-reset flex text-sm">
                                                <li><a href="{{url('')}}/#" class="text-gray-500 dark:text-slate-400">Robotech</a></li>
                                                <li><span class="text-gray-500 dark:text-slate-400 mx-2">/</span></li>
                                                <li class="text-gray-500 dark:text-slate-400">Dashboard</li>
                                                <li><span class="text-gray-500 dark:text-slate-400 mx-2">/</span></li>
                                                <li class="text-primary-500 hover:text-primary-600 dark:text-primary-400">Ecommerce</li>
                                            </ol>
                                        </div>
                                        <div class="flex items-center">
                                            <div class="today-date leading-5 mt-2 lg:mt-0 form-input w-auto rounded-md border inline-block border-primary-500/60 dark:border-primary-500/60 text-primary-500 bg-transparent px-3 py-1 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-primary-400 focus:border-primary-500 dark:focus:border-primary-500  dark:hover:border-slate-700">
                                                <input type="text" class="dash_date border-0 focus:border-0 focus:outline-none" readonly  required="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

@endsection

@section("content")

                <div
                                class="border-b border-slate-200 dark:border-slate-700/40 py-3 px-4 dark:text-slate-300/70">
                                <div class="flex-none md:flex">
                                    <h3 class="font-medium text-lg flex-1 self-center mb-2 md:mb-0"> Product Entry </h3>
                                    
                                </div>
                               @if ($errors->any())
                                    <div class="mb-4 rounded-md bg-red-100 border border-red-300 p-4 text-red-700">
                                      @foreach ($errors->all() as $error)
                                         <div class="mb-1">
                                        {{ $error }}
                                    </div>
                                @endforeach
                                </div>
                                @endif

                                    
                            </div><!--end header-title-->
                             <div class="flex-auto p-4 ">
                                <form method="post" action="{{route('product.store')}}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="mb-2">
                                        <label for="email"
                                            class="font-medium text-sm text-slate-600 dark:text-slate-400">Product Name
                                            </label>
                                        <input type="text" id="" name="product_name" value="{{old('product_name')}}"
                                            class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-1 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-primary-500 dark:focus:border-primary-500  dark:hover:border-slate-700"
                                            placeholder="" >
                                    </div>
                                    
                                    <div class="mb-2">
                                        <label for="email"
                                            class="font-medium text-sm text-slate-600 dark:text-slate-400">Product Details
                                            </label> <br>
                                        <textarea name="details" value="{{old('details')}}" id="" cols="150" rows="2" class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-1 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-primary-500 dark:focus:border-primary-500  dark:hover:border-slate-700"></textarea>
                                    </div>
                                    
                                    <div class="mb-2">
                                        <label for="email"
                                            class="font-medium text-sm text-slate-600 dark:text-slate-400">Product SKU
                                            </label>
                                        <input type="text" id="" name="sku" value="{{old('sku')}}"
                                            class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-1 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-primary-500 dark:focus:border-primary-500  dark:hover:border-slate-700"
                                            placeholder="" >
                                    </div>
                                    <div class="mb-2">
                                        <label for="email"
                                            class="font-medium text-sm text-slate-600 dark:text-slate-400">Product Stock
                                            </label>
                                        <input type="text" id="" name="stock" value="{{old('stock')}}"
                                            class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-1 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-primary-500 dark:focus:border-primary-500  dark:hover:border-slate-700"
                                            placeholder="" >
                                    </div>
                                    <div class="mb-2">
                                        <label for="email"
                                            class="font-medium text-sm text-slate-600 dark:text-slate-400">Product Price
                                            </label>
                                        <input type="number" id="" name="price" value="{{old('price')}}"
                                            class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-1 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-primary-500 dark:focus:border-primary-500  dark:hover:border-slate-700"
                                            placeholder="" >
                                    </div>
                                    <div class="mb-2">
                                        <label for="email"
                                            class="font-medium text-sm text-slate-600 dark:text-slate-400">Photo
                                            </label>
                                        <input type="file" id="" name="photo" value=""
                                            class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-1 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-primary-500 dark:focus:border-primary-500  dark:hover:border-slate-700"
                                            placeholder="" >
                                    </div>
                                    <div class="mb-2">
                                        <label for="email"
                                            class="font-medium text-sm text-slate-600 dark:text-slate-400">Category
                                            </label>
                                        <select name="category" id="" class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-1 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-primary-500 dark:focus:border-primary-500  dark:hover:border-slate-700">
                                        <option value="">Select One</option>
                                        @foreach ($data as $item)

                                        <option value="{{$item->id}}">{{$item->name}}</option>
                                            
                                        @endforeach
                                        </select>
                                    </div>
                                    
                                    <button type="submit"
                                        class="inline-block focus:outline-none text-primary-500 hover:bg-primary-500 hover:text-white bg-transparent border border-gray-200 dark:bg-transparent dark:text-primary-500 dark:hover:text-white dark:border-gray-700 dark:hover:bg-primary-500  text-sm font-medium py-1 px-3 rounded mb-1">Submit</button>
                                    
                                </form>
                    </div><!--end card-body-->
@endsection

@section("scripts")

        <!-- JAVASCRIPTS -->
        <!-- <div class="menu-overlay"></div> -->
        <script src="{{url('')}}/assets/libs/lucide/umd/lucide.min.js"></script>
        <script src="{{url('')}}/assets/libs/simplebar/simplebar.min.js"></script>
        <script src="{{url('')}}/assets/libs/flatpickr/flatpickr.min.js"></script>
        <script src="{{url('')}}/assets/libs/@frostui/tailwindcss/frostui.js"></script>

        <script src="{{url('')}}/assets/libs/apexcharts/apexcharts.min.js"></script>
        <script src="{{url('')}}/assets/js/pages/analytics-index.init.js"></script>
        <script src="{{url('')}}/assets/js/app.js"></script>
        <!-- JAVASCRIPTS -->

@endsection