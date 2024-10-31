<!DOCTYPE html>
<html lang="ar">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Courses</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

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
                <a href="" class="flex items-center space-x-3 rtl:space-x-reverse">
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
                                    <svg class="hidden lg:block" width="45" height="45" viewBox="0 0 50 50"
                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M25 50C38.8071 50 50 38.8071 50 25C50 11.1929 38.8071 0 25 0C11.1929 0 0 11.1929 0 25C0 38.8071 11.1929 50 25 50Z"
                                            fill="#F5F5F5" />
                                        <path
                                            d="M25 49.5C38.531 49.5 49.5 38.531 49.5 25C49.5 11.469 38.531 0.5 25 0.5C11.469 0.5 0.5 11.469 0.5 25C0.5 38.531 11.469 49.5 25 49.5Z"
                                            stroke="#F5F5F5" />
                                        <path
                                            d="M25 26.5396C26.3702 26.5396 27.7097 26.1333 28.849 25.372C29.9883 24.6108 30.8763 23.5288 31.4007 22.2628C31.925 20.9969 32.0622 19.6039 31.7949 18.26C31.5276 16.9161 30.8678 15.6817 29.8989 14.7128C28.93 13.7439 27.6955 13.084 26.3516 12.8167C25.0077 12.5494 23.6147 12.6866 22.3488 13.211C21.0829 13.7353 20.0009 14.6233 19.2396 15.7626C18.4783 16.9019 18.072 18.2414 18.072 19.6116C18.0726 21.4489 18.8026 23.2107 20.1018 24.5098C21.4009 25.809 23.1628 26.5391 25 26.5396ZM31.158 28.0796H28.507C27.4074 28.5867 26.2109 28.8492 25 28.8492C23.7891 28.8492 22.5926 28.5867 21.493 28.0796H18.842C17.209 28.0796 15.6428 28.7282 14.488 29.8829C13.3332 31.0375 12.6843 32.6036 12.684 34.2366V35.0066C12.6843 35.6189 12.9276 36.2061 13.3606 36.639C13.7936 37.072 14.3807 37.3153 14.993 37.3156H35.007C35.6193 37.3153 36.2065 37.072 36.6394 36.639C37.0724 36.2061 37.3158 35.6189 37.316 35.0066V34.2366C37.3147 32.6043 36.6653 31.0392 35.5106 29.8855C34.3559 28.7317 32.7904 28.0836 31.158 28.0836V28.0796Z"
                                            fill="#6A6565" />
                                    </svg>

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
                                    <li><a href="#" class="block px-4 py-3 hover:bg-gray-100 font-[100]">تعديل
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
                                <button type="button"
                                    class="text-white bg-[#e77e5c] focus:outline-none text-[14px] rounded-[15px] px-4 py-3 flex items-center gap-3">
                                    <svg width="17" height="17" viewBox="0 0 22 21" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M11.0007 11.7933C14.212 11.7933 16.8173 9.18796 16.8173 5.97673C16.8173 2.7655 14.212 0.160156 11.0007 0.160156C7.7895 0.160156 5.18416 2.7655 5.18416 5.97673C5.18416 9.18796 7.7895 11.7933 11.0007 11.7933ZM16.171 13.0859H13.9454C13.0487 13.4979 12.0509 13.7322 11.0007 13.7322C9.95052 13.7322 8.95685 13.4979 8.05609 13.0859H5.83044C2.97467 13.0859 0.660156 15.4004 0.660156 18.2562V18.9025C0.660156 19.9729 1.5286 20.8413 2.59901 20.8413H19.4025C20.4729 20.8413 21.3413 19.9729 21.3413 18.9025V18.2562C21.3413 15.4004 19.0268 13.0859 16.171 13.0859Z"
                                            fill="white" />
                                    </svg>
                                    تسجيل الدخول
                                </button>
                            </li>
                        </a>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!--====================== END HEADER ======================-->

    <!--====================== MAIN ======================-->
    <main>
        <div class="max-w-[1400px] mx-auto px-5 sm:mt-20 mt-8">
            <div class="container text-center flex flex-col items-center justify-center gap-10"
                style="margin-top: 20%;">
                <h1 class="text-xl  ">{{ $message }}</h1>


                <a href="{{ route('login') }}" target="_blank" rel="noopener noreferrer">
                    <button type="button"
                        class=" text-white bg-[#e77e5c] focus:outline-none text-[14px] rounded-[15px] px-4 py-3 flex items-center gap-3">
                        تسجيل الدخول
                    </button>
                </a>
            </div>
        </div>
    </main>
    <!--====================== END MAIN ======================-->

