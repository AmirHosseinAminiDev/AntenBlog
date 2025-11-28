<div id="layoutSidenav_nav">
    <nav class="snav shadow-right snav-light">
        <div class="snav-menu">
            <div class="nav accordion" id="accordionSidenav">

                <!-- هسته -->
                <div class="snav-menu-heading">هسته</div>

                <!-- داشبورد -->
                <a class="nav-link" href="/admin/dashboard">
                    <div class="nav-link-icon"><i class="bx bx-pulse"></i></div>
                    داشبورد
                </a>

                <!-- مدیریت محتوا -->
                <div class="snav-menu-heading">مدیریت محتوا</div>

                <!-- مقالات -->
                <a class="nav-link collapsed" href="javascript:void(0);" data-bs-toggle="collapse"
                   data-bs-target="#collapsePosts" aria-expanded="false" aria-controls="collapsePosts">
                    <div class="nav-link-icon"><i class="bx bx-news"></i></div>
                    مقالات
                    <div class="snav-collapse-arrow"><i class="bx bx-chevron-down"></i></div>
                </a>
                <div class="collapse" id="collapsePosts" data-bs-parent="#accordionSidenav">
                    <nav class="snav-menu-nested nav">
                        <a class="nav-link" href="/admin/posts">لیست مقالات</a>
                        <a class="nav-link" href="/admin/posts/create">ایجاد مقاله جدید</a>
                        <a class="nav-link" href="/admin/posts/drafts">پیش‌نویس‌ها</a>
                        <a class="nav-link" href="/admin/posts/trashed">آرشیو / حذف‌شده‌ها</a>
                    </nav>
                </div>

                <!-- دسته‌بندی‌ها -->
                <a class="nav-link collapsed" href="javascript:void(0);" data-bs-toggle="collapse"
                   data-bs-target="#collapseCategories" aria-expanded="false" aria-controls="collapseCategories">
                    <div class="nav-link-icon"><i class="bx bx-category"></i></div>
                    دسته‌بندی‌ها
                    <div class="snav-collapse-arrow"><i class="bx bx-chevron-down"></i></div>
                </a>
                <div class="collapse" id="collapseCategories" data-bs-parent="#accordionSidenav">
                    <nav class="snav-menu-nested nav">
                        <a class="nav-link" href="/admin/categories">لیست دسته‌بندی‌ها</a>
                        <a class="nav-link" href="/admin/categories/create">ایجاد دسته‌بندی جدید</a>
                    </nav>
                </div>

                <!-- تگ‌ها / برچسب‌ها -->
                <a class="nav-link collapsed" href="javascript:void(0);" data-bs-toggle="collapse"
                   data-bs-target="#collapseTags" aria-expanded="false" aria-controls="collapseTags">
                    <div class="nav-link-icon"><i class="bx bx-purchase-tag"></i></div>
                    تگ‌ها / برچسب‌ها
                    <div class="snav-collapse-arrow"><i class="bx bx-chevron-down"></i></div>
                </a>
                <div class="collapse" id="collapseTags" data-bs-parent="#accordionSidenav">
                    <nav class="snav-menu-nested nav">
                        <a class="nav-link" href="/admin/tags">لیست تگ‌ها</a>
                        <a class="nav-link" href="/admin/tags/create">ایجاد تگ جدید</a>
                    </nav>
                </div>

                <!-- نظرات -->
                <a class="nav-link collapsed" href="javascript:void(0);" data-bs-toggle="collapse"
                   data-bs-target="#collapseComments" aria-expanded="false" aria-controls="collapseComments">
                    <div class="nav-link-icon"><i class="bx bx-message-detail"></i></div>
                    نظرات
                    <div class="snav-collapse-arrow"><i class="bx bx-chevron-down"></i></div>
                </a>
                <div class="collapse" id="collapseComments" data-bs-parent="#accordionSidenav">
                    <nav class="snav-menu-nested nav">
                        <a class="nav-link" href="/admin/comments">همه نظرات</a>
                        <a class="nav-link" href="/admin/comments/pending">در انتظار تأیید</a>
                        <a class="nav-link" href="/admin/comments/approved">تأیید شده‌ها</a>
                        <a class="nav-link" href="/admin/comments/spam">اسپم / رد شده</a>
                    </nav>
                </div>

                <!-- کاربران -->
                <div class="snav-menu-heading">کاربران</div>

                <a class="nav-link collapsed" href="javascript:void(0);" data-bs-toggle="collapse"
                   data-bs-target="#collapseUsers" aria-expanded="false" aria-controls="collapseUsers">
                    <div class="nav-link-icon"><i class="bx bx-user"></i></div>
                    کاربران
                    <div class="snav-collapse-arrow"><i class="bx bx-chevron-down"></i></div>
                </a>
                <div class="collapse" id="collapseUsers" data-bs-parent="#accordionSidenav">
                    <nav class="snav-menu-nested nav">
                        <a class="nav-link" href="/admin/users">لیست کاربران</a>
                        <a class="nav-link" href="/admin/users/create">ایجاد کاربر جدید</a>
                        <a class="nav-link" href="/admin/roles">نقش‌ها و دسترسی‌ها</a>
                    </nav>
                </div>

                <!-- تنظیمات -->
                <div class="snav-menu-heading">تنظیمات</div>

                <a class="nav-link collapsed" href="javascript:void(0);" data-bs-toggle="collapse"
                   data-bs-target="#collapseSettings" aria-expanded="false" aria-controls="collapseSettings">
                    <div class="nav-link-icon"><i class="bx bx-cog"></i></div>
                    تنظیمات
                    <div class="snav-collapse-arrow"><i class="bx bx-chevron-down"></i></div>
                </a>
                <div class="collapse" id="collapseSettings" data-bs-parent="#accordionSidenav">
                    <nav class="snav-menu-nested nav">
                        <a class="nav-link" href="/admin/settings/general">تنظیمات عمومی</a>
                        <a class="nav-link" href="/admin/settings/appearance">ظاهر / قالب</a>
                        <a class="nav-link" href="/admin/settings/seo">SEO و متاها</a>
                        <a class="nav-link" href="/admin/settings/comments">تنظیمات نظرات</a>
                    </nav>
                </div>

            </div>
        </div>
    </nav>
</div>
