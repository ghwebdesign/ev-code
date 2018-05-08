<!DOCTYPE html>
<html lang="en-us">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">

    <title>CSS | Eview360 &amp; DigitalB Code Guide</title>

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
      <h2>CSS</h2>
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
      <li>When grouping selectors, keep individual selectors to a single line.</li>
      <li>Include one space before the opening brace of declaration blocks for legibility.</li>
      <li>Place closing braces of declaration blocks on a new line.</li>
      <li>Include one space after <code>:</code> for each declaration.</li>
      <li>Each declaration should appear on its own line for more accurate error reporting.</li>
      <li>End all declarations with a semi-colon. The last declaration's is optional, but your code is more error prone without it.</li>
      <li>Comma-separated property values should include a space after each comma (e.g., <code>box-shadow</code>).</li>
      <li>Don't include spaces after commas <em>within</em> <code>rgb()</code>, <code>rgba()</code>, <code>hsl()</code>, <code>hsla()</code>, or <code>rect()</code> values. This helps differentiate multiple color values (comma, no space) from multiple property values (comma with space).</li>
      <li>Don't prefix property values or color parameters with a leading zero (e.g., <code>.5</code> instead of <code>0.5</code> and <code>-.5px</code> instead of <code>-0.5px</code>).</li>
      <li>Lowercase all hex values, e.g., <code>#fff</code>. Lowercase letters are much easier to discern when scanning a document as they tend to have more unique shapes.</li>
      <li>Use shorthand hex values where available, e.g., <code>#fff</code> instead of <code>#ffffff</code>.</li>
      <li>Quote attribute values in selectors, e.g., <code>input[type="text"]</code>. <a href="http://mathiasbynens.be/notes/unquoted-attribute-values#css">They’re only optional in some cases</a>, and it’s a good practice for consistency.</li>
      <li>Avoid specifying units for zero values, e.g., <code>margin: 0;</code> instead of <code>margin: 0px;</code>.</li>
    </ul>
    <p>Questions on the terms used here? See the <a href="http://en.wikipedia.org/wiki/Cascading_Style_Sheets#Syntax">syntax section of the Cascading Style Sheets article</a> on Wikipedia.</p>
  </div>
  <div class="col">
    <div class="highlight"><pre><code class="language-css" data-lang="css"><span class="c">/* Bad CSS */</span>
<span class="nc">.selector</span><span class="o">,</span> <span class="nc">.selector-secondary</span><span class="o">,</span> <span class="nc">.selector</span><span class="o">[</span><span class="nt">type</span><span class="o">=</span><span class="nt">text</span><span class="o">]</span> <span class="p">{</span>
  <span class="k">padding</span><span class="o">:</span><span class="m">15px</span><span class="p">;</span>
  <span class="k">margin</span><span class="o">:</span><span class="m">0px</span> <span class="m">0px</span> <span class="m">15px</span><span class="p">;</span>
  <span class="k">background-color</span><span class="o">:</span><span class="n">rgba</span><span class="p">(</span><span class="m">0</span><span class="o">,</span> <span class="m">0</span><span class="o">,</span> <span class="m">0</span><span class="o">,</span> <span class="m">0</span><span class="o">.</span><span class="m">5</span><span class="p">);</span>
  <span class="n">box</span><span class="o">-</span><span class="n">shadow</span><span class="o">:</span><span class="m">0px</span> <span class="m">1px</span> <span class="m">2px</span> <span class="m">#CCC</span><span class="o">,</span><span class="k">inset</span> <span class="m">0</span> <span class="m">1px</span> <span class="m">0</span> <span class="m">#FFFFFF</span>
<span class="p">}</span>

