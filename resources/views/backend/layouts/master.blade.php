<!DOCTYPE html>
<html lang="en" class="scroll-smooth group" data-sidebar="brand" dir="ltr">
    <head>
        
    @yield("head")

    </head>
    
    <body data-layout-mode="light"  data-sidebar-size="default" data-theme-layout="vertical" class="bg-[#EEF0FC] dark:bg-gray-900">
    
        <!-- leftbar-tab-menu -->
        
        @if (Auth::guard('web')->check());
            @include("backend.layouts.leftbar")
            @elseif (Auth::guard('admin')->check())
            @include("backend.layouts.adminLeftbar")
            @elseif (Auth::guard('manager')->check())
            @include("backend.layouts.managerLeftbar")
            
        @endif
        

        
            <!-- Navbar menu -->
        @if (Auth::guard('web')->check())
            @include("backend.layouts.navbar")
            @elseif (Auth::guard('admin')->check())
            @include("backend.layouts.adminNavbar")
            @elseif (Auth::guard('manager')->check())
            @include("backend.layouts.managerNavbar")
            
        @endif
            


        <div class="ltr:flex flex-1 rtl:flex-row-reverse">
            <div class="page-wrapper relative ltr:ml-auto rtl:mr-auto rtl:ml-0 w-[calc(100%-260px)] px-4 pt-[64px] duration-300">
                <div class="xl:w-full">        
                    @yield("upcontent")
                </div><!--end container-->
            
                <div class="xl:w-full  min-h-[calc(100vh-138px)] relative pb-14"> 
                    
                @yield("content")

                     
                    <!-- footer -->
                    <div class="absolute bottom-0 -left-4 -right-4 block print:hidden border-t p-4 h-[52px] dark:border-slate-700/40">
                        @include("backend.layouts.footer")
                    </div>
  
  
                </div><!--end container-->
            </div>
        </div>

        <!-- scripts -->

        @yield("scripts")
    </body>
</html>