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
                                            <h1 class="font-medium text-3xl block dark:text-slate-100">Product List</h1>
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

                    <div class="grid grid-cols-1 p-4">
                                <div class="sm:-mx-6 lg:-mx-8">
                                    <div class="relative overflow-x-auto block w-full sm:px-6 lg:px-8">
                                       {{-- successfull massege show conditin --}}
                                     @if (session('success'))
    <div class="mb-3 rounded bg-green-100 px-4 py-2 text-sm text-green-700">
        {{ session('success') }}
    </div>
@endif
                                            <div class="flex justify-end mb-4">
                                              <button class="bg-blue-600 hover:bg-blue-700 text-white font-medium px-4 py-2 rounded">
                                                <a href="{{url('')}}/{{route('product.create')}}">Add Porduct</a>
                                                   
                                              </button>
                                            </div>
                                       
                                        <table class="min-w-full">
                                            <thead class="bg-gray-50 dark:bg-gray-600/20">
                                                <tr>
                                                    <th scope="col"
                                                        class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                                        #
                                                    </th>
                                                    <th scope="col"
                                                        class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                                        Name
                                                    </th>
                                                    <th scope="col"
                                                        class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                                        SKU
                                                    </th>
                                                    <th scope="col"
                                                        class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                                        Stock
                                                    </th>
                                                    <th scope="col"
                                                        class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                                        Price
                                                    </th>
                                                    <th scope="col"
                                                        class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                                        Category
                                                    </th>
                                                    <th scope="col" colspan="2"
                                                        class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                                        Action
                                                    </th>
                                                    
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <!-- 1 -->
                                                 @foreach ($data as $item)
                                                     
                                                 
                                                <tr
                                                {{-- use form to delete success --}}
                                                
                                                    class="bg-white border-b border-dashed dark:bg-gray-900 dark:border-gray-700/40 hover:bg-slate-50 dark:hover:bg-slate-900/30">
                                                    
                                                    <td
                                                        class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                        {{$item->id}}
                                                    </td>
                                                    <td
                                                        class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                        {{$item->name}}
                                                    </td>
                                                    <td
                                                        class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                        {{$item->sku}}
                                                    </td>
                                                    <td
                                                        class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                        {{$item->stock}}
                                                    </td>
                                                    <td
                                                        class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                        {{$item->price}}
                                                    </td>
                                                    <td
                                                        class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                        {{$item->category_id}}
                                                    </td>
                                                    <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                        <a href="{{url('')}}/"
                                                       class="px-3 py-1.5 bg-blue-600 text-white text-xs rounded hover:bg-blue-700 transition">
                                                        Edit </a>

                                                        <form action="{{ route('product.destroy', $item->id) }}" method="POST" class="inline">
    @csrf
    @method('DELETE')
    <a href="{{url('')}}/#"
       onclick="this.closest('form').submit()"
       class="inline-block bg-red-600 text-red px-3 py-1.5 text-xs rounded hover:bg-red-700 transition">
       Delete
    </a>
</form>
                                                    </td>

                                                    
                                                
                                                </tr>
                                                @endforeach
                                                
                                                
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
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