<nav 
class="navbar navbar-expand-md navbar-dark bg-dark ">
        <a class="navbar-brand" href="/">{{config('app.name', 'LSAPP')}}</a>
        <button class="navbar-toggler" 
        type="button" data-toggle="collapse" 
        data-target="#navbarsExampleDefault" 
        aria-controls="navbarsExampleDefault" 
        aria-expanded="false" 
        aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" 
        id="navbarsExampleDefault">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="/">
                  Home 
                  <span class="sr-only">(current)</span>
                </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/services" 
              tabindex="-1">
              Services
            </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/posts" 
                tabindex="-1">
                Blog
              </a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="/posts/create" 
                  tabindex="-1">
                  Create Post
                </a>
                </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
              <div class="dropdown-menu" aria-labelledby="dropdown01">
                <a class="dropdown-item" href="#">
                    Action
                </a>
                <a class="dropdown-item" href="#">
                    Another action
                </a>
                <a class="dropdown-item" href="#">
                    Something else here
                </a>
              </div>
            </li>
          </ul>
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" 
            type="text" placeholder="Search" 
            aria-label="Search">
            <button 
            class="btn btn-secondary my-2 my-sm-0" 
            type="submit">
            Search
        </button>
          </form>
        </div>
      </nav>