SOURCES := $(wildcard spec/tenant-*-v2.yml)
MODULES := $(SOURCES:spec/tenant-%-v2.yml=%)

.PHONY: all

all: ${MODULES}

%:
	@php build.php $@
	@rm -Rf build
