<div class="mf-docs-section">
  <h1 id="labels" class="page-header">Labels</h1>
<h2>Basic</h2>
<div class="mf-code-show">
  <h1>Example heading <span class="label label-default">New</span></h1>
  <h2>Example heading <span class="label label-default">New</span></h2>
  <h3>Example heading <span class="label label-default">New</span></h3>
  <h4>Example heading <span class="label label-default">New</span></h4>
  <h5>Example heading <span class="label label-default">New</span></h5>
  <h6>Example heading <span class="label label-default">New</span></h6>
</div>
<pre><code data-language="html"><h1>Example heading <span class="label label-default">New</span></h1>
<h2>Example heading <span class="label label-default">New</span></h2>
<h3>Example heading <span class="label label-default">New</span></h3>
<h4>Example heading <span class="label label-default">New</span></h4>
<h5>Example heading <span class="label label-default">New</span></h5>
<h6>Example heading <span class="label label-default">New</span></h6></code></pre>

<h2>Available variations</h2>

<div class="mf-code-show">
  <span class="label label-default">Default</span>
  <span class="label label-primary">Primary</span>
  <span class="label label-success">Success</span>
  <span class="label label-info">Info</span>
  <span class="label label-warning">Warning</span>
  <span class="label label-danger">Danger</span>
</div>
<pre><code data-language="html"><span class="label label-default">Default</span>
<span class="label label-primary">Primary</span>
<span class="label label-success">Success</span>
<span class="label label-info">Info</span>
<span class="label label-warning">Warning</span>
<span class="label label-danger">Danger</span></code></pre>

<h2>Badges</h2>

<div class="mf-code-show">
  <a href="#">Inbox <span class="badge">42</span></a>
  <br><br>
  <button class="btn btn-primary" type="button">
    Messages <span class="badge">4</span>
  </button>
</div>
<pre><code data-language="html"><a href="#">Inbox <span class="badge">42</span></a>
<br><br>
<button class="btn btn-primary" type="button">
  Messages <span class="badge">4</span>
</button></code></pre>

<h4>Adapts to active nav states</h4>
<div class="mf-code-show">
  <ul class="nav nav-pills" role="tablist">
    <li role="presentation" class="active"><a href="#">Home <span class="badge">42</span></a></li>
    <li role="presentation"><a href="#">Profile</a></li>
    <li role="presentation"><a href="#">Messages <span class="badge">3</span></a></li>
  </ul>
</div>
<pre><code data-language="html"><ul class="nav nav-pills" role="tablist">
  <li role="presentation" class="active"><a href="#">Home <span class="badge">42</span></a></li>
  <li role="presentation"><a href="#">Profile</a></li>
  <li role="presentation"><a href="#">Messages <span class="badge">3</span></a></li>
</ul></code></pre>

<h4>Jumbotron</h4>

<div class="mf-code-show">
  <div class="jumbotron">
    <h1>Hello, world!</h1>
    <p>This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
    <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a></p>
  </div>
</div>
<pre><code data-language="html"><div class="jumbotron">
  <h1>Hello, world!</h1>
  <p>This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
  <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a></p>
</div></code></pre>

<p>To make the jumbotron full width, and without rounded corners, place it outside all <code>.container</code>s and instead add a <code>.container</code> within.</p>

<div class="mf-code-show">
  <div class="jumbotron">
    <div class="container">
    <h1>Hello, world!</h1>
    <p>This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
    <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a></p>
    </div>
  </div>
</div>
<pre><code data-language="html"><div class="jumbotron">
  <div class="container">
  <h1>Hello, world!</h1>
  <p>This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
  <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a></p>
  </div>
</div></code></pre>

<h4>Page header</h4>

<div class="mf-code-show">
  <div class="page-header">
    <h1>Example page header <small>Subtext for header</small></h1>
  </div>
</div>
<pre><code data-language="html"><div class="page-header">
  <h1>Example page header <small>Subtext for header</small></h1>
</div></code></pre>

<h2>Alerts</h2>

