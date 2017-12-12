<div class="mf-docs-section">
  <h1 id="dropdowns" class="page-header">Dropdowns</h1>

  <p class="lead">Toggleable, contextual menu for displaying lists of links. Made interactive with the <a href="../javascript/#dropdowns">dropdown JavaScript plugin</a>.</p>

  <h2>Basic</h2>
  <div class="mf-code-show">
    <div class="dropdown">
      <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
        Dropdown
        <span class="caret"></span>
      </button>
      <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
        <li class="dropdown-header">Dropdown header</li>
        <li><a href="#">Action</a></li>
        <li><a href="#">Another action</a></li>
        <li class="disabled"><a href="#">Disabled link</a></li>
        <li role="separator" class="divider"></li>
        <li><a href="#">Something else here</a></li>
      </ul>
    </div>
  </div>
  <pre><code data-language="html"><div class="dropdown">
   <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Dropdown <span class="caret"></span></button>
   <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
      <li class="dropdown-header">Dropdown header</li>
      <li><a href="#">Action</a></li>
      <li><a href="#">Another action</a></li>
      <li class="disabled"><a href="#">Disabled link</a></li>
      <li role="separator" class="divider"></li>
      <li><a href="#">Something else here</a></li>
   </ul>
</div></code></pre>

<h2>Dropup</h2>
<p>Dropdown menus can be changed to expand upwards (instead of downwards) by adding <code>.dropup</code> to the parent.</p>
<div class="mf-code-show">
  <div class="dropup">
    <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropup <span class="caret"></span></button>
    <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
      <li><a href="#">Action</a></li>
      <li><a href="#">Another action</a></li>
      <li><a href="#">Something else here</a></li>
      <li role="separator" class="divider"></li>
      <li><a href="#">Separated link</a></li>
    </ul>
  </div>
</div>
<pre><code data-language="html"><div class="dropup">
  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropup <span class="caret"></span></button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
    <li><a href="#">Action</a></li>
    <li><a href="#">Another action</a></li>
    <li><a href="#">Something else here</a></li>
    <li role="separator" class="divider"></li>
    <li><a href="#">Separated link</a></li>
  </ul>
</div></code></pre>
</div>
