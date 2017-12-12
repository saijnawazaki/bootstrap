<div class="mf-docs-section">
  <h1 id="Navs" class="page-header">Navs</h1>

  <h2 id="navs-tabs">Tabs</h2>
  <div class="mf-code-show">
    <div class="dropdown">
      <ul class="nav nav-tabs">
        <li role="presentation" class="active"><a href="#">Home</a></li>
        <li role="presentation"><a href="#">Profile</a></li>
        <li role="presentation"><a href="#">Messages</a></li>
      </ul>
    </div>
  </div>
  <pre><code data-language="html"><ul class="nav nav-tabs">
      <li role="presentation" class="active"><a href="#">Home</a></li>
      <li role="presentation"><a href="#">Profile</a></li>
      <li role="presentation"><a href="#">Messages</a></li>
</ul></code></pre>

<h2 id="navs-pills">Pills</h2>
<div class="mf-code-show">
  <ul class="nav nav-pills">
    <li role="presentation" class="active"><a href="#">Home</a></li>
    <li role="presentation"><a href="#">Profile</a></li>
    <li role="presentation"><a href="#">Messages</a></li>
  </ul>
</div>
<pre><code data-language="html"><ul class="nav nav-pills">
  <li role="presentation" class="active"><a href="#">Home</a></li>
  <li role="presentation"><a href="#">Profile</a></li>
  <li role="presentation"><a href="#">Messages</a></li>
</ul></code></pre>

<p>Pills are also vertically stackable. Just add <code>.nav-stacked</code>.</p>

<div class="mf-code-show">
  <ul class="nav nav-pills nav-stacked nav-pills-stacked-example">
    <li role="presentation" class="active"><a href="#">Home</a></li>
    <li role="presentation"><a href="#">Profile</a></li>
    <li role="presentation"><a href="#">Messages</a></li>
  </ul>
</div>
<pre><code data-language="html"><ul class="nav nav-pills nav-stacked nav-pills-stacked-example">
  <li role="presentation" class="active"><a href="#">Home</a></li>
  <li role="presentation"><a href="#">Profile</a></li>
  <li role="presentation"><a href="#">Messages</a></li>
</ul></code></pre>

<h2 id="navs-justified">Justified</h2>
<div class="mf-code-show">
  <div class="dropdown">
    <ul class="nav nav-tabs nav-justified">
      <li role="presentation" class="active"><a href="#">Home</a></li>
      <li role="presentation"><a href="#">Profile</a></li>
      <li role="presentation"><a href="#">Messages</a></li>
    </ul>
    <br>
    <ul class="nav nav-pills nav-justified">
      <li role="presentation" class="active"><a href="#">Home</a></li>
      <li role="presentation"><a href="#">Profile</a></li>
      <li role="presentation"><a href="#">Messages</a></li>
    </ul>
  </div>
