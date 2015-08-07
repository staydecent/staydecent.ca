#!/bin/bash
# creates an empty post dir/file
slug=$(date +%Y-%m-%d)
slug="$slug-$2"

# cd to cat dir, so it exists
cd ./src/entries/$1
mkdir $slug
touch ./$slug/content.md

cat <<EOF > ./$slug/content.md
title: $2
---

EOF

echo "Created ./src/entries/$1/$slug"
