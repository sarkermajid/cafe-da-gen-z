 <nav class="sidebar">
      <div class="sidebar-header">
        <a href="#" class="sidebar-brand">
          Admin<span> Panel</span>
        </a>
        <div class="sidebar-toggler not-active">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
      <div class="sidebar-body">
        <ul class="nav">
          <li class="nav-item nav-category">Main</li>
          <li class="nav-item">
            <a href="{{ route('admin.dashboard') }}" class="nav-link">
              <i class="link-icon" data-feather="box"></i>
              <span class="link-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item nav-category">Cafe Da Gen Z</li>

          <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.daily.market') }}">
              <i class="link-icon" data-feather="chevron-right"></i>
              <span class="link-title">Daily Market</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.daily.expense') }}">
              <i class="link-icon" data-feather="chevron-right"></i>
              <span class="link-title">Daily Expense</span>
            </a>
          </li>

           <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.menu.price') }}">
              <i class="link-icon" data-feather="chevron-right"></i>
              <span class="link-title">Menu & Pricing</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.daily.sells') }}">
              <i class="link-icon" data-feather="chevron-right"></i>
              <span class="link-title">Daily Sells</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.daily.profit') }}">
              <i class="link-icon" data-feather="chevron-right"></i>
              <span class="link-title">Daily Profit</span>
            </a>
          </li>

        </ul>
      </div>
    </nav>