</div>
<pre><code data-language="html">  <ul class="nav nav-tabs nav-justified">
    <li role="presentation" class="active"><a href="#">Home</a></li>
    <li role="presentation"><a href="#">Profile</a></li>
    <li role="presentation"><a href="#">Messages</a></li>
  </ul>
  <br>
  <ul class="nav nav-pills nav-justified">
    <li role="presentation" class="active"><a href="#">Home</a></li>
    <li role="presentation"><a href="#">Profile</a></li>
    <li role="presentation"><a href="#">Messages</a></li>
  </ul></code></pre>

  <h2 id="navs-disabled-links">Disabled links</h2>
  <div class="mf-code-show">
    <ul class="nav nav-pills">
      <li role="presentation"><a href="#">Clickable link</a></li>
      <li role="presentation"><a href="#">Clickable link</a></li>
      <li role="presentation" class="disabled"><a href="#">Disabled link</a></li>
    </ul>
  </div>
  <pre><code data-language="html"><ul class="nav nav-pills">
    <li role="presentation"><a href="#">Clickable link</a></li>
    <li role="presentation"><a href="#">Clickable link</a></li>
    <li role="presentation" class="disabled"><a href="#">Disabled link</a></li>
  </ul></code></pre>

  <h2 id="navs-dropdowns">Using dropdowns</h2>

  <div class="mf-code-show">
    <ul class="nav nav-tabs">
      <li role="presentation" class="active"><a href="#">Home</a></li>
      <li role="presentation"><a href="#">Help</a></li>
      <li role="presentation" class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
          Dropdown <span class="caret"></span>
        </a>
        <ul class="dropdown-menu">
          <li><a href="#">Action</a></li>
          <li><a href="#">Another action</a></li>
          <li><a href="#">Something else here</a></li>
          <li role="separator" class="divider"></li>
          <li><a href="#">Separated link</a></li>
        </ul>
      </li>
    </ul>
  </div>
  <pre><code data-language="html"><ul class="nav nav-tabs">
    <li role="presentation" class="active"><a href="#">Home</a></li>
    <li role="presentation"><a href="#">Help</a></li>
    <li role="presentation" class="dropdown">
      <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
        Dropdown <span class="caret"></span>
      </a>
      <ul class="dropdown-menu">
        <li><a href="#">Action</a></li>
        <li><a href="#">Another action</a></li>
        <li><a href="#">Something else here</a></li>
        <li role="separator" class="divider"></li>
        <li><a href="#">Separated link</a></li>
      </ul>
    </li>
  </ul></code></pre>

  <h3>Pills with dropdowns</h3>
  <div class="mf-code-show">
    <ul class="nav nav-pills">
      <li role="presentation" class="active"><a href="#">Home</a></li>
      <li role="presentation"><a href="#">Help</a></li>
      <li role="presentation" class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
          Dropdown <span class="caret"></span>
        </a>
        <ul class="dropdown-menu">
          <li><a href="#">Action</a></li>
          <li><a href="#">Another action</a></li>
          <li><a href="#">Something else here</a></li>
          <li role="separator" class="divider"></li>
          <li><a href="#">Separated link</a></li>
        </ul>
      </li>
    </ul>
  </div>
  <pre><code data-language="html"><ul class="nav nav-pills">
    <li role="presentation" class="active"><a href="#">Home</a></li>
    <li role="presentation"><a href="#">Help</a></li>
    <li role="presentation" class="dropdown">
      <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
        Dropdown <span class="caret"></span>
      </a>
      <ul class="dropdown-menu">
        <li><a href="#">Action</a></li>
        <li><a href="#">Another action</a></li>
        <li><a href="#">Something else here</a></li>
        <li role="separator" class="divider"></li>
        <li><a href="#">Separated link</a></li>
      </ul>
    </li>
  </ul></code></pre>

  <h3>Breadcrumbs</h3>

  <div class="mf-code-show">
    <ol class="breadcrumb">
      <li class="active">Home</li>
    </ol>
    <ol class="breadcrumb">
      <li><a href="#">Home</a></li>
      <li class="active">Library</li>
    </ol>
    <ol class="breadcrumb">
      <li><a href="#">Home</a></li>
      <li><a href="#">Library</a></li>
      <li class="active">Data</li>
    </ol>
  </div>
  <pre><code data-language="html"><ol class="breadcrumb">
    <li class="active">Home</li>
  </ol>
  <ol class="breadcrumb">
    <li><a href="#">Home</a></li>
    <li class="active">Library</li>
  </ol>
  <ol class="breadcrumb">
    <li><a href="#">Home</a></li>
    <li><a href="#">Library</a></li>
    <li class="active">Data</li>
  </ol></code></pre>

  <h3>List group</h3>

  <div class="mf-code-show">
    <ul class="list-group">
      <li class="list-group-item">Cras justo odio</li>
      <li class="list-group-item">Dapibus ac facilisis in</li>
      <li class="list-group-item">Morbi leo risus</li>
      <li class="list-group-item">Porta ac consectetur ac</li>
      <li class="list-group-item">Vestibulum at eros</li>
    </ul>
  </div>
  <pre><code data-language="html"><ul class="list-group">
    <li class="list-group-item">Cras justo odio</li>
    <li class="list-group-item">Dapibus ac facilisis in</li>
    <li class="list-group-item">Morbi leo risus</li>
    <li class="list-group-item">Porta ac consectetur ac</li>
    <li class="list-group-item">Vestibulum at eros</li>
  </ul></code></pre>

  <h2 id="list-group-badges">Badges</h2>

  <div class="mf-code-show">
    <ul class="list-group">
      <li class="list-group-item">
        <span class="badge">14</span>
        Cras justo odio
      </li>
      <li class="list-group-item">
        <span class="badge">2</span>
        Dapibus ac facilisis in
      </li>
      <li class="list-group-item">
        <span class="badge">1</span>
        Morbi leo risus
      </li>
    </ul>
  </div>
  <pre><code data-language="html"><ul class="list-group">
    <li class="list-group-item">
      <span class="badge">14</span>
      Cras justo odio
    </li>
    <li class="list-group-item">
      <span class="badge">2</span>
      Dapibus ac facilisis in
    </li>
    <li class="list-group-item">
      <span class="badge">1</span>
      Morbi leo risus
    </li>
  </ul></code></pre>

  <h2 id="list-group-linked">Linked items</h2>

  <div class="mf-code-show">
    <div class="list-group">
      <a href="#" class="list-group-item active">
        Cras justo odio
      </a>
      <a href="#" class="list-group-item">Dapibus ac facilisis in</a>
      <a href="#" class="list-group-item">Morbi leo risus</a>
      <a href="#" class="list-group-item">Porta ac consectetur ac</a>
      <a href="#" class="list-group-item">Vestibulum at eros</a>
    </div>
  </div>
  <pre><code data-language="html"><div class="list-group">
    <a href="#" class="list-group-item active">
      Cras justo odio
    </a>
    <a href="#" class="list-group-item">Dapibus ac facilisis in</a>
    <a href="#" class="list-group-item">Morbi leo risus</a>
    <a href="#" class="list-group-item">Porta ac consectetur ac</a>
    <a href="#" class="list-group-item">Vestibulum at eros</a>
  </div></code></pre>

  <h2 id="list-group-buttons">Button items</h2>

  <div class="mf-code-show">
    <div class="list-group">
      <button type="button" class="list-group-item">Cras justo odio</button>
      <button type="button" class="list-group-item">Dapibus ac facilisis in</button>
      <button type="button" class="list-group-item">Morbi leo risus</button>
      <button type="button" class="list-group-item">Porta ac consectetur ac</button>
      <button type="button" class="list-group-item">Vestibulum at eros</button>
    </div>
  </div>
  <pre><code data-language="html"><div class="list-group">
    <button type="button" class="list-group-item">Cras justo odio</button>
    <button type="button" class="list-group-item">Dapibus ac facilisis in</button>
    <button type="button" class="list-group-item">Morbi leo risus</button>
    <button type="button" class="list-group-item">Porta ac consectetur ac</button>
    <button type="button" class="list-group-item">Vestibulum at eros</button>
  </div></code></pre>

  <h2 id="list-group-disabled">Disabled items</h2>

  <div class="mf-code-show">
    <div class="list-group">
      <a href="#" class="list-group-item disabled">
        Cras justo odio
      </a>
      <a href="#" class="list-group-item">Dapibus ac facilisis in</a>
      <a href="#" class="list-group-item">Morbi leo risus</a>
      <a href="#" class="list-group-item">Porta ac consectetur ac</a>
      <a href="#" class="list-group-item">Vestibulum at eros</a>
    </div>
  </div>
  <pre><code data-language="html"><div class="list-group">
    <a href="#" class="list-group-item disabled">
      Cras justo odio
    </a>
    <a href="#" class="list-group-item">Dapibus ac facilisis in</a>
    <a href="#" class="list-group-item">Morbi leo risus</a>
    <a href="#" class="list-group-item">Porta ac consectetur ac</a>
    <a href="#" class="list-group-item">Vestibulum at eros</a>
  </div></code></pre>

  <h2 id="list-group-contextual-classes">Contextual classes</h2>

  <div class="mf-code-show">
    <div class="row">
      <div class="col-sm-6">
        <ul class="list-group">
          <li class="list-group-item list-group-item-success">Dapibus ac facilisis in</li>
          <li class="list-group-item list-group-item-info">Cras sit amet nibh libero</li>
          <li class="list-group-item list-group-item-warning">Porta ac consectetur ac</li>
          <li class="list-group-item list-group-item-danger">Vestibulum at eros</li>
        </ul>
      </div>
      <div class="col-sm-6">
        <div class="list-group">
          <a href="#" class="list-group-item list-group-item-success">Dapibus ac facilisis in</a>
          <a href="#" class="list-group-item list-group-item-info">Cras sit amet nibh libero</a>
          <a href="#" class="list-group-item list-group-item-warning">Porta ac consectetur ac</a>
          <a href="#" class="list-group-item list-group-item-danger">Vestibulum at eros</a>
        </div>
      </div>
    </div>
  </div>
  <pre><code data-language="html"><div class="row">
    <div class="col-sm-6">
      <ul class="list-group">
        <li class="list-group-item list-group-item-success">Dapibus ac facilisis in</li>
        <li class="list-group-item list-group-item-info">Cras sit amet nibh libero</li>
        <li class="list-group-item list-group-item-warning">Porta ac consectetur ac</li>
        <li class="list-group-item list-group-item-danger">Vestibulum at eros</li>
      </ul>
    </div>
    <div class="col-sm-6">
      <div class="list-group">
        <a href="#" class="list-group-item list-group-item-success">Dapibus ac facilisis in</a>
        <a href="#" class="list-group-item list-group-item-info">Cras sit amet nibh libero</a>
        <a href="#" class="list-group-item list-group-item-warning">Porta ac consectetur ac</a>
        <a href="#" class="list-group-item list-group-item-danger">Vestibulum at eros</a>
      </div>
    </div>
  </div></code></pre>

  <h2 id="list-group-custom-content">Custom content</h2>

  <div class="mf-code-show">
    <div class="list-group">
      <a href="#" class="list-group-item active">
        <h4 class="list-group-item-heading">List group item heading</h4>
        <p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
      </a>
      <a href="#" class="list-group-item">
        <h4 class="list-group-item-heading">List group item heading</h4>
        <p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
      </a>
      <a href="#" class="list-group-item">
        <h4 class="list-group-item-heading">List group item heading</h4>
        <p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
      </a>
    </div>
  </div>
  <pre><code data-language="html"><div class="list-group">
    <a href="#" class="list-group-item active">
      <h4 class="list-group-item-heading">List group item heading</h4>
      <p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
    </a>
    <a href="#" class="list-group-item">
      <h4 class="list-group-item-heading">List group item heading</h4>
      <p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
    </a>
    <a href="#" class="list-group-item">
      <h4 class="list-group-item-heading">List group item heading</h4>
      <p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
    </a>
  </div></code></pre>

  <h2 id="panels-tables">With tables</h2>

  <div class="mf-code-show">
    <div class="panel panel-default">
      <!-- Default panel contents -->
      <div class="panel-heading">Panel heading</div>
      <div class="panel-body">
        <p>Some default panel content here. Nulla vitae elit libero, a pharetra augue. Aenean lacinia bibendum nulla sed consectetur. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
      </div>

      <!-- Table -->
      <table class="table">
        <thead>
          <tr>
            <th>#</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Username</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td>Larry</td>
            <td>the Bird</td>
            <td>@twitter</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
  <pre><code data-language="html"><div class="panel panel-default">
    <!-- Default panel contents -->
    <div class="panel-heading">Panel heading</div>
    <div class="panel-body">
      <p>Some default panel content here. Nulla vitae elit libero, a pharetra augue. Aenean lacinia bibendum nulla sed consectetur. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
    </div>

    <!-- Table -->
    <table class="table">
      <thead>
        <tr>
          <th>#</th>
          <th>First Name</th>
          <th>Last Name</th>
          <th>Username</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">1</th>
          <td>Mark</td>
          <td>Otto</td>
          <td>@mdo</td>
        </tr>
        <tr>
          <th scope="row">2</th>
          <td>Jacob</td>
          <td>Thornton</td>
          <td>@fat</td>
        </tr>
        <tr>
          <th scope="row">3</th>
          <td>Larry</td>
          <td>the Bird</td>
          <td>@twitter</td>
        </tr>
      </tbody>
    </table>
  </div></code></pre>

  <p>If there is no panel body, the component moves from panel header to table without interruption.</p>

  <div class="mf-code-show">
    <div class="panel panel-default">
      <!-- Default panel contents -->
      <div class="panel-heading">Panel heading</div>

      <!-- Table -->
      <table class="table">
        <thead>
          <tr>
            <th>#</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Username</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td>Larry</td>
            <td>the Bird</td>
            <td>@twitter</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
  <pre><code data-language="html"><div class="panel panel-default">
    <!-- Default panel contents -->
    <div class="panel-heading">Panel heading</div>

    <!-- Table -->
    <table class="table">
      <thead>
        <tr>
          <th>#</th>
          <th>First Name</th>
          <th>Last Name</th>
          <th>Username</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">1</th>
          <td>Mark</td>
          <td>Otto</td>
          <td>@mdo</td>
        </tr>
        <tr>
          <th scope="row">2</th>
          <td>Jacob</td>
          <td>Thornton</td>
          <td>@fat</td>
        </tr>
        <tr>
          <th scope="row">3</th>
          <td>Larry</td>
          <td>the Bird</td>
          <td>@twitter</td>
        </tr>
      </tbody>
    </table>
  </div></code></pre>

  <h2 id="panels-list-group">With list groups</h2>

  <div class="mf-code-show">
    <div class="panel panel-default">
      <!-- Default panel contents -->
      <div class="panel-heading">Panel heading</div>
      <div class="panel-body">
        <p>Some default panel content here. Nulla vitae elit libero, a pharetra augue. Aenean lacinia bibendum nulla sed consectetur. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
      </div>

      <!-- List group -->
      <ul class="list-group">
        <li class="list-group-item">Cras justo odio</li>
        <li class="list-group-item">Dapibus ac facilisis in</li>
        <li class="list-group-item">Morbi leo risus</li>
        <li class="list-group-item">Porta ac consectetur ac</li>
        <li class="list-group-item">Vestibulum at eros</li>
      </ul>
    </div>
  </div>
  <pre><code data-language="html"><div class="panel panel-default">
    <!-- Default panel contents -->
    <div class="panel-heading">Panel heading</div>
    <div class="panel-body">
      <p>Some default panel content here. Nulla vitae elit libero, a pharetra augue. Aenean lacinia bibendum nulla sed consectetur. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
    </div>

    <!-- List group -->
    <ul class="list-group">
      <li class="list-group-item">Cras justo odio</li>
      <li class="list-group-item">Dapibus ac facilisis in</li>
      <li class="list-group-item">Morbi leo risus</li>
      <li class="list-group-item">Porta ac consectetur ac</li>
      <li class="list-group-item">Vestibulum at eros</li>
    </ul>
  </div></code></pre>

</div>
