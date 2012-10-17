#!/bin/sh

mkdir tmp
cd tmp

# helper.css
git clone git://github.com/xaguilars/helper.css.git
mv helper.css/helper.css ../static/assets/css/vendor/helper.css
rm -rf helper.css

# Font Awesome Xtra
git clone git://github.com/xaguilars/font-awesome-xtra.git
mv -n font-awesome-xtra/css/* ../static/assets/css/vendor/
mv font-awesome-xtra/font/ ../static/assets/font
rm -rf font-awesome-xtra

cd ..
rm -rf tmp