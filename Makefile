BASEDIR		:= $(shell pwd)

all: prepare generate

prepare:
	find $(BASEDIR)/proto/ \
		-type f \
		-exec sed -i -e 's/Diadoc.Api.Proto/Antlena.SDK.Diadoc.Proto/' {} \;

clean:
	rm -rf $(BASEDIR)/src/Proto;

generate: clean
	php $(BASEDIR)/vendor/bin/protobuf \
		--generate-imported \
		--include-descriptors \
		--psr4 'Antlena\SDK\Diadoc\' \
		-i $(BASEDIR)/proto/ \
		-o $(BASEDIR)/src/ \
		$(BASEDIR)/proto/**/*.proto \
		$(BASEDIR)/proto/*.proto
