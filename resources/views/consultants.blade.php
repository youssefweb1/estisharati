@extends('layouts.app')
@section('content')
    <!--====================== MAIN ======================-->
    <main>
        <link href="https://cdn.jsdelivr.net/npm/vanilla-calendar-pro/build/vanilla-calendar.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/vanilla-calendar-pro/build/vanilla-calendar.min.js" defer></script>

        <div class="max-w-[1400px] mx-auto px-4 sm:mt-10 mt-8 mb-32 ">
            <!-- 1SEC -->
            <section>
                <!-- titles -->
                <div class="flex items-start justify-start">
                    <span
                        class="text-[#2A2A2A] text-[20px] gap-4   font-medium flex items-center justify-center cursor-pointer">
                        <svg class="mt-2" width="11" height="15" viewBox="0 0 11 19" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M7.93438 9.70418L1.2039 2.97899C0.706123 2.48122 0.706123 1.67632 1.2039 1.18384C1.70167 0.686074 2.50657 0.69137 3.00434 1.18384L10.6298 8.80396C11.1116 9.28584 11.1222 10.059 10.6668 10.5567L3.00964 18.2298C2.76075 18.4787 2.43243 18.6005 2.10941 18.6005C1.78639 18.6005 1.45808 18.4787 1.20919 18.2298C0.711418 17.732 0.711418 16.9271 1.20919 16.4347L7.93438 9.70418Z"
                                fill="#2A2A2A" />
                        </svg>

                        رجوع

                    </span>
                </div>
                <div class="flex items-center justify-center  my-10 lg:my-20 lg:mt-0">
                    <span
                        class="text-[#2A2A2A] text-right sm:text-[30px] text-[22px] font-medium relative after:content-[''] after:absolute after:w-full after:h-[2px] after:bg-[#E77E5C] after:bottom-[-10px] after:left-0">
                        أحجز موعد استشاراتك الآن
                    </span>
                </div>

                <!-- start -->
                <div
                    class="w-full flex flex-col lg:flex-row item-center justify-between gap-6 lg:gap-0 lg:h-[650px] flex-shrink-0 lg:px-5 ">
                    <div class="w-full lg:w-[59%] lg:pl-10">
                        <div dir="ltr" lang="en" id="calendar" class="w-full h-full lg:px-[45px] lg:py-[30px]">
                        </div>


                    </div>

                    <div class="hidden lg:block border-[1px] border-gray-200 h-full"></div>

                    <div class="w-full lg:w-[41%] lg:px-10">

                        <form action="{{ route('consultation.book') }}" method="POST" class="w-full">
                            @csrf

                            <div
                                class="bg-white w-full h-full flex flex-col p-4 pb-10 rounded-[20px] shadow-[0px_15px_8.5px_0px_rgba(0,0,0,0.03)]">
                                <div
                                    class="text-[18px] text-[#6A6565] flex items-center justify-center border-b py-4 border-gray-200">
                                    اختار توقيت الاستشارة والإستشاري
                                    
                                </div>
                                <input type="hidden" name="user_id" value="{{ auth()->user()->id }}" />
                                <div class="w-full mt-7 h-full lg:px-7 flex flex-col gap-5">
                                    <!-- Consultation Time -->
                                    <div>
                                        <span
                                            class="text-[#6A6565] pr-3 text-right text-[15px] lg:text-[17px] font-normal uppercase leading-normal">
                                            توقيت الإستشارة
                                        </span>
                                        <select name="consultation_time"
                                            class="mt-1 h-[54px] flex-shrink-0 rounded-[19px] border border-[#F5F5F5] bg-white shadow-[0px_12px_8.5px_0px_rgba(0,0,0,0.03)] w-full">
                                            <option value="9-11">9 am - 11 am</option>
                                            <option value="11-1">11 am - 1 pm</option>
                                            <option value="1-3">1 pm - 3 pm</option>
                                            <option value="3-5">3 pm - 5 pm</option>
                                            <option value="5-7">5 pm - 7 pm</option>
                                            <option value="7-9">7 pm - 9 pm</option>
                                        </select>
                                        



                                    </div>


                                    <input type="text" id="consultation_date" name="consultation_date" value="" required>
                                    <span id="display_date" class="display-date"></span>




                                    <div>
                                        <!-- Advisor Selection -->
                                        <span
                                            class="text-[#6A6565] pr-3 text-right text-[15px] lg:text-[17px] font-normal uppercase leading-normal my-5">
                                            الإستشاري
                                        </span>
                                        <select name="advisor_id"
                                            class="mt-1 mb-5 h-[54px] flex-shrink-0 rounded-[19px] border border-[#F5F5F5] bg-white shadow-[0px_12px_8.5px_0px_rgba(0,0,0,0.03)] w-full">
                                            @foreach ($advisors as $advisor)
                                                <option value="{{ $advisor->id }}">{{ $advisor->name }}</option>
                                            @endforeach
                                        </select>
                                        <span
                                            class="block text-[#6A6565] text-right text-[15px] lg:text-[17px] pr-3 font-normal uppercase leading-normal "
                                            for="name">
                                            <div class="relative w-full ">
                                                <div class="relative   w-full lg:max-w-sm ">
                                                    <span for="password"
                                                        class="block mb-[10px]  text-[15px]  font-medium text-[#2A2A2A] text-right">
                                                        إسم المستخدم
                                                    </span>

                                                    <div
                                                        class="absolute  top-11 right-2 flex items-center pr-3 pointer-events-none">
                                                        <svg xmlns="http://www.w3.org/2000/svg" class=" w-[20px] h-[20px] "
                                                            viewBox="0 0 26 26" fill="none">
                                                            <path
                                                                d="M13.2054 14.9146C14.5838 14.9146 15.9312 14.5058 17.0773 13.74C18.2233 12.9742 19.1166 11.8857 19.644 10.6123C20.1715 9.33878 20.3094 7.93749 20.0404 6.58561C19.7714 5.23373 19.1076 3.99198 18.1329 3.01738C17.1581 2.04279 15.9163 1.37914 14.5644 1.11035C13.2125 0.841564 11.8112 0.979716 10.5378 1.50734C9.26439 2.03496 8.17605 2.92835 7.41041 4.07452C6.64477 5.2207 6.23621 6.56818 6.23641 7.94657C6.23694 9.79461 6.97137 11.5668 8.27823 12.8735C9.58508 14.1801 11.3574 14.9143 13.2054 14.9146ZM19.3994 16.4636H16.7324C15.6262 16.9737 14.4226 17.2379 13.2044 17.2379C11.9862 17.2379 10.7826 16.9737 9.67641 16.4636H7.01041C5.36765 16.4636 3.79219 17.1161 2.63059 18.2777C1.46899 19.4393 0.816406 21.0148 0.816406 22.6576L0.816406 23.4316C0.816406 24.0477 1.06115 24.6385 1.4968 25.0742C1.93244 25.5098 2.52331 25.7546 3.13941 25.7546H23.2704C23.8865 25.7546 24.4774 25.5098 24.913 25.0742C25.3487 24.6385 25.5934 24.0477 25.5934 23.4316V22.6576C25.5934 21.8442 25.4332 21.0387 25.1219 20.2872C24.8106 19.5357 24.3544 18.8529 23.7792 18.2777C23.2041 17.7026 22.5212 17.2463 21.7697 16.9351C21.0183 16.6238 20.2128 16.4636 19.3994 16.4636Z"
                                                                fill="#D6D3D3" />
                                                        </svg>
                                                        </svg>
                                                    </div>

                                                    <input type="text" name="user_name" value="{{ auth()->user()->username }}"
                                                        class="bg-white border pr-14 border-[#2A2A2A] rounded-[27px] w-full h-[46px] text-[#2A2A2A] text-right font-Questv1 sm:placeholder:text-[17px] placeholder:text-[15px] sm:text-[18px] text-[15px] placeholder:opacity-50"
                                                        placeholder="Rose Clark" required />


                                                </div>

                                            </div>

                                            <div class="relative w-full my-8">
                                                <div class="relative   w-full lg:max-w-sm ">
                                                    <span for="password"
                                                        class="block mb-[10px] text-[15px]  font-medium text-[#2A2A2A] text-right">
                                                        البريد الإلكتروني
                                                    </span>

                                                    <div
                                                        class="absolute  top-11 right-2 flex items-center pr-3 pointer-events-none">
                                                        <svg xmlns="http://www.w3.org/2000/svg" class=" w-[20px] h-[20px] "
                                                            viewBox="0 0 28 21" fill="none">
                                                            <path
                                                                d="M0.529297 18.961V2.34795C0.529297 2.32862 0.55563 2.14595 0.608297 1.79996L9.5483 10.164L0.634297 19.538C0.578048 19.3501 0.542833 19.1566 0.529297 18.961ZM1.7163 0.646955C1.85746 0.585492 2.01039 0.555791 2.1643 0.559955H26.2423C26.4045 0.560769 26.5653 0.590222 26.7173 0.646955L17.7503 9.03996L16.5633 10.078L14.2163 12.183L11.8693 10.078L10.6823 9.03996L1.7163 0.646955ZM1.7423 20.664L10.7353 11.233L14.2163 14.319L17.6973 11.232L26.6903 20.663C26.5481 20.7211 26.3959 20.7506 26.2423 20.75H2.1643C2.01927 20.7491 1.87585 20.7195 1.7423 20.663V20.664ZM18.8843 10.164L27.7983 1.79996C27.8517 1.97769 27.8783 2.16238 27.8773 2.34795V18.961C27.8745 19.1558 27.848 19.3495 27.7983 19.538L18.8843 10.164Z"
                                                                fill="#D6D3D3" />
                                                        </svg>
                                                    </div>

                                                    <input type="text" name="user_email" value="{{ auth()->user()->email }}"
                                                        class="bg-white border pr-14 border-[#2A2A2A] rounded-[27px] w-full h-[46px] text-[#2A2A2A] text-right font-Questv1 sm:placeholder:text-[17px] placeholder:text-[15px] sm:text-[18px] text-[15px] placeholder:opacity-50"
                                                        placeholder="rose.clark@mail.com" required />


                                                </div>
                                            </div>


                                            <div class="relative w-full mt-5">
                                                <div class="relative   w-full lg:max-w-sm ">
                                                    <span for="password"
                                                        class="block mb-[10px] text-[15px]  font-medium text-[#2A2A2A] text-right">
                                                        *رقم المحمول
                                                    </span>

                                                    <div
                                                        class="absolute  top-11 right-2 flex items-center pr-3 pointer-events-none mt-px">
                                                        <svg class=" w-[20px] h-[20px] " viewBox="0 0 23 22" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M1.19316 15.3399L5.92316 13.3129C6.12513 13.2269 6.34954 13.2088 6.56268 13.2613C6.77583 13.3138 6.96618 13.434 7.10516 13.6039L9.20016 16.1609C12.4871 14.6117 15.1327 11.9672 16.6832 8.68088L14.1232 6.58588C13.9529 6.4472 13.8323 6.25684 13.7798 6.04358C13.7273 5.83032 13.7457 5.60577 13.8322 5.40388L15.8592 0.673877C15.9541 0.456174 16.122 0.278416 16.3339 0.171257C16.5459 0.0640976 16.7886 0.0342557 17.0202 0.0868773L21.4122 1.10088C21.6354 1.15263 21.8345 1.27847 21.9771 1.45789C22.1196 1.63731 22.1972 1.85972 22.1972 2.08888C22.1981 4.66304 21.6917 7.21216 20.7071 9.59056C19.7224 11.969 18.2787 14.13 16.4585 15.9502C14.6383 17.7704 12.4772 19.2141 10.0988 20.1988C7.72045 21.1835 5.17133 21.6898 2.59716 21.6889C2.368 21.6889 2.14559 21.6113 1.96617 21.4688C1.78675 21.3262 1.66091 21.1271 1.60916 20.9039L0.60116 16.5059C0.548805 16.273 0.579278 16.0292 0.687333 15.8163C0.795388 15.6035 0.974262 15.435 1.19316 15.3399Z"
                                                                fill="#D6D3D3" />
                                                        </svg>

                                                    </div>

                                                    <input type="text" name="user_phone"
                                                        class="bg-white border pr-14 border-[#2A2A2A] rounded-[27px] w-full h-[46px] text-[#2A2A2A] text-right font-Questv1 sm:placeholder:text-[17px] placeholder:text-[15px] sm:text-[18px] text-[15px] placeholder:opacity-50"
                                                        required />


                                                </div>
                                            </div>

                                    </div>


                                </div>
                            </div>

                            <!-- Submit Button -->
                            <div class="w-full flex item-end justify-end mt-8">
                                <button type="submit">
                                    <svg width="224" height="60" viewBox="0 0 224 60" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M194 0H30C13.4315 0 0 13.4315 0 30C0 46.5685 13.4315 60 30 60H194C210.569 60 224 46.5685 224 30C224 13.4315 210.569 0 194 0Z"
                                            fill="#E77E5C" />
                                        <path
                                            d="M107.189 34.8115V36.6709H107.046C106.627 36.6709 106.271 36.6094 105.979 36.4863C105.692 36.3587 105.446 36.2015 105.241 36.0146C105.036 35.8278 104.865 35.625 104.729 35.4062C104.592 35.1875 104.464 34.9847 104.346 34.7979C104.227 34.611 104.109 34.4561 103.99 34.333C103.876 34.2054 103.74 34.1416 103.58 34.1416C103.475 34.1416 103.391 34.1781 103.327 34.251C103.263 34.3193 103.231 34.4059 103.231 34.5107C103.231 34.6156 103.263 34.7158 103.327 34.8115C103.391 34.9027 103.466 35.0052 103.553 35.1191C103.776 35.4154 103.888 35.7367 103.888 36.083C103.888 36.4932 103.778 36.8441 103.56 37.1357C103.345 37.4274 103.061 37.6644 102.705 37.8467C102.354 38.0335 101.953 38.168 101.502 38.25C101.055 38.3366 100.597 38.3799 100.128 38.3799C99.4079 38.3799 98.8063 38.2773 98.3232 38.0723C97.8447 37.8717 97.4596 37.6029 97.168 37.2656C96.8809 36.9284 96.6758 36.541 96.5527 36.1035C96.4342 35.666 96.375 35.2126 96.375 34.7432C96.375 34.3695 96.4046 33.998 96.4639 33.6289C96.5231 33.2552 96.5983 32.8975 96.6895 32.5557H98.166C98.0658 32.9111 97.986 33.2438 97.9268 33.5537C97.8675 33.8636 97.8379 34.1917 97.8379 34.5381C97.8379 34.8206 97.8721 35.085 97.9404 35.3311C98.0133 35.5726 98.141 35.7845 98.3232 35.9668C98.5101 36.1445 98.7653 36.2858 99.0889 36.3906C99.4124 36.4909 99.8271 36.541 100.333 36.541C100.647 36.541 100.935 36.5319 101.194 36.5137C101.459 36.5 101.684 36.4704 101.871 36.4248C102.058 36.3747 102.204 36.3086 102.309 36.2266C102.413 36.14 102.466 36.0306 102.466 35.8984C102.466 35.7344 102.427 35.5885 102.35 35.4609C102.277 35.3333 102.195 35.2012 102.104 35.0645C101.917 34.7773 101.823 34.4674 101.823 34.1348C101.823 33.8978 101.867 33.6745 101.953 33.4648C102.044 33.2552 102.167 33.0729 102.322 32.918C102.482 32.763 102.671 32.64 102.89 32.5488C103.108 32.4577 103.348 32.4121 103.607 32.4121C103.876 32.4121 104.102 32.4463 104.284 32.5146C104.466 32.583 104.621 32.6742 104.749 32.7881C104.881 32.902 104.991 33.0319 105.077 33.1777C105.168 33.319 105.255 33.4648 105.337 33.6152C105.424 33.7611 105.512 33.9069 105.604 34.0527C105.699 34.194 105.815 34.3216 105.952 34.4355C106.093 34.5495 106.262 34.6406 106.458 34.709C106.654 34.7773 106.898 34.8115 107.189 34.8115ZM100.395 40.4785H98.7881V39.0361H100.395V40.4785ZM102.732 40.4785H101.126V39.0361H102.732V40.4785ZM108.023 36.6709H107.189C107.03 36.6709 106.911 36.5889 106.834 36.4248C106.752 36.2562 106.711 36.0283 106.711 35.7412C106.711 35.4541 106.752 35.2285 106.834 35.0645C106.911 34.8958 107.03 34.8115 107.189 34.8115H108.092C108.274 34.8115 108.436 34.8047 108.577 34.791C108.723 34.7773 108.844 34.7409 108.939 34.6816C109.04 34.6224 109.115 34.5335 109.165 34.415C109.215 34.292 109.24 34.1211 109.24 33.9023V26.1367H110.696V33.9502C110.696 34.5062 110.621 34.9619 110.471 35.3174C110.32 35.6683 110.12 35.944 109.869 36.1445C109.623 36.3451 109.338 36.4818 109.015 36.5547C108.696 36.6322 108.365 36.6709 108.023 36.6709ZM115.064 36.6709C114.6 36.6709 114.217 36.5957 113.916 36.4453C113.62 36.2949 113.383 36.0921 113.205 35.8369C113.032 35.5771 112.911 35.2764 112.843 34.9346C112.779 34.5882 112.747 34.2214 112.747 33.834V26.1367H114.203V33.4307C114.203 33.6859 114.215 33.9023 114.237 34.0801C114.26 34.2533 114.31 34.3945 114.388 34.5039C114.465 34.6133 114.581 34.693 114.736 34.7432C114.891 34.7887 115.103 34.8115 115.372 34.8115V36.6709H115.064ZM116.281 36.6709H115.379C115.219 36.6709 115.101 36.5889 115.023 36.4248C114.941 36.2562 114.9 36.0283 114.9 35.7412C114.9 35.4541 114.941 35.2285 115.023 35.0645C115.101 34.8958 115.219 34.8115 115.379 34.8115H116.35C116.546 34.8115 116.712 34.8047 116.849 34.791C116.985 34.7728 117.097 34.734 117.184 34.6748C117.27 34.6156 117.332 34.5267 117.368 34.4082C117.409 34.2852 117.43 34.1165 117.43 33.9023V30.6553H118.886V33.4307C118.886 33.6676 118.893 33.8727 118.906 34.0459C118.92 34.2191 118.963 34.3626 119.036 34.4766C119.114 34.5905 119.23 34.6748 119.385 34.7295C119.544 34.7842 119.768 34.8115 120.055 34.8115V36.6709H119.74C119.344 36.6709 119.004 36.6094 118.722 36.4863C118.439 36.3587 118.232 36.1582 118.1 35.8848H118.059C117.94 36.0443 117.808 36.1742 117.662 36.2744C117.516 36.3747 117.364 36.4544 117.204 36.5137C117.049 36.5729 116.892 36.6139 116.732 36.6367C116.573 36.6595 116.423 36.6709 116.281 36.6709ZM117.799 29.2812H116.192V27.8389H117.799V29.2812ZM120.137 29.2812H118.53V27.8389H120.137V29.2812ZM120.889 36.6709H120.055C119.895 36.6709 119.777 36.5889 119.699 36.4248C119.617 36.2562 119.576 36.0283 119.576 35.7412C119.576 35.4541 119.617 35.2285 119.699 35.0645C119.777 34.8958 119.895 34.8115 120.055 34.8115H120.957C121.139 34.8115 121.301 34.8047 121.442 34.791C121.588 34.7773 121.709 34.7409 121.805 34.6816C121.905 34.6224 121.98 34.5335 122.03 34.415C122.08 34.292 122.105 34.1211 122.105 33.9023V26.1367H123.562V33.9502C123.562 34.5062 123.486 34.9619 123.336 35.3174C123.186 35.6683 122.985 35.944 122.734 36.1445C122.488 36.3451 122.203 36.4818 121.88 36.5547C121.561 36.6322 121.23 36.6709 120.889 36.6709ZM125.612 36.5V26.1367H127.068V36.5H125.612Z"
                                            fill="white" />
                                    </svg>
    
                                </button>
                            </div>
                        </form>







                    </div>
                    <!-- Consultation Date Field -->

                    <!-- JavaScript: Calendar Initialization and Date Selection -->
                    <script>
                        document.addEventListener('DOMContentLoaded', () => {
                            console.log('JavaScript is running'); // Confirm JavaScript is running
                    
                            const calendar = new VanillaCalendar('#calendar', {
                                settings: {
                                    visibility: {
                                        theme: 'light',
                                    },
                                    lang: 'ar',
                                    iso8601: true,
                                },
                            });
                    
                            calendar.init(); // Initialize the calendar
                    
                            // Reference to the consultation date input
                            const consultationDateInput = document.getElementById('consultation_date');
                    
                            // Listen for clicks on the day buttons
                            document.querySelector('#calendar').addEventListener('click', (event) => {
                                const button = event.target.closest('.vanilla-calendar-day__btn');
                                if (button) {
                                    const dateAttr = button.getAttribute('data-calendar-day');
                                    console.log('Date selected:', dateAttr); // Log the selected date
                    
                                    // Check the format of the dateAttr
                                    if (dateAttr) {
                                        // Ensure date is in 'YYYY-MM-DD' format
                                        const selectedDate = new Date(dateAttr).toISOString().split('T')[0];
                                        console.log('Formatted date:', selectedDate); // Log the formatted date
                    
                                        // Update the input field with the selected date
                                        consultationDateInput.value = selectedDate;
                    
                                        // Update the display date element
                                        document.getElementById('display_date').innerText = selectedDate;
                                        console.log('Input value set to:', consultationDateInput.value); // Confirm the input value is set
                                    } else {
                                        console.error('No valid date attribute found.');
                                    }
                                }
                            });
                    
                            const header = document.querySelector('.vanilla-calendar-header');
                            if (header) { // تحقق من أن الرأس موجود
                                const customText = document.createElement('div');
                                customText.innerText = 'قم بتحديد موعد إستشارتك '; // النص المراد إضافته
                                customText.classList.add('custom-text'); // إضافة فئة لتنسيق النص
                                header.appendChild(customText); // إضافة النص إلى الرأس
                            } else {
                                console.error('Header not found'); // طباعة خطأ في وحدة التحكم إذا لم يتم العثور على الرأس
                            }
                        });
                    </script>
                    
                    

                </div>



            </section>
            <!-- END SEC1 -->

        </div>
    </main>
    <!--====================== END MAIN ======================-->
@endsection