<span class="c">/* Good CSS */</span>
<span class="nc">.selector</span><span class="o">,</span>
<span class="nc">.selector-secondary</span><span class="o">,</span>
<span class="nc">.selector</span><span class="o">[</span><span class="nt">type</span><span class="o">=</span><span class="s2">&quot;text&quot;</span><span class="o">]</span> <span class="p">{</span>
  <span class="k">padding</span><span class="o">:</span> <span class="m">15px</span><span class="p">;</span>
  <span class="k">margin-bottom</span><span class="o">:</span> <span class="m">15px</span><span class="p">;</span>
  <span class="k">background-color</span><span class="o">:</span> <span class="n">rgba</span><span class="p">(</span><span class="m">0</span><span class="o">,</span><span class="m">0</span><span class="o">,</span><span class="m">0</span><span class="o">,.</span><span class="m">5</span><span class="p">);</span>
  <span class="n">box</span><span class="o">-</span><span class="n">shadow</span><span class="o">:</span> <span class="m">0</span> <span class="m">1px</span> <span class="m">2px</span> <span class="m">#ccc</span><span class="o">,</span> <span class="k">inset</span> <span class="m">0</span> <span class="m">1px</span> <span class="m">0</span> <span class="m">#fff</span><span class="p">;</span>
<span class="p">}</span></code></pre></div>
  </div>
</div>

<div class="section" id="declaration-order">
  <div class="col">
    <h3>Declaration order</h3>
    <p>Related property declarations should be grouped together following the order:</p>
    <ol>
      <li>Positioning</li>
      <li>Box model</li>
      <li>Typographic</li>
      <li>Visual</li>
    </ol>
    <p>Positioning comes first because it can remove an element from the normal flow of the document and override box model related styles. The box model comes next as it dictates a component's dimensions and placement.</p>
    <p>Everything else takes place <em>inside</em> the component or without impacting the previous two sections, and thus they come last.</p>
    <p>For a complete list of properties and their order, please see <a href="http://twitter.github.com/recess">Recess</a>.</p>
  </div>
  <div class="col">
    <div class="highlight"><pre><code class="language-css" data-lang="css"><span class="nc">.declaration-order</span> <span class="p">{</span>
  <span class="c">/* Positioning */</span>
  <span class="k">position</span><span class="o">:</span> <span class="k">absolute</span><span class="p">;</span>
  <span class="k">top</span><span class="o">:</span> <span class="m">0</span><span class="p">;</span>
  <span class="k">right</span><span class="o">:</span> <span class="m">0</span><span class="p">;</span>
  <span class="k">bottom</span><span class="o">:</span> <span class="m">0</span><span class="p">;</span>
  <span class="k">left</span><span class="o">:</span> <span class="m">0</span><span class="p">;</span>
  <span class="k">z-index</span><span class="o">:</span> <span class="m">100</span><span class="p">;</span>

  <span class="c">/* Box-model */</span>
  <span class="k">display</span><span class="o">:</span> <span class="k">block</span><span class="p">;</span>
  <span class="k">float</span><span class="o">:</span> <span class="k">right</span><span class="p">;</span>
  <span class="k">width</span><span class="o">:</span> <span class="m">100px</span><span class="p">;</span>
  <span class="k">height</span><span class="o">:</span> <span class="m">100px</span><span class="p">;</span>

  <span class="c">/* Typography */</span>
  <span class="k">font</span><span class="o">:</span> <span class="k">normal</span> <span class="m">13px</span> <span class="s2">&quot;Helvetica Neue&quot;</span><span class="o">,</span> <span class="k">sans-serif</span><span class="p">;</span>
  <span class="k">line-height</span><span class="o">:</span> <span class="m">1</span><span class="o">.</span><span class="m">5</span><span class="p">;</span>
  <span class="k">color</span><span class="o">:</span> <span class="m">#333</span><span class="p">;</span>
  <span class="k">text-align</span><span class="o">:</span> <span class="k">center</span><span class="p">;</span>

  <span class="c">/* Visual */</span>
  <span class="k">background-color</span><span class="o">:</span> <span class="m">#f5f5f5</span><span class="p">;</span>
  <span class="k">border</span><span class="o">:</span> <span class="m">1px</span> <span class="k">solid</span> <span class="m">#e5e5e5</span><span class="p">;</span>
  <span class="k">border</span><span class="o">-</span><span class="n">radius</span><span class="o">:</span> <span class="m">3px</span><span class="p">;</span>

  <span class="c">/* Misc */</span>
  <span class="k">opacity</span><span class="o">:</span> <span class="m">1</span><span class="p">;</span>
<span class="p">}</span></code></pre></div>
  </div>
