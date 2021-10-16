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
</code>
</pre>
</div>
<p>set DB_CONNECTION=sqllite</p>


<p>mv sqllite file to database folder</p>
<div class="snippet-clipboard-content position-relative overflow-auto">
<pre>
<code>
cp {database-file} Database/database.sqlite
</code>
</pre>
</div>

<div class="snippet-clipboard-content position-relative overflow-auto">
<pre>
<code>
php artisan key:generate
</code>
</pre>
</div>

<div class="snippet-clipboard-content position-relative overflow-auto">
<pre>
<code>
php artisan migrate
</code>
</pre>
</div>

<div class="snippet-clipboard-content position-relative overflow-auto">
<pre>
<code>
php artisan db:seed
</code>
</pre>
</div>