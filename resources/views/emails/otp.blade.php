<!DOCTYPE html>
<html lang="ar">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Estisharati - OTP</title>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Alexandria:wght@400&display=swap" rel="stylesheet" />
    <style>
        body {
            direction: rtl;
            /* لضبط الاتجاه من اليمين لليسار */
            font-family: 'Alexandria', sans-serif;
            /* استخدام خط Alexandria */
        }

        .otp-container {
            text-align: center;
            /* لضبط النص في المنتصف */
        }
    </style>
</head>

<body style="margin: 0; background: #ffffff; font-size: 14px;">
    <div
        style="
          max-width: 680px;
          margin: 0 auto;
          padding: 45px 30px 60px;
          background: #f7f7f7f4;
          background-repeat: no-repeat;
          background-size: 800px 452px;
          background-position: top center;
          color: #434343;
        ">
        <header>
            <table style="width: 100%;">
                <tbody>
                    <tr style="height: 0;">
                        <td>
                            <svg xmlns="http://www.w3.org/2000/svg" width="70" height="49" viewBox="0 0 70 49"
                                fill="none">
                                <path
                                    d="M69.9674 18.3352C69.9489 17.9411 69.9008 17.5534 69.8634 17.1634C69.8168 16.7652 69.7419 16.334 69.6767 15.9233L69.6509 15.7676L69.6259 15.6512L69.577 15.4192L69.4776 14.9562L69.4522 14.8407L69.4166 14.6794L69.399 14.6139L69.3293 14.35L69.1884 13.8233C68.9911 13.1224 68.7716 12.4219 68.5092 11.7311C67.9912 10.3477 67.3365 8.99022 66.5122 7.71818C65.6846 6.45073 64.7079 5.26335 63.5842 4.2556C62.4604 3.25065 61.2217 2.40507 59.9335 1.78727C58.6522 1.15336 57.3381 0.731061 56.0666 0.465863C54.7941 0.191388 53.5609 0.0878726 52.3933 0.0726748C51.2247 0.0564395 50.1204 0.147016 49.0845 0.293012C47.0122 0.587812 45.2125 1.10484 43.6785 1.67131C42.144 2.23686 40.8701 2.84306 39.8541 3.39433C39.3449 3.66783 38.9 3.92613 38.5197 4.16362C38.138 4.39604 37.8215 4.60856 37.5679 4.78367C37.0601 5.13347 36.8064 5.34367 36.8064 5.34367L37.7347 5.21525C38.035 5.17875 38.4051 5.13298 38.8404 5.07939C39.2747 5.03276 39.7709 4.97777 40.324 4.92552C41.4315 4.82621 42.7655 4.72453 44.2685 4.6959C45.7702 4.67009 47.4424 4.70561 49.1797 4.92051C50.9133 5.13163 52.7158 5.52989 54.357 6.23546C56.006 6.93455 57.4426 7.95201 58.5732 9.28776C59.702 10.6286 60.5637 12.3124 61.157 14.277C61.3016 14.7677 61.4402 15.2704 61.5576 15.7875L61.6421 16.1783L61.6796 16.3498L61.6842 16.3771L61.7045 16.4939L61.7895 16.9597L61.832 17.1925L61.8533 17.3085L61.8612 17.388C61.8801 17.6033 61.912 17.7969 61.9318 18.0284C61.9434 18.2701 61.9711 18.5127 61.9808 18.752C61.9808 18.9904 62.0011 19.2307 61.9919 19.4673L61.9804 19.8211C61.9799 19.9399 61.9743 20.0573 61.96 20.1737C61.8297 22.0431 61.2845 23.835 60.31 25.5409C59.3476 27.2454 58.0127 28.8575 56.499 30.3134C54.984 31.7712 53.3118 33.0848 51.6359 34.2654C49.9582 35.4463 48.2764 36.4994 46.6846 37.4438C45.0924 38.3887 43.5842 39.2153 42.2327 39.9491C40.8789 40.6768 39.6767 41.2978 38.6786 41.8111L35.5034 43.4223C35.5034 43.4223 35.8324 43.4482 36.4474 43.4528C36.7551 43.456 37.1345 43.4551 37.5789 43.4403C38.0253 43.4311 38.5359 43.4043 39.1074 43.3645C40.2519 43.2887 41.6358 43.1386 43.2174 42.8868C44.7985 42.6322 46.5742 42.2654 48.4908 41.7284C50.4064 41.1901 52.4658 40.4864 54.5949 39.5328C56.7222 38.5773 58.9248 37.3699 61.0678 35.7763C63.2002 34.1813 65.2942 32.1755 66.9548 29.6153C67.7814 28.3395 68.4976 26.9299 69.0063 25.418C69.528 23.9122 69.8436 22.3139 69.9568 20.718C69.9752 20.5184 69.9835 20.3188 69.9859 20.1197L69.9979 19.5223C70.0057 19.1239 69.9785 18.7308 69.9674 18.3352Z"
                                    fill="#E77E5C" />
                                <path
                                    d="M6.55615 26.6548C6.72157 27.7355 6.98078 28.8037 7.3361 29.8296C7.48118 30.2606 7.63412 30.6824 7.81108 31.0964C8.25372 32.1338 8.79156 33.1146 9.38252 34.0264C11.0431 36.5865 13.1399 38.5928 15.2718 40.1877C17.4148 41.7814 19.6188 42.9883 21.7461 43.9437C23.8757 44.8979 25.9351 45.6012 27.8512 46.1395C28.5461 46.3345 34.3804 44.5061 34.1097 44.3606C32.7582 43.6268 31.2505 42.6611 29.6578 41.7158C28.9809 41.3142 25.6708 39.2166 24.7069 38.5377C23.0311 37.3572 21.3584 36.0709 19.8434 34.6136C18.3302 33.1577 15.2663 28.9636 15.0038 26.6548"
                                    fill="#E77E5C" />
                                <path
                                    d="M33.1245 11.9619C33.563 12.2794 33.9507 12.6162 34.2718 12.9656C36.4097 15.2943 37.837 17.4354 38.0158 20.4965H44.3145C43.9772 16.1061 42.2385 12.303 39.0475 9.08704C38.4215 8.46106 37.7899 7.89917 37.1476 7.39502C37.0612 7.45227 36.9771 7.50964 36.8939 7.56738C35.5812 8.5603 34.3337 10.0985 33.1245 11.9619Z"
                                    fill="#E77E5C" />
                                <path
                                    d="M38.7842 47.0808L37.0515 46.183C36.7451 46.0227 36.4291 45.8563 36.1011 45.6821C34.4977 46.566 32.8233 47.1913 31.0776 47.558C32.2295 47.8265 33.3172 48.0349 34.3249 48.197C35.9065 48.4493 37.2904 48.5991 38.4349 48.6749C39.0065 48.715 39.517 48.7413 39.9629 48.7506C40.4078 48.7654 40.7872 48.7664 41.0949 48.7635C41.7099 48.7584 42.0384 48.733 42.0384 48.733L38.8632 47.1218L38.7842 47.0808Z"
                                    fill="#E77E5C" />
                                <path
                                    d="M37.1477 7.39563L37.162 7.38593L37.1532 7.37939C37.0664 7.43994 36.98 7.50281 36.894 7.56799C36.9772 7.51019 37.0613 7.45288 37.1477 7.39563Z"
                                    fill="#525252" />
                                <path
                                    d="M25.9942 10.0526C25.9942 10.0526 29.673 9.89038 32.8053 11.7986C33.3884 10.2614 34.4626 7.77051 35.7361 6.42273C32.8612 4.57635 29.613 3.65088 25.9771 3.65088C24.3359 3.65088 22.776 3.84027 21.2946 4.21826C21.2946 4.21826 19.5661 4.51532 16.3419 6.16626C15.0703 6.81683 13.8173 7.62915 12.6935 8.63452C11.5698 9.64227 10.594 10.8298 9.76691 12.0967C8.94261 13.3692 8.28834 14.7267 7.77038 16.11C7.50794 16.8008 7.28847 17.5013 7.09117 18.2022L6.95071 18.7285L6.88093 18.9923L6.86338 19.0584L6.82826 19.2197L6.80238 19.3351L6.70351 19.7982L6.65407 20.0302L6.56304 20.4973L3.73759 20.4977C3.73759 20.4977 2.69012 20.4746 2.34867 20.5767C2.34867 20.5767 1.82516 20.6497 1.30073 21.1455C1.30073 21.1455 0.887198 21.5013 0.798026 21.7864C0.798026 21.7864 0.642775 22.09 0.656638 22.6901V26.6545H41.2335C42.1133 26.6545 42.8156 26.6808 43.413 26.2179C44.1098 25.6773 44.315 25.3414 44.315 24.4616V20.4973H14.0326C14.2308 17.4191 15.4797 15.1028 17.7784 12.9464C17.7784 12.9464 20.4509 10.2383 25.9942 10.0526Z"
                                    fill="#84AA43" />
                            </svg>
                        </td>
                        <td style="text-align: left;">
                            <span style="font-size: 16px; line-height: 30px; color: #101010;">
                                {{ \Carbon\Carbon::now()->translatedFormat('j F، Y') }}
                            </span>
                                                    </td>
                    </tr>
                </tbody>
            </table>
        </header>

        <main class="otp-container">
            <div
                style="
                  margin: 0;
                  margin-top: 70px;
                  padding: 92px 30px 115px;
                  background: #ffffff;
                  border-radius: 30px;
                ">
                <div style="width: 100%; max-width: 489px; margin: 0 auto;">
                    <h1
                        style="
                          margin: 0;
                          font-size: 24px;
                          font-weight: 500;
                          color: #1f1f1f;
                        ">
                        رمز التحقق (OTP)
                    </h1>
                    <p
                        style="
                          margin: 0;
                          margin-top: 17px;
                          font-size: 16px;
                          font-weight: 500;
                        ">
                        مرحبًا {{ $firstName }} ،  
                    </p>
                    <p
                        style="
                          margin: 0;
                          margin-top: 17px;
                          font-weight: 500;
                          line-height: 210%;
                        ">
                        شكرًا لاختيارك موقع Estisharati. استخدم رمز التحقق التالي
                        لإتمام عملية تغيير كلمة المرور . رمز التحقق صالح لمدة
                        <span style="font-weight: 600; color: #E77E5C;">10 دقائق</span>.
                        لا تشارك هذا الرمز مع الآخرين، بما في ذلك موظفي Estisharati.
                    </p>
                    <p
                        style="
                          margin: 0;
                          margin-top: 60px;
                          font-size: 40px;
                          font-weight: 600;
                          letter-spacing: 25px;
                          color: #E77E5C; /* استخدام اللون المطلوب */
                        ">
                        {{ $otp }}
                    </p>
                </div>
            </div>

            <p
                style="
                  max-width: 400px;
                  margin: 0 auto;
                  margin-top: 90px;
                  text-align: center;
                  font-weight: 500;
                  color: #8c8c8c;
                ">
                تحتاج إلى مساعدة؟ استفسر عبر
                <a href="mailto:info@estisharati.com"
                    style="color: #E77E5C; text-decoration: none;">info@estisharati.com</a>
                أو قم بزيارة
                <a href="" target="_blank" style="color: #E77E5C; text-decoration: none;">مركز المساعدة</a>
            </p>
        </main>

        <footer
            style="
              width: 100%;
              max-width: 490px;
              margin: 20px auto 0;
              text-align: center;
              border-top: 1px solid #e6ebf1;
            ">
            <p
                style="
                  margin: 0;
                  margin-top: 40px;
                  font-size: 16px;
                  font-weight: 600;
                  color: #434343;
                ">
                Estisharati
            </p>
        </footer>
    </div>
</body>

</html>
