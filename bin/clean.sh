#!/usr/bin/env bash

set -e


echo 'Making deploy packages...'

rm -rfv .git
rm -rfv .gitattributes
rm -rfv .gitignore
rm -rfv bin
rm -rfv tests
rm -rfv vendor
rm -rfv composer.lock
rm -rfv phpunit.xml.dist
rm -rfv phpcs.ruleset.xml
