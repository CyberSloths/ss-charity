SERVER_DIR=/var/www/mysite/www

.PHONY: init
init:
	vagrant ssh -- "cd $(SERVER_DIR) && sudo composer selfupdate -n -v && composer install -n -v"
	yarn
	yarn dev
	cd .storybook && yarn

.PHONY: setup_style
setup_style:
	yarn dev
	vagrant ssh -- "cd $(SERVER_DIR) && sudo composer selfupdate -n -v && composer vendor-expose"

.PHONY: storybook
storybook:
	cd .storybook && yarn storybook
