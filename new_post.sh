#!/bin/bash
# creates an empty post dir/file
date=$(date +%Y-%m-%d)
slug=$(echo "$2" | iconv -t ascii//TRANSLIT | sed -E s/[^a-zA-Z0-9]+/-/g | sed -E s/^-+\|-+$//g | tr A-Z a-z)
slug="$date-$slug"

# cd to cat dir, so it exists
cd ./src/entries/$1
mkdir $slug
touch ./$slug/content.md

cat <<EOF > ./$slug/content.md
title: $2
---

EOF

echo "Created ./src/entries/$1/$slug"
