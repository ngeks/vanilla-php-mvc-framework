<h1 class="code-line" data-line-start=0 data-line-end=1 ><a id="Vanilla_PHP_MVC_Framework_0"></a>Vanilla PHP MVC Framework</h1>
<p class="has-line-data" data-line-start="1" data-line-end="2"><a href="https://www.buymeacoffee.com/ngeks"><img src="https://www.buymeacoffee.com/assets/img/custom_images/orange_img.png" alt="&amp;quot;Buy Me A Coffee&amp;quot;"></a></p>
<p class="has-line-data" data-line-start="3" data-line-end="4">A simple CRUD application created with vanilla PHP following MVC model and object-oriented programming.</p>
<h3 class="code-line" data-line-start=5 data-line-end=6 ><a id="REQUIREMENTS_5"></a>REQUIREMENTS</h3>
<ul>
<li class="has-line-data" data-line-start="6" data-line-end="7">You must have <code>PHP</code> installed on your computer.</li>
<li class="has-line-data" data-line-start="7" data-line-end="9">You must have <code>mysql</code> installed on your computer.</li>
</ul>
<h3 class="code-line" data-line-start=9 data-line-end=10 ><a id="INSTRUCTIONS_9"></a>INSTRUCTIONS</h3>
<ol>
<li class="has-line-data" data-line-start="10" data-line-end="15">
<p class="has-line-data" data-line-start="10" data-line-end="11">Clone the repository</p>
<pre><code class="has-line-data" data-line-start="12" data-line-end="14">https://github.com/ngeks/vanilla-php-mvc-framework.git
</code></pre>
</li>
<li class="has-line-data" data-line-start="15" data-line-end="19">
<p class="has-line-data" data-line-start="15" data-line-end="16">Navigate inside the folder</p>
<pre><code class="has-line-data" data-line-start="17" data-line-end="19">cd vanilla-php-mvc-framework
</code></pre>
</li>
<li class="has-line-data" data-line-start="19" data-line-end="21">
<p class="has-line-data" data-line-start="19" data-line-end="20">Create a database then import <code>sql.db</code></p>
</li>
<li class="has-line-data" data-line-start="21" data-line-end="49">
<p class="has-line-data" data-line-start="21" data-line-end="22">Set configuration variables.</p>
<pre><code class="has-line-data" data-line-start="23" data-line-end="34">// URL Root
define('URLROOT', '_URL_ROOT_HERE_');
// Site Name
define('SITENAME', '_SITE_NAME_HERE_');

// DB Config
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'sandbox');
</code></pre>
<p class="has-line-data" data-line-start="35" data-line-end="36">Example:</p>
<pre><code class="has-line-data" data-line-start="37" data-line-end="48">// URL Root
define('URLROOT', 'http://localhost/vanilla-php-mvc-framework');
// Site Name
define('SITENAME', 'Vanilla PHP MVC Framework');

// DB Congig
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', 'password');
define('DB_NAME', 'dbname');
</code></pre>
</li>
<li class="has-line-data" data-line-start="49" data-line-end="65">
<p class="has-line-data" data-line-start="49" data-line-end="50">If you changed the application folder name. Open <code>/public/.htaccess</code> file then update line 4.</p>
<pre><code class="has-line-data" data-line-start="51" data-line-end="60">&lt;IfModule mod_rewrite.c&gt;
  Options -Multiviews
  RewriteEngine On
  RewriteBase /vanilla-php-mvc-framework/public
  RewriteCond %{REQUEST_FILENAME} !-d
  RewriteCond %{REQUEST_FILENAME} !-f
  RewriteRule  ^(.+)$ index.php?url=$1 [QSA,L]
&lt;/IfModule&gt;
</code></pre>
<p class="has-line-data" data-line-start="61" data-line-end="62">Example:</p>
<pre><code class="has-line-data" data-line-start="63" data-line-end="65">RewriteBase /whatever-folder-name/public
</code></pre>
</li>
<li class="has-line-data" data-line-start="65" data-line-end="70">
<p class="has-line-data" data-line-start="65" data-line-end="66">Run command</p>
<pre><code class="has-line-data" data-line-start="67" data-line-end="69">php -S localhost:8000 -t public
</code></pre>
</li>
</ol>
<h2 class="code-line" data-line-start=70 data-line-end=71 ><a id="LICENSE_70"></a>LICENSE</h2>
<p class="has-line-data" data-line-start="71" data-line-end="72"><a href="https://github.com/ngeks/lazada-price-drop-alerts/blob/main/LICENSE"><img src="https://img.shields.io/github/license/ngeks/vanilla-php-mvc-framework.svg" alt="GitHub license"></a></p>
<h2 class="code-line" data-line-start=73 data-line-end=74 ><a id="CONTACT_ME_73"></a>CONTACT ME</h2>
<ul>
<li class="has-line-data" data-line-start="74" data-line-end="75">Repository: <a href="https://github.com/ngeks/lazada-price-drop-alerts">https://github.com/ngeks/lazada-price-drop-alerts</a></li>
<li class="has-line-data" data-line-start="75" data-line-end="76">Twitter: <a href="https://twitter.com/ngeksdev">@ngeksdev</a></li>
<li class="has-line-data" data-line-start="76" data-line-end="77">Email: <a href="mailto:ngeksdev@gmail.com">ngeksdev@gmail.com</a></li>
</ul>