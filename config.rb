#
# SASS/SCSS Config file
# special thanks to https://www.elegantthemes.com/blog/tips-tricks/how-to-use-sass-with-wordpress-a-step-by-step-guide
#
http_path = "/" #root level target path
css_dir = "." #targets our default style.css file at the root level of our theme
sass_dir = "sass" #targets our sass directory
images_dir = "images" #targets our pre existing image directory
javascripts_dir = "js" #targets our JavaScript directory

# You can select your preferred output style here (can be overridden via the command line):
# output_style = :expanded or :nested or :compact or :compressed
output_style = :compact

# To enable relative paths to assets via compass helper functions.
# note: this is important in wordpress themes for sprites

relative_assets = true