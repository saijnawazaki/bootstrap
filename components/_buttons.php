<div class="mf-docs-section">
  <h1 id="buttons" class="page-header">Button groups</h1>

  <p class="lead">Group a series of buttons together on a single line with the button group. Add on optional JavaScript radio and checkbox style behavior with <a href="../javascript/#buttons">our buttons plugin</a>.</p>

  <h2>Basic</h2>
  <p><code>&lt;a&gt;</code> version</p>
  <div class="mf-code-show">
    <a href="#" class="btn btn-default">Default</a>
    <a href="#" class="btn btn-primary">Primary</a>
    <a href="#" class="btn btn-success">Success</a>
    <a href="#" class="btn btn-info">Info</a>
    <a href="#" class="btn btn-warning">Warning</a>
    <a href="#" class="btn btn-danger">Danger</a>
  </div>
  <pre><code data-language="html"><a href="#" class="btn btn-default">Default</a>
  <a href="#" class="btn btn-primary">Primary</a>
  <a href="#" class="btn btn-success">Success</a>
  <a href="#" class="btn btn-info">Info</a>
  <a href="#" class="btn btn-warning">Warning</a>
  <a href="#" class="btn btn-danger">Danger</a></code></pre>

  <p><code>&lt;button&gt;</code> version</p>
  <div class="mf-code-show">
    <button href="#" class="btn btn-default">Default</button>
    <button href="#" class="btn btn-primary">Primary</button>
    <button href="#" class="btn btn-success">Success</button>
    <button href="#" class="btn btn-info">Info</button>
    <button href="#" class="btn btn-warning">Warning</button>
    <button href="#" class="btn btn-danger">Danger</button>
  </div>
  <pre><code data-language="html"><button href="#" class="btn btn-default">Default</button>
  <button href="#" class="btn btn-primary">Primary</button>
  <button href="#" class="btn btn-success">Success</button>
  <button href="#" class="btn btn-info">Info</button>
  <button href="#" class="btn btn-warning">Warning</button>
  <button href="#" class="btn btn-danger">Danger</button></code></pre>

  <h2>Basic</h2>
  <div class="mf-code-show">
    <div class="dropdown">
      <div class="btn-group" role="group" aria-label="...">
        <button type="button" class="btn btn-default">Left</button>
        <button type="button" class="btn btn-default">Middle</button>
        <button type="button" class="btn btn-default">Right</button>
      </div>
    </div>
  </div>
  <pre><code data-language="html"><div class="btn-group" role="group" aria-label="...">
    <button type="button" class="btn btn-default">Left</button>
    <button type="button" class="btn btn-default">Middle</button>
    <button type="button" class="btn btn-default">Right</button>
  </div></code></pre>

  <h2>Button Toolbar</h2>
  <div class="mf-code-show">
    <div class="btn-toolbar" role="toolbar">
      <div class="btn-group" role="group">
        <button type="button" class="btn btn-default">1</button>
        <button type="button" class="btn btn-default">2</button>
        <button type="button" class="btn btn-default">3</button>
        <button type="button" class="btn btn-default">4</button>
      </div>
      <div class="btn-group" role="group">
        <button type="button" class="btn btn-default">5</button>
        <button type="button" class="btn btn-default">6</button>
        <button type="button" class="btn btn-default">7</button>
      </div>
      <div class="btn-group" role="group">
        <button type="button" class="btn btn-default">8</button>
      </div>
    </div>
  </div>
  <pre><code data-language="html"><div class="btn-toolbar" role="toolbar">
    <div class="btn-group" role="group">
      <button type="button" class="btn btn-default">1</button>
      <button type="button" class="btn btn-default">2</button>
      <button type="button" class="btn btn-default">3</button>
      <button type="button" class="btn btn-default">4</button>
    </div>
    <div class="btn-group" role="group">
      <button type="button" class="btn btn-default">5</button>
      <button type="button" class="btn btn-default">6</button>
      <button type="button" class="btn btn-default">7</button>
    </div>
    <div class="btn-group" role="group">
      <button type="button" class="btn btn-default">8</button>
    </div>
  </div></code></pre>

  <h2>Sizing</h2>
  <p>Button Group</p>
  <div class="mf-code-show">
    <div class="btn-group btn-group-lg" role="group">
      <button type="button" class="btn btn-default">Left</button>
      <button type="button" class="btn btn-default">Middle</button>
      <button type="button" class="btn btn-default">Right</button>
    </div>
    <br>
    <div class="btn-group" role="group">
      <button type="button" class="btn btn-default">Left</button>
      <button type="button" class="btn btn-default">Middle</button>
      <button type="button" class="btn btn-default">Right</button>
    </div>
    <br>
    <div class="btn-group btn-group-sm" role="group">
      <button type="button" class="btn btn-default">Left</button>
      <button type="button" class="btn btn-default">Middle</button>
      <button type="button" class="btn btn-default">Right</button>
    </div>
    <br>
    <div class="btn-group btn-group-xs" role="group">
      <button type="button" class="btn btn-default">Left</button>
      <button type="button" class="btn btn-default">Middle</button>
      <button type="button" class="btn btn-default">Right</button>
    </div>
  </div>
  <pre><code data-language="html"><div class="btn-group btn-group-lg" role="group">
    <button type="button" class="btn btn-default">Left</button>
    <button type="button" class="btn btn-default">Middle</button>
    <button type="button" class="btn btn-default">Right</button>
  </div>
  <br>
  <div class="btn-group" role="group">
    <button type="button" class="btn btn-default">Left</button>
    <button type="button" class="btn btn-default">Middle</button>
    <button type="button" class="btn btn-default">Right</button>
  </div>
  <br>
  <div class="btn-group btn-group-sm" role="group">
    <button type="button" class="btn btn-default">Left</button>
    <button type="button" class="btn btn-default">Middle</button>
    <button type="button" class="btn btn-default">Right</button>
  </div>
  <br>
  <div class="btn-group btn-group-xs" role="group">
    <button type="button" class="btn btn-default">Left</button>
    <button type="button" class="btn btn-default">Middle</button>
    <button type="button" class="btn btn-default">Right</button>
  </div></code></pre>

  <p>Button dropdown</p>
  <div class="mf-code-show">
    <div class="btn-toolbar" role="toolbar">
      <div class="btn-group">
        <button class="btn btn-default btn-lg dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Large button <span class="caret"></span>
        </button>
        <ul class="dropdown-menu">
          <li><a href="#">Action</a></li>
          <li><a href="#">Another action</a></li>
          <li><a href="#">Something else here</a></li>
          <li role="separator" class="divider"></li>
          <li><a href="#">Separated link</a></li>
        </ul>
      </div><!-- /btn-group -->
    </div><!-- /btn-toolbar -->
    <div class="btn-toolbar" role="toolbar">
      <div class="btn-group">
        <button class="btn btn-default btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Small button <span class="caret"></span>
        </button>
        <ul class="dropdown-menu">
          <li><a href="#">Action</a></li>
          <li><a href="#">Another action</a></li>
          <li><a href="#">Something else here</a></li>
          <li role="separator" class="divider"></li>
          <li><a href="#">Separated link</a></li>
        </ul>
      </div><!-- /btn-group -->
    </div><!-- /btn-toolbar -->
    <div class="btn-toolbar" role="toolbar">
      <div class="btn-group">
        <button class="btn btn-default btn-xs dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Extra small button <span class="caret"></span>
        </button>
        <ul class="dropdown-menu">
          <li><a href="#">Action</a></li>
          <li><a href="#">Another action</a></li>
          <li><a href="#">Something else here</a></li>
          <li role="separator" class="divider"></li>
          <li><a href="#">Separated link</a></li>
        </ul>
      </div><!-- /btn-group -->
    </div><!-- /btn-toolbar -->
  </div>
  <pre><code data-language="html"><div class="btn-toolbar" role="toolbar">
    <div class="btn-group">
      <button class="btn btn-default btn-lg dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Large button <span class="caret"></span>
      </button>
      <ul class="dropdown-menu">
        <li><a href="#">Action</a></li>
        <li><a href="#">Another action</a></li>
        <li><a href="#">Something else here</a></li>
        <li role="separator" class="divider"></li>
        <li><a href="#">Separated link</a></li>
      </ul>
    </div><!-- /btn-group -->
  </div><!-- /btn-toolbar -->
  <div class="btn-toolbar" role="toolbar">
    <div class="btn-group">
      <button class="btn btn-default btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Small button <span class="caret"></span>
      </button>
      <ul class="dropdown-menu">
        <li><a href="#">Action</a></li>
        <li><a href="#">Another action</a></li>
        <li><a href="#">Something else here</a></li>
        <li role="separator" class="divider"></li>
        <li><a href="#">Separated link</a></li>
      </ul>
    </div><!-- /btn-group -->
  </div><!-- /btn-toolbar -->
  <div class="btn-toolbar" role="toolbar">
    <div class="btn-group">
      <button class="btn btn-default btn-xs dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Extra small button <span class="caret"></span>
      </button>
      <ul class="dropdown-menu">
        <li><a href="#">Action</a></li>
        <li><a href="#">Another action</a></li>
        <li><a href="#">Something else here</a></li>
        <li role="separator" class="divider"></li>
        <li><a href="#">Separated link</a></li>
      </ul>
    </div><!-- /btn-group -->
  </div><!-- /btn-toolbar --></code></pre>

  <h2>Nesting</h2>
  <p>Place a <code>.btn-group</code> within another <code>.btn-group</code> when you want dropdown menus mixed with a series of buttons.</p>
  <div class="mf-code-show">
    <div class="btn-group" role="group">
      <button type="button" class="btn btn-default">1</button>
      <button type="button" class="btn btn-default">2</button>

      <div class="btn-group" role="group">
        <button id="btnGroupDrop1" type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
          <span class="caret"></span>
        </button>
        <ul class="dropdown-menu">
          <li><a href="#">Dropdown link</a></li>
          <li><a href="#">Dropdown link</a></li>
        </ul>
      </div>
    </div>
  </div>
  <pre><code data-language="html"><div class="btn-group" role="group">
    <button type="button" class="btn btn-default">1</button>
    <button type="button" class="btn btn-default">2</button>

    <div class="btn-group" role="group">
      <button id="btnGroupDrop1" type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Dropdown
        <span class="caret"></span>
      </button>
      <ul class="dropdown-menu">
        <li><a href="#">Dropdown link</a></li>
        <li><a href="#">Dropdown link</a></li>
      </ul>
    </div>
  </div></code></pre>

  <h2>Vertical Variation</h2>
  <div class="mf-code-show">
    <div class="btn-group-vertical" role="group">
      <button type="button" class="btn btn-default">Button</button>
      <button type="button" class="btn btn-default">Button</button>
      <div class="btn-group" role="group">
        <button id="btnGroupVerticalDrop1" type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
          <span class="caret"></span>
        </button>
        <ul class="dropdown-menu">
          <li><a href="#">Dropdown link</a></li>
          <li><a href="#">Dropdown link</a></li>
        </ul>
      </div>
      <button type="button" class="btn btn-default">Button</button>
      <button type="button" class="btn btn-default">Button</button>
      <div class="btn-group" role="group">
        <button id="btnGroupVerticalDrop2" type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
          <span class="caret"></span>
        </button>
        <ul class="dropdown-menu">
          <li><a href="#">Dropdown link</a></li>
          <li><a href="#">Dropdown link</a></li>
        </ul>
      </div>
      <div class="btn-group" role="group">
        <button id="btnGroupVerticalDrop3" type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
          <span class="caret"></span>
        </button>
        <ul class="dropdown-menu">
          <li><a href="#">Dropdown link</a></li>
          <li><a href="#">Dropdown link</a></li>
        </ul>
      </div>
      <div class="btn-group" role="group">
        <button id="btnGroupVerticalDrop4" type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
          <span class="caret"></span>
        </button>
        <ul class="dropdown-menu">
          <li><a href="#">Dropdown link</a></li>
          <li><a href="#">Dropdown link</a></li>
        </ul>
      </div>
    </div>
  </div>
  <pre><code data-language="html"><div class="btn-group-vertical" role="group">
    <button type="button" class="btn btn-default">Button</button>
    <button type="button" class="btn btn-default">Button</button>
    <div class="btn-group" role="group">
      <button id="btnGroupVerticalDrop1" type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Dropdown
        <span class="caret"></span>
      </button>
      <ul class="dropdown-menu">
        <li><a href="#">Dropdown link</a></li>
        <li><a href="#">Dropdown link</a></li>
      </ul>
    </div>
    <button type="button" class="btn btn-default">Button</button>
    <button type="button" class="btn btn-default">Button</button>
    <div class="btn-group" role="group">
      <button id="btnGroupVerticalDrop2" type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Dropdown
        <span class="caret"></span>
      </button>
      <ul class="dropdown-menu">
        <li><a href="#">Dropdown link</a></li>
        <li><a href="#">Dropdown link</a></li>
      </ul>
    </div>
    <div class="btn-group" role="group">
      <button id="btnGroupVerticalDrop3" type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Dropdown
        <span class="caret"></span>
      </button>
      <ul class="dropdown-menu">
        <li><a href="#">Dropdown link</a></li>
        <li><a href="#">Dropdown link</a></li>
      </ul>
    </div>
    <div class="btn-group" role="group">
      <button id="btnGroupVerticalDrop4" type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Dropdown
        <span class="caret"></span>
      </button>
      <ul class="dropdown-menu">
        <li><a href="#">Dropdown link</a></li>
        <li><a href="#">Dropdown link</a></li>
      </ul>
    </div>
  </div></code></pre>

  <h2>Justified button groups</h2>
  <p><code>&lt;a&gt;</code> version</p>
  <div class="mf-code-show">
    <div class="btn-group btn-group-justified" role="group" aria-label="Justified button group">
      <a href="#" class="btn btn-default" role="button">Left</a>
      <a href="#" class="btn btn-default" role="button">Middle</a>
      <a href="#" class="btn btn-default" role="button">Right</a>
    </div>
    <br>
    <div class="btn-group btn-group-justified" role="group" aria-label="Justified button group with nested dropdown">
      <a href="#" class="btn btn-default" role="button">Left</a>
      <a href="#" class="btn btn-default" role="button">Middle</a>
      <div class="btn-group" role="group">
        <a href="#" class="btn btn-default dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
          Dropdown <span class="caret"></span>
        </a>
        <ul class="dropdown-menu">
          <li><a href="#">Action</a></li>
          <li><a href="#">Another action</a></li>
          <li><a href="#">Something else here</a></li>
          <li role="separator" class="divider"></li>
          <li><a href="#">Separated link</a></li>
        </ul>
      </div>
    </div>
  </div>
  <pre><code data-language="html"><div class="btn-group btn-group-justified" role="group" aria-label="Justified button group">
    <a href="#" class="btn btn-default" role="button">Left</a>
    <a href="#" class="btn btn-default" role="button">Middle</a>
    <a href="#" class="btn btn-default" role="button">Right</a>
  </div>
  <br>
  <div class="btn-group btn-group-justified" role="group" aria-label="Justified button group with nested dropdown">
    <a href="#" class="btn btn-default" role="button">Left</a>
    <a href="#" class="btn btn-default" role="button">Middle</a>
    <div class="btn-group" role="group">
      <a href="#" class="btn btn-default dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
        Dropdown <span class="caret"></span>
      </a>
      <ul class="dropdown-menu">
        <li><a href="#">Action</a></li>
        <li><a href="#">Another action</a></li>
        <li><a href="#">Something else here</a></li>
        <li role="separator" class="divider"></li>
        <li><a href="#">Separated link</a></li>
      </ul>
    </div>
  </div></code></pre>

