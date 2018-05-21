
OUPUT_DIR=dist/
HTML=index.php

ALL_TARGETS = html css js

all: clean $(ALL_TARGETS)


clean_html:
	rm -f dist/*.html

clean_css:
	rm -f dist/*.css
	rm -f dist/*.css.*

clean_js:
	rm -f dist/*.js
	rm -f dist/*.js.*

clean: clean_html clean_css clean_js

css: clean_css 
	npm run build-css
js: clean_js
	npm run build-js

html: clean_html
	npm run build-html; \
    cp -r img/ dist/

.PHONY: css js html