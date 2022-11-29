docker run --rm -v "${PWD}:/local" openapitools/openapi-generator-cli generate \
    -i /local/schemas/full-v2.yml \
    -g php \
    --additional-properties=invokerPackage=Clever,packageName=wayside-publishing/clever-php \
    -o /local/
