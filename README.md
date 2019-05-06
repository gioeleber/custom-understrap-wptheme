# Custom understrap wptheme

This Theme is a customisation and implementation of the popular understrap free wp theme. It is a really solid base for all your wp custom theme projects.

### Prerequisites

To install the theme you need to install the latest version of wordpress on your local machine or live server (WordPress 5.1.1 tested).

The theme use [Node.js](https://nodejs.org/) to compile the stylesheets (they are written in SASS) and a lot more, so you need to install Node.js on your local machine from the official website. Test that it is installed running:

```
node -v
```

if the output is something along the lines of:

```
8.20.0
```

you should be good to go.

## Installing

Copy the theme folder on the wp-content/themes folder and then go to the admin side of youre WordPress installation, then Apparance > Themes and select the understrap theme.

The Custom Understrap theme should be the current theme of you site

## Built With

* [Bootstrap 4.2](https://getbootstrap.com/) - As the css framework
* [Gulp](https://gulpjs.com/) - As the task runner
* [jQuery](https://jquery.com/) - It is preinstalled on WordPress and it is necessary for Bootstrap so it can be used

## Developement and Customization

To use Gulp as the task runner you first need to set the url in wich you are runnig your local wordpress site on the gulpconfig.json file.

It shoud look like:

```
    "proxy": "http://path/to/your/local/site",
```

Now open a bash (if you are on a windows machine you can use [Git Bash](https://git-scm.com/downloads)) on the root folder of the theme and run:

```
gulp serve
```

It shold launch BrowserSync and open a tab on your defaul browser on: localhost://3000.

Now all your file are under watch, every time you modify/add/delete a file and then save, the tab will be updated to show the latest version.

To add javascript scripts just add them in the src/js/module.js file or create a new file, when you save it, gulp will automatically combine all the files in the src/js/ folder and minify them.

To customise the stylesheets you can update the bootstrap variables via the sass/theme/theme-variables.scss file and you can add styles in the module folder.

## Deployment

The theme shold be developed on a local server and then the folder should be copied in the wp-content/themes folder of the live server folder.

## Authors

* **Gioele Bernardi** - *Initial work* - [Gioele Bernardi](https://www.gioelebernardi.it)

## License

This project is licensed under the MIT License - see the [LICENSE.md](LICENSE.md) file for details

## Acknowledgments

* (Understrap)[https://understrap.com/]
