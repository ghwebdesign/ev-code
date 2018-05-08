<!DOCTYPE html>
<html lang="en-us">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">

    <title>HTML | Eview360 &amp; DigitalB Code Guide</title>

    <link rel="stylesheet" href="assets/css/code-guide.css">
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=PT+Sans:400,700,400italic,700italic|PT+Mono&subset=latin,cyrillic">
  </head>
  <body>
    <header class="masthead">
      <div class="container">
        <a href="/"><img class="masthead-logo" src="assets/img/eview360-logo.jpg"></a>
        <h1>Eview360 &amp; DigitalB Code Guide</h1>
        <p class="lead">Standards for developing flexible, durable, sustainable and consistent code.</p>
      </div>
    </header>
    <div class="heading" id="toc">
      <h2>HTML</h2>
    </div>

    <div class="section" id="practicality">
      <div class="col">
        <h3>Practicality over purity</h3>
        <p>Strive to maintain HTML standards and semantics, but not at the expense of practicality. Use the least amount of markup with the fewest intricacies whenever possible.</p>
      </div>
    </div>



    <div class="section" id="syntax">
      <div class="col">
        <h3>Syntax</h3>
        <ul>
          <li>Use soft tabs with two spaces—they're the only way to guarantee code renders the same in any environment.</li>
          <li>Nested elements should be indented once (two spaces).</li>
          <li>Always use double quotes, never single quotes, on attributes.</li>
          <li>Don't include a trailing slash in self-closing elements—the <a href="http://dev.w3.org/html5/spec-author-view/syntax.html#syntax-start-tag">HTML5 spec</a> says they're optional.</li>
          <li>Don’t omit optional closing tags (e.g. <code>&lt;/li&gt;</code> or <code>&lt;/body&gt;</code>).</li>
        </ul>
      </div>
      <div class="col">
        <div class="highlight">
<pre><code class="language-html" data-lang="html">
  <span class="cp">&lt;!DOCTYPE html&gt;</span>
  <span class="nt">&lt;html&gt;</span>
  <span class="nt">  &lt;head&gt;</span>
  <span class="nt">    &lt;title&gt;</span>Page title<span class="nt">&lt;/title&gt;</span>
  <span class="nt">  &lt;/head&gt;</span>
  <span class="nt">  &lt;body&gt;</span>
  <span class="nt">    &lt;img</span> <span class="na">src=</span><span class="s">&quot;images/company-logo.png&quot;</span> <span class="na">alt=</span><span class="s">&quot;Company&quot;</span><span class="nt">&gt;</span>
  <span class="nt">    &lt;h1</span> <span class="na">class=</span><span class="s">&quot;hello-world&quot;</span><span class="nt">&gt;</span>Hello, world!<span class="nt">&lt;/h1&gt;</span>
  <span class="nt">  &lt;/body&gt;</span>
  <span class="nt">&lt;/html&gt;</span>
</code></pre>
        </div>
      </div>
    </div>

    <div class="section" id="doctype">
      <div class="col">
        <h3>HTML5 doctype</h3>
        <p>Enforce standards mode and more consistent rendering in every browser possible with this simple doctype at the beginning of every HTML page.</p>
      </div>
      <div class="col">
        <div class="highlight">
<pre><code class="language-html" data-lang="html">
  <span class="cp">&lt;!DOCTYPE html&gt;</span>
  <span class="nt">&lt;html&gt;</span>
    <span class="nt">&lt;head&gt;</span>
    <span class="nt">&lt;/head&gt;</span>
  <span class="nt">&lt;/html&gt;</span>
</code></pre>
        </div>
      </div>
    </div>


    <div class="section" id="lang">
      <div class="col">
        <h3>Language attribute</h3>
        <p>A language MUST be set to satisfy Eview360 &amp; DigitalB standards. From the HTML5 spec:</p>
        <blockquote>
          <p>Authors are encouraged to specify a lang attribute on the root html element, giving the document's language. This aids speech synthesis tools to determine what pronunciations to use, translation tools to determine what rules to use, and so forth.</p>
        </blockquote>
        <p>Read more about the <code>lang</code> attribute <a href="http://www.w3.org/html/wg/drafts/html/master/semantics.html#the-html-element">in the spec</a>.</p>
        <p>Head to Sitepoint for a <a href="http://reference.sitepoint.com/html/lang-codes">list of language codes</a>.</p>
      </div>
      <div class="col">
        <div class="highlight">
