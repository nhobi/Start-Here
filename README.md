## Start-Here WordPress Theme
A simple WordPress theme boilerplate. Uses a lot of [BlankSlate](https://wordpress.org/themes/blankslate/)'s base code but adds code indentation, a gruntfile, and some other goodness.

### Stuff It Has
* Prebuilt ```gruntfile.js``` which uses [grunt-contrib-less](https://www.npmjs.com/package/grunt-contrib-less), [grunt-postcss](https://www.npmjs.com/package/grunt-postcss) (with [autoprefixer](https://www.npmjs.com/package/autoprefixer-core)), and [grunt-contrib-watch](https://www.npmjs.com/package/grunt-contrib-watch)
* A ```bower.json``` file that contains popular front-end packages
* Pre-registered ACF options page
* Hook for adding a responsive container (```.video-container```) around WordPress' sweet automatic WYSIWYG video embeds
* Some basic LESS code organization

### System Requirements
* [NPM (Node.js)](https://nodejs.org/)
* Grunt.js command line utility ```npm install -g grunt-cli```
* Bower command line utility ```npm install -g bower```

### Setup
1. Using your favorite editor, run a find-and-replace, replacing 'Start-Here' and 'starthere' for whatever you want to name your custom theme.
2. Assuming the requirements are met, open your terminal, ```cd``` into the theme directory and run ```npm install``` (you'll only have to do this once per project). After all your NPM packages have been installed, run ```bower install``` to install front-end dependencies.
3. Run ```grunt```.
4. Develop the crap out of your custom theme.
