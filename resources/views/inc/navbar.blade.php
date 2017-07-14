<nav class="navbar navbar-inverse">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/">Website</a>
    </div>
    <div id="navbar" class="navbar-collapse collapse">
      <ul class="nav navbar-nav">
        <li class="{{ Request::segment(1) === '/' ? 'active' : null }}"><a href="/">Home</a></li>
        <li class="{{ Request::segment(1) === 'about' ? 'active' : null }}"><a href="about">About</a></li>
        <li class="{{ Request::segment(1) === 'contact' ? 'active' : null }}"><a href="contact">Contact</a></li>
      </ul>
    </div><!--/.nav-collapse -->
  </div>
</nav>