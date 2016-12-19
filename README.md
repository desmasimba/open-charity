# Project Title

Open Charity Drupal 7 HTML/CSS Theme

### Description

Open charity is an organisation that hosts events in London about open source software and solution for charities.

### Installing

Copy and paste the folder 'open_charity_theme' in your drupal themes folder 'sites/all/themes/'

```
Activate
```
Go to admin > appearance > select your new theme > make it default. You are good to go!

## Solution

The solution was to create a new drupal theme from scratch, utilizing HTML and CSS.

### Steps taken

```
Step 1
```

Started of with the theme .info file where I defined my theme name, stylesheets and theme regions or layout. 

```
Step 2
```

Created the 'page.tpl.php' file. This one was a bit complex as I had to put in some PHP skills to work in rendering my regions. The great part was defining my classes and other DIVs to come up with the most efficient to organise my content. Here I also decided to add a div with class 'inner or region-inner' for region to allow me to control my paddings and max-widths without distorting the overall layout of the theme.
    
```
Step 3
```

I moved onto create 'Content Types and Views' that I required for the Events, Our Members and Blog sections. For Blog and Our members sections, I also used an external module 'jcarousel' to create the carousel on the home page.

```
Step 4
```

Moved onto the 'style.css' file which I enjoyed the most. First a challenge in trying to get the right fonts 'Museo 300 and 500' as in the design. The challenge was the font was for sale on most sites that I came across, but eventually, I found the fonts available as free downloads, hence accessing them locally.


## Built With

* CSS
* HTML

## Contributing

Please feel free to make suggestions.

## Authors

* Desmond Mpofu

## Acknowledgments

* Compucorp


