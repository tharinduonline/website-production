## Foss LK Sri lanka (Laravel Version 5.4)

<h3><a id="user-content-installation" class="anchor" aria-hidden="true" href="#installation"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>Installation</h3>
<ul>
<li>type <code>git clone respoURL projectname</code> to clone the repository</li>
<li>type <code>cd projectname</code></li>
<li>type <code>composer install</code></li>
<li>type <code>composer update</code></li>
<li>copy <em>.env.example</em> to <em>.env</em></li>
<li>type <code>php artisan key:generate</code>to regenerate secure key</li>
<li>if you use MySQL in <em>.env</em> file :
<ul>
<li>set DB_CONNECTION</li>
<li>set DB_DATABASE</li>
<li>set DB_USERNAME</li>
<li>set DB_PASSWORD</li>
</ul>
</li>
</li>
<li>type <code>php artisan migrate --seed</code> to create and populate tables</li>
<li>edit <em>.env</em> for emails configuration</li>

</ul>

<h3><a id="user-content-tests" class="anchor" aria-hidden="true" href="#tests"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>Tests</h3>
<p>When you want to launch the tests first rollback the database :</p>
<p><code>php artisan migrate:rollback</code></p>
<p>Then migrate and seed :</p>
<p><code>php artisan migrate --seed</code></p>
<p>You can then use PHPUnit</p>
</article>
