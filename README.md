## Start-Here WordPress Theme
A simple WordPress theme boilerplate. Uses a lot of [BlankSlate](https://wordpress.org/themes/blankslate/)'s base code but adds code indentation, a gruntfile, and some other goodness.

### Stuff It Has
* Prebuilt ```gruntfile.js``` which uses [grunt-contrib-less](https://www.npmjs.com/package/grunt-contrib-less), [grunt-postcss](https://www.npmjs.com/package/grunt-postcss) (with [autoprefixer](https://www.npmjs.com/package/autoprefixer-core)), and [grunt-contrib-watch](https://www.npmjs.com/package/grunt-contrib-watch)
* Grunt.js (globally on system) ```npm install -g grunt-cli```
* Pre-registered ACF options page
* Hook for adding a responsive container (```.video-container```) around WordPress' sweet automatic WYSIWYG video embeds
* Some basic LESS code organization

### Requirements
* [NPM (Node.js)](https://nodejs.org/)
* Grunt.js (globally on system) ```npm install -g grunt-cli```

### Setup
1. Using your favorite editor, run a find-and-replace, replacing 'Start-Here' and 'starthere' for whatever you want to name your custom theme
2. Assuming the requirements are met, open your terminal, ```cd``` into the theme directory and run ```npm install``` (you'll only have to do this once per project)
3. Run ```grunt```
4. Develop the crap out of your custom theme
