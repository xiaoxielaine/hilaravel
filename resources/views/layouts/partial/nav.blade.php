<header class="am-topbar am-topbar-fixed-top php-topbar-inverse">
     	<div class="am-g am-g-fixed">
		    <div class="am-u-lg-12 am-u-md-12 am-u-sm-12">
		    	<h1 class="am-topbar-brand">
			      <a href="{{ url('home/index') }}">
			           <img src="{{ asset('images/bbs.png') }}" alt="标识" class="am-img-thumbnail am-circle" id="php-img-flag">&nbsp; 
			           <span class="am-kai php-text-white">PHP 学习</span>
			      </a>
			    </h1>
		        <button class="am-topbar-btn am-topbar-toggle am-btn am-btn-sm am-btn-secondary am-show-sm-only am-icon-bars" data-am-collapse="{target: '#collapse-head'}">
		    		<span class="am-sr-only">导航切换</span>
		    		<span></span>
		    	</button>		    	   				
				{{-- <form action="{{ action('Home\UserController@search') }}" class="am-topbar-form am-form-horizontal am-u-sm-5 " method="post">
					<input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <label class="am-topbar-form am-u-sm-7 am-form-label">搜索：</label>                    
                    <input type="text" name="keyword" placeholder="关键字" class="php-input am-topbar-form am-radius" required style="width:40%;display:inline-block">                                                          
                </form> --}}
				<div class="am-collapse am-topbar-collapse" id="collapse-head">
					<div class="am-topbar-right">
				        @if (Auth::check())
				            <a href="" class="am-btn php-button am-margin-top-xs">
					     	  <i class="am-icon-user php-text-white"></i>&nbsp;
					     	  <span class="php-text-white">{{ Auth::user()->name }}</span>
					     	</a>
				            <a href="{{  url('home/logout') }}"  class="am-btn php-button am-margin-top-xs">
					     	  	<i class="am-icon-sign-out php-text-white"></i>&nbsp;
					     	  	<span class="php-text-white">注销</span>
					     	</a>			            			            
			            @else
				            <button class="am-btn am-btn-primary am-topbar-btn am-btn-sm am-radius" onclick="window.location.href='{{ url('home/login') }}'">
				     	  		<span class="am-icon-user"></span> 登录
				     	    </button>
				        @endif
				    </div>
				</div>
        	</div>
        </div>
</header>
<script type="text/javascript">
  jQuery(document).ready(function(){
    jQuery("form[role='search']").find("input").bind("focus",function(){
      jQuery(this).animate({
        width: "+=50px",
        paddingLeft: "+=10px"
      },"normal");
    }).blur(function(){
      jQuery(this).animate({
        width: "-=50px",
        paddingLeft: "-=10px"
      },"normal");
    });
  });
</script>