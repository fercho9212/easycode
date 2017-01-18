<nav class="hoverable ">
  <div class="nav-wrapper light-blue darken-4">
    <a href="#" class="brand-logo">Logo</a>
    <a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons">menu</i></a>
    <ul id="nav-mobile" class="right hide-on-med-and-down">
      <li><a class="dropdown-button" href="#!" data-activates="dropdown1">Users<i class="material-icons right">arrow_drop_down</i></a></li>
      <li><a class="dropdown-button" href="#!" data-activates="dropdown2">Artículos<i class="material-icons right">arrow_drop_down</i></a></li>
      <li><a href="collapsible.html"></a></li>
    </ul>
  </div>

</nav>
<ul id="slide-out" class="side-nav fixed">
    <li><div class="userView">
      <div class="background">
        <img src="http://lorempixel.com/300/200/">
      </div>
      <a href="#!user"><img class="circle" src="http://lorempixel.com/50/50/"></a>
      <a href="#!name"><span class="white-text name">John Doe</span></a>
      <a href="#!email"><span class="white-text email">jdandturk@gmail.com</span></a>
    </div></li>
    <li><a href="#!"><i class="material-icons">cloud</i>First Link With Icon</a></li>
    <li><div class="divider"></div></li>
    <li><a class="subheader">Subheader</a></li>
    <li class="no-padding">
        <ul class="collapsible collapsible-accordion">
          <li>
            <a class="collapsible-header">Users<i class="material-icons">arrow_drop_down</i></a>
            <div class="collapsible-body">
              <ul>
                <li><a href="{{ route('users.create')}}">Create</a></li>
                <li><a href="{{ route('users.index')}}">listar</a></li>
              </ul>
            </div>
          </li>
        </ul>
    </li>
    <li class="no-padding">
        <ul class="collapsible collapsible-accordion">
          <li>
            <a class="collapsible-header">Articulos<i class="material-icons">arrow_drop_down</i></a>
            <div class="collapsible-body">
              <ul>
                <li><a href="{{ route('users.create')}}">Create</a></li>
                <li><a href="{{ route('users.index')}}">listar</a></li>
              </ul>
            </div>
          </li>
        </ul>
    </li>

</ul>
<!-- Dropdown Structure -->
<ul id="dropdown1" class="dropdown-content">
  <li><a href="{{ route('users.index') }}">List</a></li>
  <li><a href="{{ route('users.create') }}">Create</a></li>
</ul>
<ul id="dropdown2" class="dropdown-content">
  <li><a href="{{ route('users.index') }}">List</a></li>
  <li><a href="{{ route('users.create') }}">Create</a></li>
</ul>