<div class="mf-code-show">
  <div class="alert alert-success" role="alert">
    <strong>Well done!</strong> You successfully read this important alert message.
  </div>
  <div class="alert alert-info" role="alert">
    <strong>Heads up!</strong> This alert needs your attention, but it's not super important.
  </div>
  <div class="alert alert-warning" role="alert">
    <strong>Warning!</strong> Better check yourself, you're not looking too good.
  </div>
  <div class="alert alert-danger" role="alert">
    <strong>Oh snap!</strong> Change a few things up and try submitting again.
  </div>
</div>
<pre><code data-language="html"><div class="alert alert-success" role="alert">
  <strong>Well done!</strong> You successfully read this important alert message.
</div>
<div class="alert alert-info" role="alert">
  <strong>Heads up!</strong> This alert needs your attention, but it's not super important.
</div>
<div class="alert alert-warning" role="alert">
  <strong>Warning!</strong> Better check yourself, you're not looking too good.
</div>
<div class="alert alert-danger" role="alert">
  <strong>Oh snap!</strong> Change a few things up and try submitting again.
</div></code></pre>

<h2>Dismissible alerts</h2>

<div class="mf-code-show">
  <div class="alert alert-warning alert-dismissible" role="alert">
    <button type="button" class="mf-close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    <strong>Warning!</strong> Better check yourself, you're not looking too good.
  </div>
</div>
<pre><code data-language="html"><div class="alert alert-warning alert-dismissible" role="alert">
  <button type="button" class="mf-close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Warning!</strong> Better check yourself, you're not looking too good.
</div></code></pre>

<h2>Links in alerts</h2>

<div class="mf-code-show">
  <div class="alert alert-success" role="alert">
    <strong>Well done!</strong> You successfully read <a href="#" class="alert-link">this important alert message</a>.
  </div>
  <div class="alert alert-info" role="alert">
    <strong>Heads up!</strong> This <a href="#" class="alert-link">alert needs your attention</a>, but it's not super important.
  </div>
  <div class="alert alert-warning" role="alert">
    <strong>Warning!</strong> Better check yourself, you're <a href="#" class="alert-link">not looking too good</a>.
  </div>
  <div class="alert alert-danger" role="alert">
    <strong>Oh snap!</strong> <a href="#" class="alert-link">Change a few things up</a> and try submitting again.
  </div>
</div>
<pre><code data-language="html"><div class="alert alert-success" role="alert">
  <strong>Well done!</strong> You successfully read <a href="#" class="alert-link">this important alert message</a>.
</div>
<div class="alert alert-info" role="alert">
  <strong>Heads up!</strong> This <a href="#" class="alert-link">alert needs your attention</a>, but it's not super important.
</div>
<div class="alert alert-warning" role="alert">
  <strong>Warning!</strong> Better check yourself, you're <a href="#" class="alert-link">not looking too good</a>.
</div>
<div class="alert alert-danger" role="alert">
  <strong>Oh snap!</strong> <a href="#" class="alert-link">Change a few things up</a> and try submitting again.
</div></code></pre>

<h2>Media Object</h2>

<div class="mf-code-show">
  <div class="media">
    <div class="media-left">
      <a href="#">
        <img class="media-object" data-src="holder.js/64x64" alt="Generic placeholder image">
      </a>
    </div>
    <div class="media-body">
      <h4 class="media-heading">Media heading</h4>
      Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
    </div>
  </div>
  <div class="media">
    <div class="media-left">
      <a href="#">
        <img class="media-object" data-src="holder.js/64x64" alt="Generic placeholder image">
      </a>
    </div>
    <div class="media-body">
      <h4 class="media-heading">Media heading</h4>
      Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
      <div class="media">
        <div class="media-left">
          <a href="#">
            <img class="media-object" data-src="holder.js/64x64" alt="Generic placeholder image">
          </a>
        </div>
        <div class="media-body">
          <h4 class="media-heading">Nested media heading</h4>
          Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
        </div>
      </div>
    </div>
  </div>
  <div class="media">
    <div class="media-body">
      <h4 class="media-heading">Media heading</h4>
      Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.
    </div>
    <div class="media-right">
      <a href="#">
        <img class="media-object" data-src="holder.js/64x64" alt="Generic placeholder image">
      </a>
    </div>
  </div>
  <div class="media">
    <div class="media-left">
      <a href="#">
        <img class="media-object" data-src="holder.js/64x64" alt="Generic placeholder image">
      </a>
    </div>
    <div class="media-body">
      <h4 class="media-heading">Media heading</h4>
      Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.
    </div>
    <div class="media-right">
      <a href="#">
        <img class="media-object" data-src="holder.js/64x64" alt="Generic placeholder image">
      </a>
    </div>
  </div>
