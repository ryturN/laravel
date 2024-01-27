<nav class="navbar navbar-expand-lg bg-warning">
    <div class="container">
      <a class="navbar-brand" href="#">Testing Blog</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link {{ ($title === 'Welcome'? 'active':'')}}" aria-current="page" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title === 'About'? 'active' : '')}}" href="/about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{($title === 'Blog' ? 'active' : '')}}" href="/blog">Blog</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
