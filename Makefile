SOURCES := $(wildcard spec/tenant-*-v2.yml)
MODULES := $(SOURCES:spec/tenant-%-v2.yml=%)

.PHONY: all

all: ${MODULES}

%:
	npx @openapitools/openapi-generator-cli generate -i spec/tenant-$@-v2.yml -g php -c openapi-config.yml
