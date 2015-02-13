<ul class="sidebar-menu">
  <li><a href="{{ URL::to('dashboard') }}"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
  <li><a href="{{ route('bills.index') }}"><i class="fa fa-calendar"></i> <span>Bills</span></a></li>
  <li><a href="{{ route('receipts.index') }}"><i class="fa fa-th"></i> <span>Receipts</span></a></li>
  <?php /*
  <li><a href="{{ route('files.index') }}"><i class="fa fa-folder"></i> <span>Files</span></a></li>
  */ ?>
  <li><a href="{{ route('notes.index') }}"><i class="fa fa-save"></i> <span>Notes</span></a></li>
  @if (Auth::user()->user_type < 2)
  <li><a href="{{ URL::to('payment-centers') }}"><i class="fa fa-bookmark"></i> <span>Payment Centers</span></a></li>
  <?php /*
  <li><a href="{{ route('landmarks.index') }}"><i class="fa fa-map-marker"></i> <span>Landmarks</span></a></li>
  */ ?>
  <li><a href="{{ URL::to('contact') }}"><i class="fa fa-envelope"></i> <span>Contact Forms</span></a></li>
  <li><a href="{{ route('users.index') }}"><i class="fa fa-users"></i> <span>Users</span></a></li>
  @endif
</ul>