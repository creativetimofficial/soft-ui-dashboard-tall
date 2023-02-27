set -eu
set -o pipefail
echo "Deploy script started"
cd /usr/share/nginx/html/soft_ui_dashboard_tall_free/ # go to project repository on the server
git fetch --all
php8.1 artisan down
git reset --hard origin/main
php8.1 /usr/local/bin/composer install --no-interaction #install php part
php8.1 artisan migrate:fresh --seed
php8.1 artisan optimize:clear
php8.1 artisan view:clear
php8.1 artisan route:clear
php8.1 artisan config:clear
php8.1 artisan view:cache
php8.1 artisan route:cache
php8.1 artisan storage:link
chown -R www-data:www-data /usr/share/nginx/html/soft_ui_dashboard_tall_free/ #change here too project repository
php8.1 artisan up
source ~/.nvm/nvm.sh
nvm use 16
npm install
npm run build
echo "Deploy script finished execution"
