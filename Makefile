SASS = ./node_modules/.bin/sass
SRC = assets/scss/style.scss
DIST = assets/dist/css/style.css

all: build

build:
	$(SASS) --style=compressed $(SRC) $(DIST)

watch:
	$(SASS) --watch $(SRC):$(DIST) --style=compressed --quiet

clean:
	rm $(DIST)