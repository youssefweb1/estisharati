@extends('layouts.app')
@section('content')
    <!--====================== MAIN ======================-->
    <main>
        <div class="max-w-[1400px] mx-auto px-5 sm:mt-20 mt-8">
            <!-- 1SEC -->
            <section>
                <div class="flex flex-col-reverse lg:flex-row items-center justify-between mt-10 lg:mt-0">
                    <div
                        class="right w-full lg:w-1/2 flex flex-col items-center justify-center lg:items-start  lg:justify-start gap-10">
                        <h1 class="text-[#E77E5C] text-center font-medium text-[30px] md:text-[50px] leading-normal">
                            أهلاً بك في إستشاراتي</h1>
                        <p
                            class="text-[#2A2A2A] text-center lg:text-right font-[400] text-[15px] md:text-[20px] leading-[202%]">
                            مرحباً بكم في استشاراتي للصحة النفسية والأسرة! هنا، نؤمن بأن كل إنسان يستحق أن يعيش حياة
                            مليئة بالسعادة والتوازن. سواء كنت فرداً يبحث عن دعم نفسي أو زوجين يسعيان لتحسين علاقتهما،
                            نحن هنا لمساعدتك على استكشاف التحديات وبناء أسس قوية للصحة النفسية والعلاقات المستدامة. نقدم
                            بيئة آمنة وداعمة، حيث يمكنك التعبير عن مشاعرك وأفكارك بحرية. دعنا نساعدك على تحقيق التغيير
                            الإيجابي الذي تسعى إليه. انضم إلينا في رحلة نحو الرفاهية النفسية والعائلية!
                        </p>

                        <div class="flex flex-col w-full lg:flex-row items-center gap-5">
                            <button
                                class="w-full lg:w-[270px] h-[70px] text-[18px] text-white flex-shrink-0 rounded-[40px] bg-[#E77E5C]">
                                تصفح الدورات
                            </button>

                            <button
                                class="w-full lg:w-[300px] h-[70px] flex-shrink-0 rounded-[40px] border-2 border-[#E77E5C] text-[#E77E5C] text-[18px]">
                                إحجز موعد إستشارتك الآن
                            </button>
                        </div>
                    </div>

                    <div
                        class="left w-full lg:w-1/2 flex flex-col items-center lg:items-end items-justify lg:justify-end px-5 lg:px-0 mb-8 lg:mb-0">
                        <img src="assets/images/landaing.svg" alt=""
                            class="w-[350px] md:w-[450px] lg:w-[450px] lg:h-[450px] rounded-full">
                    </div>
            </section>
            <!-- END 1SEC -->

            <!-- SEC2 -->
            <section>

                <!-- titles -->

                <div class="flex flex-col gap-5 items-center justify-center mt-32 sm:mb-28 mb-16  my-10">
                    <span
                        class="text-[#2A2A2A] text-center sm:text-[30px] text-[22px] font-medium relative after:content-[''] after:absolute after:w-full after:h-[2px] after:bg-[#E77E5C] after:bottom-[-10px] after:left-0">
                        فريق من أفضل الإستشاريين في الوطن العربي
                    </span>


                    <div dir="ltr" id="default-carousel" class="relative w-full" data-carousel="static">
                        <!-- Carousel wrapper -->
                        <div class="relative h-[700px] overflow-hidden rounded-lg md:h-[550px]">
                            <!-- Item 1 -->
                            <div class="hidden duration-500" data-carousel-item>
                                <div
                                    class="w-full h-[700px] lg:h-[421px] mt-32 flex-shrink-0 rounded-[20px] bg-white shadow-[0px_16px_32.5px_rgba(0,0,0,0.10)] relative">
                                    <div
                                        class="team-img absolute top-[-55px] lg:top-[-100px] left-1/2 transform -translate-x-1/2">
                                        <img src="assets/images/team.png" alt=""
                                            class="h-[90px] lg:h-[140px] max-h-[140px]">
                                    </div>
                                    <div class="flex flex-col items-center justify-center">
                                        <span
                                            class="text-[#E77E5C] font-medium text-[20px] lg:text-[28px] leading-normal font-[500] mt-[50px]">
                                            أ.علياء الطنيجي
                                        </span>
                                        <span
                                            class="text-[#2A2A2A] text-center font-medium text-[18px] lg:text-[20px] leading-normal font-[500]">
                                            المؤسسة ومديرة مجلس الإدارة
                                        </span>
                                    </div>
                                    <div class="w-full px-10 lg:px-[230px] flex item-center justify-center mt-10">
                                        <p class="text-[#2A2A2A] text-center font-[400] text-[14px] lg:text-[20px]">
                                            علياء الطنيجي هي امرأة أعمال حاصلة على الماجستير في هندسة العلوم، ومستثمرة
                                            ومؤسسة لعدة شركات ناشئة، منها منصة "إستشاراتي". تطمح علياء لنشر التوعية في
                                            مجالات الصحة النفسية والعلاقات الاجتماعية والزوجية والعاطفية، ولهذا أسست
                                            منصة "إستشاراتي"، وهي منصة متخصصة في تقديم خدمات الاستشارات عن طريق الأون
                                            لاين على مستوى الوطن العربي والعالمي. تعمل منصة "إستشاراتي" على تسهيل عملية
                                            التواصل بين الاستشاري النفسي والأسري المتخصص وبين طالب الخدمة من عامة الناس،
                                            وذلك من خلال الحرص على الحفاظ على معلومات العميل سرية دون الحاجة للإفصاح عن
                                            المعلومات الشخصية، مما يوفر بيئة آمنة ومريحة للتعامل
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- Item 2 -->
                            <div class="hidden duration-500" data-carousel-item>
                                <div
                                    class="w-full h-[700px] lg:h-[421px] mt-32 flex-shrink-0 rounded-[20px] bg-white shadow-[0px_16px_32.5px_rgba(0,0,0,0.10)] relative">
                                    <div
                                        class="team-img absolute top-[-55px] lg:top-[-100px] left-1/2 transform -translate-x-1/2">
                                        <img src="assets/images/team.png" alt=""
                                            class="h-[90px] lg:h-[140px] max-h-[140px]">
                                    </div>
                                    <div class="flex flex-col items-center justify-center">
                                        <span
                                            class="text-[#E77E5C] font-medium text-[20px] lg:text-[28px] leading-normal font-[500] mt-[50px]">
                                            أ.محمد الشامسي
                                        </span>
                                        <span
                                            class="text-[#2A2A2A] text-center font-medium text-[18px] lg:text-[20px] leading-normal font-[500]">
                                            خبير استشاري في الموارد البشرية
                                        </span>
                                    </div>
                                    <div class="w-full px-10 lg:px-[230px] flex item-center justify-center mt-10">
                                        <p class="text-[#2A2A2A] text-center font-[400] text-[14px] lg:text-[20px]">
                                            محمد الشامسي هو خبير استشاري يتمتع بخبرة تفوق 10 سنوات في مجال الموارد
                                            البشرية، حيث ساهم في تطوير استراتيجيات فعالة لتحسين الأداء التنظيمي. يعمل
                                            محمد على توفير الدعم والإرشاد للمديرين والموظفين لتحقيق الأهداف المرجوة،
                                            ويطمح إلى تعزيز بيئات العمل الإيجابية والمحفزة من خلال تقديم حلول مبتكرة.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <!-- Item 3 -->
                            <div class="hidden duration-500" data-carousel-item>
                                <div
                                    class="w-full h-[700px] lg:h-[421px] mt-32 flex-shrink-0 rounded-[20px] bg-white shadow-[0px_16px_32.5px_rgba(0,0,0,0.10)] relative">
                                    <div
                                        class="team-img absolute top-[-55px] lg:top-[-100px] left-1/2 transform -translate-x-1/2">
                                        <img src="assets/images/team.png" alt=""
                                            class="h-[90px] lg:h-[140px] max-h-[140px]">
                                    </div>
                                    <div class="flex flex-col items-center justify-center">
                                        <span
                                            class="text-[#E77E5C] font-medium text-[20px] lg:text-[28px] leading-normal font-[500] mt-[50px]">
                                            أ.سارة النعيمي
                                        </span>
                                        <span
                                            class="text-[#2A2A2A] text-center font-medium text-[18px] lg:text-[20px] leading-normal font-[500]">
                                            خبيرة في التسويق الرقمي
                                        </span>
                                    </div>
                                    <div class="w-full px-10 lg:px-[230px] flex item-center justify-center mt-10">
                                        <p class="text-[#2A2A2A] text-center font-[400] text-[14px] lg:text-[20px]">
                                            سارة النعيمي هي خبيرة تسويق رقمي معروفة، تملك خبرة واسعة في تطوير حملات
                                            تسويقية ناجحة على منصات التواصل الاجتماعي. تسعى سارة لتعليم الشركات كيفية
                                            استخدام الأدوات الرقمية بشكل فعال لزيادة الوعي بالعلامة التجارية وتعزيز
                                            المبيعات. تقدم سارة ورش عمل ودورات تدريبية تساعد الأفراد والشركات على تحقيق
                                            أقصى استفادة من استراتيجيات التسويق الرقمي.
                                        </p>
                                    </div>
                                </div>
                            </div>



                        </div>

                        <!-- Slider indicators -->
                        <div
                            class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
                            <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1"
                                data-carousel-slide-to="0"></button>
                            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2"
                                data-carousel-slide-to="1"></button>
                        </div>

                        <!-- Slider controls -->
                        <button type="button"
                            class="absolute  top-[60px] start-3 lg:start-10 z-30 flex items-center justify-center h-full lg:px-4  cursor-pointer group focus:outline-none"
                            data-carousel-prev>
                            <span class="inline-flex items-center justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-[20] h-[20px] lg:w-[17px] lg:h-[29px] "
                                    viewBox="0 0 17 29" fill="none">
                                    <path
                                        d="M4.91216 14.4454L15.6988 3.66722C16.4966 2.86947 16.4966 1.57948 15.6988 0.790208C14.9011 -0.00754897 13.6111 0.000937432 12.8133 0.790208L0.592399 13.0027C-0.179895 13.775 -0.196869 15.014 0.532992 15.8118L12.8048 28.1091C13.2037 28.508 13.7299 28.7032 14.2476 28.7032C14.7653 28.7032 15.2915 28.508 15.6903 28.1091C16.4881 27.3114 16.4881 26.0214 15.6903 25.2321L4.91216 14.4454Z"
                                        fill="#E77E5C" />
                                </svg>
                            </span>
                        </button>
                        <button type="button"
                            class="absolute  top-[60px] end-3 lg:end-10 z-30 flex items-center justify-center h-full lg:px-4  cursor-pointer group focus:outline-none"
                            data-carousel-next>
                            <span class="inline-flex items-center justify-center ">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-[20] h-[20px] lg:w-[17px] lg:h-[29px]"
                                    viewBox="0 0 17 30" fill="none">
                                    <path
                                        d="M12.0869 15.0489L1.30022 4.27074C0.502465 3.47298 0.502465 2.18299 1.30022 1.39372C2.09798 0.595967 3.38796 0.604453 4.18572 1.39372L16.4066 13.6062C17.1789 14.3785 17.1959 15.6176 16.466 16.4153L4.1942 28.7126C3.79532 29.1115 3.26915 29.3067 2.75145 29.3067C2.23376 29.3067 1.70759 29.1115 1.30871 28.7126C0.510951 27.9149 0.510951 26.6249 1.30871 25.8356L12.0869 15.0489Z"
                                        fill="#2A2A2A" />
                                </svg>
                            </span>
                        </button>
                    </div>

                </div>









            </section>
            <!-- END SEC2 -->

            <!-- SEC3 -->
            <section>

                <div class="search-div items-center w-full justify-between mt-20">
                    <span
                        class="text-[#2A2A2A] text-right sm:text-[30px] text-[22px] sm:mb-0 mb-5 font-medium relative after:content-[''] after:absolute after:w-full after:h-[2px] after:bg-[#E77E5C] after:bottom-[-10px] after:left-0">
                        الدورات الأكثر مبيعا
                    </span>

                    <span
                        class="text-[#2A2A2A] text-[18px] mt-10 font-medium flex items-center justify-end space-x-2 rtl:space-x-reverse cursor-pointer">
                        تصفح جميع الدورات
                        <svg class="mr-3" width="11" height="14" viewBox="0 0 11 18" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M3.73227 8.89224L10.4628 2.167C10.9606 1.66922 10.9606 0.864313 10.4628 0.371835C9.96503 -0.125938 9.16012 -0.120643 8.66234 0.371835L1.03687 7.99201C0.554986 8.4739 0.544396 9.24704 0.999805 9.74481L8.65705 17.4179C8.90594 17.6668 9.23426 17.7886 9.55728 17.7886C9.8803 17.7886 10.2086 17.6668 10.4575 17.4179C10.9553 16.9202 10.9553 16.1153 10.4575 15.6228L3.73227 8.89224Z"
                                fill="#2A2A2A" />
                        </svg>
                    </span>

                </div>

                <!-- courses -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-5 mt-6">
                    <!-- Course Card 1 -->
                    <div class="shadow-[0px_17px_32.5px_rgba(0,0,0,0.1)] rounded-[10px] bg-[#f5f5f5] h-[450px]">
                        <div
                            class="flex items-center justify-center relative shadow-[0px_17px_32.5px_rgba(0,0,0,0.16)] rounded-[10px_10px_0px_0px] bg-[#E77E5C] h-[200px]">

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
                    <div class="shadow-[0px_17px_32.5px_rgba(0,0,0,0.1)] rounded-[10px] bg-[#f5f5f5] h-[450px]">
                        <div
                            class="flex items-center justify-center relative shadow-[0px_17px_32.5px_rgba(0,0,0,0.16)] rounded-[10px_10px_0px_0px] bg-[#E77E5C] h-[200px]">

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
                    <div class="shadow-[0px_17px_32.5px_rgba(0,0,0,0.1)] rounded-[10px] bg-[#f5f5f5] h-[450px]">
                        <div
                            class="flex items-center justify-center relative shadow-[0px_17px_32.5px_rgba(0,0,0,0.16)] rounded-[10px_10px_0px_0px] bg-[#E77E5C] h-[200px]">

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
                    <div class="shadow-[0px_17px_32.5px_rgba(0,0,0,0.1)] rounded-[10px] bg-[#f5f5f5] h-[450px]">
                        <div
                            class="flex items-center justify-center relative shadow-[0px_17px_32.5px_rgba(0,0,0,0.16)] rounded-[10px_10px_0px_0px] bg-[#E77E5C] h-[200px]">

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

            <!-- SEC4-->
            <section>

                <!-- titles -->

                <div class="flex flex-col gap-5 items-center justify-center mt-32 sm:mb-28 mb-16  my-10">
                    <span
                        class="text-[#2A2A2A] text-center sm:text-[30px] text-[22px] font-medium relative after:content-[''] after:absolute after:w-full after:h-[2px] after:bg-[#E77E5C] after:bottom-[-10px] after:left-0">
                        آراء العملاء
                    </span>


                    <div dir="ltr" id="default-carousel" class="relative w-full" data-carousel="static">
                        <!-- Carousel wrapper -->
                        <div class="relative h-[500px] overflow-hidden rounded-lg md:h-[500px]">
                            <!-- Item 1 -->
                            <div class="hidden duration-500" data-carousel-item>
                                <div
                                    class="w-full h-[500px] lg:h-[421px] mt-32 flex-shrink-0 rounded-[20px] bg-white shadow-[0px_16px_32.5px_rgba(0,0,0,0.10)] relative">
                                    <div
                                        class="team-img absolute top-[-55px] lg:top-[-100px] left-1/2 transform -translate-x-1/2">
                                        <img src="assets/images/client.png" alt=""
                                            class="h-[100px] lg:h-[140px] max-h-[140px]">
                                    </div>
                                    <div class="flex flex-col items-center justify-center">
                                        <span
                                            class="text-[#E77E5C] font-medium text-[20px] lg:text-[28px] leading-normal font-[500] mt-[50px]">
                                            حسناء - طالبة
                                        </span>

                                    </div>
                                    <div class="w-full px-10 lg:px-[230px] flex item-center justify-center mt-10">
                                        <p class="text-[#2A2A2A] text-center font-[400] text-[14px] lg:text-[20px]">
                                            ما أعجبني أكثر هو سهولة الاستخدام، سواء في حجز المواعيد أو التواصل مع
                                            الأخصائيين. كنت أبحث عن منصة تقدم خدمات استشارية بطريقة سلسة، ووجدت في
                                            "استشاراتي" المكان المثالي. شعرت براحة وخصوصية كبيرة، مما جعلني أشعر بالثقة
                                            أثناء التحدث عن مشاكلي.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- Item 2 -->
                            <div class="hidden duration-500" data-carousel-item>
                                <div
                                    class="w-full h-[500px] lg:h-[421px] mt-32 flex-shrink-0 rounded-[20px] bg-white shadow-[0px_16px_32.5px_rgba(0,0,0,0.10)] relative">
                                    <div
                                        class="team-img absolute top-[-55px] lg:top-[-100px] left-1/2 transform -translate-x-1/2">
                                        <img src="assets/images/client.png" alt=""
                                            class="h-[100px] lg:h-[140px] max-h-[140px]">
                                    </div>
                                    <div class="flex flex-col items-center justify-center">
                                        <span
                                            class="text-[#E77E5C] font-medium text-[20px] lg:text-[28px] leading-normal font-[500] mt-[50px]">
                                            أ.محمد الشامسي
                                        </span>

                                    </div>
                                    <div class="w-full px-10 lg:px-[230px] flex item-center justify-center mt-10">
                                        <p class="text-[#2A2A2A] text-center font-[400] text-[14px] lg:text-[20px]">
                                            محمد الشامسي هو خبير استشاري يتمتع بخبرة تفوق 10 سنوات في مجال الموارد
                                            البشرية، حيث ساهم في تطوير استراتيجيات فعالة لتحسين الأداء التنظيمي. يعمل
                                            محمد على توفير الدعم والإرشاد للمديرين والموظفين لتحقيق الأهداف المرجوة،
                                            ويطمح إلى تعزيز بيئات العمل الإيجابية والمحفزة من خلال تقديم حلول مبتكرة.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <!-- Item 3 -->
                            <div class="hidden duration-500" data-carousel-item>
                                <div
                                    class="w-full h-[500px] lg:h-[421px] mt-32 flex-shrink-0 rounded-[20px] bg-white shadow-[0px_16px_32.5px_rgba(0,0,0,0.10)] relative">
                                    <div
                                        class="team-img absolute top-[-55px] lg:top-[-100px] left-1/2 transform -translate-x-1/2">
                                        <img src="assets/images/client.png" alt=""
                                            class="h-[100px] lg:h-[140px] max-h-[140px]">
                                    </div>
                                    <div class="flex flex-col items-center justify-center">
                                        <span
                                            class="text-[#E77E5C] font-medium text-[20px] lg:text-[28px] leading-normal font-[500] mt-[50px]">
                                            أ.سارة النعيمي
                                        </span>

                                    </div>
                                    <div class="w-full px-10 lg:px-[230px] flex item-center justify-center mt-10">
                                        <p class="text-[#2A2A2A] text-center font-[400] text-[14px] lg:text-[20px]">
                                            سارة النعيمي هي خبيرة تسويق رقمي معروفة، تملك خبرة واسعة في تطوير حملات
                                            تسويقية ناجحة على منصات التواصل الاجتماعي. تسعى سارة لتعليم الشركات كيفية
                                            استخدام الأدوات الرقمية بشكل فعال لزيادة الوعي بالعلامة التجارية وتعزيز
                                            المبيعات. تقدم سارة ورش عمل ودورات تدريبية تساعد الأفراد والشركات على تحقيق
                                            أقصى استفادة من استراتيجيات التسويق الرقمي.
                                        </p>
                                    </div>
                                </div>
                            </div>



                        </div>

                        <!-- Slider indicators -->
                        <div
                            class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
                            <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1"
                                data-carousel-slide-to="0"></button>
                            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2"
                                data-carousel-slide-to="1"></button>
                        </div>

                        <!-- Slider controls -->
                        <button type="button"
                            class="absolute  top-[60px] start-3 lg:start-10 z-30 flex items-center justify-center h-full lg:px-4  cursor-pointer group focus:outline-none"
                            data-carousel-prev>
                            <span class="inline-flex items-center justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-[20] h-[20px] lg:w-[17px] lg:h-[29px] "
                                    viewBox="0 0 17 29" fill="none">
                                    <path
                                        d="M4.91216 14.4454L15.6988 3.66722C16.4966 2.86947 16.4966 1.57948 15.6988 0.790208C14.9011 -0.00754897 13.6111 0.000937432 12.8133 0.790208L0.592399 13.0027C-0.179895 13.775 -0.196869 15.014 0.532992 15.8118L12.8048 28.1091C13.2037 28.508 13.7299 28.7032 14.2476 28.7032C14.7653 28.7032 15.2915 28.508 15.6903 28.1091C16.4881 27.3114 16.4881 26.0214 15.6903 25.2321L4.91216 14.4454Z"
                                        fill="#E77E5C" />
                                </svg>
                            </span>
                        </button>
                        <button type="button"
                            class="absolute  top-[60px] end-3 lg:end-10 z-30 flex items-center justify-center h-full lg:px-4  cursor-pointer group focus:outline-none"
                            data-carousel-next>
                            <span class="inline-flex items-center justify-center ">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-[20] h-[20px] lg:w-[17px] lg:h-[29px]"
                                    viewBox="0 0 17 30" fill="none">
                                    <path
                                        d="M12.0869 15.0489L1.30022 4.27074C0.502465 3.47298 0.502465 2.18299 1.30022 1.39372C2.09798 0.595967 3.38796 0.604453 4.18572 1.39372L16.4066 13.6062C17.1789 14.3785 17.1959 15.6176 16.466 16.4153L4.1942 28.7126C3.79532 29.1115 3.26915 29.3067 2.75145 29.3067C2.23376 29.3067 1.70759 29.1115 1.30871 28.7126C0.510951 27.9149 0.510951 26.6249 1.30871 25.8356L12.0869 15.0489Z"
                                        fill="#2A2A2A" />
                                </svg>
                            </span>
                        </button>
                    </div>

                </div>









            </section>
            <!-- END SEC4 -->

            <!-- SEC3 -->
            <section>
                <div class="search-div items-center w-full justify-between mt-20">
                    <span
                        class="text-[#2A2A2A] text-right sm:text-[30px] text-[22px] sm:mb-0 mb-5 font-medium relative after:content-[''] after:absolute after:w-full after:h-[2px] after:bg-[#E77E5C] after:bottom-[-10px] after:left-0">
                        الباقات الشهرية
                    </span>

                    <span
                        class="text-[#2A2A2A] text-[18px] mt-10 font-medium flex items-center justify-end space-x-2 rtl:space-x-reverse cursor-pointer">
                        تصفح جميع الباقات
                        <svg class="mr-3" width="11" height="14" viewBox="0 0 11 18" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M3.73227 8.89224L10.4628 2.167C10.9606 1.66922 10.9606 0.864313 10.4628 0.371835C9.96503 -0.125938 9.16012 -0.120643 8.66234 0.371835L1.03687 7.99201C0.554986 8.4739 0.544396 9.24704 0.999805 9.74481L8.65705 17.4179C8.90594 17.6668 9.23426 17.7886 9.55728 17.7886C9.8803 17.7886 10.2086 17.6668 10.4575 17.4179C10.9553 16.9202 10.9553 16.1153 10.4575 15.6228L3.73227 8.89224Z"
                                fill="#2A2A2A" />
                        </svg>
                    </span>

                </div>

                <!-- courses -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-5 mt-6">
                    <!-- Course Card 1 -->
                    <div class="shadow-[0px_17px_32.5px_rgba(0,0,0,0.1)] rounded-[10px] bg-[#f5f5f5] h-[450px]">
                        <div
                            class="flex items-center justify-center relative  rounded-[10px_10px_0px_0px] bg-[#E77E5C] h-[200px]">

                        </div>
                        <div class="flex flex-col items-start px-5 py-5">
                            <span class="text-[20px] font-[500] text-[#e77e5c] text-right"> التعلق المرضي </span>
                            <span class="text-[16px] text-[#2a2a2a] text-right pt-2"></span>

                            هو نوع من العلاقات غير الصحية حيث يعتمد الشخص بشكل مفرط على الآخر لتلبية احتياجاته
                            العاطفية. يتميز بالخوف من ...
                            </span>


                            <!-- Subscription Button -->
                            <button data-modal-target="extralarge-modal" data-modal-toggle="extralarge-modal"
                                class="w-[175px] h-[55px] flex-shrink-0 rounded-[28px] border-2 border-[#E77E5C] text-[#E77E5C] text-center font-medium mx-auto mt-10 mb-4">
                                إقرأ المزيد
                            </button>
                            <!-- End of Subscription Button -->


                        </div>
                    </div>
                    <!-- End of Course Card 1 -->

                    <!-- Course Card 2 -->
                    <div class="shadow-[0px_17px_32.5px_rgba(0,0,0,0.1)] rounded-[10px] bg-[#f5f5f5] h-[450px]">
                        <div
                            class="flex items-center justify-center relative  rounded-[10px_10px_0px_0px] bg-[#E77E5C] h-[200px]">

                        </div>
                        <div class="flex flex-col items-start px-5 py-5">
                            <span class="text-[20px] font-[500] text-[#e77e5c] text-right"> التعافي من إدمان الأفلام
                                الاباحية </span>
                            <span class="text-[16px] text-[#2a2a2a] text-right pt-2">

                                التعافي من إدمان الأفلام الإباحية يتضمن الاعتراف بالمشكلة وتحديد المحفزات، واستبدال
                                العادات السلبية بأنشطة صحية...
                            </span>
                            <!-- Subscription Button -->
                            <button data-modal-target="extralarge-modal" data-modal-toggle="extralarge-modal"
                                class="w-[175px] h-[55px] flex-shrink-0 rounded-[28px] border-2 border-[#E77E5C] text-[#E77E5C] text-center font-medium mx-auto mt-10">
                                إقرأ المزيد
                            </button>
                            <!-- End of Subscription Button -->

                        </div>
                    </div>

                    <!-- End of Course Card 2 -->

                    <!-- Course Card 3 -->
                    <div class="shadow-[0px_17px_32.5px_rgba(0,0,0,0.1)] rounded-[10px] bg-[#f5f5f5] h-[450px]">
                        <div
                            class="flex items-center justify-center relative  rounded-[10px_10px_0px_0px] bg-[#E77E5C] h-[200px]">

                        </div>
                        <div class="flex flex-col items-start px-5 py-5">
                            <span class="text-[20px] font-[500] text-[#e77e5c] text-right"> التعديل الذكي للسلوك </span>
                            <span class="text-[16px] text-[#2a2a2a] text-right pt-2">

                                التعديل الذكي للسلوك هو عملية تغيير سلوكيات معينة باستخدام استراتيجيات مدروسة. يشمل
                                تحديد الأهداف، التعزيز ..

                            </span>
                            <!-- Subscription Button -->
                            <button data-modal-target="extralarge-modal" data-modal-toggle="extralarge-modal"
                                class="w-[175px] h-[55px] flex-shrink-0 rounded-[28px] border-2 border-[#E77E5C] text-[#E77E5C] text-center font-medium mx-auto mt-10">
                                إقرأ المزيد
                            </button>
                            <!-- End of Subscription Button -->

                        </div>
                    </div>
                    <!-- End of Course Card 3 -->

                    <!-- Course Card 4 -->
                    <div class="shadow-[0px_17px_32.5px_rgba(0,0,0,0.1)] rounded-[10px] bg-[#f5f5f5] h-[450px]">
                        <div
                            class="flex items-center justify-center relative  rounded-[10px_10px_0px_0px] bg-[#E77E5C] h-[200px]">

                        </div>
                        <div class="flex flex-col items-start px-5 py-5">
                            <span class="text-[20px] font-[500] text-[#e77e5c] text-right"> التعافي بعد الانفصال </span>
                            <span class="text-[16px] text-[#2a2a2a] text-right pt-2">

                                التعافي بعد الانفصال يتطلب وقتًا وجهدًا. يشمل قبول المشاعر السلبية، البحث عن الدعم من
                                الأصدقاء أو المختصين، تحديد ...
                            </span>
                            <!-- Subscription Button -->
                            <button data-modal-target="extralarge-modal" data-modal-toggle="extralarge-modal"
                                class="w-[175px] h-[55px] flex-shrink-0 rounded-[28px] border-2 border-[#E77E5C] text-[#E77E5C] text-center font-medium mx-auto mt-10">
                                إقرأ المزيد
                            </button>
                            <!-- End of Subscription Button -->

                        </div>
                    </div>
                    <!-- End of Course Card 4 -->
                </div>



            </section>
            <!-- END SEC2 -->
        </div>

        <section>
            <div class="flex items-center justify-center bg-[#efc2ad80] min-h-[700px] mt-32">
                <div class="max-w-[1400px] flex flex-col lg:flex-row item-center justify-center gap-20">
                    <div
                        class="right pt-10 flex flex-col items-center lg:items-start justify-center lg:justify-start gap-5">
                        <h1
                            class="text-[#E77E5C] text-right font-medium text-[25px] lg:text-[30px] md:text-[55px] leading-normal">
                            تطبيق استشاراتي
                        </h1>
                        <span
                            class="text-[#2A2A2A] text-center lg:text-right  text-[20px] lg:text-[29px] lg:w-[500px] font-normal">
                            قم بتحميل التطبيق وأحصل على المساعدة التي تحتاجها أينما كنت.
                        </span>

                        <div class="flex flex-col md:flex-row items-center gap-3">

                            <svg xmlns="http://www.w3.org/2000/svg" width="189" height="60" viewBox="0 0 189 60"
                                fill="none">
                                <mask id="mask0_277_7848" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="0"
                                    y="0" width="189" height="60">
                                    <path d="M0.772461 0.698761H188.545V59.878H0.772461V0.698761Z" fill="white" />
                                </mask>
                                <g mask="url(#mask0_277_7848)">
                                    <mask id="mask1_277_7848" style="mask-type:luminance" maskUnits="userSpaceOnUse"
                                        x="0" y="0" width="189" height="60">
                                        <path
                                            d="M177.13 59.878H12.1726C5.89601 59.878 0.772217 54.864 0.772217 48.7218V11.8549C0.772217 5.71277 5.89601 0.698761 12.1726 0.698761H177.13C183.407 0.698761 188.531 5.71277 188.531 11.8549V48.7218C188.531 54.864 183.407 59.878 177.13 59.878Z"
                                            fill="white" />
                                    </mask>
                                    <g mask="url(#mask1_277_7848)">
                                        <path d="M0.772217 0.698761H188.545V59.878H0.772217V0.698761Z" fill="#2D2B2B" />
                                    </g>
                                </g>
                                <mask id="mask2_277_7848" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="19"
                                    y="12" width="21" height="36">
                                    <path d="M19.4033 12.8602H39.2865V47.6936H19.4033V12.8602Z" fill="white" />
                                </mask>
                                <g mask="url(#mask2_277_7848)">
                                    <path
                                        d="M20.0576 13.6534C19.6022 14.1966 19.3887 14.8234 19.4314 15.5337V45.0328C19.3887 45.7431 19.6022 46.3698 20.0576 46.913L20.1572 47.0105L37.0515 30.4782V30.0882L20.1572 13.5559L20.0576 13.6534Z"
                                        fill="#428ECC" />
                                </g>
                                <mask id="mask3_277_7848" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="35"
                                    y="23" width="17" height="15">
                                    <path d="M35.644 23.0798H51.8551V37.3419H35.644V23.0798Z" fill="white" />
                                </mask>
                                <g mask="url(#mask3_277_7848)">
                                    <path
                                        d="M42.6894 35.9914L37.0532 30.476V30.0999L42.6894 24.5706L42.8175 24.6402L49.4926 28.345C51.3856 29.4175 51.3856 31.1445 49.4926 32.203L42.8175 35.9078L42.6894 35.9914Z"
                                        fill="#FCC018" />
                                </g>
                                <mask id="mask4_277_7848" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="19"
                                    y="30" width="24" height="18">
                                    <path d="M19.4033 30.2137H42.9301V47.693H19.4033V30.2137Z" fill="white" />
                                </mask>
                                <g mask="url(#mask4_277_7848)">
                                    <path
                                        d="M42.816 35.9251L37.0518 30.2844L20.0579 46.9141C20.6841 47.5688 21.7231 47.6245 22.8902 46.9977L42.816 35.9251Z"
                                        fill="#E84839" />
                                </g>
                                <mask id="mask5_277_7848" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="19"
                                    y="12" width="24" height="22">
                                    <path d="M19.4033 12.8602H42.9301V33.7798H19.4033V12.8602Z" fill="white" />
                                </mask>
                                <g mask="url(#mask5_277_7848)">
                                    <path
                                        d="M42.816 24.6432L22.8902 13.5706C21.7231 12.9299 20.6983 12.9995 20.0579 13.6541L37.0518 30.2839L42.816 24.6432Z"
                                        fill="#6CB74E" />
                                </g>
                                <path
                                    d="M66.6446 28.7706H72.964V34.8988H71.4838L71.0852 33.4503C70.5871 33.9378 69.9466 34.3417 69.1496 34.676C68.381 34.9685 67.5555 35.1217 66.6446 35.1217C65.3494 35.1217 64.1966 34.871 63.1718 34.3417C62.1471 33.7846 61.35 33.0603 60.7807 32.169C60.2114 31.2497 59.9268 30.2051 59.9268 29.0491C59.9268 27.9349 60.2114 26.9182 60.7807 25.985C61.35 25.0658 62.1186 24.3415 63.1149 23.8123C64.1397 23.2552 65.2925 22.9766 66.5877 22.9766C67.6836 22.9766 68.6657 23.1855 69.5481 23.5894C70.4163 24.0073 71.1137 24.5226 71.6545 25.1494C72.1812 25.79 72.537 26.4168 72.7362 27.0435H70.0035C69.7758 26.5979 69.3773 26.2079 68.808 25.8736C68.2387 25.5393 67.4986 25.3722 66.5877 25.3722C65.8191 25.3722 65.1217 25.5393 64.4812 25.8736C63.8692 26.2079 63.3995 26.6536 63.058 27.2107C62.7164 27.7678 62.5456 28.3806 62.5456 29.0491C62.5456 29.7177 62.7164 30.3584 63.058 30.9433C63.3995 31.5004 63.8692 31.9461 64.4812 32.2804C65.079 32.6147 65.7622 32.7818 66.5308 32.7818C67.5555 32.7818 68.3668 32.6007 68.9788 32.2247C69.5766 31.8208 69.9751 31.3751 70.1743 30.8876H66.6446V28.7706Z"
                                    fill="white" />
                                <path
                                    d="M79.6404 35.1198C78.6441 35.1198 77.7617 34.9248 76.9646 34.5627C76.1961 34.1588 75.5983 33.6156 75.1428 32.947C74.7159 32.2506 74.5166 31.4846 74.5166 30.6629C74.5166 29.8551 74.7159 29.103 75.1428 28.4344C75.5983 27.738 76.1961 27.1809 76.9646 26.7631C77.7617 26.3592 78.6441 26.1503 79.6404 26.1503C80.5798 26.1503 81.4337 26.3592 82.2023 26.7631C82.9993 27.1809 83.6256 27.738 84.081 28.4344C84.5365 29.103 84.7642 29.8551 84.7642 30.6629C84.7642 31.4846 84.5365 32.2506 84.081 32.947C83.6256 33.6156 82.9993 34.1588 82.2023 34.5627C81.4337 34.9248 80.5798 35.1198 79.6404 35.1198ZM79.6404 32.947C80.3947 32.947 81.021 32.752 81.5191 32.3342C82.003 31.8885 82.2592 31.3314 82.2592 30.6629C82.2592 29.9943 82.003 29.4372 81.5191 28.9915C81.021 28.5458 80.3947 28.323 79.6404 28.323C78.8434 28.323 78.1887 28.5458 77.7047 28.9915C77.2066 29.4372 76.9646 29.9943 76.9646 30.6629C76.9646 31.3314 77.2066 31.8885 77.7047 32.3342C78.1887 32.752 78.8434 32.947 79.6404 32.947Z"
                                    fill="white" />
                                <path
                                    d="M90.9568 35.1198C89.9605 35.1198 89.0781 34.9248 88.281 34.5627C87.5125 34.1588 86.9147 33.6156 86.4592 32.947C86.0323 32.2506 85.833 31.4846 85.833 30.6629C85.833 29.8551 86.0323 29.103 86.4592 28.4344C86.9147 27.738 87.5125 27.1809 88.281 26.7631C89.0781 26.3592 89.9605 26.1503 90.9568 26.1503C91.8962 26.1503 92.7501 26.3592 93.5187 26.7631C94.3157 27.1809 94.942 27.738 95.3974 28.4344C95.8529 29.103 96.0806 29.8551 96.0806 30.6629C96.0806 31.4846 95.8529 32.2506 95.3974 32.947C94.942 33.6156 94.3157 34.1588 93.5187 34.5627C92.7501 34.9248 91.8962 35.1198 90.9568 35.1198ZM90.9568 32.947C91.7111 32.947 92.3374 32.752 92.8355 32.3342C93.3194 31.8885 93.5756 31.3314 93.5756 30.6629C93.5756 29.9943 93.3194 29.4372 92.8355 28.9915C92.3374 28.5458 91.7111 28.323 90.9568 28.323C90.1598 28.323 89.5051 28.5458 89.0211 28.9915C88.523 29.4372 88.281 29.9943 88.281 30.6629C88.281 31.3314 88.523 31.8885 89.0211 32.3342C89.5051 32.752 90.1598 32.947 90.9568 32.947Z"
                                    fill="white" />
                                <path
                                    d="M102.046 38.0725C101.05 38.0725 100.225 37.9053 99.5415 37.5711C98.8868 37.2646 98.4029 36.9025 98.0613 36.4568C97.7482 36.039 97.5774 35.6769 97.5489 35.3426H100.111C100.41 35.7465 101.05 35.9554 102.046 35.9554C102.843 35.9554 103.441 35.7883 103.868 35.454C104.281 35.1198 104.494 34.6462 104.494 34.0055V33.6156H104.438C104.352 33.727 104.181 33.8663 103.925 34.0055C103.655 34.1588 103.327 34.312 102.957 34.4512C102.573 34.5627 102.16 34.6184 101.705 34.6184C100.822 34.6184 100.025 34.4373 99.3138 34.0613C98.6306 33.6574 98.0898 33.142 97.7197 32.5013C97.3354 31.8328 97.1504 31.1086 97.1504 30.3286C97.1504 29.5904 97.3354 28.908 97.7197 28.2673C98.0898 27.5988 98.6306 27.0834 99.3138 26.7074C99.9969 26.3453 100.766 26.1503 101.648 26.1503C102.858 26.1503 103.868 26.5124 104.665 27.2088H104.722L105.121 26.4288H106.999V33.9498C106.999 35.2451 106.558 36.2479 105.69 36.9582C104.85 37.6964 103.641 38.0725 102.046 38.0725ZM102.046 32.5013C102.758 32.5013 103.356 32.3064 103.811 31.8885C104.267 31.4846 104.494 30.9832 104.494 30.3843C104.494 29.7576 104.267 29.2562 103.811 28.8801C103.356 28.4762 102.758 28.2673 102.046 28.2673C101.321 28.2673 100.737 28.4762 100.282 28.8801C99.8261 29.2562 99.5984 29.7576 99.5984 30.3843C99.5984 30.9832 99.8261 31.4846 100.282 31.8885C100.737 32.3064 101.321 32.5013 102.046 32.5013Z"
                                    fill="white" />
                                <path d="M111.602 34.8974H109.154V23.2538H111.602V34.8974Z" fill="white" />
                                <path
                                    d="M123.402 30.6072C123.402 31.025 123.345 31.3175 123.231 31.4985H115.83C116.015 31.986 116.343 32.376 116.798 32.6685C117.282 32.9331 117.851 33.0585 118.506 33.0585C119.374 33.0585 120.015 32.8635 120.442 32.4456H123.06C122.861 32.9331 122.548 33.3788 122.093 33.7827C121.666 34.2005 121.139 34.5348 120.499 34.7855C119.886 35.0083 119.203 35.1198 118.449 35.1198C117.453 35.1198 116.57 34.9248 115.773 34.5627C115.005 34.1588 114.407 33.6156 113.951 32.947C113.524 32.2506 113.325 31.4846 113.325 30.6629C113.325 29.8551 113.524 29.103 113.951 28.4344C114.407 27.738 115.005 27.1809 115.773 26.7631C116.57 26.3592 117.453 26.1503 118.449 26.1503C119.317 26.1503 120.128 26.3592 120.897 26.7631C121.651 27.1391 122.263 27.6545 122.719 28.323C123.174 28.9915 123.402 29.7576 123.402 30.6072ZM118.449 28.2673C117.794 28.2673 117.253 28.4205 116.798 28.713C116.343 28.9776 116.015 29.3537 115.83 29.8272H120.954C120.755 29.3537 120.442 28.9776 119.986 28.713C119.531 28.4205 119.018 28.2673 118.449 28.2673Z"
                                    fill="white" />
                                <path
                                    d="M135.664 23.2538C136.575 23.2538 137.343 23.4209 137.998 23.7552C138.681 24.0894 139.208 24.5769 139.592 25.2036C139.962 25.8025 140.161 26.4711 140.161 27.2092C140.161 27.9892 139.962 28.6995 139.592 29.3263C139.208 29.9252 138.681 30.3848 137.998 30.7191C137.343 31.0533 136.575 31.2205 135.664 31.2205H132.533V34.8974H129.971V23.2538H135.664ZM135.607 28.7692C136.205 28.7692 136.689 28.6438 137.03 28.3792C137.372 28.0867 137.543 27.6967 137.543 27.2092C137.543 26.7636 137.372 26.4154 137.03 26.1507C136.689 25.8583 136.205 25.705 135.607 25.705H132.533V28.7692H135.607Z"
                                    fill="white" />
                                <path d="M144.329 34.8974H141.881V23.2538H144.329V34.8974Z" fill="white" />
                                <path
                                    d="M150.721 26.1503C152.116 26.1503 153.183 26.5124 153.909 27.2088C154.664 27.8773 155.048 28.7965 155.048 29.9386V34.8969H153.169L152.828 34.0613H152.714C152.443 34.3677 152.045 34.6184 151.518 34.8412C151.02 35.0223 150.394 35.1198 149.639 35.1198C148.914 35.1198 148.273 35.0083 147.704 34.7855C147.163 34.5627 146.75 34.2562 146.451 33.8384C146.181 33.4345 146.053 32.9888 146.053 32.5013C146.053 31.9442 146.195 31.4707 146.508 31.0529C146.85 30.6489 147.319 30.3286 147.931 30.1058C148.529 29.8551 149.269 29.7158 150.152 29.7158H152.6V29.6601C152.6 29.2562 152.429 28.9219 152.087 28.6573C151.774 28.4066 151.319 28.2673 150.721 28.2673C150.266 28.2673 149.881 28.323 149.582 28.4344C149.312 28.5458 149.127 28.7408 149.013 28.9915H146.508C146.693 28.1002 147.149 27.4177 147.875 26.9302C148.586 26.4149 149.54 26.1503 150.721 26.1503ZM150.095 33.2256C150.892 33.2256 151.49 33.0585 151.917 32.7242C152.372 32.3899 152.6 31.9999 152.6 31.5543V31.3314H150.152C149.582 31.3314 149.155 31.4289 148.899 31.61C148.629 31.7632 148.501 31.986 148.501 32.2785C148.501 32.5849 148.615 32.8217 148.842 33.0027C149.099 33.1559 149.526 33.2256 150.095 33.2256Z"
                                    fill="white" />
                                <path
                                    d="M163.817 26.4303H166.322L162.052 35.2327C161.554 36.2355 161.042 36.9319 160.515 37.3497C159.974 37.7536 159.334 37.9625 158.579 37.9625C158.039 37.9625 157.612 37.9068 157.27 37.7954V35.5669C157.569 35.6366 157.911 35.6784 158.295 35.6784C158.636 35.6784 158.935 35.5948 159.206 35.4555C159.505 35.3023 159.718 35.0795 159.832 34.787L160.003 34.4527L156.018 26.4303H158.693L161.312 32.2243L163.817 26.4303Z"
                                    fill="white" />
                            </svg>


                            <svg xmlns="http://www.w3.org/2000/svg" width="188" height="60" viewBox="0 0 188 60"
                                fill="none">
                                <mask id="mask0_530_94" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="33"
                                    y="10" width="12" height="14">
                                    <path d="M33.8877 10.7129H44.8184V23.0808H33.8877V10.7129Z" fill="white" />
                                </mask>
                                <g mask="url(#mask0_530_94)">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M36.5499 19.5003C38.2721 19.0686 39.6953 18.1632 40.7913 16.7844C41.816 15.517 42.428 14.0963 42.6415 12.5086C42.67 12.2857 42.6273 12.0768 42.5419 11.8679C42.4565 11.659 42.3284 11.4918 42.1434 11.3526C41.9583 11.2133 41.7591 11.1158 41.5314 11.074C41.3179 11.0461 41.0901 11.0601 40.8767 11.1297C39.2968 11.6729 37.9589 12.5643 36.863 13.8178C35.7956 15.0573 35.1409 16.478 34.9131 18.0936C34.8704 18.5393 35.0128 18.9014 35.3543 19.2078C35.6959 19.5003 36.0944 19.5978 36.5499 19.5003Z"
                                        fill="white" />
                                </g>
                                <mask id="mask1_530_94" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="0"
                                    y="0" width="188" height="60">
                                    <path d="M0 0.698761H187.773V59.878H0V0.698761Z" fill="white" />
                                </mask>
                                <g mask="url(#mask1_530_94)">
                                    <mask id="mask2_530_94" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="0"
                                        y="0" width="188" height="60">
                                        <path
                                            d="M176.358 59.8782H11.3862C5.10955 59.8782 0 54.8642 0 48.722V11.8551C0 5.71298 5.10955 0.698975 11.3862 0.698975H176.358C182.635 0.698975 187.744 5.71298 187.744 11.8551V48.722C187.744 54.8642 182.635 59.8782 176.358 59.8782Z"
                                            fill="white" />
                                    </mask>
                                    <g mask="url(#mask2_530_94)">
                                        <path d="M0 0.698975H187.773V59.8782H0V0.698975Z" fill="#2D2B2B" />
                                    </g>
                                </g>
                                <mask id="mask3_530_94" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="18"
                                    y="15" width="34" height="33">
                                    <path d="M18.1602 15.9507H51.906V47.7479H18.1602V15.9507Z" fill="white" />
                                </mask>
                                <g mask="url(#mask3_530_94)">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M50.8382 37.5395C45.6005 34.8932 44.6754 27.6089 49.4434 23.9738C49.7565 23.7231 49.9273 23.4027 49.9415 22.9988C49.9558 22.6089 49.8134 22.2746 49.5145 22.01C47.8066 20.3665 45.7571 19.503 43.366 19.4333C39.9501 19.4333 38.5126 21.0211 36.1358 21.0211C33.7589 21.0211 31.8375 19.4333 28.8771 19.4333C25.9167 19.4333 22.8851 21.1604 20.9352 24.0991C18.174 28.2496 18.6437 36.0492 23.1128 42.7067C24.6784 45.0883 26.8276 47.7625 29.6314 47.7903C32.1079 47.7903 32.8053 46.2443 36.1785 46.2443C39.5374 46.2443 40.1636 47.7903 42.6544 47.7903C45.444 47.7903 47.6928 44.7958 49.2868 42.4003C50.0554 41.2442 50.7243 40.0325 51.2794 38.7512C51.5071 38.2219 51.3506 37.818 50.8382 37.5395Z"
                                        fill="white" />
                                </g>
                                <path
                                    d="M71.6892 34.7966H69.0134L68.0456 32.5124H62.6941L61.7262 34.7966H59.1074L64.1743 23.4315H66.6223L71.6892 34.7966ZM67.0208 30.2283L65.3698 26.4399L63.6619 30.2283H67.0208Z"
                                    fill="white" />
                                <path
                                    d="M72.5972 37.7462V26.4926H74.419L74.8175 27.3282H74.8744C75.6287 26.6318 76.6108 26.2697 77.8348 26.2697C78.6603 26.2697 79.4289 26.4647 80.1121 26.8268C80.7952 27.2029 81.3218 27.7182 81.7061 28.3867C82.1189 29.0553 82.3324 29.8213 82.3324 30.6709C82.3324 31.4926 82.1189 32.2308 81.7061 32.8993C81.3218 33.5679 80.7952 34.0971 80.1121 34.4593C79.4289 34.8214 78.6603 35.0164 77.8348 35.0164C77.1801 35.0164 76.6393 34.9189 76.1838 34.7378C75.7284 34.5568 75.3583 34.3339 75.1021 34.0693H74.9883V37.7462H72.5972ZM77.4932 32.8993C78.1764 32.8993 78.7457 32.7044 79.2012 32.2865C79.6851 31.8408 79.9413 31.3116 79.9413 30.6709C79.9413 30.0024 79.6851 29.4731 79.2012 29.0553C78.7457 28.6096 78.1764 28.3867 77.4932 28.3867C76.7674 28.3867 76.1554 28.6096 75.6714 29.0553C75.216 29.4731 74.9883 30.0024 74.9883 30.6709C74.9883 31.3116 75.216 31.8408 75.6714 32.2865C76.1554 32.7044 76.7674 32.8993 77.4932 32.8993Z"
                                    fill="white" />
                                <path
                                    d="M83.8843 37.7462V26.4926H85.7061L86.1046 27.3282H86.1615C86.9159 26.6318 87.8979 26.2697 89.1219 26.2697C89.9474 26.2697 90.716 26.4647 91.3992 26.8268C92.0823 27.2029 92.609 27.7182 92.9932 28.3867C93.406 29.0553 93.6195 29.8213 93.6195 30.6709C93.6195 31.4926 93.406 32.2308 92.9932 32.8993C92.609 33.5679 92.0823 34.0971 91.3992 34.4593C90.716 34.8214 89.9474 35.0164 89.1219 35.0164C88.4672 35.0164 87.9264 34.9189 87.4709 34.7378C87.0155 34.5568 86.6454 34.3339 86.3892 34.0693H86.2754V37.7462H83.8843ZM88.7803 32.8993C89.4635 32.8993 90.0328 32.7044 90.4883 32.2865C90.9722 31.8408 91.2284 31.3116 91.2284 30.6709C91.2284 30.0024 90.9722 29.4731 90.4883 29.0553C90.0328 28.6096 89.4635 28.3867 88.7803 28.3867C88.0545 28.3867 87.4425 28.6096 86.9586 29.0553C86.5031 29.4731 86.2754 30.0024 86.2754 30.6709C86.2754 31.3116 86.5031 31.8408 86.9586 32.2865C87.4425 32.7044 88.0545 32.8993 88.7803 32.8993Z"
                                    fill="white" />
                                <path
                                    d="M104.547 35.0189C103.48 35.0189 102.555 34.8518 101.758 34.5175C100.989 34.1832 100.405 33.7236 99.9927 33.1247C99.5658 32.5398 99.338 31.8852 99.3096 31.1748H101.871C101.985 31.7041 102.27 32.1219 102.725 32.4562C103.181 32.7626 103.807 32.9019 104.604 32.9019C105.43 32.9019 106.027 32.7905 106.369 32.5676C106.739 32.3448 106.938 32.0662 106.938 31.732C106.938 31.3281 106.711 31.0356 106.255 30.8406C105.828 30.6177 105.145 30.3949 104.206 30.172C103.252 29.9213 102.469 29.6706 101.871 29.4478C101.259 29.225 100.733 28.8768 100.277 28.3893C99.8504 27.9157 99.6512 27.2611 99.6512 26.4394C99.6512 25.8126 99.8219 25.2555 100.164 24.7681C100.534 24.2945 101.074 23.9045 101.758 23.5981C102.469 23.3056 103.323 23.1524 104.319 23.1524C105.302 23.1524 106.156 23.3196 106.881 23.6538C107.636 23.9602 108.205 24.4059 108.589 24.9909C108.959 25.548 109.187 26.1887 109.272 26.8851H106.711C106.668 26.4394 106.44 26.0773 106.027 25.7709C105.6 25.4784 105.031 25.3252 104.319 25.3252C103.594 25.3252 103.039 25.4644 102.668 25.7151C102.327 25.938 102.156 26.2165 102.156 26.5508C102.156 26.9269 102.355 27.2194 102.782 27.4422C103.238 27.6372 103.921 27.8322 104.832 28.055C105.771 28.2779 106.554 28.5007 107.166 28.7236C107.807 28.9464 108.333 29.3085 108.76 29.7821C109.216 30.2695 109.443 30.9241 109.443 31.732C109.443 32.3726 109.244 32.9437 108.874 33.459C108.532 33.9465 107.992 34.3365 107.28 34.6289C106.554 34.8796 105.643 35.0189 104.547 35.0189Z"
                                    fill="white" />
                                <path
                                    d="M115.288 35.0181C114.263 35.0181 113.438 34.7256 112.84 34.1267C112.271 33.5418 111.986 32.7061 111.986 31.6197V28.6113H110.335V26.6614H111.189C111.531 26.6614 111.772 26.5779 111.929 26.3829C112.114 26.2018 112.214 25.9372 112.214 25.6029V24.433H114.377V26.4943H116.711V28.6113H114.377V31.3412C114.377 32.3161 114.847 32.7897 115.8 32.7897C116.142 32.7897 116.441 32.7339 116.711 32.6225V34.7953C116.327 34.9345 115.857 35.0181 115.288 35.0181Z"
                                    fill="white" />
                                <path
                                    d="M122.877 35.0164C121.924 35.0164 121.07 34.8214 120.315 34.4593C119.547 34.0554 118.949 33.5122 118.493 32.8436C118.066 32.1751 117.867 31.4509 117.867 30.6709C117.867 29.8631 118.066 29.111 118.493 28.4425C118.949 27.7739 119.547 27.2586 120.315 26.8825C121.07 26.4786 121.924 26.2697 122.877 26.2697C123.816 26.2697 124.67 26.4786 125.439 26.8825C126.193 27.2586 126.777 27.7739 127.204 28.4425C127.659 29.111 127.887 29.8631 127.887 30.6709C127.887 31.4509 127.659 32.1751 127.204 32.8436C126.777 33.5122 126.193 34.0554 125.439 34.4593C124.67 34.8214 123.816 35.0164 122.877 35.0164ZM122.877 32.8993C123.674 32.8993 124.3 32.7044 124.756 32.2865C125.24 31.8408 125.496 31.3116 125.496 30.6709C125.496 30.0024 125.24 29.4731 124.756 29.0553C124.3 28.6096 123.674 28.3867 122.877 28.3867C122.109 28.3867 121.482 28.6096 120.998 29.0553C120.543 29.4731 120.315 30.0024 120.315 30.6709C120.315 31.3116 120.543 31.8408 120.998 32.2865C121.482 32.7044 122.109 32.8993 122.877 32.8993Z"
                                    fill="white" />
                                <path
                                    d="M129.436 34.7935V26.4926H131.258L131.656 27.3282H131.713C132.354 26.6318 133.222 26.2697 134.332 26.2697C134.788 26.2697 135.143 26.3115 135.414 26.3811V28.7767C135.03 28.6653 134.631 28.6096 134.218 28.6096C132.624 28.6096 131.827 29.3338 131.827 30.7823V34.7935H129.436Z"
                                    fill="white" />
                                <path
                                    d="M146.044 30.5595C146.044 31.0052 146.001 31.3255 145.93 31.5066H138.7C138.842 31.9523 139.155 32.3283 139.611 32.6208C140.095 32.8854 140.65 33.0108 141.262 33.0108C142.13 33.0108 142.77 32.8158 143.197 32.3979H145.759C145.532 32.8436 145.204 33.2754 144.791 33.6793C144.364 34.0971 143.852 34.4314 143.254 34.6821C142.642 34.9049 141.973 35.0164 141.262 35.0164C140.308 35.0164 139.44 34.8214 138.643 34.4593C137.874 34.0554 137.277 33.5122 136.821 32.8436C136.394 32.1751 136.195 31.4509 136.195 30.6709C136.195 29.8631 136.394 29.111 136.821 28.4425C137.277 27.7739 137.874 27.2586 138.643 26.8825C139.397 26.4786 140.251 26.2697 141.205 26.2697C142.073 26.2697 142.87 26.4647 143.596 26.8268C144.35 27.2029 144.934 27.7182 145.361 28.3867C145.816 29.0553 146.044 29.7795 146.044 30.5595ZM141.205 28.2753C140.593 28.2753 140.066 28.4285 139.611 28.721C139.155 28.9856 138.828 29.3617 138.643 29.8352H143.653C143.454 29.3617 143.14 28.9856 142.685 28.721C142.258 28.4285 141.774 28.2753 141.205 28.2753Z"
                                    fill="white" />
                            </svg>



                        </div>

                    </div>
                    <div class="left px-5">
                        <img class="w-full lg:w-[788px]" src="assets/images/land.png">
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!--====================== END MAIN ======================-->
@endsection
