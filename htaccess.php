RewriteEngine on
RewriteCond %{HTTP_HOST} ^YOURDOMAINNAME.com$ [NC,OR]
RewriteCond %{HTTP_HOST} ^www.YOURDOMAINNAME.com$
RewriteCond %{REQUEST_URI} !public_html/
RewriteRule (.*) /public_html/$1 [L]