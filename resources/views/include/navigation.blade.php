<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Menu</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">Stackode</a>
    </div>
    <div id="navbar" class="collapse navbar-collapse">
        <ul class="nav navbar-nav">
            <li class="{{ isActiveRoute('home') }}">{!! HTML::linkRoute('home', 'Home') !!}</li>
            <li class="{{ isActiveRoute('about') }}"><a href="#about">About</a></li>
            <li class="{{ isActiveRoute('blogs') }}">{!! HTML::linkRoute('blogs', 'Blog') !!}</li>
            <li class="{{ isActiveRoute('contact') }}"><a href="#contact">Contact</a></li>            
        </ul>
    </div><!--/.nav-collapse -->
  </div>
</nav>