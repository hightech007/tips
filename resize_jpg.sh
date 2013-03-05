#!/bin/sh 
for i in *.jpg; do echo "$i"; convert "$i" -quality 95 -resize 200x "$i"; done
