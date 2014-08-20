# Agile Open Northwest.com

## Building

To install Grunt, you must first download and install node.js (which includes npm). npm stands for node packaged modules and is a way to manage development dependencies through node.js.

Then, from the command line:
- Install grunt-cli globally with npm install -g grunt-cli.
- Navigate to the root /bootstrap/ directory, then run npm install. npm will look at the package.json file and automatically install the necessary local dependencies listed there.

When completed, you'll be able to run the various Grunt commands provided from the command line.

### Available Grunt commands

    grunt dist (Just compile CSS and JavaScript)

Regenerates the /dist/ directory with compiled and minified CSS and JavaScript files. As a Bootstrap user, this is normally the command you want.

    grunt watch (Watch)

Watches the Less source files and automatically recompiles them to CSS whenever you save a change.

    grunt test (Run tests)

Runs JSHint and runs the QUnit tests headlessly in PhantomJS.

    grunt (Build absolutely everything and run tests)

Compiles and minifies CSS and JavaScript, builds the documentation website, runs the HTML5 validator against the docs, regenerates the Customizer assets, and more. Usually only necessary if you're hacking on Bootstrap itself.


## Deploy

hopefully soon something like

    rsync...

## Grab participant list from eventbrite

something like

    bin/grab.rb

