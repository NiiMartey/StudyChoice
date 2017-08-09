<header>

  <!-- Top Bar -->
  <div class="top-bar">
    <div class="container-fluid">

      <!-- Topbar Left -->
      @if (Route::has('login'))
      <div class="topbar-left">
        <ul>
          @if (Auth::check())
              <a href="{{ url('/home') }}">Home</a>
          @else
            <li><a href="{{ url('/welcome') }}"><i class="fa fa-sign-in"></i>Login / Register</a></li>
            <!-- <li><a href="{{ url('/register') }}"><i class="fa fa-user-register"></i>Register</a></li> -->
          @endif
            <li><i class="fa fa-phone"></i>(233) - 555 - 188889</li>
            <li><i class="fa fa-envelope"></i><a class="__cf_email__" href="../../cdn-cgi/l/email-protection/index.html" data-cfemail="5e373038311e1f2c372d2a312a323b703b3a2b">[email&#160;protected]</a><script data-cfhash='f9e31' type="text/javascript">/* <![CDATA[ */!function(t,e,r,n,c,a,p){try{t=document.currentScript||function(){for(t=document.getElementsByTagName('script'),e=t.length;e--;)if(t[e].getAttribute('data-cfhash'))return t[e]}();if(t&&(c=t.previousSibling)){p=t.parentNode;if(a=c.getAttribute('data-cfemail')){for(e='',r='0x'+a.substr(0,2)|0,n=2;a.length-n;n+=2)e+='%'+('0'+('0x'+a.substr(n,2)^r).toString(16)).slice(-2);p.replaceChild(document.createTextNode(decodeURIComponent(e)),c)}p.removeChild(t)}}catch(u){}}()/* ]]> */</script></li>
        </ul>
      </div>
      @endif
      <!-- Topbar Left -->

      <!-- Topbar right -->
      <div class="topbar-right">
        <ul>
          <li>
            <form class="search-bar">
              <input class="form-control" type="search" placeholder="search infomation...">
              <a class="fa fa-search" href="#"></a>
            </form>
          </li>
          <!-- <li>
            <div class="cart">
              <a class="fa fa-shopping-cart" href="#"></a>
              <span class="number-cart">1</span>
            </div>
          </li> -->
        </ul>
      </div>
      <!-- Topbar right -->

    </div>
  </div>
  <!-- Top Bar -->

  <!-- Nav -->
  @include('partials.navbar-main')

@if(Request::is('/'))
  <!-- Animated Slider -->
  @include('partials.home.slider-animated')
@endif
</header>