</div>
<pre><code data-language="html"><div class="media">
  <div class="media-left">
    <a href="#">
      <img class="media-object" data-src="holder.js/64x64" alt="Generic placeholder image">
    </a>
  </div>
  <div class="media-body">
    <h4 class="media-heading">Media heading</h4>
    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
  </div>
</div>
<div class="media">
  <div class="media-left">
    <a href="#">
      <img class="media-object" data-src="holder.js/64x64" alt="Generic placeholder image">
    </a>
  </div>
  <div class="media-body">
    <h4 class="media-heading">Media heading</h4>
    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
    <div class="media">
      <div class="media-left">
        <a href="#">
          <img class="media-object" data-src="holder.js/64x64" alt="Generic placeholder image">
        </a>
      </div>
      <div class="media-body">
        <h4 class="media-heading">Nested media heading</h4>
        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
      </div>
    </div>
  </div>
</div>
<div class="media">
  <div class="media-body">
    <h4 class="media-heading">Media heading</h4>
    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.
  </div>
  <div class="media-right">
    <a href="#">
      <img class="media-object" data-src="holder.js/64x64" alt="Generic placeholder image">
    </a>
  </div>
</div>
<div class="media">
  <div class="media-left">
    <a href="#">
      <img class="media-object" data-src="holder.js/64x64" alt="Generic placeholder image">
    </a>
  </div>
  <div class="media-body">
    <h4 class="media-heading">Media heading</h4>
    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.
  </div>
  <div class="media-right">
    <a href="#">
      <img class="media-object" data-src="holder.js/64x64" alt="Generic placeholder image">
    </a>
  </div>
</div></code></pre>

<p>The classes <code>.pull-left</code> and <code>.pull-right</code> also exist and were previously used as part of the media component, but are deprecated for that use as of v3.3.0. They are approximately equivalent to <code>.media-left</code> and <code>.media-right</code>, except that <code>.media-right</code> should be placed after the <code>.media-body</code> in the html.</p>
<h2 id="media-alignment">Media alignment</h2>

<div class="mf-code-show">
  <div class="media">
    <div class="media-left">
      <a href="#">
        <img class="media-object" data-src="holder.js/64x64" alt="Generic placeholder image">
      </a>
    </div>
    <div class="media-body">
      <h4 class="media-heading">Top aligned media</h4>
      <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
      <p>Donec sed odio dui. Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
    </div>
  </div>
  <div class="media">
    <div class="media-left media-middle">
      <a href="#">
        <img class="media-object" data-src="holder.js/64x64" alt="Generic placeholder image">
      </a>
    </div>
    <div class="media-body">
      <h4 class="media-heading">Middle aligned media</h4>
      <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
      <p>Donec sed odio dui. Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
    </div>
  </div>
  <div class="media">
    <div class="media-left media-bottom">
      <a href="#">
        <img class="media-object" data-src="holder.js/64x64" alt="Generic placeholder image">
      </a>
    </div>
    <div class="media-body">
      <h4 class="media-heading">Bottom aligned media</h4>
      <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
      <p>Donec sed odio dui. Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
    </div>
  </div>
</div>
<pre><code data-language="html"><div class="media">
  <div class="media-left">
    <a href="#">
      <img class="media-object" data-src="holder.js/64x64" alt="Generic placeholder image">
    </a>
  </div>
  <div class="media-body">
    <h4 class="media-heading">Top aligned media</h4>
    <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
    <p>Donec sed odio dui. Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
  </div>
</div>
<div class="media">
  <div class="media-left media-middle">
    <a href="#">
      <img class="media-object" data-src="holder.js/64x64" alt="Generic placeholder image">
    </a>
  </div>
  <div class="media-body">
    <h4 class="media-heading">Middle aligned media</h4>
    <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
    <p>Donec sed odio dui. Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
  </div>
