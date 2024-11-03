<!DOCTYPE html>
<html lang="ar">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Courses</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/vanilla-calendar-pro/build/vanilla-calendar.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/vanilla-calendar-pro/build/vanilla-calendar.min.js" ></script>
    <!-- icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css"
        integrity="sha384-tViUnnbYAV00FLIhhi3v/dWt3Jxw4gZQcNoSCxCIFNJVCx7/D55/wXsrNIRANwdD" crossorigin="anonymous">

    <!-- Flowbite CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>

    <!-- Link to Custom CSS File -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

</head>

<body>
    <!--====================== HEADER ======================-->
    <header>
        <nav class="bg-white shadow-[0px_15px_8.5px_0px_rgba(0,0,0,0.03)]">
            <div class="max-w-[1400px] flex flex-wrap items-center justify-between mx-auto p-4">
                <a href="{{ route('home') }}" class="flex items-center space-x-3 rtl:space-x-reverse">
                    <img src="{{ asset('assets/images/logo.svg') }}" class="sm:h-10 h-9  " alt="Logo" />
                </a>
                <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
                    <button data-collapse-toggle="navbar-cta" type="button"
                        class="inline-flex items-center w-10 h-10 justify-center text-md text-gray-500  lg:hidden "
                        aria-controls="navbar-cta" aria-expanded="false" id="menu-button">
                        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 17 14" id="menu-icon">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 1h15M1 7h15M1 13h15" />
                        </svg>
                    </button>

                    <div class="lg:flex md:hidden sm:hidden flex items-center gap-8">

                        <svg class="sm:block hidden" width="19" height="18" viewBox="0 0 19 18" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M17.9941 16.7215L13.1159 11.7977C14.0705 10.601 14.646 9.08453 14.646 7.43564C14.646 3.57605 11.5173 0.447266 7.6531 0.447266C3.78894 0.447266 0.660156 3.58062 0.660156 7.44021C0.660156 11.2998 3.78894 14.4286 7.6531 14.4286C9.32483 14.4286 10.855 13.8439 12.0608 12.8665L16.907 17.7583C17.0532 17.9136 17.2541 17.9913 17.4505 17.9913C17.6378 17.9913 17.8251 17.9228 17.9667 17.7857C18.2681 17.498 18.2773 17.023 17.9941 16.7215ZM7.6531 12.9259C6.18691 12.9259 4.80751 12.3549 3.77067 11.3181C2.73383 10.2812 2.16289 8.90183 2.16289 7.44021C2.16289 5.97402 2.73383 4.59461 3.77067 3.56235C4.80751 2.52551 6.18691 1.95456 7.6531 1.95456C9.11929 1.95456 10.4987 2.52551 11.5355 3.56235C12.5724 4.59918 13.1433 5.97859 13.1433 7.44021C13.1433 8.9064 12.5724 10.2858 11.5355 11.3181C10.4987 12.3549 9.11929 12.9259 7.6531 12.9259Z"
                                fill="#2A2A2A" />
                        </svg>

                        <svg class="sm:block hidden" class="" width="25" height="24" viewBox="0 0 25 24"
                            fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M10.3592 22.393C10.3592 22.9843 9.87979 23.4636 9.28846 23.4636C8.69714 23.4636 8.21777 22.9843 8.21777 22.393C8.21777 21.8016 8.69714 21.3223 9.28846 21.3223C9.87979 21.3223 10.3592 21.8016 10.3592 22.393Z"
                                stroke="black" stroke-linecap="round" stroke-linejoin="round" />
                            <path
                                d="M22.1365 22.393C22.1365 22.9843 21.6571 23.4636 21.0658 23.4636C20.4745 23.4636 19.9951 22.9843 19.9951 22.393C19.9951 21.8016 20.4745 21.3223 21.0658 21.3223C21.6571 21.3223 22.1365 21.8016 22.1365 22.393Z"
                                stroke="black" stroke-linecap="round" stroke-linejoin="round" />
                            <path
                                d="M0.722656 0.978516H5.00542L7.87487 15.3151C8.07695 16.3325 8.97916 17.0587 10.0162 17.0389H20.4234C21.4604 17.0587 22.3627 16.3325 22.5647 15.3151L24.2778 6.33197H6.07611"
                                stroke="black" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>

                        @if (Auth::check())
                            <!-- Button to toggle dropdown -->
                            <button class="lg:flex hidden" id="dropdownInformationButton2"
                                data-dropdown-toggle="dropdownInformation">
                                <img src="{{ auth()->check() && auth()->user()->image ? asset('storage/profile_images/' . auth()->user()->image) : asset('assets/images/user.svg') }}"
                                    alt="" class="w-10 h-10 rounded-full">
                            </button>

                            <!-- Dropdown Menu -->
                            <div id="dropdownInformation" dir="rtl"
                                class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow-md right-0 lg:w-[265px]">

                                <!-- User Info Section -->
                                <div
                                    class="flex flex-col lg:flex-row items-center justify-start pr-5 gap-4 w-full py-2">
                                    <!-- User Icon -->
                                    <img src="{{ auth()->check() && auth()->user()->image ? asset('storage/profile_images/' . auth()->user()->image) : asset('assets/images/user.svg') }}"
                                        alt="" class="w-10 h-10 rounded-full">

                                    <!-- User Name and Email -->
                                    <div class="py-3 text-[17px] text-[#6A6565] text-right">
                                        <span>{{ Auth::user()->fname . ' ' . Auth::user()->lname }}</span>
                                    </div>

                                </div>



                                <!-- Menu Items -->
                                <ul class="py-2 sm:text-[14px] md:text-[17px] pr-1 text-[#6A6565] text-right font-[300]"
                                    aria-labelledby="dropdownInformationButton">
                                    <li><a href="#" class="block px-4 py-3 hover:bg-gray-100 font-[100]">الدورات و
                                            الإشتراكات</a></li>
                                    <li><a href="{{ route('settings.account') }}"
                                            class="block px-4 py-3 hover:bg-gray-100 font-[100]">تعديل
                                            الملف الشخصي</a></li>
                                    <li><a href="#" class="block px-4 py-3 hover:bg-gray-100 font-[100]">طرق
                                            الدفع</a></li>
                                    <li><a href="#"
                                            class="block px-4 py-3 hover:bg-gray-100 font-[100]">مساعدة</a></li>
                                </ul>

                                <!-- Logout Button -->
                                <a href="{{ route('logout') }}"
                                    class="py-4 flex items-center gap-1 pr-5 text-[#6A6565] text-right font-[300]"
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="17"
                                        viewBox="0 0 22 19" fill="none">
                                        <path
                                            d="M13.804 15.8555C13.6145 15.856 13.4329 15.9315 13.299 16.0655C13.165 16.1994 13.0895 16.381 13.089 16.5705C13.0882 16.8139 12.9911 17.0472 12.8189 17.2194C12.6468 17.3916 12.4135 17.4887 12.17 17.4895H2.66997C2.42648 17.4887 2.19319 17.3916 2.02101 17.2194C1.84884 17.0472 1.75176 16.8139 1.75097 16.5705V3.28945C1.75176 3.04596 1.84884 2.81267 2.02101 2.6405C2.19319 2.46832 2.42648 2.37124 2.66997 2.37045H12.17C12.4135 2.37124 12.6468 2.46832 12.8189 2.6405C12.9911 2.81267 13.0882 3.04596 13.089 3.28945C13.089 3.47908 13.1643 3.66095 13.2984 3.79503C13.4325 3.92912 13.6143 4.00445 13.804 4.00445C13.9936 4.00445 14.1755 3.92912 14.3096 3.79503C14.4436 3.66095 14.519 3.47908 14.519 3.28945C14.519 2.66619 14.2714 2.06846 13.8307 1.62775C13.39 1.18704 12.7922 0.939453 12.169 0.939453H2.66897C2.04571 0.939453 1.44798 1.18704 1.00727 1.62775C0.566558 2.06846 0.31897 2.66619 0.31897 3.28945V16.5705C0.31897 17.1937 0.566558 17.7914 1.00727 18.2322C1.44798 18.6729 2.04571 18.9205 2.66897 18.9205H12.169C12.7922 18.9205 13.39 18.6729 13.8307 18.2322C14.2714 17.7914 14.519 17.1937 14.519 16.5705C14.5184 16.381 14.4429 16.1994 14.309 16.0655C14.175 15.9315 13.9934 15.856 13.804 15.8555Z"
                                            fill="#6A6565" />
                                        <path
                                            d="M16.915 4.92974C16.8486 4.86319 16.7697 4.81046 16.6829 4.77458C16.596 4.73871 16.5029 4.72041 16.409 4.72074C16.3149 4.71979 16.2216 4.73781 16.1347 4.77372C16.0477 4.80963 15.9689 4.86269 15.903 4.92974C15.8362 4.99593 15.7833 5.07467 15.7471 5.16143C15.711 5.24819 15.6924 5.34125 15.6924 5.43524C15.6924 5.52923 15.711 5.62228 15.7471 5.70904C15.7833 5.7958 15.8362 5.87455 15.903 5.94074L19.234 9.22074H6.14096C5.95133 9.22074 5.76947 9.29607 5.63538 9.43016C5.50129 9.56425 5.42596 9.74611 5.42596 9.93574C5.42596 10.1254 5.50129 10.3072 5.63538 10.4413C5.76947 10.5754 5.95133 10.6507 6.14096 10.6507H19.249L16 13.9247C15.8676 14.0597 15.7935 14.2412 15.7935 14.4302C15.7935 14.6193 15.8676 14.8008 16 14.9357L16.005 14.9407C16.1405 15.0679 16.3191 15.1393 16.505 15.1407C16.5991 15.1423 16.6926 15.1245 16.7796 15.0886C16.8666 15.0526 16.9453 14.9993 17.011 14.9317L21.23 10.7227C21.335 10.6289 21.4191 10.514 21.4767 10.3854C21.5343 10.2569 21.564 10.1176 21.564 9.97674C21.564 9.83588 21.5343 9.69661 21.4767 9.56805C21.4191 9.43949 21.335 9.32454 21.23 9.23074L16.915 4.92974Z"
                                            fill="#6A6565" />
                                    </svg>
                                    تسجيل الخروج
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                    style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        @else
                            <a href="{{ route('login') }}" target="_blank" rel="noopener noreferrer">
                                <button type="button"
                                    class="sm:flex hidden text-white bg-[#e77e5c] focus:outline-none text-[14px] rounded-[15px] px-4 py-3 flex items-center gap-3">
                                    <svg width="20" height="20" viewBox="0 0 22 21" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M11.0007 11.7933C14.212 11.7933 16.8173 9.18796 16.8173 5.97673C16.8173 2.7655 14.212 0.160156 11.0007 0.160156C7.7895 0.160156 5.18416 2.7655 5.18416 5.97673C5.18416 9.18796 7.7895 11.7933 11.0007 11.7933ZM16.171 13.0859H13.9454C13.0487 13.4979 12.0509 13.7322 11.0007 13.7322C9.95052 13.7322 8.95685 13.4979 8.05609 13.0859H5.83044C2.97467 13.0859 0.660156 15.4004 0.660156 18.2562V18.9025C0.660156 19.9729 1.5286 20.8413 2.59901 20.8413H19.4025C20.4729 20.8413 21.3413 19.9729 21.3413 18.9025V18.2562C21.3413 15.4004 19.0268 13.0859 16.171 13.0859Z"
                                            fill="white" />
                                    </svg>
                                    تسجيل الدخول
                                </button>
                            </a>
                        @endif


                    </div>
                </div>

                {{-- phone --}}
                <div class="items-center justify-between hidden w-full lg:flex md:w-auto md:order-1" id="navbar-cta">
                    <ul
                        class="flex flex-col sm:gap-[60px] gap-4 font-medium p-4 md:p-0 mt-4  rounded-lg rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white">
                        <li>
                            <a href="#" class="block py-2  rounded md:bg-transparent nav-li-active"
                                aria-current="page">الرئيسية</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block py-2 rounded hover:bg-gray-100 md:hover:bg-transparent nav-li">إحجز
                                إستشارتك</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block py-2 rounded hover:bg-gray-100 md:hover:bg-transparent nav-li">الدورات</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block py-2 rounded hover:bg-gray-100 md:hover:bg-transparent nav-li">فريقنا</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block py-2 rounded hover:bg-gray-100 md:hover:bg-transparent nav-li">اختبارات
                                شخصية</a>
                        </li>
                        <!-- زر تسجيل الدخول -->
                        <a href="{{ route('login') }}" target="_blank" rel="noopener noreferrer">
                            <li class="sm:hidden block">
                                @if (Auth::check())
                                    <!-- Button to toggle dropdown -->
                                    <a href="{{ route('settings.account') }}">
                                        <img src="{{ auth()->check() && auth()->user()->image ? asset('storage/profile_images/' . auth()->user()->image) : asset('assets/images/user.svg') }}"
                                            alt="" class="w-10 h-10 rounded-full">
                                    </a>
                                @else
                                    <a href="{{ route('login') }}" target="_blank" rel="noopener noreferrer">
                                        <button type="button"
                                            class=" text-white bg-[#e77e5c] focus:outline-none text-[14px] rounded-[15px] px-4 py-3 flex items-center gap-3">
                                            <svg width="20" height="20" viewBox="0 0 22 21" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M11.0007 11.7933C14.212 11.7933 16.8173 9.18796 16.8173 5.97673C16.8173 2.7655 14.212 0.160156 11.0007 0.160156C7.7895 0.160156 5.18416 2.7655 5.18416 5.97673C5.18416 9.18796 7.7895 11.7933 11.0007 11.7933ZM16.171 13.0859H13.9454C13.0487 13.4979 12.0509 13.7322 11.0007 13.7322C9.95052 13.7322 8.95685 13.4979 8.05609 13.0859H5.83044C2.97467 13.0859 0.660156 15.4004 0.660156 18.2562V18.9025C0.660156 19.9729 1.5286 20.8413 2.59901 20.8413H19.4025C20.4729 20.8413 21.3413 19.9729 21.3413 18.9025V18.2562C21.3413 15.4004 19.0268 13.0859 16.171 13.0859Z"
                                                    fill="white" />
                                            </svg>
                                            تسجيل الدخول
                                        </button>
                                    </a>
                                @endif
                            </li>
                        </a>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!--====================== END HEADER ======================-->


    <!--====================== START MAIN ======================-->
    @if ($errors->any())
        <div id="alertBox" class="alert error"
            style="z-index: 999999999; display: none; position: fixed; right: 20px; top: 100px; background-color: #f8d7da; color: #721c24; padding: 20px; border: 1px solid #f5c6cb; border-radius: 5px; display: flex; align-items: center; font-size: 18px; transform: translateX(100%); transition: transform 0.5s ease;">
            <svg class="w-7 h-7 mr-2 ml-3" fill="currentColor" viewBox="0 0 20 20"
                xmlns="http://www.w3.org/2000/svg">
                <path d="M10 2a8 8 0 100 16 8 8 0 000-16zm1 13h-2v-2h2v2zm0-4h-2V7h2v4z" />
            </svg>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </div>
    @endif

    @if (session('success'))
        <div id="alertBoxSuccess" class="alert success"
            style="z-index: 999999999; display: none; position: fixed; right: 20px; top: 20px; background-color: #d4edda; color: #155724; padding: 20px; border: 1px solid #c3e6cb; border-radius: 5px; display: flex; align-items: center; font-size: 18px; transform: translateX(100%); transition: transform 0.5s ease;">
            <svg class="w-6 h-6 mr-2 ml-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                viewBox="0 0 20 20">
                <path
                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
            </svg>
            {{ session('success') }}
        </div>
    @endif





    <div id="loader"
        class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 z-[9999999999999999]">
        <span class="loader"></span>
    </div>


    @yield('content')
    <!--====================== END MAIN ======================-->


    <!--====================== FOOTER ======================-->
    <footer class="bg-[#2F2E2D]">
        <div class="  max-w-[1400px] mx-auto p-4 md:py-8">
            <div class="sm:flex sm:items-center sm:justify-between">
                <a href="" class="">
                    <img src="{{ asset('assets/images/logofooter.svg') }}" alt="Logo" />
                </a>
                <ul
                    class="sm:my-0 my-16 flex flex-col items-center  text-sm font-medium text-gray-500  sm:flex-row gap-10">
                    <li class="flex items-center me-4 md:me-6">
                        <a href="#" class="hover:underline text-white text-[16px]">من نحن</a>
                    </li>
                    <li class="flex items-center me-4 md:me-6">
                        <a href="#" class="hover:underline text-white text-[16px]">سياسة الدفع والإسترجاع</a>
                    </li>
                    <li class="flex items-center me-4 md:me-6">
                        <a href="#" class="hover:underline text-white text-[16px]">تواصل معنا</a>
                    </li>
                    <li class="flex items-center">
                        <a href="#" class="hover:underline text-white text-[16px]">الشروط والأحكام</a>
                    </li>
                </ul>

                <div class="qrcode-footer flex items-center gap-5">
                    <div class="flex item-center gap-5 relative">
                        <a href="http://" target="_blank" rel="noopener noreferrer">
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40"
                                viewBox="0 0 43 42" fill="none">
                                <path
                                    d="M42.5 21C42.5 32.3108 33.1091 41.5 21.5 41.5C9.89086 41.5 0.5 32.3108 0.5 21C0.5 9.68919 9.89086 0.5 21.5 0.5C33.1091 0.5 42.5 9.68919 42.5 21Z"
                                    stroke="#F5F5F5" />
                                <path
                                    d="M31.1173 15.6538C30.8695 14.7207 30.1393 13.9858 29.2122 13.7364C27.5318 13.2832 20.7936 13.2832 20.7936 13.2832C20.7936 13.2832 14.0553 13.2832 12.3749 13.7364C11.4478 13.9858 10.7176 14.7207 10.4698 15.6538C10.0195 17.3451 10.0195 20.874 10.0195 20.874C10.0195 20.874 10.0195 24.4028 10.4698 26.0941C10.7176 27.0272 11.4478 27.7315 12.3749 27.9809C14.0553 28.4341 20.7936 28.4341 20.7936 28.4341C20.7936 28.4341 27.5318 28.4341 29.2122 27.9809C30.1393 27.7315 30.8695 27.0272 31.1173 26.0941C31.5676 24.4028 31.5676 20.874 31.5676 20.874C31.5676 20.874 31.5676 17.3451 31.1173 15.6538ZM18.5898 24.0778V17.6701L24.2216 20.874L18.5898 24.0778Z"
                                    fill="#F5F5F5" />
                            </svg>
                        </a>

                        <a href="http://" target="_blank" rel="noopener noreferrer">
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40"
                                viewBox="0 0 43 42" fill="none">
                                <path
                                    d="M42.5 21C42.5 32.3108 33.1091 41.5 21.5 41.5C9.89086 41.5 0.5 32.3108 0.5 21C0.5 9.68919 9.89086 0.5 21.5 0.5C33.1091 0.5 42.5 9.68919 42.5 21Z"
                                    stroke="#F5F5F5" />
                                <path
                                    d="M26.5706 21.7732L27.188 17.7503H23.3279V15.1398C23.3279 14.0392 23.8671 12.9664 25.5959 12.9664H27.3508V9.54131C27.3508 9.54131 25.7583 9.26953 24.2357 9.26953C21.0568 9.26953 18.9789 11.1963 18.9789 14.6843V17.7503H15.4453V21.7732H18.9789V31.4983H23.3279V21.7732H26.5706Z"
                                    fill="#F5F5F5" />
                            </svg>
                        </a>


                        <a href="http://" target="_blank" rel="noopener noreferrer">
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40"
                                viewBox="0 0 43 42" fill="none">
                                <path
                                    d="M42.5 21C42.5 32.3108 33.1091 41.5 21.5 41.5C9.89086 41.5 0.5 32.3108 0.5 21C0.5 9.68919 9.89086 0.5 21.5 0.5C33.1091 0.5 42.5 9.68919 42.5 21Z"
                                    stroke="#F5F5F5" />
                                <path
                                    d="M21.8363 14.9924C18.5115 14.9924 15.8297 17.6742 15.8297 20.999C15.8297 24.3238 18.5115 27.0056 21.8363 27.0056C25.1611 27.0056 27.8429 24.3238 27.8429 20.999C27.8429 17.6742 25.1611 14.9924 21.8363 14.9924ZM21.8363 24.9041C19.6878 24.9041 17.9313 23.1528 17.9313 20.999C17.9313 18.8452 19.6825 17.094 21.8363 17.094C23.9901 17.094 25.7414 18.8452 25.7414 20.999C25.7414 23.1528 23.9849 24.9041 21.8363 24.9041ZM29.4896 14.7467C29.4896 15.5257 28.8623 16.1478 28.0886 16.1478C27.3097 16.1478 26.6876 15.5204 26.6876 14.7467C26.6876 13.9731 27.3149 13.3457 28.0886 13.3457C28.8623 13.3457 29.4896 13.9731 29.4896 14.7467ZM33.4679 16.1687C33.379 14.2919 32.9504 12.6295 31.5755 11.2599C30.2058 9.89026 28.5434 9.46159 26.6667 9.36749C24.7325 9.25771 18.935 9.25771 17.0007 9.36749C15.1292 9.45636 13.4668 9.88503 12.0919 11.2547C10.7171 12.6243 10.2936 14.2867 10.1995 16.1634C10.0897 18.0977 10.0897 23.8951 10.1995 25.8294C10.2884 27.7061 10.7171 29.3685 12.0919 30.7381C13.4668 32.1078 15.124 32.5365 17.0007 32.6306C18.935 32.7403 24.7325 32.7403 26.6667 32.6306C28.5434 32.5417 30.2058 32.113 31.5755 30.7381C32.9451 29.3685 33.3738 27.7061 33.4679 25.8294C33.5777 23.8951 33.5777 18.1029 33.4679 16.1687ZM30.9691 27.9048C30.5613 28.9294 29.7719 29.7188 28.7421 30.1317C27.1999 30.7434 23.5406 30.6022 21.8363 30.6022C20.1321 30.6022 16.4675 30.7381 14.9306 30.1317C13.9059 29.724 13.1166 28.9346 12.7036 27.9048C12.0919 26.3626 12.2331 22.7032 12.2331 20.999C12.2331 19.2948 12.0972 15.6302 12.7036 14.0933C13.1113 13.0687 13.9007 12.2793 14.9306 11.8663C16.4727 11.2547 20.1321 11.3958 21.8363 11.3958C23.5406 11.3958 27.2052 11.2599 28.7421 11.8663C29.7667 12.2741 30.5561 13.0634 30.9691 14.0933C31.5807 15.6354 31.4396 19.2948 31.4396 20.999C31.4396 22.7032 31.5807 26.3678 30.9691 27.9048Z"
                                    fill="#F5F5F5" />
                            </svg>
                    </div>
                    </a>


                    <div class="flex">


                        <svg width="80" height="80" viewBox="0 0 112 112" fill="none"
                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <path
                                d="M0 14C0 6.26801 6.26801 0 14 0H98C105.732 0 112 6.26801 112 14V98C112 105.732 105.732 112 98 112H14C6.26801 112 0 105.732 0 98V14Z"
                                fill="url(#pattern0_277_6646)" />
                            <defs>
                                <pattern id="pattern0_277_6646" patternContentUnits="objectBoundingBox"
                                    width="1" height="1">
                                    <use xlink:href="#image0_277_6646" transform="scale(0.00333333)" />
                                </pattern>
                                <image id="image0_277_6646" width="300" height="300"
                                    xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAASwAAAEsCAYAAAB5fY51AAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAABmJLR0QAAAAAAAD5Q7t/AAAACXBIWXMAAABgAAAAYADwa0LPAAARCUlEQVR42u3dvZITsRKGYXFi7wZQXCUmp/YCKGKguMgNCGxyn4CdOnV+7NaZVqv707xP1YS2JY3cxY4/Wu9ut9utAYCAf2QPAAB6UbAAyKBgAZBBwQIgg4IFQAYFC4AMChYAGRQsADIoWABkULAAyKBgAZBBwQIgg4IFQAYFC4AMChYAGRQsADIoWABkULAAyKBgAZBBwQIgg4IFQAYFC4AMChYAGRQsADIoWABkULAAyKBgAZBBwQIgg4IFQAYFC4AMChYAGRQsADIoWABklClYHz58aO/evVv2svz48aM9PT393+/79PTUfvz4kX375Od3b3y9n3/0/TvLu9vtdsseRGt/b/jv37+zhxHGWuanp6f258+fXe99Op3a9XrNnqL0/B6Nr+fzj75/ZynzL6yj2/tl9r6W+dmfobC+R0HBAiCDggVABgULgAwKVhGn0ynltTN4H5hHz6/6Dxb4FwpWEV+/ft31xTydTu3bt2/Zw7/rer22L1++7H599Py848NktyLev39/a63dvV5fX7OH6Br/6r5//347nU4P1+DRdT6fb5fLpez4LOzfOWRyWK+vr+3jx4/Zw9w9/iLLHMaTs2qttcvl0p6ensqOz7p/7N85+JMQQ3izSpHFasT4UAMFC4AMChYAGRQsADIoWHBTyDFVz6qhDwULLio5pr05N9SyTMFS7wfk7ce09/291/Pzc/v161f59fn8+XO7Xq/tdrv923W5XNr5fA4fv0V9/05bp1VyWNE3xZvDsV7v7cdk8eaQomWuz/V6bc/Pz67xHX3/zrLMv7DURfdjqlysvOOvngHDOBQsADIoWABkULAAyKBgiVDIOu1F3AC9KFgiXl5elixa1ft5oRYKloifP3+25+fnsJzW+Xxul8vlv3JK0df1em2fPn3KXl6IoGCJ+/PnT3t5eXG/z9evX/l5H+VRsBYwImNFsYICChYAGRQsADIoWABkULAW8SjysGIcYvQcH2XByInVQcFaxL2clkq/qqj597rXL4uc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" />
                            </defs>
                        </svg>

                    </div>

                </div>

            </div>
            <span class="block text-sm text-gray-500 sm:text-center sm:mt-0 mt-10"><a href="https://flowbite.com/"
                    class="hover:underline text-white">COPYRIGHT <span class="text-[#474747]"> ©</span> Estisharati
                    2022</span>
        </div>
    </footer>
    <!--====================== END FOOTER ======================-->


    <!--====================== SCRIPTS ======================-->
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script>
        const forms = document.querySelectorAll('form');
        const loader = document.getElementById('loader');

        forms.forEach(form => {
            form.addEventListener('submit', function(event) {
                loader.style.display = 'flex';
            });
        });

        window.addEventListener('load', function() {
            loader.style.display = 'none';
        });

        forms.forEach(form => {
            form.addEventListener('ajaxComplete', function() {
                loader.style.display = 'none';
            });
        });

        window.onload = function() {
            const alertBoxError = document.getElementById("alertBox");
            if (alertBoxError) {
                alertBoxError.style.display = "flex";
                alertBoxError.style.transform = "translateX(0)";

                setTimeout(() => {
                    alertBoxError.style.transform = "translateX(100%)";
                    setTimeout(() => {
                        alertBoxError.style.display = "none";
                    }, 500);
                }, 5000);
            }

            const alertBoxSuccess = document.getElementById("alertBoxSuccess");
            if (alertBoxSuccess) {
                alertBoxSuccess.style.display = "flex";
                alertBoxSuccess.style.transform = "translateX(0)";

                setTimeout(() => {
                    alertBoxSuccess.style.transform = "translateX(100%)";
                    setTimeout(() => {
                        alertBoxSuccess.style.display = "none";
                    }, 500);
                }, 5000);
            }
        };
    </script>
</body>

</html>
