@extends('company.programmers.main')

@section('title', 'Chat')

@section('page')
  <div class="chat-page">
    <aside class="online-aside">
      <div class="online-aside__glass">
        <div class="online-aside__head">
          <h3>Online Users</h3>
          <span class="online-aside__count">
            <i></i>
            <span id="onlineCount">0</span>
          </span>
        </div>
        <div class="input-box">
          <input type="text" placeholder="Search for any thing..." id="searchInput" data-no-style/>
        </div>
        <div class="contacts" id="usersList">
          <div class="contact is-online">
            <div class="avatar img" data-name="Ahmed Mostafa" data-image="https://i.pravatar.cc/150?img=12"></div>
            <div class="meta">
              <div class="top">
                <h3>Ahmed Mostafa</h3>
                <span class="status">Online</span>
              </div>
              <span class="message">تمام، سأرسل لك الملف الآن.</span>
              <div class="bottom">
                <span class="time">Typing now</span>
              </div>
            </div>
            <span class="dot"></span>
          </div>
          <div class="contact is-online">
            <div class="avatar img" data-name="Sara Ali"></div>
            <div class="meta">
              <div class="top">
                <h3>Sara Ali</h3>
                <span class="status">Online</span>
              </div>
              <span class="message">ممكن نراجع التصميم مرة ثانية؟</span>
              <div class="bottom">
                <span class="time">1 min ago</span>
              </div>
            </div>
            <span class="dot"></span>
          </div>
          <div class="contact is-offline">
            <div class="avatar img" data-name="Mohamed Omar" data-image="https://i.pravatar.cc/150?img=32"></div>
            <div class="meta">
              <div class="top">
                <h3>Mohamed Omar</h3>
                <span class="status">Offline</span>
              </div>
              <span class="message">تم، أرسلها في الصباح.</span>
              <div class="bottom">
                <span class="time">Last seen 12m ago</span>
              </div>
            </div>
            <span class="dot"></span>
          </div>
          <div class="contact is-online">
            <div class="avatar img" data-name="Lina Nabil"></div>
            <div class="meta">
              <div class="top">
                <h3>Lina Nabil</h3>
                <span class="status">Online</span>
              </div>
              <span class="message">أضفت آخر تعديل على الصفحة.</span>
              <div class="bottom">
                <span class="time">5 sec ago</span>
              </div>
            </div>
            <span class="dot"></span>
          </div>
          <div class="contact is-offline">
            <div class="avatar img" data-name="Youssef Adel"></div>
            <div class="meta">
              <div class="top">
                <h3>Youssef Adel</h3>
                <span class="status">Offline</span>
              </div>
              <span class="message">سأعود إليك لاحقًا.</span>
              <div class="bottom">
                <span class="time">Last seen 1h ago</span>
              </div>
            </div>
            <span class="dot"></span>
          </div>
        </div>
      </div>
    </aside>
    <x-components::company.chat />
  </div>
  <script src="{{ asset('js/company/programmers/chats/chat.js') }}"></script>
  <script src="{{ asset('js/chat.js') }}"></script>
@endsection