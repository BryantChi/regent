<li class="nav-item mb-4">
    <a href="{{ route('index') }}" target="_blank" class="nav-link">
        <span class="h5 mr-2 brand-image"><i class="fas fa-external-link-alt"></i></span>
        <p class="h5"> 瀏覽網站</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('admin.adminUsers.index') }}"
        class="nav-link {{ Request::is('admin/adminUsers*') ? 'active' : '' }}">
        <span class="mr-2 brand-image"><i class="fas fa-users-cog"></i></span>
        <p> 管理員</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('admin.seoSettings.index') }}"
       class="nav-link {{ Request::is('admin/seoSettings*') ? 'active' : '' }}">
       <span class="mr-2 brand-image"><i class="fas fa-search"></i></span>
        <p>Seo設定</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('admin.caseInfos.index') }}" class="nav-link {{ Request::is('admin/caseInfos*') ? 'active' : '' }}">
        <span class="mr-2 brand-image"><i class="fas fa-images"></i></span>
        <p>案例作品</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('admin.categories.index') }}" class="nav-link {{ Request::is('admin/categories*') ? 'active' : '' }}">
        <span class="mr-2 brand-image"><i class="fas fa-folder-open"></i></span>
        <p>案例分類</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('admin.activityInfos.index') }}" class="nav-link {{ Request::is('admin/activityInfos*') ? 'active' : '' }}">
        <span class="mr-2 brand-image"><i class="fas fa-calendar-alt"></i></span>
        <p>活動訊息</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('admin.classifications.index') }}" class="nav-link {{ Request::is('admin/classifications*') ? 'active' : '' }}">
        <span class="mr-2 brand-image"><i class="fas fa-folder-open"></i></span>
        <p>活動分類</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('admin.requirements.index') }}" class="nav-link {{ Request::is('admin/requirements*') ? 'active' : '' }}">
        <span class="mr-2 brand-image"><i class="fas fa-file-alt"></i></span>
        <p>需求表單</p>
    </a>
</li>

{{-- <li class="nav-item">
    <a href="{{ route('admin.marqueeInfos.index') }}"
       class="nav-link {{ Request::is('admin/marqueeInfos*') ? 'active' : '' }}">
       <span class="mr-2 brand-image"><i class="fas fa-bullhorn"></i></span>
        <p>跑馬燈資訊</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('admin.newsInfos.index') }}"
       class="nav-link {{ Request::is('admin/newsInfos*') ? 'active' : '' }}">
       <span class="mr-2 brand-image"><i class="fas fa-newspaper"></i></span>
        <p>最新消息</p>
    </a>
</li> --}}


