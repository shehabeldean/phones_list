<p>List phone numbers with validaty state based on country regex</p>
<div class="snippet-clipboard-content position-relative overflow-auto">
<pre>
<code>
composer install
</code>
</pre>
</div>

<p>copy .env.example to .env</p>
<div class="snippet-clipboard-content position-relative overflow-auto">
<pre>
<code>
cp .env.example .env
set DB_CONNECTION=sqlite
</code>
</pre>
</div>


<p>mv sqllite file to database folder</p>
<div class="snippet-clipboard-content position-relative overflow-auto">
<pre>
<code>
cp {database-file} database/database.sqlite
</code>
</pre>
</div>

<p>generate a new app key</p>
<div class="snippet-clipboard-content position-relative overflow-auto">
<pre>
<code>
php artisan key:generate
</code>
</pre>
</div>

<p>run database migrations (set sqlite database before this step)</p>
<div class="snippet-clipboard-content position-relative overflow-auto">
<pre>
<code>
php artisan migrate
</code>
</pre>
</div>


<p>run seeders to insert countries to country table</p>
<div class="snippet-clipboard-content position-relative overflow-auto">
<pre>
<code>
php artisan db:seed
</code>
</pre>
</div>


<p>start app</p>
<div class="snippet-clipboard-content position-relative overflow-auto">
<pre>
<code>
php artisan serve
</code>
</pre>
</div>