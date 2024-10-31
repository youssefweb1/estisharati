    <!-- Main modal (Delete Account Modal) -->
    <div id="deleteAccountModal" tabindex="-1" aria-hidden="true"
        class="hidden fixed inset-0 z-50 overflow-y-auto overflow-x-hidden flex justify-center items-center">
        <div class="relative p-4 w-full max-w-xl h-full md:h-auto">
            <div class="relative p-4 lg:p-10 pb-5 bg-white rounded-lg shadow">
                <form action="#">
                    <div class="flex flex-col items-center gap-5 justify-center">
                        <div class="flex flex-col gap-3 items-center justify-center mt-10">
                            <span class="text-[#2A2A2A] font-[500] text-[17px]">يؤسفنا رحيلك عن إستشاراتي</span>
                            <span
                                class="text-[#2A2A2A] font-[600] text-[17px]">{{ auth()->user()->fname . ' ' . auth()->user()->lname }}</span>
                        </div>
                        <div class="my-10 flex flex-col items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="52" height="46" viewBox="0 0 52 46"
                                fill="none">
                                <path
                                    d="M21.7801 4.44056L2.33006 36.9106C1.92914 37.6051 1.71704 38.3924 1.71486 39.1943C1.71268 39.9962 1.92049 40.7848 2.31762 41.4814C2.71475 42.1781 3.28736 42.7587 3.97849 43.1653C4.66963 43.572 5.4552 43.7907 6.25706 43.7996H45.1571C45.9592 43.7912 46.7451 43.5729 47.4367 43.1665C48.1282 42.76 48.7013 42.1795 49.0987 41.4827C49.4962 40.7859 49.7043 39.9972 49.7022 39.1951C49.7002 38.3929 49.4881 37.6053 49.0871 36.9106L29.6341 4.44056C29.2246 3.76587 28.6482 3.20806 27.9604 2.82095C27.2727 2.43383 26.4968 2.23047 25.7076 2.23047C24.9183 2.23047 24.1424 2.43383 23.4547 2.82095C22.7669 3.20806 22.1895 3.76587 21.7801 4.44056Z"
                                    stroke="#E77E5C" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M25.707 16.2437V25.4287" stroke="#E77E5C" stroke-width="3"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            <span class="text-gray-500 text-center mt-3">عند حذف حسابك سوف تفقد جميع
                                اشتراكاتك<br>ودرّاتك التي قمت بشرائها</span>
                        </div>
                    </div>
                    <div class="border-t w-full mt-7">
                        <div
                            class="flex flex-col md:flex-row items-center justify-between max-w-md w-full mx-auto pt-7 gap-5">
                            <button type="button" data-modal-target="passwordConfirmModal"
                                class="text-white w-full lg:w-[170px] bg-[#E77E5C] rounded-lg px-10 py-2.5">حذف
                                الحساب</button>
                            <button data-modal-toggle="deleteAccountModal" type="button"
                                class="text-black w-full lg:w-[140px] bg-transparent border border-gray-400 rounded-lg px-10 py-2.5">
                                إلغاء
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <!-- Password Confirmation Modal -->
    <div id="passwordConfirmModal" tabindex="-1" aria-hidden="true"
        class="hidden fixed inset-0 z-50 flex justify-center items-center">
        <div class="relative p-10 w-full max-w-xl h-full md:h-auto">
            <div class="bg-white rounded-lg shadow p-6 flex flex-col items-center">
                <h2 class="text-xl text-gray-500 text-center mb-4">تأكيد حذف الحساب</h2>
                <form action="{{ route('delete.account') }}" method="POST" class="w-full" >
                    @csrf
                    <div class="relative w-full flex flex-col items-center justify-center my-10">
                        <div class="relative w-full">
                            <span for="current-password"
                                class="block mb-[10px] text-[16px] font-medium text-[#2A2A2A] text-right">كلمة المرور
                                الحالية</span>


                            <div class="absolute top-12 right-2 flex items-center pr-3 pointer-events-none">
                                <!-- Icon for password field -->
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="sm:w-[24px] sm:h-[24px] w-[20px] h-[20px]" viewBox="0 0 23 27"
                                    fill="none">
                                    <path
                                        d="M20.602 12.1062H19.4026V8.50829C19.4026 4.32066 15.9946 0.912598 11.8069 0.912598C7.61931 0.912598 4.21124 4.32066 4.21124 8.50829V12.1062H3.01192C1.68767 12.1062 0.613281 13.1806 0.613281 14.5049V24.0994C0.613281 25.4237 1.68767 26.4981 3.01192 26.4981H20.602C21.9262 26.4981 23.0006 25.4237 23.0006 24.0994V14.5049C23.0006 13.1806 21.9262 12.1062 20.602 12.1062ZM15.4049 12.1062H8.20898V8.50829C8.20898 6.52441 9.82306 4.91033 11.8069 4.91033C13.7908 4.91033 15.4049 6.52441 15.4049 8.50829V12.1062Z"
                                        fill="#D6D3D3" />
                                </svg>
                            </div>
                            <input autocomplete="off" type="password" name="current_password" id="password"
                                class="bg-white border pr-14 border-[#2A2A2A] rounded-[27px] w-full sm:h-[54.014px] h-[45px] text-[#2A2A2A] text-right font-Questv1 sm:placeholder:text-[17px] placeholder:text-[15px] sm:text-[18px] text-[15px] placeholder:opacity-50"
                                placeholder="أدخل كلمة المرور" required />
                            
                            @error('current_password')
                                <div class="text-red-500 text-right mt-1 text-sm mr-2">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="border-t w-full mt-10">
                        <div
                            class="flex flex-col md:flex-row items-center justify-between max-w-md w-full mx-auto pt-7 gap-5">
                            <button type="submit"
                                class="text-white w-full lg:w-[170px] bg-[#E77E5C] rounded-lg px-10 py-2.5">تأكيد
                                الحذف</button>
                            <button id="cancelButton" data-modal-toggle="deleteAccountModal" type="button"
                                class="text-black w-full lg:w-[140px] bg-transparent border border-gray-400 rounded-lg px-10 py-2.5">إلغاء</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- JavaScript to toggle modals -->
    <script>
        function previewImage(event) {
            const file = event.target.files[0];
            const reader = new FileReader();

            reader.onload = function(e) {
                const img = document.getElementById('preview');
                img.src = e.target.result;
            }

            if (file) {
                reader.readAsDataURL(file);
            }
        }

        document.querySelector("[data-modal-target='passwordConfirmModal']").addEventListener("click", function() {
            document.getElementById("deleteAccountModal").classList.add("hidden");
            document.getElementById("passwordConfirmModal").classList.remove("hidden");
        });

        document.getElementById("cancelButton").addEventListener("click", function() {
            document.getElementById("passwordConfirmModal").classList.add("hidden");
            document.getElementById("deleteAccountModal").classList.remove("hidden");
        });
    </script>