</div>
<div class="media">
  <div class="media-left media-bottom">
    <a href="#">
      <img class="media-object" data-src="holder.js/64x64" alt="Generic placeholder image">
    </a>
  </div>
  <div class="media-body">
    <h4 class="media-heading">Bottom aligned media</h4>
    <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
    <p>Donec sed odio dui. Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
  </div>
</div></code></pre>

<h2 id="media-list">Media list</h2>
<p>With a bit of extra markup, you can use media inside list (useful for comment threads or articles lists).</p>

<div class="mf-code-show">
  <ul class="media-list">
    <li class="media">
      <div class="media-left">
        <a href="#">
          <img class="media-object" data-src="holder.js/64x64" alt="Generic placeholder image">
        </a>
      </div>
      <div class="media-body">
        <h4 class="media-heading">Media heading</h4>
        <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.</p>
        <!-- Nested media object -->
        <div class="media">
          <div class="media-left">
            <a href="#">
              <img class="media-object" data-src="holder.js/64x64" alt="Generic placeholder image">
            </a>
          </div>
          <div class="media-body">
            <h4 class="media-heading">Nested media heading</h4>
            Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.
            <!-- Nested media object -->
            <div class="media">
              <div class="media-left">
                <a href="#">
                  <img class="media-object" data-src="holder.js/64x64" alt="Generic placeholder image">
                </a>
              </div>
              <div class="media-body">
                <h4 class="media-heading">Nested media heading</h4>
                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.
              </div>
            </div>
          </div>
        </div>
        <!-- Nested media object -->
        <div class="media">
          <div class="media-left">
            <a href="#">
              <img class="media-object" data-src="holder.js/64x64" alt="Generic placeholder image">
            </a>
          </div>
          <div class="media-body">
            <h4 class="media-heading">Nested media heading</h4>
            Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.
          </div>
        </div>
      </div>
    </li>
  </ul>
</div>
<pre><code data-language="html"><ul class="media-list">
  <li class="media">
    <div class="media-left">
      <a href="#">
        <img class="media-object" data-src="holder.js/64x64" alt="Generic placeholder image">
      </a>
    </div>
    <div class="media-body">
      <h4 class="media-heading">Media heading</h4>
      <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.</p>
      <!-- Nested media object -->
      <div class="media">
        <div class="media-left">
          <a href="#">
            <img class="media-object" data-src="holder.js/64x64" alt="Generic placeholder image">
          </a>
        </div>
        <div class="media-body">
          <h4 class="media-heading">Nested media heading</h4>
          Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.
          <!-- Nested media object -->
          <div class="media">
            <div class="media-left">
              <a href="#">
                <img class="media-object" data-src="holder.js/64x64" alt="Generic placeholder image">
              </a>
            </div>
            <div class="media-body">
              <h4 class="media-heading">Nested media heading</h4>
              Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.
            </div>
          </div>
        </div>
      </div>
      <!-- Nested media object -->
      <div class="media">
        <div class="media-left">
          <a href="#">
            <img class="media-object" data-src="holder.js/64x64" alt="Generic placeholder image">
          </a>
        </div>
        <div class="media-body">
          <h4 class="media-heading">Nested media heading</h4>
          Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.
        </div>
      </div>
    </div>
  </li>
</ul></code></pre>

<h2>Default well</h2>

<div class="mf-code-show">
  <div class="well">
    Look, I'm in a well!
  </div>
</div>
<pre><code data-language="html"><div class="well">
  Look, I'm in a well!
</div></code></pre>

<h2>Optional classes</h2>
<p>Control padding and rounded corners with two optional modifier classes.</p>

<div class="mf-code-show">
  <div class="well well-lg">
    Look, I'm in a large well!
  </div>
</div>
<pre><code data-language="html"><div class="well well-lg">
  Look, I'm in a large well!
</div></code></pre>

<p>Small</p>

<div class="mf-code-show">
  <div class="well well-sm">
    Look, I'm in a small well!
  </div>
</div>
<pre><code data-language="html"><div class="well well-sm">
  Look, I'm in a small well!
</div></code></pre>

</div>