</div>

<div class="section" id="import">
  <div class="col">
    <h3>Don't use <code>@import</code></h3>
    <p>Compared to <code>&lt;link&gt;</code>s, <code>@import</code> is slower, adds extra page requests, and can cause other unforeseen problems. Avoid them and instead opt for an alternate approach:</p>
    <ul>
      <li>Use multiple <code>&lt;link&gt;</code> elements</li>
      <li>Compile your CSS with a preprocessor like Sass or Less into a single file</li>
      <li>Concatenate your CSS files with features provided in Rails, Jekyll, and other environments</li>
    </ul>
    <p>For more information, <a href="http://www.stevesouders.com/blog/2009/04/09/dont-use-import/">read this article by Steve Souders</a>.</p>
  </div>
  <div class="col">
    <div class="highlight"><pre><code class="language-html" data-lang="html"><span class="c">&lt;!-- Use link elements --&gt;</span>
<span class="nt">&lt;link</span> <span class="na">rel=</span><span class="s">&quot;stylesheet&quot;</span> <span class="na">href=</span><span class="s">&quot;core.css&quot;</span><span class="nt">&gt;</span>

<span class="c">&lt;!-- Avoid @imports --&gt;</span>
<span class="nt">&lt;style&gt;</span>
  <span class="k">@import</span> <span class="nt">url</span><span class="o">(</span><span class="s2">&quot;more.css&quot;</span><span class="o">)</span><span class="p">;</span>
<span class="nt">&lt;/style&gt;</span></code></pre></div>
  </div>
</div>

<div class="section" id="media-queries">
  <div class="col">
    <h3>Media query placement</h3>
    <p>Place media queries as close to their relevant rule sets whenever possible. Don't bundle them all in a separate stylesheet or at the end of the document. Doing so only makes it easier for folks to miss them in the future. Here's a typical setup.</p>
  </div>
  <div class="col">
    <div class="highlight"><pre><code class="language-css" data-lang="css"><span class="nc">.element</span> <span class="p">{</span> <span class="o">...</span> <span class="p">}</span>
<span class="nc">.element-avatar</span> <span class="p">{</span> <span class="o">...</span> <span class="p">}</span>
<span class="nc">.element-selected</span> <span class="p">{</span> <span class="o">...</span> <span class="p">}</span>

<span class="k">@media</span> <span class="o">(</span><span class="nt">min-width</span><span class="o">:</span> <span class="nt">480px</span><span class="o">)</span> <span class="p">{</span>
  <span class="nc">.element</span> <span class="p">{</span> <span class="o">...</span><span class="p">}</span>
  <span class="nc">.element-avatar</span> <span class="p">{</span> <span class="o">...</span> <span class="p">}</span>
  <span class="nc">.element-selected</span> <span class="p">{</span> <span class="o">...</span> <span class="p">}</span>
<span class="p">}</span></code></pre></div>
  </div>
</div>

