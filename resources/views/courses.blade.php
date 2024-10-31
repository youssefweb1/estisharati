@extends('layouts.app')
@section('content')
    <!--====================== MAIN ======================-->
    <main>
        <div class="max-w-[1400px] mx-auto px-3 sm:mt-20 mt-8">
            <!-- 1SEC -->
            <section>
                <div class="search-div flex items-center justify-between w-full gap-5">
                    <form class="sm:w-5/6 w-full">
                        <label for="default-search"
                            class="mb-2 text-sm font-medium text-gray-900 sr-only">Search</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 start-3 flex items-center ps-3 pointer-events-none">
                                <svg class="w-4 h-4 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 20 20">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                                </svg>
                            </div>
                            <input type="search" id="default-search"
                                class="block w-full p-4 ps-[60px] sm:text-[17px] text-[14px] text-[#2a2a2a] border-2 border-[#f5f5f5] rounded-[27px] box-border bg-white focus:border-0"
                                placeholder="ابحث عن الدورات هنا" required style="text-align: right; height: 54px;" />
                        </div>
                    </form>

                    <form action="" class="sm:w-1/6 w-[190px] sm:mt-0 mt-2">
                        <select id="countries"
                            class="bg-gray-50 border-2 border-[#d5d5d5] text-[#2a2a2a] sm:text-[17px] text-[14px] rounded-[27px] box-border sm:h-[54px] h-[50px] focus:ring-0 focus:border-[#d5d5d5]  w-full pr-0 pl-10 cursor-pointer ">
                            <option selected>الأكثر مبيعاً</option>
                            <option value="US">الولايات المتحدة</option>
                            <option value="CA">كندا</option>
                            <option value="FR">فرنسا</option>
                            <option value="DE">ألمانيا</option>
                        </select>
                    </form>


                </div>

            </section>
            <!-- END SEC1 -->

            <!-- SEC2 -->
            <section>
                

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-5 mt-14">
                    <!-- Course Card 1 -->
                    <div class="shadow-[0px_17px_32.5px_rgba(0,0,0,0.1)] rounded-[10px] bg-[#f5f5f5] h-[500px]">
                        <div
                            class="flex items-center justify-center relative shadow-[0px_17px_32.5px_rgba(0,0,0,0.16)] rounded-[10px_10px_0px_0px] bg-gradient-to-b from-[#84aa44] to-[#e5ac91] h-[225px]">
                            <img src="assets/images/course.png" alt="Course Image">
                            <div class="absolute inset-0 flex items-center justify-center z-[99999]">
                                <button data-modal-target="extralarge-modal" data-modal-toggle="extralarge-modal" class="z-[9999999999]">
                                    <svg width="85" height="85" viewBox="0 0 85 85" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path opacity="0.54"
                                            d="M42.2988 0.736328C65.3361 0.736328 84.0116 19.4118 84.0116 42.4491C84.0116 65.4865 65.3361 84.162 42.2988 84.162C19.2614 84.162 0.585938 65.4865 0.585938 42.4491C0.585938 19.4118 19.2614 0.736328 42.2988 0.736328Z"
                                            fill="#2A2A2A" />
                                        <path
                                            d="M33.7224 32.6961C33.7224 30.3867 36.2224 28.9434 38.2224 30.0981L54.7224 39.6244C56.7224 40.7791 56.7224 43.6658 54.7224 44.8205L38.2224 54.3468C36.2224 55.5015 33.7224 54.0581 33.7224 51.7487L33.7224 32.6961Z"
                                            fill="#D9D9D9" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <div class="flex flex-col items-start px-5 py-5">
                            <span class="text-[20px] font-[500] text-[#e77e5c] text-right">فن الإقناع</span>
                            <span class="text-[16px] text-[#2a2a2a] text-right pt-2">اكتشف طرق فعالة لإقناع الآخرين
                                وتحقيق أهدافك من خلال التواصل الفعّال.</span>
                            <div class="w-full border-t border-gray-800 opacity-10 mt-10 mb-5 h-px"></div>
                            <span
                                class="relative text-[20px] font-medium font-ge-dinar-one text-[#772b20] text-right inline-block">أ
                                / رامي يوسف</span>
                            <span class="text-[16px] text-[#2a2a2a] text-right pt-2">استشاري تسويق</span>
                        </div>
                    </div>
                    <!-- End of Course Card 1 -->

                    <!-- Course Card 2 -->
                    <div class="shadow-[0px_17px_32.5px_rgba(0,0,0,0.1)] rounded-[10px] bg-[#f5f5f5] h-[500px]">
                        <div
                            class="flex items-center justify-center relative shadow-[0px_17px_32.5px_rgba(0,0,0,0.16)] rounded-[10px_10px_0px_0px] bg-gradient-to-b from-[#84aa44] to-[#e5ac91] h-[225px]">
                            <img src="assets/images/course.png" alt="Course Image">
                            <div class="absolute inset-0 flex items-center justify-center z-[99999]">
                                <button class="z-[9999999999]">
                                    <svg width="85" height="85" viewBox="0 0 85 85" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path opacity="0.54"
                                            d="M42.2988 0.736328C65.3361 0.736328 84.0116 19.4118 84.0116 42.4491C84.0116 65.4865 65.3361 84.162 42.2988 84.162C19.2614 84.162 0.585938 65.4865 0.585938 42.4491C0.585938 19.4118 19.2614 0.736328 42.2988 0.736328Z"
                                            fill="#2A2A2A" />
                                        <path
                                            d="M33.7224 32.6961C33.7224 30.3867 36.2224 28.9434 38.2224 30.0981L54.7224 39.6244C56.7224 40.7791 56.7224 43.6658 54.7224 44.8205L38.2224 54.3468C36.2224 55.5015 33.7224 54.0581 33.7224 51.7487L33.7224 32.6961Z"
                                            fill="#D9D9D9" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <div class="flex flex-col items-start px-5 py-5">
                            <span class="text-[20px] font-[500] text-[#e77e5c] text-right">التفاوض الفعال</span>
                            <span class="text-[16px] text-[#2a2a2a] text-right pt-2">تعلّم أساسيات التفاوض وكيفية الوصول
                                إلى نتائج ترضي جميع الأطراف.</span>
                            <div class="w-full border-t border-gray-800 opacity-10 mt-10 mb-5 h-px"></div>
                            <span
                                class="relative text-[20px] font-medium font-ge-dinar-one text-[#772b20] text-right inline-block">أ
                                / هالة كريم</span>
                            <span class="text-[16px] text-[#2a2a2a] text-right pt-2">خبيرة موارد بشرية</span>
                        </div>
                    </div>
                    <!-- End of Course Card 2 -->

                    <!-- Course Card 3 -->
                    <div class="shadow-[0px_17px_32.5px_rgba(0,0,0,0.1)] rounded-[10px] bg-[#f5f5f5] h-[500px]">
                        <div
                            class="flex items-center justify-center relative shadow-[0px_17px_32.5px_rgba(0,0,0,0.16)] rounded-[10px_10px_0px_0px] bg-gradient-to-b from-[#84aa44] to-[#e5ac91] h-[225px]">
                            <img src="assets/images/course.png" alt="Course Image">
                            <div class="absolute inset-0 flex items-center justify-center z-[99999]">
                                <button class="z-[9999999999]">
                                    <svg width="85" height="85" viewBox="0 0 85 85" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path opacity="0.54"
                                            d="M42.2988 0.736328C65.3361 0.736328 84.0116 19.4118 84.0116 42.4491C84.0116 65.4865 65.3361 84.162 42.2988 84.162C19.2614 84.162 0.585938 65.4865 0.585938 42.4491C0.585938 19.4118 19.2614 0.736328 42.2988 0.736328Z"
                                            fill="#2A2A2A" />
                                        <path
                                            d="M33.7224 32.6961C33.7224 30.3867 36.2224 28.9434 38.2224 30.0981L54.7224 39.6244C56.7224 40.7791 56.7224 43.6658 54.7224 44.8205L38.2224 54.3468C36.2224 55.5015 33.7224 54.0581 33.7224 51.7487L33.7224 32.6961Z"
                                            fill="#D9D9D9" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <div class="flex flex-col items-start px-5 py-5">
                            <span class="text-[20px] font-[500] text-[#e77e5c] text-right">إدارة الوقت</span>
                            <span class="text-[16px] text-[#2a2a2a] text-right pt-2">تعلّم كيفية تنظيم وقتك بفعالية
                                وزيادة إنتاجيتك في العمل.</span>
                            <div class="w-full border-t border-gray-800 opacity-10 mt-10 mb-5 h-px"></div>
                            <span
                                class="relative text-[20px] font-medium font-ge-dinar-one text-[#772b20] text-right inline-block">أ
                                / علي حمدي</span>
                            <span class="text-[16px] text-[#2a2a2a] text-right pt-2">مدرب تطوير ذاتي</span>
                        </div>
                    </div>
                    <!-- End of Course Card 3 -->

                    <!-- Course Card 4 -->
                    <div class="shadow-[0px_17px_32.5px_rgba(0,0,0,0.1)] rounded-[10px] bg-[#f5f5f5] h-[500px]">
                        <div
                            class="flex items-center justify-center relative shadow-[0px_17px_32.5px_rgba(0,0,0,0.16)] rounded-[10px_10px_0px_0px] bg-gradient-to-b from-[#84aa44] to-[#e5ac91] h-[225px]">
                            <img src="assets/images/course.png" alt="Course Image">
                            <div class="absolute inset-0 flex items-center justify-center z-[99999]">
                                <button class="z-[9999999999]">
                                    <svg width="85" height="85" viewBox="0 0 85 85" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path opacity="0.54"
                                            d="M42.2988 0.736328C65.3361 0.736328 84.0116 19.4118 84.0116 42.4491C84.0116 65.4865 65.3361 84.162 42.2988 84.162C19.2614 84.162 0.585938 65.4865 0.585938 42.4491C0.585938 19.4118 19.2614 0.736328 42.2988 0.736328Z"
                                            fill="#2A2A2A" />
                                        <path
                                            d="M33.7224 32.6961C33.7224 30.3867 36.2224 28.9434 38.2224 30.0981L54.7224 39.6244C56.7224 40.7791 56.7224 43.6658 54.7224 44.8205L38.2224 54.3468C36.2224 55.5015 33.7224 54.0581 33.7224 51.7487L33.7224 32.6961Z"
                                            fill="#D9D9D9" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <div class="flex flex-col items-start px-5 py-5">
                            <span class="text-[20px] font-[500] text-[#e77e5c] text-right">الذكاء العاطفي</span>
                            <span class="text-[16px] text-[#2a2a2a] text-right pt-2">استكشف كيفية تحسين علاقاتك الشخصية
                                والمهنية من خلال فهم عواطفك .</span>
                            <div class="w-full border-t border-gray-800 opacity-10 mt-10 mb-5 h-px"></div>
                            <span
                                class="relative text-[20px] font-medium font-ge-dinar-one text-[#772b20] text-right inline-block">أ
                                / سامية عبد الرحمن</span>
                            <span class="text-[16px] text-[#2a2a2a] text-right pt-2">أخصائية تطوير الذات</span>
                        </div>
                    </div>
                    <!-- End of Course Card 4 -->
                </div>



            </section>
            <!-- END SEC2 -->


            <!-- MODAL -->
            <!-- Modal Container -->
            <div id="extralarge-modal" tabindex="-1"
                class="fixed top-0 left-0 right-0 z-[999999999] hidden w-full overflow-x-hidden overflow-y-auto">

                <!-- Modal Wrapper -->
                <div class="relative w-full max-w-[1600px] mx-auto">

                    <!-- Modal Content -->
                    <div class="relative bg-white rounded-lg shadow-lg m-5">

                        <!-- Modal Header -->
                        <div class="flex items-center justify-between p-4 absolute left-2">
                            <button type="button"
                                class="text-gray-400 bg-transparent hover:bg-red-200 p-2 rounded-lg text-sm inline-flex justify-center items-center"
                                data-modal-hide="extralarge-modal">
                                <svg width="22" height="24" viewBox="0 0 22 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <line x1="2.12132" y1="2" x2="20" y2="19.8787" stroke="#2A2A2A" stroke-width="3"
                                        stroke-linecap="round" />
                                    <line x1="20" y1="4.12132" x2="2.12132" y2="22" stroke="#2A2A2A" stroke-width="3"
                                        stroke-linecap="round" />
                                </svg>
                            </button>
                        </div>
                        <!-- End of Modal Header -->

                        <!-- Modal Body -->
                        <div class="flex flex-col lg:flex-row items-start justify-between p-5 gap-5 lg:gap-20">

                            <!-- Right Modal Section -->
                            <div
                                class="right-modal flex flex-col justify-between h-full gap-5 items-start w-full lg:w-1/2 sm:ml-20 ml-0 lg:pr-10">

                                <!-- Title -->
                                <div class="flex flex-col gap-5 w-full">
                                    <div
                                        class="flex flex-col gap-5 md:flex-row items-start md:items-center justify-between w-full md:pt-10">
                                        <span
                                            class="text-[#2A2A2A] text-right sm:text-[20px] text-[18px] font-medium relative after:content-[''] after:absolute after:w-full after:h-[2px] after:bg-[#E77E5C] after:bottom-[-10px] after:left-0">
                                            تعديل سلوك ذكي
                                        </span>
                                        <div
                                            class="w-[168px] h-[54px] text-[18px] flex-shrink-0 flex items-center justify-center gap-2 rounded-[19px] border border-[#F5F5F5] bg-white shadow-[0px_12px_8.5px_0px_rgba(0,0,0,0.05)]">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22"
                                                viewBox="0 0 22 22" fill="none">
                                                <path
                                                    d="M21.2536 10.5424L11.4468 0.735512C11.0545 0.343238 10.5097 0.103516 9.91035 0.103516H2.28281C1.0842 0.103516 0.103516 1.0842 0.103516 2.28281V9.91035C0.103516 10.5097 0.343238 11.0545 0.746408 11.4577L10.5532 21.2645C10.9455 21.6568 11.4903 21.8965 12.0897 21.8965C12.689 21.8965 13.2338 21.6568 13.6261 21.2536L21.2536 13.6261C21.6568 13.2338 21.8965 12.689 21.8965 12.0897C21.8965 11.4903 21.6459 10.9346 21.2536 10.5424ZM3.91729 5.55176C3.01288 5.55176 2.28281 4.82169 2.28281 3.91729C2.28281 3.01288 3.01288 2.28281 3.91729 2.28281C4.82169 2.28281 5.55176 3.01288 5.55176 3.91729C5.55176 4.82169 4.82169 5.55176 3.91729 5.55176Z"
                                                    fill="#FF0000" />
                                            </svg>
                                            خصم 50%
                                        </div>
                                    </div>

                                    <!-- Description Section -->
                                    <div
                                        class="text-[#6A6565] text-right text-[15px] font-medium leading-[200%] mt-5 flex flex-col gap-2 items-start md:border-b border-gray-300 md:pb-5">
                                        تهدف دورة تعديل السلوك إلى توفير حلول فعالة وتطبيقات عملية للتعامل مع معظم
                                        المشاكل التي نواجهها مع أطفالنا ومعالجة القضايا المتكررة بأفضل الطرق.
                                    </div>
                                </div>

                                <div class="hidden lg:flex flex-col gap-10 w-full lg:mt-40">

                                    <!-- Price Section for Large Screens -->
                                    <div class="hidden lg:flex flex-col gap-2 w-full">
                                        <div
                                            class="flex justify-between items-center border-b border-gray-300 pb-5 w-full">
                                            <span>السعر:</span>
                                            <div class="flex items-center gap-10">
                                                <del class="text-[25px] text-[#C4BCBC]">929$</del>
                                                <p class="text-[25px] text-[#84AA44]">800$</p>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Submit Buttons Section -->
                                    <div class="flex lg:flex-row flex-col justify-center gap-10 w-full mt-5">
                                        <button
                                            class="w-auto px-20 h-[60px] flex-shrink-0 rounded-full bg-[#E77E5C] text-white">
                                            اشترك الآن
                                        </button>
                                        <button
                                            class="w-auto px-10 h-[60px] flex-shrink-0 rounded-full border-2 border-[#E77E5C] text-[#E77E5C]">
                                            أضف إلى السلة
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <!-- End of Right Modal Section -->

                            <link href="https://vjs.zencdn.net/7.20.3/video-js.css" rel="stylesheet" />
                            <script src="https://vjs.zencdn.net/7.20.3/video.min.js"></script>

                            <!-- Left Modal Section -->
                            <div class="left-modal flex flex-col items-start justify-start w-full lg:w-1/2 lg:pl-20">

                                <div
                                    class="relative w-full h-[300px] lg:h-[500px] md:mt-8 rounded-[20px] overflow-hidden">
                                    <video id="my-video" class="video-js w-full h-full rounded-[20px] object-cover"
                                        controls preload="auto" data-setup="{}"
                                        style="border-radius: 20px; object-fit: cover;">
                                        <source
                                            src="https://videos.pexels.com/video-files/4010941/4010941-sd_640_360_25fps.mp4"
                                            type="video/mp4"> <!-- Video source -->
                                        <p class="vjs-no-js">
                                            لتشغيل هذا الفيديو، يرجى تمكين JavaScript، واعتبر ترقية المتصفح الخاص بك إلى
                                            متصفح يدعم فيديو HTML5.
                                        </p>
                                    </video>
                                </div>

                                <!-- Description Text Under Video -->
                                <div
                                    class="lg:w-2/3 w-full text-right text-[#6A6565] text-[15px] font-medium leading-[200%]">
                                    <div class="flex flex-col items-start px-5 py-5 pb-3">
                                        <span
                                            class="relative text-[20px] font-medium font-ge-dinar-one text-[#772b20] text-right inline-block">أ/
                                            رامي يوسف</span>
                                        <span class="text-[16px] text-[#2a2a2a] text-right pt-2">استشاري تسويق</span>
                                    </div>
                                </div>

                                <!-- Price Section for Mobile Screens -->
                                <div class="flex flex-col gap-2 w-full mt-5 lg:hidden">
                                    <div class="flex justify-between items-center border-y border-gray-300 py-5 w-full">
                                        <span>السعر:</span>
                                        <div class="flex items-center gap-10">
                                            <del class="text-[25px] text-[#C4BCBC]">929$</del>
                                            <p class="text-[25px] text-[#84AA44]">800$</p>
                                        </div>
                                    </div>

                                    <div class="flex lg:flex-row flex-col justify-center gap-10 w-full mt-5">
                                        <button
                                            class="w-auto px-20 h-[60px] flex-shrink-0 rounded-full bg-[#E77E5C] text-white">
                                            اشترك الآن
                                        </button>
                                        <button
                                            class="w-auto px-10 h-[60px] flex-shrink-0 rounded-full border-2 border-[#E77E5C] text-[#E77E5C]">
                                            أضف إلى السلة
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <!-- End of Left Modal Section -->
                        </div>
                        <!-- End of Modal Body -->
                    </div>
                    <!-- End of Modal Content -->
                </div>
                <!-- End of Modal Wrapper -->
            </div>
            <!-- End of Modal Container -->
            <!-- END MODAL -->


        </div>
    </main>
    <!--====================== END MAIN ======================-->
@endsection
