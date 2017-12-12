<div class="mf-docs-section">
  <h1 id="inputs" class="page-header">Input</h1>
  <h2>Basic</h2>
  <div class="mf-code-show">

      <input type="text" class="form-control" placeholder="Username" aria-describedby="basic-addon0">

    <div class="input-group">
      <span class="input-group-addon" id="basic-addon1">@</span>
      <input type="text" class="form-control" placeholder="Username" aria-describedby="basic-addon1">
    </div>
    <br>
    <div class="input-group">
      <input type="text" class="form-control" placeholder="Recipient's username" aria-describedby="basic-addon2">
      <span class="input-group-addon" id="basic-addon2">@example.com</span>
    </div>
    <br>
    <div class="input-group">
      <span class="input-group-addon">$</span>
      <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
      <span class="input-group-addon">.00</span>
    </div>
    <br>
    <label for="basic-url">Your vanity URL</label>
    <div class="input-group">
      <span class="input-group-addon" id="basic-addon3">https://example.com/users/</span>
      <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
    </div>
  </div>
  <pre><code data-language="html"><input type="text" class="form-control" placeholder="Username" aria-describedby="basic-addon0">
    <div class="input-group">
    <span class="input-group-addon" id="basic-addon1">@</span>
    <input type="text" class="form-control" placeholder="Username" aria-describedby="basic-addon1">
  </div>
  <br>
  <div class="input-group">
    <input type="text" class="form-control" placeholder="Recipient's username" aria-describedby="basic-addon2">
    <span class="input-group-addon" id="basic-addon2">@example.com</span>
  </div>
  <br>
  <div class="input-group">
    <span class="input-group-addon">$</span>
    <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
    <span class="input-group-addon">.00</span>
  </div>
  <br>
  <label for="basic-url">Your vanity URL</label>
  <div class="input-group">
    <span class="input-group-addon" id="basic-addon3">https://example.com/users/</span>
    <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
  </div></code></pre>

  <h2>Sizing</h2>
  <div class="mf-code-show">
    <div class="input-group input-group-lg">
      <span class="input-group-addon" id="sizing-addon1">@</span>
      <input type="text" class="form-control" placeholder="Username" aria-describedby="sizing-addon1">
    </div>
    <br>
    <div class="input-group">
      <span class="input-group-addon" id="sizing-addon2">@</span>
      <input type="text" class="form-control" placeholder="Username" aria-describedby="sizing-addon2">
    </div>
    <br>
    <div class="input-group input-group-sm">
      <span class="input-group-addon" id="sizing-addon3">@</span>
      <input type="text" class="form-control" placeholder="Username" aria-describedby="sizing-addon3">
    </div>
  </div>
  <pre><code data-language="html"><div class="input-group input-group-lg">
    <span class="input-group-addon" id="sizing-addon1">@</span>
    <input type="text" class="form-control" placeholder="Username" aria-describedby="sizing-addon1">
  </div>
  <br>
  <div class="input-group">
    <span class="input-group-addon" id="sizing-addon2">@</span>
    <input type="text" class="form-control" placeholder="Username" aria-describedby="sizing-addon2">
  </div>
  <br>
  <div class="input-group input-group-sm">
    <span class="input-group-addon" id="sizing-addon3">@</span>
    <input type="text" class="form-control" placeholder="Username" aria-describedby="sizing-addon3">
  </div></code></pre>

  <h2>Checkboxes and radio addons</h2>
  <div class="mf-code-show">
    <div class="row">
      <div class="col-lg-6">
        <div class="input-group">
          <span class="input-group-addon">
            <input type="checkbox" aria-label="Checkbox for following text input">
          </span>
          <input type="text" class="form-control" aria-label="Text input with checkbox">
        </div><!-- /input-group -->
      </div><!-- /.col-lg-6 -->
      <div class="col-lg-6">
        <div class="input-group">
          <span class="input-group-addon">
            <input type="radio" aria-label="Radio button for following text input">
          </span>
          <input type="text" class="form-control" aria-label="Text input with radio button">
        </div><!-- /input-group -->
      </div><!-- /.col-lg-6 -->
    </div><!-- /.row -->
  </div>
  <pre><code data-language="html"><div class="row">
    <div class="col-lg-6">
      <div class="input-group">
        <span class="input-group-addon">
          <input type="checkbox" aria-label="Checkbox for following text input">
        </span>
        <input type="text" class="form-control" aria-label="Text input with checkbox">
      </div><!-- /input-group -->
    </div><!-- /.col-lg-6 -->
    <div class="col-lg-6">
      <div class="input-group">
        <span class="input-group-addon">
          <input type="radio" aria-label="Radio button for following text input">
        </span>
        <input type="text" class="form-control" aria-label="Text input with radio button">
      </div><!-- /input-group -->
    </div><!-- /.col-lg-6 -->
  </div><!-- /.row --></code></pre>

  <h2>Button addons</h2>
  <div class="mf-code-show">
    <div class="row">
      <div class="col-lg-6">
        <div class="input-group">
          <span class="input-group-btn">
            <button class="btn btn-default" type="button">Go!</button>
          </span>
          <input type="text" class="form-control" placeholder="Search for...">
        </div><!-- /input-group -->
      </div><!-- /.col-lg-6 -->
      <div class="col-lg-6">
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Search for...">
          <span class="input-group-btn">
            <button class="btn btn-default" type="button">Go!</button>
          </span>
        </div><!-- /input-group -->
      </div><!-- /.col-lg-6 -->
    </div><!-- /.row -->
  </div>
  <pre><code data-language="html"><div class="row">
    <div class="col-lg-6">
      <div class="input-group">
        <span class="input-group-btn">
          <button class="btn btn-default" type="button">Go!</button>
        </span>
        <input type="text" class="form-control" placeholder="Search for...">
      </div><!-- /input-group -->
    </div><!-- /.col-lg-6 -->
    <div class="col-lg-6">
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Search for...">
        <span class="input-group-btn">
          <button class="btn btn-default" type="button">Go!</button>
        </span>
      </div><!-- /input-group -->
    </div><!-- /.col-lg-6 -->
  </div><!-- /.row --></code></pre>

  <h2>Buttons with dropdowns</h2>
  <div class="mf-code-show">
    <div class="row">
      <div class="col-lg-6">
        <div class="input-group">
          <div class="input-group-btn">
            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action <span class="caret"></span></button>
            <ul class="dropdown-menu">
              <li><a href="#">Action</a></li>
              <li><a href="#">Another action</a></li>
              <li><a href="#">Something else here</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="#">Separated link</a></li>
            </ul>
          </div><!-- /btn-group -->
          <input type="text" class="form-control" aria-label="Text input with dropdown button">
        </div><!-- /input-group -->
      </div><!-- /.col-lg-6 -->
      <div class="col-lg-6">
        <div class="input-group">
          <input type="text" class="form-control" aria-label="Text input with dropdown button">
          <div class="input-group-btn">
            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action <span class="caret"></span></button>
            <ul class="dropdown-menu dropdown-menu-right">
              <li><a href="#">Action</a></li>
              <li><a href="#">Another action</a></li>
              <li><a href="#">Something else here</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="#">Separated link</a></li>
            </ul>
          </div><!-- /btn-group -->
        </div><!-- /input-group -->
      </div><!-- /.col-lg-6 -->
    </div><!-- /.row -->
  </div>
  <pre><code data-language="html"><div class="row">
    <div class="col-lg-6">
      <div class="input-group">
        <div class="input-group-btn">
          <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action <span class="caret"></span></button>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </div><!-- /btn-group -->
        <input type="text" class="form-control" aria-label="Text input with dropdown button">
      </div><!-- /input-group -->
    </div><!-- /.col-lg-6 -->
    <div class="col-lg-6">
      <div class="input-group">
        <input type="text" class="form-control" aria-label="Text input with dropdown button">
        <div class="input-group-btn">
          <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action <span class="caret"></span></button>
          <ul class="dropdown-menu dropdown-menu-right">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </div><!-- /btn-group -->
      </div><!-- /input-group -->
    </div><!-- /.col-lg-6 -->
  </div><!-- /.row --></code></pre>

  <h2>Segmented buttons</h2>
  <div class="mf-code-show">
    <div class="row">
      <div class="col-lg-6">
        <div class="input-group">
          <div class="input-group-btn">
            <button type="button" class="btn btn-default">Action</button>
            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <span class="caret"></span>
              <span class="sr-only">Toggle Dropdown</span>
            </button>
            <ul class="dropdown-menu">
              <li><a href="#">Action</a></li>
              <li><a href="#">Another action</a></li>
              <li><a href="#">Something else here</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="#">Separated link</a></li>
            </ul>
          </div>
          <input type="text" class="form-control" aria-label="Text input with segmented button dropdown">
        </div><!-- /.input-group -->
      </div><!-- /.col-lg-6 -->
      <div class="col-lg-6">
        <div class="input-group">
          <input type="text" class="form-control" aria-label="Text input with segmented button dropdown">
          <div class="input-group-btn">
            <button type="button" class="btn btn-default">Action</button>
            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <span class="caret"></span>
              <span class="sr-only">Toggle Dropdown</span>
            </button>
            <ul class="dropdown-menu dropdown-menu-right">
              <li><a href="#">Action</a></li>
              <li><a href="#">Another action</a></li>
              <li><a href="#">Something else here</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="#">Separated link</a></li>
            </ul>
          </div>
        </div><!-- /.input-group -->
      </div><!-- /.col-lg-6 -->
    </div><!-- /.row -->
  </div>
  <pre><code data-language="html"><div class="row">
    <div class="col-lg-6">
      <div class="input-group">
        <div class="input-group-btn">
          <button type="button" class="btn btn-default">Action</button>
          <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <span class="caret"></span>
            <span class="sr-only">Toggle Dropdown</span>
          </button>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </div>
        <input type="text" class="form-control" aria-label="Text input with segmented button dropdown">
      </div><!-- /.input-group -->
    </div><!-- /.col-lg-6 -->
    <div class="col-lg-6">
      <div class="input-group">
        <input type="text" class="form-control" aria-label="Text input with segmented button dropdown">
        <div class="input-group-btn">
          <button type="button" class="btn btn-default">Action</button>
          <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <span class="caret"></span>
            <span class="sr-only">Toggle Dropdown</span>
          </button>
          <ul class="dropdown-menu dropdown-menu-right">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </div>
      </div><!-- /.input-group -->
    </div><!-- /.col-lg-6 -->
  </div><!-- /.row --></code></pre>

  <h2>Multiple buttons</h2>
  <div class="mf-code-show">
    <div class="row">
      <div class="col-lg-6">
        <div class="input-group">
          <div class="input-group-btn">
            <button type="button" class="btn btn-default" aria-label="Bold">X</button>
            <button type="button" class="btn btn-default" aria-label="Italic">Y</button>
          </div>
          <input type="text" class="form-control" aria-label="Text input with multiple buttons">
        </div><!-- /.input-group -->
      </div><!-- /.col-lg-6 -->
      <div class="col-lg-6">
        <div class="input-group">
          <input type="text" class="form-control" aria-label="Text input with multiple buttons">
          <div class="input-group-btn">
            <button type="button" class="btn btn-default" aria-label="Help">Z</button>
            <button type="button" class="btn btn-default">Action</button>
          </div>
        </div><!-- /.input-group -->
      </div><!-- /.col-lg-6 -->
    </div><!-- /.row -->
  </div>
  <pre><code data-language="html"><div class="row">
    <div class="col-lg-6">
      <div class="input-group">
        <div class="input-group-btn">
          <button type="button" class="btn btn-default" aria-label="Bold">X</button>
          <button type="button" class="btn btn-default" aria-label="Italic">Y</button>
        </div>
        <input type="text" class="form-control" aria-label="Text input with multiple buttons">
      </div><!-- /.input-group -->
    </div><!-- /.col-lg-6 -->
    <div class="col-lg-6">
      <div class="input-group">
        <input type="text" class="form-control" aria-label="Text input with multiple buttons">
        <div class="input-group-btn">
          <button type="button" class="btn btn-default" aria-label="Help">Z</button>
          <button type="button" class="btn btn-default">Action</button>
        </div>
      </div><!-- /.input-group -->
    </div><!-- /.col-lg-6 -->
  </div><!-- /.row --></code></pre>

</div>