<pre><code class="language-html" data-lang="html"><span class="nt">&lt;html</span> <span class="na">lang=</span><span class="s">&quot;en-us&quot;</span><span class="nt">&gt;</span>
  <span class="c">&lt;!-- ... --&gt;</span>
<span class="nt">&lt;/html&gt;</span></code></pre>
        </div>
      </div>
    </div>

<div class="section" id="ie-compatibility-mode">
  <div class="col">
    <h3>IE compatibility mode</h3>
    <p>Internet Explorer supports the use of a document compatibility <code>&lt;meta&gt;</code> tag to specify what version of IE the page should be rendered as. Unless circumstances require otherwise, it's most useful to instruct IE to use the latest supported mode with <strong>edge mode</strong>.</p>
    <p>For more information, <a href="http://stackoverflow.com/questions/6771258/whats-the-difference-if-meta-http-equiv-x-ua-compatible-content-ie-edge-e">read this awesome Stack Overflow article</a>.</p>
  </div>
  <div class="col">
    <div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;meta</span> <span class="na">http-equiv=</span><span class="s">&quot;X-UA-Compatible&quot;</span> <span class="na">content=</span><span class="s">&quot;IE=Edge&quot;</span><span class="nt">&gt;</span></code></pre></div>
  </div>
</div>

<div class="section" id="encoding">
  <div class="col">
    <h3>Character encoding</h3>
    <p>Character encoding MUST be set to satisfy Eview360 &amp; DigitalB standards. Quickly and easily ensure proper rendering of your content by declaring an explicit character encoding. When doing so, you may avoid using character entities in your HTML, provided their encoding matches that of the document (generally UTF-8).</p>
  </div>
  <div class="col">
    <div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;head&gt;</span>
  <span class="nt">&lt;meta</span> <span class="na">charset=</span><span class="s">&quot;UTF-8&quot;</span><span class="nt">&gt;</span>
<span class="nt">&lt;/head&gt;</span></code></pre></div>
  </div>
</div>

<div class="section" id="style-script">
  <div class="col">
    <h3>CSS and JavaScript includes</h3>
    <ul>
      <li>You do not have to include the <code>type</code></li>
      <li>For external CSS, attribute <code>rel</code> come before <code>href</code></li>
      <li>HTML5 specifications for
        <a href="http://www.w3.org/TR/2011/WD-html5-20110525/semantics.html#the-link-element">link</a>,
        <a href="http://www.w3.org/TR/2011/WD-html5-20110525/semantics.html#the-style-element">style</a> and
        <a href="http://www.w3.org/TR/2011/WD-html5-20110525/scripting-1.html#the-script-element">script</a>
      </li>
    </ul>
  </div>


  <div class="col">
    <div class="highlight"><pre><code class="language-html" data-lang="html"><span class="c">&lt;!-- External CSS --&gt;</span>
<span class="nt">&lt;link</span> <span class="na">rel=</span><span class="s">&quot;stylesheet&quot;</span> <span class="na">href=</span><span class="s">&quot;code-guide.css&quot;</span><span class="nt">&gt;</span>

<span class="c">&lt;!-- In-document CSS --&gt;</span>
<span class="nt">&lt;style&gt;</span>
  <span class="c">/* ... */</span>
<span class="nt">&lt;/style&gt;</span>

<span class="c">&lt;!-- JavaScript --&gt;</span>
<span class="nt">&lt;script </span><span class="na">src=</span><span class="s">&quot;code-guide.js&quot;</span><span class="nt">&gt;&lt;/script&gt;</span></code></pre></div>
  </div>
</div>



<div class="section" id="attribute-order">
  <div class="col">
    <h3>Attribute order</h3>
    <p>HTML attributes should come in this particular order for easier reading of code.</p>
    <ul>
      <li><code>type</code>, <code>name</code></li>
      <li><code>class</code></li>
      <li><code>id</code></li>
      <li><code>src</code>, <code>href</code>, <code>value</code>, <code>for</code></li>
      <li><code>data-*</code></li>
      <li><code>title</code>, <code>alt</code></li>
      <li><code>role</code>, <code>aria-*</code></li>
    </ul>
    <p>Classes make for great reusable components, so they come first. Ids are more specific and should be used sparingly (e.g., for in-page bookmarks), so they come second.</p>
  </div>
  <div class="col">
    <div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">&quot;...&quot;</span> <span class="na">id=</span><span class="s">&quot;...&quot;</span> <span class="na">href=</span><span class="s">&quot;#&quot;</span> <span class="na">data-toggle=</span><span class="s">&quot;modal&quot;</span><span class="nt">&gt;</span>
  Example link
