cd /path/to/codebase

wp core download --locale=en_US --version=5.7 --path=.

wp config create --dbname=wordpress --dbuser=root --dbpass=root

wp core install --url="http://localhost" --title="Local WordPress Site" --admin_user="admin" --admin_password="password" --admin_email="admin@example.com"

wp plugin activate chat-plugin