<p><code>&lt;button&gt;</code> version</p>
  <div class="mf-code-show">
    <div class="btn-group btn-group-justified" role="group">
      <div class="btn-group" role="group">
        <button type="button" class="btn btn-default">Left</button>
      </div>
      <div class="btn-group" role="group">
        <button type="button" class="btn btn-default">Middle</button>
      </div>
      <div class="btn-group" role="group">
        <button type="button" class="btn btn-default">Right</button>
      </div>
    </div>
  </div>
  <pre><code data-language="html"><div class="btn-group btn-group-justified" role="group">
    <div class="btn-group" role="group">
      <button type="button" class="btn btn-default">Left</button>
    </div>
    <div class="btn-group" role="group">
      <button type="button" class="btn btn-default">Middle</button>
    </div>
    <div class="btn-group" role="group">
      <button type="button" class="btn btn-default">Right</button>
    </div>
  </div></code></pre>

  <h2>Single button dropdowns</h2>
  <div class="mf-code-show">
    <div class="btn-group">
      <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Default <span class="caret"></span></button>
      <ul class="dropdown-menu">
        <li><a href="#">Action</a></li>
        <li><a href="#">Another action</a></li>
        <li><a href="#">Something else here</a></li>
        <li role="separator" class="divider"></li>
        <li><a href="#">Separated link</a></li>
      </ul>
    </div><!-- /btn-group -->
    <div class="btn-group">
      <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Primary <span class="caret"></span></button>
      <ul class="dropdown-menu">
        <li><a href="#">Action</a></li>
        <li><a href="#">Another action</a></li>
        <li><a href="#">Something else here</a></li>
        <li role="separator" class="divider"></li>
        <li><a href="#">Separated link</a></li>
      </ul>
    </div><!-- /btn-group -->
    <div class="btn-group">
      <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Success <span class="caret"></span></button>
      <ul class="dropdown-menu">
        <li><a href="#">Action</a></li>
        <li><a href="#">Another action</a></li>
        <li><a href="#">Something else here</a></li>
        <li role="separator" class="divider"></li>
        <li><a href="#">Separated link</a></li>
      </ul>
    </div><!-- /btn-group -->
    <div class="btn-group">
      <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Info <span class="caret"></span></button>
      <ul class="dropdown-menu">
        <li><a href="#">Action</a></li>
        <li><a href="#">Another action</a></li>
        <li><a href="#">Something else here</a></li>
        <li role="separator" class="divider"></li>
        <li><a href="#">Separated link</a></li>
      </ul>
    </div><!-- /btn-group -->
    <div class="btn-group">
      <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Warning <span class="caret"></span></button>
      <ul class="dropdown-menu">
        <li><a href="#">Action</a></li>
        <li><a href="#">Another action</a></li>
        <li><a href="#">Something else here</a></li>
        <li role="separator" class="divider"></li>
        <li><a href="#">Separated link</a></li>
      </ul>
    </div><!-- /btn-group -->
    <div class="btn-group">
      <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Danger <span class="caret"></span></button>
      <ul class="dropdown-menu">
        <li><a href="#">Action</a></li>
        <li><a href="#">Another action</a></li>
        <li><a href="#">Something else here</a></li>
        <li role="separator" class="divider"></li>
        <li><a href="#">Separated link</a></li>
      </ul>
    </div><!-- /btn-group -->
  </div>
  <pre><code data-language="html"><div class="btn-group">
    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Default <span class="caret"></span></button>
    <ul class="dropdown-menu">
      <li><a href="#">Action</a></li>
      <li><a href="#">Another action</a></li>
      <li><a href="#">Something else here</a></li>
      <li role="separator" class="divider"></li>
      <li><a href="#">Separated link</a></li>
    </ul>
  </div><!-- /btn-group -->
  <div class="btn-group">
    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Primary <span class="caret"></span></button>
    <ul class="dropdown-menu">
      <li><a href="#">Action</a></li>
      <li><a href="#">Another action</a></li>
      <li><a href="#">Something else here</a></li>
      <li role="separator" class="divider"></li>
      <li><a href="#">Separated link</a></li>
    </ul>
  </div><!-- /btn-group -->
  <div class="btn-group">
    <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Success <span class="caret"></span></button>
    <ul class="dropdown-menu">
      <li><a href="#">Action</a></li>
      <li><a href="#">Another action</a></li>
      <li><a href="#">Something else here</a></li>
      <li role="separator" class="divider"></li>
      <li><a href="#">Separated link</a></li>
    </ul>
  </div><!-- /btn-group -->
  <div class="btn-group">
    <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Info <span class="caret"></span></button>
    <ul class="dropdown-menu">
      <li><a href="#">Action</a></li>
      <li><a href="#">Another action</a></li>
      <li><a href="#">Something else here</a></li>
      <li role="separator" class="divider"></li>
      <li><a href="#">Separated link</a></li>
    </ul>
  </div><!-- /btn-group -->
  <div class="btn-group">
    <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Warning <span class="caret"></span></button>
    <ul class="dropdown-menu">
      <li><a href="#">Action</a></li>
      <li><a href="#">Another action</a></li>
      <li><a href="#">Something else here</a></li>
      <li role="separator" class="divider"></li>
      <li><a href="#">Separated link</a></li>
    </ul>
  </div><!-- /btn-group -->
  <div class="btn-group">
    <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Danger <span class="caret"></span></button>
    <ul class="dropdown-menu">
      <li><a href="#">Action</a></li>
      <li><a href="#">Another action</a></li>
      <li><a href="#">Something else here</a></li>
      <li role="separator" class="divider"></li>
      <li><a href="#">Separated link</a></li>
    </ul>
  </div><!-- /btn-group --></code></pre>

  <h2>Split button dropdowns</h2>
  <div class="mf-code-show">
    <div class="btn-group">
      <button type="button" class="btn btn-default">Default</button>
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
    </div><!-- /btn-group -->
    <div class="btn-group">
      <button type="button" class="btn btn-primary">Primary</button>
      <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
    </div><!-- /btn-group -->
    <div class="btn-group">
      <button type="button" class="btn btn-success">Success</button>
      <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
    </div><!-- /btn-group -->
    <div class="btn-group">
      <button type="button" class="btn btn-info">Info</button>
      <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
    </div><!-- /btn-group -->
    <div class="btn-group">
      <button type="button" class="btn btn-warning">Warning</button>
      <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
    </div><!-- /btn-group -->
    <div class="btn-group">
      <button type="button" class="btn btn-danger">Danger</button>
      <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
    </div><!-- /btn-group -->
  </div>
  <pre><code data-language="html"><div class="btn-group">
    <button type="button" class="btn btn-default">Default</button>
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
  </div><!-- /btn-group -->
  <div class="btn-group">
    <button type="button" class="btn btn-primary">Primary</button>
    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
  </div><!-- /btn-group -->
  <div class="btn-group">
    <button type="button" class="btn btn-success">Success</button>
    <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
  </div><!-- /btn-group -->
  <div class="btn-group">
    <button type="button" class="btn btn-info">Info</button>
    <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
  </div><!-- /btn-group -->
  <div class="btn-group">
    <button type="button" class="btn btn-warning">Warning</button>
    <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
  </div><!-- /btn-group -->
  <div class="btn-group">
    <button type="button" class="btn btn-danger">Danger</button>
    <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
  </div><!-- /btn-group --></code></pre>

  <h2>Dropup variation</h2>
  <p>Trigger dropdown menus above elements by adding <code>.dropup</code> to the parent.</p>
  <div class="mf-code-show">
    <div class="btn-group dropup">
      <button type="button" class="btn btn-default">Dropup</button>
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
    </div><!-- /btn-group -->
    <div class="btn-group dropup">
      <button type="button" class="btn btn-primary">Right dropup</button>
      <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
    </div><!-- /btn-group -->
  </div>
  <pre><code data-language="html"><div class="btn-group dropup">
    <button type="button" class="btn btn-default">Dropup</button>
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
  </div><!-- /btn-group -->
  <div class="btn-group dropup">
    <button type="button" class="btn btn-primary">Right dropup</button>
    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
  </div><!-- /btn-group --></code></pre>

  <h2>Pagination</h2>
  <h2 id="pagination-default">Default pagination</h2>

  <div class="mf-code-show">
    <nav aria-label="Page navigation">
      <ul class="pagination">
        <li>
          <a href="#" aria-label="Previous">
            <span aria-hidden="true">&laquo;</span>
          </a>
        </li>
        <li><a href="#">1</a></li>
        <li><a href="#">2</a></li>
        <li><a href="#">3</a></li>
        <li><a href="#">4</a></li>
        <li><a href="#">5</a></li>
        <li>
          <a href="#" aria-label="Next">
            <span aria-hidden="true">&raquo;</span>
          </a>
        </li>
      </ul>
    </nav>
  </div>
  <pre><code data-language="html"><nav aria-label="Page navigation">
    <ul class="pagination">
      <li>
        <a href="#" aria-label="Previous">
          <span aria-hidden="true">&laquo;</span>
        </a>
      </li>
      <li><a href="#">1</a></li>
      <li><a href="#">2</a></li>
      <li><a href="#">3</a></li>
      <li><a href="#">4</a></li>
      <li><a href="#">5</a></li>
      <li>
        <a href="#" aria-label="Next">
          <span aria-hidden="true">&raquo;</span>
        </a>
      </li>
    </ul>
  </nav></code></pre>

  <h3>Disabled and active states</h3>

  <div class="mf-code-show">
    <nav aria-label="...">
      <ul class="pagination">
        <li class="disabled"><a href="#" aria-label="Previous"><span aria-hidden="true">&laquo;</span></a></li>
        <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
        <li><a href="#">2</a></li>
        <li><a href="#">3</a></li>
        <li><a href="#">4</a></li>
        <li><a href="#">5</a></li>
        <li><a href="#" aria-label="Next"><span aria-hidden="true">&raquo;</span></a></li>
     </ul>
   </nav>
  </div>
  <pre><code data-language="html"><nav aria-label="...">
    <ul class="pagination">
      <li class="disabled"><a href="#" aria-label="Previous"><span aria-hidden="true">&laquo;</span></a></li>
      <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
      <li><a href="#">2</a></li>
      <li><a href="#">3</a></li>
      <li><a href="#">4</a></li>
      <li><a href="#">5</a></li>
      <li><a href="#" aria-label="Next"><span aria-hidden="true">&raquo;</span></a></li>
   </ul>
 </nav></code></pre>
 <p>We recommend that you swap out active or disabled anchors for <code>&lt;span&gt;</code>, or omit the anchor in the case of the previous/next arrows, to remove click functionality while retaining intended styles.</p>
 <div class="mf-code-show">
   <nav aria-label="...">
     <ul class="pagination">
       <li class="disabled">
         <span>
           <span aria-hidden="true">&laquo;</span>
         </span>
       </li>
       <li class="active">
         <span>1 <span class="sr-only">(current)</span></span>
       </li>
       ...
     </ul>
   </nav>
 </div>
 <pre><code data-language="html"><nav aria-label="...">
   <ul class="pagination">
     <li class="disabled">
       <span>
         <span aria-hidden="true">&laquo;</span>
       </span>
     </li>
     <li class="active">
       <span>1 <span class="sr-only">(current)</span></span>
     </li>
     ...
   </ul>
 </nav></code></pre>

 <h3>Sizing</h3>
 <div class="mf-code-show">
   <nav aria-label="...">
     <ul class="pagination pagination-lg">
       <li><a href="#" aria-label="Previous"><span aria-hidden="true">&laquo;</span></a></li>
       <li><a href="#">1</a></li>
       <li><a href="#">2</a></li>
       <li><a href="#">3</a></li>
       <li><a href="#">4</a></li>
       <li><a href="#">5</a></li>
       <li><a href="#" aria-label="Next"><span aria-hidden="true">&raquo;</span></a></li>
     </ul>
   </nav>
   <nav aria-label="...">
     <ul class="pagination">
       <li><a href="#" aria-label="Previous"><span aria-hidden="true">&laquo;</span></a></li>
       <li><a href="#">1</a></li>
       <li><a href="#">2</a></li>
       <li><a href="#">3</a></li>
       <li><a href="#">4</a></li>
       <li><a href="#">5</a></li>
       <li><a href="#" aria-label="Next"><span aria-hidden="true">&raquo;</span></a></li>
     </ul>
   </nav>
   <nav aria-label="...">
     <ul class="pagination pagination-sm">
       <li><a href="#" aria-label="Previous"><span aria-hidden="true">&laquo;</span></a></li>
       <li><a href="#">1</a></li>
       <li><a href="#">2</a></li>
       <li><a href="#">3</a></li>
       <li><a href="#">4</a></li>
       <li><a href="#">5</a></li>
       <li><a href="#" aria-label="Next"><span aria-hidden="true">&raquo;</span></a></li>
     </ul>
   </nav>
 </div>
 <pre><code data-language="html"><nav aria-label="...">
   <ul class="pagination pagination-lg">
     <li><a href="#" aria-label="Previous"><span aria-hidden="true">&laquo;</span></a></li>
     <li><a href="#">1</a></li>
     <li><a href="#">2</a></li>
     <li><a href="#">3</a></li>
     <li><a href="#">4</a></li>
     <li><a href="#">5</a></li>
     <li><a href="#" aria-label="Next"><span aria-hidden="true">&raquo;</span></a></li>
   </ul>
 </nav>
 <nav aria-label="...">
   <ul class="pagination">
     <li><a href="#" aria-label="Previous"><span aria-hidden="true">&laquo;</span></a></li>
     <li><a href="#">1</a></li>
     <li><a href="#">2</a></li>
     <li><a href="#">3</a></li>
     <li><a href="#">4</a></li>
     <li><a href="#">5</a></li>
     <li><a href="#" aria-label="Next"><span aria-hidden="true">&raquo;</span></a></li>
   </ul>
 </nav>
 <nav aria-label="...">
   <ul class="pagination pagination-sm">
     <li><a href="#" aria-label="Previous"><span aria-hidden="true">&laquo;</span></a></li>
     <li><a href="#">1</a></li>
     <li><a href="#">2</a></li>
     <li><a href="#">3</a></li>
     <li><a href="#">4</a></li>
     <li><a href="#">5</a></li>
     <li><a href="#" aria-label="Next"><span aria-hidden="true">&raquo;</span></a></li>
   </ul>
 </nav></code></pre>

 <h2 id="pagination-pager">Pager</h2>

 <div class="mf-code-show">
   <nav aria-label="...">
     <ul class="pager">
       <li><a href="#">Previous</a></li>
       <li><a href="#">Next</a></li>
     </ul>
   </nav>
 </div>
 <pre><code data-language="html"><nav aria-label="...">
   <ul class="pager">
     <li><a href="#">Previous</a></li>
     <li><a href="#">Next</a></li>
   </ul>
 </nav></code></pre>

 <h3>Aligned links</h3>

 <div class="mf-code-show">
   <nav aria-label="...">
     <ul class="pager">
       <li class="previous"><a href="#"><span aria-hidden="true">&larr;</span> Older</a></li>
       <li class="next"><a href="#">Newer <span aria-hidden="true">&rarr;</span></a></li>
     </ul>
   </nav>
 </div>
 <pre><code data-language="html"><nav aria-label="...">
   <ul class="pager">
     <li class="previous"><a href="#"><span aria-hidden="true">&larr;</span> Older</a></li>
     <li class="next"><a href="#">Newer <span aria-hidden="true">&rarr;</span></a></li>
   </ul>
 </nav></code></pre>

 <h3>Optional disabled state</h3>

 <div class="mf-code-show">
   <nav aria-label="...">
     <ul class="pager">
       <li class="previous disabled"><a href="#"><span aria-hidden="true">&larr;</span> Older</a></li>
       <li class="next"><a href="#">Newer <span aria-hidden="true">&rarr;</span></a></li>
     </ul>
   </nav>
 </div>
 <pre><code data-language="html"><nav aria-label="...">
   <ul class="pager">
     <li class="previous disabled"><a href="#"><span aria-hidden="true">&larr;</span> Older</a></li>
     <li class="next"><a href="#">Newer <span aria-hidden="true">&rarr;</span></a></li>
   </ul>
 </nav></code></pre>

  <div class="mf-code-show">
    <div class="dropdown">
      <div class="btn-group" role="group" aria-label="...">
        <button type="button" class="btn btn-default">Left</button>
        <button type="button" class="btn btn-default">Middle</button>
        <button type="button" class="btn btn-default">Right</button>
      </div>
    </div>
  </div>
  <pre><code data-language="html"><div class="btn-group" role="group" aria-label="...">
    <button type="button" class="btn btn-default">Left</button>
    <button type="button" class="btn btn-default">Middle</button>
    <button type="button" class="btn btn-default">Right</button>
  </div></code></pre>


</div>
