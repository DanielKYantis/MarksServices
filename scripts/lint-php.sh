#!/usr/bin/env bash
set -euo pipefail
find . -name '*.php' -not -path './vendor/*' -print0 | xargs -0 -n1 php -l
