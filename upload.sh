#!/usr/bin/env bash

rsync -avP dist lib screenshot.png templates *.php *.css delapiedra:/srv/www/delapiedralawfirm.com/current/web/wp/wp-content/themes/immaterial
