@extends('admin.layouts.app')

@section('content')
    <main class="is-rtl">
        <!-- هدر صفحه -->
        <header class="page-header page-header-compact page-header-light border-bottom bg-white mb-4">
            <div class="container-xl px-4">
                <div class="page-header-content">
                    <div class="row align-items-center justify-content-between pt-3">
                        <div class="col-auto mb-3">
                            <h1 class="page-header-title">
                                <div class="page-header-icon"><i class="bx bx-dashboard"></i></div>
                                داشبورد مدیریت وبلاگ
                            </h1>
                            <div class="small text-muted">
                                خلاصه‌ای از وضعیت وبلاگ را در یک نگاه ببینید
                            </div>
                        </div>
                        <div class="col-12 col-xl-auto mb-3 text-muted small">
                            خوش آمدید،
                            <span class="fw-bold">مدیر سیستم</span>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <!-- محتوای اصلی صفحه -->
        <div class="container-xl px-4 mt-4">

            {{-- ردیف آمار کلی --}}
            <div class="row">
                <!-- مقالات -->
                <div class="col-xxl-3 col-md-6 mb-4">
                    <div class="card h-100">
                        <div class="card-body d-flex justify-content-between align-items-center">
                            <div>
                                <div class="small text-muted">تعداد مقالات</div>
                                <div class="fs-3 fw-bold">24</div>
                            </div>
                            <div class="display-6 text-primary">
                                <i class="bx bx-news"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- دسته‌بندی‌ها -->
                <div class="col-xxl-3 col-md-6 mb-4">
                    <div class="card h-100">
                        <div class="card-body d-flex justify-content-between align-items-center">
                            <div>
                                <div class="small text-muted">تعداد دسته‌بندی‌ها</div>
                                <div class="fs-3 fw-bold">6</div>
                            </div>
                            <div class="display-6 text-success">
                                <i class="bx bx-category"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- تگ‌ها -->
                <div class="col-xxl-3 col-md-6 mb-4">
                    <div class="card h-100">
                        <div class="card-body d-flex justify-content-between align-items-center">
                            <div>
                                <div class="small text-muted">تعداد تگ‌ها / برچسب‌ها</div>
                                <div class="fs-3 fw-bold">18</div>
                            </div>
                            <div class="display-6 text-warning">
                                <i class="bx bx-purchase-tag"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- نظرات -->
                <div class="col-xxl-3 col-md-6 mb-4">
                    <div class="card h-100">
                        <div class="card-body d-flex justify-content-between align-items-center">
                            <div>
                                <div class="small text-muted">کل نظرات</div>
                                <div class="fs-3 fw-bold">57</div>
                                <div class="small text-muted mt-1">
                                    در انتظار تأیید:
                                    <span class="fw-semibold">5</span>
                                </div>
                            </div>
                            <div class="display-6 text-danger">
                                <i class="bx bx-message-detail"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- کاربران -->
                <div class="col-xxl-3 col-md-6 mb-4">
                    <div class="card h-100">
                        <div class="card-body d-flex justify-content-between align-items-center">
                            <div>
                                <div class="small text-muted">تعداد کاربران</div>
                                <div class="fs-3 fw-bold">12</div>
                            </div>
                            <div class="display-6 text-info">
                                <i class="bx bx-user"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- ردیف: آخرین مقالات + آخرین نظرات --}}
            <div class="row">
                <!-- آخرین مقالات -->
                <div class="col-xl-8 mb-4">
                    <div class="card h-100">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <span>آخرین مقالات منتشر شده</span>
                            <a href="#" class="small">مشاهده همه</a>
                        </div>
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table table-hover mb-0 table-sm align-middle">
                                    <thead class="small text-muted">
                                    <tr>
                                        <th>عنوان</th>
                                        <th>دسته‌بندی</th>
                                        <th>وضعیت</th>
                                        <th>تاریخ انتشار</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>
                                            <a href="#">معرفی لاراول 11 و قابلیت‌های جدید</a>
                                        </td>
                                        <td>برنامه‌نویسی بک‌اند</td>
                                        <td>
                                            <span class="badge bg-success-soft text-success">منتشر شده</span>
                                        </td>
                                        <td class="small text-muted">
                                            1403/01/15 14:32
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a href="#">۱۰ نکته برای نوشتن کد تمیز در PHP</a>
                                        </td>
                                        <td>نکات و ترفندها</td>
                                        <td>
                                            <span class="badge bg-success-soft text-success">منتشر شده</span>
                                        </td>
                                        <td class="small text-muted">
                                            1403/01/12 09:10
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a href="#">راهنمای شروع کار با Git برای تازه‌کارها</a>
                                        </td>
                                        <td>کنترل نسخه</td>
                                        <td>
                                            <span class="badge bg-secondary-soft text-secondary">پیش‌نویس</span>
                                        </td>
                                        <td class="small text-muted">
                                            -
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a href="#">طراحی معماری ساده برای وبلاگ شخصی</a>
                                        </td>
                                        <td>معماری نرم‌افزار</td>
                                        <td>
                                            <span class="badge bg-success-soft text-success">منتشر شده</span>
                                        </td>
                                        <td class="small text-muted">
                                            1402/12/28 18:45
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="4" class="text-center small text-muted">
                                            این داده‌ها نمونه هستند؛ بعداً می‌توانید آنها را داینامیک کنید.
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- آخرین نظرات -->
                <div class="col-xl-4 mb-4">
                    <div class="card h-100">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <span>آخرین نظرات</span>
                            <a href="#" class="small">مدیریت نظرات</a>
                        </div>
                        <div class="card-body">

                            <div class="mb-3 pb-3 border-bottom small">
                                <div class="d-flex justify-content-between">
                                    <span class="fw-semibold">
                                        علی رضایی
                                    </span>
                                    <span class="text-muted">
                                        1403/01/15
                                    </span>
                                </div>
                                <div class="text-muted mt-1">
                                    در مقاله:
                                    <a href="#">معرفی لاراول 11 و قابلیت‌های جدید</a>
                                </div>
                                <div class="mt-1">
                                    خیلی مقاله خوبی بود، مخصوصاً بخش مربوط به queues. لطفاً در مورد eventها هم بنویسید.
                                </div>
                                <div class="mt-1">
                                    <span class="badge bg-success-soft text-success">تأیید شده</span>
                                </div>
                            </div>

                            <div class="mb-3 pb-3 border-bottom small">
                                <div class="d-flex justify-content-between">
                                    <span class="fw-semibold">
                                        کاربر مهمان
                                    </span>
                                    <span class="text-muted">
                                        1403/01/14
                                    </span>
                                </div>
                                <div class="text-muted mt-1">
                                    در مقاله:
                                    <a href="#">۱۰ نکته برای نوشتن کد تمیز در PHP</a>
                                </div>
                                <div class="mt-1">
                                    اگر امکانش هست در مورد اصول SOLID هم یک مطلب جداگانه بنویسید.
                                </div>
                                <div class="mt-1">
                                    <span class="badge bg-warning-soft text-warning">در انتظار تأیید</span>
                                </div>
                            </div>

                            <div class="mb-3 pb-3 border-bottom small">
                                <div class="d-flex justify-content-between">
                                    <span class="fw-semibold">
                                        سارا محمدی
                                    </span>
                                    <span class="text-muted">
                                        1403/01/10
                                    </span>
                                </div>
                                <div class="text-muted mt-1">
                                    در مقاله:
                                    <a href="#">طراحی معماری ساده برای وبلاگ شخصی</a>
                                </div>
                                <div class="mt-1">
                                    توضیحات خیلی روان و قابل فهم بود. ممنون از محتوای خوبتون ❤️
                                </div>
                                <div class="mt-1">
                                    <span class="badge bg-success-soft text-success">تأیید شده</span>
                                </div>
                            </div>

                            <div class="text-center text-muted small">
                                این نظرات صرفاً نمونه هستند و بعداً با داده‌های واقعی جایگزین می‌شوند.
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- ردیف: یک باکس اضافه برای آمار یا یادداشت مدیر --}}
            <div class="row">
                <div class="col-xl-6 mb-4">
                    <div class="card h-100">
                        <div class="card-header">
                            یادداشت مدیر
                        </div>
                        <div class="card-body">
                            <p class="mb-2 small text-muted">
                                می‌توانید از این باکس برای نمایش یادداشت‌ها، اعلان‌های داخلی، یا هر متن دلخواه استفاده کنید.
                            </p>
                            <p class="mb-0">
                                این متن نمونه است. بعداً می‌توانید آن را به تنظیمات پنل مدیریت متصل کنید
                                تا مدیر وبلاگ بتواند از داخل پنل، پیام خوش‌آمدگویی یا اطلاعیه مهم خود را تنظیم کند.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-xl-6 mb-4">
                    <div class="card h-100">
                        <div class="card-header">
                            آمار مقالات (نمونه)
                        </div>
                        <div class="card-body">
                            <p class="small text-muted">
                                این بخش می‌تواند محل نمایش نمودار (Chart.js یا هر کتابخانه‌ی دیگر) باشد.
                                در حال حاضر فقط به صورت استاتیک نمایش داده شده است.
                            </p>
                            <div class="bg-light rounded-3 p-3 text-center text-muted small">
                                جایگاه نمودار آمار مقالات در ماه‌های اخیر
                                <br>
                                <span class="d-block mt-2">
                                    مثال: فروردین ۸ مقاله، اسفند ۵ مقاله، بهمن ۳ مقاله
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </main>
@endsection
