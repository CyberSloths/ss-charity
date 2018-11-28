SERVER_DIR=/var/www/mysite/www

.PHONY: init
init:
	vagrant ssh -- "cd $(SERVER_DIR) && sudo composer selfupdate -n -v && composer install -n -v"
	yarn
	yarn dev
	cd .storybook && yarn

.PHONY: style_dev
style_dev:
	yarn dev
	vagrant ssh -- "cd $(SERVER_DIR) && sudo composer selfupdate -n -v && composer vendor-expose"

.PHONY: style_prod
style_prod:
	yarn production
	vagrant ssh -- "cd $(SERVER_DIR) && sudo composer selfupdate -n -v && composer vendor-expose"

.PHONY: storybook
storybook:
	cd .storybook && yarn storybook