<div class="section" id="prefixed-properties">
  <div class="col">
    <h3>Prefixed properties</h3>
    <p>When using vendor prefixed properties, indent each property such that the declaration's value lines up vertically for easy multi-line editing.</p>
    <p>In Textmate, use <strong>Text &rarr; Edit Each Line in Selection</strong> (&#8963;&#8984;A). In Sublime Text 2, use <strong>Selection &rarr; Add Previous Line</strong> (&#8963;&#8679;&uarr;) and <strong>Selection &rarr;  Add Next Line</strong> (&#8963;&#8679;&darr;).</p>
  </div>
  <div class="col">
    <div class="highlight"><pre><code class="language-css" data-lang="css"><span class="c">/* Prefixed properties */</span>
<span class="nc">.selector</span> <span class="p">{</span>
  <span class="o">-</span><span class="n">webkit</span><span class="o">-</span><span class="n">box</span><span class="o">-</span><span class="n">shadow</span><span class="o">:</span> <span class="m">0</span> <span class="m">1px</span> <span class="m">2px</span> <span class="n">rgba</span><span class="p">(</span><span class="m">0</span><span class="o">,</span><span class="m">0</span><span class="o">,</span><span class="m">0</span><span class="o">,.</span><span class="m">15</span><span class="p">);</span>
          <span class="n">box</span><span class="o">-</span><span class="n">shadow</span><span class="o">:</span> <span class="m">0</span> <span class="m">1px</span> <span class="m">2px</span> <span class="n">rgba</span><span class="p">(</span><span class="m">0</span><span class="o">,</span><span class="m">0</span><span class="o">,</span><span class="m">0</span><span class="o">,.</span><span class="m">15</span><span class="p">);</span>
<span class="p">}</span></code></pre></div>
  </div>
</div>

<div class="section" id="single-declarations">
  <div class="col">
    <h3>Single declarations</h3>
    <p>In instances where a rule set includes <strong>only one declaration</strong>, consider removing line breaks for readability and faster editing. Any rule set with multiple declarations should be split to separate lines.</p>
    <p>The key factor here is error detection—e.g., a CSS validator stating you have a syntax error on Line 183. With a single declaration, there's no missing it. With multiple declarations, separate lines is a must for your sanity.</p>
  </div>
  <div class="col">
    <div class="highlight"><pre><code class="language-css" data-lang="css"><span class="c">/* Single declarations on one line */</span>
<span class="nc">.span1</span> <span class="p">{</span> <span class="k">width</span><span class="o">:</span> <span class="m">60px</span><span class="p">;</span> <span class="p">}</span>
<span class="nc">.span2</span> <span class="p">{</span> <span class="k">width</span><span class="o">:</span> <span class="m">140px</span><span class="p">;</span> <span class="p">}</span>
<span class="nc">.span3</span> <span class="p">{</span> <span class="k">width</span><span class="o">:</span> <span class="m">220px</span><span class="p">;</span> <span class="p">}</span>

<span class="c">/* Multiple declarations, one per line */</span>
<span class="nc">.sprite</span> <span class="p">{</span>
  <span class="k">display</span><span class="o">:</span> <span class="k">inline</span><span class="o">-</span><span class="k">block</span><span class="p">;</span>
  <span class="k">width</span><span class="o">:</span> <span class="m">16px</span><span class="p">;</span>
  <span class="k">height</span><span class="o">:</span> <span class="m">15px</span><span class="p">;</span>
  <span class="k">background-image</span><span class="o">:</span> <span class="sx">url(../img/sprite.png)</span><span class="p">;</span>
<span class="p">}</span>
<span class="nc">.icon</span>           <span class="p">{</span> <span class="k">background-position</span><span class="o">:</span> <span class="m">0</span> <span class="m">0</span><span class="p">;</span> <span class="p">}</span>
<span class="nc">.icon-home</span>      <span class="p">{</span> <span class="k">background-position</span><span class="o">:</span> <span class="m">0</span> <span class="m">-20px</span><span class="p">;</span> <span class="p">}</span>
<span class="nc">.icon-account</span>   <span class="p">{</span> <span class="k">background-position</span><span class="o">:</span> <span class="m">0</span> <span class="m">-40px</span><span class="p">;</span> <span class="p">}</span></code></pre></div>
  </div>
</div>

<div class="section" id="shorthand">
  <div class="col">
    <h3>Shorthand notation</h3>
    <p>Strive to limit use of shorthand declarations to instances where you must explicitly set all the available values. Common overused shorthand properties include:</p>
    <ul>
      <li><code>padding</code></li>
      <li><code>margin</code></li>
      <li><code>font</code></li>
      <li><code>background</code></li>
      <li><code>border</code></li>
      <li><code>border-radius</code></li>
    </ul>
    <p>Often times we don't need to set all the values a shorthand property represents. For example, HTML headings only set top and bottom margin, so when necessary, only override those two values. Excessive use of shorthand properties often leads to sloppier code with unnecessary overrides and unintended side effects.</p>
    <p>The Mozilla Developer Network has a great article on <a href="https://developer.mozilla.org/en-US/docs/Web/CSS/Shorthand_properties">shorthand properties</a> for those unfamiliar with notation and behavior.</p>
  </div>
  <div class="col">
    <div class="highlight"><pre><code class="language-css" data-lang="css"><span class="c">/* Bad example */</span>
<span class="nc">.element</span> <span class="p">{</span>
  <span class="k">margin</span><span class="o">:</span> <span class="m">0</span> <span class="m">0</span> <span class="m">10px</span><span class="p">;</span>
  <span class="k">background</span><span class="o">:</span> <span class="nb">red</span><span class="p">;</span>
  <span class="k">background</span><span class="o">:</span> <span class="sx">url(&quot;image.jpg&quot;)</span><span class="p">;</span>
  <span class="k">border</span><span class="o">-</span><span class="n">radius</span><span class="o">:</span> <span class="m">3px</span> <span class="m">3px</span> <span class="m">0</span> <span class="m">0</span><span class="p">;</span>
<span class="p">}</span>

<span class="c">/* Good example */</span>
<span class="nc">.element</span> <span class="p">{</span>
  <span class="k">margin-bottom</span><span class="o">:</span> <span class="m">10px</span><span class="p">;</span>
  <span class="k">background-color</span><span class="o">:</span> <span class="nb">red</span><span class="p">;</span>
  <span class="k">background-image</span><span class="o">:</span> <span class="sx">url(&quot;image.jpg&quot;)</span><span class="p">;</span>
  <span class="k">border-top</span><span class="o">-</span><span class="k">left</span><span class="o">-</span><span class="n">radius</span><span class="o">:</span> <span class="m">3px</span><span class="p">;</span>
  <span class="k">border-top</span><span class="o">-</span><span class="k">right</span><span class="o">-</span><span class="n">radius</span><span class="o">:</span> <span class="m">3px</span><span class="p">;</span>
<span class="p">}</span></code></pre></div>
  </div>
</div>

<div class="section" id="nesting">
  <div class="col">
    <h3>Nesting in Less and Sass</h3>
    <p>Avoid unnecessary nesting. Just because you can nest, doesn't mean you always should. Consider nesting only if you must scope styles to a parent and if there are multiple elements to be nested.</p>
    <p>Additional reading:</p>
    <ul>
      <li><a href="http://markdotto.com/2015/07/20/css-nesting/">Nesting in Sass and Less</a></li>
    </ul>
  </div>
  <div class="col">
    <div class="highlight"><pre><code class="language-scss" data-lang="scss"><span class="c1">// Without nesting</span>
<span class="nc">.table</span> <span class="o">&gt;</span> <span class="nt">thead</span> <span class="o">&gt;</span> <span class="nt">tr</span> <span class="o">&gt;</span> <span class="nt">th</span> <span class="p">{</span> <span class="err">…</span> <span class="p">}</span>
<span class="nc">.table</span> <span class="o">&gt;</span> <span class="nt">thead</span> <span class="o">&gt;</span> <span class="nt">tr</span> <span class="o">&gt;</span> <span class="nt">td</span> <span class="p">{</span> <span class="err">…</span> <span class="p">}</span>

<span class="c1">// With nesting</span>
<span class="nc">.table</span> <span class="o">&gt;</span> <span class="nt">thead</span> <span class="o">&gt;</span> <span class="nt">tr</span> <span class="p">{</span>
  <span class="o">&gt;</span> <span class="nt">th</span> <span class="p">{</span> <span class="err">…</span> <span class="p">}</span>
  <span class="o">&gt;</span> <span class="nt">td</span> <span class="p">{</span> <span class="err">…</span> <span class="p">}</span>
<span class="p">}</span></code></pre></div>
  </div>
</div>

<div class="section" id="operators">
  <div class="col">
    <h3>Operators in Less and Sass</h3>
    <p>For improved readability, wrap all math operations in parentheses with a single space between values, variables, and operators.</p>
  </div>
  <div class="col">
    <div class="highlight"><pre><code class="language-scss" data-lang="scss"><span class="c1">// Bad example</span>
<span class="nc">.element</span> <span class="p">{</span>
  <span class="na">margin</span><span class="o">:</span> <span class="mi">10</span><span class="kt">px</span> <span class="mi">0</span> <span class="o">@</span><span class="n">variable</span><span class="o">*</span><span class="mi">2</span> <span class="mi">10</span><span class="kt">px</span><span class="p">;</span>
<span class="p">}</span>

<span class="c1">// Good example</span>
<span class="nc">.element</span> <span class="p">{</span>
  <span class="na">margin</span><span class="o">:</span> <span class="mi">10</span><span class="kt">px</span> <span class="mi">0</span> <span class="p">(</span><span class="o">@</span><span class="n">variable</span> <span class="o">*</span> <span class="mi">2</span><span class="p">)</span> <span class="mi">10</span><span class="kt">px</span><span class="p">;</span>
<span class="p">}</span></code></pre></div>
  </div>
</div>

<div class="section" id="comments">
  <div class="col">
    <h3>Comments</h3>
    <p>Code is written and maintained by people. Ensure your code is descriptive, well commented, and approachable by others. Great code comments convey context or purpose. Do not simply reiterate a component or class name.</p>
    <p>Be sure to write in complete sentences for larger comments and succinct phrases for general notes.</p>
  </div>
  <div class="col">
    <div class="highlight"><pre><code class="language-css" data-lang="css"><span class="c">/* Bad example */</span>
<span class="c">/* Modal header */</span>
<span class="nc">.modal-header</span> <span class="p">{</span>
  <span class="o">...</span>
<span class="p">}</span>

<span class="c">/* Good example */</span>
<span class="c">/* Wrapping element for .modal-title and .modal-close */</span>
<span class="nc">.modal-header</span> <span class="p">{</span>
  <span class="o">...</span>
<span class="p">}</span></code></pre></div>
  </div>
</div>

<div class="section" id="classes">
  <div class="col">
    <h3>Class names</h3>
    <ul>
      <li>Keep classes lowercase and use dashes (not underscores or camelCase). Dashes serve as natural breaks in related class (e.g., <code>.btn</code> and <code>.btn-danger</code>).</li>
      <li>Avoid excessive and arbitrary shorthand notation. <code>.btn</code> is useful for <em>button</em>, but <code>.s</code> doesn't mean anything.</li>
      <li>Keep classes as short and succinct as possible.</li>
      <li>Use meaningful names; use structural or purposeful names over presentational.</li>
      <li>Prefix classes based on the closest parent or base class.</li>
      <li>Use <code>.js-*</code> classes to denote behavior (as opposed to style), but keep these classes out of your CSS.</li>
    </ul>
    <p>It's also useful to apply many of these same rules when creating Sass and Less variable names.</p>
  </div>
  <div class="col">
    <div class="highlight"><pre><code class="language-css" data-lang="css"><span class="c">/* Bad example */</span>
<span class="nc">.t</span> <span class="p">{</span> <span class="o">...</span> <span class="p">}</span>
<span class="nc">.red</span> <span class="p">{</span> <span class="o">...</span> <span class="p">}</span>
<span class="nc">.header</span> <span class="p">{</span> <span class="o">...</span> <span class="p">}</span>

<span class="c">/* Good example */</span>
<span class="nc">.tweet</span> <span class="p">{</span> <span class="o">...</span> <span class="p">}</span>
<span class="nc">.important</span> <span class="p">{</span> <span class="o">...</span> <span class="p">}</span>
<span class="nc">.tweet-header</span> <span class="p">{</span> <span class="o">...</span> <span class="p">}</span></code></pre></div>
  </div>
</div>

<div class="section" id="selectors">
  <div class="col">
    <h3>Selectors</h3>
    <ul>
      <li>Use classes over generic element tag for optimum rendering performance.</li>
      <li>Avoid using several attribute selectors (e.g., <code>[class^="..."]</code>) on commonly occuring components. Browser performance is known to be impacted by these.</li>
      <li>Keep selectors short and strive to limit the number of elements in each selector to three.</li>
      <li>Scope classes to the closest parent <strong>only</strong> when necessary (e.g., when not using prefixed classes).</li>
    </ul>
    <p>Additional reading:</p>
    <ul>
      <li><a href="http://markdotto.com/2012/02/16/scope-css-classes-with-prefixes/">Scope CSS classes with prefixes</a></li>
      <li><a href="http://markdotto.com/2012/03/02/stop-the-cascade/">Stop the cascade</a></li>
    </ul>
  </div>
  <div class="col">
    <div class="highlight"><pre><code class="language-css" data-lang="css"><span class="c">/* Bad example */</span>
<span class="nt">span</span> <span class="p">{</span> <span class="o">...</span> <span class="p">}</span>
<span class="nc">.page-container</span> <span class="nf">#stream</span> <span class="nc">.stream-item</span> <span class="nc">.tweet</span> <span class="nc">.tweet-header</span> <span class="nc">.username</span> <span class="p">{</span> <span class="o">...</span> <span class="p">}</span>
<span class="nc">.avatar</span> <span class="p">{</span> <span class="o">...</span> <span class="p">}</span>

<span class="c">/* Good example */</span>
<span class="nc">.avatar</span> <span class="p">{</span> <span class="o">...</span> <span class="p">}</span>
<span class="nc">.tweet-header</span> <span class="nc">.username</span> <span class="p">{</span> <span class="o">...</span> <span class="p">}</span>
<span class="nc">.tweet</span> <span class="nc">.avatar</span> <span class="p">{</span> <span class="o">...</span> <span class="p">}</span></code></pre></div>
  </div>
</div>

<div class="section" id="organization">
  <div class="col">
    <h3>Organization</h3>
    <ul>
      <li>Organize sections of code by component.</li>
      <li>Develop a consistent commenting hierarchy.</li>
      <li>Use consistent white space to your advantage when separating sections of code for scanning larger documents.</li>
      <li>When using multiple CSS files, break them down by component instead of page. Pages can be rearranged and components moved.</li>
    </ul>
  </div>
  <div class="col">
    <div class="highlight"><pre><code class="language-css" data-lang="css"><span class="c">/*</span>
<span class="c"> * Component section heading</span>
<span class="c"> */</span>

<span class="nc">.element</span> <span class="p">{</span> <span class="o">...</span> <span class="p">}</span>


<span class="c">/*</span>
<span class="c"> * Component section heading</span>
<span class="c"> *</span>
<span class="c"> * Sometimes you need to include optional context for the entire component. Do that up here if it&#39;s important enough.</span>
<span class="c"> */</span>

<span class="nc">.element</span> <span class="p">{</span> <span class="o">...</span> <span class="p">}</span>

<span class="c">/* Contextual sub-component or modifer */</span>
<span class="nc">.element-heading</span> <span class="p">{</span> <span class="o">...</span> <span class="p">}</span></code></pre></div>
  </div>
</div>



<footer class="footer">
  <img src="assets/img/eview360-logo.jpg" width="200"><br>
  <p>All information here is considered to be private and should not be shared outside of Eview360</p>
  <p> This cool guy (<a href="http://codeguide.co/" target="_blank">codeguide.co</a>) created this template and we just altered it for our personal experience.</p>
</footer>

  </body>
</html>