<span class="nt">&lt;/a&gt;</span>

<span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">&quot;text&quot;</span> <span class="na">name=</span><span class="s">&quot;fName&quot;</span> <span class="na">class=</span><span class="s">&quot;form-control&quot;</span> <span class="nt">&gt;</span>

<span class="nt">&lt;img</span> <span class="na">src=</span><span class="s">&quot;...&quot;</span> <span class="na">alt=</span><span class="s">&quot;...&quot;</span><span class="nt">&gt;</span></code></pre></div>
  </div>
</div>

<div class="section" id="boolean-attributes">
  <div class="col">
    <h3>Boolean attributes</h3>
    <p>A boolean attribute is one that needs no declared value. XHTML required you to declare a value, but HTML5 has no such requirement.</p>
    <p>For further reading, consult the <a href="http://www.whatwg.org/specs/web-apps/current-work/multipage/common-microsyntaxes.html#boolean-attributes">WhatWG section on boolean attributes</a>:</p>
    <blockquote>
      <p>The presence of a boolean attribute on an element represents the true value, and the absence of the attribute represents the false value.</p>
    </blockquote>
    <p>If you <em>must</em> include the attribute's value, and <strong>you don't need to</strong>, follow this WhatWG guideline:</p>
    <blockquote>
      <p>If the attribute is present, its value must either be the empty string or [...] the attribute's canonical name, with no leading or trailing whitespace.</p>
    </blockquote>
    <p><strong>In short, don't add a value.</strong></p>
  </div>
  <div class="col">
    <div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">&quot;text&quot;</span> <span class="na">disabled</span><span class="nt">&gt;</span>

<span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">&quot;checkbox&quot;</span> <span class="na">value=</span><span class="s">&quot;1&quot;</span> <span class="na">checked</span><span class="nt">&gt;</span>

<span class="nt">&lt;select&gt;</span>
  <span class="nt">&lt;option</span> <span class="na">value=</span><span class="s">&quot;1&quot;</span> <span class="na">selected</span><span class="nt">&gt;</span>1<span class="nt">&lt;/option&gt;</span>
<span class="nt">&lt;/select&gt;</span></code></pre></div>
  </div>
</div>

<div class="section" id="reducing-markup">
  <div class="col">
    <h3>Reducing markup</h3>
    <p>Whenever possible, avoid superfluous parent elements when writing HTML. Many times this requires iteration and refactoring, but produces less HTML. Take the following example:</p>
  </div>
  <div class="col">
    <div class="highlight"><pre><code class="language-html" data-lang="html"><span class="c">&lt;!-- Not so great --&gt;</span>
<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">&quot;avatar&quot;</span><span class="nt">&gt;</span>
  <span class="nt">&lt;img</span> <span class="na">src=</span><span class="s">&quot;...&quot;</span><span class="nt">&gt;</span>
<span class="nt">&lt;/span&gt;</span>

<span class="c">&lt;!-- Better --&gt;</span>
<span class="nt">&lt;img</span> <span class="na">class=</span><span class="s">&quot;avatar&quot;</span> <span class="na">src=</span><span class="s">&quot;...&quot;</span><span class="nt">&gt;</span></code></pre></div>
  </div>
</div>


    <div class="section" id="javascript">
      <div class="col">
        <h3>JavaScript generated HTML</h3>
        <p>Writing markup in a JavaScript file makes the content harder to find, harder to edit, and less performant. Avoid it whenever possible. The following is very evil.</p>
      </div>
      <div class="col">
        <div class="highlight"><pre>
<code class="language-html" data-lang="html"><span class="nt">&lt;script&gt;</span>
  <span class="nt">$('#element').append('&lt;ul&gt;&lt;li&gt;item 1&lt;/li&gt;&lt;li&gt;item 2&lt;/li&gt;&lt;/ul&gt;');
<span class="nt">&lt;/script&gt;</span></code></pre></div>
      </div>
    </div>


    <footer class="footer">
      <img src="assets/img/eview360-logo.jpg" width="200"><br>
      <p>All information here is considered to be private and should not be shared outside of Eview360</p>
      <p> This cool guy (<a href="http://codeguide.co/" target="_blank">codeguide.co</a>) created this template and we just altered it for our personal experience.</p>
    </footer>

  </body>
</html>
