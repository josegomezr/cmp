
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
	for view in $(HTML); do \
		PROD=1 php $$view > "dist/$$view.html"\
        ; \
        rename 's/.php.html/.html/g' dist/*.html; \
        rename 's/.php.html/.html/g' dist/*.html; \
    done; \
    sed -i 's#placeholder.php#https://placehold.it#g' dist/*.html; \
    sed -i 's#dist/##g' dist/*.html; \
    cp -r img/ dist/

.PHONY: css js html